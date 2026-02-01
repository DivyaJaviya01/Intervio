<?php include 'includes/Header.php'; ?>
<?php include 'includes/Hero.php'; ?>

<!-- Statistics Section -->
<section class="py-5" style="background-color: #D8E4EB;">
    <div class="container">
        <div class="row g-4 mb-3">
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow statistics-card" style="background-color: #FFFFFF; border-radius: 12px; transition: all 0.3s ease;">
                    <div class="card-body text-center py-4">
                        <h2 class="display-3 fw-bold mb-2" style="color: #2D4650;">100+</h2>
                        <p class="mb-0" style="color: #647880; font-size: 1.1rem;">Companies</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow statistics-card" style="background-color: #FFFFFF; border-radius: 12px; transition: all 0.3s ease;">
                    <div class="card-body text-center py-4">
                        <h2 class="display-3 fw-bold mb-2" style="color: #2D4650;">1000+</h2>
                        <p class="mb-0" style="color: #647880; font-size: 1.1rem;">Students Placed</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow statistics-card" style="background-color: #FFFFFF; border-radius: 12px; transition: all 0.3s ease;">
                    <div class="card-body text-center py-4">
                        <h2 class="display-3 fw-bold mb-2" style="color: #2D4650;">500+</h2>
                        <p class="mb-0" style="color: #647880; font-size: 1.1rem;">Interviews Conducted</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow statistics-card" style="background-color: #FFFFFF; border-radius: 12px; transition: all 0.3s ease;">
                    <div class="card-body text-center py-4">
                        <h2 class="display-3 fw-bold mb-2" style="color: #2D4650;">95%</h2>
                        <p class="mb-0" style="color: #647880; font-size: 1.1rem;">Success Rate</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Company Logos Section -->
<section class="py-3" style="background-color: #2D4650;">
    <div class="container-fluid px-5">
        <div class="logo-slider">
            <div class="logo-track-container" style="width: 80vw; margin: 0 auto;">
                <div class="logo-track">
                    <div class="logo-item">
                        <img src="assets/Amazon_(company)-Logo.wine.svg" alt="Amazon" style="width: 150px; height: 75px; object-fit: contain;">
                    </div>
                    <div class="logo-item">
                        <img src="assets/Google-Logo.wine.svg" alt="Google" style="width: 150px; height: 75px; object-fit: contain;">
                    </div>
                    <div class="logo-item">
                        <img src="assets/HCL_Technologies-Logo.wine.svg" alt="HCL Technologies" style="width: 150px; height: 75px; object-fit: contain;">
                    </div>
                    <div class="logo-item">
                        <img src="assets/Infosys_logo.svg" alt="Infosys" style="width: 150px; height: 75px; object-fit: contain;">
                    </div>
                    <div class="logo-item">
                        <img src="assets/Meta_Platforms-Logo.wine.svg" alt="Meta" style="width: 150px; height: 75px; object-fit: contain;">
                    </div>
                    <div class="logo-item">
                        <img src="assets/Microsoft-Logo.wine.svg" alt="Microsoft" style="width: 150px; height: 75px; object-fit: contain;">
                    </div>
                    <div class="logo-item">
                        <img src="assets/Tech_Mahindra-Logo.wine.svg" alt="Tech Mahindra" style="width: 150px; height: 75px; object-fit: contain;">
                    </div>
                    <div class="logo-item">
                        <img src="assets/Amazon_(company)-Logo.wine.svg" alt="Amazon" style="width: 150px; height: 75px; object-fit: contain;">
                    </div>
                    <!-- Repeat the same logos for seamless loop -->
                    <div class="logo-item">
                        <img src="assets/Google-Logo.wine.svg" alt="Google" style="width: 150px; height: 75px; object-fit: contain;">
                    </div>
                    <div class="logo-item">
                        <img src="assets/HCL_Technologies-Logo.wine.svg" alt="HCL Technologies" style="width: 150px; height: 75px; object-fit: contain;">
                    </div>
                    <div class="logo-item">
                        <img src="assets/Infosys_logo.svg" alt="Infosys" style="width: 150px; height: 75px; object-fit: contain;">
                    </div>
                    <div class="logo-item">
                        <img src="assets/Meta_Platforms-Logo.wine.svg" alt="Meta" style="width: 150px; height: 75px; object-fit: contain;">
                    </div>
                    <div class="logo-item">
                        <img src="assets/Microsoft-Logo.wine.svg" alt="Microsoft" style="width: 150px; height: 75px; object-fit: contain;">
                    </div>
                    <div class="logo-item">
                        <img src="assets/Tech_Mahindra-Logo.wine.svg" alt="Tech Mahindra" style="width: 150px; height: 75px; object-fit: contain;">
                    </div>
                    <div class="logo-item">
                        <img src="assets/Amazon_(company)-Logo.wine.svg" alt="Amazon" style="width: 150px; height: 75px; object-fit: contain;">
                    </div>
                    <div class="logo-item">
                        <img src="assets/Google-Logo.wine.svg" alt="Google" style="width: 150px; height: 75px; object-fit: contain;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.statistics-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(45, 70, 80, 0.15) !important;
}
    
/* Logo Slider Animation */
.logo-slider {
    overflow: hidden;
    width: 100%;
    position: relative;
}

.logo-track-container {
    width: 90vw;
    margin: 0 auto;
    overflow: hidden;
    position: relative;
}

.logo-track-container::before,
.logo-track-container::after {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    width: 40px;
    z-index: 1;
    pointer-events: none;
}

.logo-track-container::before {
    left: 0;
    background: linear-gradient(to right, #2D4650 0%, transparent 100%);
}

.logo-track-container::after {
    right: 0;
    background: linear-gradient(to left, #2D4650 0%, transparent 100%);
}

.logo-track {
    display: flex;
    width: calc(150px * 16);
    animation: scroll 20s linear infinite;
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
        transform: translateX(calc(-150px * 8));
    }
}

/* Pause animation on hover */
.logo-slider:hover .logo-track {
    animation-play-state: paused;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .logo-track {
        width: calc(120px * 16);
    }
    
    @keyframes scroll {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(calc(-120px * 8));
        }
    }
    
    .logo-item {
        flex: 0 0 120px;
        margin: 0 10px;
    }
}
</style>

<?php include 'includes/Footer.php'; ?>