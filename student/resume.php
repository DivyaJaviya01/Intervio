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
    <title>Resume - Intervio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="../assets/css/profile.css" rel="stylesheet">
</head>
<body>
    <?php include '../includes/Header.php'; ?>
    
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">
                <?php include 'sidebar.php'; ?>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-file-alt me-2"></i>Resume Management</h4>
                    </div>
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-md-8">
                                <h5>Current Resume</h5>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-file-pdf fa-3x text-danger me-3"></i>
                                    <div>
                                        <h6 class="mb-1">John_Doe_Resume.pdf</h6>
                                        <small class="text-muted">Uploaded on: 15th Jan 2024 | Size: 245 KB</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-end">
                                <button class="btn btn-primary me-2">
                                    <i class="fas fa-download me-2"></i>Download
                                </button>
                                <button class="btn btn-outline-danger">
                                    <i class="fas fa-trash me-2"></i>Delete
                                </button>
                            </div>
                        </div>

                        <hr>

                        <div class="row mb-4">
                            <div class="col-12">
                                <h5>Upload New Resume</h5>
                                <form>
                                    <div class="mb-3">
                                        <label for="resumeFile" class="form-label">Choose Resume File</label>
                                        <input class="form-control" type="file" id="resumeFile" accept=".pdf,.doc,.docx">
                                        <div class="form-text">Supported formats: PDF, DOC, DOCX (Max size: 5MB)</div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-upload me-2"></i>Upload Resume
                                    </button>
                                </form>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-12">
                                <h5>Resume Templates</h5>
                                <p class="text-muted">Choose from our professional resume templates to create your resume:</p>
                                
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <div class="card template-card">
                                            <img src="https://picsum.photos/seed/template1/300/400.jpg" class="card-img-top" alt="Template 1">
                                            <div class="card-body text-center">
                                                <h6 class="card-title">Professional</h6>
                                                <button class="btn btn-sm btn-outline-primary">Use Template</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card template-card">
                                            <img src="https://picsum.photos/seed/template2/300/400.jpg" class="card-img-top" alt="Template 2">
                                            <div class="card-body text-center">
                                                <h6 class="card-title">Modern</h6>
                                                <button class="btn btn-sm btn-outline-primary">Use Template</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card template-card">
                                            <img src="https://picsum.photos/seed/template3/300/400.jpg" class="card-img-top" alt="Template 3">
                                            <div class="card-body text-center">
                                                <h6 class="card-title">Creative</h6>
                                                <button class="btn btn-sm btn-outline-primary">Use Template</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-12">
                                <h5>Resume Tips</h5>
                                <div class="alert alert-info">
                                    <h6><i class="fas fa-lightbulb me-2"></i>Quick Tips:</h6>
                                    <ul class="mb-0">
                                        <li>Keep your resume concise and relevant to the job</li>
                                        <li>Use action verbs to describe your experience</li>
                                        <li>Highlight your technical skills and achievements</li>
                                        <li>Proofread carefully for any errors</li>
                                        <li>Save as PDF for best compatibility</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
