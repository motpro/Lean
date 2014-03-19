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
        'lean_login_homepage' => array (  0 =>   array (    0 => 'type',  ),  1 =>   array (    '_controller' => 'Lean\\LoginBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (    'type' => 'username|email|id',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => 'username|email|id',      3 => 'type',    ),    1 =>     array (      0 => 'text',      1 => '/get_current_user',    ),  ),  4 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),),
        'rest_add_user_' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Lean\\RestBundle\\Controller\\UserController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/rest/add_user',    ),  ),  4 =>   array (  ),),
        'rest_search_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Lean\\RestBundle\\Controller\\ContactController::searchAction',  ),  2 =>   array (    'key' => 'id|username|name|email|job|company|phone|mobile',    'value' => '.+',    'limit' => '\\d+',    'start' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search_contact',    ),  ),  4 =>   array (  ),),
        'index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Lean\\AdminBundle\\Controller\\WelcomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'contact_home' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'Lean\\AdminBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (    'page' => '[0-9]+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[0-9]+',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/contacts',    ),  ),  4 =>   array (  ),),
        'contact_query' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Lean\\AdminBundle\\Controller\\DefaultController::queryAction',  ),  2 =>   array (    'id' => '[0-9]+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[0-9]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/query',    ),  ),  4 =>   array (  ),),
        'corporation_home' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'Lean\\AdminBundle\\Controller\\CorporationController::indexAction',  ),  2 =>   array (    'page' => '[0-9]+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[0-9]+',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/corporation',    ),  ),  4 =>   array (  ),),
        'search_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Lean\\AdminBundle\\Controller\\SearchController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search',    ),  ),  4 =>   array (  ),),
        'search_result_return' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Lean\\AdminBundle\\Controller\\SearchController::ResultAction',  ),  2 =>   array (    'method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search_result',    ),  ),  4 =>   array (  ),),
        'add_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Lean\\AdminBundle\\Controller\\AddController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add',    ),  ),  4 =>   array (  ),),
        'add_data' => array (  0 =>   array (    0 => 'type',  ),  1 =>   array (    '_controller' => 'Lean\\AdminBundle\\Controller\\AddController::indexAction',  ),  2 =>   array (    'type' => 'user|contact|company|opportunity',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => 'user|contact|company|opportunity',      3 => 'type',    ),    1 =>     array (      0 => 'text',      1 => '/add',    ),  ),  4 =>   array (  ),),
        'adminlist_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Lean\\AdminBundle\\Controller\\AdminlistController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/adminlist_index',    ),  ),  4 =>   array (  ),),
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
