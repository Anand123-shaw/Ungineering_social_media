<?php
    session_start();
    include 'db.php';
    $response = array();
    
    $sql = "SELECT * FROM users";

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        $response['success'] = false;
        $response['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo json_encode($response);
        exit();
    }

    $email = $_POST['email'];
    $pass = $_POST['password'];

    $flag = 0;
    while ($row=mysqli_fetch_array($result)) {
        if ($email == $row['email'] && $pass == $row['password']) {
            $flag = 1;
            break;
        }
    }
    
    if ($flag == 0) {
        $response['success'] = false;
        $response['message'] = "Login failed";
    } else {
        $response['success'] = true;
        $response['message'] = "Hello " . $row['name'];
        $_SESSION['id']=$row['id'];
        //$_SESSION['name']=$row['name'];
    }

    echo json_encode($response);
    mysqli_close($conn);
?>

