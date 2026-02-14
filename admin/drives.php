<?php
$pageTitle = 'Upcoming Drives';
include 'includes/auth_check.php';
include 'includes/header.php';
?>

<!-- Top Header -->
<div class="top-header">
    <div>
        <h1 class="h3 mb-0">Upcoming Drives</h1>
        <p class="text-muted mb-0">Manage company recruitment drives and events</p>
    </div>
    <div>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDriveModal">
            <i class="fas fa-plus me-2"></i> Add Drive
        </button>
    </div>
</div>

<!-- Drives Table -->
<div class="content-card">
    <div class="card-header">
        <h5 class="mb-0">All Drives</h5>
        <div>
            <select class="form-select me-2" style="width: 150px;">
                <option>All Status</option>
                <option>Upcoming</option>
                <option>Ongoing</option>
                <option>Completed</option>
                <option>Cancelled</option>
            </select>
            <div class="search-box d-inline-block">
                <i class="fas fa-search"></i>
                <input type="text" class="form-control" placeholder="Search drives..." style="width: 200px;">
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Company</th>
                        <th>Position</th>
                        <th>Location</th>
                        <th>Date</th>
                        <th>Deadline</th>
                        <th>Eligibility</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://picsum.photos/seed/microsoft/100/100.jpg" alt="Microsoft" class="company-logo me-3" style="width: 60px; height: 60px; border-radius: 8px; object-fit: cover;">
                                <div>
                                    <div class="fw-semibold">Microsoft</div>
                                    <div class="text-muted small">Software Development Engineer, SDE-2 position for final year students with strong programming skills.</div>
                                </div>
                            </div>
                        </td>
                        <td>Software Development Engineer</td>
                        <td>Hyderabad</td>
                        <td>2024-12-15</td>
                        <td>2024-12-20</td>
                        <td>CGPA ≥ 7.0, Computer Science/IT</td>
                        <td><span class="badge badge-success">Active</span></td>
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
                            <div class="d-flex align-items-center">
                                <img src="https://picsum.photos/seed/google/100/100.jpg" alt="Google" class="company-logo me-3" style="width: 60px; height: 60px; border-radius: 8px; object-fit: cover;">
                                <div>
                                    <div class="fw-semibold">Google</div>
                                    <div class="text-muted small">Software Engineer position with focus on cloud technologies, machine learning, and distributed systems.</div>
                                </div>
                            </div>
                        </td>
                        <td>Software Engineer</td>
                        <td>Bangalore</td>
                        <td>2024-12-20</td>
                        <td>2024-12-25</td>
                        <td>CGPA ≥ 8.0, Any Branch</td>
                        <td><span class="badge badge-success">Active</span></td>
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
                            <div class="d-flex align-items-center">
                                <img src="https://picsum.photos/seed/amazon/100/100.jpg" alt="Amazon" class="company-logo me-3" style="width: 60px; height: 60px; border-radius: 8px; object-fit: cover;">
                                <div>
                                    <div class="fw-semibold">Amazon</div>
                                    <div class="text-muted small">Multiple positions including SDE, QA, and DevOps roles across different teams.</div>
                                </div>
                            </div>
                        </td>
                        <td>Various Positions</td>
                        <td>Multiple Locations</td>
                        <td>2024-12-18</td>
                        <td>2024-12-28</td>
                        <td>Final Year Students, No Backlogs</td>
                        <td><span class="badge badge-success">Active</span></td>
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
                            <div class="d-flex align-items-center">
                                <img src="https://picsum.photos/seed/tcs/100/100.jpg" alt="TCS" class="company-logo me-3" style="width: 60px; height: 60px; border-radius: 8px; object-fit: cover;">
                                <div>
                                    <div class="fw-semibold">TCS</div>
                                    <div class="text-muted small">System Engineer and Developer positions for fresh graduates with training program.</div>
                                </div>
                            </div>
                        </td>
                        <td>System Engineer/Developer</td>
                        <td>Pune</td>
                        <td>2024-12-22</td>
                        <td>2024-12-30</td>
                        <td>2024 Batch, No Active Backlogs</td>
                        <td><span class="badge badge-success">Active</span></td>
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
                            <div class="d-flex align-items-center">
                                <img src="https://picsum.photos/seed/infosys/100/100.jpg" alt="Infosys" class="company-logo me-3" style="width: 60px; height: 60px; border-radius: 8px; object-fit: cover;">
                                <div>
                                    <div class="fw-semibold">Infosys</div>
                                    <div class="text-muted small">Multiple IT roles including software development, testing, and support positions.</div>
                                </div>
                            </div>
                        </td>
                        <td>Various IT Positions</td>
                        <td>Mysore</td>
                        <td>2024-12-25</td>
                        <td>2024-12-31</td>
                        <td>Engineering Graduates, Good Academic Record</td>
                        <td><span class="badge badge-success">Active</span></td>
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
                            <div class="d-flex align-items-center">
                                <img src="https://picsum.photos/seed/wipro/100/100.jpg" alt="Wipro" class="company-logo me-3" style="width: 60px; height: 60px; border-radius: 8px; object-fit: cover;">
                                <div>
                                    <div class="fw-semibold">Wipro</div>
                                    <div class="text-muted small">Project Engineer and software development roles with campus hiring.</div>
                                </div>
                            </div>
                        </td>
                        <td>Project Engineer/Developer</td>
                        <td>Chennai</td>
                        <td>2024-12-28</td>
                        <td>2024-12-31</td>
                        <td>Engineering Students, No Backlogs</td>
                        <td><span class="badge badge-warning">Ongoing</span></td>
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

<!-- Add Drive Modal -->
<div class="modal fade" id="addDriveModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Drive</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Company Name</label>
                            <input type="text" class="form-control" name="companyName" required data-validation="required nameOnly" data-min="2">
                            <div id="companyName_error" class="text-danger small" style="display: none;"></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Industry</label>
                            <select class="form-select" name="industry" required data-validation="required select">
                                <option value="">Select Industry</option>
                                <option>Technology</option>
                                <option>Consulting</option>
                                <option>Finance</option>
                                <option>Manufacturing</option>
                                <option>Healthcare</option>
                                <option>Education</option>
                            </select>
                            <div id="industry_error" class="text-danger small" style="display: none;"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Drive Date</label>
                            <input type="date" class="form-control" name="driveDate" required data-validation="required">
                            <div id="driveDate_error" class="text-danger small" style="display: none;"></div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Application Deadline</label>
                            <input type="date" class="form-control" name="deadline" required data-validation="required">
                            <div id="deadline_error" class="text-danger small" style="display: none;"></div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Drive Location</label>
                            <input type="text" class="form-control" name="location" required data-validation="required min" data-min="2">
                            <div id="location_error" class="text-danger small" style="display: none;"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 mb-3">
                            <label class="form-label">Job Description</label>
                            <textarea class="form-control" rows="4" name="jobDescription" required data-validation="required min" data-min="10"></textarea>
                            <div id="jobDescription_error" class="text-danger small" style="display: none;"></div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Package Range</label>
                            <input type="text" class="form-control" name="packageRange" required placeholder="e.g., 8-12 LPA" data-validation="required min" data-min="3">
                            <div id="packageRange_error" class="text-danger small" style="display: none;"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Eligibility Criteria</label>
                            <textarea class="form-control" rows="3" name="eligibility" required data-validation="required min" data-min="10"></textarea>
                            <div id="eligibility_error" class="text-danger small" style="display: none;"></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Required Documents</label>
                            <textarea class="form-control" rows="3" name="documents" required data-validation="required min" data-min="5"></textarea>
                            <div id="documents_error" class="text-danger small" style="display: none;"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Contact Person</label>
                            <input type="text" class="form-control" name="contactPerson" required data-validation="required nameOnly" data-min="2">
                            <div id="contactPerson_error" class="text-danger small" style="display: none;"></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Contact Email</label>
                            <input type="email" class="form-control" name="contactEmail" required data-validation="required email">
                            <div id="contactEmail_error" class="text-danger small" style="display: none;"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="sendNotifications">
                            <label class="form-check-label" for="sendNotifications">
                                Send email notifications to registered students
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Drive</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>