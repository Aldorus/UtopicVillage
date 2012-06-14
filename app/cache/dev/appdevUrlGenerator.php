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
        return array(array (  0 => 'login',  1 => 'password',  2 => 'birthdate',  3 => 'email',  4 => 'name',  5 => 'firstname',), array (  '_controller' => 'Exod\\Bundle\\UtopicVillageBundle\\Controller\\JSONController::insertJoueurAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/insertUser',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'firstname',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'email',  ),  4 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'birthdate',  ),  5 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'password',  ),  6 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'login',  ),  7 =>   array (    0 => 'text',    1 => '/json',  ),));
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
