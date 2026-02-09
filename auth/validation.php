<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Initialize variables and error array
$errors = [];
$success_message = '';
$form_data = [];

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Get form data without validation
    $form_data = [
        'full_name' => trim($_POST['full_name'] ?? ''),
        'date_of_birth' => trim($_POST['date_of_birth'] ?? ''),
        'gender' => $_POST['gender'] ?? '',
        'nationality' => trim($_POST['nationality'] ?? ''),
        'category' => $_POST['category'] ?? '',
        'email' => trim($_POST['email'] ?? ''),
        'mobile' => trim($_POST['mobile'] ?? ''),
        'city' => trim($_POST['city'] ?? ''),
        'state' => trim($_POST['state'] ?? ''),
        'country' => trim($_POST['country'] ?? ''),
        'permanent_address' => trim($_POST['permanent_address'] ?? ''),
        'current_address' => trim($_POST['current_address'] ?? ''),
        'enrollment_number' => trim($_POST['enrollment_number'] ?? ''),
        'college' => trim($_POST['college'] ?? ''),
        'course' => trim($_POST['course'] ?? ''),
        'admission_year' => trim($_POST['admission_year'] ?? ''),
        'current_semester' => trim($_POST['current_semester'] ?? ''),
        'cgpa' => trim($_POST['cgpa'] ?? ''),
        'backlogs' => $_POST['backlogs'] ?? '',
        'backlog_count' => trim($_POST['backlog_count'] ?? ''),
        'programming_languages' => trim($_POST['programming_languages'] ?? ''),
        'tools_technologies' => trim($_POST['tools_technologies'] ?? ''),
        'soft_skills' => trim($_POST['soft_skills'] ?? ''),
        'skill_proficiency' => $_POST['skill_proficiency'] ?? '',
        'internship_experience' => $_POST['internship_experience'] ?? '',
        'internship_company' => trim($_POST['internship_company'] ?? ''),
        'internship_role' => trim($_POST['internship_role'] ?? ''),
        'training_programs' => trim($_POST['training_programs'] ?? ''),
        'research_projects' => trim($_POST['research_projects'] ?? ''),
        'project_title' => trim($_POST['project_title'] ?? ''),
        'project_technologies' => trim($_POST['project_technologies'] ?? ''),
        'project_description' => trim($_POST['project_description'] ?? ''),
        'github_link' => trim($_POST['github_link'] ?? ''),
        'live_project_url' => trim($_POST['live_project_url'] ?? ''),
        'certification_name' => trim($_POST['certification_name'] ?? ''),
        'issuing_organization' => trim($_POST['issuing_organization'] ?? ''),
        'completion_year' => trim($_POST['completion_year'] ?? ''),
        'preferred_job_role' => trim($_POST['preferred_job_role'] ?? ''),
        'preferred_industry' => trim($_POST['preferred_industry'] ?? ''),
        'preferred_location' => trim($_POST['preferred_location'] ?? ''),
        'willing_to_relocate' => $_POST['willing_to_relocate'] ?? '',
        'expected_salary' => trim($_POST['expected_salary'] ?? ''),
        'work_type' => $_POST['work_type'] ?? '',
        'gap_year_details' => trim($_POST['gap_year_details'] ?? ''),
        'linkedin_profile' => trim($_POST['linkedin_profile'] ?? ''),
        'other_profiles' => trim($_POST['other_profiles'] ?? ''),
        'terms_accepted' => isset($_POST['terms']) ? 1 : 0
    ];

    // Process registration without validation
    try {
        // Insert data into database (commented out for now)
        /*
        $pdo = new PDO('mysql:host=localhost;dbname=intervio', 'username', 'password');
        $stmt = $pdo->prepare("INSERT INTO students (full_name, email, ...) VALUES (?, ?, ...)");
        $stmt->execute([$form_data['full_name'], $form_data['email'], ...]);
        */
        
        // Set session variables
        session_start();
        $_SESSION['user_logged_in'] = true;
        $_SESSION['user_data'] = $form_data;
        $_SESSION['registration_success'] = true;
        
        // Redirect to success page
        header('Location: registration_success.php');
        exit();
        
    } catch (Exception $e) {
        $errors['general'] = "Registration failed: " . $e->getMessage();
    }
}

// Helper function to get old form value
function get_old_value($field, $default = '') {
    global $form_data;
    return isset($form_data[$field]) ? htmlspecialchars($form_data[$field]) : $default;
}

// Helper function to show error
function show_error($field) {
    global $errors;
    if (isset($errors[$field])) {
        return '<div class="text-danger small mt-1">' . htmlspecialchars($errors[$field]) . '</div>';
    }
    return '';
}

// Helper function to show error class
function error_class($field) {
    global $errors;
    return isset($errors[$field]) ? 'is-invalid' : '';
}
?>
