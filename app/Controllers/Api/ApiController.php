<?php
namespace App\Controllers\Api;

class ApiController
{
    public function apiUserLogin()
    {
        global $db;

        $user_code = sanitize($_POST['user_code']);
        $user_password = sanitize($_POST['user_password']);

        $temp = [
            "success" => true,
            "data" => [
                'user_code' => $user_code,
                'user_password' => $user_password,
            ],
            "message" => "저장 오류",
        ];

        echo json_encode($temp, JSON_UNESCAPED_UNICODE);
    }

}

