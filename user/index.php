<?php
session_start();
if(!isset($_SESSION['user_id']) || $_SESSION['role'] != 'user')
{
	header("Location: ../auth/login.php");
	exit();
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome  User</title>
</head>
<body>
<h2>Welcome User</h2>
<a href="../auth/logout.php">Logout</a>
</body>
</html>