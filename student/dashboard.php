<?php include 'includes/Header.php'; ?>

<style>
body {
    background: #f1f5f9;
}

/* Main content styling */
.main-content {
    margin-left: 15%;
    width: calc(100% - 15%);
    box-sizing: border-box;
}

.col-md-12 {
    padding-right: 0;
}

/* Hero Card */
.hero-card {
    background: linear-gradient(135deg,#2563eb,#4f46e5);
    color: white;
    border-radius: 20px;
    padding: 30px;
}

/* Profile Image */
.profile-img {
    width: 130px;
    height: 130px;
    border-radius: 50%;
    border: 5px solid white;
}

/* Card Design */
.custom-card {
    border-radius: 18px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.05);
}

/* Timeline */
.timeline-item {
    border-left: 3px solid #2563eb;
    padding-left: 15px;
    margin-bottom: 15px;
}
</style>

<div class="container-fluid">
<div class="row">

<?php include 'includes/sidebar.php'; ?>

<!-- MAIN CONTENT -->
<div class="col-md-10 p-4 main-content">

    <!-- HERO SECTION -->
    <div class="hero-card mb-4">
        <div class="row align-items-center">

            <div class="col-md-2 text-center">
                <img src="../assets/images/woman.jpg" class="profile-img">
            </div>

            <div class="col-md-7">
                <h3 class="fw-bold">Krisha Akbari</h3>
                <p class="mb-1">Full Stack Developer | Final Year Student</p>
                <p class="mb-1">Silver Oak University</p>

                <span class="badge bg-light text-dark">CGPA 8.6</span>
                <span class="badge bg-success">Placement Ready</span>
                <span class="badge bg-warning text-dark">Top 10% Batch</span>

                <div class="mt-3">
                    <i class="bi bi-github me-3"></i>
                    <i class="bi bi-linkedin me-3"></i>
                    <i class="bi bi-globe"></i>
                </div>
            </div>

            <div class="col-md-3 text-end">
                <h5>Placement Score</h5>
                <h2 class="fw-bold">92%</h2>
                <button class="btn btn-light btn-sm">View Analytics</button>
            </div>

        </div>
    </div>

    <!-- CAREER OBJECTIVE -->
    <div class="card custom-card p-4 mb-4">
        <h5 class="fw-bold">Career Objective</h5>
        <p>
            Motivated computer science student seeking opportunities in 
            full-stack development where I can contribute to scalable web applications 
            and enhance system performance.
        </p>
    </div>

    <!-- ACHIEVEMENTS -->
    <div class="card custom-card p-4 mb-4">
        <h5 class="fw-bold">Achievements & Highlights</h5>
        <ul>
            <li>🏆 Winner – National Level Hackathon 2025</li>
            <li>📈 Improved project performance by 40%</li>
            <li>🎖 Completed 5+ industry certifications</li>
            <li>💡 Built 10+ real-world applications</li>
        </ul>
    </div>

    <!-- PLACEMENT ANALYTICS -->
    <div class="card custom-card p-4 mb-4">
        <h5 class="fw-bold">Placement Analytics</h5>
        <div class="row text-center">
            <div class="col-md-3">
                <h4>8</h4>
                <p>Drives Attended</p>
            </div>
            <div class="col-md-3">
                <h4>4</h4>
                <p>Technical Rounds Cleared</p>
            </div>
            <div class="col-md-3">
                <h4>2</h4>
                <p>HR Rounds Cleared</p>
            </div>
            <div class="col-md-3">
                <h4>1</h4>
                <p>Offers Received</p>
            </div>
        </div>
    </div>

    <!-- ACTIVITY TIMELINE -->
    <div class="card custom-card p-4">
        <h5 class="fw-bold">Recent Activity</h5>

        <div class="timeline-item">
            <strong>Applied to TCS Digital</strong>
            <p>Jan 2026</p>
        </div>

        <div class="timeline-item">
            <strong>Shortlisted for Infosys</strong>
            <p>Dec 2025</p>
        </div>

        <div class="timeline-item">
            <strong>Completed Web Developer Internship</strong>
            <p>Nov 2025</p>
        </div>
    </div>

</div>
</div>
</div>

<?php include 'includes/Footer.php'; ?>
