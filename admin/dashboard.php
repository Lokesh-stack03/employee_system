<?php

session_start();

if(!isset($_SESSION['user_id']) ||
   $_SESSION['role'] != 'admin')
{
    header("Location: ../auth/login.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2>Welcome Admin</h2>

    <a href="../employees/add_employee.php"
       class="btn btn-success">
       Add Employee
    </a>

    <a href="../employees/view_employees.php"
       class="btn btn-success">
       View Employees
    </a>

   
     <a href="../employees/delete_employee.php"
       class="btn btn-success">
       Delete Employee
    </a>
     <a href="../auth/logout.php"
       class="btn btn-danger">
       Logout
    </a>

</div>

</body>
</html>