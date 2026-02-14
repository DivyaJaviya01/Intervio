<?php
$pageTitle = 'Notifications';
include 'includes/auth_check.php';
include 'includes/header.php';
?>

<!-- Top Header -->
<div class="top-header">
    <div>
        <h1 class="h3 mb-0">Notifications</h1>
        <p class="text-muted mb-0">Manage system notifications and alerts</p>
    </div>
    <div>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sendNotificationModal">
            <i class="fas fa-paper-plane me-2"></i> Send Notification
        </button>
    </div>
</div>

<!-- Notifications Table -->
<div class="content-card">
    <div class="card-header">
        <h5 class="mb-0">Recent Notifications</h5>
        <div>
            <select class="form-select me-2" style="width: 150px;">
                <option>All Types</option>
                <option>System</option>
                <option>Drive</option>
                <option>Payment</option>
                <option>General</option>
            </select>
            <div class="search-box d-inline-block">
                <i class="fas fa-search"></i>
                <input type="text" class="form-control" placeholder="Search notifications..." style="width: 200px;">
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Notification</th>
                        <th>Date</th>
                        <th>Target</th>
                        <th>Type</th>
                        <th>Views</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div>
                                <div class="fw-semibold mb-1">System Maintenance Scheduled</div>
                                <div class="text-muted small">The placement portal will undergo scheduled maintenance on December 12, 2024, from 2:00 AM to 6:00 AM. During this time, the system will be unavailable.</div>
                            </div>
                        </td>
                        <td>
                            <div class="small">Dec 10, 2024</div>
                            <div class="text-muted small">2:30 PM</div>
                        </td>
                        <td>All Students</td>
                        <td><span class="badge bg-info text-white">System</span></td>
                        <td>456</td>
                        <td><span class="badge badge-success">Sent</span></td>
                        <td style="text-align: center; white-space: nowrap;">
                            <button class="btn btn-sm btn-outline-primary me-1">
                                <i class="fas fa-eye"></i> View
                            </button>
                            <button class="btn btn-sm btn-outline-warning me-1">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                            <button class="btn btn-sm btn-outline-danger">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <div class="fw-semibold mb-1">Microsoft Drive Application Deadline Extended</div>
                                <div class="text-muted small">Good news! Microsoft has extended the application deadline for their Software Developer position. Final year students can now apply until December 20, 2024.</div>
                            </div>
                        </td>
                        <td>
                            <div class="small">Dec 9, 2024</div>
                            <div class="text-muted small">10:00 AM</div>
                        </td>
                        <td>Final Year</td>
                        <td><span class="badge bg-success text-white">Drive</span></td>
                        <td>234</td>
                        <td><span class="badge badge-success">Sent</span></td>
                        <td style="text-align: center; white-space: nowrap;">
                            <button class="btn btn-sm btn-outline-primary me-1">
                                <i class="fas fa-eye"></i> View
                            </button>
                            <button class="btn btn-sm btn-outline-warning me-1">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                            <button class="btn btn-sm btn-outline-danger">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <div class="fw-semibold mb-1">Payment Reminder - Mock Test Fee</div>
                                <div class="text-muted small">Reminder: Complete your payment for the mock aptitude test series. Payment deadline is December 15, 2024. Late payments may incur additional charges.</div>
                            </div>
                        </td>
                        <td>
                            <div class="small">Dec 8, 2024</div>
                            <div class="text-muted small">3:45 PM</div>
                        </td>
                        <td>Pending Payments</td>
                        <td><span class="badge bg-warning text-dark">Payment</span></td>
                        <td>189</td>
                        <td><span class="badge badge-success">Sent</span></td>
                        <td style="text-align: center; white-space: nowrap;">
                            <button class="btn btn-sm btn-outline-primary me-1">
                                <i class="fas fa-eye"></i> View
                            </button>
                            <button class="btn btn-sm btn-outline-warning me-1">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                            <button class="btn btn-sm btn-outline-danger">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <div class="fw-semibold mb-1">Interview Schedule - Amazon</div>
                                <div class="text-muted small">Your interview with Amazon is scheduled for December 15, 2024 at 10:00 AM. Please report to the placement cell 15 minutes before the scheduled time.</div>
                            </div>
                        </td>
                        <td>
                            <div class="small">Dec 7, 2024</div>
                            <div class="text-muted small">11:30 AM</div>
                        </td>
                        <td>Shortlisted Students</td>
                        <td><span class="badge bg-primary text-white">Drive</span></td>
                        <td>67</td>
                        <td><span class="badge badge-success">Sent</span></td>
                        <td style="text-align: center; white-space: nowrap;">
                            <button class="btn btn-sm btn-outline-primary me-1">
                                <i class="fas fa-eye"></i> View
                            </button>
                            <button class="btn btn-sm btn-outline-warning me-1">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                            <button class="btn btn-sm btn-outline-danger">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <div class="fw-semibold mb-1">Placement Week - Important Update</div>
                                <div class="text-muted small">Placement Week 2024 schedule has been updated. Please check the revised timetable for company presentations and interview slots. Some sessions have been rescheduled.</div>
                            </div>
                        </td>
                        <td>
                            <div class="small">Dec 5, 2024</div>
                            <div class="text-muted small">9:00 AM</div>
                        </td>
                        <td>All Students</td>
                        <td><span class="badge bg-secondary text-white">General</span></td>
                        <td>512</td>
                        <td><span class="badge badge-success">Sent</span></td>
                        <td style="text-align: center; white-space: nowrap;">
                            <button class="btn btn-sm btn-outline-primary me-1">
                                <i class="fas fa-eye"></i> View
                            </button>
                            <button class="btn btn-sm btn-outline-warning me-1">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                            <button class="btn btn-sm btn-outline-danger">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <div class="fw-semibold mb-1">New Study Materials Available</div>
                                <div class="text-muted small">New interview preparation materials are now available in the student portal. Access comprehensive guides, mock tests, and video tutorials.</div>
                            </div>
                        </td>
                        <td>
                            <div class="small">Dec 3, 2024</div>
                            <div class="text-muted small">4:20 PM</div>
                        </td>
                        <td>Registered Students</td>
                        <td><span class="badge bg-info text-white">System</span></td>
                        <td>298</td>
                        <td><span class="badge badge-warning">Draft</span></td>
                        <td style="text-align: center; white-space: nowrap;">
                            <button class="btn btn-sm btn-outline-primary me-1">
                                <i class="fas fa-eye"></i> View
                            </button>
                            <button class="btn btn-sm btn-outline-warning me-1">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                            <button class="btn btn-sm btn-outline-danger">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Send Notification Modal -->
<div class="modal fade" id="sendNotificationModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Send New Notification</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="sendNotificationForm">
                    <div class="row">
                        <div class="col-md-8 mb-3">
                            <label class="form-label">Notification Title</label>
                            <input type="text" class="form-control" name="notificationTitle" required data-validation="required nameOnly" data-min="3">
                            <div id="notificationTitle_error" class="text-danger small" style="display: none;"></div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Type</label>
                            <select class="form-select" name="type" required data-validation="required select">
                                <option value="">Select Type</option>
                                <option>System</option>
                                <option>Drive</option>
                                <option>Payment</option>
                                <option>General</option>
                            </select>
                            <div id="type_error" class="text-danger small" style="display: none;"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Message</label>
                        <textarea class="form-control" rows="6" name="message" required data-validation="required min" data-min="10"></textarea>
                        <div id="message_error" class="text-danger small" style="display: none;"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Target Audience</label>
                            <select class="form-select" name="targetAudience" required data-validation="required select">
                                <option value="">Select Audience</option>
                                <option>All Students</option>
                                <option>Final Year</option>
                                <option>Third Year</option>
                                <option>Second Year</option>
                                <option>First Year</option>
                                <option>Specific Students</option>
                            </select>
                            <div id="targetAudience_error" class="text-danger small" style="display: none;"></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Priority</label>
                            <select class="form-select" name="priority" required data-validation="required select">
                                <option value="">Select Priority</option>
                                <option>High</option>
                                <option>Medium</option>
                                <option>Low</option>
                            </select>
                            <div id="priority_error" class="text-danger small" style="display: none;"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Schedule Date</label>
                            <input type="date" class="form-control" name="scheduleDate" data-validation="required">
                            <div id="scheduleDate_error" class="text-danger small" style="display: none;"></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Schedule Time</label>
                            <input type="time" class="form-control" name="scheduleTime" data-validation="required">
                            <div id="scheduleTime_error" class="text-danger small" style="display: none;"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="sendEmail">
                            <label class="form-check-label" for="sendEmail">
                                Send email notification
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="sendSMS">
                            <label class="form-check-label" for="sendSMS">
                                Send SMS notification
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" form="sendNotificationForm" class="btn btn-primary">Send Notification</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
                                