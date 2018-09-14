$("#fis-confirm").on('click', function(e) {
    $('#fis-confirm').attr("disabled","disabled");
    var name = $("#fis-child-name").val();
    var language = getQueryString("l");
    if ($("#fis-child-name").val() == null) {
        language == "cn" ? $("#fis-error-msg").text("请输入姓名（或昵称）") : $("#fis-error-msg").text("Please input a name");
        $("#fis-error-msg").removeClass("hidden");
        $('#fis-confirm').attr("disabled",false);
    } else {
        if ($("#fis-child-name").val().trim() === "") {
            language == "cn" ? $("#fis-error-msg").text("名字不能为空") : $("#fis-error-msg").text("The name cannot be empty");
            $("#fis-error-msg").removeClass("hidden");
            $('#fis-confirm').attr("disabled",false);
        } else {
            $("#fis-error-msg").addClass("hidden");
            $.ajax({
                type: 'POST',
                url: 'assets/functions/record_name_ajax.php',
                data: { name: name },
                dataType: 'json',
                success: function(response) {

                    $('#fis-confirm').attr("disabled",false);
                    location.href = $("#url").text();
                },
                error: function (response) {
                    $('#fis-confirm').attr("disabled",false);
                }
            });

        }
    }
});

function getQueryString(name)
{
    var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
    var r = window.location.search.substr(1).match(reg);
    if(r!=null)
        return unescape(r[2]);
    return null;
}