<?php

return [

    '' => [
        'controller' => 'main',
        'action' => 'index',
    ],
//вход
    'admin/login' => [
        'controller' => 'admin',
        'action' => 'login',
    ],
    // дашборд
    'admin/dashboard' => [
        'controller' => 'admin',
        'action' => 'dashboard',
    ],
    //форма входа
    'admin/index' => [
        'controller' => 'admin',
        'action' => 'index',
    ],
    'admin' => [
        'controller' => 'account',
        'action' => 'login',
    ],

    'banner/index' => [
        'controller' => 'banner',
        'action' => 'index',
    ],

    'banner/save' => [
        'controller' => 'banner',
        'action' => 'save',
    ],

];