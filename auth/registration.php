<?php
session_start();
$error = isset($_GET['error']) ? $_GET['error'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | EMS Office</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<div class="auth-wrapper">
    <div class="auth-banner" style="background-image: url('../assets/images/hero-register.jpg');">
        <div class="auth-banner-overlay">
            <div class="auth-banner-text">
                <i class="bi bi-person-plus" style="font-size: 3rem; margin-bottom: 1rem; display: block;"></i>
                <h2>Join EMS Office</h2>
                <p>Create your account and become part of our growing organization.</p>
            </div>
        </div>
    </div>

    <div class="auth-form-side">
        <div class="auth-card">
            <div class="auth-logo">
                <i class="bi bi-person-plus-fill"></i>
            </div>
            <h3>Create Account</h3>
            <p class="auth-subtitle">Fill in your details to register</p>

            <?php if ($error): ?>
            <div class="alert alert-danger alert-auth mb-3"><?php echo htmlspecialchars($error); ?></div>
            <?php endif; ?>

            <form action="register_process.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Your username" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="you@company.com" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Create a password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>

            <p class="auth-link">Already have an account? <a href="login.php">Sign in here</a></p>
            <p class="auth-link"><a href="../index.php"><i class="bi bi-arrow-left me-1"></i>Back to Home</a></p>
        </div>
    </div>
</div>

</body>
</html>
