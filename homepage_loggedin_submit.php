<?php
        session_start();
        include('db.php');
        date_default_timezone_set('india');
        if($_POST["status"]!=NULL)
        {
            $user_id=$_SESSION['id'];
            $status= $_POST['status'];
            $day= date('l');
            $date=date('j F');
            $time=date('H:i');    
            $sql="INSERT INTO statuses(user_id,status,created_day,created_date,created_time) VALUES('$user_id','$status','$day','$date','$time')";
            $result=mysqli_query($conn,$sql);
    
            if(!$result){
                die("Error:".$sql."<br/>".mysqli_error($conn));
            }
        }
        ?>
        click<a href="index.php">Here</a>to continue
        <?php
    mysqli_close($conn);
?>

