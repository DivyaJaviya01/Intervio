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
    <title>Notification Settings - Intervio</title>
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
                        <h4><i class="fas fa-bell me-2"></i>Notification Settings</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="update_notifications.php">
                            <!-- Email Notifications -->
                            <div class="mb-4">
                                <h5><i class="fas fa-envelope me-2"></i>Email Notifications</h5>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="emailApplications" checked>
                                    <label class="form-check-label" for="emailApplications">
                                        New job applications
                                    </label>
                                </div>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="emailInterviews" checked>
                                    <label class="form-check-label" for="emailInterviews">
                                        Interview invitations
                                    </label>
                                </div>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="emailOffers" checked>
                                    <label class="form-check-label" for="emailOffers">
                                        Job offers
                                    </label>
                                </div>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="emailUpdates">
                                    <label class="form-check-label" for="emailUpdates">
                                        Weekly placement updates
                                    </label>
                                </div>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="emailNews">
                                    <label class="form-check-label" for="emailNews">
                                        Newsletter and tips
                                    </label>
                                </div>
                            </div>

                            <!-- SMS Notifications -->
                            <div class="mb-4">
                                <h5><i class="fas fa-sms me-2"></i>SMS Notifications</h5>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="smsApplications">
                                    <label class="form-check-label" for="smsApplications">
                                        Urgent application updates
                                    </label>
                                </div>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="smsInterviews" checked>
                                    <label class="form-check-label" for="smsInterviews">
                                        Interview reminders
                                    </label>
                                </div>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="smsOffers" checked>
                                    <label class="form-check-label" for="smsOffers">
                                        Job offer alerts
                                    </label>
                                </div>
                            </div>

                            <!-- Push Notifications -->
                            <div class="mb-4">
                                <h5><i class="fas fa-desktop me-2"></i>Browser Push Notifications</h5>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="pushApplications" checked>
                                    <label class="form-check-label" for="pushApplications">
                                        New job postings
                                    </label>
                                </div>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="pushMessages">
                                    <label class="form-check-label" for="pushMessages">
                                        Messages from recruiters
                                    </label>
                                </div>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="pushDeadlines">
                                    <label class="form-check-label" for="pushDeadlines">
                                        Application deadlines
                                    </label>
                                </div>
                            </div>

                            <!-- Notification Frequency -->
                            <div class="mb-4">
                                <h5><i class="fas fa-clock me-2"></i>Notification Frequency</h5>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Email Frequency</label>
                                        <select class="form-select" name="email_frequency">
                                            <option value="immediate" selected>Immediate</option>
                                            <option value="daily">Daily Digest</option>
                                            <option value="weekly">Weekly Summary</option>
                                            <option value="never">Never</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Quiet Hours</label>
                                        <select class="form-select" name="quiet_hours">
                                            <option value="none">No quiet hours</option>
                                            <option value="22-6" selected>10 PM - 6 AM</option>
                                            <option value="21-7">9 PM - 7 AM</option>
                                            <option value="20-8">8 PM - 8 AM</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Contact Preferences -->
                            <div class="mb-4">
                                <h5><i class="fas fa-user-cog me-2"></i>Contact Preferences</h5>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Primary Email</label>
                                        <input type="email" class="form-control" name="primary_email" 
                                               value="<?php echo htmlspecialchars($user_data['email'] ?? ''); ?>" readonly>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Mobile Number</label>
                                        <input type="tel" class="form-control" name="mobile_number" 
                                               value="<?php echo htmlspecialchars($user_data['mobile'] ?? ''); ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="allowRecruiters" checked>
                                    <label class="form-check-label" for="allowRecruiters">
                                        Allow recruiters to contact me directly
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="profileVisibility" checked>
                                    <label class="form-check-label" for="profileVisibility">
                                        Make my profile visible to companies
                                    </label>
                                </div>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-2"></i>Save Settings
                                </button>
                                <button type="button" class="btn btn-outline-secondary ms-2" onclick="testNotifications()">
                                    <i class="fas fa-bell me-2"></i>Test Notifications
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Recent Notifications -->
                <div class="card mt-4">
                    <div class="card-header">
                        <h5><i class="fas fa-history me-2"></i>Recent Notifications</h5>
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            <div class="list-group-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-1">New job match: Software Developer at Microsoft</h6>
                                        <small class="text-muted">2 hours ago</small>
                                    </div>
                                    <span class="badge bg-primary">Email</span>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-1">Your application to Google is under review</h6>
                                        <small class="text-muted">1 day ago</small>
                                    </div>
                                    <span class="badge bg-success">Push</span>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-1">Interview reminder: Technical round with Amazon</h6>
                                        <small class="text-muted">2 days ago</small>
                                    </div>
                                    <span class="badge bg-info">SMS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function testNotifications() {
            // Test notification functionality
            if ('Notification' in window && Notification.permission === 'granted') {
                new Notification('Test Notification', {
                    body: 'This is a test notification from Intervio!',
                    icon: '/favicon.ico'
                });
            } else if ('Notification' in window && Notification.permission !== 'denied') {
                Notification.requestPermission().then(permission => {
                    if (permission === 'granted') {
                        new Notification('Test Notification', {
                            body: 'This is a test notification from Intervio!',
                            icon: '/favicon.ico'
                        });
                    }
                });
            } else {
                alert('Test email sent to ' + document.querySelector('[name="primary_email"]').value);
            }
        }
    </script>
</body>
</html>
