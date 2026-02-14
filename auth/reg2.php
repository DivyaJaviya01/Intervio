<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>jQuery Validation Test Form</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head> 
<body>

<div class="container py-5">
<div class="row justify-content-center">
<div class="col-lg-8">

<div class="card p-4">
<h3 class="text-center mb-4">jQuery Validation Test</h3>

<form id="testForm">
    <div class="mb-3">
        <label for="fullName" class="form-label">Full Name (letters only)</label>
        <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter your name">
        <div id="fullName_error" class="text-danger mt-1" style="display:none;"></div>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email (valid email format)</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
        <div id="email_error" class="text-danger mt-1" style="display:none;"></div>
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Phone (numbers only)</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone">
        <div id="phone_error" class="text-danger mt-1" style="display:none;"></div>
    </div>

    <div class="mb-3">
        <label for="age" class="form-label">Age (18-100)</label>
        <input type="number" class="form-control" id="age" name="age" placeholder="Enter your age">
        <div id="age_error" class="text-danger mt-1" style="display:none;"></div>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password (min 8 chars)</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
        <div id="password_error" class="text-danger mt-1" style="display:none;"></div>
    </div>

    <div class="mb-3">
        <label for="confirmPassword" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm password">
        <div id="confirmPassword_error" class="text-danger mt-1" style="display:none;"></div>
    </div>

    <div class="mb-3">
        <label for="country" class="form-label">Country</label>
        <select class="form-select" id="country" name="country">
            <option value="">Select a country</option>
            <option value="usa">United States</option>
            <option value="uk">United Kingdom</option>
            <option value="india">India</option>
            <option value="canada">Canada</option>
        </select>
        <div id="country_error" class="text-danger mt-1" style="display:none;"></div>
    </div>

    <div class="mb-3">
        <label for="message" class="form-label">Message (min 10 chars)</label>
        <textarea class="form-control" id="message" name="message" rows="3" placeholder="Enter your message"></textarea>
        <div id="message_error" class="text-danger mt-1" style="display:none;"></div>
    </div>

    <button type="submit" class="btn btn-primary">Submit Form</button>
</form>

</div>
</div>
</div>
</div>

<!-- Scripts at bottom -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
$(document).ready(function() {
    
    console.log("jQuery Test Form Loaded!");
    
    // Full Name validation - letters only
    $("#fullName").on("input", function() {
        var value = $(this).val().trim();
        var errorDiv = $("#fullName_error");
        
        console.log("Full Name:", value);
        
        if (value === "") {
            errorDiv.text("Full name is required").show();
            $(this).addClass("is-invalid").removeClass("is-valid");
        } else if (/[^a-zA-Z\s]/.test(value)) {
            errorDiv.text("Only letters and spaces are allowed").show();
            $(this).addClass("is-invalid").removeClass("is-valid");
        } else if (value.length < 2) {
            errorDiv.text("Name must be at least 2 characters").show();
            $(this).addClass("is-invalid").removeClass("is-valid");
        } else {
            errorDiv.text("").hide();
            $(this).removeClass("is-invalid").addClass("is-valid");
        }
    });
    
    // Email validation
    $("#email").on("input", function() {
        var value = $(this).val().trim();
        var errorDiv = $("#email_error");
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        
        console.log("Email:", value);
        
        if (value === "") {
            errorDiv.text("Email is required").show();
            $(this).addClass("is-invalid").removeClass("is-valid");
        } else if (!emailRegex.test(value)) {
            errorDiv.text("Please enter a valid email address").show();
            $(this).addClass("is-invalid").removeClass("is-valid");
        } else {
            errorDiv.text("").hide();
            $(this).removeClass("is-invalid").addClass("is-valid");
        }
    });
    
    // Phone validation - numbers only
    $("#phone").on("input", function() {
        var value = $(this).val().trim();
        var errorDiv = $("#phone_error");
        
        console.log("Phone:", value);
        
        if (value === "") {
            errorDiv.text("Phone number is required").show();
            $(this).addClass("is-invalid").removeClass("is-valid");
        } else if (!/^[0-9]+$/.test(value)) {
            errorDiv.text("Only numbers are allowed").show();
            $(this).addClass("is-invalid").removeClass("is-valid");
        } else if (value.length < 10) {
            errorDiv.text("Phone must be at least 10 digits").show();
            $(this).addClass("is-invalid").removeClass("is-valid");
        } else {
            errorDiv.text("").hide();
            $(this).removeClass("is-invalid").addClass("is-valid");
        }
    });
    
    // Age validation
    $("#age").on("input", function() {
        var value = $(this).val().trim();
        var errorDiv = $("#age_error");
        
        console.log("Age:", value);
        
        if (value === "") {
            errorDiv.text("Age is required").show();
            $(this).addClass("is-invalid").removeClass("is-valid");
        } else if (!/^[0-9]+$/.test(value)) {
            errorDiv.text("Only numbers are allowed").show();
            $(this).addClass("is-invalid").removeClass("is-valid");
        } else if (parseInt(value) < 18 || parseInt(value) > 100) {
            errorDiv.text("Age must be between 18 and 100").show();
            $(this).addClass("is-invalid").removeClass("is-valid");
        } else {
            errorDiv.text("").hide();
            $(this).removeClass("is-invalid").addClass("is-valid");
        }
    });
    
    // Password validation
    $("#password").on("input", function() {
        var value = $(this).val().trim();
        var errorDiv = $("#password_error");
        
        console.log("Password:", value);
        
        if (value === "") {
            errorDiv.text("Password is required").show();
            $(this).addClass("is-invalid").removeClass("is-valid");
        } else if (value.length < 8) {
            errorDiv.text("Password must be at least 8 characters").show();
            $(this).addClass("is-invalid").removeClass("is-valid");
        } else {
            errorDiv.text("").hide();
            $(this).removeClass("is-invalid").addClass("is-valid");
        }
        
        // Also revalidate confirm password if it has a value
        if ($("#confirmPassword").val() !== "") {
            $("#confirmPassword").trigger("input");
        }
    });
    
    // Confirm Password validation
    $("#confirmPassword").on("input", function() {
        var value = $(this).val().trim();
        var password = $("#password").val();
        var errorDiv = $("#confirmPassword_error");
        
        console.log("Confirm Password:", value);
        
        if (value === "") {
            errorDiv.text("Please confirm your password").show();
            $(this).addClass("is-invalid").removeClass("is-valid");
        } else if (value !== password) {
            errorDiv.text("Passwords do not match").show();
            $(this).addClass("is-invalid").removeClass("is-valid");
        } else {
            errorDiv.text("").hide();
            $(this).removeClass("is-invalid").addClass("is-valid");
        }
    });
    
    // Country validation
    $("#country").on("change", function() {
        var value = $(this).val();
        var errorDiv = $("#country_error");
        
        console.log("Country:", value);
        
        if (value === "") {
            errorDiv.text("Please select a country").show();
            $(this).addClass("is-invalid").removeClass("is-valid");
        } else {
            errorDiv.text("").hide();
            $(this).removeClass("is-invalid").addClass("is-valid");
        }
    });
    
    // Message validation
    $("#message").on("input", function() {
        var value = $(this).val().trim();
        var errorDiv = $("#message_error");
        
        console.log("Message:", value);
        
        if (value === "") {
            errorDiv.text("Message is required").show();
            $(this).addClass("is-invalid").removeClass("is-valid");
        } else if (value.length < 10) {
            errorDiv.text("Message must be at least 10 characters").show();
            $(this).addClass("is-invalid").removeClass("is-valid");
        } else {
            errorDiv.text("").hide();
            $(this).removeClass("is-invalid").addClass("is-valid");
        }
    });
    
    // Form submission validation
    $("#testForm").on("submit", function(e) {
        console.log("Form submission attempted");
        
        // Trigger validation on all fields
        $("#fullName, #email, #phone, #age, #password, #confirmPassword, #country, #message").trigger("input");
        $("#country").trigger("change");
        
        // Check if any errors exist
        var hasErrors = $(".text-danger:visible").length > 0;
        
        if (hasErrors) {
            console.log("Form has errors - preventing submission");
            e.preventDefault();
            alert("Please fix all errors before submitting");
        } else {
            console.log("Form is valid - allowing submission");
            alert("Form submitted successfully!");
        }
    });
    
});
</body>
</html>
