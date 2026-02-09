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
    <title>Drive Schedule - Intervio</title>
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
                        <h4><i class="fas fa-calendar-check me-2"></i>Drive Schedule</h4>
                    </div>
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <h5>Upcoming Drives</h5>
                            </div>
                            <div class="col-md-6 text-end">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-outline-primary active">Month View</button>
                                    <button type="button" class="btn btn-outline-primary">Week View</button>
                                    <button type="button" class="btn btn-outline-primary">List View</button>
                                </div>
                            </div>
                        </div>

                        <!-- Calendar View -->
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="mb-0">January 2024</h6>
                                <div>
                                    <button class="btn btn-sm btn-outline-secondary">
                                        <i class="fas fa-chevron-left"></i>
                                    </button>
                                    <button class="btn btn-sm btn-outline-secondary">
                                        <i class="fas fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="text-center">Sun</th>
                                                <th class="text-center">Mon</th>
                                                <th class="text-center">Tue</th>
                                                <th class="text-center">Wed</th>
                                                <th class="text-center">Thu</th>
                                                <th class="text-center">Fri</th>
                                                <th class="text-center">Sat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center p-2">31</td>
                                                <td class="text-center p-2">1</td>
                                                <td class="text-center p-2">2</td>
                                                <td class="text-center p-2">3</td>
                                                <td class="text-center p-2">4</td>
                                                <td class="text-center p-2">5</td>
                                                <td class="text-center p-2">6</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center p-2">7</td>
                                                <td class="text-center p-2">8</td>
                                                <td class="text-center p-2">9</td>
                                                <td class="text-center p-2">10</td>
                                                <td class="text-center p-2">11</td>
                                                <td class="text-center p-2">12</td>
                                                <td class="text-center p-2">13</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center p-2">14</td>
                                                <td class="text-center p-2 bg-primary text-white">
                                                    <strong>15</strong>
                                                    <br><small>Tech Solutions</small>
                                                </td>
                                                <td class="text-center p-2">16</td>
                                                <td class="text-center p-2">17</td>
                                                <td class="text-center p-2">18</td>
                                                <td class="text-center p-2">19</td>
                                                <td class="text-center p-2">20</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center p-2">21</td>
                                                <td class="text-center p-2">22</td>
                                                <td class="text-center p-2 bg-success text-white">
                                                    <strong>23</strong>
                                                    <br><small>Digital Innovations</small>
                                                </td>
                                                <td class="text-center p-2">24</td>
                                                <td class="text-center p-2">25</td>
                                                <td class="text-center p-2 bg-warning text-white">
                                                    <strong>26</strong>
                                                    <br><small>Cloud Systems</small>
                                                </td>
                                                <td class="text-center p-2">27</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center p-2">28</td>
                                                <td class="text-center p-2">29</td>
                                                <td class="text-center p-2">30</td>
                                                <td class="text-center p-2">31</td>
                                                <td class="text-center p-2">1</td>
                                                <td class="text-center p-2">2</td>
                                                <td class="text-center p-2">3</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Upcoming Drives List -->
                        <h5 class="mb-3">Scheduled Drives</h5>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Company</th>
                                        <th>Position</th>
                                        <th>Time</th>
                                        <th>Venue</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <strong>15 Jan 2024</strong>
                                            <br><small class="text-muted">Monday</small>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://picsum.photos/seed/techsolutions/40/40.jpg" class="rounded-circle me-2" alt="Company">
                                                <div>
                                                    <strong>Tech Solutions Inc.</strong>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Software Developer</td>
                                        <td>9:00 AM</td>
                                        <td>Main Auditorium</td>
                                        <td><span class="badge bg-primary">Registered</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="View Details">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-success" title="Add to Calendar">
                                                <i class="fas fa-calendar-plus"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>23 Jan 2024</strong>
                                            <br><small class="text-muted">Tuesday</small>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://picsum.photos/seed/digitalinnovations/40/40.jpg" class="rounded-circle me-2" alt="Company">
                                                <div>
                                                    <strong>Digital Innovations</strong>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Full Stack Developer</td>
                                        <td>10:30 AM</td>
                                        <td>Lab 301</td>
                                        <td><span class="badge bg-primary">Registered</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="View Details">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-success" title="Add to Calendar">
                                                <i class="fas fa-calendar-plus"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>26 Jan 2024</strong>
                                            <br><small class="text-muted">Friday</small>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://picsum.photos/seed/cloudsystems/40/40.jpg" class="rounded-circle me-2" alt="Company">
                                                <div>
                                                    <strong>Cloud Systems</strong>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Cloud Engineer</td>
                                        <td>2:00 PM</td>
                                        <td>Conference Hall A</td>
                                        <td><span class="badge bg-warning">Pending</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="View Details">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-success" title="Register">
                                                <i class="fas fa-user-plus"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>2 Feb 2024</strong>
                                            <br><small class="text-muted">Friday</small>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://picsum.photos/seed/dataanalytics/40/40.jpg" class="rounded-circle me-2" alt="Company">
                                                <div>
                                                    <strong>Data Analytics Corp</strong>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Data Scientist</td>
                                        <td>11:00 AM</td>
                                        <td>Online</td>
                                        <td><span class="badge bg-secondary">Not Applied</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" title="View Details">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-primary" title="Apply Now">
                                                <i class="fas fa-paper-plane"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <hr>

                        <!-- Statistics -->
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h5 class="card-title text-primary">4</h5>
                                        <p class="card-text">Upcoming Drives</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h5 class="card-title text-success">2</h5>
                                        <p class="card-text">Registered</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h5 class="card-title text-warning">1</h5>
                                        <p class="card-text">Pending</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h5 class="card-title text-info">1</h5>
                                        <p class="card-text">Online</p>
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
