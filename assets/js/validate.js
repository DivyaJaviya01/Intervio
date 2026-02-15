$(document).ready(function () {

  function validateInput(input) {
    var field = $(input);
    var value = field.val().trim();
    var errorfield = $("#" + field.attr("name") + "_error");
    // var validationType = field.data("validation");
    var validationType = field.attr("data-validation");
    var minLength = field.data("min") || 0;
    var maxLength = field.data("max") || 9999;
    var numMin = field.data("num-min") || 0;
    var numMax = field.data("num-max") || 99999999999999999;
    var fileSize = field.data("filesize") || 0;
    var fileType = field.data("filetype") || "";
    let errorMessage = "";

    console.log("Validating field:", field.attr("name"), "Value:", value, "Validation:", validationType);

    if (validationType) {
      // Required field validation - ALWAYS CHECK FIRST
      if (validationType.includes("required") && value === "") {
        errorMessage = "This field is required.";
      } else {
        // Only check other validations if field is not empty (or not required)

        // Minimum length validation
        if (validationType.includes("min") && value !== "" && value.length < minLength) {
          errorMessage = `This field must be at least ${minLength} characters long.`;
        }

        // Maximum length validation
        if (validationType.includes("max") && value !== "" && value.length > maxLength) {
          errorMessage = `This field must be at most ${maxLength} characters long.`;
        }

        // Email format validation
        if (validationType.includes("email")) {
          const emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w]{2,4}$/;
          if (!emailRegex.test(value)) {
            errorMessage = "Please enter a valid email address.";
          }
        }

        // URL format validation
        if (validationType.includes("url")) {
          const urlRegex =
            /^(https?:\/\/)?([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,}(\/.*)?$/;
          if (!urlRegex.test(value)) {
            errorMessage = "Please enter a valid URL.";
          }
        }

        // Name only validation (letters and spaces only)
        if (validationType.includes("nameOnly")) {
          const nameRegex = /^[a-zA-Z\s]+$/;
          if (!nameRegex.test(value)) {
            errorMessage = "This field should contain letters and spaces only.";
          }
        }

        // Numeric value validation
        if (validationType.includes("number")) {
          const numberRegex = /^[0-9]+$/;
          if (!numberRegex.test(value)) {
            errorMessage = "Please enter a valid number.";
          } else {
            // Check numeric range if numMin/numMax are specified
            const numValue = parseInt(value);
            if (!isNaN(numValue)) {
              if (numValue < numMin) {
                errorMessage = `Value must be at least ${numMin}.`;
              } else if (numValue > numMax) {
                errorMessage = `Value must be at most ${numMax}.`;
              }
            }
          }
        }

        // Strong password validation (at least 8 chars, 1 upper, 1 lower, 1 number, 1 special)
        if (validationType.includes("strongPassword")) {
          const passwordRegex =
            /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
          if (!passwordRegex.test(value)) {
            errorMessage =
              "Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character.";
          }
        }

        // Password confirmation validation
        if (validationType.includes("confirmPassword")) {
          const originalPassword = $("input[name='password']").val();
          if (value !== originalPassword) {
            errorMessage = "Passwords do not match.";
          }
        }

        // Phone number validation
        if (validationType.includes("phone")) {
          const phoneRegex = /^[\d\s\-\+\(\)]+$/;
          if (value && !phoneRegex.test(value)) {
            errorMessage = "Please enter a valid phone number.";
          }
        }

        // Dropdown selection validation
        if (validationType.includes("select") && value === "") {
          errorMessage = "Please select an option.";
        }

        // File size validation
        if (validationType.includes("fileSize")) {
          const file = field[0].files[0];
          if (file && file.size > fileSize * 1024) {
            errorMessage = `File size must be less than ${fileSize}KB.`;
          }
        }

        if (validationType.includes("fileType")) {
          const file = field[0].files[0];
          const fileExtension = file.name.split(".").pop().toLowerCase();
          const allowedExtensions = fileType
            .split(",")
            .map((ext) => ext.trim().toLowerCase());
          if (!allowedExtensions.includes(fileExtension)) {
            errorMessage = `File type must be ${fileType}.`;
          }
        }
      }

      if (errorMessage) {
        errorfield.text(errorMessage).show();
        field.addClass("is-invalid").removeClass("is-valid");
        errorfield.addClass("small text-danger");
      } else {
        errorfield.text("").hide();
        field.removeClass("is-invalid").addClass("is-valid");
      }
    }
  }
  $("input, textarea, select").on("input change", function () {
    validateInput(this);
  });

  // Add click handler for submit buttons to trigger validation
  $("button[type='submit']").on("click", function (e) {
    const form = $(this).closest("form");
    let isValid = true;

    form.find("input,textarea,select").each(function () {
      validateInput(this);
      let errorfield = $("#" + $(this).attr("name") + "_error");
      if (errorfield.length && errorfield.text().trim() !== "") {
        isValid = false;
      }
    });

    if (!isValid) {
      e.preventDefault();
      // Focus on first invalid field
      form.find("input.is-invalid, textarea.is-invalid, select.is-invalid").first().focus();
    }
  });

  $("form").on("submit", function (e) {
    let isValid = true;
    $(this)
      .find("input,textarea,select")
      .each(function () {
        validateInput(this);
        let errorfield = $("#" + $(this).attr("name") + "_error");
        if (errorfield.length && errorfield.text().trim() !== "") {
          isValid = false;
        }
      });
    if (!isValid) {
      e.preventDefault();
      // Focus on first invalid field
      $(this).find("input.is-invalid, textarea.is-invalid, select.is-invalid").first().focus();
    }
  });
  


});
