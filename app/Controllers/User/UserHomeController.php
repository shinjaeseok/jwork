<?php

namespace App\Controllers\User;

require_once 'UserAuthController.php';

use App\Controllers\User\UserAuthController;

class UserHomeController
{
    public function index()
    {
        $userName = 'John Doe';

        $auth_controller = new UserAuthController();
        $auth = $auth_controller->login_check();

        if(!$auth) {
            require_once __DIR__ . '/../../Views/user/home/login/login.php';
            exit;
        }

        require_once __DIR__ . '/../../Views/user/home/index.php';
    }
}