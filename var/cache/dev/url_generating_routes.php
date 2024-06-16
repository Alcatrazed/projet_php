<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app_acceuil' => [[], ['_controller' => 'App\\Controller\\AdminController::acceuil'], [], [['text', '/']], [], [], []],
    'app_inscription' => [[], ['_controller' => 'App\\Controller\\AdminController::inscription'], [], [['text', '/inscription']], [], [], []],
    'app_admin' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], [], []],
    'app_profile' => [[], ['_controller' => 'App\\Controller\\AdminController::profile'], [], [['text', '/profile']], [], [], []],
    'app_modifprofile' => [['id'], ['_controller' => 'App\\Controller\\AdminController::modifprofile'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/modifprofile']], [], [], []],
    'app_modifmdp' => [['id'], ['_controller' => 'App\\Controller\\AdminController::modifmdp'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/modifmdp']], [], [], []],
    'app_evenement_index' => [[], ['_controller' => 'App\\Controller\\EvenementController::index'], [], [['text', '/evenement/']], [], [], []],
    'app_evenement_new' => [[], ['_controller' => 'App\\Controller\\EvenementController::new'], [], [['text', '/evenement/new']], [], [], []],
    'app_evenement_show' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/evenement']], [], [], []],
    'app_evenement_edit' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/evenement']], [], [], []],
    'app_evenement_delete' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/evenement']], [], [], []],
    'app_evenement_inscription' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::inscription'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/evenement/inscription']], [], [], []],
    'app_evenement_deinscription' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::deinscription'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/evenement/deinscription']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'app_forgot_password_request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], [], []],
    'app_check_email' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], [], []],
    'app_reset_password' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/reset']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\AdminController::acceuil' => [[], ['_controller' => 'App\\Controller\\AdminController::acceuil'], [], [['text', '/']], [], [], []],
    'App\Controller\AdminController::inscription' => [[], ['_controller' => 'App\\Controller\\AdminController::inscription'], [], [['text', '/inscription']], [], [], []],
    'App\Controller\AdminController::index' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], [], []],
    'App\Controller\AdminController::profile' => [[], ['_controller' => 'App\\Controller\\AdminController::profile'], [], [['text', '/profile']], [], [], []],
    'App\Controller\AdminController::modifprofile' => [['id'], ['_controller' => 'App\\Controller\\AdminController::modifprofile'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/modifprofile']], [], [], []],
    'App\Controller\AdminController::modifmdp' => [['id'], ['_controller' => 'App\\Controller\\AdminController::modifmdp'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/modifmdp']], [], [], []],
    'App\Controller\EvenementController::index' => [[], ['_controller' => 'App\\Controller\\EvenementController::index'], [], [['text', '/evenement/']], [], [], []],
    'App\Controller\EvenementController::new' => [[], ['_controller' => 'App\\Controller\\EvenementController::new'], [], [['text', '/evenement/new']], [], [], []],
    'App\Controller\EvenementController::show' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/evenement']], [], [], []],
    'App\Controller\EvenementController::edit' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/evenement']], [], [], []],
    'App\Controller\EvenementController::delete' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/evenement']], [], [], []],
    'App\Controller\EvenementController::inscription' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::inscription'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/evenement/inscription']], [], [], []],
    'App\Controller\EvenementController::deinscription' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::deinscription'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/evenement/deinscription']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'App\Controller\RegistrationController::verifyUserEmail' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'App\Controller\ResetPasswordController::request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], [], []],
    'App\Controller\ResetPasswordController::checkEmail' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], [], []],
    'App\Controller\ResetPasswordController::reset' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/reset']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
];
