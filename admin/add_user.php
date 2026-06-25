<?php
session_start();

if(!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin'){
    header("Location: ../auth/login.php");
    exit();
}

$base = '../';
$pageTitle = 'Add User';
$showHero = true;
$heroTitle = 'Add New User';
$heroSubtitle = 'Create a new user account';
$heroImage = $base . 'assets/images/hero-add-user.jpg';
include '../includes/header.php';
?>

<div class="container py-5">
    <div class="form-card">
        <h4 class="mb-4 text-center fw-semibold">User Registration</h4>
        <form action="insert_user.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Role</label>
                <select name="role" class="form-select" required>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-accent">Add User</button>
                <a href="view_users.php" class="btn btn-outline-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
