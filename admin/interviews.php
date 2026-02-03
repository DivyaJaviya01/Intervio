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
    <title>Interview Preparation - Intervio Admin</title>
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

        .prep-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 1.5rem;
        }

        .prep-card {
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 1.5rem;
            transition: box-shadow 0.3s ease;
        }

        .prep-card:hover {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .prep-header {
            display: flex;
            justify-content: space-between;
            align-items: start;
            margin-bottom: 1rem;
        }

        .prep-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 0.5rem;
        }

        .prep-category {
            color: #6b7280;
            font-size: 0.875rem;
            margin-bottom: 0.5rem;
        }

        .prep-description {
            color: #4b5563;
            margin-bottom: 1rem;
            font-size: 0.875rem;
        }

        .prep-stats {
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

        .badge-info {
            background-color: #3b82f6;
            color: white;
        }

        .topic-list {
            list-style: none;
            padding: 0;
            margin-bottom: 1rem;
        }

        .topic-item {
            display: flex;
            align-items: center;
            padding: 0.5rem 0;
            border-bottom: 1px solid #f3f4f6;
            font-size: 0.875rem;
        }

        .topic-item:last-child {
            border-bottom: none;
        }

        .topic-item i {
            color: var(--primary-color);
            margin-right: 0.5rem;
            width: 16px;
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

            .prep-grid {
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
            <a href="companies.php" class="menu-item">
                <i class="fas fa-building"></i>
                Companies
            </a>
            <a href="aptitude.php" class="menu-item">
                <i class="fas fa-brain"></i>
                Mock Aptitude Tests
            </a>
            <a href="interviews.php" class="menu-item active">
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
                <h1 class="h3 mb-0">Interview Preparation</h1>
                <p class="text-muted mb-0">Manage interview tips, topics, and preparation materials</p>
            </div>
            <div>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPrepModal">
                    <i class="fas fa-plus me-2"></i> Add Preparation
                </button>
            </div>
        </div>

        <!-- Preparation Materials Grid -->
        <div class="content-card">
            <div class="card-header">
                <h5 class="mb-0">All Preparation Materials</h5>
                <div>
                    <select class="form-select me-2" style="width: 150px;">
                        <option>All Types</option>
                        <option>Technical</option>
                        <option>Behavioral</option>
                        <option>HR</option>
                        <option>General</option>
                    </select>
                    <div class="search-box d-inline-block">
                        <i class="fas fa-search"></i>
                        <input type="text" class="form-control" placeholder="Search materials..." style="width: 200px;">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="prep-grid">
                    <!-- Prep 1 -->
                    <div class="prep-card">
                        <div class="prep-header">
                            <div>
                                <div class="prep-title">Technical Interview Guide</div>
                                <div class="prep-category">Technical</div>
                            </div>
                            <span class="badge badge-success">Published</span>
                        </div>
                        <div class="prep-description">
                            Comprehensive guide for technical interviews covering programming languages, algorithms, and system design.
                        </div>
                        <ul class="topic-list">
                            <li class="topic-item">
                                <i class="fas fa-check-circle"></i>
                                Data Structures & Algorithms
                            </li>
                            <li class="topic-item">
                                <i class="fas fa-check-circle"></i>
                                Programming Languages
                            </li>
                            <li class="topic-item">
                                <i class="fas fa-check-circle"></i>
                                System Design
                            </li>
                            <li class="topic-item">
                                <i class="fas fa-check-circle"></i>
                                Problem Solving
                            </li>
                        </ul>
                        <div class="prep-stats">
                            <div class="stat-item">
                                <div class="stat-value">45</div>
                                <div class="stat-label">Topics</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">120</div>
                                <div class="stat-label">Questions</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">89%</div>
                                <div class="stat-label">Success</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
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

                    <!-- Prep 2 -->
                    <div class="prep-card">
                        <div class="prep-header">
                            <div>
                                <div class="prep-title">Behavioral Interview Tips</div>
                                <div class="prep-category">Behavioral</div>
                            </div>
                            <span class="badge badge-success">Published</span>
                        </div>
                        <div class="prep-description">
                            Master behavioral interviews with STAR method, common questions, and best practices.
                        </div>
                        <ul class="topic-list">
                            <li class="topic-item">
                                <i class="fas fa-check-circle"></i>
                                STAR Method
                            </li>
                            <li class="topic-item">
                                <i class="fas fa-check-circle"></i>
                                Common Questions
                            </li>
                            <li class="topic-item">
                                <i class="fas fa-check-circle"></i>
                                Body Language
                            </li>
                            <li class="topic-item">
                                <i class="fas fa-check-circle"></i>
                                Communication Skills
                            </li>
                        </ul>
                        <div class="prep-stats">
                            <div class="stat-item">
                                <div class="stat-value">25</div>
                                <div class="stat-label">Topics</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">80</div>
                                <div class="stat-label">Questions</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">92%</div>
                                <div class="stat-label">Success</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
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

                    <!-- Prep 3 -->
                    <div class="prep-card">
                        <div class="prep-header">
                            <div>
                                <div class="prep-title">HR Interview Preparation</div>
                                <div class="prep-category">HR</div>
                            </div>
                            <span class="badge badge-warning">Draft</span>
                        </div>
                        <div class="prep-description">
                            Complete guide for HR interviews including salary negotiation, company research, and culture fit.
                        </div>
                        <ul class="topic-list">
                            <li class="topic-item">
                                <i class="fas fa-check-circle"></i>
                                Company Research
                            </li>
                            <li class="topic-item">
                                <i class="fas fa-check-circle"></i>
                                Salary Negotiation
                            </li>
                            <li class="topic-item">
                                <i class="fas fa-check-circle"></i>
                                Culture Fit
                            </li>
                            <li class="topic-item">
                                <i class="fas fa-check-circle"></i>
                                Questions to Ask
                            </li>
                        </ul>
                        <div class="prep-stats">
                            <div class="stat-item">
                                <div class="stat-value">20</div>
                                <div class="stat-label">Topics</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">60</div>
                                <div class="stat-label">Questions</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">85%</div>
                                <div class="stat-label">Success</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
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

                    <!-- Prep 4 -->
                    <div class="prep-card">
                        <div class="prep-header">
                            <div>
                                <div class="prep-title">Resume Building Workshop</div>
                                <div class="prep-category">General</div>
                            </div>
                            <span class="badge badge-success">Published</span>
                        </div>
                        <div class="prep-description">
                            Learn to create professional resumes that stand out and get noticed by recruiters.
                        </div>
                        <ul class="topic-list">
                            <li class="topic-item">
                                <i class="fas fa-check-circle"></i>
                                Resume Formats
                            </li>
                            <li class="topic-item">
                                <i class="fas fa-check-circle"></i>
                                Key Sections
                            </li>
                            <li class="topic-item">
                                <i class="fas fa-check-circle"></i>
                                Action Verbs
                            </li>
                            <li class="topic-item">
                                <i class="fas fa-check-circle"></i>
                                ATS Optimization
                            </li>
                        </ul>
                        <div class="prep-stats">
                            <div class="stat-item">
                                <div class="stat-value">15</div>
                                <div class="stat-label">Topics</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">40</div>
                                <div class="stat-label">Templates</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">78%</div>
                                <div class="stat-label">Success</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
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

                    <!-- Prep 5 -->
                    <div class="prep-card">
                        <div class="prep-header">
                            <div>
                                <div class="prep-title">Mock Interview Sessions</div>
                                <div class="prep-category">Practice</div>
                            </div>
                            <span class="badge badge-info">Scheduled</span>
                        </div>
                        <div class="prep-description">
                            Practice interviews with industry professionals and get real-time feedback.
                        </div>
                        <ul class="topic-list">
                            <li class="topic-item">
                                <i class="fas fa-check-circle"></i>
                                Technical Mocks
                            </li>
                            <li class="topic-item">
                                <i class="fas fa-check-circle"></i>
                                HR Mocks
                            </li>
                            <li class="topic-item">
                                <i class="fas fa-check-circle"></i>
                                Group Discussions
                            </li>
                            <li class="topic-item">
                                <i class="fas fa-check-circle"></i>
                                Feedback Sessions
                            </li>
                        </ul>
                        <div class="prep-stats">
                            <div class="stat-item">
                                <div class="stat-value">30</div>
                                <div class="stat-label">Sessions</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">150</div>
                                <div class="stat-label">Students</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">95%</div>
                                <div class="stat-label">Satisfaction</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
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

                    <!-- Prep 6 -->
                    <div class="prep-card">
                        <div class="prep-header">
                            <div>
                                <div class="prep-title">Interview Etiquette Guide</div>
                                <div class="prep-category">General</div>
                            </div>
                            <span class="badge badge-success">Published</span>
                        </div>
                        <div class="prep-description">
                            Essential etiquette tips for virtual and in-person interviews to make a great impression.
                        </div>
                        <ul class="topic-list">
                            <li class="topic-item">
                                <i class="fas fa-check-circle"></i>
                                Virtual Interview Tips
                            </li>
                            <li class="topic-item">
                                <i class="fas fa-check-circle"></i>
                                Dress Code Guidelines
                            </li>
                            <li class="topic-item">
                                <i class="fas fa-check-circle"></i>
                                Punctuality
                            </li>
                            <li class="topic-item">
                                <i class="fas fa-check-circle"></i>
                                Follow-up Etiquette
                            </li>
                        </ul>
                        <div class="prep-stats">
                            <div class="stat-item">
                                <div class="stat-value">18</div>
                                <div class="stat-label">Topics</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">50</div>
                                <div class="stat-label">Tips</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">88%</div>
                                <div class="stat-label">Helpfulness</div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
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

    <!-- Add Preparation Modal -->
    <div class="modal fade" id="addPrepModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Preparation Material</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Category</label>
                                <select class="form-select" required>
                                    <option value="">Select Category</option>
                                    <option>Technical</option>
                                    <option>Behavioral</option>
                                    <option>HR</option>
                                    <option>General</option>
                                    <option>Practice</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Topics (one per line)</label>
                            <textarea class="form-control" rows="4" placeholder="Enter topics, one per line..."></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Number of Questions</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Duration (Hours)</label>
                                <input type="number" class="form-control" step="0.5">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Status</label>
                                <select class="form-select">
                                    <option>Draft</option>
                                    <option>Published</option>
                                    <option>Scheduled</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Add Material</button>
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
            const cards = document.querySelectorAll('.prep-card');
            
            cards.forEach(card => {
                const text = card.textContent.toLowerCase();
                card.style.display = text.includes(searchTerm) ? '' : 'none';
            });
        });
    </script>
</body>
</html>
