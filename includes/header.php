<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$base = isset($base) ? $base : '';
$pageTitle = isset($pageTitle) ? $pageTitle : 'Employee Management System';
$showHero = isset($showHero) ? $showHero : false;
$heroTitle = isset($heroTitle) ? $heroTitle : 'Welcome to Our Office';
$heroSubtitle = isset($heroSubtitle) ? $heroSubtitle : 'Professional Employee Management Solutions';
$heroImage = isset($heroImage) ? $heroImage : $base . 'assets/images/hero-office.jpg';
$isLoggedIn = isset($_SESSION['user_id']);
$username = $isLoggedIn ? htmlspecialchars($_SESSION['username']) : '';
$role = $isLoggedIn ? $_SESSION['role'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?> | EMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base; ?>assets/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top site-navbar">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="<?php echo $base; ?>index.php">
            <i class="bi bi-building me-2"></i>
            <span>EMS Office</span>
        </a>
        <div class="collapse navbar-collapse show" id="mainNav">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base; ?>index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base; ?>index.php#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base; ?>index.php#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base; ?>index.php#contact">Contact</a>
                </li>
                <?php if ($isLoggedIn && $role === 'admin'): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base; ?>admin/dashboard.php">
                        <i class="bi bi-speedometer2 me-1"></i>Admin
                    </a>
                </li>
                <?php endif; ?>
                <?php if ($isLoggedIn): ?>
                <li class="nav-item">
                    <span class="nav-link"><i class="bi bi-person-circle me-1"></i><?php echo $username; ?> (<?php echo ucfirst($role); ?>)</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base; ?>auth/logout.php"><i class="bi bi-box-arrow-right me-1"></i>Logout</a>
                </li>
                <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base; ?>auth/login.php">Login</a>
                </li>
                <li class="nav-item ms-lg-2">
                    <a class="btn btn-light btn-sm px-3" href="<?php echo $base; ?>auth/registration.php">Register</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<?php if ($showHero): ?>
<section class="page-hero" style="background-image: url('<?php echo $heroImage; ?>');">
    <div class="page-hero-overlay"></div>
    <div class="container page-hero-content">
        <h1 class="page-hero-title"><?php echo $heroTitle; ?></h1>
        <p class="page-hero-subtitle"><?php echo $heroSubtitle; ?></p>
    </div>
</section>
<?php endif; ?>

<main class="site-main<?php echo $showHero ? '' : ' no-hero'; ?>">
