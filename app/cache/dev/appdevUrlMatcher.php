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

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        if (0 === strpos($pathinfo, '/demo')) {
            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

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

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }
            return array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\HomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/skills')) {
            // _skills
            if (rtrim($pathinfo, '/') === '/skills') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_skills');
                }
                return array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\SkillsController::indexAction',  '_route' => '_skills',);
            }

            // _skills_create
            if ($pathinfo === '/skills/create') {
                return array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\SkillsController::createAction',  '_route' => '_skills_create',);
            }

            // _skills_new
            if ($pathinfo === '/skills/new') {
                return array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\SkillsController::newAction',  '_route' => '_skills_new',);
            }

            // _skill_edit
            if (preg_match('#^/skills/(?P<id>[^/]+?)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\SkillsController::editAction',)), array('_route' => '_skill_edit'));
            }

            // _skills_update
            if (preg_match('#^/skills/(?P<id>[^/]+?)/update$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\SkillsController::updateAction',)), array('_route' => '_skills_update'));
            }

            // _skills_edit
            if (0 === strpos($pathinfo, '/skills/edit') && preg_match('#^/skills/edit/(?P<id>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\SkillsController::editAction',)), array('_route' => '_skills_edit'));
            }

            // _skills_delete
            if (0 === strpos($pathinfo, '/skills/delete') && preg_match('#^/skills/delete/(?P<id>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'TriebawerkeSkilleratorBundle:kills:delete',)), array('_route' => '_skills_delete'));
            }

        }

        // _skills_show
        if (preg_match('#^/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\SkillsController::showAction',)), array('_route' => '_skills_show'));
        }

        // _level
        if (rtrim($pathinfo, '/') === '/level') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_level');
            }
            return array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\LevelController::indexAction',  '_route' => '_level',);
        }

        // _level_update
        if (0 === strpos($pathinfo, '/level/update') && preg_match('#^/level/update/(?P<id>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\LevelController::updateAction',)), array('_route' => '_level_update'));
        }

        // _level_create
        if (0 === strpos($pathinfo, '/level/create') && preg_match('#^/level/create/(?P<id>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\LevelController::createAction',)), array('_route' => '_level_create'));
        }

        // certificate
        if ($pathinfo === '/certificate') {
            return array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\CertificateController::indexAction',  '_route' => 'certificate',);
        }

        // certificate_show
        if (0 === strpos($pathinfo, '/certificate/show') && preg_match('#^/certificate/show/(?P<id>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\CertificateController::showAction',)), array('_route' => 'certificate_show'));
        }

        // certificate_edit
        if (0 === strpos($pathinfo, '/certificate/edit') && preg_match('#^/certificate/edit/(?P<id>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\CertificateController::editAction',)), array('_route' => 'certificate_edit'));
        }

        // certificate_update
        if (0 === strpos($pathinfo, '/certificate/update') && preg_match('#^/certificate/update/(?P<id>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\CertificateController::updateAction',)), array('_route' => 'certificate_update'));
        }

        // certificate_new
        if ($pathinfo === '/certificate/new') {
            return array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\CertificateController::newAction',  '_route' => 'certificate_new',);
        }

        // certificate_create
        if ($pathinfo === '/certificate/create') {
            return array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\CertificateController::createAction',  '_route' => 'certificate_create',);
        }

        // certificate_delete
        if (0 === strpos($pathinfo, '/certificate/delete') && preg_match('#^/certificate/delete/(?P<id>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\CertificateController::deleteAction',)), array('_route' => 'certificate_delete'));
        }

        if (0 === strpos($pathinfo, '/home')) {
            // _home
            if (rtrim($pathinfo, '/') === '/home') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_home');
                }
                return array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\HomeController::indexAction',  '_route' => '_home',);
            }

            // _home_skillerator
            if ($pathinfo === '/home/skillerator') {
                return array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\HomeController::skilleratorAction',  '_route' => '_home_skillerator',);
            }

            // _home_contact
            if ($pathinfo === '/home/contact') {
                return array (  '_controller' => 'Triebawerke\\SkilleratorBundle\\Controller\\HomeController::contactAction',  '_route' => '_home_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
