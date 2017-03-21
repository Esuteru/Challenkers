<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'challenkers_main_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Challenkers\\MainBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hello_the_world' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Challenkers\\MainBundle\\Controller\\AdvertController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/hello-world',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'guild_list' => array (  0 =>   array (    0 => 'idServeur',  ),  1 =>   array (    '_controller' => 'Challenkers\\MainBundle\\Controller\\GuildesController::indexAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idServeur',    ),    1 =>     array (      0 => 'text',      1 => '/guild-list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'guild_info' => array (  0 =>   array (    0 => 'idGuilde',  ),  1 =>   array (    '_controller' => 'Challenkers\\MainBundle\\Controller\\GuildesController::infoAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idGuilde',    ),    1 =>     array (      0 => 'text',      1 => '/guild-info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'guild_members' => array (  0 =>   array (    0 => 'idGuilde',  ),  1 =>   array (    '_controller' => 'Challenkers\\MainBundle\\Controller\\MembresController::indexAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idGuilde',    ),    1 =>     array (      0 => 'text',      1 => '/guild-members',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'classement' => array (  0 =>   array (    0 => 'idGuilde',  ),  1 =>   array (    '_controller' => 'Challenkers\\MainBundle\\Controller\\ClassementController::indexAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idGuilde',    ),    1 =>     array (      0 => 'text',      1 => '/classement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'classementLevel' => array (  0 =>   array (    0 => 'idGuilde',  ),  1 =>   array (    '_controller' => 'Challenkers\\MainBundle\\Controller\\ClassementController::levelAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idGuilde',    ),    1 =>     array (      0 => 'text',      1 => '/classement-level',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'all_members' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Challenkers\\MainBundle\\Controller\\MembresController::allMembersAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/all-members',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'classementRankS' => array (  0 =>   array (    0 => 'idGuilde',  ),  1 =>   array (    '_controller' => 'Challenkers\\MainBundle\\Controller\\ClassementController::rankSAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idGuilde',    ),    1 =>     array (      0 => 'text',      1 => '/classement-rankS',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'classementRankA' => array (  0 =>   array (    0 => 'idGuilde',  ),  1 =>   array (    '_controller' => 'Challenkers\\MainBundle\\Controller\\ClassementController::rankAAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idGuilde',    ),    1 =>     array (      0 => 'text',      1 => '/classement-rankA',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'classementRankB' => array (  0 =>   array (    0 => 'idGuilde',  ),  1 =>   array (    '_controller' => 'Challenkers\\MainBundle\\Controller\\ClassementController::rankBAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idGuilde',    ),    1 =>     array (      0 => 'text',      1 => '/classement-rankB',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'classementRankC' => array (  0 =>   array (    0 => 'idGuilde',  ),  1 =>   array (    '_controller' => 'Challenkers\\MainBundle\\Controller\\ClassementController::rankCAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idGuilde',    ),    1 =>     array (      0 => 'text',      1 => '/classement-rankC',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'classementClasseArcher' => array (  0 =>   array (    0 => 'idGuilde',  ),  1 =>   array (    '_controller' => 'Challenkers\\MainBundle\\Controller\\ClassementController::classeArcherAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idGuilde',    ),    1 =>     array (      0 => 'text',      1 => '/classement-classeArcher',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'classementClasseChevalier' => array (  0 =>   array (    0 => 'idGuilde',  ),  1 =>   array (    '_controller' => 'Challenkers\\MainBundle\\Controller\\ClassementController::classeChevalierAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idGuilde',    ),    1 =>     array (      0 => 'text',      1 => '/classement-classeChevalier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'classementClasseHeal' => array (  0 =>   array (    0 => 'idGuilde',  ),  1 =>   array (    '_controller' => 'Challenkers\\MainBundle\\Controller\\ClassementController::classeHealAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idGuilde',    ),    1 =>     array (      0 => 'text',      1 => '/classement-classeHeal',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'classementClasseMage' => array (  0 =>   array (    0 => 'idGuilde',  ),  1 =>   array (    '_controller' => 'Challenkers\\MainBundle\\Controller\\ClassementController::classeMageAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idGuilde',    ),    1 =>     array (      0 => 'text',      1 => '/classement-classeMage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'classementClasseTank' => array (  0 =>   array (    0 => 'idGuilde',  ),  1 =>   array (    '_controller' => 'Challenkers\\MainBundle\\Controller\\ClassementController::classeTankAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idGuilde',    ),    1 =>     array (      0 => 'text',      1 => '/classement-classeTank',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'classementClasseAutre' => array (  0 =>   array (    0 => 'idGuilde',  ),  1 =>   array (    '_controller' => 'Challenkers\\MainBundle\\Controller\\ClassementController::classeAutreAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idGuilde',    ),    1 =>     array (      0 => 'text',      1 => '/classement-classeAutre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
