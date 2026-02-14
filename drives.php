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

<!-- Announcements Section -->
<section class="py-4 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-light border-info alert-dismissible fade show" role="alert" id="mainAnnouncements">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="alert-heading mb-0 text-info"><i class="fas fa-bullhorn me-2"></i>📢 Latest Announcements</h5>
                        <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#announcementContent" aria-expanded="true">
                            <i class="fas fa-chevron-up" id="announcementToggle"></i>
                        </button>
                    </div>
                    <hr class="border-info">
                    <div class="collapse show" id="announcementContent">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-start">
                                    <div class="flex-grow-1">
                                        <strong class="text-success">🚀 Microsoft Drive - Last Date to Apply Extended</strong>
                                        <div class="text-muted small mb-1">
                                            <i class="fas fa-calendar me-1"></i> Dec 10, 2024
                                            <span class="ms-3"><i class="fas fa-clock me-1"></i> 2:30 PM</span>
                                        </div>
                                        <div class="small">
                                            Good news! Microsoft has extended the last date to apply for their Software Developer position. Students can now apply until December 20, 2024.
                                        </div>
                                    </div>
                                    <span class="badge bg-success ms-2">Published</span>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-start">
                                    <div class="flex-grow-1">
                                        <strong class="text-warning">📅 Placement Week Schedule Released</strong>
                                        <div class="text-muted small mb-1">
                                            <i class="fas fa-calendar me-1"></i> Dec 8, 2024
                                            <span class="ms-3"><i class="fas fa-clock me-1"></i> 10:00 AM</span>
                                        </div>
                                        <div class="small">
                                            The complete schedule for Placement Week 2024 has been released. Check the detailed timetable for company presentations and interview slots.
                                        </div>
                                    </div>
                                    <span class="badge bg-warning text-dark ms-2">Important</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const announcementToggle = document.getElementById('announcementToggle');
    const announcementContent = document.getElementById('announcementContent');
    
    if (announcementToggle && announcementContent) {
        announcementToggle.addEventListener('click', function() {
            if (announcementContent.classList.contains('show')) {
                announcementToggle.classList.remove('fa-chevron-up');
                announcementToggle.classList.add('fa-chevron-down');
            } else {
                announcementToggle.classList.remove('fa-chevron-down');
                announcementToggle.classList.add('fa-chevron-up');
            }
        });
    }
});
</script>

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
                <div class="drive-card">
                    <div class="drive-header">
                        <div>
                            <div class="drive-title">Software Developer Position</div>
                            <div class="drive-company">Microsoft India</div>
                            <div class="drive-meta">
                                <div class="meta-item">
                                    <i class="fas fa-calendar"></i>
                                    <span>15th March 2025</span>
                                </div>
                                <div class="meta-item">
                                    <i class="fas fa-clock"></i>
                                    <span>10:00 AM</span>
                                </div>
                                <div class="meta-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Bangalore, Pune</span>
                                </div>
                                <div class="meta-item">
                                    <i class="fas fa-tag"></i>
                                    <span>Full-time</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <img src="https://picsum.photos/seed/microsoft/100/100.jpg" alt="Microsoft" class="company-logo">
                        </div>
                    </div>
                    <div class="drive-description">
                        Microsoft is looking for talented software developers to join their team. This drive includes multiple rounds of technical interviews and assessments.
                    </div>
                    <div class="drive-stats">
                        <div class="stat-item">
                            <div class="stat-value">45</div>
                            <div class="stat-label">Applications</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">12</div>
                            <div class="stat-label">Shortlisted</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">₹12-18 LPA</div>
                            <div class="stat-label">Package</div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge badge-success">Upcoming</span>
                        <button class="btn btn-primary">Apply Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="drive-card">
                    <div class="drive-header">
                        <div>
                            <div class="drive-title">Data Analyst Internship</div>
                            <div class="drive-company">Amazon Development Center</div>
                            <div class="drive-meta">
                                <div class="meta-item">
                                    <i class="fas fa-calendar"></i>
                                    <span>30th March 2025</span>
                                </div>
                                <div class="meta-item">
                                    <i class="fas fa-clock"></i>
                                    <span>2:00 PM</span>
                                </div>
                                <div class="meta-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Chennai, Bangalore</span>
                                </div>
                                <div class="meta-item">
                                    <i class="fas fa-tag"></i>
                                    <span>Internship</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <img src="https://picsum.photos/seed/amazon/100/100.jpg" alt="Amazon" class="company-logo">
                        </div>
                    </div>
                    <div class="drive-description">
                        Amazon is seeking motivated data analysts for their internship program. Work on real-world data challenges and learn from industry experts.
                    </div>
                    <div class="drive-stats">
                        <div class="stat-item">
                            <div class="stat-value">89</div>
                            <div class="stat-label">Applications</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">25</div>
                            <div class="stat-label">Shortlisted</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">₹8-12 LPA</div>
                            <div class="stat-label">Stipend</div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge badge-success">Upcoming</span>
                        <button class="btn btn-primary">Apply Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partner Companies Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3" style="color: #000000; font-size: 2.5rem;">Our Recruitment Partners</h2>
            <p class="text-muted">Intervio has partnerships with leading companies for campus placements</p>
        </div>
        
        <!-- Company Logos Grid -->
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="logo-slider">
                    <div class="logo-track-container">
    <div class="logo-track">
                            <!-- First Row of Logos -->
                            <div class="logo-item">
                                <img src="assets/logos/Google-Logo.wine.svg" alt="Google" style="width: 150px; height: 75px; object-fit: contain;">
                            </div>
                            <div class="logo-item">
                                <img src="assets/logos/Microsoft-Logo.wine.svg" alt="Microsoft" style="width: 150px; height: 75px; object-fit: contain;">
                            </div>
                            <div class="logo-item">
                                <img src="assets/logos/Amazon_(company)-Logo.wine.svg" alt="Amazon" style="width: 150px; height: 75px; object-fit: contain;">
                            </div>
                            <div class="logo-item">
                                <img src="assets/logos/Meta_Platforms-Logo.wine.svg" alt="Meta" style="width: 150px; height: 75px; object-fit: contain;">
                            </div>
                            <div class="logo-item">
                                <img src="assets/logos/Tech_Mahindra-Logo.wine.svg" alt="Tech Mahindra" style="width: 150px; height: 75px; object-fit: contain;">
                            </div>
                            <div class="logo-item">
                                <img src="assets/logos/HCL_Technologies-Logo.wine.svg" alt="HCL Technologies" style="width: 150px; height: 75px; object-fit: contain;">
                            </div>
                            <div class="logo-item">
                                <img src="assets/logos/Infosys_logo.svg" alt="Infosys" style="width: 150px; height: 75px; object-fit: contain;">
</div>
                            <div class="logo-item">
                                <img src="assets/logos/Wipro_Primary_Logo_Color_RGB.svg" alt="Wipro" style="width: 150px; height: 75px; object-fit: contain;">
                            </div>
                            <!-- Repeat for seamless loop -->
                            <div class="logo-item">
                                <img src="assets/logos/Google-Logo.wine.svg" alt="Google" style="width: 150px; height: 75px; object-fit: contain;">
                            </div>
                            <div class="logo-item">
                                <img src="assets/logos/Microsoft-Logo.wine.svg" alt="Microsoft" style="width: 150px; height: 75px; object-fit: contain;">
                            </div>
                            <div class="logo-item">
                                <img src="assets/logos/Amazon_(company)-Logo.wine.svg" alt="Amazon" style="width: 150px; height: 75px; object-fit: contain;">
                            </div>
                            <div class="logo-item">
                                <img src="assets/logos/Meta_Platforms-Logo.wine.svg" alt="Meta" style="width: 150px; height: 75px; object-fit: contain;">
                            </div>
                            <div class="logo-item">
                                <img src="assets/logos/Tech_Mahindra-Logo.wine.svg" alt="Tech Mahindra" style="width: 150px; height: 75px; object-fit: contain;">
                            </div>
                            <div class="logo-item">
                                <img src="assets/logos/HCL_Technologies-Logo.wine.svg" alt="HCL Technologies" style="width: 150px; height: 75px; object-fit: contain;">
</div>
                            <div class="logo-item">
                                <img src="assets/logos/Wipro_Primary_Logo_Color_RGB.svg" alt="Wipro" style="width: 150px; height: 75px; object-fit: contain;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Partnership Stats -->
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="text-center">
                    <h4 class="mb-4 fw-bold">Trusted by Industry Leaders</h4>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="stat-box p-3 bg-white rounded shadow-sm">
                                <h3 class="h4 mb-1 text-primary">200+</h3>
                                <p class="small text-muted mb-0">Partner Companies</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="stat-box p-3 bg-white rounded shadow-sm">
                                <h3 class="h4 mb-1 text-success">5000+</h3>
                                <p class="small text-muted mb-0">Students Placed</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="stat-box p-3 bg-white rounded shadow-sm">
                                <h3 class="h4 mb-1 text-warning">95%</h3>
                                <p class="small text-muted mb-0">Success Rate</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Logo Slider Animation - Simplified */
.logo-slider {
    overflow: hidden;
    width: 100%;
    position: relative;
    background: #f8f9fa;
    padding: 20px 0;
}

.logo-track-container {
    width: 100%;
    margin: 0 auto;
    overflow: hidden;
    position: relative;
}

.logo-track {
    display: flex;
    width: 2700px;
    animation: scroll 15s linear infinite;
}

.logo-item {
    flex: 0 0 150px;
    margin: 0 30px;
    display: flex;
    align-items: center;
    justify-content: center;
}

@keyframes scroll {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-1350px);
    }
}

/* Pause animation on hover */
.logo-slider:hover .logo-track {
    animation-play-state: paused;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .logo-track {
        width: 2160px;
    }

    @keyframes scroll {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-1080px);
        }
    }

    .logo-item {
        flex: 0 0 120px;
        margin: 0 10px;
    }
}

/* Admin Drive Card Styles - Exact Match */
.drive-card {
    border: 2px solid #e5e7eb;
    border-radius: 10px;
    padding: 1.5rem;
    background: white;
    transition: box-shadow 0.3s ease;
}

.drive-card:hover {
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.drive-header {
    display: flex;
    justify-content: space-between;
    align-items: start;
    margin-bottom: 1rem;
}

.drive-title {
    font-size: 1.25rem;
    font-weight: 600;
    color: #1f2937;
    margin-bottom: 0.5rem;
}

.drive-company {
    color: #6b7280;
    margin-bottom: 0.5rem;
}

.drive-meta {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    margin-bottom: 1rem;
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: #6b7280;
    font-size: 0.875rem;
}

.meta-item i {
    color: #4f46e5;
}

.drive-description {
    color: #4b5563;
    margin-bottom: 1rem;
    line-height: 1.5;
}

.drive-stats {
    display: flex;
    gap: 2rem;
    margin-bottom: 1rem;
}

.stat-item {
    display: flex;
    flex-direction: column;
}

.stat-value {
    font-size: 1.5rem;
    font-weight: 600;
    color: #1f2937;
}

.stat-label {
    font-size: 0.875rem;
    color: #6b7280;
}

.badge {
    padding: 0.25rem 0.75rem;
    border-radius: 9999px;
    font-size: 0.75rem;
    font-weight: 500;
}

.badge-success {
    background-color: #10b981;
    color: white;
}

.badge-warning {
    background-color: #f59e0b;
    color: white;
}

.badge-danger {
    background-color: #ef4444;
    color: white;
}

.badge-info {
    background-color: #3b82f6;
    color: white;
}

.company-logo {
    width: 60px;
    height: 60px;
    border-radius: 8px;
    object-fit: cover;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .drive-header {
        flex-direction: column;
        gap: 1rem;
    }
    
    .drive-stats {
        flex-direction: column;
        gap: 1rem;
    }
}
</style>

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
