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
    <title>Announcements - Intervio Admin</title>
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

        .announcement-list {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .announcement-item {
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 1.5rem;
            transition: box-shadow 0.3s ease;
        }

        .announcement-item:hover {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .announcement-header {
            display: flex;
            justify-content: space-between;
            align-items: start;
            margin-bottom: 1rem;
        }

        .announcement-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 0.5rem;
        }

        .announcement-meta {
            display: flex;
            gap: 1rem;
            align-items: center;
            color: #6b7280;
            font-size: 0.875rem;
            margin-bottom: 1rem;
        }

        .announcement-content {
            color: #4b5563;
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .announcement-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
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

        .badge-info {
            background-color: #3b82f6;
            color: white;
        }

        .badge-secondary {
            background-color: #6b7280;
            color: white;
        }

        .priority-high {
            border-left: 4px solid #ef4444;
        }

        .priority-medium {
            border-left: 4px solid #f59e0b;
        }

        .priority-low {
            border-left: 4px solid #10b981;
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
            <a href="announcements.php" class="menu-item active">
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
                <h1 class="h3 mb-0">Announcements</h1>
                <p class="text-muted mb-0">Manage and send announcements to students</p>
            </div>
            <div>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addAnnouncementModal">
                    <i class="fas fa-plus me-2"></i> New Announcement
                </button>
            </div>
        </div>

        <!-- Announcements List -->
        <div class="content-card">
            <div class="card-header">
                <h5 class="mb-0">All Announcements</h5>
                <div>
                    <select class="form-select me-2" style="width: 150px;">
                        <option>All Status</option>
                        <option>Published</option>
                        <option>Draft</option>
                        <option>Scheduled</option>
                    </select>
                    <div class="search-box d-inline-block">
                        <i class="fas fa-search"></i>
                        <input type="text" class="form-control" placeholder="Search announcements..." style="width: 200px;">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="announcement-list">
                    <!-- Announcement 1 -->
                    <div class="announcement-item priority-high">
                        <div class="announcement-header">
                            <div>
                                <div class="announcement-title">🚀 Microsoft Drive - Last Date to Apply Extended</div>
                                <div class="announcement-meta">
                                    <span><i class="fas fa-calendar me-1"></i> Dec 10, 2024</span>
                                    <span><i class="fas fa-clock me-1"></i> 2:30 PM</span>
                                    <span><i class="fas fa-user me-1"></i> Admin</span>
                                </div>
                            </div>
                            <span class="badge badge-success">Published</span>
                        </div>
                        <div class="announcement-content">
                            Good news! Microsoft has extended the last date to apply for their Software Developer position. Students can now apply until December 20, 2024. Don't miss this opportunity to work with one of the world's leading tech companies. Make sure to update your resumes and prepare for the technical assessment.
                        </div>
                        <div class="announcement-actions">
                            <div>
                                <span class="text-muted small">
                                    <i class="fas fa-eye me-1"></i> 234 views
                                </span>
                            </div>
                            <div>
                                <button class="btn btn-sm btn-outline-primary me-1">
                                    <i class="fas fa-eye"></i> View
                                </button>
                                <button class="btn btn-sm btn-outline-warning me-1">
                                    <i class="fas fa-edit"></i> Edit
                                </button>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Announcement 2 -->
                    <div class="announcement-item priority-medium">
                        <div class="announcement-header">
                            <div>
                                <div class="announcement-title">📚 New Mock Test Series Available</div>
                                <div class="announcement-meta">
                                    <span><i class="fas fa-calendar me-1"></i> Dec 8, 2024</span>
                                    <span><i class="fas fa-clock me-1"></i> 10:00 AM</span>
                                    <span><i class="fas fa-user me-1"></i> Admin</span>
                                </div>
                            </div>
                            <span class="badge badge-success">Published</span>
                        </div>
                        <div class="announcement-content">
                            We're excited to announce a new series of mock aptitude tests covering all major topics including quantitative aptitude, logical reasoning, and verbal ability. These tests are designed to help you prepare for upcoming placement drives. Access them now from your student dashboard.
                        </div>
                        <div class="announcement-actions">
                            <div>
                                <span class="text-muted small">
                                    <i class="fas fa-eye me-1"></i> 189 views
                                </span>
                            </div>
                            <div>
                                <button class="btn btn-sm btn-outline-primary me-1">
                                    <i class="fas fa-eye"></i> View
                                </button>
                                <button class="btn btn-sm btn-outline-warning me-1">
                                    <i class="fas fa-edit"></i> Edit
                                </button>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Announcement 3 -->
                    <div class="announcement-item priority-low">
                        <div class="announcement-header">
                            <div>
                                <div class="announcement-title">🎓 Placement Workshop - Register Now</div>
                                <div class="announcement-meta">
                                    <span><i class="fas fa-calendar me-1"></i> Dec 5, 2024</span>
                                    <span><i class="fas fa-clock me-1"></i> 3:45 PM</span>
                                    <span><i class="fas fa-user me-1"></i> Admin</span>
                                </div>
                            </div>
                            <span class="badge badge-info">Scheduled</span>
                        </div>
                        <div class="announcement-content">
                            Join our comprehensive placement workshop on December 15, 2024. Learn resume building, interview skills, and get tips from industry experts. Limited seats available. Register now through the student portal.
                        </div>
                        <div class="announcement-actions">
                            <div>
                                <span class="text-muted small">
                                    <i class="fas fa-eye me-1"></i> 156 views
                                </span>
                            </div>
                            <div>
                                <button class="btn btn-sm btn-outline-primary me-1">
                                    <i class="fas fa-eye"></i> View
                                </button>
                                <button class="btn btn-sm btn-outline-warning me-1">
                                    <i class="fas fa-edit"></i> Edit
                                </button>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Announcement 4 -->
                    <div class="announcement-item priority-medium">
                        <div class="announcement-header">
                            <div>
                                <div class="announcement-title">🔧 System Maintenance Notice</div>
                                <div class="announcement-meta">
                                    <span><i class="fas fa-calendar me-1"></i> Dec 3, 2024</span>
                                    <span><i class="fas fa-clock me-1"></i> 11:00 AM</span>
                                    <span><i class="fas fa-user me-1"></i> Admin</span>
                                </div>
                            </div>
                            <span class="badge badge-warning">Draft</span>
                        </div>
                        <div class="announcement-content">
                            The placement portal will undergo scheduled maintenance on December 12, 2024, from 2:00 AM to 6:00 AM. During this time, the system will be unavailable. Please complete all your applications before the maintenance window.
                        </div>
                        <div class="announcement-actions">
                            <div>
                                <span class="text-muted small">
                                    <i class="fas fa-eye me-1"></i> 0 views
                                </span>
                            </div>
                            <div>
                                <button class="btn btn-sm btn-outline-primary me-1">
                                    <i class="fas fa-eye"></i> View
                                </button>
                                <button class="btn btn-sm btn-outline-warning me-1">
                                    <i class="fas fa-edit"></i> Edit
                                </button>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Announcement 5 -->
                    <div class="announcement-item priority-low">
                        <div class="announcement-header">
                            <div>
                                <div class="announcement-title">🏆 Congratulations - Placement Success Stories</div>
                                <div class="announcement-meta">
                                    <span><i class="fas fa-calendar me-1"></i> Dec 1, 2024</span>
                                    <span><i class="fas fa-clock me-1"></i> 4:00 PM</span>
                                    <span><i class="fas fa-user me-1"></i> Admin</span>
                                </div>
                            </div>
                            <span class="badge badge-success">Published</span>
                        </div>
                        <div class="announcement-content">
                            We're proud to announce that 45 students have successfully been placed this month! Special congratulations to those who secured positions at top companies. Your hard work and dedication have paid off. Keep inspiring others with your success stories.
                        </div>
                        <div class="announcement-actions">
                            <div>
                                <span class="text-muted small">
                                    <i class="fas fa-eye me-1"></i> 312 views
                                </span>
                            </div>
                            <div>
                                <button class="btn btn-sm btn-outline-primary me-1">
                                    <i class="fas fa-eye"></i> View
                                </button>
                                <button class="btn btn-sm btn-outline-warning me-1">
                                    <i class="fas fa-edit"></i> Edit
                                </button>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="fas fa-trash"></i> Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Announcement Modal -->
    <div class="modal fade" id="addAnnouncementModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create New Announcement</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-8 mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Priority</label>
                                <select class="form-select" required>
                                    <option value="">Select Priority</option>
                                    <option>High</option>
                                    <option>Medium</option>
                                    <option>Low</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Content</label>
                            <textarea class="form-control" rows="6" required></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Schedule Date</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Schedule Time</label>
                                <input type="time" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Target Audience</label>
                                <select class="form-select" required>
                                    <option value="">Select Audience</option>
                                    <option>All Students</option>
                                    <option>Final Year</option>
                                    <option>Third Year</option>
                                    <option>Second Year</option>
                                    <option>First Year</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Status</label>
                                <select class="form-select" required>
                                    <option>Draft</option>
                                    <option>Published</option>
                                    <option>Scheduled</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="sendNotification">
                                <label class="form-check-label" for="sendNotification">
                                    Send push notification to students
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Create Announcement</button>
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
            const items = document.querySelectorAll('.announcement-item');
            
            items.forEach(item => {
                const text = item.textContent.toLowerCase();
                item.style.display = text.includes(searchTerm) ? '' : 'none';
            });
        });
    </script>
</body>
</html>
