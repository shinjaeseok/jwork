<script>
    $("#form").on("submit", function() {
        save();
        return false;
    });

    // 저장
    function save() {
        let user_code = $("#user_code").val();
        let user_password = $("#user_password").val();
        let user_new_password = $("#user_new_password").val();
        let user_name = $("#user_name").val();
        let user_phone = $("#user_phone").val();
        let user_email = $("#user_email").val();
        let user_address = $("#user_address").val();

        $.ajax({
            type: "post",
            data: {
                'user_code' : user_code,
                'user_password' : user_password,
                'user_new_password' : user_new_password,
                'user_name' : user_name,
                'user_phone' : user_phone,
                'user_email' : user_email,
                'user_address' : user_address,
            },
            url: "/user_info/save",
            dataType: "json",
            cache: false,
            async: false,
        }).done(function(result) {
            if (result.status) {
                alert(result.message);
            } else {
                alert(result.message);
            }
        });
    }

    function view() {

        $.ajax({
            type: "post",
            data: {
            },
            url: "/user_info/select",
            dataType: "json",
            cache: false,
            async: false,
        }).done(function(result) {
            if (result.status) {

                $("#user_code").val(result.data.code);
                $("#user_name").val(result.data.name);
                $("#user_phone").val(result.data.phone);
                $("#user_email").val(result.data.email);
                $("#user_address").val(result.data.address);

            } else {
                alert(result.message);
            }
        });
    }

    $(function (){
        view();
    });

</script>