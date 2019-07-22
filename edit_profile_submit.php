<?php
    session_start();
    include 'db.php';
    $response=array();
    
    $id=$_SESSION['id'];
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $institute = $_POST['college_name'];
    $phone_no = $_POST['phone_num'];
    
    $sql = "update users set name='$name',email='$email',password='$password',institute_name='$institute',phone_no='$phone_no' where id=$id";
    
    if (!mysqli_query($conn, $sql)) {
        $response['success'] = false;
        $response['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo json_encode($response);
        exit();
    }

    $response['success'] = true;
    $response['message'] = "successfully Updated";
    echo json_encode($response);
    mysqli_close($conn);
?>
