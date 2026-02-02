<?php include 'includes/Header.php'; ?>

<!-- Hero Section -->
<section class="hero-section" style="color: #000000; padding: 100px 0;">
    <div class="container text-center">
        <h1 class="display-3 fw-bold mb-4">Upcoming Placement Drives</h1>
        <p class="lead mb-5">Discover exciting career opportunities with top companies</p>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="input-group">
                    <input type="text" class="form-control form-control-lg" placeholder="Search companies, positions, or locations...">
                    <button class="btn btn-warning btn-lg" type="button">Search Drives</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Filter Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h3 class="text-center mb-4">Filter Drives</h3>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Company Type</label>
                                <select class="form-select">
                                    <option>All Companies</option>
                                    <option>MNC</option>
                                    <option>Startup</option>
                                    <option>Product Based</option>
                                    <option>Service Based</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Job Type</label>
                                <select class="form-select">
                                    <option>All Types</option>
                                    <option>Full Time</option>
                                    <option>Internship</option>
                                    <option>Part Time</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Location</label>
                                <select class="form-select">
                                    <option>All Locations</option>
                                    <option>Bangalore</option>
                                    <option>Mumbai</option>
                                    <option>Delhi</option>
                                    <option>Pune</option>
                                    <option>Hyderabad</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Package Range</label>
                                <select class="form-select">
                                    <option>All Packages</option>
                                    <option>0-5 LPA</option>
                                    <option>5-10 LPA</option>
                                    <option>10-15 LPA</option>
                                    <option>15+ LPA</option>
                                </select>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary me-2">Apply Filters</button>
                            <button class="btn btn-secondary">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Drives -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Featured Placement Drives</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="company-logo bg-primary text-white rounded-circle p-3 me-3">
                                <i class="fas fa-code fa-2x"></i>
                            </div>
                            <div>
                                <h4 class="mb-1">TechCorp Solutions</h4>
                                <p class="text-muted mb-0">Software Development</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <small class="text-muted">Package</small>
                                <p class="fw-bold mb-0">₹12-18 LPA</p>
                            </div>
                            <div class="col-6">
                                <small class="text-muted">Location</small>
                                <p class="fw-bold mb-0">Bangalore, Pune</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <small class="text-muted">Date</small>
                                <p class="fw-bold mb-0">15th March 2025</p>
                            </div>
                            <div class="col-6">
                                <small class="text-muted">Deadline</small>
                                <p class="fw-bold text-danger mb-0">10th March 2025</p>
                            </div>
                        </div>
                        <div class="mb-3">
                            <span class="badge bg-success me-2">Full Time</span>
                            <span class="badge bg-info me-2">On Campus</span>
                            <span class="badge bg-warning">B.Tech/MCA</span>
                        </div>
                        <button class="btn btn-primary w-100">Apply Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="company-logo bg-success text-white rounded-circle p-3 me-3">
                                <i class="fas fa-chart-line fa-2x"></i>
                            </div>
                            <div>
                                <h4 class="mb-1">DataTech Analytics</h4>
                                <p class="text-muted mb-0">Data Science & Analytics</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <small class="text-muted">Package</small>
                                <p class="fw-bold mb-0">₹15-22 LPA</p>
                            </div>
                            <div class="col-6">
                                <small class="text-muted">Location</small>
                                <p class="fw-bold mb-0">Mumbai, Hyderabad</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <small class="text-muted">Date</small>
                                <p class="fw-bold mb-0">20th March 2025</p>
                            </div>
                            <div class="col-6">
                                <small class="text-muted">Deadline</small>
                                <p class="fw-bold text-danger mb-0">15th March 2025</p>
                            </div>
                        </div>
                        <div class="mb-3">
                            <span class="badge bg-success me-2">Full Time</span>
                            <span class="badge bg-info me-2">On Campus</span>
                            <span class="badge bg-warning">B.Tech/M.Sc</span>
                        </div>
                        <button class="btn btn-primary w-100">Apply Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="company-logo bg-warning text-white rounded-circle p-3 me-3">
                                <i class="fas fa-mobile-alt fa-2x"></i>
                            </div>
                            <div>
                                <h4 class="mb-1">AppDev Studios</h4>
                                <p class="text-muted mb-0">Mobile App Development</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <small class="text-muted">Package</small>
                                <p class="fw-bold mb-0">₹10-15 LPA</p>
                            </div>
                            <div class="col-6">
                                <small class="text-muted">Location</small>
                                <p class="fw-bold mb-0">Delhi, Gurgaon</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <small class="text-muted">Date</small>
                                <p class="fw-bold mb-0">25th March 2025</p>
                            </div>
                            <div class="col-6">
                                <small class="text-muted">Deadline</small>
                                <p class="fw-bold text-danger mb-0">20th March 2025</p>
                            </div>
                        </div>
                        <div class="mb-3">
                            <span class="badge bg-success me-2">Full Time</span>
                            <span class="badge bg-info me-2">On Campus</span>
                            <span class="badge bg-warning">B.Tech/BCA</span>
                        </div>
                        <button class="btn btn-primary w-100">Apply Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="company-logo bg-danger text-white rounded-circle p-3 me-3">
                                <i class="fas fa-shield-alt fa-2x"></i>
                            </div>
                            <div>
                                <h4 class="mb-1">CyberSecure Systems</h4>
                                <p class="text-muted mb-0">Cybersecurity & IT</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <small class="text-muted">Package</small>
                                <p class="fw-bold mb-0">₹18-25 LPA</p>
                            </div>
                            <div class="col-6">
                                <small class="text-muted">Location</small>
                                <p class="fw-bold mb-0">Chennai, Bangalore</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <small class="text-muted">Date</small>
                                <p class="fw-bold mb-0">30th March 2025</p>
                            </div>
                            <div class="col-6">
                                <small class="text-muted">Deadline</small>
                                <p class="fw-bold text-danger mb-0">25th March 2025</p>
                            </div>
                        </div>
                        <div class="mb-3">
                            <span class="badge bg-success me-2">Full Time</span>
                            <span class="badge bg-info me-2">On Campus</span>
                            <span class="badge bg-warning">B.Tech/M.Tech</span>
                        </div>
                        <button class="btn btn-primary w-100">Apply Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-5" style="background-color: #1e40af; color: white;">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 mb-4">
                <h3 class="fw-bold mb-2" style="font-size: 2.5rem;">50+</h3>
                <p class="mb-0">Active Drives</p>
            </div>
            <div class="col-md-3 mb-4">
                <h3 class="fw-bold mb-2" style="font-size: 2.5rem;">200+</h3>
                <p class="mb-0">Companies</p>
            </div>
            <div class="col-md-3 mb-4">
                <h3 class="fw-bold mb-2" style="font-size: 2.5rem;">5000+</h3>
                <p class="mb-0">Students Placed</p>
            </div>
            <div class="col-md-3 mb-4">
                <h3 class="fw-bold mb-2" style="font-size: 2.5rem;">95%</h3>
                <p class="mb-0">Success Rate</p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/Footer.php'; ?>
