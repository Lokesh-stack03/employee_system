<?php
include '../db/db.php';
session_start();

if(!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin'){
    header("Location: ../auth/login.php");
    exit();
}

$sql = "SELECT * FROM employees";
$result=mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Employees</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</title>
</head>
<body>
<div class="container mt-5">
	<h2 class="text-center mb-4">Employee List</h2>
	<table class="table table-bordered table-striped table-hover">
		<thead class="table-dark">
			<tr>
				<th>ID</th>
				<th>Employee Name</th>
				<th>Email</th>
				<th>Mobile</th>
				<th>Department</th>
				<th>Salary</th>
			</tr>
		</thead>
		<tbody>
			<?php
			while ($row = mysqli_fetch_assoc($result)) {
				?>
				<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['employee_name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['mobile']; ?></td>
                <td><?php echo $row['department']; ?></td>
                <td><?php echo $row['salary']; ?></td>
                <td>
    <a href="edit_employee.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
      <br><br>
    <a href="delete_employee.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
</td>
            </tr>
				
			<?php
}
			?>

		</tbody>
	</table>
</div>
</body>
</html>