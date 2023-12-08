<?php require_once __DIR__ . '/../../templates/user_header.php'; ?>

<div class="container my-4">

    <div class="contents">

        <h1>유저 정보</h1>

        <div class="row mb-4">
            <div class="col col-lg-3 offset-md-3">
                <label for="user_code" class="form-label">아이디</label>
                <input form="form" type="text" class="form-control" id="user_code" readonly>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col col-lg-3 offset-md-3">
                <label for="password" class="form-label">비밀번호</label>
                <input form="form" type="password" class="form-control" id="user_password" autocomplete="off" required>
            </div>
            <div class="col col-lg-3">
                <label for="new_password" class="form-label">신규 비밀번호</label>
                <input form="form" type="password" class="form-control" id="user_new_password" placeholder="입력 시 비밀번호 변경" autocomplete="off">
            </div>
        </div>

        <div class="row mb-4">
            <div class="col col-lg-3 offset-md-3">
                <label for="user_name" class="form-label">이름</label>
                <input form="form" type="text" class="form-control" id="user_name" autocomplete="off">
            </div>
        </div>

        <div class="row mb-4">
            <div class="col col-lg-3 offset-md-3">
                <label for="user_phone" class="form-label">연락처</label>
                <input form="form" type="text" class="form-control" id="user_phone" autocomplete="off">
            </div>
        </div>

        <div class="row mb-4">
            <div class="col col-lg-3 offset-md-3">
                <label for="user_email" class="form-label">이메일</label>
                <input form="form" type="email" class="form-control" id="user_email" autocomplete="off">
            </div>
        </div>

        <div class="row mb-4">
            <div class="col col-lg-6 offset-md-3">
                <label for="user_address" class="form-label">주소</label>
                <input form="form" type="text" class="form-control" id="user_address" autocomplete="off">
            </div>
        </div>

        <div class="row mb-4">
            <div class="col col-lg-12 text-center">
            <button form="form" class="btn btn-primary" id="btn_save" type="submit">저장</button>
            </div>
        </div>
    </div>

    <form id="form" name="form">
        <input type="hidden" id="idx" name="idx">
    </form>
</div>

<?php require_once __DIR__ . '/../../templates/user_footer.php'; ?>

<?php include_once "user_info_js.php"; ?>
