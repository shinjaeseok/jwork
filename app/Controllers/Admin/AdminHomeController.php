<?php

namespace App\Controllers\Admin;

class AdminHomeController
{
    public function index()
    {
        // 여기에 사용자의 홈 페이지를 표시하는 로직 작성

        // 예시: 사용자 정보 가져오기
        $userName = 'John Doe'; // 사용자 이름 (임의의 값)
        // 뷰 파일을 불러와 사용자 정보를 전달하는 예시

        require_once __DIR__ . '/../../Views/admin/home/index.php';

        // 만약 뷰에 데이터를 전달할 때 템플릿 엔진을 사용한다면 해당 템플릿 엔진의 방식을 따라야 합니다.
    }
}