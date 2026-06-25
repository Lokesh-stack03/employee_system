<?php
include '../db/db.php';
session_start();

if(!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin'){
    header("Location: ../auth/login.php");
    exit();
}

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if(!$row){
    header("Location: view_users.php");
    exit();
}

$base = '../';
$pageTitle = 'Edit User';
$showHero = true;
$heroTitle = 'Edit User';
$heroSubtitle = 'Update user account details';
$heroImage = $base . 'assets/images/hero-users.jpg';
include '../includes/header.php';
?>

<div class="container py-5">
    <div class="form-card">
        <h4 class="mb-4 text-center fw-semibold">Edit User</h4>
        <form action="update_user.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo htmlspecialchars($row['username']); ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo htmlspecialchars($row['email']); ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo htmlspecialchars($row['password']); ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Role</label>
                <select name="role" class="form-select" required>
                    <option value="user" <?php echo $row['role'] === 'user' ? 'selected' : ''; ?>>User</option>
                    <option value="admin" <?php echo $row['role'] === 'admin' ? 'selected' : ''; ?>>Admin</option>
                </select>
            </div>
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-accent">Update User</button>
                <a href="view_users.php" class="btn btn-outline-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
