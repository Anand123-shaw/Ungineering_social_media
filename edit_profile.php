<?php
    session_start();
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="css/edit_profile.css"/>
            <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"/>
        </head>
        <body>
            <div class="row header" >
                <?php
                    include('header.php');
                ?>
                <div class="row button_section" >
                    <div class="col" >
                        <p>My Dashboard</p>
                    </div>
                    <div class="col" >
                        <a href="logout.php"><p>Logout</p></a>
                    </div>
                </div> 
            </div>
            <div class="row container" >
                <div class="row button_selector" >
                    <div class="col" >
                        <a href="dashboard.php"><p>Profile</p></a>
                    </div>
                    <div class="col" >
                        <p>Edit Profile</p>
                    </div>
                </div> 
                <div class="row update">
                    <form method="post" id="update_form" action="edit_profile_submit.php">
                        <?php
                            include('edit_profile_fetch.php');
                        ?> 
                        <div>
                            <b><input type="submit" class="update_button" name="submit" value="update"/></b><br/>
                        </div>
                    </form>
                </div>
            </div>
        
            <?php
                 include('footer.php');
            ?>                                          
  
           
            <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
            <script type="text/javascript" src="js/edit_profile.js"></script>
        </body>
    </html>
