<?php include 'includes/Header.php'; ?>

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<style>

body{
    background:#f4f6f9;
    font-family: 'Segoe UI', sans-serif;
}

.col-md-10 {
    margin-left: 15%;
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

/* Project Card */
.project-card{
    border:1px solid #e5e7eb;
    border-radius:12px;
    padding:20px;
    height:100%;
    transition:all 0.3s ease;
}

.project-card:hover{
    transform:translateY(-5px);
    box-shadow:0 10px 25px rgba(0,0,0,0.1);
}

/* Tech Stack */
.tech-badge{
    background:#f3f4f6;
    color:#374151;
    padding:4px 10px;
    border-radius:15px;
    font-size:12px;
    margin:2px;
}

/* Status Badge */
.status-badge{
    padding:6px 12px;
    border-radius:20px;
    font-size:12px;
    font-weight:600;
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
                <h2 class="fw-bold mb-3">Projects Portfolio</h2>
                <p class="mb-2">Showcase your development projects and technical achievements</p>
            </div>
            <div class="col-md-4 text-end">
                <button class="btn btn-light btn-lg">Add New Project</button>
            </div>
        </div>
    </div>

    <!-- PROJECT STATISTICS -->
    <div class="card custom-card p-4 mb-4">
        <h5 class="fw-bold mb-4">Project Overview</h5>
        
        <div class="row text-center">
            <div class="col-md-3">
                <h3 class="fw-bold text-primary">12</h3>
                <p class="text-muted">Total Projects</p>
            </div>
            <div class="col-md-3">
                <h3 class="fw-bold text-success">8</h3>
                <p class="text-muted">Completed</p>
            </div>
            <div class="col-md-3">
                <h3 class="fw-bold text-warning">3</h3>
                <p class="text-muted">In Progress</p>
            </div>
            <div class="col-md-3">
                <h3 class="fw-bold text-info">1</h3>
                <p class="text-muted">Planned</p>
            </div>
        </div>
    </div>

    <!-- FEATURED PROJECTS -->
    <div class="card custom-card p-4 mb-4">
        <h5 class="fw-bold mb-4">Featured Projects</h5>
        
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="project-card">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h6 class="fw-bold">Placement Portal System</h6>
                        <span class="status-badge bg-success text-white">Completed</span>
                    </div>
                    
                    <p class="text-muted mb-3">
                        Comprehensive web-based portal for managing placement drives, student profiles, and company interactions. Features include real-time notifications and analytics dashboard.
                    </p>
                    
                    <div class="mb-3">
                        <span class="tech-badge">PHP</span>
                        <span class="tech-badge">MySQL</span>
                        <span class="tech-badge">Bootstrap</span>
                        <span class="tech-badge">JavaScript</span>
                    </div>
                    
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">
                            <i class="bi bi-calendar3 me-1"></i> Jan 2026
                        </small>
                        <div>
                            <a href="#" class="btn btn-sm btn-outline-primary me-2">
                                <i class="bi bi-github"></i> Code
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-eye"></i> Live
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="project-card">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h6 class="fw-bold">E-Commerce Platform</h6>
                        <span class="status-badge bg-success text-white">Completed</span>
                    </div>
                    
                    <p class="text-muted mb-3">
                        Full-featured e-commerce website with product catalog, shopping cart, payment integration, and admin dashboard. Implemented secure payment gateway integration.
                    </p>
                    
                    <div class="mb-3">
                        <span class="tech-badge">HTML</span>
                        <span class="tech-badge">CSS</span>
                        <span class="tech-badge">JavaScript</span>
                        <span class="tech-badge">PHP</span>
                        <span class="tech-badge">Stripe API</span>
                    </div>
                    
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">
                            <i class="bi bi-calendar3 me-1"></i> Dec 2025
                        </small>
                        <div>
                            <a href="#" class="btn btn-sm btn-outline-primary me-2">
                                <i class="bi bi-github"></i> Code
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-eye"></i> Live
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="project-card">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h6 class="fw-bold">Task Management App</h6>
                        <span class="status-badge bg-warning text-dark">In Progress</span>
                    </div>
                    
                    <p class="text-muted mb-3">
                        Collaborative task management application with real-time updates, drag-and-drop functionality, and team collaboration features. Built with modern JavaScript frameworks.
                    </p>
                    
                    <div class="mb-3">
                        <span class="tech-badge">React.js</span>
                        <span class="tech-badge">Node.js</span>
                        <span class="tech-badge">MongoDB</span>
                        <span class="tech-badge">Socket.io</span>
                    </div>
                    
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">
                            <i class="bi bi-calendar3 me-1"></i> Feb 2026
                        </small>
                        <div>
                            <a href="#" class="btn btn-sm btn-outline-primary me-2">
                                <i class="bi bi-github"></i> Code
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-eye"></i> Live
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="project-card">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <h6 class="fw-bold">Weather Dashboard</h6>
                        <span class="status-badge bg-success text-white">Completed</span>
                    </div>
                    
                    <p class="text-muted mb-3">
                        Real-time weather dashboard with location-based forecasts, interactive maps, and historical weather data visualization using charts and graphs.
                    </p>
                    
                    <div class="mb-3">
                        <span class="tech-badge">HTML5</span>
                        <span class="tech-badge">CSS3</span>
                        <span class="tech-badge">JavaScript</span>
                        <span class="tech-badge">Weather API</span>
                        <span class="tech-badge">Chart.js</span>
                    </div>
                    
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">
                            <i class="bi bi-calendar3 me-1"></i> Nov 2025
                        </small>
                        <div>
                            <a href="#" class="btn btn-sm btn-outline-primary me-2">
                                <i class="bi bi-github"></i> Code
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-eye"></i> Live
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ALL PROJECTS -->
    <div class="card custom-card p-4 mb-4">
        <h5 class="fw-bold mb-4">All Projects</h5>
        
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Project Name</th>
                        <th>Category</th>
                        <th>Tech Stack</th>
                        <th>Status</th>
                        <th>Completion</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Placement Portal System</strong></td>
                        <td>Web Development</td>
                        <td>PHP, MySQL, Bootstrap</td>
                        <td><span class="status-badge bg-success text-white">Completed</span></td>
                        <td>100%</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-outline-primary me-1">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-pencil"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>E-Commerce Platform</strong></td>
                        <td>Web Development</td>
                        <td>HTML, CSS, JavaScript, PHP</td>
                        <td><span class="status-badge bg-success text-white">Completed</span></td>
                        <td>100%</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-outline-primary me-1">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-pencil"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Task Management App</strong></td>
                        <td>Web Application</td>
                        <td>React, Node.js, MongoDB</td>
                        <td><span class="status-badge bg-warning text-dark">In Progress</span></td>
                        <td>75%</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-outline-primary me-1">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-pencil"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Weather Dashboard</strong></td>
                        <td>Data Visualization</td>
                        <td>JavaScript, Weather API</td>
                        <td><span class="status-badge bg-success text-white">Completed</span></td>
                        <td>100%</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-outline-primary me-1">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-pencil"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Blog Platform</strong></td>
                        <td>CMS</td>
                        <td>PHP, MySQL, Bootstrap</td>
                        <td><span class="status-badge bg-success text-white">Completed</span></td>
                        <td>100%</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-outline-primary me-1">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-pencil"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Chat Application</strong></td>
                        <td>Real-time App</td>
                        <td>Socket.io, Node.js</td>
                        <td><span class="status-badge bg-warning text-dark">In Progress</span></td>
                        <td>60%</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-outline-primary me-1">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-pencil"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- PROJECT CATEGORIES -->
    <div class="card custom-card p-4">
        <h5 class="fw-bold mb-4">Projects by Category</h5>
        
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="text-center p-3 bg-light rounded">
                    <h4 class="fw-bold text-primary">6</h4>
                    <p class="mb-0">Web Development</p>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="text-center p-3 bg-light rounded">
                    <h4 class="fw-bold text-success">3</h4>
                    <p class="mb-0">Mobile Apps</p>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="text-center p-3 bg-light rounded">
                    <h4 class="fw-bold text-warning">2</h4>
                    <p class="mb-0">Data Science</p>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="text-center p-3 bg-light rounded">
                    <h4 class="fw-bold text-info">1</h4>
                    <p class="mb-0">Machine Learning</p>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>

<?php include 'includes/Footer.php'; ?>
