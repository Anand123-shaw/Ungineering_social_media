<?php
    session_start();
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="css/dashboard.css"/>
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
                        <p>Profile</p>
                    </div>
                    <div class="col" >
                       <a href="edit_profile.php"><p>Edit Profile</p></a>
                    </div>
                </div> 
        
                <?php
                    include('dashboard_fetch.php');
                ?>      
            </div>
            <?php
                 include('footer.php');
            ?>                                          
  
           
            <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
            <script type="text/javascript" src="js/dashboard.js"></script>
        </body>
    </html>
