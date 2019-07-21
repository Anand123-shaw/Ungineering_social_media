<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/register.css">
    </head>

    <body>
        <?php
            include 'header.php';
        ?> 
                    
        <div class="main">
            <div class="usertype">
                <div class="user_col existing">
                    <a href="/login.php">Existing User</a>
                </div>
                    
                <div class="user_col new">
                    New User
                </div>
            </div>
    
            <div class="create_account">
                <div class="heading">
                    <h2>Create New Account at Ungineering</h2>
                </div>
                <form method="post" id="register_form" action="register_submit.php">
                    <div>
                        <p><b>Name</b></p>
                        <input type="text" name="name"/>
                    </div>
                    <div>
                        <p><b>Email</b></p>
                        <input type="text" name="email"/>
                    </div>
                    <div>
                        <p><b>Password</b></p>
                        <input type="password" name="password"/>
                    </div>
                    <div>
                        <p><b>Confirm Password</b></p>
                        <input type=password name="con_password"/><br/>
                    </div>
                    <div>
                        <b><input type="submit" class="regsub" name="submit" value="Create Account"/></b><br/>
                    </div>
                    <div class="existing_user">
                        <a href="/login.php">Existing User.Login</a>
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
