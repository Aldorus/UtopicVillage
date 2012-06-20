<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'help' => true,
       'insertHelp' => true,
       'testConnect' => true,
       'savePosition' => true,
       'insertUser' => true,
       'yourAskingHelp' => true,
       'getNearAskingHelp' => true,
       'insetNewVolunteer' => true,
       'deleteHelp' => true,
       'reportHelp' => true,
       'getVolunteer' => true,
       'insertParticipant' => true,
       'pay' => true,
       'helpWhereYouVolunteer' => true,
       'helpWhereYouParticipant' => true,
       'getPayementNotification' => true,
       'search' => true,
       'getInfoUser' => true,
       'role' => true,
       'role_show' => true,
       'role_new' => true,
       'role_create' => true,
       'role_edit' => true,
       'role_update' => true,
       'role_delete' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function gethelpRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::helpAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/help',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/json',  ),));
    }

    private function getinsertHelpRouteInfo()
    {
        return array(array (  0 => 'idUser',  1 => 'amount',  2 => 'text',  3 => 'reproducible',), array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::insertHelpAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/insertHelp',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'reproducible',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'text',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'amount',  ),  4 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'idUser',  ),  5 =>   array (    0 => 'text',    1 => '/json',  ),));
    }

    private function gettestConnectRouteInfo()
    {
        return array(array (  0 => 'email',  1 => 'password',), array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::testConnectAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/testConnect',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'password',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'email',  ),  3 =>   array (    0 => 'text',    1 => '/json',  ),));
    }

    private function getsavePositionRouteInfo()
    {
        return array(array (  0 => 'idUser',  1 => 'lat',  2 => 'long',), array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::savePositionAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/savePosition',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'long',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'lat',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'idUser',  ),  4 =>   array (    0 => 'text',    1 => '/json',  ),));
    }

    private function getinsertUserRouteInfo()
    {
        return array(array (  0 => 'login',  1 => 'password',  2 => 'birthdate',  3 => 'email',  4 => 'name',  5 => 'firstname',  6 => 'description',), array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::insertJoueurAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/insertUser',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'description',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'firstname',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  4 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'email',  ),  5 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'birthdate',  ),  6 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'password',  ),  7 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'login',  ),  8 =>   array (    0 => 'text',    1 => '/json',  ),));
    }

    private function getyourAskingHelpRouteInfo()
    {
        return array(array (  0 => 'idUser',), array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::youAskingHelpAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/askingHelp',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'idUser',  ),  2 =>   array (    0 => 'text',    1 => '/json',  ),));
    }

    private function getgetNearAskingHelpRouteInfo()
    {
        return array(array (  0 => 'userId',  1 => 'latitude',  2 => 'longitude',), array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::getNearAskingHelpAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/getNearAskingHelp',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'longitude',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'latitude',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'userId',  ),  4 =>   array (    0 => 'text',    1 => '/json',  ),));
    }

    private function getinsetNewVolunteerRouteInfo()
    {
        return array(array (  0 => 'idUser',  1 => 'idHelp',), array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::inertNewVolunteerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/insertNewVolunteer',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'idHelp',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'idUser',  ),  3 =>   array (    0 => 'text',    1 => '/json',  ),));
    }

    private function getdeleteHelpRouteInfo()
    {
        return array(array (  0 => 'idHelp',), array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::deleteHelpAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/deleteHelp',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'idHelp',  ),  2 =>   array (    0 => 'text',    1 => '/json',  ),));
    }

    private function getreportHelpRouteInfo()
    {
        return array(array (  0 => 'idHelp',), array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::reportHelpAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/reportHelp',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'idHelp',  ),  2 =>   array (    0 => 'text',    1 => '/json',  ),));
    }

    private function getgetVolunteerRouteInfo()
    {
        return array(array (  0 => 'idHelp',), array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::getVolunteer',), array (), array (  0 =>   array (    0 => 'text',    1 => '/getVolunteer',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'idHelp',  ),  2 =>   array (    0 => 'text',    1 => '/json',  ),));
    }

    private function getinsertParticipantRouteInfo()
    {
        return array(array (  0 => 'idHelp',  1 => 'idUser',), array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::insertParticipantAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/insertParticipant',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'idUser',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'idHelp',  ),  3 =>   array (    0 => 'text',    1 => '/json',  ),));
    }

    private function getpayRouteInfo()
    {
        return array(array (  0 => 'helpId',), array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::payAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/pay',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'helpId',  ),  2 =>   array (    0 => 'text',    1 => '/json',  ),));
    }

    private function gethelpWhereYouVolunteerRouteInfo()
    {
        return array(array (  0 => 'userId',), array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::helpWhereYouVolunteeerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/helpWhereYouVolunteer',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'userId',  ),  2 =>   array (    0 => 'text',    1 => '/json',  ),));
    }

    private function gethelpWhereYouParticipantRouteInfo()
    {
        return array(array (  0 => 'userId',), array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::helpWhereYouParticipantAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/helpWhereYouParticipant',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'userId',  ),  2 =>   array (    0 => 'text',    1 => '/json',  ),));
    }

    private function getgetPayementNotificationRouteInfo()
    {
        return array(array (  0 => 'userId',), array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::getPayementNotificationAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/getPayementNotification',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'userId',  ),  2 =>   array (    0 => 'text',    1 => '/json',  ),));
    }

    private function getsearchRouteInfo()
    {
        return array(array (  0 => 'string',), array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'string',  ),  2 =>   array (    0 => 'text',    1 => '/json',  ),));
    }

    private function getgetInfoUserRouteInfo()
    {
        return array(array (  0 => 'userId',), array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::getInfoUser',), array (), array (  0 =>   array (    0 => 'text',    1 => '/getInfoUser',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'userId',  ),  2 =>   array (    0 => 'text',    1 => '/json',  ),));
    }

    private function getroleRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\RoleController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/role/',  ),));
    }

    private function getrole_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\RoleController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/role',  ),));
    }

    private function getrole_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\RoleController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/role/new',  ),));
    }

    private function getrole_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\RoleController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/role/create',  ),));
    }

    private function getrole_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\RoleController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/role',  ),));
    }

    private function getrole_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\RoleController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/role',  ),));
    }

    private function getrole_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\RoleController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/role',  ),));
    }
}
