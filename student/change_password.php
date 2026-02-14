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
    <title>Change Password - Intervio</title>
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
                        <h4><i class="fas fa-key me-2"></i>Change Password</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <form id="changePasswordForm">
                                    <div class="mb-4">
                                        <h5>Update Your Password</h5>
                                        <p class="text-muted">Choose a strong password that you haven't used before</p>
                                    </div>

                                    <div class="mb-3">
                                        <label for="currentPassword" class="form-label">Current Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                            <input type="password" class="form-control" id="currentPassword" name="currentPassword" required>
                                            <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('currentPassword')">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="newPassword" class="form-label">New Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                            <input type="password" class="form-control" id="newPassword" name="newPassword" required>
                                            <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('newPassword')">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                        <div class="form-text">Password must be at least 8 characters long</div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="confirmPassword" class="form-label">Confirm New Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                                            <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('confirmPassword')">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Password Strength Indicator -->
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <small class="text-muted">Password Strength</small>
                                            <small id="strengthText" class="text-muted">Enter a password</small>
                                        </div>
                                        <div class="progress" style="height: 5px;">
                                            <div id="strengthBar" class="progress-bar" role="progressbar" style="width: 0%"></div>
                                        </div>
                                    </div>

                                    <!-- Password Requirements -->
                                    <div class="alert alert-info">
                                        <h6><i class="fas fa-info-circle me-2"></i>Password Requirements:</h6>
                                        <ul class="mb-0">
                                            <li>At least 8 characters long</li>
                                            <li>Contains uppercase and lowercase letters</li>
                                            <li>Contains at least one number</li>
                                            <li>Contains at least one special character (!@#$%^&*)</li>
                                            <li>Not similar to your username or email</li>
                                        </ul>
                                    </div>

                                    <div class="d-flex gap-2">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-save me-2"></i>Update Password
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary" onclick="resetForm()">
                                            <i class="fas fa-times me-2"></i>Cancel
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title"><i class="fas fa-shield-alt me-2"></i>Security Tips</h6>
                                        <ul class="small">
                                            <li>Use a unique password for each account</li>
                                            <li>Avoid using personal information</li>
                                            <li>Consider using a password manager</li>
                                            <li>Enable two-factor authentication</li>
                                            <li>Change passwords regularly</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="card mt-3">
                                    <div class="card-body">
                                        <h6 class="card-title"><i class="fas fa-history me-2"></i>Password History</h6>
                                        <p class="small text-muted">Last changed: 30 days ago</p>
                                        <p class="small text-muted">Previous passwords cannot be reused</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Success Modal -->
                <div class="modal fade" id="successModal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-success">
                                    <i class="fas fa-check-circle me-2"></i>Password Updated Successfully
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <p>Your password has been changed successfully. You will be logged out and redirected to the login page.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" onclick="logout()">Continue to Login</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle password visibility
        function togglePassword(fieldId) {
            const field = document.getElementById(fieldId);
            const icon = event.target.closest('button').querySelector('i');
            
            if (field.type === 'password') {
                field.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                field.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }

        // Check password strength
        function checkPasswordStrength(password) {
            let strength = 0;
            const strengthBar = document.getElementById('strengthBar');
            const strengthText = document.getElementById('strengthText');

            if (password.length >= 8) strength++;
            if (password.match(/[a-z]/) && password.match(/[A-Z]/)) strength++;
            if (password.match(/[0-9]/)) strength++;
            if (password.match(/[^a-zA-Z0-9]/)) strength++;

            const strengthLevels = [
                { width: '0%', color: 'bg-danger', text: 'Enter a password' },
                { width: '25%', color: 'bg-danger', text: 'Very Weak' },
                { width: '50%', color: 'bg-warning', text: 'Weak' },
                { width: '75%', color: 'bg-info', text: 'Good' },
                { width: '100%', color: 'bg-success', text: 'Strong' }
            ];

            const level = strengthLevels[strength];
            strengthBar.style.width = level.width;
            strengthBar.className = 'progress-bar ' + level.color;
            strengthText.textContent = level.text;
            strengthText.className = level.color.replace('bg-', 'text-');
        }

        // Real-time password strength check
        document.getElementById('newPassword').addEventListener('input', function() {
            checkPasswordStrength(this.value);
        });

        // Form validation and submission
        document.getElementById('changePasswordForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const currentPassword = document.getElementById('currentPassword').value;
            const newPassword = document.getElementById('newPassword').value;
            const confirmPassword = document.getElementById('confirmPassword').value;

            // Validation
            if (newPassword.length < 8) {
                alert('Password must be at least 8 characters long');
                return;
            }

            if (newPassword !== confirmPassword) {
                alert('New password and confirm password do not match');
                return;
            }

            if (currentPassword === newPassword) {
                alert('New password must be different from current password');
                return;
            }

            // Simulate password change (in real app, this would be an AJAX call)
            console.log('Changing password...');
            
            // Show success modal
            const modal = new bootstrap.Modal(document.getElementById('successModal'));
            modal.show();
        });

        // Reset form
        function resetForm() {
            document.getElementById('changePasswordForm').reset();
            document.getElementById('strengthBar').style.width = '0%';
            document.getElementById('strengthText').textContent = 'Enter a password';
            document.getElementById('strengthText').className = 'text-muted';
        }

        // Logout function
        function logout() {
            window.location.href = '../auth/logout.php';
        }
    </script>
</body>
</html>
