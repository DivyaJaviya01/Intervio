<?php include 'includes/Header.php'; ?>

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<style>

body{
    background:#f4f6f9;
    font-family: 'Segoe UI', sans-serif;
}

/* Main content offset for fixed sidebar */
.col-md-10 {
    margin-left: 16.666667%;
}

/* Hero Section */
.hero{
    background:linear-gradient(135deg,#4f46e5,#3b82f6);
    color:white;
    border-radius:20px;
    padding:30px;
}

/* Card Style */
.custom-card{
    border-radius:15px;
    box-shadow:0 6px 15px rgba(0,0,0,0.05);
}

/* Drive Card */
.drive-card{
    border:1px solid #e5e7eb;
    border-radius:12px;
    padding:20px;
    height:100%;
    transition:all 0.3s ease;
}

.drive-card:hover{
    transform:translateY(-5px);
    box-shadow:0 10px 25px rgba(0,0,0,0.1);
}

/* Status Badge */
.status-badge{
    padding:6px 12px;
    border-radius:20px;
    font-size:12px;
    font-weight:600;
}

/* Company Logo */
.company-logo{
    width:80px;
    height:80px;
    border-radius:8px;
    object-fit:cover;
}

/* Progress Bar */
.progress{
    height:8px;
    border-radius:10px;
}

</style>
</head>

<body>

<div class="container-fluid">
<div class="row">

<?php include 'includes/sidebar.php'; ?>

<!-- MAIN CONTENT -->
<div class="col-md-10 p-4 main-content">

    <!-- HERO SECTION -->
    <div class="hero mb-4">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h2 class="fw-bold mb-3">Placement Drives</h2>
                <p class="mb-2">Track and apply to upcoming placement opportunities</p>
            </div>
            <div class="col-md-4 text-end">
                <a href="../drives.php" class="btn btn-light btn-lg">Browse All Drives</a>
            </div>
        </div>
    </div>

    <!-- DRIVE STATISTICS -->
    <div class="card custom-card p-4 mb-4">
        <h5 class="fw-bold mb-4">Drive Overview</h5>
        
        <div class="row text-center">
            <div class="col-md-3">
                <h3 class="fw-bold text-primary">8</h3>
                <p class="text-muted">Drives Attended</p>
            </div>
            <div class="col-md-3">
                <h3 class="fw-bold text-success">4</h3>
                <p class="text-muted">Technical Rounds Cleared</p>
            </div>
            <div class="col-md-3">
                <h3 class="fw-bold text-warning">2</h3>
                <p class="text-muted">HR Rounds Cleared</p>
            </div>
            <div class="col-md-3">
                <h3 class="fw-bold text-info">1</h3>
                <p class="text-muted">Offers Received</p>
            </div>
        </div>
    </div>

    <!-- UPCOMING DRIVES -->
    <div class="card custom-card p-4 mb-4">
        <h5 class="fw-bold mb-4">Upcoming Drives</h5>
        
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="drive-card">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/80" class="company-logo me-3">
                            <div>
                                <h6 class="fw-bold">TCS Digital</h6>
                                <p class="text-muted mb-0">Tata Consultancy Services</p>
                            </div>
                        </div>
                        <span class="status-badge bg-warning text-dark">Upcoming</span>
                    </div>
                    
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <small class="text-muted">
                                    <i class="bi bi-calendar3 me-1"></i> Feb 20, 2026
                                </small>
                            </div>
                            <div class="col-6">
                                <small class="text-muted">
                                    <i class="bi bi-clock me-1"></i> 10:00 AM
                                </small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <h6 class="fw-bold mb-2">Position: Full Stack Developer</h6>
                        <p class="text-muted small mb-2">
                            Looking for talented full-stack developers with strong problem-solving skills and experience in modern web technologies.
                        </p>
                        <div class="mb-2">
                            <span class="badge bg-light text-dark me-1">JavaScript</span>
                            <span class="badge bg-light text-dark me-1">React</span>
                            <span class="badge bg-light text-dark me-1">Node.js</span>
                            <span class="badge bg-light text-dark me-1">MongoDB</span>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <small class="text-muted">Application Deadline</small>
                            <small class="text-muted">2 days left</small>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" style="width: 80%"></div>
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-primary btn-sm">Apply Now</button>
                        <button class="btn btn-outline-primary btn-sm">View Details</button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="drive-card">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/80" class="company-logo me-3">
                            <div>
                                <h6 class="fw-bold">Infosys</h6>
                                <p class="text-muted mb-0">Infosys Limited</p>
                            </div>
                        </div>
                        <span class="status-badge bg-warning text-dark">Upcoming</span>
                    </div>
                    
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <small class="text-muted">
                                    <i class="bi bi-calendar3 me-1"></i> Feb 25, 2026
                                </small>
                            </div>
                            <div class="col-6">
                                <small class="text-muted">
                                    <i class="bi bi-clock me-1"></i> 9:00 AM
                                </small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <h6 class="fw-bold mb-2">Position: Software Engineer</h6>
                        <p class="text-muted small mb-2">
                            Seeking passionate software engineers to join our dynamic team and work on cutting-edge projects.
                        </p>
                        <div class="mb-2">
                            <span class="badge bg-light text-dark me-1">Java</span>
                            <span class="badge bg-light text-dark me-1">Python</span>
                            <span class="badge bg-light text-dark me-1">SQL</span>
                            <span class="badge bg-light text-dark me-1">AWS</span>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <small class="text-muted">Application Deadline</small>
                            <small class="text-muted">5 days left</small>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" style="width: 60%"></div>
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-primary btn-sm">Apply Now</button>
                        <button class="btn btn-outline-primary btn-sm">View Details</button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="drive-card">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/80" class="company-logo me-3">
                            <div>
                                <h6 class="fw-bold">Wipro</h6>
                                <p class="text-muted mb-0">Wipro Limited</p>
                            </div>
                        </div>
                        <span class="status-badge bg-warning text-dark">Upcoming</span>
                    </div>
                    
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <small class="text-muted">
                                    <i class="bi bi-calendar3 me-1"></i> Mar 2, 2026
                                </small>
                            </div>
                            <div class="col-6">
                                <small class="text-muted">
                                    <i class="bi bi-clock me-1"></i> 11:00 AM
                                </small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <h6 class="fw-bold mb-2">Position: Project Engineer</h6>
                        <p class="text-muted small mb-2">
                            Hiring project engineers for various domains including development, testing, and support.
                        </p>
                        <div class="mb-2">
                            <span class="badge bg-light text-dark me-1">C++</span>
                            <span class="badge bg-light text-dark me-1">Java</span>
                            <span class="badge bg-light text-dark me-1">Testing</span>
                            <span class="badge bg-light text-dark me-1">Agile</span>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <small class="text-muted">Application Deadline</small>
                            <small class="text-muted">10 days left</small>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-success" style="width: 30%"></div>
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-primary btn-sm">Apply Now</button>
                        <button class="btn btn-outline-primary btn-sm">View Details</button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="drive-card">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/80" class="company-logo me-3">
                            <div>
                                <h6 class="fw-bold">HCL Technologies</h6>
                                <p class="text-muted mb-0">HCLTech</p>
                            </div>
                        </div>
                        <span class="status-badge bg-warning text-dark">Upcoming</span>
                    </div>
                    
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <small class="text-muted">
                                    <i class="bi bi-calendar3 me-1"></i> Mar 5, 2026
                                </small>
                            </div>
                            <div class="col-6">
                                <small class="text-muted">
                                    <i class="bi bi-clock me-1"></i> 2:00 PM
                                </small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <h6 class="fw-bold mb-2">Position: Software Developer</h6>
                        <p class="text-muted small mb-2">
                            Looking for skilled software developers to join our innovation team and work on enterprise solutions.
                        </p>
                        <div class="mb-2">
                            <span class="badge bg-light text-dark me-1">.NET</span>
                            <span class="badge bg-light text-dark me-1">C#</span>
                            <span class="badge bg-light text-dark me-1">SQL Server</span>
                            <span class="badge bg-light text-dark me-1">Azure</span>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <small class="text-muted">Application Deadline</small>
                            <small class="text-muted">12 days left</small>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-success" style="width: 20%"></div>
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-primary btn-sm">Apply Now</button>
                        <button class="btn btn-outline-primary btn-sm">View Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- APPLIED DRIVES -->
    <div class="card custom-card p-4 mb-4">
        <h5 class="fw-bold mb-4">Applied Drives</h5>
        
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Company</th>
                        <th>Position</th>
                        <th>Applied Date</th>
                        <th>Status</th>
                        <th>Next Round</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://via.placeholder.com/40" class="company-logo me-2" style="width:40px;height:40px;">
                                <div>
                                    <strong>TCS Digital</strong>
                                    <br><small class="text-muted">Tata Consultancy Services</small>
                                </div>
                            </div>
                        </td>
                        <td>Full Stack Developer</td>
                        <td>Feb 10, 2026</td>
                        <td><span class="status-badge bg-warning text-dark">Under Review</span></td>
                        <td>Aptitude Test</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-outline-primary me-1">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-clock-history"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://via.placeholder.com/40" class="company-logo me-2" style="width:40px;height:40px;">
                                <div>
                                    <strong>Infosys</strong>
                                    <br><small class="text-muted">Infosys Limited</small>
                                </div>
                            </div>
                        </td>
                        <td>Software Engineer</td>
                        <td>Feb 5, 2026</td>
                        <td><span class="status-badge bg-success text-white">Shortlisted</span></td>
                        <td>Technical Interview</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-outline-primary me-1">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-calendar-check"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://via.placeholder.com/40" class="company-logo me-2" style="width:40px;height:40px;">
                                <div>
                                    <strong>Accenture</strong>
                                    <br><small class="text-muted">Accenture plc</small>
                                </div>
                            </div>
                        </td>
                        <td>Associate Software Engineer</td>
                        <td>Jan 28, 2026</td>
                        <td><span class="status-badge bg-danger text-white">Rejected</span></td>
                        <td>-</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-outline-primary me-1">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-info-circle"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://via.placeholder.com/40" class="company-logo me-2" style="width:40px;height:40px;">
                                <div>
                                    <strong>Cognizant</strong>
                                    <br><small class="text-muted">Cognizant Technology Solutions</small>
                                </div>
                            </div>
                        </td>
                        <td>Programmer Analyst</td>
                        <td>Jan 20, 2026</td>
                        <td><span class="status-badge bg-success text-white">Selected</span></td>
                        <td>Offer Received</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-outline-primary me-1">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-success">
                                <i class="bi bi-check-circle"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- DRIVE CALENDAR -->
    <div class="card custom-card p-4 mb-4">
        <h5 class="fw-bold mb-4">Drive Calendar</h5>
        
        <div class="row">
            <div class="col-md-8">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <h6 class="fw-bold mb-3">February 2026</h6>
                        <div class="row">
                            <div class="col">
                                <small class="text-muted">Sun</small>
                            </div>
                            <div class="col">
                                <small class="text-muted">Mon</small>
                            </div>
                            <div class="col">
                                <small class="text-muted">Tue</small>
                            </div>
                            <div class="col">
                                <small class="text-muted">Wed</small>
                            </div>
                            <div class="col">
                                <small class="text-muted">Thu</small>
                            </div>
                            <div class="col">
                                <small class="text-muted">Fri</small>
                            </div>
                            <div class="col">
                                <small class="text-muted">Sat</small>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">1</div>
                            <div class="col">2</div>
                            <div class="col">3</div>
                            <div class="col">4</div>
                            <div class="col">5</div>
                            <div class="col">6</div>
                            <div class="col">7</div>
                            <div class="col">8</div>
                            <div class="col">9</div>
                            <div class="col">10</div>
                            <div class="col">11</div>
                            <div class="col">12</div>
                            <div class="col">13</div>
                            <div class="col">14</div>
                            <div class="col">15</div>
                            <div class="col">16</div>
                            <div class="col">17</div>
                            <div class="col">18</div>
                            <div class="col">19</div>
                            <div class="col bg-primary text-white rounded">20</div>
                            <div class="col">21</div>
                            <div class="col">22</div>
                            <div class="col">23</div>
                            <div class="col">24</div>
                            <div class="col bg-warning text-dark rounded">25</div>
                            <div class="col">26</div>
                            <div class="col">27</div>
                            <div class="col">28</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h6 class="fw-bold mb-3">Upcoming Events</h6>
                <div class="mb-3">
                    <div class="d-flex align-items-center">
                        <div class="bg-primary text-white rounded-circle p-2 me-3" style="width:40px;height:40px;display:flex;align-items:center;justify-content:center;">
                            <small>20</small>
                        </div>
                        <div>
                            <h6 class="mb-0">TCS Digital Drive</h6>
                            <small class="text-muted">Full Stack Developer</small>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="d-flex align-items-center">
                        <div class="bg-warning text-dark rounded-circle p-2 me-3" style="width:40px;height:40px;display:flex;align-items:center;justify-content:center;">
                            <small>25</small>
                        </div>
                        <div>
                            <h6 class="mb-0">Infosys Drive</h6>
                            <small class="text-muted">Software Engineer</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PREPARATION TIPS -->
    <div class="card custom-card p-4">
        <h5 class="fw-bold mb-4">Interview Preparation</h5>
        
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="d-flex align-items-start">
                    <i class="bi bi-book-fill text-primary me-3 mt-1"></i>
                    <div>
                        <h6 class="mb-1">Technical Skills</h6>
                        <p class="text-muted mb-0">Practice coding problems and review core concepts</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="d-flex align-items-start">
                    <i class="bi bi-people-fill text-success me-3 mt-1"></i>
                    <div>
                        <h6 class="mb-1">Soft Skills</h6>
                        <p class="text-muted mb-0">Prepare for behavioral and HR interviews</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="d-flex align-items-start">
                    <i class="bi bi-file-earmark-text-fill text-warning me-3 mt-1"></i>
                    <div>
                        <h6 class="mb-1">Resume Review</h6>
                        <p class="text-muted mb-0">Update and tailor your resume for each company</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="d-flex align-items-start">
                    <i class="bi bi-building-fill text-info me-3 mt-1"></i>
                    <div>
                        <h6 class="mb-1">Company Research</h6>
                        <p class="text-muted mb-0">Learn about the company and job requirements</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>

<?php include 'includes/Footer.php'; ?>
