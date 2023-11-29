<?php

namespace App\Controllers\User;

require_once 'UserAuthController.php';

class UserHomeController
{
    private $auth;

    public function __construct(AuthInterface $auth)
    {
        $this->auth = $auth;
    }
    public function index()
    {
        $userName = 'John Doe';

        $auth = $this->auth->login_check();

        if(!$auth) {
            require_once __DIR__ . '/../../Views/user/home/login/login.php';
            exit;
        }

        require_once __DIR__ . '/../../Views/user/home/index.php';
    }
}