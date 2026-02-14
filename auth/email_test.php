<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email Validation Test</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .is-valid {
            border-color: #28a745 !important;
        }
        .is-invalid {
            border-color: #dc3545 !important;
        }
    </style>
</head> 
<body>

<div class="container py-5">
<div class="row justify-content-center">
<div class="col-lg-6">

<div class="card p-4">
<h3 class="text-center mb-4">Email Validation Test Only</h3>

<form id="emailTestForm">
    <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
        <div id="email_error" class="text-danger mt-1" style="display:none;"></div>
    </div>

    <button type="submit" class="btn btn-primary">Test Email</button>
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
    
    console.log("Email Test Form Loaded!");
    
    // Simple email validation only
    $("#email").on("input", function() {
        var value = $(this).val().trim();
        var errorDiv = $("#email_error");
        var emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w]{2,4}$/;
        
        console.log("Email input:", value);
        console.log("Regex test:", emailRegex.test(value));
        console.log("Current classes:", $(this).attr("class"));
        
        if (value === "") {
            console.log("Email is empty - showing required error");
            errorDiv.text("Email is required").show();
            $(this).addClass("is-invalid").removeClass("is-valid");
        } else if (!emailRegex.test(value)) {
            console.log("Email format invalid - showing format error");
            errorDiv.text("Please enter a valid email address").show();
            $(this).addClass("is-invalid").removeClass("is-valid");
        } else {
            console.log("Email format valid - clearing error");
            errorDiv.text("").hide();
            $(this).removeClass("is-invalid").addClass("is-valid");
        }
        
        console.log("Final classes:", $(this).attr("class"));
    });
    
    // Form submission
    $("#emailTestForm").on("submit", function(e) {
        e.preventDefault();
        console.log("Form submitted");
        $("#email").trigger("input");
    });
    
});
</script>

</body>
</html>
