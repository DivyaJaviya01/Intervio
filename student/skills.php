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
    height:10px;
    border-radius:10px;
}

/* Skill Chips */
.skill-chip{
    background:#e0e7ff;
    color:#3730a3;
    padding:8px 16px;
    border-radius:20px;
    display:inline-block;
    margin:5px;
    font-size:14px;
    font-weight:500;
}

/* Skill Category */
.skill-category{
    border-left:4px solid #4f46e5;
    padding-left:15px;
    margin-bottom:25px;
}

/* Rating Stars */
.rating{
    color:#ffc107;
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
                <h2 class="fw-bold mb-3">Technical Skills</h2>
                <p class="mb-2">Showcase your technical expertise and competencies</p>
            </div>
            <div class="col-md-4 text-end">
                <button class="btn btn-light btn-lg">Add New Skill</button>
            </div>
        </div>
    </div>

    <!-- PROGRAMMING LANGUAGES -->
    <div class="card custom-card p-4 mb-4">
        <h5 class="fw-bold mb-4 skill-category">Programming Languages</h5>
        
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="mb-0">JavaScript</h6>
                    <div class="rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-success" style="width: 90%"></div>
                </div>
                <small class="text-muted">Advanced - 4.5/5</small>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="mb-0">Python</h6>
                    <div class="rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star"></i>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-info" style="width: 80%"></div>
                </div>
                <small class="text-muted">Intermediate - 4/5</small>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="mb-0">PHP</h6>
                    <div class="rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-success" style="width: 85%"></div>
                </div>
                <small class="text-muted">Advanced - 4.5/5</small>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="mb-0">Java</h6>
                    <div class="rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-warning" style="width: 60%"></div>
                </div>
                <small class="text-muted">Intermediate - 3/5</small>
            </div>
        </div>
    </div>

    <!-- WEB TECHNOLOGIES -->
    <div class="card custom-card p-4 mb-4">
        <h5 class="fw-bold mb-4 skill-category">Web Technologies</h5>
        
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="mb-0">HTML5</h6>
                    <div class="rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-success" style="width: 95%"></div>
                </div>
                <small class="text-muted">Expert - 5/5</small>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="mb-0">CSS3</h6>
                    <div class="rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-success" style="width: 90%"></div>
                </div>
                <small class="text-muted">Advanced - 4.5/5</small>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="mb-0">Bootstrap</h6>
                    <div class="rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-success" style="width: 95%"></div>
                </div>
                <small class="text-muted">Expert - 5/5</small>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="mb-0">React.js</h6>
                    <div class="rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-info" style="width: 70%"></div>
                </div>
                <small class="text-muted">Intermediate - 3.5/5</small>
            </div>
        </div>
    </div>

    <!-- DATABASES -->
    <div class="card custom-card p-4 mb-4">
        <h5 class="fw-bold mb-4 skill-category">Databases</h5>
        
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="mb-0">MySQL</h6>
                    <div class="rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-success" style="width: 85%"></div>
                </div>
                <small class="text-muted">Advanced - 4.5/5</small>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="mb-0">MongoDB</h6>
                    <div class="rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star"></i>
                        <i class="bi bi-star"></i>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-info" style="width: 65%"></div>
                </div>
                <small class="text-muted">Intermediate - 3/5</small>
            </div>
        </div>
    </div>

    <!-- TOOLS & TECHNOLOGIES -->
    <div class="card custom-card p-4 mb-4">
        <h5 class="fw-bold mb-4 skill-category">Tools & Technologies</h5>
        
        <div class="row">
            <div class="col-md-12">
                <h6 class="mb-3">Version Control</h6>
                <div class="mb-4">
                    <span class="skill-chip">Git</span>
                    <span class="skill-chip">GitHub</span>
                    <span class="skill-chip">GitLab</span>
                </div>
                
                <h6 class="mb-3">Development Tools</h6>
                <div class="mb-4">
                    <span class="skill-chip">VS Code</span>
                    <span class="skill-chip">Sublime Text</span>
                    <span class="skill-chip">Chrome DevTools</span>
                    <span class="skill-chip">Postman</span>
                </div>
                
                <h6 class="mb-3">Cloud Platforms</h6>
                <div class="mb-4">
                    <span class="skill-chip">AWS</span>
                    <span class="skill-chip">Firebase</span>
                    <span class="skill-chip">Netlify</span>
                </div>
                
                <h6 class="mb-3">Other Technologies</h6>
                <div>
                    <span class="skill-chip">REST APIs</span>
                    <span class="skill-chip">JSON</span>
                    <span class="skill-chip">XML</span>
                    <span class="skill-chip">AJAX</span>
                    <span class="skill-chip">jQuery</span>
                    <span class="skill-chip">Node.js</span>
                </div>
            </div>
        </div>
    </div>

    <!-- SOFT SKILLS -->
    <div class="card custom-card p-4">
        <h5 class="fw-bold mb-4 skill-category">Soft Skills</h5>
        
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="d-flex align-items-center">
                    <i class="bi bi-check-circle-fill text-success me-3"></i>
                    <span>Problem Solving</span>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="d-flex align-items-center">
                    <i class="bi bi-check-circle-fill text-success me-3"></i>
                    <span>Team Collaboration</span>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="d-flex align-items-center">
                    <i class="bi bi-check-circle-fill text-success me-3"></i>
                    <span>Communication</span>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="d-flex align-items-center">
                    <i class="bi bi-check-circle-fill text-success me-3"></i>
                    <span>Time Management</span>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="d-flex align-items-center">
                    <i class="bi bi-check-circle-fill text-success me-3"></i>
                    <span>Leadership</span>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="d-flex align-items-center">
                    <i class="bi bi-check-circle-fill text-success me-3"></i>
                    <span>Adaptability</span>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>

<?php include 'includes/Footer.php'; ?>
