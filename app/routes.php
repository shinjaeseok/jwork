<?php

$routes = [
    // User Auth
    '/join' => '\App\Controllers\User\UserAuthController@join',
    '/user/create' => '\App\Controllers\User\UserAuthController@userCreate',
    '/login' => '\App\Controllers\User\UserAuthController@login',
    '/user/login' => '\App\Controllers\User\UserAuthController@userLogin',
    '/logout' => '\App\Controllers\User\UserAuthController@logout',

    // User
    '/' => '\App\Controllers\User\UserHomeController@index',
    '/user_info' => '\App\Controllers\User\UserHomeController@userInfo',
    '/user_info/select' => '\App\Controllers\User\UserHomeController@userInfoSelect',
    //'/user_info/info_change' => '\App\Controllers\User\UserHomeController@info_change',
    //'/user_info/password_change' => '\App\Controllers\User\UserHomeController@password_change',

    // Admin Auth
    '/admin/login' => '\App\Controllers\Admin\AdminHomeController@login',
    '/admin/password' => '\App\Controllers\Admin\AdminHomeController@password',

    // Admin
    '/admin' => '\App\Controllers\Admin\AdminHomeController@index',
];