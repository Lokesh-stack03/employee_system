<?php
include '../db/db.php';
session_start();

if(!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin'){
    header("Location: ../auth/login.php");
    exit();
}

$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];

$sql = "UPDATE users SET
        username = '$username',
        email = '$email',
        password = '$password',
        role = '$role'
        WHERE id = '$id'";

$result = mysqli_query($conn, $sql);

if($result){
    header("Location: view_users.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
