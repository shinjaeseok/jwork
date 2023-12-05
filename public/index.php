<?php

require_once '../config/config.php';
require_once '../app/routes.php';

$route = $_SERVER['REQUEST_URI'];

//use App\Controllers\User\UserHomeController;
//use App\Controllers\User\UserAuthController;
//use App\Controllers\Admin\AdminAuthController;
//use App\Controllers\Admin\AdminHomeController;

require_once '../app/Controllers/User/UserHomeController.php';
require_once '../app/Controllers/User/UserAuthController.php';
require_once '../app/Controllers/Admin/AdminHomeController.php';

if (array_key_exists($route, $routes)) {
    $handler = explode('@', $routes[$route]);
    $controller = new $handler[0]();
    $method = $handler[1];
    $controller->$method();
} else {
    require_once __DIR__ . '/../app/Views/user/templates/404.php';
}