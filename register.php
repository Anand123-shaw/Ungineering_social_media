<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/register.css">
    </head>

    <body>
        <div class="row header" >
            <div class="row row11">
                <div class="col" >
                    <img src="img/ungineering_logo.svg"/>
                </div>
                <div class="col" >
                    <div class="row row111" >
                        <span style="color: rgb(233,69,55)">un</span><span>gineering</span>
                    </div>
                    <div class="row row112" >
                        <span>A </span><span style="color: rgb(233,69,55)">bit</span><span> of knowledge is good.A</span><span style="color: rgb(233,69,55)"> byte </span><span>is better</span>
                    </div>
                </div> 
            </div>
        </div> 
                    
        <div class="main">
            <div class="usertype">
                <div class="user_col existing">
                    <a href="#">Existing User</a>
                </div>
                    
                <div class="user_col new">
                    New User
                </div>
            </div>
    
            <div class="create_account">
                <div class="heading">
                    <h2>Create New Account at Ungineering</h2>
                </div>
                <form method="post" action="smregister_submit.php">
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
                        <a href="#">Existing User.Login</a>
                    </div>
                </form>
            </div>
        </div>
        

         <div class="row row4" >
            <div class="row row41" >
                <p>Connect with us at</p>
            </div>
            <div class="row row42" >
                <div class="col">
                <a href="#" ><img src="img/logo-youtube-png-clipart-11.png"/></a>
                </div>
                <div class="col">
                <a href="#" ><img src="img/facebook_circle_darkblue-512.png"/></a>
                </div>
            </div>
            <div class="row row43" >
                    <p>For any questions/doubts,write us on -</p>
            </div>
            <div class="row row44" >
                <a href="#">queries@Ungneering.com</a>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/register.js"></script>
    </body>
</html>
