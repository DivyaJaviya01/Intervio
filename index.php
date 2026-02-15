<?php include 'includes/Header.php'; ?>

<style>
/* Placement Carousel Styles */
.placement-card {
    background: white;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    min-height: 500px;
}

.placement-image-side {
    padding: 0;
}

.placement-image {
    width: 100%;
    height: 500px;
    object-fit: cover;
}

.placement-content-side {
    padding: 40px;
    display: flex;
    align-items: center;
}

.placement-content {
    width: 100%;
}

.placement-header {
    margin-bottom: 30px;
}

.placement-name {
    font-size: 2.5rem;
    font-weight: bold;
    color: #2D4650;
    margin-bottom: 8px;
}

.placement-role {
    font-size: 1.2rem;
    color: #647880;
    margin-bottom: 0;
}

.placement-company {
    display: flex;
    align-items: center;
    margin-bottom: 40px;
}

.company-logo {
    width: 60px;
    height: 60px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 20px;
    background: transparent;
}

.company-initial {
    color: white;
    font-size: 1.5rem;
    font-weight: bold;
}

.company-details {
    flex: 1;
}

.company-name {
    font-size: 1.5rem;
    font-weight: 600;
    color: #2D4650;
    margin-bottom: 4px;
}

.company-location {
    color: #647880;
    margin-bottom: 0;
}

.placement-stats {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-bottom: 30px;
    position: relative;
}

.stat-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 15px;
    background: #f8f9fa;
    border-radius: 8px;
    position: relative;
    z-index: 1;
}

.stat-label {
    font-size: 0.85rem;
    color: #647880;
    margin-bottom: 4px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.stat-value {
    font-size: 1.1rem;
    font-weight: bold;
    color: #2D4650;
}

.placement-achievement {
    text-align: center;
}

.achievement-badge {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    padding: 12px 24px;
    border-radius: 25px;
    font-weight: 500;
    font-size: 0.9rem;
    display: inline-block;
}

/* Carousel Controls */
.carousel-control-prev,
.carousel-control-next {
    width: 50px;
    height: 50px;
    background: rgba(0,0,0,0.5);
    border-radius: 50%;
    top: 50%;
    transform: translateY(-50%);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.carousel:hover .carousel-control-prev,
.carousel:hover .carousel-control-next {
    opacity: 1;
}

.carousel-control-prev:hover,
.carousel-control-next:hover {
    background: rgba(0,0,0,0.8);
}

/* Responsive */
@media (max-width: 991px) {
    .placement-image {
        height: 300px;
    }
    
    .placement-content-side {
        padding: 30px 20px;
    }
    
    .placement-name {
        font-size: 2rem;
    }
    
    .placement-stats {
        flex-direction: column;
        gap: 15px;
    }
    
    .stat-item {
        display: flex;
        justify-content: space-between;
        text-align: left;
    }
}

@media (max-width: 576px) {
    .placement-content-side {
        padding: 20px 15px;
    }
    
    .placement-name {
        font-size: 1.5rem;
    }
    
    .placement-role {
        font-size: 1rem;
    }
    
    .company-logo {
        width: 50px;
        height: 50px;
        margin-right: 15px;
    }
    
    .company-initial {
        font-size: 1.2rem;
    }
    
    .company-name {
        font-size: 1.2rem;
    }
}
</style>
<?php include 'includes/components/index/Hero.php'; ?>
<link rel="stylesheet" href="assets/css/index.css">


<!-- Statistics Section -->
<section class="" style="background-color: #ffffff;">
        <div class="row text-center mt-5 pt-5" style="width: 80vw; margin: 5rem auto;">
            <div class="col-md-3 mb-2">
                <h3 class="fw-bold mb-2" style="color: #000000; font-size: 2.5rem;">100+</h3>
                <p class="mb-0" style="color: #6b7280; font-size: 1rem;">Companies</p>
            </div>
            <div class="col-md-3 mb-2">
                <h3 class="fw-bold mb-2" style="color: #000000; font-size: 2.5rem;">1000+</h3>
                <p class="mb-0" style="color: #6b7280; font-size: 1rem;">Students Placed</p>
            </div>
            <div class="col-md-3 mb-2">
                <h3 class="fw-bold mb-2" style="color: #000000; font-size: 2.5rem;">500+</h3>
                <p class="mb-0" style="color: #6b7280; font-size: 1rem;">Interviews Conducted</p>
            </div>
            <div class="col-md-3 mb-2">
                <h3 class="fw-bold mb-2" style="color: #000000; font-size: 2.5rem;">95%</h3>
                <p class="mb-0" style="color: #6b7280; font-size: 1rem;">Success Rate</p>
            </div>
        </div>
    </div>
</section>

<!-- Company Logos Section -->
<section class="py-3" style="background-color: #ffffffff; margin-bottom: 5rem;">
    <div class="container-fluid px-5">
        <div class="logo-slider">
            <div class="logo-track-container" style="width: 80vw; margin: 0 auto;">
                <div class="logo-track">
                    <div class="logo-item">
                        <img src="assets/logos/Amazon_(company)-Logo.wine.svg" alt="Amazon" style="width: 150px; height: 75px; object-fit: contain;">
                    </div>
                    <div class="logo-item">
                        <img src="assets/logos/Google-Logo.wine.svg" alt="Google" style="width: 150px; height: 75px; object-fit: contain;">
                    </div>
                    <div class="logo-item">
                        <img src="assets/logos/HCL_Technologies-Logo.wine.svg" alt="HCL Technologies" style="width: 150px; height: 75px; object-fit: contain;">
                    </div>
                    <div class="logo-item">
                        <img src="assets/logos/Infosys_logo.svg" alt="Infosys" style="width: 150px; height: 75px; object-fit: contain;">
                    </div>
                    <div class="logo-item">
                        <img src="assets/logos/Meta_Platforms-Logo.wine.svg" alt="Meta" style="width: 150px; height: 75px; object-fit: contain;">
                    </div>
                    <div class="logo-item">
                        <img src="assets/logos/Microsoft-Logo.wine.svg" alt="Microsoft" style="width: 150px; height: 75px; object-fit: contain;">
                    </div>
                    <div class="logo-item">
                        <img src="assets/logos/Tech_Mahindra-Logo.wine.svg" alt="Tech Mahindra" style="width: 150px; height: 75px; object-fit: contain;">
                    </div>
                    <div class="logo-item">
                        <img src="assets/logos/Amazon_(company)-Logo.wine.svg" alt="Amazon" style="width: 150px; height: 75px; object-fit: contain;">
                    </div>
                    <!-- Repeat the same logos for seamless loop -->
                    <div class="logo-item">
                        <img src="assets/logos/Google-Logo.wine.svg" alt="Google" style="width: 150px; height: 75px; object-fit: contain;">
                    </div>
                    <div class="logo-item">
                        <img src="assets/logos/HCL_Technologies-Logo.wine.svg" alt="HCL Technologies" style="width: 150px; height: 75px; object-fit: contain;">
                    </div>
                    <div class="logo-item">
                        <img src="assets/logos/Infosys_logo.svg" alt="Infosys" style="width: 150px; height: 75px; object-fit: contain;">
                    </div>
                    <div class="logo-item">
                        <img src="assets/logos/Meta_Platforms-Logo.wine.svg" alt="Meta" style="width: 150px; height: 75px; object-fit: contain;">
                    </div>
                    <div class="logo-item">
                        <img src="assets/logos/Microsoft-Logo.wine.svg" alt="Microsoft" style="width: 150px; height: 75px; object-fit: contain;">
                    </div>
                    <div class="logo-item">
                        <img src="assets/logos/Tech_Mahindra-Logo.wine.svg" alt="Tech Mahindra" style="width: 150px; height: 75px; object-fit: contain;">
                    </div>
                    <div class="logo-item">
                        <img src="assets/logos/Amazon_(company)-Logo.wine.svg" alt="Amazon" style="width: 150px; height: 75px; object-fit: contain;">
                    </div>
                    <div class="logo-item">
                        <img src="assets/logos/Google-Logo.wine.svg" alt="Google" style="width: 150px; height: 75px; object-fit: contain;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Highest Placements Carousel Section -->
<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold" style="color: #000000; font-size: 2.5rem;">Highest Placements</h2>
            <p class="text-muted">Our students' remarkable achievements</p>
        </div>
        <div id="placementsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#placementsCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#placementsCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#placementsCarousel" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row g-0 align-items-center placement-card">
                        <div class="col-lg-6 placement-image-side">
                            <img src="https://picsum.photos/seed/rahul/600/600.jpg" alt="Rahul Sharma" class="img-fluid placement-image">
                        </div>
                        <div class="col-lg-6 placement-content-side">
                            <div class="placement-content">
                                <div class="placement-header">
                                    <h3 class="placement-name">Rahul Sharma</h3>
                                    <p class="placement-role">Software Engineer</p>
                                </div>
                                <div class="placement-company">
                                    <div class="company-logo">
                                        <img src="assets/logos/Google-Logo.wine.svg" alt="Google" style="width: 60px; height: 60px; object-fit: contain;">
                                    </div>
                                    <div class="company-details">
                                        <h4 class="company-name">Google</h4>
                                        <p class="company-location">Bangalore</p>
                                    </div>
                                </div>
                                <div class="placement-stats">
                                    <div class="stat-item">
                                        <span class="stat-label">Package</span>
                                        <span class="stat-value">₹45 LPA</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-label">Batch</span>
                                        <span class="stat-value">2024</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-label">Role</span>
                                        <span class="stat-value">SDE</span>
                                    </div>
                                </div>
                                <div class="placement-achievement">
                                    <span class="achievement-badge">Highest Package</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row g-0 align-items-center placement-card">
                        <div class="col-lg-6 placement-image-side">
                            <img src="https://picsum.photos/seed/priya/600/600.jpg" alt="Priya Patel" class="img-fluid placement-image">
                        </div>
                        <div class="col-lg-6 placement-content-side">
                            <div class="placement-content">
                                <div class="placement-header">
                                    <h3 class="placement-name">Priya Patel</h3>
                                    <p class="placement-role">Software Developer</p>
                                </div>
                                <div class="placement-company">
                                    <div class="company-logo">
                                        <img src="assets/logos/Microsoft-Logo.wine.svg" alt="Microsoft" style="width: 60px; height: 60px; object-fit: contain;">
                                    </div>
                                    <div class="company-details">
                                        <h4 class="company-name">Microsoft</h4>
                                        <p class="company-location">Hyderabad</p>
                                    </div>
                                </div>
                                <div class="placement-stats">
                                    <div class="stat-item">
                                        <span class="stat-label">Package</span>
                                        <span class="stat-value">₹42 LPA</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-label">Batch</span>
                                        <span class="stat-value">2024</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-label">Role</span>
                                        <span class="stat-value">SDE</span>
                                    </div>
                                </div>
                                <div class="placement-achievement">
                                    <span class="achievement-badge">Top Achiever</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row g-0 align-items-center placement-card">
                        <div class="col-lg-6 placement-image-side">
                            <img src="https://picsum.photos/seed/amit/600/600.jpg" alt="Amit Kumar" class="img-fluid placement-image">
                        </div>
                        <div class="col-lg-6 placement-content-side">
                            <div class="placement-content">
                                <div class="placement-header">
                                    <h3 class="placement-name">Amit Kumar</h3>
                                    <p class="placement-role">Software Engineer</p>
                                </div>
                                <div class="placement-company">
                                    <div class="company-logo">
                                        <img src="assets/logos/Amazon_(company)-Logo.wine.svg" alt="Amazon" style="width: 60px; height: 60px; object-fit: contain;">
                                    </div>
                                    <div class="company-details">
                                        <h4 class="company-name">Amazon</h4>
                                        <p class="company-location">Mumbai</p>
                                    </div>
                                </div>
                                <div class="placement-stats">
                                    <div class="stat-item">
                                        <span class="stat-label">Package</span>
                                        <span class="stat-value">₹38 LPA</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-label">Batch</span>
                                        <span class="stat-value">2023</span>
                                    </div>
                                    <div class="stat-item">
                                        <span class="stat-label">Role</span>
                                        <span class="stat-value">SDE</span>
                                    </div>
                                </div>
                                <div class="placement-achievement">
                                    <span class="achievement-badge">Excellence</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#placementsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#placementsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<?php include 'includes/components/index/testimonials.php'; ?>

<?php include 'includes/Footer.php'; ?>
