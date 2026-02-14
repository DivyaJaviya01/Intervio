<?php

// Include validation logic

require_once 'validation.php';

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Registration | Placement Portal</title>



    <!-- Bootstrap 5 -->
<<<<<<< Updated upstream

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <!-- Google Fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->

    <link rel="stylesheet" href="register.css">

</head>

=======
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
</head> 
>>>>>>> Stashed changes
<body>



<div class="main-container">

<<<<<<< Updated upstream
    <!-- Page Header -->
=======
<!-- ================= PERSONAL INFORMATION ================= -->
<h5>Personal Information</h5>
<div class="section-progress">
    <div class="progress-bar" id="personalProgress" validation="required "></div>
</div>
<div class="row g-3">
    <div class="col-md-6 floating-label">
        <input class="form-control" id="fullName" placeholder=" " name="fullName" data-validation="required nameOnly min" data-min="2">
        <label for="fullName">Full Name</label>
        <div id="fullName_error" class="small text-danger" style="display:none;"></div>
    </div>
    <div class="col-md-6 floating-label">
        <input type="date" class="form-control" id="dob" name="dob" data-validation="required">
        <label for="dob">Date of Birth</label>
        <div id="dob_error" class="small text-danger" style="display:none;"></div>
    </div>
>>>>>>> Stashed changes

    <div class="page-header">

<<<<<<< Updated upstream
        <div class="d-flex justify-content-between align-items-center">

            <div>

                <h1><i class="bi bi-mortarboard-fill me-3"></i>Student Registration</h1>

                <p>Join our placement portal and kickstart your career journey</p>

            </div>

            <div>


            </div>

        </div>

    </div>



    <!-- Success/Error Messages -->

    <?php if (!empty($success_message)): ?>

        <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">

            <i class="bi bi-check-circle-fill me-2"></i>

            <?php echo $success_message; ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>

        </div>

    <?php endif; ?>



    <?php if (!empty($errors['general'])): ?>

        <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">

            <i class="bi bi-exclamation-triangle-fill me-2"></i>

            <?php echo htmlspecialchars($errors['general']); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>

        </div>

    <?php endif; ?>



    <!-- Interactive Progress Bar -->

    <div class="progress-container">

        <div class="progress-bar-custom">

            <div class="progress-fill" id="progressBar"></div>

        </div>

        <div class="progress-steps">

            <div class="progress-line">

                <div class="progress-line-fill" id="progressLine"></div>

            </div>

            <div class="progress-step completed" data-step="1">

                <div class="step-circle">✓</div>

                <div class="step-label">Personal</div>

            </div>

            <div class="progress-step completed" data-step="2">

                <div class="step-circle">✓</div>

                <div class="step-label">Academic</div>

            </div>

            <div class="progress-step completed" data-step="3">

                <div class="step-circle">✓</div>

                <div class="step-label">Skills</div>

            </div>

            <div class="progress-step active" data-step="4">

                <div class="step-circle">4</div>

                <div class="step-label">Experience</div>

            </div>

            <div class="progress-step" data-step="5">

                <div class="step-circle">5</div>

                <div class="step-label">Projects</div>

            </div>

            <div class="progress-step" data-step="6">

                <div class="step-circle">6</div>

                <div class="step-label">Documents</div>

            </div>

        </div>

    </div>



    <form method="POST" action="" enctype="multipart/form-data" novalidate>

        <!-- Personal Information Card -->

        <div class="section-card">

            <div class="section-header">

                <div class="section-icon">

                    <i class="bi bi-person-fill"></i>

                </div>

                <h2 class="section-title">Personal Information</h2>

            </div>

            <div class="row g-3">

                <div class="col-md-6">

                    <label class="form-label">Full Name *</label>

                    <input type="text" name="full_name" class="form-control <?php echo error_class('full_name'); ?>" 

                           value="<?php echo get_old_value('full_name'); ?>" placeholder="Enter your full name" required>

                    <?php echo show_error('full_name'); ?>

                </div>

                <div class="col-md-6">

                    <label class="form-label">Date of Birth *</label>

                    <input type="date" name="date_of_birth" class="form-control <?php echo error_class('date_of_birth'); ?>" 

                           value="<?php echo get_old_value('date_of_birth'); ?>" required>

                    <?php echo show_error('date_of_birth'); ?>

                </div>



                <div class="col-md-4">

                    <label class="form-label">Gender *</label>

                    <div class="d-flex gap-3 mt-2">

                        <div class="form-check">

                            <input class="form-check-input" type="radio" id="gender-male" name="gender" value="male" 

                                   <?php echo (get_old_value('gender') === 'male') ? 'checked' : ''; ?> required>

                            <label class="form-check-label" for="gender-male">Male</label>

                        </div>

                        <div class="form-check">

                            <input class="form-check-input" type="radio" id="gender-female" name="gender" value="female"

                                   <?php echo (get_old_value('gender') === 'female') ? 'checked' : ''; ?>>

                            <label class="form-check-label" for="gender-female">Female</label>

                        </div>

                        <div class="form-check">

                            <input class="form-check-input" type="radio" id="gender-other" name="gender" value="other"

                                   <?php echo (get_old_value('gender') === 'other') ? 'checked' : ''; ?>>

                            <label class="form-check-label" for="gender-other">Other</label>

                        </div>

                    </div>

                    <?php echo show_error('gender'); ?>

                </div>



                <div class="col-md-4">

                    <label class="form-label">Nationality *</label>

                    <input type="text" name="nationality" class="form-control <?php echo error_class('nationality'); ?>" 

                           value="<?php echo get_old_value('nationality'); ?>" placeholder="Enter nationality" required>

                    <?php echo show_error('nationality'); ?>

                </div>

                <div class="col-md-4">

                    <label class="form-label">Category *</label>

                    <select name="category" class="form-select <?php echo error_class('category'); ?>" required>

                        <option value="">Select Category</option>

                        <option value="general" <?php echo (get_old_value('category') === 'general') ? 'selected' : ''; ?>>General</option>

                        <option value="obc" <?php echo (get_old_value('category') === 'obc') ? 'selected' : ''; ?>>OBC</option>

                        <option value="sc" <?php echo (get_old_value('category') === 'sc') ? 'selected' : ''; ?>>SC</option>

                        <option value="st" <?php echo (get_old_value('category') === 'st') ? 'selected' : ''; ?>>ST</option>

                    </select>

                    <?php echo show_error('category'); ?>

                </div>



                <div class="col-md-6">

                    <label class="form-label">Email Address *</label>

                    <input type="email" name="email" class="form-control <?php echo error_class('email'); ?>" 

                           value="<?php echo get_old_value('email'); ?>" placeholder="your.email@example.com" required>

                    <?php echo show_error('email'); ?>

                </div>

                <div class="col-md-6">

                    <label class="form-label">Mobile Number *</label>

                    <div class="input-group">

                        <span class="input-group-text">+91</span>

                        <input type="text" name="mobile" class="form-control <?php echo error_class('mobile'); ?>" 

                               value="<?php echo get_old_value('mobile'); ?>" placeholder="Enter Your Number" maxlength="10" required>

                    </div>

                    <?php echo show_error('mobile'); ?>

                </div>



                <div class="col-md-4">

                    <label class="form-label">City *</label>

                    <input type="text" name="city" class="form-control <?php echo error_class('city'); ?>" 

                           value="<?php echo get_old_value('city'); ?>" placeholder="Enter city" required>

                    <?php echo show_error('city'); ?>

                </div>

                <div class="col-md-4">

                    <label class="form-label">State *</label>

                    <input type="text" name="state" class="form-control <?php echo error_class('state'); ?>" 

                           value="<?php echo get_old_value('state'); ?>" placeholder="Enter state" required>

                    <?php echo show_error('state'); ?>

                </div>

                <div class="col-md-4">

                    <label class="form-label">Country *</label>

                    <input type="text" name="country" class="form-control <?php echo error_class('country'); ?>" 

                           value="<?php echo get_old_value('country'); ?>" placeholder="Enter country" required>

                    <?php echo show_error('country'); ?>

                </div>

                <div class="col-md-6">

                    <label class="form-label">Permanent Address *</label>

                    <textarea name="permanent_address" class="form-control <?php echo error_class('permanent_address'); ?>" 

                              placeholder="Enter permanent address" rows="3" required><?php echo get_old_value('permanent_address'); ?></textarea>

                    <?php echo show_error('permanent_address'); ?>

                </div>

                <div class="col-md-6">

                    <label class="form-label">Current Address</label>

                    <textarea name="current_address" class="form-control" 

                              placeholder="Enter current address" rows="3"><?php echo get_old_value('current_address'); ?></textarea>

                </div>

            </div>

        </div>



        <!-- Academic Information Card -->

        <div class="section-card">

            <div class="section-header">

                <div class="section-icon">

                    <i class="bi bi-book-fill"></i>

                </div>

                <h2 class="section-title">Academic Information</h2>

            </div>

            <div class="row g-3">

                <div class="col-md-4">

                    <label class="form-label">Enrollment Number *</label>

                    <input type="text" name="enrollment_number" class="form-control <?php echo error_class('enrollment_number'); ?>" 

                           value="<?php echo get_old_value('enrollment_number'); ?>" placeholder="Enter enrollment number" required>

                    <?php echo show_error('enrollment_number'); ?>

                </div>

                <div class="col-md-4">

                    <label class="form-label">College / University *</label>

                    <input type="text" name="college" class="form-control <?php echo error_class('college'); ?>" 

                           value="<?php echo get_old_value('college'); ?>" placeholder="Enter institution name" required>

                    <?php echo show_error('college'); ?>

                </div>

                <div class="col-md-4">

                    <label class="form-label">Course / Branch *</label>

                    <input type="text" name="course" class="form-control <?php echo error_class('course'); ?>" 

                           value="<?php echo get_old_value('course'); ?>" placeholder="Enter course/branch" required>

                    <?php echo show_error('course'); ?>

                </div>



                <div class="col-md-4">

                    <label class="form-label">Admission Year *</label>

                    <input type="number" name="admission_year" class="form-control <?php echo error_class('admission_year'); ?>" 

                           value="<?php echo get_old_value('admission_year'); ?>" placeholder="YYYY" min="2000" max="<?php echo date('Y'); ?>" required>

                    <?php echo show_error('admission_year'); ?>

                </div>

                <div class="col-md-4">

                    <label class="form-label">Current Semester *</label>

                    <input type="number" name="current_semester" class="form-control <?php echo error_class('current_semester'); ?>" 

                           value="<?php echo get_old_value('current_semester'); ?>" placeholder="Enter semester" min="1" max="10" required>

                    <?php echo show_error('current_semester'); ?>

                </div>

                <div class="col-md-4">

                    <label class="form-label">CGPA / Percentage *</label>

                    <input type="number" name="cgpa" class="form-control <?php echo error_class('cgpa'); ?>" 

                           value="<?php echo get_old_value('cgpa'); ?>" placeholder="Enter CGPA or %" step="0.01" min="0" max="10" required>

                    <?php echo show_error('cgpa'); ?>

                </div>



                <div class="col-md-4">

                    <label class="form-label">Backlogs *</label>

                    <select name="backlogs" class="form-select <?php echo error_class('backlogs'); ?>" required>

                        <option value="">Do you have backlogs?</option>

                        <option value="no" <?php echo (get_old_value('backlogs') === 'no') ? 'selected' : ''; ?>>No</option>

                        <option value="yes" <?php echo (get_old_value('backlogs') === 'yes') ? 'selected' : ''; ?>>Yes</option>

                    </select>

                    <?php echo show_error('backlogs'); ?>

                </div>

                <div class="col-md-4">

                    <label class="form-label">Backlog Count</label>

                    <input type="number" name="backlog_count" class="form-control <?php echo error_class('backlog_count'); ?>" 

                           value="<?php echo get_old_value('backlog_count'); ?>" placeholder="Number of backlogs" min="0">

                    <?php echo show_error('backlog_count'); ?>

                </div>

            </div>

        </div>



        <!-- Skills Card -->

        <div class="section-card">

            <div class="section-header">

                <div class="section-icon">

                    <i class="bi bi-code-slash"></i>

                </div>

                <h2 class="section-title">Skills & Expertise</h2>

            </div>

            <div class="row g-3">

                <div class="col-md-6">

                    <label class="form-label">Programming Languages *</label>

                    <input type="text" name="programming_languages" class="form-control <?php echo error_class('programming_languages'); ?>" 

                           value="<?php echo get_old_value('programming_languages'); ?>" placeholder="e.g., Python, Java, C++" required>

                    <?php echo show_error('programming_languages'); ?>

                </div>

                <div class="col-md-6">

                    <label class="form-label">Tools & Technologies</label>

                    <input type="text" name="tools_technologies" class="form-control" 

                           value="<?php echo get_old_value('tools_technologies'); ?>" placeholder="e.g., Git, Docker, AWS">

                </div>

                <div class="col-md-6">

                    <label class="form-label">Soft Skills</label>

                    <input type="text" name="soft_skills" class="form-control" 

                           value="<?php echo get_old_value('soft_skills'); ?>" placeholder="e.g., Communication, Leadership">

                </div>

                <div class="col-md-6">

                    <label class="form-label">Skill Proficiency Level *</label>

                    <select name="skill_proficiency" class="form-select <?php echo error_class('skill_proficiency'); ?>" required>

                        <option value="">Select proficiency level</option>

                        <option value="beginner" <?php echo (get_old_value('skill_proficiency') === 'beginner') ? 'selected' : ''; ?>>Beginner</option>

                        <option value="intermediate" <?php echo (get_old_value('skill_proficiency') === 'intermediate') ? 'selected' : ''; ?>>Intermediate</option>

                        <option value="advanced" <?php echo (get_old_value('skill_proficiency') === 'advanced') ? 'selected' : ''; ?>>Advanced</option>

                    </select>

                    <?php echo show_error('skill_proficiency'); ?>

                </div>

            </div>

        </div>



        <!-- Experience Details Card -->

        <div class="section-card">

            <div class="section-header">

                <div class="section-icon">

                    <i class="bi bi-briefcase-fill"></i>

                </div>

                <h2 class="section-title">Experience Details</h2>

            </div>

            <div class="row g-3">

                <div class="col-md-4">

                    <label class="form-label">Internship Experience *</label>

                    <select name="internship_experience" class="form-select <?php echo error_class('internship_experience'); ?>" required>

                        <option value="">Internship experience?</option>

                        <option value="no" <?php echo (get_old_value('internship_experience') === 'no') ? 'selected' : ''; ?>>No</option>

                        <option value="yes" <?php echo (get_old_value('internship_experience') === 'yes') ? 'selected' : ''; ?>>Yes</option>

                    </select>

                    <?php echo show_error('internship_experience'); ?>

                </div>

                <div class="col-md-4">

                    <label class="form-label">Internship Company</label>

                    <input type="text" name="internship_company" class="form-control <?php echo error_class('internship_company'); ?>" 

                           value="<?php echo get_old_value('internship_company'); ?>" placeholder="Company name">

                    <?php echo show_error('internship_company'); ?>

                </div>

                <div class="col-md-4">

                    <label class="form-label">Role / Duration</label>

                    <input type="text" name="internship_role" class="form-control <?php echo error_class('internship_role'); ?>" 

                           value="<?php echo get_old_value('internship_role'); ?>" placeholder="Role and duration">

                    <?php echo show_error('internship_role'); ?>

                </div>



                <div class="col-md-6">

                    <label class="form-label">Training Programs / Workshops</label>

                    <input type="text" name="training_programs" class="form-control" 

                           value="<?php echo get_old_value('training_programs'); ?>" placeholder="List relevant programs">

                </div>

                <div class="col-md-6">

                    <label class="form-label">Research Projects (optional)</label>

                    <input type="text" name="research_projects" class="form-control" 

                           value="<?php echo get_old_value('research_projects'); ?>" placeholder="Project details">

                </div>

            </div>

        </div>



        <!-- Projects & Portfolio Card -->

        <div class="section-card">

            <div class="section-header">

                <div class="section-icon">

                    <i class="bi bi-folder-fill"></i>

                </div>

                <h2 class="section-title">Projects & Portfolio</h2>

            </div>

            <div class="row g-3">

                <div class="col-md-6">

                    <label class="form-label">Project Title *</label>

                    <input type="text" name="project_title" class="form-control <?php echo error_class('project_title'); ?>" 

                           value="<?php echo get_old_value('project_title'); ?>" placeholder="Enter project title" required>

                    <?php echo show_error('project_title'); ?>

                </div>

                <div class="col-md-6">

                    <label class="form-label">Technologies Used *</label>

                    <input type="text" name="project_technologies" class="form-control <?php echo error_class('project_technologies'); ?>" 

                           value="<?php echo get_old_value('project_technologies'); ?>" placeholder="Technologies used" required>

                    <?php echo show_error('project_technologies'); ?>

                </div>

                <div class="col-md-12">

                    <label class="form-label">Project Description *</label>

                    <textarea name="project_description" class="form-control <?php echo error_class('project_description'); ?>" 

                              placeholder="Describe your project" rows="3" required><?php echo get_old_value('project_description'); ?></textarea>

                    <?php echo show_error('project_description'); ?>

                </div>

                <div class="col-md-6">

                    <label class="form-label">GitHub / Portfolio Link</label>

                    <input type="url" name="github_link" class="form-control" 

                           value="<?php echo get_old_value('github_link'); ?>" placeholder="https://github.com/username">

                </div>

                <div class="col-md-6">

                    <label class="form-label">Live Project URL (optional)</label>

                    <input type="url" name="live_project_url" class="form-control" 

                           value="<?php echo get_old_value('live_project_url'); ?>" placeholder="https://project-demo.com">

                </div>

            </div>

        </div>



        <!-- Certifications Card -->

        <div class="section-card">

            <div class="section-header">

                <div class="section-icon">

                    <i class="bi bi-award-fill"></i>

                </div>

                <h2 class="section-title">Certifications</h2>

            </div>

            <div class="row g-3">

                <div class="col-md-4">

                    <label class="form-label">Certification Name</label>

                    <input class="form-control" placeholder="Certification title">

                </div>

                <div class="col-md-4">

                    <label class="form-label">Issuing Organization</label>

                    <input class="form-control" placeholder="Organization name">

                </div>

                <div class="col-md-4">

                    <label class="form-label">Year of Completion</label>

                    <input class="form-control" placeholder="YYYY">

                </div>

                <div class="col-md-12">

                    <label class="form-label">Upload Certificate</label>

                    <input type="file" class="form-control" accept=".pdf,.jpg,.png">

                </div>

            </div>

        </div>



        <!-- Resume & Documents Card -->

        <div class="section-card">

            <div class="section-header">

                <div class="section-icon">

                    <i class="bi bi-file-earmark-text-fill"></i>

                </div>

                <h2 class="section-title">Resume & Documents</h2>

            </div>

            <div class="row g-3">

                <div class="col-md-6">

                    <label class="form-label">Resume/CV</label>

                    <input type="file" class="form-control" accept=".pdf,.doc,.docx">

                </div>

                <div class="col-md-6">

                    <label class="form-label">Cover Letter</label>

                    <input type="file" class="form-control" accept=".pdf,.doc,.docx">

                </div>

                <div class="col-md-6">

                    <label class="form-label">Academic Transcripts</label>

                    <input type="file" class="form-control" accept=".pdf,.jpg,.png">

                </div>

                <div class="col-md-6">

                    <label class="form-label">ID Proof</label>

                    <input type="file" class="form-control" accept=".pdf,.jpg,.png">

                </div>

            </div>

        </div>



        <!-- Placement Preferences Card -->

        <div class="section-card">

            <div class="section-header">

                <div class="section-icon">

                    <i class="bi bi-geo-alt-fill"></i>

                </div>

                <h2 class="section-title">Placement Preferences</h2>

            </div>

            <div class="row g-3">

                <div class="col-md-4">

                    <label class="form-label">Preferred Job Role *</label>

                    <input type="text" name="preferred_job_role" class="form-control <?php echo error_class('preferred_job_role'); ?>" 

                           value="<?php echo get_old_value('preferred_job_role'); ?>" placeholder="e.g., Software Developer" required>

                    <?php echo show_error('preferred_job_role'); ?>

                </div>

                <div class="col-md-4">

                    <label class="form-label">Preferred Industry *</label>

                    <input type="text" name="preferred_industry" class="form-control <?php echo error_class('preferred_industry'); ?>" 

                           value="<?php echo get_old_value('preferred_industry'); ?>" placeholder="e.g., IT, Finance" required>

                    <?php echo show_error('preferred_industry'); ?>

                </div>

                <div class="col-md-4">

                    <label class="form-label">Preferred Location *</label>

                    <input type="text" name="preferred_location" class="form-control <?php echo error_class('preferred_location'); ?>" 

                           value="<?php echo get_old_value('preferred_location'); ?>" placeholder="e.g., Bangalore, Mumbai" required>

                    <?php echo show_error('preferred_location'); ?>

                </div>



                <div class="col-md-4">

                    <label class="form-label">Willing to Relocate *</label>

                    <select name="willing_to_relocate" class="form-select <?php echo error_class('willing_to_relocate'); ?>" required>

                        <option value="">Select option</option>

                        <option value="yes" <?php echo (get_old_value('willing_to_relocate') === 'yes') ? 'selected' : ''; ?>>Yes</option>

                        <option value="no" <?php echo (get_old_value('willing_to_relocate') === 'no') ? 'selected' : ''; ?>>No</option>

                    </select>

                    <?php echo show_error('willing_to_relocate'); ?>

                </div>

                <div class="col-md-4">

                    <label class="form-label">Expected Salary / CTC</label>

                    <input type="text" name="expected_salary" class="form-control" 

                           value="<?php echo get_old_value('expected_salary'); ?>" placeholder="e.g., 8-12 LPA">

                </div>

                <div class="col-md-4">

                    <label class="form-label">Work Type *</label>

                    <select name="work_type" class="form-select <?php echo error_class('work_type'); ?>" required>

                        <option value="">Select work type</option>

                        <option value="full-time" <?php echo (get_old_value('work_type') === 'full-time') ? 'selected' : ''; ?>>Full-time</option>

                        <option value="internship" <?php echo (get_old_value('work_type') === 'internship') ? 'selected' : ''; ?>>Internship</option>

                        <option value="remote" <?php echo (get_old_value('work_type') === 'remote') ? 'selected' : ''; ?>>Remote</option>

                    </select>

                    <?php echo show_error('work_type'); ?>

                </div>

            </div>

        </div>



        <!-- Compliance Card -->

        <div class="section-card">

            <div class="section-header">

                <div class="section-icon">

                    <i class="bi bi-shield-check-fill"></i>

                </div>

                <h2 class="section-title">Eligibility & Compliance</h2>

            </div>

            <div class="row g-3 align-items-center">

                <div class="col-md-8">

                    <div class="form-check mb-3">

                        <input class="form-check-input" type="checkbox" id="eligibility">

                        <label class="form-check-label" for="eligibility">

                            I confirm that I meet all eligibility criteria for placement

                        </label>

                    </div>

                    <div class="form-check mb-3">

                        <input class="form-check-input" type="checkbox" id="medical">

                        <label class="form-check-label" for="medical">

                            I declare medical fitness for employment

                        </label>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">Gap Year Details (if any)</label>

                        <textarea class="form-control" placeholder="Explain any gaps in education" rows="2"></textarea>

                    </div>

                </div>

                <div class="col-md-4 text-center">

                    <img src="../assets/logos/Intervio_Logo.svg" alt="Intervio Logo" style="max-width: 150px; height: auto;">

                </div>

            </div>

        </div>



        <!-- Account Security Card -->

        <div class="section-card">

            <div class="section-header">

                <div class="section-icon">

                    <i class="bi bi-link-45deg"></i>

                </div>

                <h2 class="section-title">Profile Links</h2>

            </div>

            <div class="row g-3">

                <div class="col-md-6">

                    <label class="form-label">LinkedIn Profile</label>

                    <input type="url" name="linkedin_profile" class="form-control" 

                           value="<?php echo get_old_value('linkedin_profile'); ?>" placeholder="https://linkedin.com/in/username">

                </div>

                <div class="col-md-6">

                    <label class="form-label">GitHub / LeetCode / HackerRank</label>

                    <input type="text" name="other_profiles" class="form-control" 

                           value="<?php echo get_old_value('other_profiles'); ?>" placeholder="Profile links">

                </div>

            </div>

        </div>



        <!-- Final Submission -->

        <div class="registration-card">

            <div class="form-check mb-4">

                <input class="form-check-input" type="checkbox" id="terms" name="terms" value="1" 

                       <?php echo get_old_value('terms') ? 'checked' : ''; ?>>

                <label class="form-check-label" for="terms">

                    I accept <a href="#" class="text-primary">Terms & Conditions</a> and <a href="#" class="text-primary">Privacy Policy</a>

                </label>

            </div>

            <?php echo show_error('terms'); ?>



            <div class="text-center">

                <button type="submit" class="btn btn-primary btn-lg px-5" id="submitBtn">

                    Submit

                </button>

            </div>

        </div>

    </form>

</div>







=======
    <div class="col-md-4 floating-label">
        <input class="form-control" id="nationality" placeholder=" " name="nationality" data-validation="required min nameOnly" data-min="2">
        <label for="nationality">Nationality</label>
        <div id="nationality_error" class="small text-danger" style="display:none;"></div>
    </div>
    <div class="col-md-4">
        <label class="form-label">Category</label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="cat-general" name="category" value="general">
            <label class="form-check-label" for="cat-general">General</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="cat-obc" name="category" value="obc">
            <label class="form-check-label" for="cat-obc">OBC</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="cat-sc" name="category" value="sc">
            <label class="form-check-label" for="cat-sc">SC</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="cat-st" name="category" value="st">
            <label class="form-check-label" for="cat-st">ST</label>
        </div>
    </div>

    <div class="col-md-6 floating-label">
        <input class="form-control" id="email" placeholder=" " name="email" data-validation="required email">
        <label for="email">Email Address</label>
        <div id="email_error" class="small text-danger" style="display:none;"></div>
    </div>
    <div class="col-md-6">
        <div class="input-group">
            <span class="input-group-text">+91</span>
            <input class="form-control" id="mobile" placeholder=" " name="mobile" data-validation="required number min" data-min="10" data-max="10">
            <label class="input-group-text" for="mobile">Mobile Number</label>
        </div>
        <div id="mobile_error" class="small text-danger" style="display:none;"></div>
    </div>

    <div class="col-md-4 floating-label">
        <input class="form-control" id="city" placeholder=" " name="city">
        <label for="city">City</label>
    </div>
    <div class="col-md-4 floating-label">
        <input class="form-control" id="state" placeholder=" " name="state">
        <label for="state">State</label>
    </div>
    <div class="col-md-4 floating-label">
        <input class="form-control" id="country" placeholder=" " name="country">
        <label for="country">Country</label>
    </div>
    <div class="col-md-6 floating-label">
        <textarea class="form-control" id="permanentAddress" placeholder=" " name="permanentAddress"></textarea>
        <label for="permanentAddress">Permanent Address</label>
    </div>
    <div class="col-md-6 floating-label">
        <textarea class="form-control" id="currentAddress" placeholder=" " name="currentAddress"></textarea>
        <label for="currentAddress">Current Address</label>
    </div>
</div>
<hr>
<!-- ================= ACADEMIC INFORMATION ================= -->
<h5>Academic Information</h5>
<div class="section-progress">
    <div class="progress-bar" id="academicProgress"></div>
</div>
<div class="row g-3">
    <div class="col-md-4 floating-label">
        <input class="form-control" id="enrollmentNumber" placeholder=" " name="enrollmentNumber" data-validation="required min" data-min="5">
        <label for="enrollmentNumber">Enrollment Number</label>
        <div id="enrollmentNumber_error" class="small text-danger" style="display:none;"></div>
    </div>
    <div class="col-md-4 floating-label">
        <input class="form-control" id="university" placeholder=" " name="university" data-validation="required min nameOnly" data-min="3">
        <label for="university">College / University</label>
        <div id="university_error" class="small text-danger" style="display:none;"></div>
    </div>
    <div class="col-md-4 floating-label">
        <input class="form-control" id="course" placeholder=" " name="course" data-validation="required min nameOnly" data-min="2">
        <label for="course">Course / Branch</label>
        <div id="course_error" class="small text-danger" style="display:none;"></div>
    </div>

    <div class="col-md-4 floating-label">
        <input class="form-control" id="admissionYear" placeholder=" " name="admissionYear" data-validation="required number min" data-min="4" data-max="4">
        <label for="admissionYear">Admission Year</label>
        <div id="admissionYear_error" class="small text-danger" style="display:none;"></div>
    </div>
    <div class="col-md-4 floating-label">
        <input class="form-control" id="semester" placeholder=" " name="semester" data-validation="required number">
        <label for="semester">Current Semester</label>
        <div id="semester_error" class="small text-danger" style="display:none;"></div>
    </div>
    <div class="col-md-4 floating-label">
        <input class="form-control" id="cgpa" placeholder=" " name="cgpa">
        <label for="cgpa">CGPA / Percentage</label>
    </div>

    <div class="col-md-4 floating-label">
        <select class="form-select" id="backlogs" name="backlogs" data-validation="select">
            <option value="" disabled selected>Backlogs</option>
            <option value="no">No</option>
            <option value="yes">Yes</option>
        </select>
        <label for="backlogs">Backlogs</label>
        <div id="backlogs_error" class="small text-danger" style="display:none;"></div>
    </div>
    <div class="col-md-4 floating-label">
        <input class="form-control" id="backlogCount" placeholder=" " name="backlogCount" type="number">
        <label for="backlogCount">Backlog Count</label>
    </div>
</div>
<hr>
<!-- ================= SKILLS ================= -->
<h5>Skills</h5>
<div class="section-progress">
    <div class="progress-bar" id="skillsProgress"></div>
</div>
<div class="row g-3">
    <div class="col-md-6 floating-label">
        <input class="form-control" id="programmingLanguages" placeholder=" " name="programmingLanguages">
        <label for="programmingLanguages">Programming Languages</label>
    </div>
    <div class="col-md-6 floating-label">
        <input class="form-control" id="technologies" placeholder=" " name="technologies">
        <label for="technologies">Tools & Technologies</label>
    </div>
    <div class="col-md-6 floating-label">
        <input class="form-control" id="softSkills" placeholder=" " name="softSkills">
        <label for="softSkills">Soft Skills</label>
    </div>
    <div class="col-md-6 floating-label">
        <select class="form-select" id="proficiencyLevel" name="proficiencyLevel" data-validation="select">
            <option value="" disabled selected>Skill Proficiency Level</option>
            <option value="beginner">Beginner</option>
            <option value="intermediate">Intermediate</option>
            <option value="advanced">Advanced</option>
        </select>
        <label for="proficiencyLevel">Skill Proficiency Level</label>
        <div id="proficiencyLevel_error" class="small text-danger" style="display:none;"></div>
    </div>
</div>
<hr>
<!-- ================= EXPERIENCE DETAILS ================= -->
<h5>Experience Details</h5>
<div class="section-progress">
    <div class="progress-bar" id="experienceProgress"></div>
</div>
<div class="row g-3">
    <div class="col-md-4 floating-label">
        <select class="form-select" id="internshipExperience" name="internshipExperience" data-validation="select">
            <option value="" disabled selected>Internship Experience</option>
            <option value="no">No</option>
            <option value="yes">Yes</option>
        </select>
        <label for="internshipExperience">Internship Experience</label>
        <div id="internshipExperience_error" class="small text-danger" style="display:none;"></div>
    </div>
    <div class="col-md-4 floating-label">
        <input class="form-control" id="internshipCompany" placeholder=" " name="internshipCompany">
        <label for="internshipCompany">Internship Company</label>
    </div>
    <div class="col-md-4 floating-label">
        <input class="form-control" id="roleDuration" placeholder=" " name="roleDuration">
        <label for="roleDuration">Role / Duration</label>
    </div>

    <div class="col-md-6 floating-label">
        <input class="form-control" id="trainingPrograms" placeholder=" " name="trainingPrograms">
        <label for="trainingPrograms">Training Programs / Workshops</label>
    </div>
    <div class="col-md-6 floating-label">
        <input class="form-control" id="researchProjects" placeholder=" " name="researchProjects">
        <label for="researchProjects">Research Projects (optional)</label>
    </div>
</div>
<hr>
<!-- ================= PROJECTS & PORTFOLIO ================= -->
<h5>Projects & Portfolio</h5>
<div class="section-progress">
    <div class="progress-bar" id="projectsProgress"></div>
</div>
<div class="row g-3">
    <div class="col-md-6 floating-label">
        <input class="form-control" id="projectTitle" placeholder=" " name="projectTitle">
        <label for="projectTitle">Project Title</label>
    </div>
    <div class="col-md-6 floating-label">
        <input class="form-control" id="technologiesUsed" placeholder=" " name="technologiesUsed">
        <label for="technologiesUsed">Technologies Used</label>
    </div>
    <div class="col-md-12 floating-label">
        <textarea class="form-control" id="projectDescription" placeholder=" " name="projectDescription"></textarea>
        <label for="projectDescription">Project Description</label>
    </div>
    <div class="col-md-6 floating-label">
        <input class="form-control" id="githubLink" placeholder=" " name="githubLink">
        <label for="githubLink">GitHub / Portfolio Link</label>
    </div>
    <div class="col-md-6 floating-label">
        <input class="form-control" id="liveUrl" placeholder=" " name="liveUrl">
        <label for="liveUrl">Live Project URL (optional)</label>
    </div>
</div>
<hr>
<!-- ================= CERTIFICATIONS ================= -->
<h5>Certifications</h5>
<div class="section-progress">
    <div class="progress-bar" id="certificationsProgress"></div>
</div>
<div class="row g-3">
    <div class="col-md-4 floating-label">
        <input class="form-control" id="certificationName" placeholder=" " name="certificationName">
        <label for="certificationName">Certification Name</label>
    </div>
    <div class="col-md-4 floating-label">
        <input class="form-control" id="issuingOrganization" placeholder=" " name="issuingOrganization">
        <label for="issuingOrganization">Issuing Organization</label>
    </div>
    <div class="col-md-4 floating-label">
        <input class="form-control" id="yearOfCompletion" placeholder=" " name="yearOfCompletion" type="number">
        <label for="yearOfCompletion">Year of Completion</label>
    </div>
    <div class="col-md-12 floating-label">
        <input type="file" class="form-control" id="certificationFile" name="certificationFile" data-validation="required fileSize fileType" data-filesize="2048" data-filetype="pdf,doc,docx">
        <label for="certificationFile">Upload Certification</label>
        <div id="certificationFile_error" class="small text-danger" style="display:none;"></div>
    </div>
</div>
<hr>
<!-- ================= RESUME & DOCUMENTS ================= -->
<h5>Resume & Documents</h5>
<div class="section-progress">
    <div class="progress-bar" id="documentsProgress"></div>
</div>
<div class="row g-3">
    <div class="col-md-6 floating-label">
        <input type="file" class="form-control" id="resume" name="resume" data-validation="required fileSize fileType" data-filesize="2048" data-filetype="pdf,doc,docx">
        <label for="resume">Upload Resume</label>
        <div id="resume_error" class="small text-danger" style="display:none;"></div>
    </div>
    <div class="col-md-6 floating-label">
        <input type="file" class="form-control" id="coverLetter" name="coverLetter" data-validation="fileSize fileType" data-filesize="2048" data-filetype="pdf,doc,docx">
        <label for="coverLetter">Cover Letter</label>
        <div id="coverLetter_error" class="small text-danger" style="display:none;"></div>
    </div>
    <div class="col-md-6 floating-label">
        <input type="file" class="form-control" id="photo" name="photo" data-validation="required fileSize fileType" data-filesize="512" data-filetype="jpg,jpeg,png">
        <label for="photo">Photo</label>
        <div id="photo_error" class="small text-danger" style="display:none;"></div>
    </div>
    <div class="col-md-6 floating-label">
        <input type="file" class="form-control" id="signature" name="signature" data-validation="fileSize fileType" data-filesize="512" data-filetype="jpg,jpeg,png">
        <label for="signature">Signature</label>
        <div id="signature_error" class="small text-danger" style="display:none;"></div>
    </div>
</div>
<hr>
<!-- ================= PLACEMENT PREFERENCES ================= -->
<h5>Placement Preferences</h5>
<div class="section-progress">
    <div class="progress-bar" id="preferencesProgress"></div>
</div>
<div class="row g-3">
    <div class="col-md-4 floating-label">
        <input class="form-control" id="preferredJobRole" placeholder=" " name="preferredJobRole">
        <label for="preferredJobRole">Preferred Job Role</label>
    </div>
    <div class="col-md-4 floating-label">
        <input class="form-control" id="preferredIndustry" placeholder=" " name="preferredIndustry">
        <label for="preferredIndustry">Preferred Industry</label>
    </div>
    <div class="col-md-4 floating-label">
        <input class="form-control" id="preferredLocation" placeholder=" " name="preferredLocation">
        <label for="preferredLocation">Preferred Location</label>
    </div>

    <div class="col-md-4 floating-label">
        <select class="form-select" id="willingToRelocate" name="willingToRelocate">
            <option value="" disabled selected>Willing to Relocate</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>
        <label for="willingToRelocate">Willing to Relocate</label>
    </div>
    <div class="col-md-4 floating-label">
        <input class="form-control" id="expectedSalary" placeholder=" " name="expectedSalary">
        <label for="expectedSalary">Expected Salary / CTC</label>
    </div>
    <div class="col-md-4 floating-label">
        <select class="form-select" id="workType" name="workType">
            <option value="" disabled selected>Work Type</option>
            <option value="full-time">Full-time</option>
            <option value="internship">Internship</option>
            <option value="remote">Remote</option>
        </select>
        <label for="workType">Work Type</label>
    </div>
</div>
<hr>
<!-- ================= COMPLIANCE ================= -->
<h5>Eligibility & Compliance</h5>
<div class="section-progress">
    <div class="progress-bar" id="complianceProgress"></div>
</div>
<div class="form-check mb-3">
    <input class="form-check-input" type="checkbox" id="eligibilityCheck" name="eligibilityCheck">
    <label class="form-check-label" for="eligibilityCheck">I meet eligibility criteria</label>
</div>
<div class="form-check mb-3">
    <input class="form-check-input" type="checkbox" id="medicalDeclaration" name="medicalDeclaration">
    <label class="form-check-label" for="medicalDeclaration">Medical Fitness Declaration</label>
</div>
<div class="floating-label">
    <textarea class="form-control mt-2" id="gapYearDetails" placeholder=" " name="gapYearDetails"></textarea>
    <label for="gapYearDetails">Gap Year Details (if any)</label>
</div>
<hr>
<!-- ================= ACCOUNT & LINKS ================= -->
<h5>Account Security & Links</h5>
<div class="section-progress">
    <div class="progress-bar" id="accountProgress"></div>
</div>
<div class="row g-3">
    <div class="col-md-4 floating-label">
        <input class="form-control" id="username" placeholder=" " name="username" data-validation="required min" data-min="3">
        <label for="username">Username</label>
        <div id="username_error" class="small text-danger" style="display:none;"></div>
    </div>
    <div class="col-md-4 floating-label">
        <input type="password" class="form-control" id="password" placeholder=" " name="password" data-validation="required strongPassword">
        <label for="password">Password</label>
        <div id="password_error" class="small text-danger" style="display:none;"></div>
    </div>
    <div class="col-md-4 floating-label">
        <input type="password" class="form-control" id="confirmPassword" placeholder=" " name="confirmPassword" data-validation="required confirmPassword">
        <label for="confirmPassword">Confirm Password</label>
        <div id="confirmPassword_error" class="small text-danger" style="display:none;"></div>
    </div>

    <div class="col-md-6 floating-label">
        <input class="form-control" id="linkedinProfile" placeholder=" " name="linkedinProfile">
        <label for="linkedinProfile">LinkedIn Profile</label>
    </div>
    <div class="col-md-6 floating-label">
        <input class="form-control" id="codingProfiles" placeholder=" " name="codingProfiles">
        <label for="codingProfiles">GitHub / LeetCode / HackerRank</label>
    </div>
</div>
<hr>
<!-- ================= FINAL SUBMISSION ================= -->
<div class="section-progress">
    <div class="progress-bar" id="finalProgress"></div>
</div>
    <iframe src="terms_and_condition.html" width="100%" height="300px"></iframe>
    <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" id="termsAgreement"
                       data-bs-toggle="modal" data-bs-target="#termsModal">
                <label class="form-check-label" for="termsAgreement"><h6> I Agree Terms & Conditions</h6></label>
            </div>
    <div class="text-center mt-4">
    <button type="submit" class="btn btn-custom px-5 py-3" link="../student/profile.php">Register</button>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../assets/js/validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</style>
>>>>>>> Stashed changes
</body>

</html>

