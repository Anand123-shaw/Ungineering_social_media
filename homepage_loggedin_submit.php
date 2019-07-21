<?php
    session_start();
    include('db.php');
    $response = array();
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

       if (!$result) {
           $response['success'] = false;
           $response['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
           echo json_encode($response);
           exit();
      }
   }

   $response['success'] = true;
   $response['message'] = "submission successful";
   echo json_encode($response);
   mysqli_close($conn);
?>

