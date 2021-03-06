<?php

/*
 * This file is part of the FOSRestBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\RestBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\DefinitionDecorator;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\Kernel;

use FOS\RestBundle\Util\Codes;

use FOS\RestBundle\FOSRestBundle;

class FOSRestExtension extends Extension
{
    /**
     * Loads the services based on your application configuration.
     *
     * @param array            $configs
     * @param ContainerBuilder $container
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $config = $this->processConfiguration(new Configuration(), $configs);

        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('view.xml');
        $loader->load('routing.xml');
        $loader->load('util.xml');
        $loader->load('request.xml');

        if (!empty($config['disable_csrf_role'])) {
            $loader->load('forms.xml');
            $container->setParameter('fos_rest.disable_csrf_role', $config['disable_csrf_role']);
        }

        $container->setParameter('fos_rest.cache_dir', $config['cache_dir']);

        $formats = array();
        foreach ($config['view']['formats'] as $format => $enabled) {
            if ($enabled) {
                $formats[$format] = false;
            }
        }
        foreach ($config['view']['templating_formats'] as $format => $enabled) {
            if ($enabled) {
                $formats[$format] = true;
            }
        }

        // The validator service alias is only set if validation is enabled for the request body converter
        $validator = $config['service']['validator'];
        unset($config['service']['validator']);

        foreach ($config['service'] as $key => $service) {
            $container->setAlias($this->getAlias().'.'.$key, $config['service'][$key]);
        }

        if (!empty($config['serializer']['version'])) {
            $container->setParameter($this->getAlias().'.serializer.exclusion_strategy.version', $config['serializer']['version']);
        }
        if (!empty($config['serializer']['groups'])) {
            $container->setParameter($this->getAlias().'.serializer.exclusion_strategy.groups', $config['serializer']['groups']);
        }
        $container->setParameter($this->getAlias().'.serializer.serialize_null', $config['serializer']['serialize_null']);

        $container->setParameter($this->getAlias().'.formats', $formats);
        $container->setParameter($this->getAlias().'.default_engine', $config['view']['default_engine']);

        foreach ($config['view']['force_redirects'] as $format => $code) {
            if (true === $code) {
                $config['view']['force_redirects'][$format] = Codes::HTTP_FOUND;
            }
        }
        $container->setParameter($this->getAlias().'.force_redirects', $config['view']['force_redirects']);

        if (!is_numeric($config['view']['failed_validation'])) {
            $config['view']['failed_validation'] = constant('\FOS\RestBundle\Util\Codes::'.$config['view']['failed_validation']);
        }
        $container->setParameter($this->getAlias().'.failed_validation', $config['view']['failed_validation']);

        if (!is_numeric($config['view']['empty_content'])) {
            $config['view']['empty_content'] = constant('\FOS\RestBundle\Util\Codes::'.$config['view']['empty_content']);
        }
        $container->setParameter($this->getAlias().'.empty_content', $config['view']['empty_content']);

        $container->setParameter($this->getAlias().'.serialize_null', $config['view']['serialize_null']);

        if (!empty($config['view']['view_response_listener'])) {
            $loader->load('view_response_listener.xml');
            $container->setParameter($this->getAlias().'.view_response_listener.force_view', 'force' === $config['view']['view_response_listener']);
        }

        $container->setParameter($this->getAlias().'.routing.loader.default_format', $config['routing_loader']['default_format']);
        $container->setParameter($this->getAlias().'.routing.loader.include_format', $config['routing_loader']['include_format']);

        foreach ($config['exception']['codes'] as $exception => $code) {
            if (!is_numeric($code)) {
                $config['exception']['codes'][$exception] = constant("\FOS\RestBundle\Util\Codes::$code");
            }
            $this->testExceptionExists($exception);
        }
        foreach ($config['exception']['messages'] as $exception => $message) {
            $this->testExceptionExists($exception);
        }

        $container->setParameter($this->getAlias().'.exception.codes', $config['exception']['codes']);
        $container->setParameter($this->getAlias().'.exception.messages', $config['exception']['messages']);

        if (!empty($config['body_listener'])) {
            $loader->load('body_listener.xml');

            $container->setParameter($this->getAlias().'.decoders', $config['body_listener']['decoders']);
        }

        if (!empty($config['format_listener']['rules'])) {
            $loader->load('format_listener.xml');

            foreach ($config['format_listener']['rules'] as $rule) {
                $matcher = $this->createRequestMatcher(
                    $container,
                    $rule['path'],
                    $rule['host']
                );

                unset($rule['path'], $rule['host']);
                if (is_bool($rule['prefer_extension']) && $rule['prefer_extension']) {
                    $rule['prefer_extension'] = '2.0';
                }

                $container->getDefinition($this->getAlias().'.format_negotiator')
                    ->addMethodCall('add', array($matcher, $rule));
            }
        }

        if (!empty($config['view']['exception_wrapper_handler'])) {
            $container->setParameter($this->getAlias().'.view.exception_wrapper_handler', $config['view']['exception_wrapper_handler']);
        }

        if (!empty($config['view']['jsonp_handler'])) {
            $handler = new DefinitionDecorator($config['service']['view_handler']);
            $handler->setPublic(true);

            $jsonpHandler = new Reference($this->getAlias().'.view_handler.jsonp');
            $handler->addMethodCall('registerHandler', array('jsonp', array($jsonpHandler, 'createResponse')));
            $container->setDefinition($this->getAlias().'.view_handler', $handler);

            $container->setParameter($this->getAlias().'.view_handler.jsonp.callback_param', $config['view']['jsonp_handler']['callback_param']);
            $container->setParameter($this->getAlias().'.view_handler.jsonp.callback_filter', $config['view']['jsonp_handler']['callback_filter']);

            if (empty($config['view']['mime_types']['jsonp'])) {
                $config['view']['mime_types']['jsonp'] = $config['view']['jsonp_handler']['mime_type'];
            }
        }

        if (!empty($config['view']['mime_types'])) {
            $loader->load('mime_type_listener.xml');

            $container->setParameter($this->getAlias().'.mime_types', $config['view']['mime_types']);
        } else {
            $container->setParameter($this->getAlias().'.mime_types', array());
        }

        if (!empty($config['param_fetcher_listener'])) {
            $loader->load('param_fetcher_listener.xml');

            if ('force' === $config['param_fetcher_listener']) {
                $container->setParameter($this->getAlias().'.param_fetcher_listener.set_params_as_attributes', true);
            }
        }

        if (!empty($config['allowed_methods_listener'])) {
            $loader->load('allowed_methods_listener.xml');
        }

        if (!empty($config['access_denied_listener'])) {
            $loader->load('access_denied_listener.xml');
            $container->setParameter($this->getAlias().'.access_denied_listener.formats', $config['access_denied_listener']);
        }

        if (!empty($config['body_converter'])) {
            if (!empty($config['body_converter']['enabled'])) {
                $loader->load('request_body_param_converter.xml');
            }
            if (!empty($config['body_converter']['validate'])) {
                $container->setAlias($this->getAlias().'.validator', $validator);
            }
            if (!empty($config['body_converter']['validation_errors_argument'])) {
                $container->setParameter(
                    'fos_rest.converter.request_body.validation_errors_argument',
                    $config['body_converter']['validation_errors_argument']
                );
            }
        }
    }

    /**
     * Check if an exception is loadable.
     *
     * @param  string                   $exception class to test
     * @throws InvalidArgumentException if the class was not found.
     */
    private function testExceptionExists($exception)
    {
        try {
            $reflectionExceptionClass = new \ReflectionClass("\Exception");
            $reflectionExceptionClass->isSubclassOf($exception);
        } catch (\ReflectionException $re) {
            throw new \InvalidArgumentException("FOSRestBundle exception mapper: Could not load class $exception. Most probably a problem with your configuration.");
        }
    }

    protected function createRequestMatcher(ContainerBuilder $container, $path = null, $host = null)
    {
        $arguments = array($path, $host);
        $serialized = serialize($arguments);
        $id = $this->getAlias().'.request_matcher.'.md5($serialized).sha1($serialized);

        if (!$container->hasDefinition($id)) {
            // only add arguments that are necessary
            $container
                ->setDefinition($id, new DefinitionDecorator($this->getAlias().'.request_matcher'))
                ->setArguments($arguments)
            ;
        }

        return new Reference($id);
    }
}
