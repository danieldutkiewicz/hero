<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/heroes' => [[['_route' => 'heroes_get', '_controller' => 'App\\Controller\\HeroController::getAllHeroes'], null, ['GET' => 0], null, false, false, null]],
        '/' => [
            [['_route' => 'startup', '_controller' => 'App\\Controller\\StartupController::index'], null, null, null, false, false, null],
            [['_route' => 'index', '_controller' => 'App\\Controller\\StartupController::index'], null, null, null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/heroes/(?'
                    .'|create/([^/]++)(*:37)'
                    .'|([^/]++)(*:52)'
                    .'|update/([^/]++)/([^/]++)(*:83)'
                    .'|delete/([^/]++)(*:105)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:142)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        37 => [[['_route' => 'hero_create', '_controller' => 'App\\Controller\\HeroController::createHero'], ['name'], ['POST' => 0], null, false, true, null]],
        52 => [[['_route' => 'hero_get', '_controller' => 'App\\Controller\\HeroController::getHeroById'], ['id'], ['GET' => 0], null, false, true, null]],
        83 => [[['_route' => 'hero_update', '_controller' => 'App\\Controller\\HeroController::updateHero'], ['id', 'newName'], null, null, false, true, null]],
        105 => [[['_route' => 'hero_delete', '_controller' => 'App\\Controller\\HeroController::deleteHeroById'], ['id'], ['DELETE' => 0], null, false, true, null]],
        142 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
