<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Student Login - Intervio</title>
    
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #4f46e5;
            --secondary-color: #6366f1;
            --success-color: #10b981;
            --danger-color: #ef4444;
            --light-bg: #f9fafb;
            --card-shadow: 0 8px 20px rgba(0,0,0,0.05);
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }

        .login-container {
            min-height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-card {
            background: white;
            border-radius: 18px;
            box-shadow: var(--card-shadow);
            overflow: hidden;
            max-width: 1000px;
            width: 100%;
            display: flex;
            min-height: 600px;
        }

        .login-left {
            flex: 1;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            /* padding: 40px; */
            text-align: center;
        }

        .login-left h1 {
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .login-left p {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .login-left .features {
            text-align: left;
            max-width: 300px;
        }

        .login-left .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            font-size: 0.95rem;
        }

        .login-left .feature-item i {
            margin-right: 12px;
            font-size: 1.2rem;
        }

        .login-right {
            flex: 1;
            padding: 50px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .login-form {
            max-width: 380px;
            width: 100%;
            margin: 0 auto;
        }

        .login-form h2 {
            font-weight: 700;
            color: #333;
            margin-bottom: 35px;
            text-align: center;
            font-size: 1.8rem;
        }

        .google-login-btn {
            width: 100%;
            background-color: white;
            color: #444;
            border: 1px solid #ddd;
            padding: 12px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 25px;
            transition: all 0.3s ease;
        }

        .google-login-btn:hover {
            background-color: #f5f5f5;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .google-icon {
            width: 18px;
            height: 18px;
        }

        .form-floating {
            margin-bottom: 20px;
        }

        .form-control {
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid #e5e7eb;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(79, 70, 229, 0.25);
        }

        .btn-login {
          margin-top: 20px;
            width: 100%;
            padding: 10px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border: none;
            border-radius: 8px;
            color: white;
            font-weight: 500;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(79, 70, 229, 0.3);
        }

        .error {
            color: var(--danger-color);
            font-size: 0.875rem;
            margin-top: 5px;
            display: none;
        }

        .success {
            color: var(--success-color);
            font-weight: 600;
            margin-top: 10px;
            text-align: center;
            display: none;
        }

        .forgot-password {
            text-align: center;
            margin-top: 20px;
        }

        .forgot-password a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

        .signup-text {
            text-align: center;
            margin-top: 25px;
            color: #6b7280;
        }

        .signup-text a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
        }

        .signup-text a:hover {
            /* text-decoration: underline; */
        }

        .back-home {
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 10;
        }

        .back-home .btn-outline-secondary {
            color: rgba(255, 255, 255, 1);
            border-color: rgba(255, 255, 255, 1);
            padding: 8px 10px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .back-home .btn-outline-secondary:hover {
            background-color: rgba(0, 0, 0, 0.5);
            color: rgba(255, 255, 255, 1);
            transform: translateY(-1px);
        }

        .divider {
            z-index: 1;
            text-align: center;
            margin: 25px 0;
            position: relative;
        }

        .divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: #e5e7eb;
        }

        .divider span {
            background: white;
            padding: 0 15px;
            color: #6b7280;
            font-size: 0.875rem;
        }

        @media (max-width: 768px) {
            .login-card {
                flex-direction: column;
                max-width: 400px;
            }
            
            .login-left {
                padding: 30px 20px;
                min-height: auto;
            }
            
            .login-left h1 {
                font-size: 2rem;
            }
            
            .login-right {
                padding: 30px 20px;
            }
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-card">
            <!-- Left Side -->
            <div class="login-left">
                <div class="back-home">
                    <a href="../index.php" class="btn btn-outline-secondary">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                </div>
                <img src="../assets/images/login_img.jpg" alt="Intervio Login" style="width: 100%; height: 100%; object-fit: cover;">
            </div>

            <!-- Right Side -->
            <div class="login-right">
                <form class="login-form" id="loginForm" novalidate>
                    <h2>Welcome Back</h2>

                    <button type="button" class="google-login-btn" id="googleLoginBtn">
                        <svg class="google-icon" viewBox="0 0 533.5 544.3" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#4285F4" d="M533.5 278.4c0-17.5-1.5-34.5-4.5-51H272v96.9h146.9c-6.3 34.3-25.1 63.3-53.5 82.7v68h86.4c50.7-46.7 80.7-115.5 80.7-196.6z" />
                            <path fill="#34A853" d="M272 544.3c72.7 0 133.8-24 178.3-65.3l-86.4-68c-24 16.1-54.6 25.7-91.8 25.7-70.5 0-130.3-47.5-151.7-111.2h-89v69.8c44.6 88.3 136.2 149 240.7 149z" />
                            <path fill="#FBBC05" d="M120.3 325.5c-10.6-31.7-10.6-65.8 0-97.5v-69.8h-89c-38.3 75.7-38.3 165.5 0 241.2l89-69.8z" />
                            <path fill="#EA4335" d="M272 107.7c39.5 0 75 13.6 103 40.4l77.1-77.1C393.6 24.2 334.5 0 272 0 167.5 0 75.9 60.7 31.3 149l89 69.8c21.3-63.7 81.2-111.1 151.7-111.1z" />
                        </svg>
                        Continue with Google
                    </button>

                    <div class="divider">
                        <span>OR LOGIN WITH EMAIL</span>
                    </div>

                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                        <label for="email">Email address</label>
                        <div class="error" id="emailError"></div>
                    </div>

                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        <label for="password">Password</label>
                        <div class="error" id="passwordError"></div>
                    </div>

                    <div class="forgot-password">
                        <a href="#">Forgot your password?</a>
                    </div>

                    <button type="submit" class="btn btn-login">
                        <i class="fas fa-sign-in-alt me-2"></i>Sign In
                    </button>
                    
                    <div class="success" id="successMsg"></div>
                </form>

                <div class="signup-text">
                    Don't have an account? <a href="../auth/register.php">Create Account</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        const loginForm = document.getElementById('loginForm');
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');
        const emailError = document.getElementById('emailError');
        const passwordError = document.getElementById('passwordError');
        const successMsg = document.getElementById('successMsg');
        const googleLoginBtn = document.getElementById('googleLoginBtn');

        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        function showError(element, message) {
            element.textContent = message;
            element.style.display = 'block';
        }

        function hideError(element) {
            element.textContent = '';
            element.style.display = 'none';
        }

        function showSuccess(message) {
            successMsg.textContent = message;
            successMsg.style.display = 'block';
        }

        function hideSuccess() {
            successMsg.textContent = '';
            successMsg.style.display = 'none';
        }

        loginForm.addEventListener('submit', function (e) {
            e.preventDefault();
            let valid = true;
            hideSuccess();
            hideError(emailError);
            hideError(passwordError);

            const emailVal = emailInput.value.trim();
            const passwordVal = passwordInput.value;

            // Validate email
            if (emailVal === '') {
                showError(emailError, 'Email address is required');
                valid = false;
            } else if (!validateEmail(emailVal)) {
                showError(emailError, 'Please enter a valid email address');
                valid = false;
            }

            // Validate password
            if (passwordVal === '') {
                showError(passwordError, 'Password is required');
                valid = false;
            } else if (passwordVal.length < 6) {
                showError(passwordError, 'Password must be at least 6 characters long');
                valid = false;
            }

            if (valid) {
                showSuccess('Login successful! Redirecting...');
                setTimeout(() => {
                    window.location.href = '../student/dashboard.php';
                }, 1500);
            }
        });

        // Clear errors on input
        emailInput.addEventListener('input', () => {
            hideError(emailError);
            hideSuccess();
        });

        passwordInput.addEventListener('input', () => {
            hideError(passwordError);
            hideSuccess();
        });

        // Google login button click handler (placeholder)
        googleLoginBtn.addEventListener('click', () => {
            alert('Google login clicked! Implement your OAuth here.');
        });
    </script>
</body>

</html>
