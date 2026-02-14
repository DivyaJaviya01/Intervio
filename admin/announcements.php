<?php
$pageTitle = 'Announcements';
include 'includes/auth_check.php';
include 'includes/header.php';
include 'includes/sidebar.php';
?>

<!-- Top Header -->
<div class="top-header">
    <div>
        <h1 class="h3 mb-0">Announcements</h1>
        <p class="text-muted mb-0">Manage and send announcements to students</p>
    </div>
    <div>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addAnnouncementModal">
            <i class="fas fa-plus me-2"></i> New Announcement
        </button>
    </div>
</div>

<!-- Announcements Table -->
<div class="content-card">
    <div class="card-header">
        <h5 class="mb-0">All Announcements</h5>
        <div>
            <select class="form-select me-2" style="width: 150px;">
                <option>All Status</option>
                <option>Published</option>
                <option>Draft</option>
                <option>Scheduled</option>
            </select>
            <div class="search-box d-inline-block">
                <i class="fas fa-search"></i>
                <input type="text" class="form-control" placeholder="Search announcements..." style="width: 200px;">
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Announcement</th>
                        <th>Date</th>
                        <th>Author</th>
                        <th>Priority</th>
                        <th>Views</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div>
                                <div class="fw-semibold mb-1">Microsoft Drive - Last Date to Apply Extended</div>
                                <div class="text-muted small">Good news! Microsoft has extended the last date to apply for their Software Developer position. Students can now apply until December 20, 2024. Don't miss this opportunity to work with one of the world's leading tech companies.</div>
                            </div>
                        </td>
                        <td>
                            <div class="small">Dec 10, 2024</div>
                            <div class="text-muted small">2:30 PM</div>
                        </td>
                        <td>Admin</td>
                        <td><span class="badge bg-danger text-white">High</span></td>
                        <td>234</td>
                        <td><span class="badge badge-success">Published</span></td>
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
                                <div class="fw-semibold mb-1">New Mock Test Series Available</div>
                                <div class="text-muted small">We're excited to announce a new series of mock aptitude tests covering all major topics including quantitative aptitude, logical reasoning, and verbal ability. These tests are designed to help you prepare for upcoming placement drives.</div>
                            </div>
                        </td>
                        <td>
                            <div class="small">Dec 8, 2024</div>
                            <div class="text-muted small">10:00 AM</div>
                        </td>
                        <td>Admin</td>
                        <td><span class="badge bg-warning text-dark">Medium</span></td>
                        <td>189</td>
                        <td><span class="badge badge-success">Published</span></td>
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
                                <div class="fw-semibold mb-1">Placement Week Schedule Released</div>
                                <div class="text-muted small">The complete schedule for Placement Week 2024 has been released. Check the detailed timetable for company presentations, interview slots, and venue information. Make sure to mark your calendars!</div>
                            </div>
                        </td>
                        <td>
                            <div class="small">Dec 5, 2024</div>
                            <div class="text-muted small">3:15 PM</div>
                        </td>
                        <td>Admin</td>
                        <td><span class="badge bg-success text-white">Low</span></td>
                        <td>156</td>
                        <td><span class="badge badge-success">Published</span></td>
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
                                <div class="fw-semibold mb-1">Workshop on Resume Building</div>
                                <div class="text-muted small">Join us for an exclusive workshop on resume building and interview preparation. Learn how to create professional resumes that stand out and get noticed by top recruiters.</div>
                            </div>
                        </td>
                        <td>
                            <div class="small">Dec 3, 2024</div>
                            <div class="text-muted small">11:00 AM</div>
                        </td>
                        <td>Admin</td>
                        <td><span class="badge bg-warning text-dark">Medium</span></td>
                        <td>98</td>
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
                    <tr>
                        <td>
                            <div>
                                <div class="fw-semibold mb-1">New Company Partnership - Google</div>
                                <div class="text-muted small">We're thrilled to announce our new partnership with Google! This collaboration will bring exclusive placement opportunities and internship programs for our students. Stay tuned for more details.</div>
                            </div>
                        </td>
                        <td>
                            <div class="small">Dec 1, 2024</div>
                            <div class="text-muted small">9:30 AM</div>
                        </td>
                        <td>Admin</td>
                        <td><span class="badge bg-danger text-white">High</span></td>
                        <td>412</td>
                        <td><span class="badge badge-info">Scheduled</span></td>
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

<!-- Add Announcement Modal -->
<div class="modal fade" id="addAnnouncementModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create New Announcement</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="addAnnouncementForm">
                    <div class="row">
                        <div class="col-md-8 mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" required data-validation="required nameOnly" data-min="3">
                            <div id="title_error" class="text-danger small" style="display: none;"></div>
                        </div>
                        <div class="col-md-4 mb-3">
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
                    <div class="mb-3">
                        <label class="form-label">Content</label>
                        <textarea class="form-control" rows="6" name="content" required data-validation="required min" data-min="10"></textarea>
                        <div id="content_error" class="text-danger small" style="display: none;"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Schedule Date</label>
                            <input type="date" class="form-control" name="scheduleDate" required data-validation="required">
                            <div id="scheduleDate_error" class="text-danger small" style="display: none;"></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Schedule Time</label>
                            <input type="time" class="form-control" name="scheduleTime" required data-validation="required">
                            <div id="scheduleTime_error" class="text-danger small" style="display: none;"></div>
                        </div>
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
                            </select>
                            <div id="targetAudience_error" class="text-danger small" style="display: none;"></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Status</label>
                            <select class="form-select" name="status" required data-validation="required select">
                                <option value="">Select Status</option>
                                <option>Draft</option>
                                <option>Published</option>
                                <option>Scheduled</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="sendNotification">
                            <label class="form-check-label" for="sendNotification">
                                Send push notification to students
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" form="addAnnouncementForm" class="btn btn-primary">Create Announcement</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
