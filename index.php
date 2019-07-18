<?php
    session_start();
    if(!isset($_SESSION['id']))
    {
?>
        
        <!DOCTYPE html>
        <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="css/homepage.css"/>
            <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"/>
        </head>
        <body>
            <div class="row row1" >
                <div class="row row11">
                    <div class="col" >
                        <a href="homepage.php"><img src="img/ungineering_logo.svg"/></a>
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
                <div class="row row12" >
                    <div class="col" >
                        <a href="login_form.html"><p>Login</p></a>
                    </div>
                    <div class="col" >
                        <a href="register_form.html"><p>New User</p></a>
                    </div>
                </div> 
            </div>
            <div class="row row2" >
        
                                                                    

            <?php
                include('db.php');
    
                $sql="SELECT * FROM statuses";
                $result=mysqli_query($conn,$sql);
                $sql1="select users.name from users INNER JOIN statuses on users.id=statuses.user_id order by statuses.created_time ASC";
                $result1=mysqli_query($conn,$sql1);

    
                if(! $result){
                    die("Error:".$sql."<br/>".mysqli_error($conn));
                }
                while ( $row=mysqli_fetch_array($result)){
                    $row1=mysqli_fetch_array($result1);
                ?>
            
                <div class="row row21" >
                    <div class="row row211" >
                        <h4><?php echo $row1["name"]; ?></h4>
                    </div>
                    <div class="row row212" >
                        <p><?php echo $row["status"]; ?></p>
                    </div>
                    <div class="row row213" >
                        <p><?php echo "Time: " . $row["created_time"] . " Hrs IST | " . $row["created_date"]; ?></p>
                    </div>
                </div>
                <?php 
                }
                mysqli_close($conn);
            ?>  
        
                                                      
            </div>
            <div class="row row3" >
                <div class="row row31" >
                    <p>Connect with us at</p>
                </div>
                <div class="row row32" >
                    <div class="col">
                        <a href="https://www.youtube.com/" ><img src="img/logo-youtube-png-clipart-11.png"/></a>
                    </div>
                    <div class="col">
                        <a href="https://www.facebook.com/" ><img src="img/facebook_circle_darkblue-512.png"/></a>
                    </div>
                </div>
                <div class="row row33" >
                    <p>For any questions/doubts,write us on -</p>
                </div>
                <div class="row row34" >
                    <a href="http://www.ungineering.com/">queries@Ungneering.com</a>
                </div>
            </div>
        </body>
    </html>
        
        
        
<?php       
    }
    else{
?> 
       <!DOCTYPE html>
       <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="css/homepage_loggedin.css"/>
            <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        </head>
        <body>
            <div class="row row1" >
                <div class="row row11">
                    <div class="col" >
                        <a href="homepage.php"><img src="img/ungineering_logo.svg"/></a>
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
                <div class="row row12" >
                    <div class="col" >
                        <a href="#"><p>My Dashboard</p></a>
                    </div>
                    <div class="col" >
                        <a href="homepage.php"><p>Logout</p></a>
                    </div>
                </div>
            </div>
            <div class="row row2" >
                <div class="row row21" >
                    <p>Write something here</p>
                </div>
                <div class="row row22" >
                    <form method="post" action ="homepage_loggedin_submit.php">
                        <textarea name="status"></textarea>
                        </br><input  class="submit" type="submit" name="submit" value="Post" />
                    </form>
                </div>
            </div>
            <div class="row row3" >
        
        
            <?php
                include('db.php');
    
                $sql="SELECT * FROM statuses";
                $result=mysqli_query($conn,$sql);
                $sql1="select users.name from users INNER JOIN statuses on users.id=statuses.user_id order by statuses.created_time ASC";
                $result1=mysqli_query($conn,$sql1);

    
                if(! $result){
                    die("Error:".$sql."<br/>".mysqli_error($conn));
                }
                while ( $row=mysqli_fetch_array($result)){
                    $row1=mysqli_fetch_array($result1);
                    if($row["status"]!=NULL)
                    {
                ?>
            
                    <div class="row row31" >
                        <div class="row row311" >
                            <h4><?php echo $row1["name"]; ?></h4>
                        </div>
                        <div class="row row312" >
                            <p><?php echo $row["status"]; ?></p>
                        </div>
                        <div class="row row313" >
                            <p><?php echo "Time: " . $row["created_time"] . " Hrs IST | " . $row["created_date"]; ?></p>
                        </div>
                    </div>
                <?php 
                    }    
                }
                mysqli_close($conn);
            ?>  
           
            </div>
            <div class="row row4" >
                <div class="row row41" >
                    <p>Connect with us at</p>
                </div>
                <div class="row row42" >
                    <div class="col">
                        <a href="https://www.youtube.com/" ><img src="img/logo-youtube-png-clipart-11.png"/></a>
                    </div>
                    <div class="col">
                        <a href="https://www.facebook.com/" ><img src="img/facebook_circle_darkblue-512.png"/></a>
                    </div>
                </div>
                <div class="row row43" >
                    <p>For any questions/doubts,write us on -</p>
                </div>
                <div class="row row44" >
                    <a href="http://www.ungineering.com/">queries@Ungneering.com</a>
                </div>
            </div>
        </body>
    </html>
      
    
<?php
    }  
?>

