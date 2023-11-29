<?php

namespace App\Controllers\User;

interface AuthInterface {
    public function login_check();
}
class UserAuthController implements AuthInterface
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