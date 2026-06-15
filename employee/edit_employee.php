<?php

include '../db/db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM employees WHERE id = '$id'";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Employee</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="text-center mb-4">Edit Employee</h2>

    <form action="update_employe.php" method="POST">

        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <div class="mb-3">
            <label>Employee Name</label>
            <input type="text"
                   name="employee_name"
                   class="form-control"
                   value="<?php echo $row['employee_name']; ?>">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email"
                   name="email"
                   class="form-control"
                   value="<?php echo $row['email']; ?>">
        </div>

        <div class="mb-3">
            <label>Mobile</label>
            <input type="text"
                   name="mobile"
                   class="form-control"
                   value="<?php echo $row['mobile']; ?>">
        </div>

        <div class="mb-3">
            <label>Department</label>
            <input type="text"
                   name="department"
                   class="form-control"
                   value="<?php echo $row['department']; ?>">
        </div>

        <div class="mb-3">
            <label>Salary</label>
            <input type="number"
                   name="salary"
                   class="form-control"
                   value="<?php echo $row['salary']; ?>">
        </div>

        <button type="submit" class="btn btn-primary">
            Update Employee
        </button>

    </form>

</div>

</body>
</html>