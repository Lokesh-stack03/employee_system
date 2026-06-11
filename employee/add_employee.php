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
		<input type="text" name="department">
		<br><br>
		
		<input type="submit" name="submit">
		<br><br>
		
	</form>
</div>


</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>