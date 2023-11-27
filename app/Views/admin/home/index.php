<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Home</title>
    <!-- 이곳에 스타일 시트 링크 또는 스타일 시트 내용을 추가할 수 있습니다. -->
</head>
<body>
<header>
    <?php require_once __DIR__ . '/../templates/admin_header.php'; ?>
    <!-- 사용자 헤더를 포함하려면 admin_header.php 파일을 추가합니다. -->
</header>

<main>
    <h1>관리자 화면</h1>
    <p>Hello, <?= $userName ?>!</p>
    <!-- 사용자 이름을 출력합니다. -->
</main>

<footer>
    <?php require_once __DIR__ . '/../templates/admin_footer.php'; ?>
    <!-- 사용자 푸터를 포함하려면 user_footer.php 파일을 추가합니다. -->
</footer>
</body>
</html>