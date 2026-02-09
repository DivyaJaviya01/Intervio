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
    <title>Student Profile - Intervio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: #f8fafc;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        /* Main Content Area */
        .main-content {
            min-height: 100vh;
            transition: margin-left 0.3s ease;
            padding: 2rem;
        }

        /* Desktop Layout */
        @media (min-width: 769px) {
            .main-content {
                margin-left: 280px;
            }
        }

        /* Mobile Layout */
        @media (max-width: 768px) {
            .main-content {
                margin-left: 0;
                padding: 1rem;
                padding-top: 1rem;
            }
        }

        /* Profile Header */
        .profile-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 2rem 0;
            margin-bottom: 2rem;
            border-radius: 12px;
        }
        
        .profile-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        .stat-card {
            background: white;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.3s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
        }
        
        .stat-number {
            font-size: 2rem;
            font-weight: bold;
            color: #667eea;
        }
        
        .info-section {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
        }
        
        .section-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid #667eea;
        }
        
        .skill-badge {
            background: #f0f4ff;
            color: #667eea;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            margin: 0.25rem;
            display: inline-block;
        }
        
        .project-card {
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 1rem;
            transition: box-shadow 0.3s ease;
        }
        
        .project-card:hover {
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .btn-action {
            padding: 0.5rem 1rem;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-action:hover {
            transform: translateY(-2px);
            text-decoration: none;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .profile-header {
                padding: 1.5rem;
                margin-bottom: 1rem;
            }
            
            .stat-number {
                font-size: 1.5rem;
            }
            
            .info-section {
                padding: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Include the new sidebar -->
    <?php include 'sidebar.php'; ?>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Profile Header -->
        <div class="profile-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-2 text-center">
                        <img src="https://picsum.photos/seed/<?php echo urlencode($user_data['full_name'] ?? 'johndoe'); ?>/120/120.jpg" alt="Profile" class="profile-avatar">
                    </div>
                    <div class="col-md-6">
                        <h2><?php echo htmlspecialchars($user_data['full_name'] ?? 'John Doe'); ?></h2>
                        <p class="mb-1"><i class="fas fa-envelope me-2"></i><?php echo htmlspecialchars($user_data['email'] ?? 'john.doe@example.com'); ?></p>
                        <p class="mb-1"><i class="fas fa-phone me-2"></i><?php echo htmlspecialchars($user_data['mobile'] ?? '9876543210'); ?></p>
                        <p class="mb-0"><i class="fas fa-graduation-cap me-2"></i><?php echo htmlspecialchars($user_data['course'] ?? 'Computer Science Engineering'); ?></p>
                    </div>
                    <div class="col-md-4 text-end">
                        <a href="edit_profile.php" class="btn-action btn-light me-2">
                            <i class="fas fa-edit me-2"></i>Edit Profile
                        </a>
                        <a href="resume.php" class="btn-action btn-outline-light">
                            <i class="fas fa-download me-2"></i>Download Resume
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <!-- Stats Cards -->
            <div class="row mb-4">
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-number"><?php echo htmlspecialchars($user_data['cgpa'] ?? '8.5'); ?></div>
                        <div class="text-muted">CGPA</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-number"><?php echo htmlspecialchars($user_data['semester'] ?? '6'); ?></div>
                        <div class="text-muted">Semester</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-number">5</div>
                        <div class="text-muted">Projects</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-number">2</div>
                        <div class="text-muted">Internships</div>
                    </div>
                </div>
            </div>

            <!-- Personal Information -->
            <div class="info-section">
                <h5 class="section-title"><i class="fas fa-user me-2"></i>Personal Information</h5>
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Full Name:</strong> <?php echo htmlspecialchars($user_data['full_name'] ?? 'John Doe'); ?></p>
                        <p><strong>Date of Birth:</strong> <?php echo htmlspecialchars($user_data['dob'] ?? '2000-01-15'); ?></p>
                        <p><strong>Gender:</strong> <?php echo htmlspecialchars($user_data['gender'] ?? 'Male'); ?></p>
                        <p><strong>Nationality:</strong> <?php echo htmlspecialchars($user_data['nationality'] ?? 'Indian'); ?></p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Email:</strong> <?php echo htmlspecialchars($user_data['email'] ?? 'john.doe@example.com'); ?></p>
                        <p><strong>Mobile:</strong> <?php echo htmlspecialchars($user_data['mobile'] ?? '9876543210'); ?></p>
                        <p><strong>City:</strong> <?php echo htmlspecialchars($user_data['city'] ?? 'Bangalore'); ?></p>
                        <p><strong>State:</strong> <?php echo htmlspecialchars($user_data['state'] ?? 'Karnataka'); ?></p>
                    </div>
                </div>
            </div>

            <!-- Academic Information -->
            <div class="info-section">
                <h5 class="section-title"><i class="fas fa-graduation-cap me-2"></i>Academic Information</h5>
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Enrollment Number:</strong> <?php echo htmlspecialchars($user_data['enrollment_no'] ?? 'EN2024001'); ?></p>
                        <p><strong>College/University:</strong> <?php echo htmlspecialchars($user_data['college'] ?? 'ABC Engineering College'); ?></p>
                        <p><strong>Course/Branch:</strong> <?php echo htmlspecialchars($user_data['course'] ?? 'Computer Science Engineering'); ?></p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Admission Year:</strong> <?php echo htmlspecialchars($user_data['admission_year'] ?? '2020'); ?></p>
                        <p><strong>Current Semester:</strong> <?php echo htmlspecialchars($user_data['semester'] ?? '6'); ?></p>
                        <p><strong>CGPA:</strong> <?php echo htmlspecialchars($user_data['cgpa'] ?? '8.5'); ?></p>
                    </div>
                </div>
            </div>

            <!-- Skills -->
            <div class="info-section">
                <h5 class="section-title"><i class="fas fa-code me-2"></i>Skills</h5>
                <div class="mb-3">
                    <h6>Programming Languages</h6>
                    <div>
                        <span class="skill-badge">Python</span>
                        <span class="skill-badge">Java</span>
                        <span class="skill-badge">JavaScript</span>
                        <span class="skill-badge">C++</span>
                    </div>
                </div>
                <div class="mb-3">
                    <h6>Tools & Technologies</h6>
                    <div>
                        <span class="skill-badge">Git</span>
                        <span class="skill-badge">Docker</span>
                        <span class="skill-badge">AWS</span>
                        <span class="skill-badge">React</span>
                        <span class="skill-badge">Node.js</span>
                    </div>
                </div>
                <div>
                    <h6>Soft Skills</h6>
                    <div>
                        <span class="skill-badge">Communication</span>
                        <span class="skill-badge">Leadership</span>
                        <span class="skill-badge">Teamwork</span>
                        <span class="skill-badge">Problem Solving</span>
                    </div>
                </div>
            </div>

            <!-- Projects -->
            <div class="info-section">
                <h5 class="section-title"><i class="fas fa-project-diagram me-2"></i>Projects</h5>
                
                <div class="project-card">
                    <div class="row">
                        <div class="col-md-8">
                            <h6><?php echo htmlspecialchars($user_data['project_title'] ?? 'E-commerce Platform'); ?></h6>
                            <p class="text-muted mb-2">
                                <i class="fas fa-code me-2"></i>
                                <?php echo htmlspecialchars($user_data['project_technologies'] ?? 'React, Node.js, MongoDB'); ?>
                            </p>
                            <p><?php echo htmlspecialchars($user_data['project_description'] ?? 'Built a full-stack e-commerce platform with user authentication, payment integration, and admin dashboard.'); ?></p>
                        </div>
                        <div class="col-md-4 text-end">
                            <a href="<?php echo htmlspecialchars($user_data['github_link'] ?? '#'); ?>" target="_blank" class="btn-action btn-outline-primary btn-sm me-2">
                                <i class="fab fa-github me-1"></i>GitHub
                            </a>
                            <a href="<?php echo htmlspecialchars($user_data['live_project_url'] ?? '#'); ?>" target="_blank" class="btn-action btn-outline-success btn-sm">
                                <i class="fas fa-external-link-alt me-1"></i>Live Demo
                            </a>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <div class="row">
                        <div class="col-md-8">
                            <h6>Machine Learning Research</h6>
                            <p class="text-muted mb-2">
                                <i class="fas fa-code me-2"></i>
                                Python, TensorFlow, Scikit-learn
                            </p>
                            <p>Research on image classification using deep learning techniques with 95% accuracy.</p>
                        </div>
                        <div class="col-md-4 text-end">
                            <a href="#" class="btn-action btn-outline-primary btn-sm me-2">
                                <i class="fab fa-github me-1"></i>GitHub
                            </a>
                            <a href="#" class="btn-action btn-outline-info btn-sm">
                                <i class="fas fa-file-alt me-1"></i>Paper
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Experience -->
            <div class="info-section">
                <h5 class="section-title"><i class="fas fa-briefcase me-2"></i>Experience & Internships</h5>
                
                <div class="project-card">
                    <h6>Software Developer Intern</h6>
                    <p class="text-muted mb-2">Tech Solutions Inc. | June 2023 - August 2023</p>
                    <ul>
                        <li>Developed and maintained web applications using React and Node.js</li>
                        <li>Participated in code reviews and agile development processes</li>
                        <li>Collaborated with cross-functional teams to deliver high-quality software</li>
                    </ul>
                </div>
            </div>

            <!-- Portfolio Links -->
            <div class="info-section">
                <h5 class="section-title"><i class="fas fa-link me-2"></i>Portfolio & Links</h5>
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>GitHub:</strong> <a href="https://github.com/johndoe" target="_blank">github.com/johndoe</a></p>
                        <p><strong>LinkedIn:</strong> <a href="https://linkedin.com/in/johndoe" target="_blank">linkedin.com/in/johndoe</a></p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Portfolio:</strong> <a href="https://johndoe.dev" target="_blank">johndoe.dev</a></p>
                        <p><strong>LeetCode:</strong> <a href="https://leetcode.com/johndoe" target="_blank">leetcode.com/johndoe</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
