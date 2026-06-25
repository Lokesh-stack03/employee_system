<?php

session_start();

if(!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin'){
    header("Location: ../auth/login.php");
    exit();
}

$base = '../';
$pageTitle = 'Admin Dashboard';
$showHero = true;
$heroTitle = 'Admin Dashboard';
$heroSubtitle = 'Manage employees, users, and system settings';
$heroImage = $base . 'assets/images/hero-admin.jpg';
include '../includes/header.php';

?>

<div class="container py-5">
    <div class="welcome-banner">
        <div>
            <h3>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h3>
            <p>Manage your organization from the admin control panel.</p>
        </div>
        <a href="../index.php" class="btn btn-light"><i class="bi bi-house me-1"></i>Back to Home</a>
    </div>

    <h4 class="mb-4 fw-semibold text-dark">Employee Management</h4>
    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <a href="../employee/add_employee.php" class="dashboard-card">
                <div class="card-icon bg-icon-green"><i class="bi bi-person-plus-fill"></i></div>
                <h5>Add Employee</h5>
                <p>Register new employees with department and salary details.</p>
            </a>
        </div>
        <div class="col-md-4">
            <a href="../employee/view_employee.php" class="dashboard-card">
                <div class="card-icon bg-icon-blue"><i class="bi bi-people-fill"></i></div>
                <h5>View Employees</h5>
                <p>Browse, edit, and manage all employee records.</p>
            </a>
        </div>
        <div class="col-md-4">
            <a href="../employee/view_employee.php" class="dashboard-card">
                <div class="card-icon bg-icon-orange"><i class="bi bi-pencil-square"></i></div>
                <h5>Edit / Delete</h5>
                <p>Update or remove employee records from the list view.</p>
            </a>
        </div>
    </div>

    <h4 class="mb-4 fw-semibold text-dark">User Management</h4>
    <div class="row g-4">
        <div class="col-md-4">
            <a href="add_user.php" class="dashboard-card">
                <div class="card-icon bg-icon-purple"><i class="bi bi-person-plus"></i></div>
                <h5>Add User</h5>
                <p>Create new user accounts with admin or user roles.</p>
            </a>
        </div>
        <div class="col-md-4">
            <a href="view_users.php" class="dashboard-card">
                <div class="card-icon bg-icon-blue"><i class="bi bi-person-lines-fill"></i></div>
                <h5>View Users</h5>
                <p>See all registered users and their account details.</p>
            </a>
        </div>
        <div class="col-md-4">
            <a href="view_users.php" class="dashboard-card">
                <div class="card-icon bg-icon-red"><i class="bi bi-gear-fill"></i></div>
                <h5>Manage Users</h5>
                <p>Edit roles, update credentials, or remove users.</p>
            </a>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
