$(document).ready(function () {
    $('#update_form').submit(function() {
        var url = "edit_profile_submit.php";
        var data = $('#update_form').serialize();
        $.ajax({
            url: url,
            data: data,
            success: update_success,
            error: on_error,
            type: "POST"
        });
        return false;
    });
});

var update_success = function (response) {
    response = JSON.parse(response);

    if (response.success) {
        alert(response.message);
        window.location.href = "edit_profile.php";
    } else {
        alert(response.message);
    }
};
var on_error = function () {
    alert("something went wrong");
};

