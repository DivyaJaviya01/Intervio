<?php
$pageTitle = 'Companies';
include 'includes/auth_check.php';
include 'includes/header.php';
?>

<!-- Top Header -->
<div class="top-header">
    <div>
        <h1 class="h3 mb-0">Companies</h1>
        <p class="text-muted mb-0">Manage company profiles and recruitment partnerships</p>
    </div>
    <div>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCompanyModal">
            <i class="fas fa-building me-2"></i> Add Company
        </button>
    </div>
</div>

<!-- Companies Table -->
<div class="content-card">
    <div class="card-header">
        <h5 class="mb-0">All Companies</h5>
        <div>
            <select class="form-select me-2" style="width: 150px;">
                <option>All Industries</option>
                <option>Technology</option>
                <option>Consulting</option>
                <option>Finance</option>
                <option>Manufacturing</option>
                <option>Healthcare</option>
            </select>
            <div class="search-box d-inline-block">
                <i class="fas fa-search"></i>
                <input type="text" class="form-control" placeholder="Search companies..." style="width: 200px;">
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Company</th>
                        <th>Industry</th>
                        <th>Location</th>
                        <th>Founded</th>
                        <th>Employees</th>
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
                                    <div class="text-muted small">Leading technology company with focus on software, cloud services, and enterprise solutions.</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-info text-white">Technology</span></td>
                        <td>Redmond, Washington</td>
                        <td>1975</td>
                        <td>181,000+</td>
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
                                    <div class="text-muted small">Global technology leader specializing in internet services, advertising, and consumer products.</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-info text-white">Technology</span></td>
                        <td>Mountain View, California</td>
                        <td>1998</td>
                        <td>139,995+</td>
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
                                    <div class="text-muted small">E-commerce and cloud computing giant with focus on customer service and innovation.</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-warning text-dark">E-commerce</span></td>
                        <td>Seattle, Washington</td>
                        <td>1994</td>
                        <td>1,298,000+</td>
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
                                    <div class="text-muted small">Leading IT services company with global presence in consulting and business solutions.</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-info text-white">Technology</span></td>
                        <td>Mumbai, India</td>
                        <td>1968</td>
                        <td>448,000+</td>
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
                                    <div class="text-muted small">Global IT consulting and outsourcing company with expertise in digital transformation.</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-info text-white">Technology</span></td>
                        <td>Bengaluru, India</td>
                        <td>1981</td>
                        <td>250,000+</td>
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
                                    <div class="text-muted small">Major IT services company with focus on business process outsourcing and technology solutions.</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-info text-white">Technology</span></td>
                        <td>Bengaluru, India</td>
                        <td>1945</td>
                        <td>221,000+</td>
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
                                <img src="https://picsum.photos/seed/ibm/100/100.jpg" alt="IBM" class="company-logo me-3" style="width: 60px; height: 60px; border-radius: 8px; object-fit: cover;">
                                <div>
                                    <div class="fw-semibold">IBM</div>
                                    <div class="text-muted small">Technology and consulting company with enterprise solutions and research capabilities.</div>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-info text-white">Technology</span></td>
                        <td>Armonk, New York</td>
                        <td>1911</td>
                        <td>282,000+</td>
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

<!-- Add Company Modal -->
<div class="modal fade" id="addCompanyModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Company</h5>
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
                            <label class="form-label">Founded Year</label>
                            <input type="number" class="form-control" name="foundedYear" required data-validation="required number" data-num-min="1900" data-num-max="2026">
                            <div id="foundedYear_error" class="text-danger small" style="display: none;"></div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Employees</label>
                            <input type="number" class="form-control" name="employees" required data-validation="required number" data-num-min="1">
                            <div id="employees_error" class="text-danger small" style="display: none;"></div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Location</label>
                            <input type="text" class="form-control" name="location" required data-validation="required min" data-min="2">
                            <div id="location_error" class="text-danger small" style="display: none;"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Website</label>
                            <input type="url" class="form-control" name="website" required data-validation="required url">
                            <div id="website_error" class="text-danger small" style="display: none;"></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Status</label>
                            <select class="form-select" name="status" required data-validation="required select">
                                <option value="">Select Status</option>
                                <option>Active</option>
                                <option>Inactive</option>
                                <option>Pending</option>
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
                            <input class="form-check-input" type="checkbox" id="featuredCompany" name="featuredCompany">
                            <label class="form-check-label" for="featuredCompany">
                                Feature this company on homepage
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Company</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>