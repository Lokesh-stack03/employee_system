<?php
include '../db/db.php';
$username= $_POST['username'];
$password= $_POST['password'];
$email= $_POST['email'];
$sql= "INSERT INTO users(username, email, password, role) VALUES('$username','$email','$password','user')";
$result= mysqli_query($conn,$sql);
if($result){
	header("Location: ../user/index.php");
}else{

}



?>