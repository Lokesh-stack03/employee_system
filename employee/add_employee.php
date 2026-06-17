<?php

session_start();

if(!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin'){
    header("Location: ../auth/login.php");
    exit();
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registartion</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="../assets/style.css">
</head>
<body>
	<div class="container">

	<div class="forms">
		<div class="form-header" style="font-family: bold; font-size: 30px;">
		Employee Registration</div>
		<br><br>
	<form action="insert_employee.php" method="POST">
		<label>Employee Name:</label>
		<input type="text" name="employee_name">
		<br><br>
		<label>Email:</label>
		<input type="email" name="email">
		<br><br>
		<label>Mobile no:</label>
		<input type="text" name="mobile">
		<br><br>
		<label>Department dropdown:</label>
		<select name="department" class="form-control">
			<option value="IT">IT</option>
			<option value="HR">HR</option>
			<option value="Finanace">Finance</option>
		</select>
		<br><br>
		<label for="salary">Salary:</label>
		<input type="number" name="salary">
		<br><br>
		
		<input type="submit" name="submit">
		<br><br>
		
	</form>
</div>


</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>