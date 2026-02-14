<?php
$pageTitle = 'Dashboard';
include 'includes/auth_check.php';
include 'includes/header.php';
?>

<!-- Top Header -->
<div class="top-header">
    <div>
        <h1 class="h3 mb-0">Dashboard</h1>
        <p class="text-muted mb-0">Welcome back, Admin</p>
    </div>
    <div>
        <span class="badge badge-success">Online</span>
    </div>
</div>

        <!-- Statistics Cards -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon" style="background-color: #dbeafe; color: #3b82f6;">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-value">1,234</div>
                <div class="stat-label">Total Students</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon" style="background-color: #dcfce7; color: #22c55e;">
                    <i class="fas fa-briefcase"></i>
                </div>
                <div class="stat-value">45</div>
                <div class="stat-label">Active Drives</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon" style="background-color: #fef3c7; color: #f59e0b;">
                    <i class="fas fa-building"></i>
                </div>
                <div class="stat-value">89</div>
                <div class="stat-label">Partner Companies</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon" style="background-color: #fce7f3; color: #ec4899;">
                    <i class="fas fa-clipboard-check"></i>
                </div>
                <div class="stat-value">567</div>
                <div class="stat-label">Applications Today</div>
            </div>
        </div>

        <!-- Recent Activities -->
        <div class="content-card">
            <div class="card-header">
                <h5 class="mb-0">Recent Activities</h5>
                <button class="btn btn-primary btn-sm">View All</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Activity</th>
                                <th>User</th>
                                <th>Time</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>New student registration</td>
                                <td>John Doe</td>
                                <td>2 minutes ago</td>
                                <td><span class="badge badge-success">Completed</span></td>
                            </tr>
                            <tr>
                                <td>Drive application submitted</td>
                                <td>Jane Smith</td>
                                <td>15 minutes ago</td>
                                <td><span class="badge badge-success">Completed</span></td>
                            </tr>
                            <tr>
                                <td>Mock test completed</td>
                                <td>Mike Johnson</td>
                                <td>1 hour ago</td>
                                <td><span class="badge badge-warning">Pending Review</span></td>
                            </tr>
                            <tr>
                                <td>Payment processed</td>
                                <td>Sarah Wilson</td>
                                <td>2 hours ago</td>
                                <td><span class="badge badge-success">Completed</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="content-card mt-4">
            <div class="card-header">
                <h5 class="mb-0">Quick Actions</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <button class="btn btn-primary w-100">
                            <i class="fas fa-plus me-2"></i> Add New Drive
                        </button>
                    </div>
                    <div class="col-md-3 mb-3">
                        <button class="btn btn-primary w-100">
                            <i class="fas fa-bullhorn me-2"></i> Send Announcement
                        </button>
                    </div>
                    <div class="col-md-3 mb-3">
                        <button class="btn btn-primary w-100">
                            <i class="fas fa-file-alt me-2"></i> Create Test
                        </button>
                    </div>
                    <div class="col-md-3 mb-3">
                        <button class="btn btn-primary w-100">
                            <i class="fas fa-user-plus me-2"></i> Add Student
                        </button>
                    </div>
                </div>
            </div>
        </div>
</div>

<?php include 'includes/footer.php'; ?>
