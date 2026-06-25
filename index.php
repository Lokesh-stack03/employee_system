<?php
session_start();
$base = '';
$pageTitle = 'Home';
include 'includes/header.php';
?>

<section class="home-hero" style="background-image: url('assets/images/hero-office.jpg');">
    <div class="home-hero-overlay"></div>
    <div class="container home-hero-content">
        <div class="row">
            <div class="col-lg-8 fade-in">
                <?php if (isset($_SESSION['user_id'])): ?>
                <h1>Welcome back, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
                <p>Your employee management portal is ready. Access your dashboard, view team information, and manage your workspace efficiently.</p>
                <div class="hero-buttons">
                    <?php if ($_SESSION['role'] === 'admin'): ?>
                    <a href="admin/dashboard.php" class="btn btn-light btn-lg">Admin Dashboard</a>
                    <?php endif; ?>
                    <a href="auth/logout.php" class="btn btn-outline-light btn-lg">Logout</a>
                </div>
                <?php else: ?>
                <h1>Empower Your Workforce with Smart Management</h1>
                <p>EMS Office provides a complete solution for employee records, HR operations, and organizational growth. Join us today.</p>
                <div class="hero-buttons">
                    <a href="auth/login.php" class="btn btn-light btn-lg">Employee Login</a>
                    <a href="auth/registration.php" class="btn btn-outline-light btn-lg">Create Account</a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="stats-section">
    <div class="container">
        <div class="row g-4">
            <div class="col-6 col-md-3">
                <div class="stat-item">
                    <span class="stat-number">500+</span>
                    <span class="stat-label">Employees Managed</span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-item">
                    <span class="stat-number">15+</span>
                    <span class="stat-label">Departments</span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-item">
                    <span class="stat-number">99%</span>
                    <span class="stat-label">Uptime</span>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-item">
                    <span class="stat-number">24/7</span>
                    <span class="stat-label">Support</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" id="about">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <img src="assets/images/about-team.jpg" alt="Our Team" class="about-image">
            </div>
            <div class="col-lg-6">
                <h2 class="section-title">About EMS Office</h2>
                <p class="text-muted mb-4">We are a leading employee management platform dedicated to helping organizations streamline their HR processes, manage employee data, and foster a productive workplace culture.</p>
                <p class="text-muted mb-4">Our system provides secure access for administrators and employees, with role-based permissions ensuring data integrity and privacy across all departments.</p>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Secure employee data management</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Role-based admin and user access</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Department-wise organization</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Real-time employee records</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section section-alt" id="services">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Our Services</h2>
            <p class="section-subtitle mx-auto">Comprehensive tools to manage every aspect of your workforce</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="feature-card">
                    <div class="icon-wrap"><i class="bi bi-people-fill"></i></div>
                    <h5>Employee Records</h5>
                    <p>Centralized database for all employee information, contact details, and department assignments.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="feature-card">
                    <div class="icon-wrap"><i class="bi bi-shield-lock-fill"></i></div>
                    <h5>Secure Access</h5>
                    <p>Protected login system with role-based access for administrators and regular employees.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="feature-card">
                    <div class="icon-wrap"><i class="bi bi-building"></i></div>
                    <h5>Department Management</h5>
                    <p>Organize teams across IT, HR, Finance, and other departments with ease.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="feature-card">
                    <div class="icon-wrap"><i class="bi bi-graph-up-arrow"></i></div>
                    <h5>HR Analytics</h5>
                    <p>Track salary data, headcount, and departmental growth from a single dashboard.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Our Departments</h2>
            <p class="section-subtitle mx-auto">Explore the teams that power our organization</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="image-card">
                    <img src="assets/images/dept-it.jpg" alt="IT Department">
                    <div class="image-card-body">
                        <h5>IT Department</h5>
                        <p class="text-muted mb-0">Technology infrastructure, software development, and digital solutions.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-card">
                    <img src="assets/images/dept-hr.jpg" alt="HR Department">
                    <div class="image-card-body">
                        <h5>Human Resources</h5>
                        <p class="text-muted mb-0">Talent acquisition, employee welfare, and organizational culture.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-card">
                    <img src="assets/images/dept-finance.jpg" alt="Finance Department">
                    <div class="image-card-body">
                        <h5>Finance</h5>
                        <p class="text-muted mb-0">Payroll management, budgeting, and financial planning.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-alt" id="contact">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Contact Us</h2>
            <p class="section-subtitle mx-auto">Get in touch with our team for any inquiries</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="contact-card text-center">
                    <i class="bi bi-geo-alt-fill"></i>
                    <h6>Office Address</h6>
                    <p>123 Business Park, Tech City, TC 10001</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-card text-center">
                    <i class="bi bi-envelope-fill"></i>
                    <h6>Email Us</h6>
                    <p>info@emsoffice.com<br>support@emsoffice.com</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-card text-center">
                    <i class="bi bi-telephone-fill"></i>
                    <h6>Call Us</h6>
                    <p>+1 (555) 123-4567<br>Mon - Fri, 9AM - 6PM</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
