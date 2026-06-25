<?php
include '../db/db.php';
session_start();

if(!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin'){
    header("Location: ../auth/login.php");
    exit();
}

$id = $_GET['id'];

if($id == $_SESSION['user_id']){
    header("Location: view_users.php?error=" . urlencode("You cannot delete your own account."));
    exit();
}

$sql = "DELETE FROM users WHERE id='$id'";
$result = mysqli_query($conn, $sql);

if($result){
    header("Location: view_users.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
