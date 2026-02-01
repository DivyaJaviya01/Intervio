<?php
// Header file for Intervio application
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intervio - Interview Preparation Platform</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate.css CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
        .navbar {
            background-color: #000000 !important;
            box-shadow: 0 2px 10px rgba(0,0,0,0.5);
        }
        .nav-link {
            font-weight: 600;
            margin: 0 10px;
            position: relative;
            transition: all 0.3s ease;
        }
        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 50%;
            background: #0d6efd;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        .nav-link:hover:after {
            width: 70%;
        }
        .nav-link:hover {
            color: #0d6efd !important;
        }
        .navbar-brand {
            font-weight: 800;
            font-size: 1.8rem;
            letter-spacing: 1px;
        }
        .btn-login {
            background-color: transparent;
            color: white;
            border: 2px solid white;
            font-weight: 600;
            border-radius: 7px;
            padding: 5px 15px;
            transition: all 0.3s ease;
        }
        .btn-login:hover {
            background-color: white;
            color: black;
            transform: translateY(-2px);
        }
        .btn-signup {
            background-color: white;
            color: black;
            font-weight: 600;
            border-radius: 7px;
            padding: 5px 15px;
            transition: all 0.3s ease;
        }
        .btn-signup:hover {
            background-color: #f0f0f0;
            transform: translateY(-2px);
        }
        .navbar-toggler {
            border: 1px solid rgba(255,255,255,0.2);
        }
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.8%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
    </style>
    
    <!-- Auto-repeat headShake animation -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setInterval(function() {
                const brand = document.querySelector('.navbar-brand');
                if (brand) {
                    brand.classList.remove('animate__headShake');
                    // Trigger reflow
                    void brand.offsetWidth;
                    brand.classList.add('animate__headShake');
                }
            }, 4000);
        });
    </script>
</head>
<body class="d-flex flex-column min-vh-100">
    <!-- Enhanced Dark SaaS Header -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="z-index: 1000;">
        <div class="container-fluid px-5">
            <!-- Left: Website Name -->
            <a class="navbar-brand animate__animated animate__headShake" href="index.php">Intervio</a>
            
            <!-- Mobile Hamburger Menu -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Center: Navigation Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Drives</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Preparation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Aptitude</a>
                    </li>
                </ul>
                
                <!-- Right: Action Buttons -->
                <div class="d-flex">
                    <a href="auth/login.php" class="btn btn-login me-2">Login</a>
                    <a href="auth/register.php" class="btn btn-signup">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content Area -->
    <main class="flex-grow-1">