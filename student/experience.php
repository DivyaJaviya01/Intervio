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

/* Experience Card */
.exp-card{
    border-left:4px solid #4f46e5;
    padding:20px;
    margin-bottom:20px;
    background:white;
    border-radius:8px;
    transition:all 0.3s ease;
}

.exp-card:hover{
    transform:translateX(5px);
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

/* Timeline */
.timeline{
    position:relative;
    padding-left:30px;
}

.timeline::before{
    content:'';
    position:absolute;
    left:0;
    top:0;
    bottom:0;
    width:2px;
    background:#e5e7eb;
}

.timeline-item{
    position:relative;
    margin-bottom:30px;
}

.timeline-item::before{
    content:'';
    position:absolute;
    left:-34px;
    top:5px;
    width:10px;
    height:10px;
    border-radius:50%;
    background:#4f46e5;
    border:2px solid white;
}

/* Badge Styles */
.badge-custom{
    padding:6px 12px;
    border-radius:20px;
    font-weight:500;
}

/* Company Logo */
.company-logo{
    width:60px;
    height:60px;
    border-radius:8px;
    object-fit:cover;
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
                <h2 class="fw-bold mb-3">Work Experience</h2>
                <p class="mb-2">Professional journey and industry exposure</p>
            </div>
            <div class="col-md-4 text-end">
                <button class="btn btn-light btn-lg">Add Experience</button>
            </div>
        </div>
    </div>

    <!-- EXPERIENCE OVERVIEW -->
    <div class="card custom-card p-4 mb-4">
        <h5 class="fw-bold mb-4">Experience Summary</h5>
        
        <div class="row text-center">
            <div class="col-md-3">
                <h3 class="fw-bold text-primary">2+</h3>
                <p class="text-muted">Years Experience</p>
            </div>
            <div class="col-md-3">
                <h3 class="fw-bold text-success">3</h3>
                <p class="text-muted">Companies</p>
            </div>
            <div class="col-md-3">
                <h3 class="fw-bold text-warning">5</h3>
                <p class="text-muted">Projects Completed</p>
            </div>
            <div class="col-md-3">
                <h3 class="fw-bold text-info">1</h3>
                <p class="text-muted">Current Position</p>
            </div>
        </div>
    </div>

    <!-- WORK EXPERIENCE -->
    <div class="card custom-card p-4 mb-4">
        <h5 class="fw-bold mb-4">Professional Experience</h5>
        
        <div class="timeline">
            <div class="timeline-item">
                <div class="exp-card">
                    <div class="row">
                        <div class="col-md-2 text-center">
                            <img src="https://via.placeholder.com/60" class="company-logo mb-2">
                            <h6 class="fw-bold">TechCorp</h6>
                            <small class="text-muted">Software Company</small>
                        </div>
                        <div class="col-md-10">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <div>
                                    <h6 class="fw-bold">Full Stack Developer Intern</h6>
                                    <p class="text-muted mb-2">Nov 2025 - Present (3 months)</p>
                                </div>
                                <span class="badge-custom bg-success text-white">Current</span>
                            </div>
                            
                            <p class="text-muted mb-3">
                                Currently working as a Full Stack Developer Intern, developing and maintaining web applications using modern technologies. 
                                Involved in the complete software development lifecycle from requirements gathering to deployment.
                            </p>
                            
                            <div class="mb-3">
                                <h6 class="fw-bold mb-2">Key Responsibilities:</h6>
                                <ul class="text-muted small">
                                    <li>Developed responsive web applications using React.js and Node.js</li>
                                    <li>Designed and implemented RESTful APIs for data communication</li>
                                    <li>Collaborated with cross-functional teams to deliver high-quality software solutions</li>
                                    <li>Participated in code reviews and implemented best practices</li>
                                    <li>Optimized application performance and resolved technical issues</li>
                                </ul>
                            </div>
                            
                            <div class="mb-3">
                                <h6 class="fw-bold mb-2">Technologies Used:</h6>
                                <span class="badge bg-light text-dark me-1">React.js</span>
                                <span class="badge bg-light text-dark me-1">Node.js</span>
                                <span class="badge bg-light text-dark me-1">MongoDB</span>
                                <span class="badge bg-light text-dark me-1">Express.js</span>
                                <span class="badge bg-light text-dark me-1">Git</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="timeline-item">
                <div class="exp-card">
                    <div class="row">
                        <div class="col-md-2 text-center">
                            <img src="https://via.placeholder.com/60" class="company-logo mb-2">
                            <h6 class="fw-bold">WebSolutions</h6>
                            <small class="text-muted">Digital Agency</small>
                        </div>
                        <div class="col-md-10">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <div>
                                    <h6 class="fw-bold">Web Development Intern</h6>
                                    <p class="text-muted mb-2">Jun 2025 - Oct 2025 (5 months)</p>
                                </div>
                                <span class="badge-custom bg-secondary text-white">Completed</span>
                            </div>
                            
                            <p class="text-muted mb-3">
                                Worked as a Web Development Intern, creating responsive websites and web applications for various clients. 
                                Gained hands-on experience in frontend and backend development.
                            </p>
                            
                            <div class="mb-3">
                                <h6 class="fw-bold mb-2">Key Responsibilities:</h6>
                                <ul class="text-muted small">
                                    <li>Built responsive websites using HTML, CSS, and JavaScript</li>
                                    <li>Developed custom WordPress themes and plugins</li>
                                    <li>Integrated third-party APIs and payment gateways</li>
                                    <li>Performed website maintenance and optimization</li>
                                    <li>Collaborated with design team to implement UI/UX requirements</li>
                                </ul>
                            </div>
                            
                            <div class="mb-3">
                                <h6 class="fw-bold mb-2">Technologies Used:</h6>
                                <span class="badge bg-light text-dark me-1">HTML5</span>
                                <span class="badge bg-light text-dark me-1">CSS3</span>
                                <span class="badge bg-light text-dark me-1">JavaScript</span>
                                <span class="badge bg-light text-dark me-1">PHP</span>
                                <span class="badge bg-light text-dark me-1">WordPress</span>
                                <span class="badge bg-light text-dark me-1">MySQL</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="timeline-item">
                <div class="exp-card">
                    <div class="row">
                        <div class="col-md-2 text-center">
                            <img src="https://via.placeholder.com/60" class="company-logo mb-2">
                            <h6 class="fw-bold">StartUpHub</h6>
                            <small class="text-muted">Tech Startup</small>
                        </div>
                        <div class="col-md-10">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <div>
                                    <h6 class="fw-bold">Junior Developer Trainee</h6>
                                    <p class="text-muted mb-2">Jan 2025 - May 2025 (5 months)</p>
                                </div>
                                <span class="badge-custom bg-secondary text-white">Completed</span>
                            </div>
                            
                            <p class="text-muted mb-3">
                                Started as a Junior Developer Trainee, learning and implementing various web technologies. 
                                Contributed to internal projects and gained foundational development skills.
                            </p>
                            
                            <div class="mb-3">
                                <h6 class="fw-bold mb-2">Key Responsibilities:</h6>
                                <ul class="text-muted small">
                                    <li>Learned and applied web development best practices</li>
                                    <li>Assisted in developing internal management systems</li>
                                    <li>Participated in agile development processes</li>
                                    <li>Created documentation for existing applications</li>
                                    <li>Collaborated with senior developers on feature implementation</li>
                                </ul>
                            </div>
                            
                            <div class="mb-3">
                                <h6 class="fw-bold mb-2">Technologies Used:</h6>
                                <span class="badge bg-light text-dark me-1">HTML</span>
                                <span class="badge bg-light text-dark me-1">CSS</span>
                                <span class="badge bg-light text-dark me-1">Bootstrap</span>
                                <span class="badge bg-light text-dark me-1">JavaScript</span>
                                <span class="badge bg-light text-dark me-1">jQuery</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- INTERNSHIPS -->
    <div class="card custom-card p-4 mb-4">
        <h5 class="fw-bold mb-4">Academic Internships</h5>
        
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="exp-card">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <div>
                            <h6 class="fw-bold">Research Intern</h6>
                            <p class="text-muted mb-2">University Computer Science Department</p>
                            <p class="text-muted mb-2">Aug 2024 - Dec 2024 (4 months)</p>
                        </div>
                        <span class="badge-custom bg-info text-white">Academic</span>
                    </div>
                    
                    <p class="text-muted mb-3">
                        Conducted research on machine learning applications in web development. 
                        Developed predictive models and analyzed data patterns.
                    </p>
                    
                    <div>
                        <span class="badge bg-light text-dark me-1">Python</span>
                        <span class="badge bg-light text-dark me-1">TensorFlow</span>
                        <span class="badge bg-light text-dark me-1">Data Analysis</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="exp-card">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <div>
                            <h6 class="fw-bold">Teaching Assistant</h6>
                            <p class="text-muted mb-2">University Computer Science Department</p>
                            <p class="text-muted mb-2">Jan 2024 - May 2024 (5 months)</p>
                        </div>
                        <span class="badge-custom bg-info text-white">Academic</span>
                    </div>
                    
                    <p class="text-muted mb-3">
                        Assisted professors in teaching web development courses. 
                        Conducted lab sessions and helped students with programming assignments.
                    </p>
                    
                    <div>
                        <span class="badge bg-light text-dark me-1">Web Development</span>
                        <span class="badge bg-light text-dark me-1">Teaching</span>
                        <span class="badge bg-light text-dark me-1">Mentoring</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SKILLS GAINED -->
    <div class="card custom-card p-4 mb-4">
        <h5 class="fw-bold mb-4">Skills Gained Through Experience</h5>
        
        <div class="row">
            <div class="col-md-6">
                <h6 class="fw-bold mb-3">Technical Skills</h6>
                <div class="mb-2">
                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                    Full Stack Web Development
                </div>
                <div class="mb-2">
                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                    API Design & Development
                </div>
                <div class="mb-2">
                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                    Database Management
                </div>
                <div class="mb-2">
                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                    Version Control (Git)
                </div>
                <div class="mb-2">
                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                    Agile Development
                </div>
            </div>
            <div class="col-md-6">
                <h6 class="fw-bold mb-3">Soft Skills</h6>
                <div class="mb-2">
                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                    Team Collaboration
                </div>
                <div class="mb-2">
                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                    Problem Solving
                </div>
                <div class="mb-2">
                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                    Communication
                </div>
                <div class="mb-2">
                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                    Time Management
                </div>
                <div class="mb-2">
                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                    Client Interaction
                </div>
            </div>
        </div>
    </div>

    <!-- ACHIEVEMENTS -->
    <div class="card custom-card p-4">
        <h5 class="fw-bold mb-4">Professional Achievements</h5>
        
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="d-flex align-items-start">
                    <i class="bi bi-trophy-fill text-warning me-3 mt-1"></i>
                    <div>
                        <h6 class="mb-1">Best Intern Award</h6>
                        <p class="text-muted mb-0">Recognized as top-performing intern at TechCorp (Q4 2025)</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="d-flex align-items-start">
                    <i class="bi bi-star-fill text-primary me-3 mt-1"></i>
                    <div>
                        <h6 class="mb-1">Project Excellence</h6>
                        <p class="text-muted mb-0">Successfully delivered 5+ client projects at WebSolutions</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="d-flex align-items-start">
                    <i class="bi bi-patch-check-fill text-success me-3 mt-1"></i>
                    <div>
                        <h6 class="mb-1">Certification Achievements</h6>
                        <p class="text-muted mb-0">Earned 3 professional certifications during internships</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="d-flex align-items-start">
                    <i class="bi bi-graph-up text-info me-3 mt-1"></i>
                    <div>
                        <h6 class="mb-1">Performance Improvement</h6>
                        <p class="text-muted mb-0">Optimized application performance by 40% at current role</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>

<?php include 'includes/Footer.php'; ?>
