<?php

namespace App\Controllers\User;

use App\Controllers\User\UserAuthController;

class UserHomeController
{
    //private $auth;

    //public function __construct(AuthInterface $auth)
    //{
    //    $this->auth = $auth;
    //}
    public function index()
    {
        session_start();

        if(!$_SESSION['user_code']) {
            header("Location: /login");
            //require_once __DIR__ . '/../../Views/user/home/login/login.php';
            exit;
        }

        require_once __DIR__ . '/../../Views/user/home/index.php';
    }
    public function userInfo()
    {
        require_once __DIR__ . '/../../Views/user/home/user_info/user_info.php';
    }
    public function userInfoSelect()
    {
        $user_code = $_SESSION['user_code'];

        var_dump($user_code);
        exit;

        $sql = "
                SELECT *
                FROM users
                WHERE code = '${user_code}'
        ";

        $select_user_data = $db->query($sql)->fetchArray();

        if (!$select_user_data) {
            $result = [
                'data' => '',
                'status' => 0,
                'message' => '회원 정보가 없습니다.'
            ];
            echo json_encode($result);
            exit;
        }

        $result = [
            'data' => $select_user_data,
            'status' => 1,
            'message' => ''
        ];

        echo json_encode($result);
        exit;
    }
}