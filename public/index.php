<?php

$route = $_SERVER['REQUEST_URI'];

require_once '../app/Controllers/User/UserHomeController.php';
require_once '../app/Controllers/User/UserAuthController.php';
require_once '../app/Controllers/Admin/AdminHomeController.php';

switch ($route) {
    case '/':
        $auth_controller = new \App\Controllers\User\UserAuthController();
        $controller = new \App\Controllers\User\UserHomeController($auth_controller);
        $controller->index();
        break;

    case '/join':
        $controller = new \App\Controllers\User\UserAuthController();
        $controller->join();
        break;

    case '/admin':
        $controller = new \App\Controllers\Admin\AdminHomeController();
        $controller->index();
        break;

    default:
        // 404 Not Found 페이지로 이동하거나 에러 처리
        require_once __DIR__ . '/../app/Views/user/templates/404.php';
        break;
}