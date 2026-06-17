<?php

session_start();

include '../db/db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users
        WHERE email='$email'
        AND password='$password'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){

    $user = mysqli_fetch_assoc($result);

    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['role'] = $user['role'];

    if($user['role'] == 'admin'){

        header("Location: ../admin/dashboard.php");
        exit();

    }else{

        header("Location: ../user/index.php");
        exit();

    }

}else{

    echo "Invalid Email or Password";

}

?>