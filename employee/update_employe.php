<?php

include '../db/db.php';

$id = $_POST['id'];
$employee_name = $_POST['employee_name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$department = $_POST['department'];
$salary = $_POST['salary'];

$sql = "UPDATE employees
SET
employee_name = '$employee_name',
email = '$email',
mobile = '$mobile',
department = '$department',
salary = '$salary'
WHERE id = '$id'";

$result = mysqli_query($conn, $sql);

if($result){

    header("Location: view_employee.php");
    exit();

}
else{

    echo "Error: " . mysqli_error($conn);

}

?>