<?php
include '../db/db.php';
session_start();

if(!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin'){
    header("Location: ../auth/login.php");
    exit();
}

$employee_name = $_POST['employee_name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$department = $_POST['department'];
$salary = $_POST['salary'];

$sql = "INSERT INTO employees
(employee_name, email, mobile, department, salary)
VALUES
('$employee_name', '$email', '$mobile', '$department', '$salary')";

$result = mysqli_query($conn, $sql);

if($result){
    header("Location: view_employee.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
