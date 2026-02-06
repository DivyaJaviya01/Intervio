<?php
// Header file for Intervio application
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intervio - RK University Placement Portal</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate.css CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts - Montserrat (Clean, modern) -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <style>
        .navbar {
            background-color: #ffffff !important;
            border-bottom: 1px solid #e2e8f0;
            padding: 0.4rem 0 !important;
        }
        .nav-link {
            color: #1e293b !important;
            font-weight: 500;
            margin: 0 12px;
            padding: 8px 4px !important;
            transition: all 0.2s ease;
            position: relative;
        }
        .nav-link:hover {
            color: #3b82f6 !important;
        }
        .nav-link.active {
            color: #3b82f6 !important;
        }
        .nav-link.active:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #3b82f6;
            opacity: 0.8;
        }
        .navbar-brand {
            color: #1e293b !important;
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 1.8rem;
            letter-spacing: 0.5px;
            padding: 0;
            line-height: 1.2;
        }
        .btn-login {
            background-color: transparent;
            color: #1e293b;
            border: 2px solid #1e293b;
            font-weight: 500;
            border-radius: 6px;
            padding: 8px 20px;
            transition: all 0.2s ease;
            font-size: 0.95rem;
        }
        .btn-login:hover {
            background-color: #000000ff;
            color: #FFFFFF;
            border-color: #1e293b;
        }
        .btn-signup {
            background-color: #000000ff;
            color: #FFFFFF;
            font-weight: 500;
            border-radius: 6px;
            padding: 8px 20px;
            transition: all 0.2s ease;
            font-size: 0.95rem;
        }
        .btn-signup:hover {
            background-color: #2563eb;
            color: #FFFFFF;
            border-color: #2563eb;
        }
        .navbar-toggler {
            border: 1px solid #e2e8f0;
            padding: 4px 8px;
        }
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='%231e293b' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
        /* Mobile dropdown adjustments */
        .navbar-nav .nav-item {
            margin: 2px 0;
        }
    </style>
    

</head>
<body class="d-flex flex-column min-vh-100 " style="margin: 0 4rem ;"> 
    <!-- White Header -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid px-5">
            <!-- Left: Website Name -->
            <a class="navbar-brand" href="index.php">Intervio</a>
            
            <!-- Mobile Hamburger Menu -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Center: Navigation Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto ">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="drives.php">Drives</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="preparation.php">Preparation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aptitude.php">Aptitude</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                
                <!-- Right: Action Buttons -->
                <div class="d-flex ">
                    <a href="auth/login.php" class="btn btn-login me-2">Login</a>
                    <a href="auth/register.php" class="btn btn-signup">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>

