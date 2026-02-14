<?php
$pageTitle = 'Mock Aptitude Tests';
include 'includes/auth_check.php';
include 'includes/header.php';
include 'includes/sidebar.php';
?>

<!-- Top Header -->
<div class="top-header">
    <div>
        <h1 class="h3 mb-0">Mock Aptitude Tests</h1>
        <p class="text-muted mb-0">Manage mock aptitude tests and assessments</p>
    </div>
    <div>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTestModal">
            <i class="fas fa-plus me-2"></i> Create Test
        </button>
    </div>
</div>

<!-- Tests Table -->
<div class="content-card">
    <div class="card-header">
        <h5 class="mb-0">All Tests</h5>
        <div>
            <select class="form-select me-2" style="width: 150px;">
                <option>All Categories</option>
                <option>Quantitative</option>
                <option>Logical Reasoning</option>
                <option>Verbal</option>
                <option>Technical</option>
                <option>General Knowledge</option>
            </select>
            <div class="search-box d-inline-block">
                <i class="fas fa-search"></i>
                <input type="text" class="form-control" placeholder="Search tests..." style="width: 200px;">
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Test</th>
                        <th>Category</th>
                        <th>Questions</th>
                        <th>Duration</th>
                        <th>Difficulty</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div>
                                <div class="fw-semibold mb-1">Quantitative Aptitude - Advanced</div>
                                <div class="text-muted small">Comprehensive test covering arithmetic, algebra, geometry, and data interpretation with advanced problem-solving techniques.</div>
                            </div>
                        </td>
                        <td><span class="badge bg-primary text-white">Quantitative</span></td>
                        <td>50</td>
                        <td>60 min</td>
                        <td><span class="badge bg-danger text-white">Hard</span></td>
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
                            <div>
                                <div class="fw-semibold mb-1">Logical Reasoning - Patterns</div>
                                <div class="text-muted small">Test your logical thinking with pattern recognition, series completion, analogies, and deductive reasoning problems.</div>
                            </div>
                        </td>
                        <td><span class="badge bg-info text-white">Logical Reasoning</span></td>
                        <td>40</td>
                        <td>45 min</td>
                        <td><span class="badge bg-warning text-dark">Medium</span></td>
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
                            <div>
                                <div class="fw-semibold mb-1">Verbal Ability & Comprehension</div>
                                <div class="text-muted small">Enhance your verbal skills with grammar, vocabulary, reading comprehension, and verbal reasoning questions.</div>
                            </div>
                        </td>
                        <td><span class="badge bg-success text-white">Verbal</span></td>
                        <td>45</td>
                        <td>50 min</td>
                        <td><span class="badge bg-warning text-dark">Medium</span></td>
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
                            <div>
                                <div class="fw-semibold mb-1">Technical Programming Test</div>
                                <div class="text-muted small">Assess your programming knowledge with questions on data structures, algorithms, and problem-solving in various languages.</div>
                            </div>
                        </td>
                        <td><span class="badge bg-secondary text-white">Technical</span></td>
                        <td>30</td>
                        <td>90 min</td>
                        <td><span class="badge bg-danger text-white">Hard</span></td>
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
                            <div>
                                <div class="fw-semibold mb-1">General Knowledge & Current Affairs</div>
                                <div class="text-muted small">Test your awareness of current events, history, geography, politics, and general knowledge topics.</div>
                            </div>
                        </td>
                        <td><span class="badge bg-dark text-white">General Knowledge</span></td>
                        <td>60</td>
                        <td>40 min</td>
                        <td><span class="badge bg-success text-white">Easy</span></td>
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
                                <div class="fw-semibold mb-1">Mixed Aptitude - Quick Assessment</div>
                                <div class="text-muted small">Quick assessment test with mixed questions from all categories for rapid evaluation.</div>
                            </div>
                        </td>
                        <td><span class="badge bg-primary text-white">Mixed</span></td>
                        <td>25</td>
                        <td>30 min</td>
                        <td><span class="badge bg-warning text-dark">Medium</span></td>
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

<!-- Add Test Modal -->
<div class="modal fade" id="addTestModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create New Test</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Test Title</label>
                            <input type="text" class="form-control" name="testTitle" required data-validation="required nameOnly" data-min="3"> 
                            <div id="testTitle_error" class="text-danger small" style="display: none;"></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Category</label>
                            <select class="form-select" name="category" required data-validation="required select">
                                <option value="">Select Category</option>
                                <option>Quantitative</option>
                                <option>Logical Reasoning</option>
                                <option>Verbal</option>
                                <option>Technical</option>
                                <option>General Knowledge</option>
                            </select>
                            <div id="category_error" class="text-danger small" style="display: none;"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Number of Questions</label>
                            <input type="number" class="form-control" name="numQuestions" required data-validation="required number" data-num-min="1" data-num-max="100">
                            <div id="numQuestions_error" class="text-danger small" style="display: none;"></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Duration (Minutes)</label>
                            <input type="number" class="form-control" name="duration" required data-validation="required number" data-num-min="1" data-num-max="300">
                            <div id="duration_error" class="text-danger small" style="display: none;"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Difficulty Level</label>
                            <select class="form-select" name="difficulty" required data-validation="required select">
                                <option value="">Select Difficulty</option>
                                <option>Easy</option>
                                <option>Medium</option>
                                <option>Hard</option>
                            </select>
                            <div id="difficulty_error" class="text-danger small" style="display: none;"></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Status</label>
                            <select class="form-select" name="status" required data-validation="required select">
                                <option value="">Select Status</option>
                                <option>Draft</option>
                                <option>Active</option>
                            </select>
                            <div id="status_error" class="text-danger small" style="display: none;"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                            <textarea class="form-control" rows="4" name="description" required data-validation="required min" data-min="10"></textarea>
                        <div id="description_error" class="text-danger small" style="display: none;"></div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="randomQuestions">
                            <label class="form-check-label" for="randomQuestions">
                                Randomize question order
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="showResults">
                            <label class="form-check-label" for="showResults">
                                Show results immediately after completion
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Create Test</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
