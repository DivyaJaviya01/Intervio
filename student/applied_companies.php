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
    <title>Applied Companies - Intervio</title>
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
                        <h4><i class="fas fa-building me-2"></i>Applied Companies</h4>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search companies..." id="searchInput">
                                    <button class="btn btn-outline-secondary">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select" id="statusFilter">
                                    <option value="">All Status</option>
                                    <option value="pending">Pending</option>
                                    <option value="reviewing">Under Review</option>
                                    <option value="shortlisted">Shortlisted</option>
                                    <option value="rejected">Rejected</option>
                                    <option value="selected">Selected</option>
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
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://picsum.photos/seed/google/40/40.jpg" alt="Google" class="rounded-circle me-2" width="40">
                                                <div>
                                                    <strong>Google</strong><br>
                                                    <small class="text-muted">Mountain View, CA</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Software Engineer</td>
                                        <td>2024-01-15</td>
                                        <td><span class="badge bg-warning text-dark">Under Review</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-secondary">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://picsum.photos/seed/microsoft/40/40.jpg" alt="Microsoft" class="rounded-circle me-2" width="40">
                                                <div>
                                                    <strong>Microsoft</strong><br>
                                                    <small class="text-muted">Redmond, WA</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Software Developer</td>
                                        <td>2024-01-10</td>
                                        <td><span class="badge bg-info">Shortlisted</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-secondary">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://picsum.photos/seed/amazon/40/40.jpg" alt="Amazon" class="rounded-circle me-2" width="40">
                                                <div>
                                                    <strong>Amazon</strong><br>
                                                    <small class="text-muted">Seattle, WA</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Full Stack Developer</td>
                                        <td>2024-01-08</td>
                                        <td><span class="badge bg-success">Selected</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-success me-1">
                                                <i class="fas fa-check"></i> Accept
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://picsum.photos/seed/infosys/40/40.jpg" alt="Infosys" class="rounded-circle me-2" width="40">
                                                <div>
                                                    <strong>Infosys</strong><br>
                                                    <small class="text-muted">Bangalore, India</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Systems Engineer</td>
                                        <td>2024-01-05</td>
                                        <td><span class="badge bg-danger">Rejected</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary me-1">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-info">
                                                <i class="fas fa-info-circle"></i> Feedback
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <!-- Statistics -->
                        <div class="row mt-4">
                            <div class="col-md-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h3 class="text-primary">4</h3>
                                        <p class="mb-0">Total Applications</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h3 class="text-info">1</h3>
                                        <p class="mb-0">Under Review</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h3 class="text-warning">1</h3>
                                        <p class="mb-0">Shortlisted</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h3 class="text-success">1</h3>
                                        <p class="mb-0">Selected</p>
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
    <script>
        // Search functionality
        document.getElementById('searchInput').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const rows = document.querySelectorAll('tbody tr');
            
            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(searchTerm) ? '' : 'none';
            });
        });
        
        // Status filter
        document.getElementById('statusFilter').addEventListener('change', function() {
            const filterValue = this.value;
            const rows = document.querySelectorAll('tbody tr');
            
            rows.forEach(row => {
                if (filterValue === '') {
                    row.style.display = '';
                } else {
                    const badge = row.querySelector('.badge');
                    const status = badge.textContent.toLowerCase();
                    row.style.display = status.includes(filterValue) ? '' : 'none';
                }
            });
        });
    </script>
</body>
</html>
