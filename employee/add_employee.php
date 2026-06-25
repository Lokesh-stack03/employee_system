<?php
session_start();

if(!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin'){
    header("Location: ../auth/login.php");
    exit();
}

$base = '../';
$pageTitle = 'Add Employee';
$showHero = true;
$heroTitle = 'Add Employee';
$heroSubtitle = 'Register a new employee to the system';
$heroImage = $base . 'assets/images/hero-add-employee.jpg';
include '../includes/header.php';
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="form-card">
                <h4 class="mb-4 text-center fw-semibold"><i class="bi bi-person-plus me-2"></i>Employee Registration</h4>
                <form action="insert_employee.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Employee Name</label>
                        <input type="text" name="employee_name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mobile Number</label>
                        <input type="text" name="mobile" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Department</label>
                        <select name="department" class="form-select" required>
                            <option value="IT">IT</option>
                            <option value="HR">HR</option>
                            <option value="Finance">Finance</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Salary</label>
                        <input type="number" name="salary" class="form-control" required>
                    </div>
                    <div class="d-flex gap-2">
                        <button type="submit" name="submit" class="btn btn-accent">Add Employee</button>
                        <a href="view_employee.php" class="btn btn-outline-secondary">View All</a>
                        <a href="../admin/dashboard.php" class="btn btn-outline-secondary">Dashboard</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
