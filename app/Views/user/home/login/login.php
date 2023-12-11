<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>로그인</title>
</head>
<body>
<header>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.0.0/mdb.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/noto-sans-kr@0.1.1/styles.min.css">
</header>

<style>
    body {
        font-family: "Noto Sans Korean", sans-serif;
    }
</style>

<main>
    <div class="container  d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="row" id="app">
            <div class="w-100 p-4 d-flex justify-content-center pb-4">
                <div style="width: 22rem;">
                    <div class="text-center mb-4">
                        <img src="https://gw.joohong.work/img/fw_logo.jpg" alt="" style="width: 300px;">
                    </div>
                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" class="form-control" :class="{ 'active' : isActive }" autocomplete="off" v-model="userData.userCode">
                        <label class="form-label" for="user_id">아이디</label>
                    </div>

                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="password" class="form-control" autocomplete="off" v-model="userData.userPassword">
                        <label class="form-label" for="user_password">비밀번호</label>
                    </div>

                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                        <div class="col d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="codeRemember"  v-model="rememberCode">
                                <label class="form-check-label" for="codeRemember"> 아이디 저장하기 </label>
                            </div>
                        </div>

                        <div class="col d-flex justify-content-center">
                            <!-- Simple link -->
                            <a href="/join">회원가입</a>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <button type="button" class="btn btn-primary btn-block mb-4" @click="loginUser">로그인</button>
                </div>
            </div>
        </div>
    </div>
</main>

<footer>
</footer>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.0.0/mdb.umd.min.js"></script>

<!-- Vue.js -->
<script src="https://unpkg.com/vue@3/dist/vue.global.prod.js"></script>

<!-- Axios -->
<script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>

<script>
    const { createApp, ref } = Vue

    createApp({
        data() {
            return {
                userData: {
                    userCode: '',
                    userPassword: '',
                },

                rememberCode: false,
                isActive: ''
            }
        },
        created() {
            if (localStorage.getItem('rememberedCode')) {
                this.userData.userCode = localStorage.getItem('rememberedCode');
                this.rememberCode = true;
                this.isActive = 'active';
            }
        },
        methods: {
            loginUser() {
                if (!this.userData.userCode) {
                    alert('아이디를 입력해주세요.');
                    return;
                }

                if (this.rememberCode) {
                    localStorage.setItem('rememberedCode', this.userData.userCode);
                } else {
                    localStorage.removeItem('rememberedCode');
                }
                
                if (!this.userData.userPassword) {
                    alert('비밀번호를 입력해주세요.');
                    return;
                }
                
                axios.post("/login/user", {
                    user_code: this.userData.userCode,
                    user_password: this.userData.userPassword,
                }, { headers: {
                        'Content-Type': 'multipart/form-data',
                    },
                })
                    .then((response) => {
                        alert(response.data.message);

                        if (response.data.success) {
                            window.location.href= '/';
                        }
                    })
                    .catch((error) => {
                        console.error('Error saving data:', error);
                    });
            }
        },

    }).mount('#app')

</script>
</body>
</html>