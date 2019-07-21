<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/login.css">
    </head>

    <body>
        <?php
            include 'header.php';
        ?>
                            
        <div class="main">
            <div class="usertype">
                <div class="user_col existing">
                    Existing User
                </div>
                    
                <div class="user_col new">
                    <a href="/register.php">New User</a>
                </div>
            </div>
            
            <div class="login">
                <div class="heading">
                    <h2>Login into Ungineering Account</h2>
                </div>
                <form method="post" id="login_form" action="login_submit.php">
                    <div>
                        <p><b>Email</b></p>
                        <input type="text" name="email"/>
                    </div>
                    <div>
                        <p><b>Password</b></p>
                        <input type="password" name="password"/>
                    </div>
                    <div>
                        <b><input type="submit" class="loginsub" name="submit" value="Login"/></b><br/>
                    </div>
                    <div class="new_user">
                        <a href="/register.php">New User.Create Account</a>
                    </div>
                </form>
            </div>
        </div>
        
        <?php
            include 'footer.php';
        ?>
        
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/register.js"></script>
    </body>
</html>

