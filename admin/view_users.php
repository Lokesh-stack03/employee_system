<?php
include '../db/db.php';
session_start();

if(!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin'){
    header("Location: ../auth/login.php");
    exit();
}

$sql = "SELECT * FROM users ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

$base = '../';
$pageTitle = 'User List';
$showHero = true;
$heroTitle = 'User Management';
$heroSubtitle = 'View and manage all system users';
$heroImage = $base . 'assets/images/hero-users.jpg';
include '../includes/header.php';
?>

<div class="container py-5">
    <div class="content-card">
        <div class="content-card-header">
            <h4><i class="bi bi-people me-2"></i>All Users</h4>
            <div>
                <a href="add_user.php" class="btn btn-accent btn-sm me-2"><i class="bi bi-plus-lg me-1"></i>Add User</a>
                <a href="dashboard.php" class="btn btn-outline-secondary btn-sm"><i class="bi bi-arrow-left me-1"></i>Dashboard</a>
            </div>
        </div>
        <div class="content-card-body p-0">
            <div class="table-responsive">
                <table class="table table-modern mb-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo htmlspecialchars($row['username']); ?></td>
                            <td><?php echo htmlspecialchars($row['email']); ?></td>
                            <td>
                                <span class="badge-role <?php echo $row['role'] === 'admin' ? 'badge-admin' : 'badge-user'; ?>">
                                    <?php echo ucfirst($row['role']); ?>
                                </span>
                            </td>
                            <td>
                                <a href="edit_user.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-action">Edit</a>
                                <a href="delete_user.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-action">Delete</a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
