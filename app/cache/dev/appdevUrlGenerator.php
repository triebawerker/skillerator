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
       '_demo_login' => true,
       '_security_check' => true,
       '_demo_logout' => true,
       'acme_demo_secured_hello' => true,
       '_demo_secured_hello' => true,
       '_demo_secured_hello_admin' => true,
       '_demo' => true,
       '_demo_hello' => true,
       '_demo_contact' => true,
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
       '_welcome' => true,
       '_skills' => true,
       '_skills_create' => true,
       '_skills_new' => true,
       '_skill_edit' => true,
       '_skills_update' => true,
       '_skills_show' => true,
       '_skills_edit' => true,
       '_skills_delete' => true,
       '_level_new' => true,
       '_level' => true,
       '_level_update' => true,
       '_level_create' => true,
       '_level_show' => true,
       '_level_delete' => true,
       '_level_edit' => true,
       'certificate' => true,
       'certificate_show' => true,
       'certificate_edit' => true,
       'certificate_update' => true,
       'certificate_new' => true,
       'certificate_create' => true,
       'certificate_delete' => true,
       '_home' => true,
       '_home_skillerator' => true,
       '_home_contact' => true,
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

    private function get_demo_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login',  ),));
    }

    private function get_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login_check',  ),));
    }

    private function get_demo_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/logout',  ),));
    }

    private function getacme_demo_secured_helloRouteInfo()
    {
        return array(array (), array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_hello_adminRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello/admin',  ),));
    }

    private function get_demoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/',  ),));
    }

    private function get_demo_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/hello',  ),));
    }

    private function get_demo_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/contact',  ),));
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

    private function get_welcomeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\HomeController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function get_skillsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\SkillsController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/skills/',  ),));
    }

    private function get_skills_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\SkillsController::createAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/skills/create',  ),));
    }

    private function get_skills_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\SkillsController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/skills/new',  ),));
    }

    private function get_skill_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\SkillsController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/skills',  ),));
    }

    private function get_skills_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\SkillsController::updateAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/skills',  ),));
    }

    private function get_skills_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\SkillsController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),));
    }

    private function get_skills_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\SkillsController::editAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/skills/edit',  ),));
    }

    private function get_skills_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'TriebawerkeSkilleratorBundle:kills:delete',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/skills/delete',  ),));
    }

    private function get_level_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\LevelController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/level/new',  ),));
    }

    private function get_levelRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\LevelController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/level',  ),));
    }

    private function get_level_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\LevelController::updateAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/level/update',  ),));
    }

    private function get_level_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\LevelController::createAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/level/create',  ),));
    }

    private function get_level_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\LevelController::showAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/level/show',  ),));
    }

    private function get_level_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\LevelController::deleteAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/level/delete',  ),));
    }

    private function get_level_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\LevelController::editAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/level/edit',  ),));
    }

    private function getcertificateRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\CertificateController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/certificate',  ),));
    }

    private function getcertificate_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\CertificateController::showAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/certificate/show',  ),));
    }

    private function getcertificate_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\CertificateController::editAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/certificate/edit',  ),));
    }

    private function getcertificate_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\CertificateController::updateAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/certificate/update',  ),));
    }

    private function getcertificate_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\CertificateController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/certificate/new',  ),));
    }

    private function getcertificate_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\CertificateController::createAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/certificate/create',  ),));
    }

    private function getcertificate_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\CertificateController::deleteAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/certificate/delete',  ),));
    }

    private function get_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\HomeController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/home/',  ),));
    }

    private function get_home_skilleratorRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\HomeController::skilleratorAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/home/skillerator',  ),));
    }

    private function get_home_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\HomeController::contactAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/home/contact',  ),));
    }
}
