<?php

namespace App\Controllers\User;

class UserAuthController
{
    public function login_check() {

        return 0;
    }
    public function login()
    {

    }
    public function join()
    {

        require_once __DIR__ . '/../../Views/user/home/join/join.php';
    }
}