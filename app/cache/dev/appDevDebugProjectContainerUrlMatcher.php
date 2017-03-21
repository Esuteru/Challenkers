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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
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

        // challenkers_main_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'challenkers_main_homepage');
            }

            return array (  '_controller' => 'Challenkers\\MainBundle\\Controller\\DefaultController::indexAction',  '_route' => 'challenkers_main_homepage',);
        }

        // hello_the_world
        if ($pathinfo === '/hello-world') {
            return array (  '_controller' => 'Challenkers\\MainBundle\\Controller\\AdvertController::indexAction',  '_route' => 'hello_the_world',);
        }

        if (0 === strpos($pathinfo, '/guild-')) {
            // guild_list
            if (0 === strpos($pathinfo, '/guild-list') && preg_match('#^/guild\\-list/(?P<idServeur>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'guild_list')), array (  '_controller' => 'Challenkers\\MainBundle\\Controller\\GuildesController::indexAction',));
            }

            // guild_info
            if (0 === strpos($pathinfo, '/guild-info') && preg_match('#^/guild\\-info/(?P<idGuilde>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'guild_info')), array (  '_controller' => 'Challenkers\\MainBundle\\Controller\\GuildesController::infoAction',));
            }

            // guild_members
            if (0 === strpos($pathinfo, '/guild-members') && preg_match('#^/guild\\-members/(?P<idGuilde>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'guild_members')), array (  '_controller' => 'Challenkers\\MainBundle\\Controller\\MembresController::indexAction',));
            }

        }

        if (0 === strpos($pathinfo, '/classement')) {
            // classement
            if (preg_match('#^/classement/(?P<idGuilde>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classement')), array (  '_controller' => 'Challenkers\\MainBundle\\Controller\\ClassementController::indexAction',));
            }

            // classementLevel
            if (0 === strpos($pathinfo, '/classement-level') && preg_match('#^/classement\\-level/(?P<idGuilde>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'classementLevel')), array (  '_controller' => 'Challenkers\\MainBundle\\Controller\\ClassementController::levelAction',));
            }

        }

        // all_members
        if ($pathinfo === '/all-members') {
            return array (  '_controller' => 'Challenkers\\MainBundle\\Controller\\MembresController::allMembersAction',  '_route' => 'all_members',);
        }

        if (0 === strpos($pathinfo, '/classement-')) {
            if (0 === strpos($pathinfo, '/classement-rank')) {
                // classementRankS
                if (0 === strpos($pathinfo, '/classement-rankS') && preg_match('#^/classement\\-rankS/(?P<idGuilde>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'classementRankS')), array (  '_controller' => 'Challenkers\\MainBundle\\Controller\\ClassementController::rankSAction',));
                }

                // classementRankA
                if (0 === strpos($pathinfo, '/classement-rankA') && preg_match('#^/classement\\-rankA/(?P<idGuilde>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'classementRankA')), array (  '_controller' => 'Challenkers\\MainBundle\\Controller\\ClassementController::rankAAction',));
                }

                // classementRankB
                if (0 === strpos($pathinfo, '/classement-rankB') && preg_match('#^/classement\\-rankB/(?P<idGuilde>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'classementRankB')), array (  '_controller' => 'Challenkers\\MainBundle\\Controller\\ClassementController::rankBAction',));
                }

                // classementRankC
                if (0 === strpos($pathinfo, '/classement-rankC') && preg_match('#^/classement\\-rankC/(?P<idGuilde>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'classementRankC')), array (  '_controller' => 'Challenkers\\MainBundle\\Controller\\ClassementController::rankCAction',));
                }

            }

            if (0 === strpos($pathinfo, '/classement-classe')) {
                // classementClasseArcher
                if (0 === strpos($pathinfo, '/classement-classeArcher') && preg_match('#^/classement\\-classeArcher/(?P<idGuilde>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'classementClasseArcher')), array (  '_controller' => 'Challenkers\\MainBundle\\Controller\\ClassementController::classeArcherAction',));
                }

                // classementClasseChevalier
                if (0 === strpos($pathinfo, '/classement-classeChevalier') && preg_match('#^/classement\\-classeChevalier/(?P<idGuilde>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'classementClasseChevalier')), array (  '_controller' => 'Challenkers\\MainBundle\\Controller\\ClassementController::classeChevalierAction',));
                }

                // classementClasseHeal
                if (0 === strpos($pathinfo, '/classement-classeHeal') && preg_match('#^/classement\\-classeHeal/(?P<idGuilde>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'classementClasseHeal')), array (  '_controller' => 'Challenkers\\MainBundle\\Controller\\ClassementController::classeHealAction',));
                }

                // classementClasseMage
                if (0 === strpos($pathinfo, '/classement-classeMage') && preg_match('#^/classement\\-classeMage/(?P<idGuilde>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'classementClasseMage')), array (  '_controller' => 'Challenkers\\MainBundle\\Controller\\ClassementController::classeMageAction',));
                }

                // classementClasseTank
                if (0 === strpos($pathinfo, '/classement-classeTank') && preg_match('#^/classement\\-classeTank/(?P<idGuilde>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'classementClasseTank')), array (  '_controller' => 'Challenkers\\MainBundle\\Controller\\ClassementController::classeTankAction',));
                }

                // classementClasseAutre
                if (0 === strpos($pathinfo, '/classement-classeAutre') && preg_match('#^/classement\\-classeAutre/(?P<idGuilde>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'classementClasseAutre')), array (  '_controller' => 'Challenkers\\MainBundle\\Controller\\ClassementController::classeAutreAction',));
                }

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
