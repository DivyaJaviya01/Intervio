<?php include 'includes/Header.php'; ?>

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<style>

body{
    background:#f4f6f9;
    font-family: 'Segoe UI', sans-serif;
}

/* Main content offset for fixed sidebar */
.col-md-10 {
    margin-left: 16.666667%;
}

/* Hero Section */
.hero{
    background:linear-gradient(135deg,#4f46e5,#3b82f6);
    color:white;
    border-radius:20px;
    padding:30px;
}

.profile-img{
    width:130px;
    height:130px;
    border-radius:50%;
    border:5px solid white;
    object-fit:cover;
}

.edit-icon{
    position:absolute;
    bottom:10px;
    right:10px;
    background:white;
    border-radius:50%;
    padding:6px;
    font-size:14px;
    cursor:pointer;
}

/* Card Style */
.custom-card{
    border-radius:15px;
    box-shadow:0 6px 15px rgba(0,0,0,0.05);
}

/* Skill Chips */
.skill-chip{
    background:#e0e7ff;
    color:#3730a3;
    padding:6px 12px;
    border-radius:20px;
    display:inline-block;
    margin:5px;
    font-size:14px;
}

</style>
</head>

<body>

<div class="container-fluid">
<div class="row">

<?php include 'includes/sidebar.php'; ?>

<!-- MAIN CONTENT -->
<div class="col-md-10 p-4 main-content">

    <!-- HERO SECTION -->
    <div class="hero mb-4">
        <div class="row align-items-center">

            <div class="col-md-3 text-center position-relative">
                <img src="https://via.placeholder.com/130" class="profile-img">
                <i class="bi bi-pencil-fill edit-icon"></i>
            </div>

            <div class="col-md-6">
                <h3 class="fw-bold">Krisha Akbari</h3>
                <p class="mb-1">Enrollment No: 22CS045</p>
                <p class="mb-1">B.Tech Computer Science | Final Year</p>
                <p class="mb-2">CGPA: 8.6</p>

                <span class="badge bg-success">Eligible for Placement</span>
                <span class="badge bg-warning text-dark">Admin Approved</span>
            </div>

            <div class="col-md-3 text-md-end mt-3 mt-md-0">
                <button class="btn btn-light mb-2 w-100">Edit Profile</button>
                <button class="btn btn-outline-light w-100">Download Resume</button>
            </div>

        </div>
    </div>

    <!-- PERSONAL INFORMATION -->
    <div class="card custom-card p-4 mb-4">
        <h5 class="fw-bold mb-3">Personal Information</h5>

        <div class="row">
            <div class="col-md-6 mb-2"><strong>Date of Birth:</strong> 12 Jan 2004</div>
            <div class="col-md-6 mb-2"><strong>Gender:</strong> Female</div>
            <div class="col-md-6 mb-2"><strong>Email:</strong> krisha@gmail.com</div>
            <div class="col-md-6 mb-2"><strong>Contact:</strong> +91 9876543210</div>
            <div class="col-12"><strong>Address:</strong> Ahmedabad, Gujarat</div>
        </div>
    </div>

    <!-- ABOUT SECTION -->
    <div class="card custom-card p-4 mb-4">
        <h5 class="fw-bold mb-3">About Me</h5>
        <p>
            Passionate full stack developer with strong interest in 
            building scalable web applications. Experienced in PHP, 
            MySQL and modern frontend technologies.
        </p>
    </div>

    <!-- SKILLS -->
    <div class="card custom-card p-4 mb-4">
        <h5 class="fw-bold mb-3">Core Skills</h5>

        <div>
            <span class="skill-chip">HTML</span>
            <span class="skill-chip">CSS</span>
            <span class="skill-chip">Bootstrap</span>
            <span class="skill-chip">JavaScript</span>
            <span class="skill-chip">PHP</span>
            <span class="skill-chip">MySQL</span>
        </div>
    </div>

    <!-- PROJECTS -->
    <div class="card custom-card p-4 mb-4">
        <h5 class="fw-bold mb-3">Highlighted Projects</h5>

        <div class="row">

            <div class="col-md-6 mb-3">
                <div class="border rounded p-3">
                    <h6 class="fw-bold">Placement Portal System</h6>
                    <p class="small">Web-based portal for managing placement drives.</p>
                    <span class="badge bg-light text-dark">PHP</span>
                    <span class="badge bg-light text-dark">Bootstrap</span>
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="border rounded p-3">
                    <h6 class="fw-bold">E-Commerce Website</h6>
                    <p class="small">Complete shopping website with payment integration.</p>
                    <span class="badge bg-light text-dark">HTML</span>
                    <span class="badge bg-light text-dark">CSS</span>
                </div>
            </div>

        </div>
    </div>

</div>
</div>
</div>

<?php include 'includes/Footer.php'; ?>
