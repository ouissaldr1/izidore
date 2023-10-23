<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_default', '_controller' => 'App\\Controller\\DefaultController::default'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/a(?'
                    .'|nnonce/([^/]++)(*:62)'
                    .'|vis/(?'
                        .'|([^/]++)(*:84)'
                        .'|ajouter/([^/]++)(*:107)'
                        .'|([^/]++)(?'
                            .'|(*:126)'
                            .'|/edit(*:139)'
                            .'|(*:147)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        62 => [[['_route' => 'app_annonce', 'name' => null, '_controller' => 'App\\Controller\\AnnonceController::index'], ['userId'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        84 => [[['_route' => 'app_avis_index', '_controller' => 'App\\Controller\\AvisController::index'], ['userId'], ['GET' => 0], null, false, true, null]],
        107 => [[['_route' => 'app_avis_new', '_controller' => 'App\\Controller\\AvisController::new'], ['userId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        126 => [[['_route' => 'app_avis_show', '_controller' => 'App\\Controller\\AvisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        139 => [[['_route' => 'app_avis_edit', '_controller' => 'App\\Controller\\AvisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        147 => [
            [['_route' => 'app_avis_delete', '_controller' => 'App\\Controller\\AvisController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
