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
    <title>Privacy & Security - Intervio</title>
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
                        <h4><i class="fas fa-lock me-2"></i>Privacy & Security</h4>
                    </div>
                    <div class="card-body">
                        <!-- Privacy Settings -->
                        <div class="row mb-4">
                            <div class="col-12">
                                <h5 class="mb-3">Privacy Settings</h5>
                                
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="mb-1">Profile Visibility</h6>
                                                <small class="text-muted">Control who can see your profile information</small>
                                            </div>
                                            <select class="form-select w-auto">
                                                <option value="public">Public</option>
                                                <option value="students" selected>Students Only</option>
                                                <option value="companies">Companies Only</option>
                                                <option value="private">Private</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="mb-1">Contact Information</h6>
                                                <small class="text-muted">Show email and phone to recruiters</small>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="contactInfo" checked>
                                                <label class="form-check-label" for="contactInfo"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="mb-1">Academic Information</h6>
                                                <small class="text-muted">Share CGPA and academic details with companies</small>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="academicInfo" checked>
                                                <label class="form-check-label" for="academicInfo"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="mb-1">Project Portfolio</h6>
                                                <small class="text-muted">Make your projects visible to all visitors</small>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="projectPortfolio" checked>
                                                <label class="form-check-label" for="projectPortfolio"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Security Settings -->
                        <div class="row mb-4">
                            <div class="col-12">
                                <h5 class="mb-3">Security Settings</h5>
                                
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="mb-1">Two-Factor Authentication</h6>
                                                <small class="text-muted">Add an extra layer of security to your account</small>
                                            </div>
                                            <button class="btn btn-outline-primary btn-sm">Enable 2FA</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="mb-1">Login Alerts</h6>
                                                <small class="text-muted">Get notified when someone logs into your account</small>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="loginAlerts" checked>
                                                <label class="form-check-label" for="loginAlerts"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="mb-1">Session Management</h6>
                                                <small class="text-muted">Manage active sessions across devices</small>
                                            </div>
                                            <button class="btn btn-outline-secondary btn-sm">View Sessions</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Data & Privacy -->
                        <div class="row mb-4">
                            <div class="col-12">
                                <h5 class="mb-3">Data & Privacy</h5>
                                
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h6 class="mb-3">Download Your Data</h6>
                                        <p class="text-muted mb-3">Get a copy of all your personal data and information stored on Intervio.</p>
                                        <button class="btn btn-outline-primary">
                                            <i class="fas fa-download me-2"></i>Request Data Download
                                        </button>
                                    </div>
                                </div>

                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h6 class="mb-3">Delete Account</h6>
                                        <p class="text-muted mb-3">Permanently delete your account and all associated data. This action cannot be undone.</p>
                                        <button class="btn btn-outline-danger">
                                            <i class="fas fa-trash me-2"></i>Delete Account
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Active Sessions -->
                        <div class="row mb-4">
                            <div class="col-12">
                                <h5 class="mb-3">Active Sessions</h5>
                                
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Device</th>
                                                <th>Location</th>
                                                <th>Last Active</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <i class="fas fa-laptop me-2 text-primary"></i>
                                                        <div>
                                                            <strong>Windows PC</strong>
                                                            <br><small class="text-muted">Chrome Browser</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Bangalore, India</td>
                                                <td>2 hours ago</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-secondary">Current</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <i class="fas fa-mobile-alt me-2 text-success"></i>
                                                        <div>
                                                            <strong>iPhone 13</strong>
                                                            <br><small class="text-muted">Safari Browser</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Bangalore, India</td>
                                                <td>1 day ago</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-danger">Revoke</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Security Tips -->
                        <div class="alert alert-info">
                            <h6><i class="fas fa-shield-alt me-2"></i>Security Tips:</h6>
                            <ul class="mb-0">
                                <li>Use a strong, unique password for your Intervio account</li>
                                <li>Enable two-factor authentication for enhanced security</li>
                                <li>Regularly review your active sessions and revoke unfamiliar ones</li>
                                <li>Be cautious about sharing personal information</li>
                                <li>Keep your contact information up to date for account recovery</li>
                            </ul>
                        </div>

                        <!-- Save Button -->
                        <div class="text-end">
                            <button class="btn btn-primary">
                                <i class="fas fa-save me-2"></i>Save Privacy Settings
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle switches functionality
        document.querySelectorAll('.form-check-input').forEach(toggle => {
            toggle.addEventListener('change', function() {
                console.log('Toggle changed:', this.id, this.checked);
                // Add save functionality here
            });
        });

        // Save settings
        document.querySelector('.btn-primary').addEventListener('click', function() {
            alert('Privacy settings saved successfully!');
        });
    </script>
</body>
</html>
