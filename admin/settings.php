<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - Intervio Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --sidebar-width: 250px;
            --primary-color: #4f46e5;
            --secondary-color: #6366f1;
            --dark-bg: #1f2937;
            --light-bg: #f9fafb;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: var(--light-bg);
            margin: 0;
            padding: 0;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: var(--sidebar-width);
            height: 100vh;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            z-index: 1000;
            transition: transform 0.3s ease;
        }

        .sidebar-header {
            padding: 1.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
        }

        .sidebar-header h3 {
            margin: 0;
            font-size: 1.5rem;
            font-weight: 700;
        }

        .sidebar-menu {
            padding: 1rem 0;
        }

        .menu-item {
            display: flex;
            align-items: center;
            padding: 0.75rem 1.5rem;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
        }

        .menu-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            border-left-color: white;
        }

        .menu-item.active {
            background-color: rgba(255, 255, 255, 0.15);
            color: white;
            border-left-color: white;
        }

        .menu-item i {
            margin-right: 0.75rem;
            width: 20px;
            text-align: center;
        }

        .main-content {
            margin-left: var(--sidebar-width);
            padding: 2rem;
            min-height: 100vh;
        }

        .top-header {
            background: white;
            padding: 1rem 2rem;
            border-radius: 10px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .content-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 2rem;
        }

        .card-header {
            padding: 1.5rem;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-body {
            padding: 1.5rem;
        }

        .btn-primary {
            background: var(--primary-color);
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .btn-primary:hover {
            background: var(--secondary-color);
        }

        .nav-tabs {
            border-bottom: 2px solid #e5e7eb;
            margin-bottom: 2rem;
        }

        .nav-tabs .nav-link {
            border: none;
            color: #6b7280;
            padding: 1rem 1.5rem;
            border-bottom: 2px solid transparent;
            transition: all 0.3s ease;
        }

        .nav-tabs .nav-link.active {
            color: var(--primary-color);
            border-bottom-color: var(--primary-color);
            background: none;
        }

        .nav-tabs .nav-link:hover {
            color: var(--primary-color);
            border-bottom-color: var(--primary-color);
        }

        .form-label {
            font-weight: 500;
            color: #374151;
            margin-bottom: 0.5rem;
        }

        .form-control, .form-select {
            border: 1px solid #d1d5db;
            border-radius: 8px;
            padding: 0.75rem;
            transition: border-color 0.3s ease;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
            outline: none;
        }

        .form-check-input:checked {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .mobile-toggle {
            display: none;
            position: fixed;
            top: 1rem;
            left: 1rem;
            z-index: 1001;
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 0.5rem;
            border-radius: 5px;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
            }

            .mobile-toggle {
                display: block;
            }
        }
    </style>
</head>
<body>
    <!-- Mobile Toggle -->
    <button class="mobile-toggle" onclick="toggleSidebar()">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <h3><i class="fas fa-graduation-cap"></i> Intervio Admin</h3>
        </div>
        <nav class="sidebar-menu">
            <a href="index.php" class="menu-item">
                <i class="fas fa-tachometer-alt"></i>
                Dashboard
            </a>
            <a href="students.php" class="menu-item">
                <i class="fas fa-users"></i>
                Student Accounts
            </a>
            <a href="drives.php" class="menu-item">
                <i class="fas fa-briefcase"></i>
                Upcoming Drives
            </a>
            <a href="companies.php" class="menu-item">
                <i class="fas fa-building"></i>
                Companies
            </a>
            <a href="aptitude.php" class="menu-item">
                <i class="fas fa-brain"></i>
                Mock Aptitude Tests
            </a>
            <a href="interviews.php" class="menu-item">
                <i class="fas fa-comments"></i>
                Interview Preparation
            </a>
            <a href="announcements.php" class="menu-item">
                <i class="fas fa-bullhorn"></i>
                Announcements
            </a>
            <a href="payments.php" class="menu-item">
                <i class="fas fa-credit-card"></i>
                Payment Gateway
            </a>
            <a href="notifications.php" class="menu-item">
                <i class="fas fa-bell"></i>
                Notifications
            </a>
            <a href="settings.php" class="menu-item active">
                <i class="fas fa-cog"></i>
                Settings
            </a>
            <a href="logout.php" class="menu-item">
                <i class="fas fa-sign-out-alt"></i>
                Logout
            </a>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Header -->
        <div class="top-header">
            <div>
                <h1 class="h3 mb-0">Settings</h1>
                <p class="text-muted mb-0">Manage system settings and configuration</p>
            </div>
            <div>
                <button class="btn btn-primary">
                    <i class="fas fa-save me-2"></i> Save All Changes
                </button>
            </div>
        </div>

        <!-- Settings Tabs -->
        <div class="content-card">
            <div class="card-header">
                <h5 class="mb-0">System Configuration</h5>
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#general">General</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#email">Email</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#security">Security</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#appearance">Appearance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#backup">Backup</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <!-- General Settings -->
                    <div class="tab-pane fade show active" id="general">
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Site Name</label>
                                    <input type="text" class="form-control" value="Intervio Placement Portal">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Site URL</label>
                                    <input type="url" class="form-control" value="https://intervio.example.com">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Admin Email</label>
                                    <input type="email" class="form-control" value="admin@intervio.example.com">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Timezone</label>
                                    <select class="form-select">
                                        <option>Asia/Kolkata</option>
                                        <option>UTC</option>
                                        <option>America/New_York</option>
                                        <option>Europe/London</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Default Language</label>
                                    <select class="form-select">
                                        <option>English</option>
                                        <option>Hindi</option>
                                        <option>Spanish</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Date Format</label>
                                    <select class="form-select">
                                        <option>DD/MM/YYYY</option>
                                        <option>MM/DD/YYYY</option>
                                        <option>YYYY-MM-DD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="maintenance" checked>
                                    <label class="form-check-label" for="maintenance">
                                        Enable Maintenance Mode
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="registration" checked>
                                    <label class="form-check-label" for="registration">
                                        Allow Student Registration
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Email Settings -->
                    <div class="tab-pane fade" id="email">
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">SMTP Host</label>
                                    <input type="text" class="form-control" placeholder="smtp.gmail.com">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">SMTP Port</label>
                                    <input type="number" class="form-control" placeholder="587">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">SMTP Username</label>
                                    <input type="email" class="form-control" placeholder="your-email@gmail.com">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">SMTP Password</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Encryption</label>
                                    <select class="form-select">
                                        <option>TLS</option>
                                        <option>SSL</option>
                                        <option>None</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">From Email</label>
                                    <input type="email" class="form-control" placeholder="noreply@intervio.example.com">
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="emailVerification" checked>
                                    <label class="form-check-label" for="emailVerification">
                                        Enable Email Verification
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button type="button" class="btn btn-outline-primary">
                                    <i class="fas fa-envelope me-2"></i> Test Email Configuration
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Security Settings -->
                    <div class="tab-pane fade" id="security">
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Session Timeout (minutes)</label>
                                    <input type="number" class="form-control" value="30">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Max Login Attempts</label>
                                    <input type="number" class="form-control" value="5">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Password Min Length</label>
                                    <input type="number" class="form-control" value="8">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Password Expiry (days)</label>
                                    <input type="number" class="form-control" value="90">
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="twoFactor">
                                    <label class="form-check-label" for="twoFactor">
                                        Enable Two-Factor Authentication
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="captcha" checked>
                                    <label class="form-check-label" for="captcha">
                                        Enable CAPTCHA on Login
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="ipWhitelist">
                                    <label class="form-check-label" for="ipWhitelist">
                                        Enable IP Whitelist
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Appearance Settings -->
                    <div class="tab-pane fade" id="appearance">
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Primary Color</label>
                                    <input type="color" class="form-control" value="#4f46e5">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Secondary Color</label>
                                    <input type="color" class="form-control" value="#6366f1">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Logo Upload</label>
                                    <input type="file" class="form-control" accept="image/*">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Favicon Upload</label>
                                    <input type="file" class="form-control" accept="image/*">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Custom CSS</label>
                                <textarea class="form-control" rows="6" placeholder="Add custom CSS here..."></textarea>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="darkMode">
                                    <label class="form-check-label" for="darkMode">
                                        Enable Dark Mode
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Backup Settings -->
                    <div class="tab-pane fade" id="backup">
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Backup Frequency</label>
                                    <select class="form-select">
                                        <option>Daily</option>
                                        <option>Weekly</option>
                                        <option>Monthly</option>
                                        <option>Manual Only</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Backup Time</label>
                                    <input type="time" class="form-control" value="02:00">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Backup Location</label>
                                <input type="text" class="form-control" value="/backups/">
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="autoBackup" checked>
                                    <label class="form-check-label" for="autoBackup">
                                        Enable Automatic Backup
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="cloudBackup">
                                    <label class="form-check-label" for="cloudBackup">
                                        Enable Cloud Backup
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="emailBackup">
                                    <label class="form-check-label" for="emailBackup">
                                        Email Backup Reports
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button type="button" class="btn btn-outline-primary">
                                    <i class="fas fa-download me-2"></i> Download Latest Backup
                                </button>
                                <button type="button" class="btn btn-outline-warning ms-2">
                                    <i class="fas fa-sync me-2"></i> Create Backup Now
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('active');
        }

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(event) {
            const sidebar = document.getElementById('sidebar');
            const toggle = document.querySelector('.mobile-toggle');
            
            if (window.innerWidth <= 768 && 
                !sidebar.contains(event.target) && 
                !toggle.contains(event.target) &&
                sidebar.classList.contains('active')) {
                sidebar.classList.remove('active');
            }
        });

        // Set active menu item
        document.querySelectorAll('.menu-item').forEach(item => {
            item.addEventListener('click', function() {
                document.querySelectorAll('.menu-item').forEach(i => i.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>
