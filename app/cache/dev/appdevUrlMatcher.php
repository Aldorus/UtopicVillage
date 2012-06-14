<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

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
