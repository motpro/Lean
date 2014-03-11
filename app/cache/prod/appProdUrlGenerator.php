<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'rest_contact' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_controller' => 'Lean\\RestBundle\\Controller\\UserController::contactAction',  ),  2 =>   array (    'id' => '[0-9]+',    '_format' => 'html|json|xml',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'html|json|xml',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[0-9]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/rest/contact',    ),  ),  4 =>   array (  ),),
        'index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Lean\\AdminBundle\\Controller\\WelcomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'contact_home' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'Lean\\AdminBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (    'page' => '[0-9]+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[0-9]+',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/contacts',    ),  ),  4 =>   array (  ),),
        'contact_query' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Lean\\AdminBundle\\Controller\\DefaultController::queryAction',  ),  2 =>   array (    'id' => '[0-9]+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[0-9]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/query',    ),  ),  4 =>   array (  ),),
        'corporation_home' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'Lean\\AdminBundle\\Controller\\CorporationController::indexAction',  ),  2 =>   array (    'page' => '[0-9]+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[0-9]+',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/corporation',    ),  ),  4 =>   array (  ),),
        'search_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Lean\\AdminBundle\\Controller\\SearchController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search',    ),  ),  4 =>   array (  ),),
        'search_result_return' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Lean\\AdminBundle\\Controller\\SearchController::ResultAction',  ),  2 =>   array (    'method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search_result',    ),  ),  4 =>   array (  ),),
        'add_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Lean\\AdminBundle\\Controller\\AddController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add',    ),  ),  4 =>   array (  ),),
        'add_data' => array (  0 =>   array (    0 => 'type',  ),  1 =>   array (    '_controller' => 'Lean\\AdminBundle\\Controller\\AddController::indexAction',  ),  2 =>   array (    'type' => 'user|contact|company|opportunity',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => 'user|contact|company|opportunity',      3 => 'type',    ),    1 =>     array (      0 => 'text',      1 => '/add',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
