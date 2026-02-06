<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration | Placement Portal</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

<div class="container py-5">
<div class="row justify-content-center">
<div class="col-lg-10">

<div class="card p-4 animate-section">
<h3 class="text-center mb-4">Student Registration</h3>

<form id="registrationForm">

<!-- ================= PERSONAL INFORMATION ================= -->
<h5>Personal Information</h5>
<div class="section-progress">
    <div class="progress-bar" id="personalProgress"></div>
</div>
<div class="row g-3">
    <div class="col-md-6 floating-label">
        <input class="form-control" id="fullName" placeholder=" " name="fullName">
        <label for="fullName">Full Name</label>
    </div>
    <div class="col-md-6 floating-label">
        <input type="date" class="form-control" id="dob" name="dob">
        <label for="dob">Date of Birth</label>
    </div>

    <div class="col-md-4">
        <label class="form-label">Gender</label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="gender-male" name="gender" value="male">
            <label class="form-check-label" for="gender-male">Male</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="gender-female" name="gender" value="female">
            <label class="form-check-label" for="gender-female">Female</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="gender-other" name="gender" value="other">
            <label class="form-check-label" for="gender-other">Other</label>
        </div>
    </div>

    <div class="col-md-4 floating-label">
        <input class="form-control" id="nationality" placeholder=" " name="nationality">
        <label for="nationality">Nationality</label>
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
        <input class="form-control" id="email" placeholder=" " name="email">
        <label for="email">Email Address</label>
    </div>
    <div class="col-md-6">
        <div class="input-group">
            <span class="input-group-text">+91</span>
            <input class="form-control" id="mobile" placeholder=" " name="mobile">
            <label class="input-group-text" for="mobile">Mobile Number</label>
        </div>
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
        <input class="form-control" id="enrollmentNumber" placeholder=" " name="enrollmentNumber">
        <label for="enrollmentNumber">Enrollment Number</label>
    </div>
    <div class="col-md-4 floating-label">
        <input class="form-control" id="university" placeholder=" " name="university">
        <label for="university">College / University</label>
    </div>
    <div class="col-md-4 floating-label">
        <input class="form-control" id="course" placeholder=" " name="course">
        <label for="course">Course / Branch</label>
    </div>

    <div class="col-md-4 floating-label">
        <input class="form-control" id="admissionYear" placeholder=" " name="admissionYear">
        <label for="admissionYear">Admission Year</label>
    </div>
    <div class="col-md-4 floating-label">
        <input class="form-control" id="semester" placeholder=" " name="semester">
        <label for="semester">Current Semester</label>
    </div>
    <div class="col-md-4 floating-label">
        <input class="form-control" id="cgpa" placeholder=" " name="cgpa">
        <label for="cgpa">CGPA / Percentage</label>
    </div>

    <div class="col-md-4 floating-label">
        <select class="form-select" id="backlogs" name="backlogs">
            <option value="" disabled selected>Backlogs</option>
            <option value="no">No</option>
            <option value="yes">Yes</option>
        </select>
        <label for="backlogs">Backlogs</label>
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
        <select class="form-select" id="proficiencyLevel" name="proficiencyLevel">
            <option value="" disabled selected>Skill Proficiency Level</option>
            <option value="beginner">Beginner</option>
            <option value="intermediate">Intermediate</option>
            <option value="advanced">Advanced</option>
        </select>
        <label for="proficiencyLevel">Skill Proficiency Level</label>
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
        <select class="form-select" id="internshipExperience" name="internshipExperience">
            <option value="" disabled selected>Internship Experience</option>
            <option value="no">No</option>
            <option value="yes">Yes</option>
        </select>
        <label for="internshipExperience">Internship Experience</label>
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
        <input type="file" class="form-control" id="certificationFile" name="certificationFile">
        <label for="certificationFile">Upload Certification</label>
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
        <input type="file" class="form-control" id="resume" name="resume">
        <label for="resume">Upload Resume</label>
    </div>
    <div class="col-md-6 floating-label">
        <input type="file" class="form-control" id="coverLetter" name="coverLetter">
        <label for="coverLetter">Cover Letter</label>
    </div>
    <div class="col-md-6 floating-label">
        <input type="file" class="form-control" id="photo" name="photo">
        <label for="photo">Photo</label>
    </div>
    <div class="col-md-6 floating-label">
        <input type="file" class="form-control" id="signature" name="signature">
        <label for="signature">Signature</label>
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
        <input class="form-control" id="username" placeholder=" " name="username">
        <label for="username">Username</label>
    </div>
    <div class="col-md-4 floating-label">
        <input type="password" class="form-control" id="password" placeholder=" " name="password">
        <label for="password">Password</label>
    </div>
    <div class="col-md-4 floating-label">
        <input type="password" class="form-control" id="confirmPassword" placeholder=" " name="confirmPassword">
        <label for="confirmPassword">Confirm Password</label>
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
    <button type="submit" class="btn btn-custom px-5 py-3">Register</button>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</style>
</body>
</html>
<?php include 'validation.php'; ?>