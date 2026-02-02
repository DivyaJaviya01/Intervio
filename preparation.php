<?php include 'includes/Header.php'; ?>

<!-- Hero Section -->
<section class="hero-section" style="color: #000000; padding: 100px 0;">
    <div class="container text-center">
        <h1 class="display-3 fw-bold mb-4">Interview Preparation Hub</h1>
        <p class="lead mb-5">Master your interview skills with comprehensive resources and practice materials</p>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="input-group">
                    <input type="text" class="form-control form-control-lg" placeholder="Search topics, companies, or skills...">
                    <button class="btn btn-warning btn-lg" type="button">Search Resources</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Preparation Tabs Section -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Interview Preparation Resources</h2>
        
        <!-- Tab Navigation -->
        <ul class="nav nav-tabs justify-content-center mb-4" id="prepTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="technical-tab" data-bs-toggle="tab" data-bs-target="#technical" type="button" role="tab">
                    <i class="fas fa-code me-2"></i>Technical Skills
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="soft-tab" data-bs-toggle="tab" data-bs-target="#soft" type="button" role="tab">
                    <i class="fas fa-comments me-2"></i>Soft Skills
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="hr-tab" data-bs-toggle="tab" data-bs-target="#hr" type="button" role="tab">
                    <i class="fas fa-briefcase me-2"></i>HR Interview
                </button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content" id="prepTabContent">
            <!-- Technical Skills Tab -->
            <div class="tab-pane fade show active" id="technical" role="tabpanel">
                <div class="row">
                    <div class="col-md-8">
                        <div class="accordion" id="technicalAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#programming">
                                        <i class="fas fa-laptop-code me-3"></i>Programming Languages
                                    </button>
                                </h2>
                                <div id="programming" class="accordion-collapse collapse show" data-bs-parent="#technicalAccordion">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>Popular Languages</h6>
                                                <ul class="list-unstyled">
                                                    <li class="mb-2"><i class="fab fa-python text-success me-2"></i>Python</li>
                                                    <li class="mb-2"><i class="fab fa-java text-danger me-2"></i>Java</li>
                                                    <li class="mb-2"><i class="fab fa-js text-warning me-2"></i>JavaScript</li>
                                                    <li class="mb-2"><i class="fab fa-react text-info me-2"></i>React</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <h6>Practice Resources</h6>
                                                <button class="btn btn-sm btn-outline-primary mb-2">Coding Challenges</button>
                                                <button class="btn btn-sm btn-outline-success mb-2">Practice Tests</button>
                                                <button class="btn btn-sm btn-outline-warning">Video Tutorials</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#datastructures">
                                        <i class="fas fa-project-diagram me-3"></i>Data Structures & Algorithms
                                    </button>
                                </h2>
                                <div id="datastructures" class="accordion-collapse collapse" data-bs-parent="#technicalAccordion">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>Core Topics</h6>
                                                <ul class="list-unstyled">
                                                    <li class="mb-2">Arrays & Strings</li>
                                                    <li class="mb-2">Linked Lists</li>
                                                    <li class="mb-2">Trees & Graphs</li>
                                                    <li class="mb-2">Dynamic Programming</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <h6>Difficulty Levels</h6>
                                                <div class="progress mb-2">
                                                    <div class="progress-bar bg-success" style="width: 40%">Easy</div>
                                                </div>
                                                <div class="progress mb-2">
                                                    <div class="progress-bar bg-warning" style="width: 35%">Medium</div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-danger" style="width: 25%">Hard</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stats-sidebar">
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    <h6 class="mb-0">Quick Stats</h6>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Topics Covered</span>
                                        <strong>25+</strong>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Practice Problems</span>
                                        <strong>500+</strong>
                                    </div>
                                    <div class="d-flex justify-content-between mb-3">
                                        <span>Video Lessons</span>
                                        <strong>100+</strong>
                                    </div>
                                    <button class="btn btn-primary w-100">Start Learning</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Soft Skills Tab -->
            <div class="tab-pane fade" id="soft" role="tabpanel">
                <div class="row">
                    <div class="col-md-6">
                        <div class="skill-timeline">
                            <div class="timeline-item mb-4">
                                <div class="timeline-dot bg-primary"></div>
                                <div class="timeline-content">
                                    <h5>Communication Skills</h5>
                                    <p>Master verbal and non-verbal communication, active listening, and presentation skills.</p>
                                    <div class="progress mb-2">
                                        <div class="progress-bar" style="width: 85%">85% Complete</div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item mb-4">
                                <div class="timeline-dot bg-success"></div>
                                <div class="timeline-content">
                                    <h5>Team Collaboration</h5>
                                    <p>Learn teamwork, conflict resolution, and collaborative problem-solving techniques.</p>
                                    <div class="progress mb-2">
                                        <div class="progress-bar bg-success" style="width: 75%">75% Complete</div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item mb-4">
                                <div class="timeline-dot bg-warning"></div>
                                <div class="timeline-content">
                                    <h5>Leadership Qualities</h5>
                                    <p>Develop leadership skills, decision-making abilities, and team management.</p>
                                    <div class="progress mb-2">
                                        <div class="progress-bar bg-warning" style="width: 60%">60% Complete</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="mb-0">Practice Scenarios</h6>
                            </div>
                            <div class="card-body">
                                <div class="scenario-card mb-3 p-3 border rounded">
                                    <h6>Group Discussion</h6>
                                    <p class="small text-muted">Practice leading and participating in group discussions</p>
                                    <button class="btn btn-sm btn-outline-primary">Start Practice</button>
                                </div>
                                <div class="scenario-card mb-3 p-3 border rounded">
                                    <h6>Presentation Skills</h6>
                                    <p class="small text-muted">Improve your public speaking and presentation abilities</p>
                                    <button class="btn btn-sm btn-outline-success">Start Practice</button>
                                </div>
                                <div class="scenario-card p-3 border rounded">
                                    <h6>Role Playing</h6>
                                    <p class="small text-muted">Simulate real workplace scenarios</p>
                                    <button class="btn btn-sm btn-outline-warning">Start Practice</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- HR Interview Tab -->
            <div class="tab-pane fade" id="hr" role="tabpanel">
                <div class="row">
                    <div class="col-md-12">
                        <div class="interview-simulator">
                            <div class="card mb-4">
                                <div class="card-header bg-info text-white">
                                    <h6 class="mb-0">Common HR Questions</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="question-item mb-3 p-3 bg-light rounded">
                                                <h6>"Tell me about yourself"</h6>
                                                <p class="small text-muted mb-2">Perfect your elevator pitch</p>
                                                <button class="btn btn-sm btn-info">View Tips</button>
                                            </div>
                                            <div class="question-item mb-3 p-3 bg-light rounded">
                                                <h6>"Why should we hire you?"</h6>
                                                <p class="small text-muted mb-2">Highlight your strengths</p>
                                                <button class="btn btn-sm btn-info">View Tips</button>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="question-item mb-3 p-3 bg-light rounded">
                                                <h6>"What are your weaknesses?"</h6>
                                                <p class="small text-muted mb-2">Handle tricky questions</p>
                                                <button class="btn btn-sm btn-info">View Tips</button>
                                            </div>
                                            <div class="question-item mb-3 p-3 bg-light rounded">
                                                <h6>"Where do you see yourself in 5 years?"</h6>
                                                <p class="small text-muted mb-2">Show career planning</p>
                                                <button class="btn btn-sm btn-info">View Tips</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-header bg-success text-white">
                                    <h6 class="mb-0">Company Research</h6>
                                </div>
                                <div class="card-body">
                                    <div class="research-checklist">
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="company-history">
                                            <label class="form-check-label" for="company-history">
                                                Company History & Culture
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="job-description">
                                            <label class="form-check-label" for="job-description">
                                                Job Description Analysis
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="recent-news">
                                            <label class="form-check-label" for="recent-news">
                                                Recent News & Updates
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="interview-format">
                                            <label class="form-check-label" for="interview-format">
                                                Interview Process
                                            </label>
                                        </div>
                                        <button class="btn btn-success w-100">Generate Preparation Plan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Practice Tests Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Practice Tests & Mock Interviews</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="test-icon bg-info text-white rounded-circle p-3 me-3">
                                <i class="fas fa-laptop-code fa-2x"></i>
                            </div>
                            <div>
                                <h4 class="mb-1">Coding Challenges</h4>
                                <p class="text-muted mb-0">Practice programming problems</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <small class="text-muted">Difficulty</small>
                                <p class="fw-bold mb-0">Easy to Hard</p>
                            </div>
                            <div class="col-6">
                                <small class="text-muted">Questions</small>
                                <p class="fw-bold mb-0">500+ Problems</p>
                            </div>
                        </div>
                        <div class="mb-3">
                            <span class="badge bg-primary me-2">JavaScript</span>
                            <span class="badge bg-success me-2">Python</span>
                            <span class="badge bg-warning me-2">Java</span>
                            <span class="badge bg-info">C++</span>
                        </div>
                        <button class="btn btn-info w-100">Start Coding</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="test-icon bg-danger text-white rounded-circle p-3 me-3">
                                <i class="fas fa-video fa-2x"></i>
                            </div>
                            <div>
                                <h4 class="mb-1">Mock Interviews</h4>
                                <p class="text-muted mb-0">Practice with AI interviewers</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <small class="text-muted">Duration</small>
                                <p class="fw-bold mb-0">30-60 mins</p>
                            </div>
                            <div class="col-6">
                                <small class="text-muted">Feedback</small>
                                <p class="fw-bold mb-0">Instant Results</p>
                            </div>
                        </div>
                        <div class="mb-3">
                            <span class="badge bg-primary me-2">Technical</span>
                            <span class="badge bg-success me-2">Behavioral</span>
                            <span class="badge bg-warning me-2">HR Round</span>
                        </div>
                        <button class="btn btn-danger w-100">Start Interview</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="test-icon bg-secondary text-white rounded-circle p-3 me-3">
                                <i class="fas fa-brain fa-2x"></i>
                            </div>
                            <div>
                                <h4 class="mb-1">Aptitude Tests</h4>
                                <p class="text-muted mb-0">Logical reasoning and quantitative aptitude</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <small class="text-muted">Topics</small>
                                <p class="fw-bold mb-0">20+ Categories</p>
                            </div>
                            <div class="col-6">
                                <small class="text-muted">Questions</small>
                                <p class="fw-bold mb-0">1000+ Questions</p>
                            </div>
                        </div>
                        <div class="mb-3">
                            <span class="badge bg-primary me-2">Logical</span>
                            <span class="badge bg-success me-2">Quantitative</span>
                            <span class="badge bg-warning me-2">Verbal</span>
                        </div>
                        <button class="btn btn-secondary w-100">Start Test</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="test-icon bg-dark text-white rounded-circle p-3 me-3">
                                <i class="fas fa-file-alt fa-2x"></i>
                            </div>
                            <div>
                                <h4 class="mb-1">Resume Builder</h4>
                                <p class="text-muted mb-0">Create professional resumes</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <small class="text-muted">Templates</small>
                                <p class="fw-bold mb-0">15+ Templates</p>
                            </div>
                            <div class="col-6">
                                <small class="text-muted">Formats</small>
                                <p class="fw-bold mb-0">PDF & Word</p>
                            </div>
                        </div>
                        <div class="mb-3">
                            <span class="badge bg-primary me-2">Modern</span>
                            <span class="badge bg-success me-2">Classic</span>
                            <span class="badge bg-warning me-2">Creative</span>
                        </div>
                        <button class="btn btn-dark w-100">Build Resume</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Study Materials -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Study Materials & Resources</h2>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-3">
                        <i class="fas fa-book fa-3x text-primary mb-3"></i>
                        <h5 class="mb-2">E-Books</h5>
                        <p class="text-muted small mb-3">Comprehensive study guides</p>
                        <span class="badge bg-primary">50+ Books</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-3">
                        <i class="fas fa-video fa-3x text-danger mb-3"></i>
                        <h5 class="mb-2">Video Tutorials</h5>
                        <p class="text-muted small mb-3">Learn from experts</p>
                        <span class="badge bg-danger">200+ Videos</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-3">
                        <i class="fas fa-file-pdf fa-3x text-danger mb-3"></i>
                        <h5 class="mb-2">PDF Notes</h5>
                        <p class="text-muted small mb-3">Quick reference materials</p>
                        <span class="badge bg-warning">100+ PDFs</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-3">
                        <i class="fas fa-users fa-3x text-success mb-3"></i>
                        <h5 class="mb-2">Study Groups</h5>
                        <p class="text-muted small mb-3">Collaborate with peers</p>
                        <span class="badge bg-success">25+ Groups</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Success Stories -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Success Stories</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://picsum.photos/seed/student1/60/60" class="rounded-circle me-3" alt="Student">
                            <div>
                                <h5 class="mb-0">Rahul Sharma</h5>
                                <p class="text-muted mb-0">Placed at Google</p>
                            </div>
                        </div>
                        <p class="mb-3">"The preparation materials and mock interviews helped me crack the Google interview. The coding challenges were especially helpful!"</p>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://picsum.photos/seed/student2/60/60" class="rounded-circle me-3" alt="Student">
                            <div>
                                <h5 class="mb-0">Priya Patel</h5>
                                <p class="text-muted mb-0">Placed at Microsoft</p>
                            </div>
                        </div>
                        <p class="mb-3">"The HR interview preparation section was amazing. I felt confident and well-prepared for every round."</p>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://picsum.photos/seed/student3/60/60" class="rounded-circle me-3" alt="Student">
                            <div>
                                <h5 class="mb-0">Amit Kumar</h5>
                                <p class="text-muted mb-0">Placed at Amazon</p>
                            </div>
                        </div>
                        <p class="mb-3">"The aptitude tests and technical sections covered everything I needed. The resume builder helped me create a professional CV."</p>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-5" style="background-color: #1e40af; color: white;">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 mb-4">
                <h3 class="fw-bold mb-2" style="font-size: 2.5rem;">10,000+</h3>
                <p class="mb-0">Students Prepared</p>
            </div>
            <div class="col-md-3 mb-4">
                <h3 class="fw-bold mb-2" style="font-size: 2.5rem;">500+</h3>
                <p class="mb-0">Study Materials</p>
            </div>
            <div class="col-md-3 mb-4">
                <h3 class="fw-bold mb-2" style="font-size: 2.5rem;">98%</h3>
                <p class="mb-0">Success Rate</p>
            </div>
            <div class="col-md-3 mb-4">
                <h3 class="fw-bold mb-2" style="font-size: 2.5rem;">4.8/5</h3>
                <p class="mb-0">User Rating</p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/Footer.php'; ?>
