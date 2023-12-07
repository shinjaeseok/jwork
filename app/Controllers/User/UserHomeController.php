<?php
namespace App\Controllers\User;

use App\Controllers\User\UserAuthController;

class UserHomeController
{
    public function index()
    {
        UserAuthController::checkSession();
        require_once __DIR__ . '/../../Views/user/home/index.php';
    }

    public function userInfo()
    {
        UserAuthController::checkSession();
        require_once __DIR__ . '/../../Views/user/home/user_info/user_info.php';
    }

    public function userInfoSelect()
    {
        UserAuthController::checkSession();
        global $db;

        $user_code = $_SESSION['user_code'];

        $sql = "
                SELECT code
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