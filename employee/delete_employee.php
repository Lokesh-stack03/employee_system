<?php
include '../db/db.php';
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