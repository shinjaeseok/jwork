<script>
    const { createApp, ref } = Vue

    createApp({
        data() {
            return {
                userData: {
                    userCode: '',
                    userPassword: '',
                    userNewPassword: '',
                    userName: '',
                    userPhone: '',
                    userEmail: '',
                    userAddress: '',
                }
            }
        },
        mounted() {
            axios.get("/user_info/select").then((response) => {
                this.userData.userCode = response.data.code;
                this.userData.userName = response.data.name;
                this.userData.userPhone = response.data.phone;
                this.userData.userEmail = response.data.email;
                this.userData.userAddress = response.data.address;
            }).catch((error) => {
                console.error('Error fetching data:', error);
            });
        },
        methods: {
            saveUserData() {
                axios.post("/user_info/save", {
                    user_code: this.userData.userCode,
                    user_password: this.userData.userPassword,
                    user_new_password: this.userData.userNewPassword,
                    user_name: this.userData.userName,
                    user_phone: this.userData.userPhone,
                    user_email: this.userData.userEmail,
                    user_address: this.userData.userAddress,
                }, { headers: {
                    'Content-Type': 'multipart/form-data',
                },
                })
                    .then((response) => {
                        alert(response.data.message);
                    })
                    .catch((error) => {
                        console.error('Error saving data:', error);
                    });
            }
        },

    }).mount('#app')

</script>