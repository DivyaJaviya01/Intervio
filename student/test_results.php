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
    <title>Test Results - Intervio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="../assets/css/profile.css" rel="stylesheet">
</head>
<body>
    <?php include '../includes/Header.php'; ?>
    
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">
                <?php include 'sidebar.php'; ?>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-trophy me-2"></i>Test Results</h4>
                    </div>
                    <div class="card-body">
                        <!-- Overall Performance Summary -->
                        <div class="row mb-4">
                            <div class="col-md-3">
                                <div class="card text-center border-primary">
                                    <div class="card-body">
                                        <h5 class="card-title text-primary">85%</h5>
                                        <p class="card-text">Average Score</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-center border-success">
                                    <div class="card-body">
                                        <h5 class="card-title text-success">12</h5>
                                        <p class="card-text">Tests Completed</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-center border-warning">
                                    <div class="card-body">
                                        <h5 class="card-title text-warning">3</h5>
                                        <p class="card-text">Pending Results</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-center border-info">
                                    <div class="card-body">
                                        <h5 class="card-title text-info">8</h5>
                                        <p class="card-text">Certificates Earned</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Filter Options -->
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <select class="form-select">
                                    <option value="">All Test Types</option>
                                    <option value="aptitude">Aptitude Test</option>
                                    <option value="technical">Technical Test</option>
                                    <option value="coding">Coding Challenge</option>
                                    <option value="mock">Mock Interview</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select">
                                    <option value="">All Companies</option>
                                    <option value="techsolutions">Tech Solutions Inc.</option>
                                    <option value="digitalinnovations">Digital Innovations</option>
                                    <option value="cloudsystems">Cloud Systems</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select">
                                    <option value="">All Time</option>
                                    <option value="week">This Week</option>
                                    <option value="month">This Month</option>
                                    <option value="year">This Year</option>
                                </select>
                            </div>
                        </div>

                        <!-- Test Results Table -->
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Test Name</th>
                                        <th>Company</th>
                                        <th>Type</th>
                                        <th>Date</th>
                                        <th>Score</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <strong>Technical Assessment</strong>
                                            <br><small class="text-muted">Duration: 60 mins</small>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://picsum.photos/seed/techsolutions/30/30.jpg" class="rounded-circle me-2" alt="Company">
                                                <span>Tech Solutions Inc.</span>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-info">Technical</span></td>
                                        <td>15 Jan 2024</td>
                                        <td>
                                            <strong>92%</strong>
                                            <br><small class="text-success">Excellent</small>
                                        </td>
                                        <td><span class="badge bg-success">Passed</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="View Details">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-success" title="Download Certificate">
                                                <i class="fas fa-certificate"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Aptitude Test</strong>
                                            <br><small class="text-muted">Duration: 45 mins</small>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://picsum.photos/seed/digitalinnovations/30/30.jpg" class="rounded-circle me-2" alt="Company">
                                                <span>Digital Innovations</span>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-primary">Aptitude</span></td>
                                        <td>10 Jan 2024</td>
                                        <td>
                                            <strong>78%</strong>
                                            <br><small class="text-warning">Good</small>
                                        </td>
                                        <td><span class="badge bg-success">Passed</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="View Details">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-success" title="Download Certificate">
                                                <i class="fas fa-certificate"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Coding Challenge</strong>
                                            <br><small class="text-muted">Duration: 90 mins</small>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://picsum.photos/seed/cloudsystems/30/30.jpg" class="rounded-circle me-2" alt="Company">
                                                <span>Cloud Systems</span>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-warning">Coding</span></td>
                                        <td>8 Jan 2024</td>
                                        <td>
                                            <strong>65%</strong>
                                            <br><small class="text-danger">Needs Improvement</small>
                                        </td>
                                        <td><span class="badge bg-danger">Failed</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="View Details">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-warning" title="Retake Test">
                                                <i class="fas fa-redo"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Mock Interview</strong>
                                            <br><small class="text-muted">Duration: 30 mins</small>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://picsum.photos/seed/dataanalytics/30/30.jpg" class="rounded-circle me-2" alt="Company">
                                                <span>Data Analytics Corp</span>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-secondary">Mock Interview</span></td>
                                        <td>5 Jan 2024</td>
                                        <td>
                                            <strong>88%</strong>
                                            <br><small class="text-success">Very Good</small>
                                        </td>
                                        <td><span class="badge bg-success">Passed</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="View Details">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-success" title="Download Certificate">
                                                <i class="fas fa-certificate"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Technical Assessment</strong>
                                            <br><small class="text-muted">Duration: 60 mins</small>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://picsum.photos/seed/mobileapps/30/30.jpg" class="rounded-circle me-2" alt="Company">
                                                <span>Mobile Apps Ltd</span>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-info">Technical</span></td>
                                        <td>28 Dec 2023</td>
                                        <td>
                                            <strong>95%</strong>
                                            <br><small class="text-success">Outstanding</small>
                                        </td>
                                        <td><span class="badge bg-success">Passed</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="View Details">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-success" title="Download Certificate">
                                                <i class="fas fa-certificate"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Aptitude Test</strong>
                                            <br><small class="text-muted">Duration: 45 mins</small>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://picsum.photos/seed/techsolutions2/30/30.jpg" class="rounded-circle me-2" alt="Company">
                                                <span>Tech Solutions Inc.</span>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-primary">Aptitude</span></td>
                                        <td>20 Dec 2023</td>
                                        <td>
                                            <strong>Pending</strong>
                                            <br><small class="text-muted">Under Evaluation</small>
                                        </td>
                                        <td><span class="badge bg-warning">Pending</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="View Details">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Performance Chart -->
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="mb-0">Performance Trend</h6>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="performanceChart" height="200"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="mb-0">Test Type Distribution</h6>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="distributionChart" height="200"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Recommendations -->
                        <div class="alert alert-info mt-4">
                            <h6><i class="fas fa-lightbulb me-2"></i>Recommendations:</h6>
                            <ul class="mb-0">
                                <li>Focus on improving your coding skills - consider practicing more algorithm problems</li>
                                <li>Your aptitude scores are good, but there's room for improvement</li>
                                <li>Excellent performance in technical assessments - keep it up!</li>
                                <li>Consider taking advanced technical tests to enhance your profile</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Performance Trend Chart
        const performanceCtx = document.getElementById('performanceChart').getContext('2d');
        new Chart(performanceCtx, {
            type: 'line',
            data: {
                labels: ['Dec 20', 'Dec 28', 'Jan 5', 'Jan 8', 'Jan 10', 'Jan 15'],
                datasets: [{
                    label: 'Test Scores (%)',
                    data: [82, 95, 88, 65, 78, 92],
                    borderColor: 'rgb(59, 130, 246)',
                    backgroundColor: 'rgba(59, 130, 246, 0.1)',
                    tension: 0.1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100
                    }
                }
            }
        });

        // Distribution Chart
        const distributionCtx = document.getElementById('distributionChart').getContext('2d');
        new Chart(distributionCtx, {
            type: 'doughnut',
            data: {
                labels: ['Technical', 'Aptitude', 'Coding', 'Mock Interview'],
                datasets: [{
                    data: [2, 2, 1, 1],
                    backgroundColor: [
                        'rgb(59, 130, 246)',
                        'rgb(34, 197, 94)',
                        'rgb(251, 191, 36)',
                        'rgb(107, 114, 128)'
                    ]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    </script>
</body>
</html>
