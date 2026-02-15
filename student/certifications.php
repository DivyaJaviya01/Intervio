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

/* Certification Card */
.cert-card{
    border:1px solid #e5e7eb;
    border-radius:12px;
    padding:20px;
    height:100%;
    transition:all 0.3s ease;
    position:relative;
}

.cert-card:hover{
    transform:translateY(-5px);
    box-shadow:0 10px 25px rgba(0,0,0,0.1);
}

/* Badge Styles */
.badge-custom{
    padding:6px 12px;
    border-radius:20px;
    font-weight:500;
}

/* Certificate Icon */
.cert-icon{
    position:absolute;
    top:15px;
    right:15px;
    font-size:24px;
    color:#4f46e5;
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
                <h2 class="fw-bold mb-3">Certifications & Achievements</h2>
                <p class="mb-2">Display your professional certifications and industry recognitions</p>
            </div>
            <div class="col-md-4 text-end">
                <button class="btn btn-light btn-lg">Add Certification</button>
            </div>
        </div>
    </div>

    <!-- CERTIFICATION OVERVIEW -->
    <div class="card custom-card p-4 mb-4">
        <h5 class="fw-bold mb-4">Certification Overview</h5>
        
        <div class="row text-center">
            <div class="col-md-3">
                <h3 class="fw-bold text-primary">8</h3>
                <p class="text-muted">Total Certifications</p>
            </div>
            <div class="col-md-3">
                <h3 class="fw-bold text-success">6</h3>
                <p class="text-muted">Active</p>
            </div>
            <div class="col-md-3">
                <h3 class="fw-bold text-warning">2</h3>
                <p class="text-muted">Expired</p>
            </div>
            <div class="col-md-3">
                <h3 class="fw-bold text-info">4</h3>
                <p class="text-muted">In Progress</p>
            </div>
        </div>
    </div>

    <!-- TECHNICAL CERTIFICATIONS -->
    <div class="card custom-card p-4 mb-4">
        <h5 class="fw-bold mb-4">Technical Certifications</h5>
        
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="cert-card">
                    <i class="bi bi-award-fill cert-icon"></i>
                    <h6 class="fw-bold mb-2">AWS Certified Solutions Architect</h6>
                    <p class="text-muted mb-2">Amazon Web Services</p>
                    
                    <div class="mb-3">
                        <span class="badge-custom bg-success text-white">Active</span>
                        <span class="badge-custom bg-primary text-white">Professional</span>
                    </div>
                    
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <small class="text-muted">
                            <i class="bi bi-calendar3 me-1"></i> Issued: Mar 2025
                        </small>
                        <small class="text-muted">
                            <i class="bi bi-calendar-check me-1"></i> Expires: Mar 2028
                        </small>
                    </div>
                    
                    <p class="text-muted small mb-3">
                        Demonstrated expertise in designing distributed systems on AWS platform, including deployment, operations, and troubleshooting.
                    </p>
                    
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-eye"></i> View Certificate
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-link-45deg"></i> Verify
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="cert-card">
                    <i class="bi bi-award-fill cert-icon"></i>
                    <h6 class="fw-bold mb-2">Google Cloud Professional Developer</h6>
                    <p class="text-muted mb-2">Google Cloud Platform</p>
                    
                    <div class="mb-3">
                        <span class="badge-custom bg-success text-white">Active</span>
                        <span class="badge-custom bg-primary text-white">Professional</span>
                    </div>
                    
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <small class="text-muted">
                            <i class="bi bi-calendar3 me-1"></i> Issued: Jan 2025
                        </small>
                        <small class="text-muted">
                            <i class="bi bi-calendar-check me-1"></i> Expires: Jan 2028
                        </small>
                    </div>
                    
                    <p class="text-muted small mb-3">
                        Proficient in building scalable and reliable applications using Google Cloud technologies and best practices.
                    </p>
                    
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-eye"></i> View Certificate
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-link-45deg"></i> Verify
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="cert-card">
                    <i class="bi bi-award-fill cert-icon"></i>
                    <h6 class="fw-bold mb-2">MongoDB Certified Developer</h6>
                    <p class="text-muted mb-2">MongoDB University</p>
                    
                    <div class="mb-3">
                        <span class="badge-custom bg-success text-white">Active</span>
                        <span class="badge-custom bg-info text-white">Developer</span>
                    </div>
                    
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <small class="text-muted">
                            <i class="bi bi-calendar3 me-1"></i> Issued: Nov 2024
                        </small>
                        <small class="text-muted">
                            <i class="bi bi-calendar-check me-1"></i> Expires: Nov 2027
                        </small>
                    </div>
                    
                    <p class="text-muted small mb-3">
                        Expertise in MongoDB schema design, indexing, aggregation framework, and performance optimization.
                    </p>
                    
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-eye"></i> View Certificate
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-link-45deg"></i> Verify
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="cert-card">
                    <i class="bi bi-award-fill cert-icon"></i>
                    <h6 class="fw-bold mb-2">React Developer Certification</h6>
                    <p class="text-muted mb-2">Meta</p>
                    
                    <div class="mb-3">
                        <span class="badge-custom bg-success text-white">Active</span>
                        <span class="badge-custom bg-info text-white">Developer</span>
                    </div>
                    
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <small class="text-muted">
                            <i class="bi bi-calendar3 me-1"></i> Issued: Sep 2024
                        </small>
                        <small class="text-muted">
                            <i class="bi bi-calendar-check me-1"></i> Expires: Sep 2026
                        </small>
                    </div>
                    
                    <p class="text-muted small mb-3">
                        Comprehensive knowledge of React ecosystem including hooks, state management, and performance optimization.
                    </p>
                    
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-eye"></i> View Certificate
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-link-45deg"></i> Verify
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PROGRAMMING CERTIFICATIONS -->
    <div class="card custom-card p-4 mb-4">
        <h5 class="fw-bold mb-4">Programming Certifications</h5>
        
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="cert-card">
                    <i class="bi bi-award-fill cert-icon"></i>
                    <h6 class="fw-bold mb-2">Python Programming Professional</h6>
                    <p class="text-muted mb-2">Python Institute</p>
                    
                    <div class="mb-3">
                        <span class="badge-custom bg-success text-white">Active</span>
                        <span class="badge-custom bg-info text-white">Professional</span>
                    </div>
                    
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <small class="text-muted">
                            <i class="bi bi-calendar3 me-1"></i> Issued: Aug 2024
                        </small>
                        <small class="text-muted">
                            <i class="bi bi-calendar-check me-1"></i> Expires: Aug 2026
                        </small>
                    </div>
                    
                    <p class="text-muted small mb-3">
                        Advanced Python programming skills including OOP, data structures, algorithms, and standard libraries.
                    </p>
                    
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-eye"></i> View Certificate
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-link-45deg"></i> Verify
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="cert-card">
                    <i class="bi bi-award-fill cert-icon"></i>
                    <h6 class="fw-bold mb-2">Java SE Developer</h6>
                    <p class="text-muted mb-2">Oracle</p>
                    
                    <div class="mb-3">
                        <span class="badge-custom bg-warning text-dark">Expired</span>
                        <span class="badge-custom bg-info text-white">Developer</span>
                    </div>
                    
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <small class="text-muted">
                            <i class="bi bi-calendar3 me-1"></i> Issued: May 2024
                        </small>
                        <small class="text-muted">
                            <i class="bi bi-calendar-x me-1"></i> Expired: Dec 2025
                        </small>
                    </div>
                    
                    <p class="text-muted small mb-3">
                        Core Java programming skills including object-oriented programming, collections, and exception handling.
                    </p>
                    
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-eye"></i> View Certificate
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-link-45deg"></i> Verify
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ONLINE COURSES -->
    <div class="card custom-card p-4 mb-4">
        <h5 class="fw-bold mb-4">Online Courses & Badges</h5>
        
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="cert-card">
                    <i class="bi bi-patch-check-fill cert-icon"></i>
                    <h6 class="fw-bold mb-2">Full Stack Web Development</h6>
                    <p class="text-muted mb-2">Coursera - University of Michigan</p>
                    
                    <div class="mb-3">
                        <span class="badge-custom bg-success text-white">Completed</span>
                        <span class="badge-custom bg-secondary text-white">Online Course</span>
                    </div>
                    
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <small class="text-muted">
                            <i class="bi bi-calendar3 me-1"></i> Completed: Jul 2024
                        </small>
                        <small class="text-muted">
                            <i class="bi bi-clock me-1"></i> Duration: 6 months
                        </small>
                    </div>
                    
                    <p class="text-muted small mb-3">
                        Comprehensive full-stack development covering HTML, CSS, JavaScript, Node.js, Express, and MongoDB.
                    </p>
                    
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-eye"></i> View Certificate
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-link-45deg"></i> Verify
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="cert-card">
                    <i class="bi bi-patch-check-fill cert-icon"></i>
                    <h6 class="fw-bold mb-2">Machine Learning Fundamentals</h6>
                    <p class="text-muted mb-2">Udacity</p>
                    
                    <div class="mb-3">
                        <span class="badge-custom bg-success text-white">Completed</span>
                        <span class="badge-custom bg-secondary text-white">Nanodegree</span>
                    </div>
                    
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <small class="text-muted">
                            <i class="bi bi-calendar3 me-1"></i> Completed: Apr 2024
                        </small>
                        <small class="text-muted">
                            <i class="bi bi-clock me-1"></i> Duration: 4 months
                        </small>
                    </div>
                    
                    <p class="text-muted small mb-3">
                        Machine learning fundamentals including supervised learning, unsupervised learning, and neural networks.
                    </p>
                    
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-eye"></i> View Certificate
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-link-45deg"></i> Verify
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- IN PROGRESS -->
    <div class="card custom-card p-4">
        <h5 class="fw-bold mb-4">Currently Pursuing</h5>
        
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="cert-card">
                    <i class="bi bi-hourglass-split cert-icon"></i>
                    <h6 class="fw-bold mb-2">DevOps Engineering Professional</h6>
                    <p class="text-muted mb-2">Linux Foundation</p>
                    
                    <div class="mb-3">
                        <span class="badge-custom bg-warning text-dark">In Progress</span>
                        <span class="badge-custom bg-primary text-white">Professional</span>
                    </div>
                    
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <small class="text-muted">
                            <i class="bi bi-calendar3 me-1"></i> Started: Feb 2026
                        </small>
                        <small class="text-muted">
                            <i class="bi bi-clock me-1"></i> Expected: Jun 2026
                        </small>
                    </div>
                    
                    <div class="progress mb-3">
                        <div class="progress-bar bg-warning" style="width: 35%">35%</div>
                    </div>
                    
                    <p class="text-muted small mb-3">
                        Comprehensive DevOps practices including CI/CD, containerization, and infrastructure as code.
                    </p>
                    
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-eye"></i> View Progress
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-book"></i> Continue Learning
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="cert-card">
                    <i class="bi bi-hourglass-split cert-icon"></i>
                    <h6 class="fw-bold mb-2">Cybersecurity Essentials</h6>
                    <p class="text-muted mb-2">Cisco Networking Academy</p>
                    
                    <div class="mb-3">
                        <span class="badge-custom bg-warning text-dark">In Progress</span>
                        <span class="badge-custom bg-info text-white">Essentials</span>
                    </div>
                    
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <small class="text-muted">
                            <i class="bi bi-calendar3 me-1"></i> Started: Mar 2026
                        </small>
                        <small class="text-muted">
                            <i class="bi bi-clock me-1"></i> Expected: May 2026
                        </small>
                    </div>
                    
                    <div class="progress mb-3">
                        <div class="progress-bar bg-warning" style="width: 25%">25%</div>
                    </div>
                    
                    <p class="text-muted small mb-3">
                        Fundamentals of cybersecurity including network security, threat intelligence, and security operations.
                    </p>
                    
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-eye"></i> View Progress
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-book"></i> Continue Learning
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>

<?php include 'includes/Footer.php'; ?>
