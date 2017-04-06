<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/activity')) {
            // activity_index
            if (rtrim($pathinfo, '/') === '/activity') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_activity_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'activity_index');
                }

                return array (  '_controller' => 'WebSite\\AppBundle\\Controller\\ActivityController::indexAction',  '_route' => 'activity_index',);
            }
            not_activity_index:

            // activity_new
            if (0 === strpos($pathinfo, '/activity/new/list') && preg_match('#^/activity/new/list/(?P<list>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_activity_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activity_new')), array (  '_controller' => 'WebSite\\AppBundle\\Controller\\ActivityController::newAction',));
            }
            not_activity_new:

            // activity_show
            if (preg_match('#^/activity/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_activity_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activity_show')), array (  '_controller' => 'WebSite\\AppBundle\\Controller\\ActivityController::showAction',));
            }
            not_activity_show:

            // activity_edit
            if (preg_match('#^/activity/(?P<id>[^/]++)/edit/(?P<listId>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_activity_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activity_edit')), array (  '_controller' => 'WebSite\\AppBundle\\Controller\\ActivityController::editAction',));
            }
            not_activity_edit:

            // activity_delete
            if (0 === strpos($pathinfo, '/activity/delete/list') && preg_match('#^/activity/delete/list/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_activity_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activity_delete')), array (  '_controller' => 'WebSite\\AppBundle\\Controller\\ActivityController::deleteAction',));
            }
            not_activity_delete:

            // activity_confirm
            if (0 === strpos($pathinfo, '/activity/confirm') && preg_match('#^/activity/confirm/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_activity_confirm;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activity_confirm')), array (  '_controller' => 'WebSite\\AppBundle\\Controller\\ActivityController::confirmAction',));
            }
            not_activity_confirm:

            if (0 === strpos($pathinfo, '/activity/status')) {
                // activity_get_status_true
                if (0 === strpos($pathinfo, '/activity/status/true') && preg_match('#^/activity/status/true/(?P<idList>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'activity_get_status_true')), array (  '_controller' => 'WebSite\\AppBundle\\Controller\\ActivityController::getSatatusTrueAction',));
                }

                // activity_get_status_false
                if (0 === strpos($pathinfo, '/activity/status/false') && preg_match('#^/activity/status/false/(?P<idList>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'activity_get_status_false')), array (  '_controller' => 'WebSite\\AppBundle\\Controller\\ActivityController::getSatatusFalseAction',));
                }

            }

            // activity_for_expiring
            if (0 === strpos($pathinfo, '/activity/activities/for/expiring') && preg_match('#^/activity/activities/for/expiring/(?P<idList>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activity_for_expiring')), array (  '_controller' => 'WebSite\\AppBundle\\Controller\\ActivityController::activitisForExpiringAction',));
            }

        }

        // website_app_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'website_app_default_index');
            }

            return array (  '_controller' => 'WebSite\\AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'website_app_default_index',);
        }

        if (0 === strpos($pathinfo, '/list')) {
            // list_menu_index
            if ($pathinfo === '/list/menu') {
                return array (  '_controller' => 'WebSite\\AppBundle\\Controller\\DefaultController::listMenuAction',  '_route' => 'list_menu_index',);
            }

            if (0 === strpos($pathinfo, '/listapp')) {
                // list_app_index
                if ($pathinfo === '/listapp/index') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_list_app_index;
                    }

                    return array (  '_controller' => 'WebSite\\AppBundle\\Controller\\ListAppController::indexAction',  '_route' => 'list_app_index',);
                }
                not_list_app_index:

                // list_app_new
                if ($pathinfo === '/listapp/new/create') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_list_app_new;
                    }

                    return array (  '_controller' => 'WebSite\\AppBundle\\Controller\\ListAppController::newAction',  '_route' => 'list_app_new',);
                }
                not_list_app_new:

                // list_app_show
                if (preg_match('#^/listapp/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_list_app_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_app_show')), array (  '_controller' => 'WebSite\\AppBundle\\Controller\\ListAppController::showAction',));
                }
                not_list_app_show:

                // list_app_edit
                if (preg_match('#^/listapp/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_list_app_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_app_edit')), array (  '_controller' => 'WebSite\\AppBundle\\Controller\\ListAppController::editAction',));
                }
                not_list_app_edit:

                // list_app_delete
                if (0 === strpos($pathinfo, '/listapp/delete/list') && preg_match('#^/listapp/delete/list/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_list_app_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_app_delete')), array (  '_controller' => 'WebSite\\AppBundle\\Controller\\ListAppController::deleteAction',));
                }
                not_list_app_delete:

            }

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
