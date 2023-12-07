<script>
    $("#form").on("submit", function() {
        join();
        return false;
    });

    // 모달 저장
    function join() {
        let user_id = $("#user_id").val();
        let user_password = $("#user_password").val();
        let user_re_password = $("#user_re_password").val();

        $.ajax({
            type: "post",
            data: {
                'user_id' : user_id,
                'user_password' : user_password,
                'user_re_password' : user_re_password
            },
            url: "/join/user",
            dataType: "json",
            cache: false,
            async: false,
        }).done(function(result) {
            if (result.status) {
                alert(result.message);
                window.location.href = '/';
            } else {
                alert(result.message);
            }
        });
    }

</script>