<?php
session_start();
if (!isset($_SESSION['user_logged_in']) || !$_SESSION['user_logged_in']) {
    header('Location: ../auth/register.php');
    exit();
}

$user_data = $_SESSION['user_data'] ?? [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard - Intervio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: #f8fafc;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        /* Main Content Area */
        .main-content {
            min-height: 100vh;
            transition: margin-left 0.3s ease;
            padding: 2rem;
        }

        /* Desktop Layout */
        @media (min-width: 769px) {
            .main-content {
                margin-left: 280px;
            }
        }

        /* Mobile Layout */
        @media (max-width: 768px) {
            .main-content {
                margin-left: 0;
                padding: 1rem;
                padding-top: 1rem;
            }
        }

        /* Content Cards */
        .content-card {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 1.5rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .content-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
        }

        /* Welcome Section */
        .welcome-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 2rem;
            border-radius: 12px;
            margin-bottom: 2rem;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin-top: 2rem;
        }

        .stat-card {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            padding: 1.5rem;
            border-radius: 10px;
            text-align: center;
            border: 1px solid rgba(255,255,255,0.2);
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            background: rgba(255,255,255,0.2);
            transform: translateY(-5px);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        /* Quick Actions */
        .quick-actions {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 1rem;
        }

        .action-btn {
            background: white;
            border: 2px solid #e2e8f0;
            padding: 1.5rem;
            border-radius: 10px;
            text-align: center;
            text-decoration: none;
            color: #4a5568;
            transition: all 0.3s ease;
        }

        .action-btn:hover {
            border-color: #667eea;
            color: #667eea;
            transform: translateY(-3px);
            box-shadow: 0 4px 15px rgba(102,126,234,0.2);
        }

        .action-btn i {
            font-size: 2rem;
            margin-bottom: 0.5rem;
            display: block;
        }

        /* Recent Activity */
        .activity-item {
            display: flex;
            align-items: center;
            padding: 1rem;
            border-left: 3px solid transparent;
            transition: all 0.3s ease;
        }

        .activity-item:hover {
            background: #f8fafc;
            border-left-color: #667eea;
        }

        .activity-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            font-size: 0.9rem;
        }

        .activity-icon.success {
            background: #dcfce7;
            color: #16a34a;
        }

        .activity-icon.warning {
            background: #fef3c7;
            color: #d97706;
        }

        .activity-icon.info {
            background: #dbeafe;
            color: #2563eb;
        }

        .activity-content {
            flex: 1;
        }

        .activity-title {
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .activity-time {
            font-size: 0.8rem;
            color: #64748b;
        }

        /* Upcoming Events */
        .event-card {
            background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1rem;
            border-left: 4px solid #667eea;
        }

        .event-date {
            font-size: 0.8rem;
            color: #64748b;
            margin-bottom: 0.25rem;
        }

        .event-title {
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .event-company {
            font-size: 0.9rem;
            color: #4a5568;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .welcome-section {
                padding: 1.5rem;
            }
            
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 0.75rem;
            }
            
            .stat-number {
                font-size: 2rem;
            }
            
            .quick-actions {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>
<body>
    <!-- Include the new sidebar -->
    <?php include 'sidebar.php'; ?>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Welcome Section -->
        <div class="welcome-section">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1 class="mb-2">Welcome back, <?php echo htmlspecialchars($user_data['full_name'] ?? 'John'); ?>! 👋</h1>
                    <p class="mb-0" style="opacity: 0.9;">Here's what's happening with your placement journey today.</p>
                </div>
                <div class="col-md-4 text-end">
                    <div class="d-flex align-items-center justify-content-end">
                        <i class="fas fa-calendar-alt me-2"></i>
                        <span><?php echo date('l, F j, Y'); ?></span>
                    </div>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-number">8.5</div>
                    <div class="stat-label">Current CGPA</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">5</div>
                    <div class="stat-label">Projects Done</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">12</div>
                    <div class="stat-label">Tests Completed</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">3</div>
                    <div class="stat-label">Applications Sent</div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Quick Actions -->
            <div class="col-lg-8">
                <div class="content-card">
                    <h5 class="mb-4"><i class="fas fa-bolt me-2"></i>Quick Actions</h5>
                    <div class="quick-actions">
                        <a href="edit_profile.php" class="action-btn">
                            <i class="fas fa-user-edit"></i>
                            <span>Edit Profile</span>
                        </a>
                        <a href="projects.php" class="action-btn">
                            <i class="fas fa-plus-circle"></i>
                            <span>Add Project</span>
                        </a>
                        <a href="resume.php" class="action-btn">
                            <i class="fas fa-upload"></i>
                            <span>Upload Resume</span>
                        </a>
                        <a href="../drives.php" class="action-btn">
                            <i class="fas fa-search"></i>
                            <span>Find Drives</span>
                        </a>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="content-card">
                    <h5 class="mb-4"><i class="fas fa-clock me-2"></i>Recent Activity</h5>
                    
                    <div class="activity-item">
                        <div class="activity-icon success">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="activity-content">
                            <div class="activity-title">Profile Updated</div>
                            <div class="activity-time">2 hours ago</div>
                        </div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon info">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <div class="activity-content">
                            <div class="activity-title">Resume Uploaded</div>
                            <div class="activity-time">1 day ago</div>
                        </div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon warning">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <div class="activity-content">
                            <div class="activity-title">Test Completed - Technical Assessment</div>
                            <div class="activity-time">2 days ago</div>
                        </div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon success">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="activity-content">
                            <div class="activity-title">Applied to Tech Solutions Inc.</div>
                            <div class="activity-time">3 days ago</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Upcoming Events & Notifications -->
            <div class="col-lg-4">
                <div class="content-card">
                    <h5 class="mb-4"><i class="fas fa-calendar me-2"></i>Upcoming Drives</h5>
                    
                    <div class="event-card">
                        <div class="event-date">Tomorrow, 10:00 AM</div>
                        <div class="event-title">Tech Solutions Inc.</div>
                        <div class="event-company">Software Developer Position</div>
                    </div>

                    <div class="event-card">
                        <div class="event-date">Jan 25, 2:00 PM</div>
                        <div class="event-title">Digital Innovations</div>
                        <div class="event-company">Full Stack Developer</div>
                    </div>

                    <div class="event-card">
                        <div class="event-date">Jan 28, 9:00 AM</div>
                        <div class="event-title">Cloud Systems</div>
                        <div class="event-company">Cloud Engineer</div>
                    </div>
                </div>

                <div class="content-card">
                    <h5 class="mb-4"><i class="fas fa-bell me-2"></i>Notifications</h5>
                    
                    <div class="alert alert-info" role="alert">
                        <i class="fas fa-info-circle me-2"></i>
                        <strong>New Drive Alert!</strong><br>
                        <small>Amazon is visiting campus next week. Register now!</small>
                    </div>

                    <div class="alert alert-success" role="alert">
                        <i class="fas fa-check-circle me-2"></i>
                        <strong>Test Result Available</strong><br>
                        <small>Your aptitude test results are ready to view.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
