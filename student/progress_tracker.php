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
    <title>Progress Tracker - Intervio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="../assets/css/profile.css" rel="stylesheet">
    <style>
        .progress-ring {
            width: 120px;
            height: 120px;
        }
        .progress-ring-circle {
            transition: stroke-dashoffset 0.35s;
            transform: rotate(-90deg);
            transform-origin: 50% 50%;
        }
        .progress-stats {
            display: flex;
            justify-content: space-around;
            margin-top: 2rem;
        }
        .stat-card {
            text-align: center;
            padding: 1rem;
            border-radius: 10px;
            background: #f8f9fa;
        }
        .timeline {
            position: relative;
            padding-left: 30px;
        }
        .timeline::before {
            content: '';
            position: absolute;
            left: 10px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: #e9ecef;
        }
        .timeline-item {
            position: relative;
            margin-bottom: 2rem;
        }
        .timeline-item::before {
            content: '';
            position: absolute;
            left: -25px;
            top: 5px;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #007bff;
        }
        .timeline-item.completed::before {
            background: #28a745;
        }
        .timeline-item.pending::before {
            background: #ffc107;
        }
    </style>
</head>
<body>
    <?php include '../includes/Header.php'; ?>
    
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">
                <?php include 'sidebar.php'; ?>
            </div>
            <div class="col-md-9">
                <!-- Overall Progress -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h4><i class="fas fa-chart-line me-2"></i>Overall Progress</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 text-center">
                                <svg class="progress-ring" viewBox="0 0 120 120">
                                    <circle class="text-light" stroke="#e9ecef" stroke-width="8" fill="transparent" r="52" cx="60" cy="60"/>
                                    <circle class="progress-ring-circle" stroke="#007bff" stroke-width="8" fill="transparent" r="52" cx="60" cy="60"
                                            stroke-dasharray="326.73" stroke-dashoffset="81.68"/>
                                    <text x="60" y="65" text-anchor="middle" class="h3">75%</text>
                                </svg>
                                <h6>Profile Completion</h6>
                            </div>
                            <div class="col-md-3 text-center">
                                <svg class="progress-ring" viewBox="0 0 120 120">
                                    <circle class="text-light" stroke="#e9ecef" stroke-width="8" fill="transparent" r="52" cx="60" cy="60"/>
                                    <circle class="progress-ring-circle" stroke="#28a745" stroke-width="8" fill="transparent" r="52" cx="60" cy="60"
                                            stroke-dasharray="326.73" stroke-dashoffset="130.69"/>
                                    <text x="60" y="65" text-anchor="middle" class="h3">60%</text>
                                </svg>
                                <h6>Skill Development</h6>
                            </div>
                            <div class="col-md-3 text-center">
                                <svg class="progress-ring" viewBox="0 0 120 120">
                                    <circle class="text-light" stroke="#e9ecef" stroke-width="8" fill="transparent" r="52" cx="60" cy="60"/>
                                    <circle class="progress-ring-circle" stroke="#ffc107" stroke-width="8" fill="transparent" r="52" cx="60" cy="60"
                                            stroke-dasharray="326.73" stroke-dashoffset="163.37"/>
                                    <text x="60" y="65" text-anchor="middle" class="h3">50%</text>
                                </svg>
                                <h6>Applications</h6>
                            </div>
                            <div class="col-md-3 text-center">
                                <svg class="progress-ring" viewBox="0 0 120 120">
                                    <circle class="text-light" stroke="#e9ecef" stroke-width="8" fill="transparent" r="52" cx="60" cy="60"/>
                                    <circle class="progress-ring-circle" stroke="#dc3545" stroke-width="8" fill="transparent" r="52" cx="60" cy="60"
                                            stroke-dasharray="326.73" stroke-dashoffset="32.67"/>
                                    <text x="60" y="65" text-anchor="middle" class="h3">90%</text>
                                </svg>
                                <h6>Interview Prep</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Detailed Statistics -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h4><i class="fas fa-chart-bar me-2"></i>Detailed Statistics</h4>
                    </div>
                    <div class="card-body">
                        <div class="progress-stats">
                            <div class="col-md-2">
                                <div class="stat-card">
                                    <h4 class="text-primary">12</h4>
                                    <small>Tests Taken</small>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="stat-card">
                                    <h4 class="text-success">8.5</h4>
                                    <small>Avg Score</small>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="stat-card">
                                    <h4 class="text-info">4</h4>
                                    <small>Applications</small>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="stat-card">
                                    <h4 class="text-warning">2</h4>
                                    <small>Interviews</small>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="stat-card">
                                    <h4 class="text-success">1</h4>
                                    <small>Offers</small>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="stat-card">
                                    <h4 class="text-danger">15</h4>
                                    <small>Days Active</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity Timeline -->
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-history me-2"></i>Recent Activity</h4>
                    </div>
                    <div class="card-body">
                        <div class="timeline">
                            <div class="timeline-item completed">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h6>Profile Updated</h6>
                                        <p class="text-muted mb-1">Added new skills and project details</p>
                                        <small class="text-muted">2 hours ago</small>
                                    </div>
                                    <span class="badge bg-success">Completed</span>
                                </div>
                            </div>
                            <div class="timeline-item completed">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h6>Aptitude Test Completed</h6>
                                        <p class="text-muted mb-1">Score: 85/100 - Above Average</p>
                                        <small class="text-muted">1 day ago</small>
                                    </div>
                                    <span class="badge bg-success">Completed</span>
                                </div>
                            </div>
                            <div class="timeline-item completed">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h6>Application Submitted</h6>
                                        <p class="text-muted mb-1">Applied for Software Engineer at Google</p>
                                        <small class="text-muted">3 days ago</small>
                                    </div>
                                    <span class="badge bg-info">Under Review</span>
                                </div>
                            </div>
                            <div class="timeline-item pending">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h6>Interview Scheduled</h6>
                                        <p class="text-muted mb-1">Technical interview with Microsoft</p>
                                        <small class="text-muted">5 days ago</small>
                                    </div>
                                    <span class="badge bg-warning">Upcoming</span>
                                </div>
                            </div>
                            <div class="timeline-item completed">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h6>Resume Downloaded</h6>
                                        <p class="text-muted mb-1">HR from Amazon viewed your profile</p>
                                        <small class="text-muted">1 week ago</small>
                                    </div>
                                    <span class="badge bg-info">Viewed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
