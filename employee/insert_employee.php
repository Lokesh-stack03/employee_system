<?php
include '../db/db.php';
$employee_name = $_POST['employee_name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$department = $_POST['department'];
$salary = $_POST['salary'];
// echo "<h2>Employee Details</h2>";

// echo "Employee Name: " . $employee_name . "<br>";
// echo "Email: " . $email . "<br>";
// echo "Mobile: " . $mobile . "<br>";
// echo "Department: " . $department . "<br>";
// echo "Salary: " . $salary . "<br>";
$sql = "INSERT INTO employees
(employee_name, email, mobile, department, salary)
VALUES
('$employee_name', '$email', '$mobile', '$department', '$salary')";
$result=mysqli_query($conn,$sql);
if($result){
	echo "Employee DAta Inserted Successfully";
}else{
	echo"error:".mysqli_error($conn);
}
?>