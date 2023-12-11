<script>
    const { createApp, ref } = Vue

    createApp({
        data() {
            return {
                userData: {
                    userCode: '',
                    userPassword: '',
                    userRePassword: '',
                }
            }
        },
        methods: {
            joinUser() {
                if (!this.userData.userCode) {
                    alert('아이디를 입력해주세요.');
                    return;
                }

                if (!this.userData.userPassword) {
                    alert('비밀번호를 입력해주세요.');
                    return;
                }

                if (!this.userData.userRePassword) {
                    alert('비밀번호를 입력해주세요.');
                    return;
                }

                axios.post("/join/user", {
                    user_code: this.userData.userCode,
                    user_password: this.userData.userPassword,
                    user_re_password: this.userData.userRePassword,
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