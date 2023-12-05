<script>
    $("#form").on("submit", function() {
        save();
        return false;
    });

    // 저장
    function save() {
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
            url: "/user/info/update",
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
            type: "get",
            data: {

            },
            url: "/user_info/select",
            dataType: "json",
            cache: false,
            async: false,
        }).done(function(result) {
            if (result.status) {

            } else {
                alert(result.message);
            }
        });
    }


    $(function (){
        view();
    });

</script>