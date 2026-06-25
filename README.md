# EMS Office — Employee Management System

A modern PHP + MySQL employee management web application with role-based authentication, a corporate-style homepage, and full admin CRUD for employees and users.

![EMS Office Hero](assets/images/hero-office.jpg)

## Features

- **Corporate homepage** — Hero banner, about section, services, department cards, and contact info
- **User authentication** — Login and registration with session-based access
- **Role-based access** — Separate flows for `admin` and `user` roles
- **Employee management** — Add, view, edit, and delete employee records
- **User management (Admin)** — Full CRUD for system users
- **Responsive UI** — Bootstrap 5 + custom CSS, no custom JavaScript
- **Local images** — All banners and section images stored in `assets/images/`

## Tech Stack

| Layer      | Technology        |
|-----------|-------------------|
| Backend   | PHP               |
| Database  | MySQL (MariaDB)   |
| Frontend  | HTML, CSS, Bootstrap 5 |
| Server    | XAMPP / Apache    |

## Project Structure

```
employee_system/
├── index.php              # Public office homepage (post-login landing)
├── admin/
│   ├── dashboard.php      # Admin control panel
│   ├── view_users.php     # List all users
│   ├── add_user.php       # Add user form
│   ├── insert_user.php    # Add user handler
│   ├── edit_user.php      # Edit user form
│   ├── update_user.php    # Update user handler
│   └── delete_user.php    # Delete user handler
├── auth/
│   ├── login.php          # Login page
│   ├── login_process.php  # Login handler
│   ├── registration.php   # Registration page
│   ├── register_process.php
│   └── logout.php
├── employee/
│   ├── add_employee.php
│   ├── insert_employee.php
│   ├── view_employee.php
│   ├── edit_employee.php
│   ├── update_employe.php
│   └── delete_employee.php
├── includes/
│   ├── header.php         # Shared navigation & hero
│   └── footer.php         # Shared footer
├── assets/
│   ├── style.css
│   └── images/            # Banner & section images
└── db/
    └── db.php             # Database connection
```

## Database Setup

1. Start **Apache** and **MySQL** in XAMPP.
2. Open phpMyAdmin: `http://localhost/phpmyadmin`
3. Create a database named `employee_datails` (or update `db/db.php` with your DB name).
4. Run the following SQL:

```sql
CREATE DATABASE IF NOT EXISTS employee_datails;
USE employee_datails;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'user') DEFAULT 'user'
);

CREATE TABLE employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    employee_name VARCHAR(150) NOT NULL,
    email VARCHAR(150) NOT NULL,
    mobile VARCHAR(20) NOT NULL,
    department VARCHAR(50) NOT NULL,
    salary DECIMAL(10, 2) NOT NULL
);

-- Default admin account (email: admin@emsoffice.com / password: admin123)
INSERT INTO users (username, email, password, role)
VALUES ('admin', 'admin@emsoffice.com', 'admin123', 'admin');
```

## Installation

1. Clone the repository into your XAMPP `htdocs` folder:

```bash
git clone https://github.com/Lokesh-stack03/employee_system.git
cd employee_system
```

2. Configure the database connection in `db/db.php` if needed:

```php
$conn = mysqli_connect('localhost', 'root', '', 'employee_datails');
```

3. Import or run the SQL above to create tables and the default admin user.

4. Open in your browser:

```
http://localhost/employee_system/
```

## Usage

| Role  | Login redirect | Access |
|-------|----------------|--------|
| User  | `index.php`    | Homepage, logout |
| Admin | `index.php`    | Homepage + Admin Dashboard (employees & users CRUD) |

### Admin Dashboard

- **Employee Management** — Add, view, edit, delete employees
- **User Management** — Add, view, edit, delete system users

## Screenshots

| Page | Image |
|------|-------|
| Homepage | ![Homepage](assets/images/hero-office.jpg) |
| Login | ![Login](assets/images/hero-login.jpg) |
| Admin | ![Admin](assets/images/hero-admin.jpg) |
| Employees | ![Employees](assets/images/hero-employees.jpg) |

## Default Credentials

| Role  | Email              | Password  |
|-------|--------------------|-----------|
| Admin | admin@emsoffice.com | admin123 |

> Change the default admin password after first login in production.

## Author

**Lokesh-stack03** — [GitHub](https://github.com/Lokesh-stack03)

## License

This project is open source and available for educational use.
