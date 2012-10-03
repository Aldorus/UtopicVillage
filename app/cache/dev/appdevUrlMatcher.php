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

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }
            return array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\HomeController::homeAction',  '_route' => 'home',);
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
        if (0 === strpos($pathinfo, '/json') && preg_match('#^/json/(?P<password>[^/]+?)/(?P<birthdate>[^/]+?)/(?P<email>[^/]+?)/(?P<name>[^/]+?)/(?P<firstname>[^/]+?)/(?P<description>[^/]+?)/insertUser$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::insertUserAction',)), array('_route' => 'insertUser'));
        }

        // updateUser
        if (0 === strpos($pathinfo, '/json') && preg_match('#^/json/(?P<idUser>[^/]+?)/(?P<birthdate>[^/]+?)/(?P<email>[^/]+?)/(?P<name>[^/]+?)/(?P<firstname>[^/]+?)/(?P<description>[^/]+?)/updateUser$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::updateUser',)), array('_route' => 'updateUser'));
        }

        // yourAskingHelp
        if (0 === strpos($pathinfo, '/json') && preg_match('#^/json/(?P<idUser>[^/]+?)/askingHelp$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::youAskingHelpAction',)), array('_route' => 'yourAskingHelp'));
        }

        // getNearAskingHelp
        if (0 === strpos($pathinfo, '/json') && preg_match('#^/json/(?P<userId>[^/]+?)/(?P<latitude>[^/]+?)/(?P<longitude>[^/]+?)/getNearAskingHelp$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::getNearAskingHelpAction',)), array('_route' => 'getNearAskingHelp'));
        }

        // insetNewVolunteer
        if (0 === strpos($pathinfo, '/json') && preg_match('#^/json/(?P<idUser>[^/]+?)/(?P<idHelp>[^/]+?)/insertNewVolunteer$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::inertNewVolunteerAction',)), array('_route' => 'insetNewVolunteer'));
        }

        // deleteHelp
        if (0 === strpos($pathinfo, '/json') && preg_match('#^/json/(?P<idHelp>[^/]+?)/deleteHelp$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::deleteHelpAction',)), array('_route' => 'deleteHelp'));
        }

        // reportHelp
        if (0 === strpos($pathinfo, '/json') && preg_match('#^/json/(?P<idHelp>[^/]+?)/reportHelp$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::reportHelpAction',)), array('_route' => 'reportHelp'));
        }

        // reportPlayer
        if (0 === strpos($pathinfo, '/json') && preg_match('#^/json/(?P<idUser>[^/]+?)/reportPlayer$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::reportPlayerAction',)), array('_route' => 'reportPlayer'));
        }

        // getVolunteer
        if (0 === strpos($pathinfo, '/json') && preg_match('#^/json/(?P<idHelp>[^/]+?)/getVolunteer$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::getVolunteer',)), array('_route' => 'getVolunteer'));
        }

        // insertParticipant
        if (0 === strpos($pathinfo, '/json') && preg_match('#^/json/(?P<idHelp>[^/]+?)/(?P<idUser>[^/]+?)/insertParticipant$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::insertParticipantAction',)), array('_route' => 'insertParticipant'));
        }

        // pay
        if (0 === strpos($pathinfo, '/json') && preg_match('#^/json/(?P<helpId>[^/]+?)/pay$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::payAction',)), array('_route' => 'pay'));
        }

        // helpWhereYouVolunteer
        if (0 === strpos($pathinfo, '/json') && preg_match('#^/json/(?P<userId>[^/]+?)/helpWhereYouVolunteer$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::helpWhereYouVolunteeerAction',)), array('_route' => 'helpWhereYouVolunteer'));
        }

        // helpWhereYouParticipant
        if (0 === strpos($pathinfo, '/json') && preg_match('#^/json/(?P<userId>[^/]+?)/helpWhereYouParticipant$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::helpWhereYouParticipantAction',)), array('_route' => 'helpWhereYouParticipant'));
        }

        // getPayementNotification
        if (0 === strpos($pathinfo, '/json') && preg_match('#^/json/(?P<userId>[^/]+?)/getPayementNotification$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::getPayementNotificationAction',)), array('_route' => 'getPayementNotification'));
        }

        // getParticipantNotification
        if (0 === strpos($pathinfo, '/json') && preg_match('#^/json/(?P<userId>[^/]+?)/getParticipantNotification$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::getParticipantNotificationAction',)), array('_route' => 'getParticipantNotification'));
        }

        // search
        if (0 === strpos($pathinfo, '/json') && preg_match('#^/json/(?P<string>[^/]+?)/search$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::searchAction',)), array('_route' => 'search'));
        }

        // getInfoUser
        if (0 === strpos($pathinfo, '/json') && preg_match('#^/json/(?P<userId>[^/]+?)/getInfoUser$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::getInfoUser',)), array('_route' => 'getInfoUser'));
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
