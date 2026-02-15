<?php include 'includes/Header.php'; ?>

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<style>
body {
    background: #f4f6f9;
    font-family: 'Segoe UI', sans-serif;
}

/* Main content styling */
.main-content {
    margin-left: 15%;
    width: calc(100% - 15%);
    box-sizing: border-box;
}

/* Hero Section */
.hero {
    background: linear-gradient(135deg,#4f46e5,#3b82f6);
    color: white;
    border-radius: 20px;
    padding: 30px;
}

/* Card Style */
.custom-card {
    border-radius: 15px;
    box-shadow: 0 6px 15px rgba(0,0,0,0.05);
}

/* Resume Preview */
.resume-preview {
    background: white;
    border: 1px solid #e5e7eb;
    border-radius: 12px;
    padding: 40px;
    min-height: 600px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

/* Resume Section */
.resume-section{
    margin-bottom:30px;
}

.resume-section h5{
    color:#1f2937;
    border-bottom:2px solid #4f46e5;
    padding-bottom:5px;
    margin-bottom:15px;
}

/* Template Card */
.template-card{
    border:1px solid #e5e7eb;
    border-radius:12px;
    padding:20px;
    text-align:center;
    cursor:pointer;
    transition:all 0.3s ease;
}

.template-card:hover{
    transform:translateY(-5px);
    box-shadow:0 10px 25px rgba(0,0,0,0.1);
    border-color:#4f46e5;
}

.template-card.active{
    border-color:#4f46e5;
    background:#f0f4ff;
}

/* Template Preview */
.template-preview{
    width:100%;
    height:200px;
    border:1px solid #e5e7eb;
    border-radius:8px;
    margin-bottom:15px;
    background:#f9fafb;
    display:flex;
    align-items:center;
    justify-content:center;
}

/* Action Buttons */
.action-btn{
    padding:10px 20px;
    border-radius:8px;
    font-weight:500;
    transition:all 0.3s ease;
}

.action-btn:hover{
    transform:translateY(-2px);
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
                <h2 class="fw-bold mb-3">Resume Builder</h2>
                <p class="mb-2">Create and manage your professional resume</p>
            </div>
            <div class="col-md-4 text-end">
                <button class="btn btn-light btn-lg me-2">New Resume</button>
                <button class="btn btn-outline-light btn-lg">Templates</button>
            </div>
        </div>
    </div>

    <!-- RESUME ACTIONS -->
    <div class="card custom-card p-4 mb-4">
        <h5 class="fw-bold mb-4">Quick Actions</h5>
        
        <div class="row">
            <div class="col-md-3 mb-3">
                <button class="action-btn btn-primary w-100">
                    <i class="bi bi-plus-circle me-2"></i>Create New Resume
                </button>
            </div>
            <div class="col-md-3 mb-3">
                <button class="action-btn btn-success w-100">
                    <i class="bi bi-download me-2"></i>Download PDF
                </button>
            </div>
            <div class="col-md-3 mb-3">
                <button class="action-btn btn-info w-100">
                    <i class="bi bi-eye me-2"></i>Preview
                </button>
            </div>
            <div class="col-md-3 mb-3">
                <button class="action-btn btn-warning w-100">
                    <i class="bi bi-share me-2"></i>Share Resume
                </button>
            </div>
        </div>
    </div>

    <!-- RESUME TEMPLATES -->
    <div class="card custom-card p-4 mb-4">
        <h5 class="fw-bold mb-4">Choose Template</h5>
        
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="template-card active">
                    <div class="template-preview">
                        <div class="text-center">
                            <i class="bi bi-file-earmark-text" style="font-size:48px; color:#4f46e5;"></i>
                            <p class="mt-2 mb-0">Modern Professional</p>
                        </div>
                    </div>
                    <h6 class="fw-bold">Modern Professional</h6>
                    <p class="text-muted small">Clean and contemporary design</p>
                    <button class="btn btn-sm btn-primary">Use Template</button>
                </div>
            </div>
            
            <div class="col-md-3 mb-4">
                <div class="template-card">
                    <div class="template-preview">
                        <div class="text-center">
                            <i class="bi bi-file-earmark-text" style="font-size:48px; color:#10b981;"></i>
                            <p class="mt-2 mb-0">Classic Executive</p>
                        </div>
                    </div>
                    <h6 class="fw-bold">Classic Executive</h6>
                    <p class="text-muted small">Traditional corporate style</p>
                    <button class="btn btn-sm btn-outline-primary">Use Template</button>
                </div>
            </div>
            
            <div class="col-md-3 mb-4">
                <div class="template-card">
                    <div class="template-preview">
                        <div class="text-center">
                            <i class="bi bi-file-earmark-text" style="font-size:48px; color:#f59e0b;"></i>
                            <p class="mt-2 mb-0">Creative Designer</p>
                        </div>
                    </div>
                    <h6 class="fw-bold">Creative Designer</h6>
                    <p class="text-muted small">Artistic and visually appealing</p>
                    <button class="btn btn-sm btn-outline-primary">Use Template</button>
                </div>
            </div>
            
            <div class="col-md-3 mb-4">
                <div class="template-card">
                    <div class="template-preview">
                        <div class="text-center">
                            <i class="bi bi-file-earmark-text" style="font-size:48px; color:#ef4444;"></i>
                            <p class="mt-2 mb-0">Minimalist</p>
                        </div>
                    </div>
                    <h6 class="fw-bold">Minimalist</h6>
                    <p class="text-muted small">Simple and elegant layout</p>
                    <button class="btn btn-sm btn-outline-primary">Use Template</button>
                </div>
            </div>
        </div>
    </div>

    <!-- RESUME EDITOR -->
    <div class="card custom-card p-4 mb-4">
        <h5 class="fw-bold mb-4">Resume Editor</h5>
        
        <div class="row">
            <div class="col-md-8">
                <div class="resume-preview">
                    <!-- Resume Content -->
                    <div class="resume-header text-center mb-4">
                        <h2 class="fw-bold">Krisha Akbari</h2>
                        <p class="text-muted">Full Stack Developer | Final Year Student</p>
                        <p class="text-muted">
                            <i class="bi bi-envelope me-2"></i>krisha@gmail.com
                            <i class="bi bi-phone me-2 ms-3"></i>+91 9876543210
                            <i class="bi bi-linkedin me-2 ms-3"></i>linkedin.com/in/krisha
                        </p>
                    </div>
                    
                    <div class="resume-section">
                        <h5>Objective</h5>
                        <p>Motivated computer science student seeking opportunities in full-stack development where I can contribute to scalable web applications and enhance system performance.</p>
                    </div>
                    
                    <div class="resume-section">
                        <h5>Education</h5>
                        <div class="mb-3">
                            <h6 class="fw-bold">B.Tech Computer Science</h6>
                            <p class="mb-1">Silver Oak University | 2022-2026</p>
                            <p class="mb-0">CGPA: 8.6</p>
                        </div>
                    </div>
                    
                    <div class="resume-section">
                        <h5>Skills</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Technical:</strong> JavaScript, PHP, Python, React.js, Node.js, MySQL, MongoDB</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Soft Skills:</strong> Problem Solving, Team Collaboration, Communication</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="resume-section">
                        <h5>Projects</h5>
                        <div class="mb-3">
                            <h6 class="fw-bold">Placement Portal System</h6>
                            <p class="mb-1">Full-stack web application for managing placement drives</p>
                            <p class="mb-0"><strong>Technologies:</strong> PHP, MySQL, Bootstrap, JavaScript</p>
                        </div>
                        <div class="mb-3">
                            <h6 class="fw-bold">E-Commerce Platform</h6>
                            <p class="mb-1">Complete shopping website with payment integration</p>
                            <p class="mb-0"><strong>Technologies:</strong> HTML, CSS, JavaScript, PHP</p>
                        </div>
                    </div>
                    
                    <div class="resume-section">
                        <h5>Experience</h5>
                        <div class="mb-3">
                            <h6 class="fw-bold">Full Stack Developer Intern</h6>
                            <p class="mb-1">TechCorp | Nov 2025 - Present</p>
                            <p class="mb-0">Developing and maintaining web applications using modern technologies.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card bg-light">
                    <div class="card-body">
                        <h6 class="fw-bold mb-3">Formatting Options</h6>
                        
                        <div class="mb-3">
                            <label class="form-label">Font Size</label>
                            <select class="form-select">
                                <option>10pt</option>
                                <option selected>11pt</option>
                                <option>12pt</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Font Family</label>
                            <select class="form-select">
                                <option>Arial</option>
                                <option selected>Times New Roman</option>
                                <option>Calibri</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Margin</label>
                            <select class="form-select">
                                <option>Normal</option>
                                <option selected>Narrow</option>
                                <option>Wide</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Line Spacing</label>
                            <select class="form-select">
                                <option>Single</option>
                                <option selected>1.5</option>
                                <option>Double</option>
                            </select>
                        </div>
                        
                        <hr>
                        
                        <h6 class="fw-bold mb-3">Sections</h6>
                        
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" checked id="contact">
                            <label class="form-check-label" for="contact">
                                Contact Information
                            </label>
                        </div>
                        
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" checked id="objective">
                            <label class="form-check-label" for="objective">
                                Objective
                            </label>
                        </div>
                        
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" checked id="education">
                            <label class="form-check-label" for="education">
                                Education
                            </label>
                        </div>
                        
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" checked id="skills">
                            <label class="form-check-label" for="skills">
                                Skills
                            </label>
                        </div>
                        
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" checked id="projects">
                            <label class="form-check-label" for="projects">
                                Projects
                            </label>
                        </div>
                        
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" checked id="experience">
                            <label class="form-check-label" for="experience">
                                Experience
                            </label>
                        </div>
                        
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="certifications">
                            <label class="form-check-label" for="certifications">
                                Certifications
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- RESUME STATISTICS -->
    <div class="card custom-card p-4 mb-4">
        <h5 class="fw-bold mb-4">Resume Analytics</h5>
        
        <div class="row text-center">
            <div class="col-md-3">
                <h3 class="fw-bold text-primary">3</h3>
                <p class="text-muted">Resumes Created</p>
            </div>
            <div class="col-md-3">
                <h3 class="fw-bold text-success">127</h3>
                <p class="text-muted">Downloads</p>
            </div>
            <div class="col-md-3">
                <h3 class="fw-bold text-warning">45</h3>
                <p class="text-muted">Views</p>
            </div>
            <div class="col-md-3">
                <h3 class="fw-bold text-info">8</h3>
                <p class="text-muted">Shares</p>
            </div>
        </div>
    </div>

    <!-- RECENT RESUMES -->
    <div class="card custom-card p-4">
        <h5 class="fw-bold mb-4">Recent Resumes</h5>
        
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Resume Name</th>
                        <th>Template</th>
                        <th>Last Modified</th>
                        <th>Downloads</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Main Resume</strong></td>
                        <td>Modern Professional</td>
                        <td>Feb 14, 2026</td>
                        <td>45</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-outline-primary me-1">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-primary me-1">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-download"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Technical Resume</strong></td>
                        <td>Classic Executive</td>
                        <td>Feb 10, 2026</td>
                        <td>23</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-outline-primary me-1">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-primary me-1">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-download"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Creative Resume</strong></td>
                        <td>Creative Designer</td>
                        <td>Feb 5, 2026</td>
                        <td>12</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-outline-primary me-1">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-primary me-1">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-download"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
</div>
</div>

<?php include 'includes/Footer.php'; ?>
