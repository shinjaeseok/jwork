<?php require_once __DIR__ . '/../../templates/user_header.php'; ?>

<div class="container my-4">

    <div id="app" class="contents">

        <h1>유저 정보</h1>

        <div class="row mb-4">
            <div class="col col-lg-3 offset-md-3">
                <label for="user_code" class="form-label">아이디</label>
                <input type="text" class="form-control" id="user_code" v-model="userData.userCode" readonly>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col col-lg-3 offset-md-3">
                <label for="password" class="form-label">비밀번호</label>
                <input type="password" class="form-control" id="user_password" v-model="userData.userPassword" autocomplete="off" required>
            </div>
            <div class="col col-lg-3">
                <label for="new_password" class="form-label">신규 비밀번호</label>
                <input type="password" class="form-control" id="user_new_password" placeholder="입력 시 비밀번호 변경" v-model="userData.userNewPassword" autocomplete="off">
            </div>
        </div>

        <div class="row mb-4">
            <div class="col col-lg-3 offset-md-3">
                <label for="user_name" class="form-label">이름</label>
                <input type="text" class="form-control" id="user_name" v-model="userData.userName" autocomplete="off">
            </div>
        </div>

        <div class="row mb-4">
            <div class="col col-lg-3 offset-md-3">
                <label for="user_phone" class="form-label">연락처</label>
                <input type="text" class="form-control" id="user_phone" v-model="userData.userPhone" autocomplete="off">
            </div>
        </div>

        <div class="row mb-4">
            <div class="col col-lg-3 offset-md-3">
                <label for="user_email" class="form-label">이메일</label>
                <input type="email" class="form-control" id="user_email" v-model="userData.userEmail" autocomplete="off">
            </div>
        </div>

        <div class="row mb-4">
            <div class="col col-lg-6 offset-md-3">
                <label for="user_address" class="form-label">주소</label>
                <input type="text" class="form-control" id="user_address" v-model="userData.userAddress" autocomplete="off">
            </div>
        </div>

        <div class="row mb-4">
            <div class="col col-lg-12 text-center">
            <button class="btn btn-primary" id="btn_save" @click="saveUserData">저장</button>
            </div>
        </div>
    </div>

</div>

<?php require_once __DIR__ . '/../../templates/user_footer.php'; ?>

<?php include_once "user_info_js.php"; ?>
