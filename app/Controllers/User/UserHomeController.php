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
                SELECT code, name, phone, email, address
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

    public function userInfoSave() {
        UserAuthController::checkSession();
        global $db;

        $user_code = $_SESSION['user_code'];

        $user_password = sanitize($_POST['user_password']);
        $user_password = enc($user_password);

        $sql = "
                SELECT code
                FROM users
                WHERE code = '${user_code}' AND password = '${user_password}'
        ";

        $select_user_data = $db->query($sql)->fetchArray();

        if (!$select_user_data) {
            $result = [
                'data' => '',
                'status' => 0,
                'message' => '비밀번호를 확인해주세요.'
            ];
            echo json_encode($result);
            exit;
        }

        $user_new_password = sanitize($_POST['user_new_password']);
        $user_name = sanitize($_POST['user_name']);
        $user_phone = sanitize($_POST['user_phone']);
        $user_email = sanitize($_POST['user_email']);
        $user_address = sanitize($_POST['user_address']);

        $password = '';
        if ($user_new_password) {
            $new_password = enc($user_new_password);
            $password =  "password = ${new_password},";
        }

        $sql = "
                    UPdATE users
                    
                    SET 
                        ${password}
                            
                        name = '${user_name}',
                        phone = '${user_phone}',
                        email = '${user_email}',
                        address = '${user_address}'
                        
                    WHERE code = '${user_code}' 
        ";

        $result = $db->query($sql)->affectedRows();

        if ($result != -1) {
            $temp = [
                "status" => 1,
                "message" => "정보가 수정되었습니다.",
            ];
        } else {
            $temp = [
                "status" => 0,
                "message" => "저장 오류",
            ];
        }

        echo json_encode($temp);
    }
}