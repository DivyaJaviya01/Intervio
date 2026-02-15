
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Location: ../student/my_profile.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration | Intervio Placement Portal</title>
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/register.css">
    
</head>

<body>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom Validation JS -->
    <script src="../assets/js/validate.js"></script>

    <div class="registration-container">
        <!-- Header -->
        <div class="registration-header">
            <h1><i class="fas fa-graduation-cap me-3"></i>Intervio Placement Portal</h1>
            <p class="lead">Create your profile and unlock career opportunities</p>
        </div>
        
        <div class="registration-card">
            <div class="card-body">
                <form id="registrationForm" method="post" action="" enctype="multipart/form-data">
                    
                    <!-- Personal Information -->
                    <div class="form-section">
                        <h5><i class="fas fa-user me-2"></i>Personal Information</h5>
                        <div class="progress-bar">
                            <div class="progress-fill" id="personalProgress"></div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="full_name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="full_name" name="full_name" 
                                           placeholder="Enter your full name" required
                                           data-validation="required nameOnly" data-min="3" data-max="50">
                                    <div id="full_name_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="birth_date" class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control" id="birth_date" name="birth_date" required
                                           data-validation="required">
                                    <div id="birth_date_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select class="form-control" id="gender" name="gender" required
                                            data-validation="required select">
                                        <option value="">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                    <div id="gender_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nationality" class="form-label">Nationality</label>
                                    <input type="text" class="form-control" id="nationality" name="nationality" 
                                           placeholder="Enter your nationality" required
                                           data-validation="required nameOnly" data-min="2" data-max="50">
                                    <div id="nationality_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="category" class="form-label">Category</label>
                                    <select class="form-control" id="category" name="category" required
                                            data-validation="required select">
                                        <option value="">Select Category</option>
                                        <option value="general">General</option>
                                        <option value="obc">OBC</option>
                                        <option value="sc">SC</option>
                                        <option value="st">ST</option>
                                    </select>
                                    <div id="category_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="form-section">
                        <h5><i class="fas fa-envelope me-2"></i>Contact Information</h5>
                        <div class="progress-bar">
                            <div class="progress-fill" id="contactProgress"></div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" 
                                           placeholder="Enter your email" required
                                           data-validation="required email" data-max="100">
                                    <div id="email_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="mobile" class="form-label">Mobile Number</label>
                                    <input type="tel" class="form-control" id="mobile" name="mobile" 
                                           placeholder="Enter your mobile number" required
                                           data-validation="required phone min max" data-min="10" data-max="10">
                                    <div id="mobile_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" class="form-control" id="city" name="city" 
                                           placeholder="Enter your city" required
                                           data-validation="required nameOnly" data-min="2" data-max="50">
                                    <div id="city_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="state" class="form-label">State</label>
                                    <input type="text" class="form-control" id="state" name="state" 
                                           placeholder="Enter your state" required
                                           data-validation="required nameOnly" data-min="2" data-max="50">
                                    <div id="state_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="country" class="form-label">Country</label>
                                    <input type="text" class="form-control" id="country" name="country" 
                                           placeholder="Enter your country" required
                                           data-validation="required nameOnly" data-min="2" data-max="50">
                                    <div id="country_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="permanentAddress" class="form-label">Permanent Address</label>
                                    <textarea class="form-control" id="permanentAddress" name="permanentAddress" 
                                              rows="3" placeholder="Enter your permanent address" required
                                              data-validation="required min max" data-min="10" data-max="200"></textarea>
                                    <div id="permanentAddress_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="currentAddress" class="form-label">Current Address</label>
                                    <textarea class="form-control" id="currentAddress" name="currentAddress" 
                                              rows="3" placeholder="Enter your current address" required data-validation="required min max" data-min="10" data-max="200"></textarea>
                                    <div id="currentAddress_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Academic Information -->
                    <div class="form-section">
                        <h5><i class="fas fa-graduation-cap me-2"></i>Academic Information</h5>
                        <div class="progress-bar">
                            <div class="progress-fill" id="academicProgress"></div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="enrollmentNumber" class="form-label">Enrollment Number</label>
                                    <input type="text" class="form-control" id="enrollmentNumber" name="enrollmentNumber" 
                                           placeholder="Enter your enrollment number" required
                                           data-validation="required min max number" data-min="12" data-max="12">
                                    <div id="enrollmentNumber_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="university" class="form-label">College / University</label>
                                    <input type="text" class="form-control" id="university" name="university" 
                                           placeholder="Enter your college/university name" required
                                           data-validation="required nameOnly" data-min="3" data-max="100">
                                    <div id="university_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="course" class="form-label">Course / Branch</label>
                                    <input type="text" class="form-control" id="course" name="course" 
                                           placeholder="e.g., Computer Science, Mechanical" required
                                           data-validation="required nameOnly" data-min="3" data-max="50">
                                    <div id="course_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="admissionYear" class="form-label">Admission Year</label>
                                    <input type="number" class="form-control" id="admissionYear" name="admissionYear" 
                                           placeholder="Enter admission year" required
                                           data-validation="required number" data-num-min="2015" data-num-max="2024">
                                    <div id="admissionYear_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="semester" class="form-label">Current Semester</label>
                                    <select class="form-control" id="semester" name="semester" required
                                            data-validation="required select">
                                        <option value="">Select Semester</option>
                                        <option value="1">1st Semester</option>
                                        <option value="2">2nd Semester</option>
                                        <option value="3">3rd Semester</option>
                                        <option value="4">4th Semester</option>
                                        <option value="5">5th Semester</option>
                                        <option value="6">6th Semester</option>
                                        <option value="7">7th Semester</option>
                                        <option value="8">8th Semester</option>
                                    </select>
                                    <div id="semester_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="cgpa" class="form-label">CGPA / Percentage</label>
                                    <input type="text" class="form-control" id="cgpa" name="cgpa" 
                                           placeholder="e.g., 8.5 or 75%" required
                                           data-validation="required number num-min num-max" data-num-min="1" data-num-max="10">
                                    <div id="cgpa_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="backlogs" class="form-label">Backlogs</label>
                                    <select class="form-control" id="backlogs" name="backlogs" required
                                            data-validation="required select">
                                        <option value="">Select option</option>
                                        <option value="no">No</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                    <div id="backlogs_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="backlogCount" class="form-label">Backlog Count</label>
                                    <input type="number" class="form-control" id="backlogCount" name="backlogCount" 
                                           placeholder="Number of backlogs" min="0" max="20"
                                           data-validation="required number" data-num-min="0" data-num-max="20">
                                    <div id="backlogCount_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Skills -->
                    <div class="form-section">
                        <h5><i class="fas fa-code me-2"></i>Skills</h5>
                        <div class="progress-bar">
                            <div class="progress-fill" id="skillsProgress"></div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="programmingLanguages" class="form-label">Programming Languages</label>
                                    <input type="text" class="form-control" id="programmingLanguages" name="programmingLanguages" 
                                           placeholder="e.g., Python, Java, C++, JavaScript" required
                                           data-validation="required min max" data-min="5" data-max="200">
                                    <div id="programmingLanguages_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="technologies" class="form-label">Tools & Technologies</label>
                                    <input type="text" class="form-control" id="technologies" name="technologies" 
                                           placeholder="e.g., Git, Docker, AWS, React" required
                                           data-validation="required min max" data-min="5" data-max="200">
                                    <div id="technologies_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="softSkills" class="form-label">Soft Skills</label>
                                    <input type="text" class="form-control" id="softSkills" name="softSkills" 
                                           placeholder="e.g., Communication, Leadership, Teamwork" required
                                           data-validation="required min max" data-min="5" data-max="200">
                                    <div id="softSkills_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="proficiencyLevel" class="form-label">Skill Proficiency Level</label>
                                    <select class="form-control" id="proficiencyLevel" name="proficiencyLevel" required
                                            data-validation="required select">
                                        <option value="">Select proficiency level</option>
                                        <option value="beginner">Beginner</option>
                                        <option value="intermediate">Intermediate</option>
                                        <option value="advanced">Advanced</option>
                                    </select>
                                    <div id="proficiencyLevel_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Experience Details -->
                    <div class="form-section">
                        <h5><i class="fas fa-briefcase me-2"></i>Experience Details</h5>
                        <div class="progress-bar">
                            <div class="progress-fill" id="experienceProgress"></div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="internshipExperience" class="form-label">Internship Experience</label>
                                    <select class="form-control" id="internshipExperience" name="internshipExperience" required
                                            data-validation="required select">
                                        <option value="">Select option</option>
                                        <option value="no">No</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                    <div id="internshipExperience_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="internshipCompany" class="form-label">Internship Company</label>
                                    <input type="text" class="form-control" id="internshipCompany" name="internshipCompany" 
                                           placeholder="Enter company name"
                                           data-validation="nameOnly min max" data-min="3" data-max="100">
                                    <div id="internshipCompany_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="roleDuration" class="form-label">Role / Duration</label>
                                    <input type="text" class="form-control" id="roleDuration" name="roleDuration" 
                                           placeholder="e.g., Software Developer - 3 months"
                                           data-validation="required nameOnly min max " data-min="5" data-max="100">
                                    <div id="roleDuration_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="trainingPrograms" class="form-label">Training Programs / Workshops</label>
                                    <input type="text" class="form-control" id="trainingPrograms" name="trainingPrograms" 
                                           placeholder="List relevant training programs"
                                           data-validation="required min max" data-min="5" data-max="200">
                                    <div id="trainingPrograms_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="researchProjects" class="form-label">Research Projects (optional)</label>
                                    <textarea class="form-control" id="researchProjects" name="researchProjects" 
                                              rows="3" placeholder="Describe your research projects"
                                              data-validation="min max" data-min="10" data-max="500"></textarea>
                                    <div id="researchProjects_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Projects & Portfolio -->
                    <div class="form-section">
                        <h5><i class="fas fa-project-diagram me-2"></i>Projects & Portfolio</h5>
                        <div class="progress-bar">
                            <div class="progress-fill" id="projectsProgress"></div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="projectTitle" class="form-label">Project Title</label>
                                    <input type="text" class="form-control" id="projectTitle" name="projectTitle" 
                                           placeholder="Enter your main project title" required
                                           data-validation="required min max" data-min="5" data-max="100">
                                    <div id="projectTitle_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="technologiesUsed" class="form-label">Technologies Used</label>
                                    <input type="text" class="form-control" id="technologiesUsed" name="technologiesUsed" 
                                           placeholder="e.g., React, Node.js, MongoDB" required
                                           data-validation="required">
                                    <div id="technologiesUsed_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="projectDescription" class="form-label">Project Description</label>
                                    <textarea class="form-control" id="projectDescription" name="projectDescription" 
                                              rows="4" placeholder="Describe your project in detail" required
                                              data-validation="required min max" data-min="20" data-max="1000"></textarea>
                                    <div id="projectDescription_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="githubLink" class="form-label">GitHub / Portfolio Link</label>
                                    <input type="url" class="form-control" id="githubLink" name="githubLink" 
                                           placeholder="https://github.com/yourusername" required
                                           data-validation="required url " data-min="10" data-max="200">
                                    <div id="githubLink_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="liveUrl" class="form-label">Live Project URL (optional)</label>
                                    <input type="url" class="form-control" id="liveUrl" name="liveUrl" 
                                           placeholder="https://yourproject.com"
                                           data-validation="url" data-min="10" data-max="200">
                                    <div id="liveUrl_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Certifications -->
                    <div class="form-section">
                        <h5><i class="fas fa-certificate me-2"></i>Certifications</h5>
                        <div class="progress-bar">
                            <div class="progress-fill" id="certificationsProgress"></div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="certificationName" class="form-label">Certification Name</label>
                                    <input type="text" class="form-control" id="certificationName" name="certificationName" 
                                           placeholder="Enter certification name" required
                                           data-validation="required nameOnly" >
                                    <div id="certificationName_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="issuingOrganization" class="form-label">Issuing Organization</label>
                                    <input type="text" class="form-control" id="issuingOrganization" name="issuingOrganization" 
                                           placeholder="Enter issuing organization" required
                                           data-validation="required nameOnly min max" data-min="3" data-max="100">
                                    <div id="issuingOrganization_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="yearOfCompletion" class="form-label">Year of Completion</label>
                                    <input type="number" class="form-control" id="yearOfCompletion" name="yearOfCompletion" 
                                           placeholder="Enter completion year" required
                                           data-validation="requirednumber" data-num-min="2000" data-num-max="2026">
                                    <div id="yearOfCompletion_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="certificationFile" class="form-label">Upload Certification</label>
                                    <input type="file" class="form-control" id="certificationFile" name="certificationFile" 
                                           accept=".pdf,.jpg,.png"
                                           data-validation="fileType" data-filetype="pdf jpg png">
                                    <div id="certificationFile_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Documents -->
                    <div class="form-section">
                        <h5><i class="fas fa-file-upload me-2"></i>Documents</h5>
                        <div class="progress-bar">
                            <div class="progress-fill" id="documentsProgress"></div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="resume" class="form-label">Upload Resume</label>
                                    <input type="file" class="form-control" id="resume" name="resume" 
                                           accept=".pdf,.doc,.docx" required
                                           data-validation="required fileSize" data-filesize="100" data-filetype="pdf doc docx">
                                    <div id="resume_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="coverLetter" class="form-label">Cover Letter</label>
                                    <input type="file" class="form-control" id="coverLetter" name="coverLetter" 
                                           accept=".pdf,.doc,.docx" required
                                           data-validation="required fileSize" data-filesize="100" data-filetype="pdf doc docx">
                                    <div id="coverLetter_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="photo" class="form-label">Photo</label>
                                    <input type="file" class="form-control" id="photo" name="photo" 
                                           accept=".jpg,.jpeg,.png" required
                                           data-validation="required fileSize" data-filesize="2048" data-filetype="jpg,jpeg,png">
                                    <div id="photo_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="signature" class="form-label">Signature</label>
                                    <input type="file" class="form-control" id="signature" name="signature" 
                                           accept=".jpg,.jpeg,.png" required
                                           data-validation="required fileSize" data-filesize="1024" data-filetype="jpg,jpeg,png">
                                    <div id="signature_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                    </div>    
                    <!-- Placement Preferences -->
                    <div class="form-section">
                        <h5><i class="fas fa-cog me-2"></i>Placement Preferences</h5>
                        <div class="progress-bar">
                            <div class="progress-fill" id="placementProgress"></div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="preferredJobRole" class="form-label">Preferred Job Role</label>
                                    <input type="text" class="form-control" id="preferredJobRole" name="preferredJobRole" 
                                           placeholder="e.g., Software Developer, Data Analyst" required
                                           data-validation="required  min max" data-min="3" data-max="100">
                                    <div id="preferredJobRole_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="preferredIndustry" class="form-label">Preferred Industry</label>
                                    <input type="text" class="form-control" id="preferredIndustry" name="preferredIndustry" 
                                           placeholder="e.g., IT, Finance, Healthcare" required
                                           data-validation="required nameOnly min max" data-min="3" data-max="100">
                                    <div id="preferredIndustry_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="preferredLocation" class="form-label">Preferred Location</label>
                                    <input type="text" class="form-control" id="preferredLocation" name="preferredLocation" 
                                           placeholder="e.g., Mumbai, Bangalore, Delhi" required
                                           data-validation="required nameOnly min max" data-min="3" data-max="100">
                                    <div id="preferredLocation_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="willingToRelocate" class="form-label">Willing to Relocate</label>
                                    <select class="form-control" id="willingToRelocate" name="willingToRelocate" required
                                            data-validation="required select">
                                        <option value="">Select option</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                    <div id="willingToRelocate_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="expectedSalary" class="form-label">Expected Salary / CTC</label>
                                    <input type="text" class="form-control" id="expectedSalary" name="expectedSalary" 
                                           placeholder="e.g., 6-8 LPA" required
                                           data-validation="required number">
                                    <div id="expectedSalary_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="workType" class="form-label">Work Type</label>
                                    <select class="form-control" id="workType" name="workType" required
                                            data-validation="required select">
                                        <option value="">Select work type</option>
                                        <option value="full-time">Full-time</option>
                                        <option value="internship">Internship</option>
                                        <option value="remote">Remote</option>
                                    </select>
                                    <div id="workType_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Eligibility & Compliance -->
                    <div class="form-section">
                        <h5><i class="fas fa-check-circle me-2"></i>Eligibility & Compliance</h5>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="eligibilityCheck" name="eligibilityCheck" required
                                               data-validation="required">
                                        <label class="form-check-label" for="eligibilityCheck">
                                            I meet the eligibility criteria for placement drives
                                        </label>
                                    </div>
                                    <div id="eligibilityCheck_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="medicalDeclaration" name="medicalDeclaration" required
                                               data-validation="required">
                                        <label class="form-check-label" for="medicalDeclaration">
                                            Medical Fitness Declaration - I am medically fit to work
                                        </label>
                                    </div>
                                    <div id="medicalDeclaration_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="gapYearDetails" class="form-label">Gap Year Details (if any)</label>
                                    <textarea class="form-control" id="gapYearDetails" name="gapYearDetails" 
                                              rows="3" placeholder="Explain any gap years in your education" 
                                              data-validation="min max" data-min="10" data-max="500"></textarea>
                                    <div id="gapYearDetails_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Account Security & Links -->
                    <div class="form-section">
                        <h5><i class="fas fa-lock me-2"></i>Account Security & Links</h5>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" 
                                           placeholder="Choose a username" required
                                           data-validation="required nameOnly min max" data-min="4" data-max="30">
                                    <div id="username_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="linkedinProfile" class="form-label">LinkedIn Profile</label>
                                    <input type="url" class="form-control" id="linkedinProfile" name="linkedinProfile" 
                                           placeholder="https://linkedin.com/in/yourprofile" required
                                           data-validation="required url" >
                                    <div id="linkedinProfile_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" 
                                           placeholder="Create a strong password" required
                                           data-validation="required strongPassword min max" data-min="8" data-max="64">
                                    <div id="password_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" 
                                           placeholder="Confirm your password" required
                                           data-validation="required confirmPassword">
                                    <div id="confirmPassword_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="codingProfiles" class="form-label">GitHub / LeetCode / HackerRank</label>
                                    <input type="text" class="form-control" id="codingProfiles" name="codingProfiles" 
                                           placeholder="Links to your coding profiles"
                                           data-validation="min max" data-min="5" data-max="500">
                                    <div id="codingProfiles_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Final Submission -->
                    <div class="form-section">
                        <h5><i class="fas fa-paper-plane me-2"></i>Final Submission</h5>
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="termsAgreement" name="termsAgreement" required
                                               data-validation="required">
                                        <label class="form-check-label" for="termsAgreement">
                                            I agree to the Terms & Conditions and Privacy Policy
                                        </label>
                                    </div>
                                    <div id="termsAgreement_error" class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn-submit">
                            <i class="fas fa-user-plus me-2"></i>Complete Registration
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/validate.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('.form-section');
            const progressBars = document.querySelectorAll('.progress-fill');
            
            sections.forEach((section, index) => {
                const inputs = section.querySelectorAll('input, select, textarea');
                let filledCount = 0;
                
                inputs.forEach(input => {
                    if (input.type === 'radio') {
                        if (input.checked) filledCount++;
                    } else if (input.value) {
                        filledCount++;
                    }
                });
                
                const progress = (filledCount / inputs.length) * 100;
                progressBars[index].style.width = progress + '%';
            });
        });
    </script>
</body>
</html>
