$(document).ready(function () {
    $('#register_form').submit(function() {
        var url = "register_submit.php";
        var data = $('#register_form').serialize();
        $.ajax({
            url: url,
            data: data,
            success: registration_success,
            error: on_error,
            type: "POST"
        });
        return false;
    });
    
    $('#login_form').submit(function() {
        var url = "login_submit.php";
        var data = $('#login_form').serialize();
        $.ajax({
            url: url,
            data: data,
            success: login_success,
            error: on_error,
            type: "POST"
        });
        return false;
    });
});

var registration_success = function (response) {
    response = JSON.parse(response);

    if (response.success) {
        alert(response.message);
        window.location.href = "/login.php";
    } else {
        alert(response.message);
    }
};

var login_success = function (response) {
    response = JSON.parse(response);

    if (response.success) {
        alert(response.message);
        window.location.href = "/";
    } else {
        alert(response.message);
    }
};
 
var on_error = function () {
    alert("something went wrong");
};
