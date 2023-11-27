<?php

$route = $_SERVER['REQUEST_URI'];

switch ($route) {
    case '/':
        require_once '../app/Controllers/User/UserHomeController.php';
        $controller = new \App\Controllers\User\UserHomeController();
        $controller->index();
        break;

    case '/join':
        require_once '../app/Controllers/User/UserAuthController.php';
        $controller = new \App\Controllers\User\UserAuthController();
        $controller->join();
        break;

    case '/admin':
        require_once '../app/Controllers/Admin/AdminHomeController.php';
        $controller = new \App\Controllers\Admin\AdminHomeController();
        $controller->index();
        break;

    default:
        // 404 Not Found 페이지로 이동하거나 에러 처리
        echo '404 Not Found';
        break;
}