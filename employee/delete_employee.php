<?php
include '../db/db.php';
session_start();

if(!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin'){
    header("Location: ../auth/login.php");
    exit();
}
$id=$_GET['id'];
$sql = "DELETE FROM employees WHERE id='$id'";
$result= mysqli_query($conn,$sql);
if($result){
	header("Location: view_employee.php");
	exit();
}else{
	echo "ERROR:". mysqli_error($conn);
}
?>