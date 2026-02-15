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

/* Progress Bars */
.progress{
    height:8px;
    border-radius:10px;
}

/* Badge Styles */
.badge-custom{
    padding:8px 15px;
    border-radius:20px;
    font-weight:500;
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
                <h2 class="fw-bold mb-3">Academic Information</h2>
                <p class="mb-2">Track your educational journey and performance metrics</p>
            </div>
            <div class="col-md-4 text-end">
                <button class="btn btn-light btn-lg">Edit Academic Details</button>
            </div>
        </div>
    </div>

    <!-- CURRENT EDUCATION -->
    <div class="card custom-card p-4 mb-4">
        <h5 class="fw-bold mb-4">Current Education</h5>
        
        <div class="row">
            <div class="col-md-6">
                <p class="mb-2"><strong>Program:</strong> B.Tech Computer Science</p>
                <p class="mb-2"><strong>Year:</strong> Final Year (4th Year)</p>
                <p class="mb-2"><strong>Enrollment No:</strong> 22CS045</p>
                <p class="mb-2"><strong>Batch:</strong> 2022-2026</p>
            </div>
            <div class="col-md-6">
                <p class="mb-2"><strong>Institution:</strong> Silver Oak University</p>
                <p class="mb-2"><strong>Location:</strong> Ahmedabad, Gujarat</p>
                <p class="mb-2"><strong>Expected Graduation:</strong> June 2026</p>
                <p class="mb-2"><strong>Academic Status:</strong> <span class="badge bg-success">Active</span></p>
            </div>
        </div>
    </div>

    <!-- CGPA PERFORMANCE -->
    <div class="card custom-card p-4 mb-4">
        <h5 class="fw-bold mb-4">CGPA Performance</h5>
        
        <div class="row mb-4">
            <div class="col-md-4 text-center">
                <h3 class="fw-bold text-primary">8.6</h3>
                <p class="text-muted">Current CGPA</p>
            </div>
            <div class="col-md-4 text-center">
                <h3 class="fw-bold text-success">92%</h3>
                <p class="text-muted">Overall Percentage</p>
            </div>
            <div class="col-md-4 text-center">
                <h3 class="fw-bold text-warning">Top 10%</h3>
                <p class="text-muted">Class Rank</p>
            </div>
        </div>

        <h6 class="fw-bold mb-3">Semester-wise Performance</h6>
        <div class="mb-3">
            <div class="d-flex justify-content-between mb-1">
                <span>Semester 1</span>
                <span>8.8</span>
            </div>
            <div class="progress">
                <div class="progress-bar bg-success" style="width: 88%"></div>
            </div>
        </div>
        <div class="mb-3">
            <div class="d-flex justify-content-between mb-1">
                <span>Semester 2</span>
                <span>8.5</span>
            </div>
            <div class="progress">
                <div class="progress-bar bg-success" style="width: 85%"></div>
            </div>
        </div>
        <div class="mb-3">
            <div class="d-flex justify-content-between mb-1">
                <span>Semester 3</span>
                <span>8.7</span>
            </div>
            <div class="progress">
                <div class="progress-bar bg-success" style="width: 87%"></div>
            </div>
        </div>
        <div class="mb-3">
            <div class="d-flex justify-content-between mb-1">
                <span>Semester 4</span>
                <span>8.4</span>
            </div>
            <div class="progress">
                <div class="progress-bar bg-success" style="width: 84%"></div>
            </div>
        </div>
        <div class="mb-3">
            <div class="d-flex justify-content-between mb-1">
                <span>Semester 5</span>
                <span>8.9</span>
            </div>
            <div class="progress">
                <div class="progress-bar bg-success" style="width: 89%"></div>
            </div>
        </div>
        <div class="mb-3">
            <div class="d-flex justify-content-between mb-1">
                <span>Semester 6</span>
                <span>8.6</span>
            </div>
            <div class="progress">
                <div class="progress-bar bg-success" style="width: 86%"></div>
            </div>
        </div>
    </div>

    <!-- SUBJECTS & GRADES -->
    <div class="card custom-card p-4 mb-4">
        <h5 class="fw-bold mb-4">Current Semester Subjects</h5>
        
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="d-flex justify-content-between align-items-center p-3 bg-light rounded">
                    <div>
                        <h6 class="mb-1">Machine Learning</h6>
                        <small class="text-muted">Core Subject</small>
                    </div>
                    <span class="badge bg-success">A+</span>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="d-flex justify-content-between align-items-center p-3 bg-light rounded">
                    <div>
                        <h6 class="mb-1">Cloud Computing</h6>
                        <small class="text-muted">Core Subject</small>
                    </div>
                    <span class="badge bg-success">A</span>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="d-flex justify-content-between align-items-center p-3 bg-light rounded">
                    <div>
                        <h6 class="mb-1">Web Technologies</h6>
                        <small class="text-muted">Core Subject</small>
                    </div>
                    <span class="badge bg-success">A+</span>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="d-flex justify-content-between align-items-center p-3 bg-light rounded">
                    <div>
                        <h6 class="mb-1">Data Structures</h6>
                        <small class="text-muted">Core Subject</small>
                    </div>
                    <span class="badge bg-info">B+</span>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="d-flex justify-content-between align-items-center p-3 bg-light rounded">
                    <div>
                        <h6 class="mb-1">Database Systems</h6>
                        <small class="text-muted">Core Subject</small>
                    </div>
                    <span class="badge bg-success">A</span>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="d-flex justify-content-between align-items-center p-3 bg-light rounded">
                    <div>
                        <h6 class="mb-1">Software Engineering</h6>
                        <small class="text-muted">Core Subject</small>
                    </div>
                    <span class="badge bg-success">A+</span>
                </div>
            </div>
        </div>
    </div>

    <!-- ACHIEVEMENTS -->
    <div class="card custom-card p-4">
        <h5 class="fw-bold mb-4">Academic Achievements</h5>
        
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="d-flex align-items-start">
                    <i class="bi bi-trophy-fill text-warning me-3 mt-1"></i>
                    <div>
                        <h6 class="mb-1">Dean's List</h6>
                        <p class="text-muted mb-0">Consistent academic excellence across all semesters</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="d-flex align-items-start">
                    <i class="bi bi-award-fill text-primary me-3 mt-1"></i>
                    <div>
                        <h6 class="mb-1">Academic Scholarship</h6>
                        <p class="text-muted mb-0">Merit-based scholarship for 2024-2025</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="d-flex align-items-start">
                    <i class="bi bi-star-fill text-success me-3 mt-1"></i>
                    <div>
                        <h6 class="mb-1">Top Performer</h6>
                        <p class="text-muted mb-0">Ranked in top 10% of Computer Science batch</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="d-flex align-items-start">
                    <i class="bi bi-patch-check-fill text-info me-3 mt-1"></i>
                    <div>
                        <h6 class="mb-1">Perfect Attendance</h6>
                        <p class="text-muted mb-0">100% attendance for 3 consecutive semesters</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>

<?php include 'includes/Footer.php'; ?>
