<?php
include '../db/db.php';
session_start();

if(!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin'){
    header("Location: ../auth/login.php");
    exit();
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];

$sql = "INSERT INTO users(username, email, password, role) VALUES('$username','$email','$password','$role')";
$result = mysqli_query($conn, $sql);

if($result){
    header("Location: view_users.php");
    exit();
} else {
    header("Location: add_user.php?error=" . urlencode("Failed to add user."));
    exit();
}
?>
