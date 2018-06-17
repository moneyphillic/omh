<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admincategories')) {
                // categories_index
                if ('/admincategories/index' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\CategoriesController::indexAction',  '_route' => 'categories_index',);
                }

                // category_edit
                if (0 === strpos($pathinfo, '/admincategories/edit') && preg_match('#^/admincategories/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'category_edit')), array (  '_controller' => 'AppBundle\\Controller\\CategoriesController::editAction',));
                    if (!in_array($canonicalMethod, array('POST', 'GET'))) {
                        $allow = array_merge($allow, array('POST', 'GET'));
                        goto not_category_edit;
                    }

                    return $ret;
                }
                not_category_edit:

                // category_new
                if ('/admincategories/new' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\CategoriesController::newAction',  '_route' => 'category_new',);
                }

                // category_add
                if ('/admincategories/add' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\CategoriesController::addAction',  '_route' => 'category_add',);
                }

            }

            // profile_index
            if ('/adminprofile/index' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ProfileController::indexAction',  '_route' => 'profile_index',);
            }

            if (0 === strpos($pathinfo, '/adminproject')) {
                // project_index
                if ('/adminproject/index' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ProjectController::indexAction',  '_route' => 'project_index',);
                }

                // project_new
                if ('/adminproject/new' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ProjectController::newAction',  '_route' => 'project_new',);
                }

                // project_edit
                if (0 === strpos($pathinfo, '/adminproject/edit') && preg_match('#^/adminproject/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'project_edit')), array (  '_controller' => 'AppBundle\\Controller\\ProjectController::editAction',));
                    if (!in_array($canonicalMethod, array('POST', 'GET'))) {
                        $allow = array_merge($allow, array('POST', 'GET'));
                        goto not_project_edit;
                    }

                    return $ret;
                }
                not_project_edit:

                // project_delete
                if (0 === strpos($pathinfo, '/adminproject/delete') && preg_match('#^/adminproject/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'project_delete')), array (  '_controller' => 'AppBundle\\Controller\\ProjectController::deleteAction',));
                    if (!in_array($canonicalMethod, array('POST', 'GET'))) {
                        $allow = array_merge($allow, array('POST', 'GET'));
                        goto not_project_delete;
                    }

                    return $ret;
                }
                not_project_delete:

            }

        }

        // login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        // logout
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'logout',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\TemplateController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/projects')) {
            // projects
            if ('/projects' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\TemplateController::projectsAction',  '_route' => 'projects',);
            }

            // singleproject
            if (preg_match('#^/projects/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'singleproject')), array (  '_controller' => 'AppBundle\\Controller\\TemplateController::singleProjectAction',));
            }

        }

        // profile
        if ('/profile' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\TemplateController::profileAction',  '_route' => 'profile',);
        }

        // contactme
        if ('/contact-me' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\TemplateController::contactMeAction',  '_route' => 'contactme',);
        }

        // send_contact_mail
        if ('/send-contact-mail' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\TemplateController::sendContactMail',  '_route' => 'send_contact_mail',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
