<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>회원가입</title>
</head>
<body>
<header>
</header>

<main>
    <h1>회원가입 페이지</h1>

    <div>
        <input type="text" form="login_form" id="id" name="id" autocomplete="off">
    </div>
    <div>
        <input type="text" form="login_form" id="password" name="password" autocomplete="off">
    </div>
    <div>
        <div style="padding-top:25px;">
            <button class="btn btn-primary" id="btn_login" type="submit">회원가입</button>
        </div>
    </div>

    <?php include_once "join_js.php"; ?>
</main>

<footer>
</footer>

</body>
</html>