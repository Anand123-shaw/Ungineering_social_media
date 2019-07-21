<?php
    session_start();
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="css/homepage.css"/>
            <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"/>
        </head>
        <body>
            <div class="row header" >
                
        <?php
            include('header.php');
            if(isset($_SESSION['id']) && $_SESSION['id'])
            {
        ?>
                <div class="row button_section" >
                    <div class="col" >
                        <a href="#"><p>My Dashboard</p></a>
                    </div>
                    <div class="col" >
                        <a href="logout.php"><p>Logout</p></a>
                    </div>
                </div>
            </div>
            <div class="row row2" >
                <div class="row row21" >
                    <p>Write something here</p>
                </div>
                <div class="row row22" >
                    <form  id="form_submit" method="post" action ="homepage_loggedin_submit.php">
                        <textarea name="status"></textarea>
                        </br><input  class="submit" type="submit" name="submit" value="post" />
                    </form>     
                </div>
            </div>
        <?php
            }
            else
            {
        ?>
                <div class="row button_section" >
                    <div class="col" >
                        <a href="/login.php"><p>Login</p></a>
                    </div>
                    <div class="col" >
                        <a href="/register.php"><p>New User</p></a>
                    </div>
                </div>
            </div>
        <?php
            }
        ?> 
            
            <div class="row container" >
        
                <?php
                    include('fetch.php');
                ?>      
                                                      
            </div>
            <?php
                include('footer.php');
            ?>
            <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
            <script type="text/javascript" src="js/home.js"></script>
        </body>
    </html>
