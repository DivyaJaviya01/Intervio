<?php
$pageTitle = 'Settings';
include 'includes/auth_check.php';
include 'includes/header.php';
include 'includes/sidebar.php';
?>

<!-- Top Header -->
<div class="top-header">
    <div>
        <h1 class="h3 mb-0">Settings</h1>
        <p class="text-muted mb-0">Manage system settings and configuration</p>
    </div>
    <div>
        <button class="btn btn-primary">
            <i class="fas fa-save me-2"></i> Save All Changes
        </button>
    </div>
</div>

<!-- Settings Tabs -->
<div class="content-card">
    <div class="card-header">
        <h5 class="mb-0">System Configuration</h5>
    </div>
    <div class="card-body">
        <ul class="nav nav-tabs" id="settingsTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general" type="button" role="tab">
                    <i class="fas fa-cog me-2"></i>General
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="email-tab" data-bs-toggle="tab" data-bs-target="#email" type="button" role="tab">
                    <i class="fas fa-envelope me-2"></i>Email
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="security-tab" data-bs-toggle="tab" data-bs-target="#security" type="button" role="tab">
                    <i class="fas fa-shield-alt me-2"></i>Security
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="backup-tab" data-bs-toggle="tab" data-bs-target="#backup" type="button" role="tab">
                    <i class="fas fa-database me-2"></i>Backup
                </button>
            </li>
        </ul>

        <div class="tab-content" id="settingsTabsContent">
            <!-- General Settings -->
            <div class="tab-pane fade show active" id="general" role="tabpanel">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Site Name</label>
                                <input type="text" class="form-control" value="Intervio">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Site URL</label>
                                <input type="url" class="form-control" value="https://intervio.com">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Admin Email</label>
                                <input type="email" class="form-control" value="admin@intervio.com">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Timezone</label>
                                <select class="form-select">
                                    <option>Asia/Kolkata</option>
                                    <option>UTC</option>
                                    <option>America/New_York</option>
                                    <option>Europe/London</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Date Format</label>
                                <select class="form-select">
                                    <option>DD-MM-YYYY</option>
                                    <option>MM-DD-YYYY</option>
                                    <option>YYYY-MM-DD</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Default Language</label>
                                <select class="form-select">
                                    <option>English</option>
                                    <option>Hindi</option>
                                    <option>Spanish</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Email Settings -->
            <div class="tab-pane fade" id="email" role="tabpanel">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">SMTP Host</label>
                                <input type="text" class="form-control" value="smtp.gmail.com">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">SMTP Port</label>
                                <input type="number" class="form-control" value="587">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">SMTP Username</label>
                                <input type="email" class="form-control" value="noreply@intervio.com">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">SMTP Password</label>
                                <input type="password" class="form-control" value="password123">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email From Name</label>
                                <input type="text" class="form-control" value="Intervio Team">
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="emailVerification" checked>
                                    <label class="form-check-label" for="emailVerification">
                                        Enable Email Verification
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Security Settings -->
            <div class="tab-pane fade" id="security" role="tabpanel">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Session Timeout (minutes)</label>
                                <input type="number" class="form-control" value="30">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Max Login Attempts</label>
                                <input type="number" class="form-control" value="5">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password Min Length</label>
                                <input type="number" class="form-control" value="8">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="twoFactor" checked>
                                    <label class="form-check-label" for="twoFactor">
                                        Enable Two-Factor Authentication
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="captcha" checked>
                                    <label class="form-check-label" for="captcha">
                                        Enable CAPTCHA on Login
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="ipWhitelist">
                                    <label class="form-check-label" for="ipWhitelist">
                                        Enable IP Whitelist
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Backup Settings -->
            <div class="tab-pane fade" id="backup" role="tabpanel">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Backup Frequency</label>
                                <select class="form-select">
                                    <option>Daily</option>
                                    <option>Weekly</option>
                                    <option>Monthly</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Backup Retention (days)</label>
                                <input type="number" class="form-control" value="30">
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="autoBackup" checked>
                                    <label class="form-check-label" for="autoBackup">
                                        Enable Automatic Backup
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="cloudBackup">
                                    <label class="form-check-label" for="cloudBackup">
                                        Enable Cloud Backup
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="emailBackup" checked>
                                    <label class="form-check-label" for="emailBackup">
                                        Email Backup Reports
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button type="button" class="btn btn-outline-primary">
                                    <i class="fas fa-download me-2"></i> Download Latest Backup
                                </button>
                                <button type="button" class="btn btn-outline-warning ms-2">
                                    <i class="fas fa-sync me-2"></i> Create Backup Now
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
