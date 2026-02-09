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
    <title>Application History - Intervio</title>
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
                        <h4><i class="fas fa-history me-2"></i>Application History</h4>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                    <input type="text" class="form-control" placeholder="Search by company name...">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select">
                                    <option value="">All Status</option>
                                    <option value="pending">Pending</option>
                                    <option value="under_review">Under Review</option>
                                    <option value="shortlisted">Shortlisted</option>
                                    <option value="rejected">Rejected</option>
                                    <option value="selected">Selected</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select">
                                    <option value="">All Time</option>
                                    <option value="today">Today</option>
                                    <option value="week">This Week</option>
                                    <option value="month">This Month</option>
                                    <option value="year">This Year</option>
                                </select>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Company</th>
                                        <th>Position</th>
                                        <th>Applied Date</th>
                                        <th>Status</th>
                                        <th>Last Updated</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://picsum.photos/seed/company1/40/40.jpg" class="rounded-circle me-2" alt="Company">
                                                <div>
                                                    <strong>Tech Solutions Inc.</strong>
                                                    <br><small class="text-muted">Bangalore</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Software Developer</td>
                                        <td>15 Jan 2024</td>
                                        <td><span class="badge bg-warning">Under Review</span></td>
                                        <td>20 Jan 2024</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="View Details">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-info" title="Track Status">
                                                <i class="fas fa-chart-line"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://picsum.photos/seed/company2/40/40.jpg" class="rounded-circle me-2" alt="Company">
                                                <div>
                                                    <strong>Digital Innovations</strong>
                                                    <br><small class="text-muted">Mumbai</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Full Stack Developer</td>
                                        <td>10 Jan 2024</td>
                                        <td><span class="badge bg-success">Shortlisted</span></td>
                                        <td>18 Jan 2024</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="View Details">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-info" title="Track Status">
                                                <i class="fas fa-chart-line"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://picsum.photos/seed/company3/40/40.jpg" class="rounded-circle me-2" alt="Company">
                                                <div>
                                                    <strong>Cloud Systems</strong>
                                                    <br><small class="text-muted">Pune</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Cloud Engineer</td>
                                        <td>5 Jan 2024</td>
                                        <td><span class="badge bg-danger">Rejected</span></td>
                                        <td>12 Jan 2024</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="View Details">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-info" title="Track Status">
                                                <i class="fas fa-chart-line"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://picsum.photos/seed/company4/40/40.jpg" class="rounded-circle me-2" alt="Company">
                                                <div>
                                                    <strong>Data Analytics Corp</strong>
                                                    <br><small class="text-muted">Hyderabad</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Data Scientist</td>
                                        <td>28 Dec 2023</td>
                                        <td><span class="badge bg-success">Selected</span></td>
                                        <td>8 Jan 2024</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="View Details">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-success" title="View Offer">
                                                <i class="fas fa-trophy"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://picsum.photos/seed/company5/40/40.jpg" class="rounded-circle me-2" alt="Company">
                                                <div>
                                                    <strong>Mobile Apps Ltd</strong>
                                                    <br><small class="text-muted">Chennai</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Mobile App Developer</td>
                                        <td>20 Dec 2023</td>
                                        <td><span class="badge bg-secondary">Pending</span></td>
                                        <td>20 Dec 2023</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="View Details">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-info" title="Track Status">
                                                <i class="fas fa-chart-line"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <small class="text-muted">Showing 5 of 12 applications</small>
                            </div>
                            <nav>
                                <ul class="pagination pagination-sm mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h5 class="card-title text-primary">12</h5>
                                        <p class="card-text">Total Applications</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h5 class="card-title text-success">2</h5>
                                        <p class="card-text">Selected</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h5 class="card-title text-warning">2</h5>
                                        <p class="card-text">Under Review</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h5 class="card-title text-danger">1</h5>
                                        <p class="card-text">Rejected</p>
                                    </div>
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
