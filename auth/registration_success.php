<?php
// Check if user is coming from registration (PHP session check)
$from_php_session = false;
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['registration_success']) && $_SESSION['registration_success']) {
    $from_php_session = true;
    $user_data = $_SESSION['user_data'] ?? [];
    unset($_SESSION['registration_success']);
    unset($_SESSION['user_data']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful | Placement Portal</title>
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #4f46e5;
            --primary-dark: #4338ca;
            --secondary-color: #06b6d4;
            --success-color: #10b981;
            --light-bg: #f8fafc;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .success-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            padding: 60px 40px;
            text-align: center;
            max-width: 600px;
            width: 100%;
            animation: fadeInUp 0.8s ease;
            position: relative;
            overflow: hidden;
        }

        .success-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, var(--success-color), var(--secondary-color));
            animation: slideIn 1s ease;
        }

        .success-icon {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, var(--success-color), #059669);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            animation: scaleIn 0.5s ease 0.3s;
            box-shadow: 0 10px 25px rgba(16, 185, 129, 0.3);
        }

        .success-icon i {
            font-size: 3rem;
            color: white;
        }

        .success-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 15px;
            animation: fadeInUp 0.8s ease 0.2s;
        }

        .success-message {
            font-size: 1.1rem;
            color: #64748b;
            margin-bottom: 30px;
            line-height: 1.6;
            animation: fadeInUp 0.8s ease 0.4s;
        }

        .user-info {
            background: linear-gradient(135deg, rgba(79, 70, 229, 0.05), rgba(6, 182, 212, 0.05));
            border-radius: 15px;
            padding: 25px;
            margin: 30px 0;
            border-left: 4px solid var(--primary-color);
            animation: fadeInUp 0.8s ease 0.6s;
        }

        .info-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #e2e8f0;
        }

        .info-item:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .info-label {
            font-weight: 600;
            color: #475569;
            font-size: 0.9rem;
        }

        .info-value {
            color: var(--primary-color);
            font-weight: 500;
        }

        .action-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-top: 30px;
            animation: fadeInUp 0.8s ease 0.8s;
        }

        .btn-primary-custom {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            border: none;
            border-radius: 10px;
            padding: 12px 30px;
            font-weight: 600;
            font-size: 1rem;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(79, 70, 229, 0.3);
        }

        .btn-primary-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(79, 70, 229, 0.4);
            background: linear-gradient(135deg, var(--primary-dark), var(--primary-color));
        }

        .btn-secondary-custom {
            background: #f1f5f9;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 12px 30px;
            font-weight: 500;
            font-size: 1rem;
            color: #64748b;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn-secondary-custom:hover {
            background: #e2e8f0;
            color: #475569;
            transform: translateY(-1px);
        }

        .next-steps {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(6, 182, 212, 0.1));
            border-radius: 15px;
            padding: 25px;
            margin-top: 30px;
            animation: fadeInUp 0.8s ease 1s;
        }

        .next-steps h4 {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 15px;
        }

        .next-steps p {
            color: #64748b;
            margin-bottom: 10px;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes scaleIn {
            from {
                opacity: 0;
                transform: scale(0.5);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes slideIn {
            from {
                transform: scaleX(0);
            }
            to {
                transform: scaleX(1);
            }
        }

        @media (max-width: 768px) {
            .success-container {
                padding: 40px 20px;
            }
            
            .success-title {
                font-size: 2rem;
            }
            
            .action-buttons {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="success-container">
        <div class="success-icon">
            <i class="bi bi-check-lg"></i>
        </div>
        
        <h1 class="success-title">Registration Successful!</h1>
        <p class="success-message">
            Congratulations! Your account has been successfully created and you are now part of our placement portal.
        </p>
        
        <div class="user-info" id="userInfo">
            <div class="info-item">
                <span class="info-label">Username:</span>
                <span class="info-value" id="displayUsername">Student</span>
            </div>
            <div class="info-item">
                <span class="info-label">Email:</span>
                <span class="info-value" id="displayEmail">student@example.com</span>
            </div>
            <div class="info-item">
                <span class="info-label">Account Status:</span>
                <span class="info-value" style="color: var(--success-color);">Active</span>
            </div>
        </div>
        
        <div class="next-steps">
            <h4><i class="bi bi-arrow-right-circle me-2"></i>What's Next?</h4>
            <p>Your student profile has been automatically created with your registration details.</p>
            <p>You can now access your profile to:</p>
            <ul style="text-align: left; color: #64748b; line-height: 1.8;">
                <li>View and edit your personal information</li>
                <li>Update your academic details and skills</li>
                <li>Browse available placement opportunities</li>
                <li>Track your application status</li>
                <li>Connect with potential employers</li>
            </ul>
        </div>
        
        <div class="action-buttons">
            <a href="../student/profile.php" class="btn-primary-custom" id="profileLink">
                <i class="bi bi-person-fill me-2"></i>Go to My Profile
            </a>
            <a href="../index.php" class="btn-secondary-custom">
                <i class="bi bi-house-fill me-2"></i>Back to Home
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Get user data from sessionStorage or PHP session
        let userData = {};
        
        <?php if ($from_php_session): ?>
        // Data from PHP session
        userData = <?php echo json_encode($user_data); ?>;
        <?php else: ?>
        // Data from sessionStorage (sample form)
        const storedData = sessionStorage.getItem('user_data');
        if (storedData) {
            userData = JSON.parse(storedData);
            // Move sessionStorage data to localStorage for profile page
            localStorage.setItem('user_data', storedData);
            sessionStorage.removeItem('user_data');
            sessionStorage.removeItem('registration_success');
        }
        <?php endif; ?>
        
        // Update display with user data
        function updateUserInfo() {
            const fullName = userData.full_name || userData.fullName || 'Student';
            const email = userData.email || 'student@example.com';
            const username = userData.username || fullName.toLowerCase().replace(/\s+/g, '');
            
            document.getElementById('displayUsername').textContent = username;
            document.getElementById('displayEmail').textContent = email;
            
            // Update profile link with data
            const profileLink = document.getElementById('profileLink');
            profileLink.href = '../student/profile.php?data=' + btoa(JSON.stringify(userData));
        }
        
        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            updateUserInfo();
            
            // Auto-redirect to profile after 10 seconds
            setTimeout(function() {
                window.location.href = '../student/profile.php?data=' + btoa(JSON.stringify(userData));
            }, 10000);
        });
    </script>
</body>
</html>
