<?php

$routes = [
    // User Auth
    '/join' => '\App\Controllers\User\UserAuthController@join',
    '/join/user' => '\App\Controllers\User\UserAuthController@userCreate',
    '/login' => '\App\Controllers\User\UserAuthController@login',
    '/login/user' => '\App\Controllers\User\UserAuthController@userLogin',
    '/logout' => '\App\Controllers\User\UserAuthController@logout',

    // User
    '/' => '\App\Controllers\User\UserHomeController@index',
    '/user_info' => '\App\Controllers\User\UserHomeController@userInfo',
    '/user_info/select' => '\App\Controllers\User\UserHomeController@userInfoSelect',
    '/user_info/save' => '\App\Controllers\User\UserHomeController@userInfoSave',
    //'/user_info/password_change' => '\App\Controllers\User\UserHomeController@password_change',

    // Admin Auth
    '/admin/login' => '\App\Controllers\Admin\AdminHomeController@login',
    '/admin/password' => '\App\Controllers\Admin\AdminHomeController@password',

    // Admin
    '/admin' => '\App\Controllers\Admin\AdminHomeController@index',
];