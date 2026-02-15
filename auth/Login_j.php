<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Login with Email & Password Validation</title>
<style>
  * { box-sizing: border-box; }
  body, html { margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; height: 100vh; background: #f0f2f5; }
  .container { display: flex; height: 100vh; width: 100vw; }
  .left-side { flex: 1; background: linear-gradient(135deg, #4c6ef5, #1971c2); color: white; display: flex; flex-direction: column; justify-content: center; padding: 40px; }
  .left-side h1 { font-weight: 700; font-size: 2.5rem; margin-bottom: 20px; }
  .left-side p { font-size: 1.1rem; line-height: 1.5; max-width: 400px; }
  .left-side .cta-button { margin-top: 30px; background: white; color: #1971c2; padding: 12px 25px; font-weight: 600; border: none; border-radius: 30px; cursor: pointer; width: fit-content; transition: background-color 0.3s ease; }
  .left-side .cta-button:hover { background-color: #145ea8; color: white; }

  .right-side { flex: 1; background: white; display: flex; flex-direction: column; justify-content: center; padding: 50px 60px; box-shadow: -5px 0 30px rgba(0,0,0,0.05); }

  .login-form { max-width: 350px; margin: 0 auto; }
  .login-form h2 { margin-bottom: 25px; font-weight: 700; color: #333; }

  /* Google login button */
  .google-login-btn {
    width: 100%;
    background-color: white;
    color: #444;
    border: 1px solid #ddd;
    padding: 12px 0;
    border-radius: 6px;
    font-weight: 600;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    margin-bottom: 20px;
    transition: background-color 0.3s ease;
  }
  .google-login-btn:hover {
    background-color: #f5f5f5;
  }
  /* Google icon style */
  .google-icon {
    width: 18px;
    height: 18px;
  }

  .login-form label { display: block; margin-bottom: 6px; font-weight: 600; color: #555; }
  .login-form input { width: 100%; padding: 12px 10px; margin-bottom: 4px; border-radius: 6px; border: 1px solid #ccc; font-size: 1rem; outline: none; transition: border-color 0.3s ease; }
  .login-form input:focus { border-color: #4c6ef5; box-shadow: 0 0 5px #4c6ef5; }
  .error { color: red; font-size: 0.85rem; height: 18px; margin-bottom: 10px; }
  .success { color: green; font-weight: 600; margin-top: 10px; text-align: center; }

  .login-form button[type="submit"] { width: 100%; padding: 14px; background-color: #4c6ef5; border: none; border-radius: 6px; color: white; font-weight: 700; font-size: 1.1rem; cursor: pointer; margin-top: 10px; transition: background-color 0.3s ease; }
  .login-form button[type="submit"]:hover { background-color: #1971c2; }

  .forgot { margin-top: 12px; text-align: right; }
  .forgot a { color: #4c6ef5; text-decoration: none; font-size: 0.9rem; }
  .forgot a:hover { text-decoration: underline; }

  /* Signup text below form */
  .signup-text {
    margin-top: 20px;
    font-size: 0.9rem;
    text-align: center;
    color: #555;
  }
  .signup-text a {
    color: #4c6ef5;
    text-decoration: none;
    font-weight: 600;
    margin-left: 5px;
  }
  .signup-text a:hover {
    text-decoration: underline;
  }
</style>
</head>
<body>
  <div class="container">
    <div class="left-side">
      <h1>Welcome to Digitops</h1>
      <p>Turn your projects into reality with our all-in-one project management tool.</p>
      <button class="cta-button">Get Started</button>
    </div>
    <div class="right-side">
      <form class="login-form" id="loginForm" novalidate>
        <h2>Welcome Back</h2>

        <button type="button" class="google-login-btn" id="googleLoginBtn">
          <!-- Google SVG Icon -->
          <svg class="google-icon" viewBox="0 0 533.5 544.3" xmlns="http://www.w3.org/2000/svg">
            <path fill="#4285F4" d="M533.5 278.4c0-17.5-1.5-34.5-4.5-51H272v96.9h146.9c-6.3 34.3-25.1 63.3-53.5 82.7v68h86.4c50.7-46.7 80.7-115.5 80.7-196.6z"/>
            <path fill="#34A853" d="M272 544.3c72.7 0 133.8-24 178.3-65.3l-86.4-68c-24 16.1-54.6 25.7-91.8 25.7-70.5 0-130.3-47.5-151.7-111.2h-89v69.8c44.6 88.3 136.2 149 240.7 149z"/>
            <path fill="#FBBC05" d="M120.3 325.5c-10.6-31.7-10.6-65.8 0-97.5v-69.8h-89c-38.3 75.7-38.3 165.5 0 241.2l89-69.8z"/>
            <path fill="#EA4335" d="M272 107.7c39.5 0 75 13.6 103 40.4l77.1-77.1C393.6 24.2 334.5 0 272 0 167.5 0 75.9 60.7 31.3 149l89 69.8c21.3-63.7 81.2-111.1 151.7-111.1z"/>
          </svg>
          Log in with Google
        </button>

        <label for="email">Email address</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" />
        <div class="error" id="emailError"></div>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" />
        <div class="error" id="passwordError"></div>

        <div class="forgot">
          <a href="#">Forgot your password?</a>
        </div>

        <button type="submit">Login</button>
        <div class="success" id="successMsg"></div>
      </form>

      <div class="signup-text">
        Don't have an account? <a href="#">Signup</a>
      </div>
    </div>
  </div>

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

    loginForm.addEventListener('submit', function(e) {
      e.preventDefault();
      let valid = true;
      successMsg.textContent = '';
      emailError.textContent = '';
      passwordError.textContent = '';

      const emailVal = emailInput.value.trim();
      const passwordVal = passwordInput.value;

      // Validate email
      if(emailVal === '') {
        emailError.textContent = 'Email address is required';
        valid = false;
      } else if(!validateEmail(emailVal)) {
        emailError.textContent = 'Please enter a valid email address';
        valid = false;
      }

      // Validate password
      if(passwordVal === '') {
        passwordError.textContent = 'Password is required';
        valid = false;
      } else {
        let passErrors = [];
        if(!/[A-Z]/.test(passwordVal)) passErrors.push('one uppercase letter');
        if(!/[!@#$%^&*(),.?":{}|<>]/.test(passwordVal)) passErrors.push('one special character');
        if(passErrors.length > 0) {
          passwordError.textContent = 'Password must contain at least ' + passErrors.join(' and ');
          valid = false;
        }
      }

      if(valid){
        successMsg.textContent = 'Login successful ✅';
        // Your login logic here
      }
    });

    // Clear errors on input
    emailInput.addEventListener('input', () => {
      emailError.textContent = '';
      successMsg.textContent = '';
    });

    passwordInput.addEventListener('input', () => {
      passwordError.textContent = '';
      successMsg.textContent = '';
    });

    // Google login button click handler (placeholder)
    googleLoginBtn.addEventListener('click', () => {
      alert('Google login clicked! Implement your OAuth here.');
    });
  </script>
</body>
</html>
