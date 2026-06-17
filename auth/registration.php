<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<form action="register_process.php" method="POST">
<div class="register_header">
	<h1>Registration Form</h1>


<div class="mb-3">
    <label>Username:</label>
    <input type="text" name="username" class="form-control" required>
</div>

<div class="mb-3">
    <label>Email:</label>
    <input type="email" name="email" class="form-control" required>
</div>

<div class="mb-3">
    <label>Password:</label>
    <input type="password" name="password" class="form-control" required>
</div>

<button type="submit" class="btn btn-primary">
    Register
</button>

</div>
</form>


</body>
</html>