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
    <title>Account Settings - Intervio</title>
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
                <!-- Account Information -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h4><i class="fas fa-user-cog me-2"></i>Account Information</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="update_account.php">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control" name="username" 
                                           value="<?php echo htmlspecialchars($user_data['username'] ?? ''); ?>" readonly>
                                    <small class="form-text text-muted">Username cannot be changed</small>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Email Address</label>
                                    <input type="email" class="form-control" name="email" 
                                           value="<?php echo htmlspecialchars($user_data['email'] ?? ''); ?>" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" class="form-control" name="full_name" 
                                           value="<?php echo htmlspecialchars($user_data['full_name'] ?? ''); ?>" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Mobile Number</label>
                                    <input type="tel" class="form-control" name="mobile" 
                                           value="<?php echo htmlspecialchars($user_data['mobile'] ?? ''); ?>" required>
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-2"></i>Update Account
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Change Password -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h4><i class="fas fa-key me-2"></i>Change Password</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="change_password.php">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Current Password</label>
                                    <input type="password" class="form-control" name="current_password" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">New Password</label>
                                    <input type="password" class="form-control" name="new_password" required>
                                    <div class="progress" style="height: 5px;">
                                        <div class="progress-bar" id="passwordStrength" role="progressbar"></div>
                                    </div>
                                    <small class="form-text text-muted">Password must be at least 8 characters with uppercase, lowercase, number, and special character</small>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Confirm New Password</label>
                                    <input type="password" class="form-control" name="confirm_password" required>
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-lock me-2"></i>Change Password
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Privacy Settings -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h4><i class="fas fa-shield-alt me-2"></i>Privacy & Security</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="update_privacy.php">
                            <div class="mb-3">
                                <h5>Profile Visibility</h5>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="publicProfile" checked>
                                    <label class="form-check-label" for="publicProfile">
                                        Make my profile public to recruiters
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="showContact" checked>
                                    <label class="form-check-label" for="showContact">
                                        Show contact information to verified companies
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="allowSearch" checked>
                                    <label class="form-check-label" for="allowSearch">
                                        Allow my profile to appear in search results
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <h5>Data Sharing</h5>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="shareAnalytics" checked>
                                    <label class="form-check-label" for="shareAnalytics">
                                        Share anonymous usage data to improve services
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="shareStats">
                                    <label class="form-check-label" for="shareStats">
                                        Share placement statistics (anonymized)
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <h5>Two-Factor Authentication</h5>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="enable2FA">
                                    <label class="form-check-label" for="enable2FA">
                                        Enable two-factor authentication
                                    </label>
                                </div>
                                <div id="2FASetup" style="display: none;">
                                    <div class="alert alert-info">
                                        <i class="fas fa-info-circle me-2"></i>
                                        Scan this QR code with your authenticator app
                                    </div>
                                    <div class="text-center mb-3">
                                        <div class="d-inline-block p-3 border" style="background: white;">
                                            <!-- QR Code Placeholder -->
                                            <div style="width: 150px; height: 150px; background: #f0f0f0; display: flex; align-items: center; justify-content: center;">
                                                <i class="fas fa-qrcode fa-3x text-muted"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Enter verification code</label>
                                        <input type="text" class="form-control" placeholder="6-digit code">
                                    </div>
                                </div>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-2"></i>Save Privacy Settings
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Account Actions -->
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-exclamation-triangle me-2"></i>Account Actions</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="d-grid">
                                    <button class="btn btn-outline-primary" onclick="downloadData()">
                                        <i class="fas fa-download me-2"></i>Download My Data
                                    </button>
                                </div>
                                <small class="form-text text-muted">Download all your personal data in JSON format</small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-grid">
                                    <button class="btn btn-outline-warning" onclick="deactivateAccount()">
                                        <i class="fas fa-pause me-2"></i>Deactivate Account
                                    </button>
                                </div>
                                <small class="form-text text-muted">Temporarily disable your account</small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-grid">
                                    <button class="btn btn-outline-danger" onclick="deleteAccount()">
                                        <i class="fas fa-trash me-2"></i>Delete Account
                                    </button>
                                </div>
                                <small class="form-text text-danger">Permanently delete your account and all data</small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-grid">
                                    <button class="btn btn-outline-secondary" onclick="clearCache()">
                                        <i class="fas fa-broom me-2"></i>Clear Cache
                                    </button>
                                </div>
                                <small class="form-text text-muted">Clear browser cache and temporary files</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Password strength checker
        document.querySelector('[name="new_password"]').addEventListener('input', function() {
            const password = this.value;
            const strengthBar = document.getElementById('passwordStrength');
            let strength = 0;
            
            if (password.length >= 8) strength += 25;
            if (/[a-z]/.test(password)) strength += 25;
            if (/[A-Z]/.test(password)) strength += 25;
            if (/[0-9]/.test(password)) strength += 12.5;
            if (/[^a-zA-Z0-9]/.test(password)) strength += 12.5;
            
            strengthBar.style.width = strength + '%';
            strengthBar.className = 'progress-bar bg-' + 
                (strength < 50 ? 'danger' : strength < 75 ? 'warning' : 'success');
        });

        // 2FA Toggle
        document.getElementById('enable2FA').addEventListener('change', function() {
            document.getElementById('2FASetup').style.display = this.checked ? 'block' : 'none';
        });

        function downloadData() {
            // Simulate data download
            const userData = {
                name: '<?php echo htmlspecialchars($user_data['full_name'] ?? ''); ?>',
                email: '<?php echo htmlspecialchars($user_data['email'] ?? ''); ?>',
                // Add more fields as needed
            };
            
            const dataStr = JSON.stringify(userData, null, 2);
            const dataUri = 'data:application/json;charset=utf-8,'+ encodeURIComponent(dataStr);
            
            const exportFileDefaultName = 'intervio_data.json';
            
            const linkElement = document.createElement('a');
            linkElement.setAttribute('href', dataUri);
            linkElement.setAttribute('download', exportFileDefaultName);
            linkElement.click();
        }

        function deactivateAccount() {
            if (confirm('Are you sure you want to deactivate your account? You can reactivate it later.')) {
                alert('Account deactivation feature coming soon!');
            }
        }

        function deleteAccount() {
            if (confirm('Are you sure you want to delete your account? This action cannot be undone.')) {
                if (confirm('This will permanently delete all your data. Are you absolutely sure?')) {
                    alert('Account deletion feature coming soon!');
                }
            }
        }

        function clearCache() {
            if (confirm('Clear all cached data?')) {
                localStorage.clear();
                sessionStorage.clear();
                alert('Cache cleared successfully!');
            }
        }
    </script>
</body>
</html>
