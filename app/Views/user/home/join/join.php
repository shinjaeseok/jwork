<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>회원가입</title>
</head>
<body>
<header>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.0.0/mdb.min.css" rel="stylesheet"/>
</header>

<main>
    <div class="container  d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="row">
            <div class="w-100 p-4 d-flex justify-content-center pb-4">
                <div style="width: 22rem;">
                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input form="form" type="input" id="user_id" class="form-control" autocomplete="off">
                        <label class="form-label" for="user_id">아이디</label>
                    </div>

                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input form="form" type="password" id="user_password" class="form-control" autocomplete="off">
                        <label class="form-label" for="user_password">비밀번호</label>
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                        <input form="form" type="password" id="user_re_password" class="form-control" autocomplete="off">
                        <label class="form-label" for="user_re_password">비밀번호 재입력</label>
                    </div>

                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                        <div class="col d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked="">
                                <label class="form-check-label" for="form2Example31"> 동의 </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-sm-6"  id="memo_div">
                            <button type="button" class="btn btn-default btn-block mb-4" id="return" onclick="location.href='/'">돌아가기</button>
                        </div>
                        <div class="col-sm-6"  id="memo_div">
                            <button form="form" type="submit" class="btn btn-primary btn-block mb-4" id="join">회원가입</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form id="form" name="form">
        <input type="hidden" id="idx" name="idx">
    </form>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.0.0/mdb.umd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>

    <?php include_once "join_js.php"; ?>
</main>

<footer>
</footer>

</body>
</html>