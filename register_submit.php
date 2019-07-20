<?php
    include 'db.php';
    $response=array();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    
    if (!mysqli_query($conn, $sql)) {
        $response['success'] = false;
        $response['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo json_encode($response);
        exit();
    }

    $response['success'] = true;
    $response['message'] = "Registration successful";
    echo json_encode($response);
    mysqli_close($conn);
?>
