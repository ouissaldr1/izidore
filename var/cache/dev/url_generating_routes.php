<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app_annonce' => [['userId'], ['name' => null, '_controller' => 'App\\Controller\\AnnonceController::index'], [], [['variable', '/', '[^/]++', 'userId', true], ['text', '/annonce']], [], [], []],
    'app_avis_index' => [['userId'], ['_controller' => 'App\\Controller\\AvisController::index'], [], [['variable', '/', '[^/]++', 'userId', true], ['text', '/avis']], [], [], []],
    'app_avis_new' => [['userId'], ['_controller' => 'App\\Controller\\AvisController::new'], [], [['variable', '/', '[^/]++', 'userId', true], ['text', '/avis/ajouter']], [], [], []],
    'app_avis_show' => [['id'], ['_controller' => 'App\\Controller\\AvisController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/avis']], [], [], []],
    'app_avis_edit' => [['id'], ['_controller' => 'App\\Controller\\AvisController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/avis']], [], [], []],
    'app_avis_delete' => [['id'], ['_controller' => 'App\\Controller\\AvisController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/avis']], [], [], []],
    'app_default' => [[], ['_controller' => 'App\\Controller\\DefaultController::default'], [], [['text', '/']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
];
