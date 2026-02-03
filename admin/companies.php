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
    <title>Companies - Intervio Admin</title>
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

        .company-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
        }

        .company-card {
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 1.5rem;
            transition: box-shadow 0.3s ease;
        }

        .company-card:hover {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .company-header {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }

        .company-logo {
            width: 60px;
            height: 60px;
            border-radius: 8px;
            object-fit: contain;
            margin-right: 1rem;
        }

        .company-name {
            font-size: 1.25rem;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 0.25rem;
        }

        .company-industry {
            color: #6b7280;
            font-size: 0.875rem;
        }

        .company-stats {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1rem;
        }

        .stat-item {
            text-align: center;
        }

        .stat-value {
            font-size: 1.25rem;
            font-weight: 600;
            color: #1f2937;
        }

        .stat-label {
            font-size: 0.75rem;
            color: #6b7280;
        }

        .badge {
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 500;
        }

        .badge-success {
            background-color: #10b981;
            color: white;
        }

        .badge-warning {
            background-color: #f59e0b;
            color: white;
        }

        .badge-danger {
            background-color: #ef4444;
            color: white;
        }

        .search-box {
            position: relative;
        }

        .search-box input {
            padding-left: 2.5rem;
        }

        .search-box i {
            position: absolute;
            left: 0.75rem;
            top: 50%;
            transform: translateY(-50%);
            color: #6b7280;
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

            .company-grid {
                grid-template-columns: 1fr;
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
            <a href="companies.php" class="menu-item active">
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
            <a href="settings.php" class="menu-item">
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
                <h1 class="h3 mb-0">Companies</h1>
                <p class="text-muted mb-0">Manage partner companies and their profiles</p>
            </div>
            <div>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCompanyModal">
                    <i class="fas fa-plus me-2"></i> Add Company
                </button>
            </div>
        </div>

        <!-- Companies Grid -->
        <div class="content-card">
            <div class="card-header">
                <h5 class="mb-0">All Companies</h5>
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" class="form-control" placeholder="Search companies..." style="width: 250px;">
                </div>
            </div>
            <div class="card-body">
                <div class="company-grid">
                    <!-- Company 1 -->
                    <div class="company-card">
                        <div class="company-header">
                            <img src="https://picsum.photos/seed/microsoft/100/100.jpg" alt="Microsoft" class="company-logo">
                            <div>
                                <div class="company-name">Microsoft India</div>
                                <div class="company-industry">Software Development</div>
                            </div>
                        </div>
                        <div class="company-stats">
                            <div class="stat-item">
                                <div class="stat-value">15</div>
                                <div class="stat-label">Drives</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">89</div>
                                <div class="stat-label">Placements</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">4.5</div>
                                <div class="stat-label">Rating</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge badge-success">Active</span>
                            <div>
                                <button class="btn btn-sm btn-outline-primary me-1">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-warning me-1">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Company 2 -->
                    <div class="company-card">
                        <div class="company-header">
                            <img src="https://picsum.photos/seed/amazon/100/100.jpg" alt="Amazon" class="company-logo">
                            <div>
                                <div class="company-name">Amazon Development Center</div>
                                <div class="company-industry">E-commerce & Cloud</div>
                            </div>
                        </div>
                        <div class="company-stats">
                            <div class="stat-item">
                                <div class="stat-value">12</div>
                                <div class="stat-label">Drives</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">67</div>
                                <div class="stat-label">Placements</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">4.7</div>
                                <div class="stat-label">Rating</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge badge-success">Active</span>
                            <div>
                                <button class="btn btn-sm btn-outline-primary me-1">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-warning me-1">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Company 3 -->
                    <div class="company-card">
                        <div class="company-header">
                            <img src="https://picsum.photos/seed/google/100/100.jpg" alt="Google" class="company-logo">
                            <div>
                                <div class="company-name">Google India</div>
                                <div class="company-industry">Technology & Search</div>
                            </div>
                        </div>
                        <div class="company-stats">
                            <div class="stat-item">
                                <div class="stat-value">8</div>
                                <div class="stat-label">Drives</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">45</div>
                                <div class="stat-label">Placements</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">4.8</div>
                                <div class="stat-label">Rating</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge badge-success">Active</span>
                            <div>
                                <button class="btn btn-sm btn-outline-primary me-1">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-warning me-1">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Company 4 -->
                    <div class="company-card">
                        <div class="company-header">
                            <img src="https://picsum.photos/seed/infosys/100/100.jpg" alt="Infosys" class="company-logo">
                            <div>
                                <div class="company-name">Infosys Limited</div>
                                <div class="company-industry">IT Services</div>
                            </div>
                        </div>
                        <div class="company-stats">
                            <div class="stat-item">
                                <div class="stat-value">20</div>
                                <div class="stat-label">Drives</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">156</div>
                                <div class="stat-label">Placements</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">4.2</div>
                                <div class="stat-label">Rating</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge badge-success">Active</span>
                            <div>
                                <button class="btn btn-sm btn-outline-primary me-1">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-warning me-1">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Company 5 -->
                    <div class="company-card">
                        <div class="company-header">
                            <img src="https://picsum.photos/seed/tcs/100/100.jpg" alt="TCS" class="company-logo">
                            <div>
                                <div class="company-name">Tata Consultancy Services</div>
                                <div class="company-industry">IT Consulting</div>
                            </div>
                        </div>
                        <div class="company-stats">
                            <div class="stat-item">
                                <div class="stat-value">18</div>
                                <div class="stat-label">Drives</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">134</div>
                                <div class="stat-label">Placements</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">4.1</div>
                                <div class="stat-label">Rating</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge badge-warning">Pending</span>
                            <div>
                                <button class="btn btn-sm btn-outline-primary me-1">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-warning me-1">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Company 6 -->
                    <div class="company-card">
                        <div class="company-header">
                            <img src="https://picsum.photos/seed/wipro/100/100.jpg" alt="Wipro" class="company-logo">
                            <div>
                                <div class="company-name">Wipro Technologies</div>
                                <div class="company-industry">IT Services</div>
                            </div>
                        </div>
                        <div class="company-stats">
                            <div class="stat-item">
                                <div class="stat-value">10</div>
                                <div class="stat-label">Drives</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">78</div>
                                <div class="stat-label">Placements</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">3.9</div>
                                <div class="stat-label">Rating</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge badge-success">Active</span>
                            <div>
                                <button class="btn btn-sm btn-outline-primary me-1">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-warning me-1">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Company Modal -->
    <div class="modal fade" id="addCompanyModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Company</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Company Name</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Industry</label>
                                <select class="form-select" required>
                                    <option value="">Select Industry</option>
                                    <option>Software Development</option>
                                    <option>IT Services</option>
                                    <option>E-commerce</option>
                                    <option>Consulting</option>
                                    <option>Manufacturing</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Phone</label>
                                <input type="tel" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Website</label>
                                <input type="url" class="form-control" placeholder="https://example.com">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Contact Person</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <textarea class="form-control" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="3" required></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Add Company</button>
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

        // Search functionality
        document.querySelector('.search-box input').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const cards = document.querySelectorAll('.company-card');
            
            cards.forEach(card => {
                const text = card.textContent.toLowerCase();
                card.style.display = text.includes(searchTerm) ? '' : 'none';
            });
        });
    </script>
</body>
</html>
