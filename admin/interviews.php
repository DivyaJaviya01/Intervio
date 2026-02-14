<?php
$pageTitle = 'Interview Preparation';
include 'includes/auth_check.php';
include 'includes/header.php';
?>

<!-- Top Header -->
<div class="top-header">
    <div>
        <h1 class="h3 mb-0">Interview Preparation</h1>
        <p class="text-muted mb-0">Manage interview preparation materials and resources</p>
    </div>
    <div>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addMaterialModal">
            <i class="fas fa-plus me-2"></i> Add Material
        </button>
    </div>
</div>

<!-- Materials Table -->
<div class="content-card">
    <div class="card-header">
        <h5 class="mb-0">All Materials</h5>
        <div>
            <select class="form-select me-2" style="width: 150px;">
                <option>All Categories</option>
                <option>Resume Building</option>
                <option>Technical Skills</option>
                <option>Behavioral Questions</option>
                <option>Mock Interviews</option>
                <option>Career Guidance</option>
            </select>
            <div class="search-box d-inline-block">
                <i class="fas fa-search"></i>
                <input type="text" class="form-control" placeholder="Search materials..." style="width: 200px;">
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Material</th>
                        <th>Category</th>
                        <th>Topics</th>
                        <th>Questions</th>
                        <th>Success Rate</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="bg-primary text-white rounded-circle p-3 me-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; flex-shrink: 0;">
                                    <i class="fas fa-file-alt fa-lg"></i>
                                </div>
                                <div>
                                    <div class="fw-semibold">Resume Writing Masterclass</div>
                                    <div class="text-muted small">Complete guide to crafting professional resumes that get noticed by recruiters. Includes templates, examples, and best practices.</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-primary text-white">Resume Building</span></td>
                        <td>12 Topics</td>
                        <td>45 Questions</td>
                        <td>87%</td>
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
                            <div class="d-flex align-items-center">
                                <div class="bg-info text-white rounded-circle p-3 me-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; flex-shrink: 0;">
                                    <i class="fas fa-laptop-code fa-lg"></i>
                                </div>
                                <div>
                                    <div class="fw-semibold">Technical Interview Preparation</div>
                                    <div class="text-muted small">Comprehensive technical interview guide covering data structures, algorithms, system design, and coding challenges.</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-info text-white">Technical Skills</span></td>
                        <td>18 Topics</td>
                        <td>120 Questions</td>
                        <td>92%</td>
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
                            <div class="d-flex align-items-center">
                                <div class="bg-success text-white rounded-circle p-3 me-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; flex-shrink: 0;">
                                    <i class="fas fa-comments fa-lg"></i>
                                </div>
                                <div>
                                    <div class="fw-semibold">Behavioral Questions Guide</div>
                                    <div class="text-muted small">Master behavioral interview questions with STAR method framework and real-world examples from top companies.</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-success text-white">Behavioral Questions</span></td>
                        <td>8 Topics</td>
                        <td>65 Questions</td>
                        <td>85%</td>
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
                            <div class="d-flex align-items-center">
                                <div class="bg-warning text-dark rounded-circle p-3 me-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; flex-shrink: 0;">
                                    <i class="fas fa-video fa-lg"></i>
                                </div>
                                <div>
                                    <div class="fw-semibold">Mock Interview Simulator</div>
                                    <div class="text-muted small">Practice mock interviews with AI-powered feedback and real-time evaluation of your responses.</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-warning text-dark">Mock Interviews</span></td>
                        <td>6 Topics</td>
                        <td>30 Scenarios</td>
                        <td>78%</td>
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
                            <div class="d-flex align-items-center">
                                <div class="bg-secondary text-white rounded-circle p-3 me-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; flex-shrink: 0;">
                                    <i class="fas fa-rocket fa-lg"></i>
                                </div>
                                <div>
                                    <div class="fw-semibold">Career Path Planning</div>
                                    <div class="text-muted small">Strategic career guidance for different roles, industries, and career progression paths with salary insights.</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-secondary text-white">Career Guidance</span></td>
                        <td>10 Topics</td>
                        <td>25 Questions</td>
                        <td>90%</td>
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
                            <div class="d-flex align-items-center">
                                <div class="bg-info text-white rounded-circle p-3 me-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; flex-shrink: 0;">
                                    <i class="fas fa-users fa-lg"></i>
                                </div>
                                <div>
                                    <div class="fw-semibold">Group Discussion Tips</div>
                                    <div class="text-muted small">Master group discussion techniques, topics, and evaluation criteria used by top companies.</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-info text-white">Mock Interviews</span></td>
                        <td>5 Topics</td>
                        <td>20 Questions</td>
                        <td>82%</td>
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
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Add Material Modal -->
<div class="modal fade" id="addMaterialModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">New Material</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="addMaterialForm">
                    <div class="row">
                        <div class="col-md-8 mb-3">
                            <label class="form-label">Material Title</label>
                            <input type="text" class="form-control" name="materialTitle" required data-validation="required nameOnly min" data-min="3">
                            <div id="materialTitle_error" class="text-danger small" style="display: none;"></div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Category</label>
                            <select class="form-select" name="category" required data-validation="required select">
                                <option value="">Select Category</option>
                                <option>Resume Building</option>
                                <option>Technical Skills</option>
                                <option>Behavioral Questions</option>
                                <option>Mock Interviews</option>
                                <option>Career Guidance</option>
                            </select>
                            <div id="category_error" class="text-danger small" style="display: none;"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Number of Topics</label>
                            <input type="number" class="form-control" name="topics" required data-validation="required number num-min num-max" data-num-min="1" data-num-max="50">
                            <div id="topics_error" class="text-danger small" style="display: none;"></div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Number of Questions</label>
                            <input type="number" class="form-control" name="questions" required data-validation="required number" data-num-min="1" data-num-max="200">
                            <div id="questions_error" class="text-danger small" style="display: none;"></div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Success Rate (%)</label>
                            <input type="number" class="form-control" name="successRate" required data-validation="required number num-min num-max" data-num-min="0" data-num-max="100">
                            <div id="successRate_error" class="text-danger small" style="display: none;"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Status</label>
                            <select class="form-select" name="status" required data-validation="required select">
                                <option value="">Select Status</option>
                                <option>Active</option>
                                <option>Draft</option>
                                <option>Archived</option>
                            </select>
                            <div id="status_error" class="text-danger small" style="display: none;"></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Material Type</label>
                            <select class="form-select" name="materialType" required data-validation="required select">
                                <option value="">Select Type</option>
                                <option>Document</option>
                                <option>Video</option>
                                <option>Interactive</option>
                                <option>Assessment</option>
                            </select>
                            <div id="materialType_error" class="text-danger small" style="display: none;"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" rows="4" name="description" required data-validation="required min" data-min="10"></textarea>
                        <div id="description_error" class="text-danger small" style="display: none;"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Material</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
