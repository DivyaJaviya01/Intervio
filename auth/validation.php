
<?php
$errors = [];
$success = "";

// Variables
$name = $qualification = $address = $email = $contact = $dob = $marks = $enroll = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    function clean($data) {
        return htmlspecialchars(trim($data));
    }

    // Name
    if (empty($_POST['name'])) $errors[] = "Full Name is required";
    else $name = clean($_POST['name']);

    // Enrollment No
    if (empty($_POST['enroll'])) $errors[] = "Enrollment Number is required";
    else $enroll = clean($_POST['enroll']);

    // Email
    if (empty($_POST['email'])) {
        $errors[] = "Email is required";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    } else {
        $email = clean($_POST['email']);
    }

    // Contact
    if (empty($_POST['contact'])) {
        $errors[] = "Contact number is required";
    } elseif (!preg_match("/^[0-9]{10}$/", $_POST['contact'])) {
        $errors[] = "Contact number must be 10 digits";
    } else {
        $contact = clean($_POST['contact']);
    }

    // DOB
    if (empty($_POST['dob'])) $errors[] = "Date of Birth is required";
    else $dob = $_POST['dob'];

    // Qualification
    if (empty($_POST['qualification'])) $errors[] = "Qualification is required";
    else $qualification = clean($_POST['qualification']);

    // Gender
    if (empty($_POST['gender'])) $errors[] = "Gender is required";
    else $gender = clean($_POST['gender']);

    // Marks
    if (empty($_POST['marks'])) $errors[] = "Marks / CGPA is required";
    else $marks = clean($_POST['marks']);

    // Address
    if (empty($_POST['address'])) $errors[] = "Address is required";
    else $address = clean($_POST['address']);

    // Terms & Conditions
    if (!isset($_POST['terms'])) {
        $errors[] = "You must agree to the Terms & Conditions";
    }

    // Final submit
    if (empty($errors)) {
        $success = "🎉 Registration successful! Your form has been submitted.";
    }
}
?>
