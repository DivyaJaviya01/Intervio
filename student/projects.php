<?php
// session_start();
// if (!isset($_SESSION['user_logged_in']) || !$_SESSION['user_logged_in']) {
//     header('Location: ../auth/register.php');
//     exit();
// }

// $user_data = $_SESSION['user_data'] ?? [];
// Mock user data for demo purposes
$user_data = [
    'fullName' => 'Demo Student',
    'email' => 'demo@student.com',
    'enrollmentNumber' => 'DEMO2024001',
    'course' => 'Computer Science',
    'semester' => '6'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - Intervio</title>
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

        /* Content Cards */
        .content-card {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 1.5rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .content-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
        }

        /* Project Cards */
        .project-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 1.5rem;
            margin-top: 1.5rem;
        }

        .project-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border: 1px solid #e2e8f0;
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .project-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1rem;
            position: relative;
        }

        .project-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin: 0;
        }

        .project-tech {
            font-size: 0.8rem;
            opacity: 0.9;
            margin-top: 0.25rem;
        }

        .project-body {
            padding: 1.5rem;
        }

        .project-description {
            color: #4a5568;
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .project-links {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
        }

        .project-link {
            padding: 0.5rem 1rem;
            border-radius: 6px;
            text-decoration: none;
            font-size: 0.8rem;
            font-weight: 500;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .project-link.primary {
            background: #667eea;
            color: white;
        }

        .project-link.primary:hover {
            background: #5a67d8;
            color: white;
        }

        .project-link.secondary {
            background: #e2e8f0;
            color: #4a5568;
        }

        .project-link.secondary:hover {
            background: #cbd5e0;
            color: #2d3748;
        }

        .project-link.success {
            background: #dcfce7;
            color: #16a34a;
        }

        .project-link.success:hover {
            background: #bbf7d0;
            color: #15803d;
        }

        .project-actions {
            display: flex;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .action-btn {
            padding: 0.5rem;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: #f3f4f6;
            color: #4a5568;
        }

        .action-btn:hover {
            background: #e5e7eb;
            color: #2d3748;
        }

        .action-btn.edit:hover {
            background: #dbeafe;
            color: #2563eb;
        }

        .action-btn.delete:hover {
            background: #fee2e2;
            color: #dc2626;
        }

        /* Add Project Button */
        .add-project-btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .add-project-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(102,126,234,0.4);
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 3rem;
            color: #64748b;
        }

        .empty-state i {
            font-size: 4rem;
            margin-bottom: 1rem;
            opacity: 0.5;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .project-grid {
                grid-template-columns: 1fr;
            }
            
            .project-links {
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <!-- Include the new sidebar -->
    <?php include 'sidebar.php'; ?>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Page Header -->
        <div class="content-card">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h1 class="mb-2"><i class="fas fa-project-diagram me-2"></i>My Projects</h1>
                    <p class="text-muted mb-0">Showcase your technical skills and innovative work</p>
                </div>
                <button class="add-project-btn" data-bs-toggle="modal" data-bs-target="#addProjectModal">
                    <i class="fas fa-plus"></i>
                    Add New Project
                </button>
            </div>
        </div>

        <!-- Projects Grid -->
        <div class="project-grid">
            <!-- Project 1 -->
            <div class="project-card">
                <div class="project-header">
                    <h3 class="project-title">E-commerce Platform</h3>
                    <div class="project-tech">
                        <i class="fas fa-code me-1"></i>
                        React, Node.js, MongoDB, Stripe API
                    </div>
                </div>
                <div class="project-body">
                    <p class="project-description">
                        Built a full-stack e-commerce platform with user authentication, payment integration, and admin dashboard. Features include product catalog, shopping cart, order management, and real-time notifications.
                    </p>
                    <div class="project-links">
                        <a href="<?php echo htmlspecialchars($user_data['github_link'] ?? '#'); ?>" target="_blank" class="project-link primary">
                            <i class="fab fa-github"></i>
                            GitHub
                        </a>
                        <a href="<?php echo htmlspecialchars($user_data['live_project_url'] ?? '#'); ?>" target="_blank" class="project-link success">
                            <i class="fas fa-external-link-alt"></i>
                            Live Demo
                        </a>
                        <a href="#" class="project-link secondary">
                            <i class="fas fa-file-alt"></i>
                            Documentation
                        </a>
                    </div>
                    <div class="project-actions">
                        <button class="action-btn edit" title="Edit Project">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="action-btn delete" title="Delete Project">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="project-card">
                <div class="project-header">
                    <h3 class="project-title">Machine Learning Research</h3>
                    <div class="project-tech">
                        <i class="fas fa-brain me-1"></i>
                        Python, TensorFlow, Scikit-learn, OpenCV
                    </div>
                </div>
                <div class="project-body">
                    <p class="project-description">
                        Research on image classification using deep learning techniques. Achieved 95% accuracy on custom dataset. Implemented CNN architectures and data augmentation techniques for improved performance.
                    </p>
                    <div class="project-links">
                        <a href="#" target="_blank" class="project-link primary">
                            <i class="fab fa-github"></i>
                            GitHub
                        </a>
                        <a href="#" class="project-link secondary">
                            <i class="fas fa-file-alt"></i>
                            Research Paper
                        </a>
                    </div>
                    <div class="project-actions">
                        <button class="action-btn edit" title="Edit Project">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="action-btn delete" title="Delete Project">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="project-card">
                <div class="project-header">
                    <h3 class="project-title">Task Management App</h3>
                    <div class="project-tech">
                        <i class="fas fa-mobile-alt me-1"></i>
                        React Native, Firebase, Redux
                    </div>
                </div>
                <div class="project-body">
                    <p class="project-description">
                        Cross-platform mobile application for task management with real-time synchronization. Features include drag-and-drop interface, push notifications, and collaborative workspaces.
                    </p>
                    <div class="project-links">
                        <a href="#" target="_blank" class="project-link primary">
                            <i class="fab fa-github"></i>
                            GitHub
                        </a>
                        <a href="#" target="_blank" class="project-link success">
                            <i class="fas fa-download"></i>
                            Download APK
                        </a>
                    </div>
                    <div class="project-actions">
                        <button class="action-btn edit" title="Edit Project">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="action-btn delete" title="Delete Project">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Empty State (hidden by default) -->
        <div class="empty-state" style="display: none;">
            <i class="fas fa-folder-open"></i>
            <h3>No Projects Yet</h3>
            <p>Start building your portfolio by adding your first project.</p>
            <button class="add-project-btn" data-bs-toggle="modal" data-bs-target="#addProjectModal">
                <i class="fas fa-plus"></i>
                Add Your First Project
            </button>
        </div>
    </div>

    <!-- Add Project Modal -->
    <div class="modal fade" id="addProjectModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="fas fa-plus-circle me-2"></i>Add New Project
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="projectForm">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Project Title *</label>
                                <input type="text" name="project_title" class="form-control" placeholder="Enter project title" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Technologies Used *</label>
                                <input type="text" name="technologies" class="form-control" placeholder="e.g., React, Node.js, MongoDB" required>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Project Description *</label>
                                <textarea name="description" class="form-control" rows="4" placeholder="Describe your project, its features, and your role" required></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">GitHub Link</label>
                                <input type="url" name="github_link" class="form-control" placeholder="https://github.com/username/repo">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Live Demo URL</label>
                                <input type="url" name="live_url" class="form-control" placeholder="https://project-demo.com">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Project Type</label>
                                <select name="project_type" class="form-select">
                                    <option value="web">Web Application</option>
                                    <option value="mobile">Mobile App</option>
                                    <option value="desktop">Desktop Application</option>
                                    <option value="ml">Machine Learning</option>
                                    <option value="research">Research Project</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Duration</label>
                                <input type="text" name="duration" class="form-control" placeholder="e.g., 3 months, Jan 2023 - Mar 2023">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="saveProject()">
                        <i class="fas fa-save me-2"></i>Save Project
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Save project function
        function saveProject() {
            const form = document.getElementById('projectForm');
            const formData = new FormData(form);
            
            // Basic validation
            const title = formData.get('project_title');
            const description = formData.get('description');
            const technologies = formData.get('technologies');
            
            if (!title || !description || !technologies) {
                alert('Please fill in all required fields');
                return;
            }
            
            // Simulate saving (in real app, this would be an AJAX call)
            console.log('Saving project:', Object.fromEntries(formData));
            
            // Show success message
            alert('Project saved successfully!');
            
            // Close modal
            bootstrap.Modal.getInstance(document.getElementById('addProjectModal')).hide();
            
            // Reset form
            form.reset();
            
            // In real app, you would refresh the project list
            location.reload();
        }

        // Delete project confirmation
        document.querySelectorAll('.action-btn.delete').forEach(btn => {
            btn.addEventListener('click', function() {
                if (confirm('Are you sure you want to delete this project?')) {
                    // In real app, this would make an API call
                    console.log('Deleting project...');
                    alert('Project deleted successfully!');
                    // Remove the project card
                    this.closest('.project-card').remove();
                }
            });
        });

        // Edit project
        document.querySelectorAll('.action-btn.edit').forEach(btn => {
            btn.addEventListener('click', function() {
                const projectCard = this.closest('.project-card');
                const title = projectCard.querySelector('.project-title').textContent;
                console.log('Editing project:', title);
                alert('Edit functionality would open the project form with existing data');
            });
        });
    </script>
</body>
</html>
