<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // help
        if (0 === strpos($pathinfo, '/json') && preg_match('#^/json/(?P<id>[^/]+?)/help$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::helpAction',)), array('_route' => 'help'));
        }

        // insertHelp
        if (0 === strpos($pathinfo, '/json') && preg_match('#^/json/(?P<idUser>[^/]+?)/(?P<amount>[^/]+?)/(?P<text>[^/]+?)/(?P<reproducible>[^/]+?)/insertHelp$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::insertHelpAction',)), array('_route' => 'insertHelp'));
        }

        // testConnect
        if (0 === strpos($pathinfo, '/json') && preg_match('#^/json/(?P<email>[^/]+?)/(?P<password>[^/]+?)/testConnect$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::testConnectAction',)), array('_route' => 'testConnect'));
        }

        // savePosition
        if (0 === strpos($pathinfo, '/json') && preg_match('#^/json/(?P<idUser>[^/]+?)/(?P<lat>[^/]+?)/(?P<long>[^/]+?)/savePosition$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::savePositionAction',)), array('_route' => 'savePosition'));
        }

        // insertUser
        if (0 === strpos($pathinfo, '/json') && preg_match('#^/json/(?P<login>[^/]+?)/(?P<password>[^/]+?)/(?P<birthdate>[^/]+?)/(?P<email>[^/]+?)/(?P<name>[^/]+?)/(?P<firstname>[^/]+?)/insertUser$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::insertJoueurAction',)), array('_route' => 'insertUser'));
        }

        // role
        if (rtrim($pathinfo, '/') === '/role') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'role');
            }
            return array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\RoleController::indexAction',  '_route' => 'role',);
        }

        // role_show
        if (0 === strpos($pathinfo, '/role') && preg_match('#^/role/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\RoleController::showAction',)), array('_route' => 'role_show'));
        }

        // role_new
        if ($pathinfo === '/role/new') {
            return array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\RoleController::newAction',  '_route' => 'role_new',);
        }

        // role_create
        if ($pathinfo === '/role/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_role_create;
            }
            return array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\RoleController::createAction',  '_route' => 'role_create',);
        }
        not_role_create:

        // role_edit
        if (0 === strpos($pathinfo, '/role') && preg_match('#^/role/(?P<id>[^/]+?)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\RoleController::editAction',)), array('_route' => 'role_edit'));
        }

        // role_update
        if (0 === strpos($pathinfo, '/role') && preg_match('#^/role/(?P<id>[^/]+?)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_role_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\RoleController::updateAction',)), array('_route' => 'role_update'));
        }
        not_role_update:

        // role_delete
        if (0 === strpos($pathinfo, '/role') && preg_match('#^/role/(?P<id>[^/]+?)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_role_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\RoleController::deleteAction',)), array('_route' => 'role_delete'));
        }
        not_role_delete:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
