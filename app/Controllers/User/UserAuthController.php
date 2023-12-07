<?php
namespace App\Controllers\User;

class UserAuthController
{
    public static function checkSession() {

        session_start();

        if (!isset($_SESSION['user_code'])) {
            header("Location: /login");
            exit();
        }
    }

    public function login()
    {
        require_once __DIR__ . '/../../Views/user/home/login/login.php';
    }

    public function join()
    {
        require_once __DIR__ . '/../../Views/user/home/join/join.php';
    }

    public function userCreate()
    {
        global $db;

        $user_id = sanitize($_POST['user_id']);
        $user_password = sanitize($_POST['user_password']);
        $user_re_password = sanitize($_POST['user_re_password']);
        
        if (empty($user_id) || empty($user_password) || empty($user_re_password)) {
            $result = [
                'data' => '',
                'status' => 0,
                'message' => '입력한 내용을 확인해주세요.'
            ];
            echo json_encode($result);
            exit;
        }

        if ($user_password != $user_re_password) {
            $result = [
                'data' => '',
                'status' => 0,
                'message' => '비밀번호가 다릅니다.'
            ];
            echo json_encode($result);
            exit;
        }

        $sql = "
                SELECT code
                FROM users
                WHERE code = '${user_id}'
        ";

        $select_user_code = $db->query($sql)->numRows();

        if ($select_user_code != 0) {
            $result = [
                'data' => '',
                'status' => 0,
                'message' => '이미 가입된 아이디 입니다.'
            ];
            echo json_encode($result);
            exit;
        }

        $password = enc($user_password);

        $sql = "
                    INSERT INTO users
                    
                    SET code = '${user_id}',
                    
                        password = '${password}',
                        
                        status = 'Y'
        ";

        $result = $db->query($sql)->affectedRows();

        if ($result != -1) {
            $temp = [
                "status" => 1,
                "message" => "회원가입 완료",
            ];
        } else {
            $temp = [
                "status" => 0,
                "message" => "저장 오류",
            ];
        }

        echo json_encode($temp);
    }

    public function userLogin()
    {
        global $db;

        $user_id = sanitize($_POST['user_id']);
        $user_password = sanitize($_POST['user_password']);

        if (empty($user_id) || empty($user_password)) {
            $result = [
                'data' => '',
                'status' => 0,
                'message' => '입력한 내용을 확인해주세요.'
            ];
            echo json_encode($result);
            exit;
        }

        $sql = "
                SELECT *
                FROM users
                WHERE code = '${user_id}'
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

        if (enc($user_password) != $select_user_data['password']) {
            $result = [
                'data' => '',
                'status' => 0,
                'message' => '회원정보를 확인해주세요.'
            ];
            echo json_encode($result);
            exit;
        }

        // 세션 생성
        session_start();

        $_SESSION['user_code'] = $select_user_data['code'];

        $result = [
            'data' => '',
            'status' => 1,
            'message' => '로그인 성공'
        ];
        echo json_encode($result);
        exit;
    }

    public function logout() {
        session_start();

        session_destroy();

        Header("Location:/");
    }
}

