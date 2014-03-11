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

        // lean_rest_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lean_rest_homepage')), array (  '_controller' => 'Lean\\RestBundle\\Controller\\DefaultController::indexAction',));
        }

        // lean_admin_homepage
        if (0 === strpos($pathinfo, '/contacts') && preg_match('#^/contacts/(?P<page>[0-9]+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lean_admin_homepage')), array (  '_controller' => 'Lean\\AdminBundle\\Controller\\DefaultController::indexAction',));
        }

        // contact_query
        if (0 === strpos($pathinfo, '/query') && preg_match('#^/query/(?P<id>[0-9]+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'contact_query')), array (  '_controller' => 'Lean\\AdminBundle\\Controller\\DefaultController::queryAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
