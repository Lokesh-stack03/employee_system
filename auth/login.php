<?php
session_start();
$error = isset($_GET['error']) ? $_GET['error'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | EMS Office</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<div class="auth-wrapper">
    <div class="auth-banner" style="background-image: url('../assets/images/hero-login.jpg');">
        <div class="auth-banner-overlay">
            <div class="auth-banner-text">
                <i class="bi bi-building" style="font-size: 3rem; margin-bottom: 1rem; display: block;"></i>
                <h2>Welcome to EMS Office</h2>
                <p>Sign in to access your employee portal and manage your workspace.</p>
            </div>
        </div>
    </div>

    <div class="auth-form-side">
        <div class="auth-card">
            <div class="auth-logo">
                <i class="bi bi-person-circle"></i>
            </div>
            <h3>Sign In</h3>
            <p class="auth-subtitle">Enter your credentials to continue</p>

            <?php if ($error): ?>
            <div class="alert alert-danger alert-auth mb-3"><?php echo htmlspecialchars($error); ?></div>
            <?php endif; ?>

            <form action="login_process.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="you@company.com" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>

            <p class="auth-link">Don't have an account? <a href="registration.php">Register here</a></p>
            <p class="auth-link"><a href="../index.php"><i class="bi bi-arrow-left me-1"></i>Back to Home</a></p>
        </div>
    </div>
</div>

</body>
</html>
