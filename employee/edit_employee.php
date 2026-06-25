<?php
include '../db/db.php';
session_start();

if(!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin'){
    header("Location: ../auth/login.php");
    exit();
}

$id = $_GET['id'];
$sql = "SELECT * FROM employees WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if(!$row){
    header("Location: view_employee.php");
    exit();
}

$base = '../';
$pageTitle = 'Edit Employee';
$showHero = true;
$heroTitle = 'Edit Employee';
$heroSubtitle = 'Update employee information';
$heroImage = $base . 'assets/images/hero-edit-employee.jpg';
include '../includes/header.php';
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="form-card">
                <h4 class="mb-4 text-center fw-semibold"><i class="bi bi-pencil-square me-2"></i>Edit Employee</h4>
                <form action="update_employe.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <div class="mb-3">
                        <label class="form-label">Employee Name</label>
                        <input type="text" name="employee_name" class="form-control" value="<?php echo htmlspecialchars($row['employee_name']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo htmlspecialchars($row['email']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mobile</label>
                        <input type="text" name="mobile" class="form-control" value="<?php echo htmlspecialchars($row['mobile']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Department</label>
                        <select name="department" class="form-select" required>
                            <option value="IT" <?php echo $row['department'] === 'IT' ? 'selected' : ''; ?>>IT</option>
                            <option value="HR" <?php echo $row['department'] === 'HR' ? 'selected' : ''; ?>>HR</option>
                            <option value="Finance" <?php echo $row['department'] === 'Finance' || $row['department'] === 'Finanace' ? 'selected' : ''; ?>>Finance</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Salary</label>
                        <input type="number" name="salary" class="form-control" value="<?php echo $row['salary']; ?>" required>
                    </div>
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-accent">Update Employee</button>
                        <a href="view_employee.php" class="btn btn-outline-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
