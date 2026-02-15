<?php
$pageTitle = 'Student Accounts';
include 'includes/auth_check.php';
include 'includes/header.php';
?>

<div class="content-wrapper">
<!-- Top Header -->
<div class="top-header">
    <div>
        <h1 class="h3 mb-0">Student Accounts</h1>
        <p class="text-muted mb-0">Manage student registrations and profiles</p>
    </div>
    <div>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStudentModal">
            <i class="fas fa-user-plus me-2"></i> Add Student
        </button>
    </div>
</div>

<!-- Students Table -->
<div class="content-card">
        <div class="card-header">
            <h5 class="mb-0">All Students</h5>
            <div>
                <select class="form-select me-2" style="width: 150px;">
                    <option>All Years</option>
                    <option>Final Year</option>
                    <option>Third Year</option>
                    <option>Second Year</option>
                    <option>First Year</option>
                </select>
                <div class="search-box d-inline-block">
                    <i class="fas fa-search"></i>
                    <input type="text" class="form-control" placeholder="Search students..." style="width: 200px;">
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Student</th>
                            <th>Email</th>
                            <th>Year</th>
                            <th>Branch</th>
                            <th>Registration Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://picsum.photos/seed/johnsmith/100/100.jpg" alt="John Smith" class="student-avatar me-3" style="width: 60px; height: 60px; border-radius: 8px; object-fit: cover;">
                                    <div>
                                        <div class="fw-semibold">John Smith</div>
                                        <div class="text-muted small">Computer Science Engineering</div>
                                    </div>
                                </div>
                            </td>
                            <td>john.smith@university.edu</td>
                            <td>Final Year</td>
                            <td>Computer Science</td>
                            <td>2024-01-15</td>
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
                                    <img src="https://picsum.photos/seed/emilyjohnson/100/100.jpg" alt="Emily Johnson" class="student-avatar me-3" style="width: 60px; height: 60px; border-radius: 8px; object-fit: cover;">
                                    <div>
                                        <div class="fw-semibold">Emily Johnson</div>
                                        <div class="text-muted small">Information Technology</div>
                                    </div>
                                </div>
                            </td>
                            <td>emily.johnson@university.edu</td>
                            <td>Third Year</td>
                            <td>Information Technology</td>
                            <td>2024-01-20</td>
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
                                    <img src="https://picsum.photos/seed/michaelbrown/100/100.jpg" alt="Michael Brown" class="student-avatar me-3" style="width: 60px; height: 60px; border-radius: 8px; object-fit: cover;">
                                    <div>
                                        <div class="fw-semibold">Michael Brown</div>
                                        <div class="text-muted small">Mechanical Engineering</div>
                                    </div>
                                </div>
                            </td>
                            <td>michael.brown@university.edu</td>
                            <td>Final Year</td>
                            <td>Mechanical Engineering</td>
                            <td>2024-01-18</td>
                            <td><span class="badge badge-warning">Suspended</span></td>
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
                                    <img src="https://picsum.photos/seed/sarahdavis/100/100.jpg" alt="Sarah Davis" class="student-avatar me-3" style="width: 60px; height: 60px; border-radius: 8px; object-fit: cover;">
                                    <div>
                                        <div class="fw-semibold">Sarah Davis</div>
                                        <div class="text-muted small">Electronics & Communication</div>
                                    </div>
                                </div>
                            </td>
                            <td>sarah.davis@university.edu</td>
                            <td>Second Year</td>
                            <td>Electronics & Communication</td>
                            <td>2024-01-22</td>
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
                                    <img src="https://picsum.photos/seed/davidwilson/100/100.jpg" alt="David Wilson" class="student-avatar me-3" style="width: 60px; height: 60px; border-radius: 8px; object-fit: cover;">
                                    <div>
                                        <div class="fw-semibold">David Wilson</div>
                                        <div class="text-muted small">Electrical Engineering</div>
                                    </div>
                                </div>
                            </td>
                            <td>david.wilson@university.edu</td>
                            <td>Final Year</td>
                            <td>Electrical Engineering</td>
                            <td>2024-01-25</td>
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
                                    <img src="https://picsum.photos/seed/lisaanderson/100/100.jpg" alt="Lisa Anderson" class="student-avatar me-3" style="width: 60px; height: 60px; border-radius: 8px; object-fit: cover;">
                                    <div>
                                        <div class="fw-semibold">Lisa Anderson</div>
                                        <div class="text-muted small">Civil Engineering</div>
                                    </div>
                                </div>
                            </td>
                            <td>lisa.anderson@university.edu</td>
                            <td>Third Year</td>
                            <td>Civil Engineering</td>
                            <td>2024-01-28</td>
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add Student Modal -->
<div class="modal fade" id="addStudentModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="firstName" required data-validation="required nameOnly" data-min="2">
                            <div id="firstName_error" class="text-danger small" style="display: none;"></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="lastName" required data-validation="required nameOnly" data-min="2">
                            <div id="lastName_error" class="text-danger small" style="display: none;"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" required data-validation="required email">
                            <div id="email_error" class="text-danger small" style="display: none;"></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" name="phone" required data-validation="required phone">
                            <div id="phone_error" class="text-danger small" style="display: none;"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="year" class="form-label">Year</label>
                            <select class="form-select" name="year" required data-validation="required select">
                                <option value="">Select Year</option>
                                <option>First Year</option>
                                <option>Second Year</option>
                                <option>Third Year</option>
                                <option>Final Year</option>
                            </select>
                            <div id="year_error" class="text-danger small" style="display: none;"></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="branch" class="form-label">Branch</label>
                            <select class="form-select" name="branch" required data-validation="required select">
                                <option value="">Select Branch</option>
                                <option>Computer Science</option>
                                <option>Information Technology</option>
                                <option>Mechanical Engineering</option>
                                <option>Electrical Engineering</option>
                                <option>Electronics & Communication</option>
                                <option>Civil Engineering</option>
                            </select>
                            <div id="branch_error" class="text-danger small" style="display: none;"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="rollNumber" class="form-label">Roll Number</label>
                            <input type="text" class="form-control" name="rollNumber" required data-validation="required alphanumeric" data-min="5">
                            <div id="rollNumber_error" class="text-danger small" style="display: none;"></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="registrationDate" class="form-label">Registration Date</label>
                            <input type="date" class="form-control" name="registrationDate" required data-validation="required">
                            <div id="registrationDate_error" class="text-danger small" style="display: none;"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Student</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<?php include 'includes/footer.php'; ?>
