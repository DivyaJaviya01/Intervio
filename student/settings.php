<?php 
include 'includes/Header.php';

// Handle form submissions
$success_message = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['profile_settings'])) {
        $success_message = "Profile updated successfully!";
    } elseif (isset($_POST['account_settings'])) {
        $success_message = "Account settings updated successfully!";
    }
}
?>

<style>
    body {
        background: #f4f6f9;
        font-family: 'Segoe UI', sans-serif;
    }

    /* Main content offset for fixed sidebar */
    .col-md-10 {
        margin-left: 15%;
    }

    /* Hero Section */
    .hero {
        background: linear-gradient(135deg, #4f46e5, #3b82f6);
        color: white;
        border-radius: 20px;
        padding: 30px;
    }

    /* Card Style */
    .custom-card {
        border-radius: 15px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.05);
    }

    /* Settings Section */
    .settings-section {
        border-bottom: 1px solid #e5e7eb;
        padding-bottom: 20px;
        margin-bottom: 20px;
    }

    .settings-section:last-child {
        border-bottom: none;
    }

    /* Toggle Switch */
    .form-switch .form-check-input {
        width: 50px;
        height: 25px;
        background-color: #ccc;
        border: none;
    }

    .form-switch .form-check-input:checked {
        background-color: #4f46e5;
    }

    .form-switch .form-check-input:focus {
        border-color: #4f46e5;
        box-shadow: 0 0 0 0.25rem rgba(79, 70, 229, 0.25);
    }

    /* Profile Picture */
    .profile-pic-container {
        position: relative;
        width: 120px;
        height: 120px;
        margin: 0 auto;
    }

    .profile-pic {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid #4f46e5;
    }

    .profile-pic-edit {
        position: absolute;
        bottom: 5px;
        right: 5px;
        background: #4f46e5;
        color: white;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .profile-pic-edit:hover {
        background: #3b82f6;
        transform: scale(1.1);
    }

    /* Tab Navigation */
    .nav-tabs .nav-link {
        border: none;
        color: #6b7280;
        font-weight: 500;
        padding: 12px 20px;
    }

    .nav-tabs .nav-link.active {
        background: #f0f4ff;
        color: #4f46e5;
        border-bottom: 2px solid #4f46e5;
    }

    .nav-tabs .nav-link:hover {
        color: #4f46e5;
    }

    /* Error and Success Messages */
    .error-message {
        color: #dc3545;
        font-size: 0.875rem;
        margin-top: 0.25rem;
        font-weight: 500;
        display: block;
    }

    .success-message {
        background: #d1e7dd;
        color: #0f5132;
        padding: 12px 20px;
        border-radius: 8px;
        margin-bottom: 20px;
        border: 1px solid #badbcc;
    }

    .is-invalid {
        border-color: #dc3545 !important;
        box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25) !important;
    }

    .is-valid {
        border-color: #198754 !important;
        box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25) !important;
    }

    .form-control.is-invalid:focus,
    .form-select.is-invalid:focus {
        border-color: #dc3545 !important;
        box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25) !important;
    }

    .form-control.is-valid:focus,
    .form-select.is-valid:focus {
        border-color: #198754 !important;
        box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25) !important;
    }

    .form-label {
        font-weight: 600;
        color: #374151;
    }

    .form-label::after {
        content: " *";
        color: #dc3545;
    }

    .form-label.optional::after {
        content: "";
    }

    /* Success checkmark for valid fields */
    .form-control.is-valid {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right calc(0.375em + 0.1875rem) center;
        background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        padding-right: calc(1.5em + 0.75rem);
    }

    .form-select.is-valid {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e");
        background-position: right 0.75rem center, right 2.25rem center;
        background-size: 16px 12px, 10px 10px;
        padding-right: 3rem;
    }
</style>

    <div class="container-fluid">
        <div class="row">

            <?php include 'includes/sidebar.php'; ?>

            <!-- MAIN CONTENT -->
            <div class="col-md-10 p-4 main-content">

                <!-- Success Message -->
                <?php if (!empty($success_message)): ?>
                <div class="success-message">
                    <i class="bi bi-check-circle me-2"></i>
                    <?php echo $success_message; ?>
                </div>
                <?php endif; ?>

                <!-- HERO SECTION -->
                <div class="hero mb-4">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h2 class="fw-bold mb-3">Settings</h2>
                            <p class="mb-2">Manage your account settings and preferences</p>
                        </div>
                        <div class="col-md-4 text-end">
                            <button type="submit" form="profile-form" class="btn btn-light btn-lg">Save Changes</button>
                        </div>
                    </div>
                </div>

                <!-- SETTINGS TABS -->
                <div class="card custom-card p-4">

                    <!-- Tab Navigation -->
                    <ul class="nav nav-tabs mb-4" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#profile">
                                <i class="bi bi-person me-2"></i>Profile Settings
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#account">
                                <i class="bi bi-gear me-2"></i>Account Settings
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#notifications">
                                <i class="bi bi-bell me-2"></i>Notifications
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#privacy">
                                <i class="bi bi-shield-lock me-2"></i>Privacy & Security
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#appearance">
                                <i class="bi bi-palette me-2"></i>Appearance
                            </a>
                        </li>
                    </ul>

                    <!-- Tab Content -->
                    <div class="tab-content">

                        <!-- Profile Settings Tab -->
                        <div class="tab-pane fade show active" id="profile">
                            <form method="POST" id="profile-form">
                                <input type="hidden" name="profile_settings" value="1">

                                <div class="settings-section">
                                    <h5 class="fw-bold mb-4">Profile Information</h5>

                                    <div class="row mb-4">
                                        <div class="col-md-3 text-center">
                                            <div class="profile-pic-container">
                                                <img src="../assets/images/woman.jpg" class="profile-pic"
                                                    alt="Profile">
                                                <div class="profile-pic-edit">
                                                    <i class="bi bi-camera"></i>
                                                </div>
                                            </div>
                                            <p class="mt-2 mb-0">Click to change photo</p>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">First Name</label>
                                                    <input type="text" name="first_name" class="form-control" value="Krisha" required data-validation="required nameOnly min max" data-min="2" data-max="50">
                                                    <div id="first_name_error" class="text-danger small" style="display: none;"></div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Last Name</label>
                                                    <input type="text" name="last_name" class="form-control" value="Akbari" required data-validation="required nameOnly min max" data-min="2" data-max="50">
                                                    <div id="last_name_error" class="text-danger small" style="display: none;"></div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Email</label>
                                                    <input type="email" name="email" class="form-control" value="krisha@gmail.com" required data-validation="required email">
                                                    <div id="email_error" class="text-danger small" style="display: none;"></div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Phone</label>
                                                    <input type="tel" name="phone" class="form-control" value="9876543210" required data-validation="required phone min max" data-min="10" data-max="10">
                                                    <div id="phone_error" class="text-danger small" style="display: none;"></div>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <label class="form-label optional">Bio</label>
                                                    <textarea name="bio" class="form-control" rows="3" data-validation="max" data-max="500">Passionate full stack developer with strong interest in building scalable web applications.</textarea>
                                                    <div id="bio_error" class="text-danger small" style="display: none;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="settings-section">
                                    <h5 class="fw-bold mb-4">Academic Information</h5>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Enrollment Number</label>
                                            <input type="text" name="enrollment_no" class="form-control" value="123456789012" required data-validation="required min max" data-min="12" data-max="12">
                                            <div id="enrollment_no_error" class="text-danger small" style="display: none;"></div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Program</label>
                                            <select name="program" class="form-select" required data-validation="required select">
                                                <option value="">Select Program</option>
                                                <option value="B.Tech Computer Science" selected>B.Tech Computer Science</option>
                                                <option value="B.Tech Information Technology">B.Tech Information Technology</option>
                                                <option value="M.Tech Computer Science">M.Tech Computer Science</option>
                                            </select>
                                            <div id="program_error" class="text-danger small" style="display: none;"></div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Year</label>
                                            <select name="year" class="form-select" required data-validation="required select">
                                                <option value="">Select Year</option>
                                                <option value="1st Year">1st Year</option>
                                                <option value="2nd Year">2nd Year</option>
                                                <option value="3rd Year">3rd Year</option>
                                                <option value="4th Year" selected>4th Year</option>
                                            </select>
                                            <div id="year_error" class="text-danger small" style="display: none;"></div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">CGPA</label>
                                            <input type="text" name="cgpa" class="form-control" value="8.6" required data-validation="required number" data-num-min="0" data-max="10">
                                            <div id="cgpa_error" class="text-danger small" style="display: none;"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="settings-section">
                                    <h5 class="fw-bold mb-4">Social Links</h5>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label optional">LinkedIn</label>
                                            <input type="url" name="linkedin" class="form-control" placeholder="https://linkedin.com/in/username" data-validation="url" data-max="100">
                                            <div id="linkedin_error" class="text-danger small" style="display: none;"></div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label optional">GitHub</label>
                                            <input type="url" name="github" class="form-control" placeholder="https://github.com/username" data-validation="url" data-max="100">
                                            <div id="github_error" class="text-danger small" style="display: none;"></div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label optional">Portfolio</label>
                                            <input type="url" name="portfolio" class="form-control" placeholder="https://yourportfolio.com" data-validation="url" data-max="100">
                                            <div id="portfolio_error" class="text-danger small" style="display: none;"></div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label optional">Twitter</label>
                                            <input type="url" name="twitter" class="form-control" placeholder="https://twitter.com/username" data-validation="url" data-max="100">
                                            <div id="twitter_error" class="text-danger small" style="display: none;"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- Account Settings Tab -->
                        <div class="tab-pane fade" id="account">
                            <form method="POST" id="account-form">
                                <input type="hidden" name="account_settings" value="1">

                                <div class="settings-section">
                                    <h5 class="fw-bold mb-4">Change Password</h5>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label optional">Current Password</label>
                                            <input type="password" name="current_password" class="form-control" data-validation="required strongPassword" data-min="6" data-max="50">
                                            <div id="current_password_error" class="text-danger small" style="display: none;"></div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label optional">New Password</label>
                                            <input type="password" name="new_password" class="form-control" data-validation="required strongPassword" data-min="6" data-max="50">
                                            <div id="new_password_error" class="text-danger small" style="display: none;"></div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label optional">Confirm New Password</label>
                                            <input type="password" name="confirm_password" class="form-control" data-validation="required confirmPassword" data-min="6" data-max="50">
                                            <div id="confirm_password_error" class="text-danger small" style="display: none;"></div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update Password</button>
                                </div>

                                <div class="settings-section">
                                    <h5 class="fw-bold mb-4">Email Preferences</h5>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Primary Email</label>
                                            <input type="email" name="primary_email" class="form-control" value="krisha@gmail.com" required data-validation="required email" data-max="100">
                                            <div id="primary_email_error" class="text-danger small" style="display: none;"></div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label optional">Secondary Email</label>
                                            <input type="email" name="secondary_email" class="form-control" placeholder="backup@email.com" data-validation="email" data-max="100">
                                            <div id="secondary_email_error" class="text-danger small" style="display: none;"></div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update Email</button>
                                </div>

                                <div class="settings-section">
                                    <h5 class="fw-bold mb-4">Account Status</h5>

                                    <div class="alert alert-info">
                                        <i class="bi bi-info-circle me-2"></i>
                                        Your account is currently <strong>Active</strong> and in good standing.
                                    </div>

                                    <div class="d-flex gap-2">
                                        <button class="btn btn-warning">Deactivate Account</button>
                                        <button class="btn btn-danger">Delete Account</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- Notifications Tab -->
                        <div class="tab-pane fade" id="notifications">
                            <div class="settings-section">
                                <h5 class="fw-bold mb-4">Email Notifications</h5>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="email-drives" checked>
                                            <label class="form-check-label" for="email-drives">
                                                New placement drives
                                            </label>
                                        </div>
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="email-applications"
                                                checked>
                                            <label class="form-check-label" for="email-applications">
                                                Application status updates
                                            </label>
                                        </div>
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="email-interviews"
                                                checked>
                                            <label class="form-check-label" for="email-interviews">
                                                Interview reminders
                                            </label>
                                        </div>
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="email-offers">
                                            <label class="form-check-label" for="email-offers">
                                                Job offers
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="email-newsletter">
                                            <label class="form-check-label" for="email-newsletter">
                                                Newsletter and updates
                                            </label>
                                        </div>
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="email-tips" checked>
                                            <label class="form-check-label" for="email-tips">
                                                Career tips and resources
                                            </label>
                                        </div>
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="email-events">
                                            <label class="form-check-label" for="email-events">
                                                Upcoming events
                                            </label>
                                        </div>
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="email-security" checked>
                                            <label class="form-check-label" for="email-security">
                                                Security alerts
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="settings-section">
                                <h5 class="fw-bold mb-4">Push Notifications</h5>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="push-drives" checked>
                                            <label class="form-check-label" for="push-drives">
                                                New placement drives
                                            </label>
                                        </div>
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="push-applications"
                                                checked>
                                            <label class="form-check-label" for="push-applications">
                                                Application updates
                                            </label>
                                        </div>
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="push-interviews">
                                            <label class="form-check-label" for="push-interviews">
                                                Interview reminders
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="push-messages">
                                            <label class="form-check-label" for="push-messages">
                                                Messages from recruiters
                                            </label>
                                        </div>
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="push-deadlines" checked>
                                            <label class="form-check-label" for="push-deadlines">
                                                Application deadlines
                                            </label>
                                        </div>
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="push-updates">
                                            <label class="form-check-label" for="push-updates">
                                                Profile updates
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Privacy & Security Tab -->
                        <div class="tab-pane fade" id="privacy">
                            <div class="settings-section">
                                <h5 class="fw-bold mb-4">Privacy Settings</h5>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="profile-public">
                                            <label class="form-check-label" for="profile-public">
                                                Make profile public to recruiters
                                            </label>
                                        </div>
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="show-email">
                                            <label class="form-check-label" for="show-email">
                                                Show email in public profile
                                            </label>
                                        </div>
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="show-phone">
                                            <label class="form-check-label" for="show-phone">
                                                Show phone number in public profile
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="show-cgpa">
                                            <label class="form-check-label" for="show-cgpa">
                                                Show CGPA in public profile
                                            </label>
                                        </div>
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="allow-contact" checked>
                                            <label class="form-check-label" for="allow-contact">
                                                Allow recruiters to contact me
                                            </label>
                                        </div>
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="analytics">
                                            <label class="form-check-label" for="analytics">
                                                Allow analytics tracking
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="settings-section">
                                <h5 class="fw-bold mb-4">Security Settings</h5>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="two-factor" checked>
                                            <label class="form-check-label" for="two-factor">
                                                Two-factor authentication
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="login-alerts" checked>
                                            <label class="form-check-label" for="login-alerts">
                                                Login alerts
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Session Timeout</label>
                                        <select class="form-select">
                                            <option>30 minutes</option>
                                            <option selected>1 hour</option>
                                            <option>2 hours</option>
                                            <option>4 hours</option>
                                            <option>Never</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Password Expiry</label>
                                        <select class="form-select">
                                            <option>30 days</option>
                                            <option selected>90 days</option>
                                            <option>180 days</option>
                                            <option>Never</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="settings-section">
                                <h5 class="fw-bold mb-4">Active Sessions</h5>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Device</th>
                                                <th>Location</th>
                                                <th>Last Active</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <i class="bi bi-laptop me-2"></i>
                                                    Chrome on Windows
                                                </td>
                                                <td>Ahmedabad, India</td>
                                                <td>2 minutes ago</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-danger">Logout</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="bi bi-phone me-2"></i>
                                                    Safari on iPhone
                                                </td>
                                                <td>Ahmedabad, India</td>
                                                <td>1 hour ago</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-danger">Logout</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Appearance Tab -->
                        <div class="tab-pane fade" id="appearance">
                            <div class="settings-section">
                                <h5 class="fw-bold mb-4">Theme Preferences</h5>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Color Theme</label>
                                        <select class="form-select">
                                            <option selected>Light</option>
                                            <option>Dark</option>
                                            <option>Auto (System)</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Accent Color</label>
                                        <select class="form-select">
                                            <option selected>Blue</option>
                                            <option>Green</option>
                                            <option>Purple</option>
                                            <option>Orange</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="settings-section">
                                <h5 class="fw-bold mb-4">Dashboard Layout</h5>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Cards Per Row</label>
                                        <select class="form-select">
                                            <option>2</option>
                                            <option selected>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Animation Speed</label>
                                        <select class="form-select">
                                            <option>Fast</option>
                                            <option selected>Normal</option>
                                            <option>Slow</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="compact-view">
                                            <label class="form-check-label" for="compact-view">
                                                Compact view
                                            </label>
                                        </div>
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="show-sidebar" checked>
                                            <label class="form-check-label" for="show-sidebar">
                                                Show sidebar
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="animations" checked>
                                            <label class="form-check-label" for="animations">
                                                Enable animations
                                            </label>
                                        </div>
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="tooltips" checked>
                                            <label class="form-check-label" for="tooltips">
                                                Show tooltips
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="settings-section">
                                <h5 class="fw-bold mb-4">Language & Region</h5>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Language</label>
                                        <select class="form-select">
                                            <option selected>English</option>
                                            <option>Hindi</option>
                                            <option>Gujarati</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Timezone</label>
                                        <select class="form-select">
                                            <option selected>IST (UTC+5:30)</option>
                                            <option>GMT (UTC+0)</option>
                                            <option>EST (UTC-5)</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Date Format</label>
                                        <select class="form-select">
                                            <option selected>DD/MM/YYYY</option>
                                            <option>MM/DD/YYYY</option>
                                            <option>YYYY-MM-DD</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Time Format</label>
                                        <select class="form-select">
                                            <option selected>12-hour</option>
                                            <option>24-hour</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Save Button -->
                    <div class="text-end mt-4">
                        <button class="btn btn-primary btn-lg">Save All Changes</button>
                    </div>
                </div>
            </div>

            <script src="../assets/js/jquery.js"></script>
            <script src="../assets/js/validate.js"></script>

            <?php include 'includes/Footer.php'; ?>