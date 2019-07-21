$(document).ready(function () {
    $('#form_submit').submit(function() {
        var status = $('#stat').val();
        if(status=="")
        {
            $('#error').html("Status can't be blank");
            $('#error').css("color","red");
            return false;
        }
        var url = "homepage_loggedin_submit.php";
        var data = $('#form_submit').serialize();
        $.ajax({
            url: url,
            data: data,
            success: submission_success,
            error: on_error,
            type: "POST"
        });
        return false;
    });
});

var submission_success = function (response) {
    response = JSON.parse(response);

    if (response.success) {
        //alert(response.message);
        window.location.href = "index.php";
    } else {
        alert(response.message);
    }
};

var on_error = function () {
    alert("something went wrong");
};
