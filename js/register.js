$(document).ready(function () {
    $('#name').keyup(function(){
        if(validatename())
        {
            $('#name').css("border","2px solid green");
            $('#error_name').hide();
        }
        else
        {
            $('#name').css("border","2px solid red");
            $('#error_name').show();
            $('#error_name').html("Username should contain character only");
            $('#error_name').css("color","black");
         }
     });
      $('#email').keyup(function(){
        if(validateemail())
        {
            $('#email').css("border","2px solid green");
            $('#error_email').hide();
        }
        else
        {
            $('#email').css("border","2px solid red");
            $('#error_email').show();
            $('#error_email').html("please enter a valid email");
            $('#error_email').css("color","black");
         }
     });
      $('#password').keyup(function(){
        if(validatepassword())
        {
            $('#password').css("border","2px solid green");
            $('#error_password').hide();
        }
        else
        {
            $('#password').css("border","2px solid red");
            $('#error_password').show();
            $('#error_password').html("password not valid");
            $('#error_password').css("color","black");
         }
     });
      $('#conf_password').keyup(function(){
        if(validateconf_password())
        {
            $('#conf_password').css("border","2px solid green");
            $('#error_conf_password').hide();
        }
        else
        {
            $('#conf_password').css("border","2px solid red");
            $('#error_conf_password').show();
            $('#error_conf_password').html("Mismatched");
            $('#error_conf_password').css("color","black");
         }
     });
    $('#register_form').submit(function() {
        if(!(validatename() && validateemail() && validatepassword() && validateconf_password()))
        {
            return false;
        }
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
function validatename(){
    var name=$('#name').val();
    var pattern=/^[a-zA-Z]*$/;
    if(pattern.test(name) && name!=="")
    {
        return true;
    }
    else
    {
        return false;
    }
}
function validateemail(){
    var email=$('#email').val();
    var pattern=/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if(pattern.test(email) && email!=="")
    {
        return true;
    }
    else
    {
        return false;
    }
}
function validatepassword(){
    var password=$('#password').val();
    if(password.length>7)
    {
        return true;
    }
    else
    {
        return false;
    }
}
function validateconf_password(){
    var password=$('#password').val();
    var conf_password=$('#conf_password').val();
    if(conf_password===password)
    {
        return true;
    }
    else
    {
        return false;
    }
}
