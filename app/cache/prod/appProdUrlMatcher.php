<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // rest_contact
        if (0 === strpos($pathinfo, '/rest/contact') && preg_match('#^/rest/contact/(?P<id>[0-9]+)\\.(?P<_format>html|json|xml)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_contact')), array (  '_controller' => 'Lean\\RestBundle\\Controller\\UserController::contactAction',));
        }

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'Lean\\AdminBundle\\Controller\\WelcomeController::indexAction',  '_route' => 'index',);
        }

        // contact_home
        if (0 === strpos($pathinfo, '/contacts') && preg_match('#^/contacts/(?P<page>[0-9]+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'contact_home')), array (  '_controller' => 'Lean\\AdminBundle\\Controller\\DefaultController::indexAction',));
        }

        // contact_query
        if (0 === strpos($pathinfo, '/query') && preg_match('#^/query/(?P<id>[0-9]+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'contact_query')), array (  '_controller' => 'Lean\\AdminBundle\\Controller\\DefaultController::queryAction',));
        }

        // corporation_home
        if (0 === strpos($pathinfo, '/corporation') && preg_match('#^/corporation/(?P<page>[0-9]+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'corporation_home')), array (  '_controller' => 'Lean\\AdminBundle\\Controller\\CorporationController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/search')) {
            // search_home
            if ($pathinfo === '/search') {
                return array (  '_controller' => 'Lean\\AdminBundle\\Controller\\SearchController::indexAction',  '_route' => 'search_home',);
            }

            // search_result_return
            if ($pathinfo === '/search_result') {
                return array (  '_controller' => 'Lean\\AdminBundle\\Controller\\SearchController::ResultAction',  '_route' => 'search_result_return',);
            }

        }

        if (0 === strpos($pathinfo, '/add')) {
            // add_home
            if ($pathinfo === '/add') {
                return array (  '_controller' => 'Lean\\AdminBundle\\Controller\\AddController::indexAction',  '_route' => 'add_home',);
            }

            // add_data
            if (preg_match('#^/add/(?P<type>user|contact|company|opportunity)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_data')), array (  '_controller' => 'Lean\\AdminBundle\\Controller\\AddController::indexAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
