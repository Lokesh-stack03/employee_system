<?php
session_start();
include '../db/db.php';

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "INSERT INTO users(username, email, password, role) VALUES('$username','$email','$password','user')";
$result = mysqli_query($conn, $sql);

if($result){
    $_SESSION['user_id'] = mysqli_insert_id($conn);
    $_SESSION['username'] = $username;
    $_SESSION['role'] = 'user';
    header("Location: ../index.php");
    exit();
} else {
    header("Location: registration.php?error=" . urlencode("Registration failed. Email may already exist."));
    exit();
}

?>
