<?php include 'includes/Header.php'; ?>
<!-- Hero Section -->
<section class="hero-section" style="color: #000000; padding: 100px 0;">
    <div class="container text-center mt-5">
        <h1 class="display-3 fw-bold mb-4">Contact Us</h1>
        <p class="lead mb-5">Get in touch with us for any questions, support, or partnership opportunities</p>
    </div>
</section>

<!-- Contact Form Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-5">
                        <h3 class="text-center mb-4">Send us a Message</h3>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName" class="form-label" >First Name</label>
                                    <input type="text" class="form-control" id="firstName" name="firstName" required data-validation="required nameOnly" data-min="2" data-max="50">
                                    <div id="firstName_error" class="text-danger small" style="display: none;"></div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" name="lastName" required data-validation="required nameOnly" data-min="2" data-max="50">
                                    <div id="lastName_error" class="text-danger small" style="display: none;"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" required data-validation="required email" data-max="100">
                                    <div id="email_error" class="text-danger small" style="display: none;"></div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" data-validation="required phone min max" data-min="10" data-max="10">
                                    <div id="phone_error" class="text-danger small" style="display: none;"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <select class="form-select" id="subject" name="subject" required data-validation="required">
                                    <option value="">Select a subject</option>
                                    <option value="general">General Inquiry</option>
                                    <option value="support">Technical Support</option>
                                    <option value="placement">Placement Related</option>
                                    <option value="partnership">Partnership Opportunity</option>
                                    <option value="feedback">Feedback</option>
                                    <option value="other">Other</option>
                                </select>
                                <div id="subject_error" class="text-danger small" style="display: none;"></div>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required data-validation="required min" data-min="10" data-max="1000"></textarea>
                                <div id="message_error" class="text-danger small" style="display: none;"></div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="newsletter">
                                    <label class="form-check-label" for="newsletter">
                                        Subscribe to our newsletter for updates and tips
                                    </label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg px-5">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Get in Touch</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-body text-center p-4">
                        <div class="contact-icon bg-primary text-white rounded-circle p-3 mx-auto mb-3">
                            <i class="fas fa-map-marker-alt fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Office Address</h4>
                        <p class="text-muted mb-2">Intervio Headquarters</p>
                        <p class="mb-0">123 Tech Park, Sector 15<br>Gurgaon, Haryana 122001<br>India</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-body text-center p-4">
                        <div class="contact-icon bg-success text-white rounded-circle p-3 mx-auto mb-3">
                            <i class="fas fa-phone fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Phone Numbers</h4>
                        <p class="text-muted mb-2">Reach us anytime</p>
                        <p class="mb-0">+91 98765 43210<br>+91 98765 43211<br>Mon-Fri: 9:00 AM - 6:00 PM</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-body text-center p-4">
                        <div class="contact-icon bg-info text-white rounded-circle p-3 mx-auto mb-3">
                            <i class="fas fa-envelope fa-2x"></i>
                        </div>
                        <h4 class="mb-3">Email Addresses</h4>
                        <p class="text-muted mb-2">Drop us a line</p>
                        <p class="mb-0">info@intervio.com<br>support@intervio.com<br>partnerships@intervio.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Frequently Asked Questions</h2>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item mb-3">
                        <h2 class="accordion-header" id="heading1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                                How do I get started with Intervio?
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Getting started is easy! Simply sign up for a free account, browse our preparation materials, and start practicing. You can access basic resources for free and upgrade to premium for advanced features.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3">
                        <h2 class="accordion-header" id="heading2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                                What types of companies partner with Intervio?
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We partner with a wide range of companies from startups to MNCs, including tech giants like Google, Microsoft, Amazon, and many leading Indian companies across various sectors.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3">
                        <h2 class="accordion-header" id="heading3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                                Is there a mobile app available?
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes! Intervio is available on both iOS and Android platforms. You can download our app from the App Store or Google Play Store to learn on the go.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3">
                        <h2 class="accordion-header" id="heading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4">
                                How can companies partner with Intervio?
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Companies can partner with us for campus recruitment, skill assessment, and training programs. Please email us at partnerships@intervio.com or fill the contact form above.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5">
                                What is your success rate?
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We have a 95% success rate with over 10,000 students placed in top companies. Our comprehensive preparation approach and industry partnerships ensure excellent outcomes.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Visit Our Office</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow">
                    <div class="card-body p-0">
                        <div class="map-container">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.123456789!2d77.123456789!3d28.123456789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjjCsDA3JzI2LjEiTiA3N8KwMDcnMjUuNCJF!5e0!3m2!1sen!2sin!4v1234567890" 
                                width="100%" 
                                height="400" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Social Media -->
<section class="py-5">
    <div class="container">
        <div class="text-center">
            <h2 class="mb-4">Connect With Us</h2>
            <p class="lead mb-4">Follow us on social media for updates, tips, and success stories</p>
            <div class="d-flex justify-content-center">
                <a href="#" class="btn btn-primary btn-lg me-3">
                    <i class="fab fa-facebook-f me-2"></i>Facebook
                </a>
                <a href="#" class="btn btn-info btn-lg me-3">
                    <i class="fab fa-twitter me-2"></i>Twitter
                </a>
                <a href="#" class="btn btn-danger btn-lg me-3">
                    <i class="fab fa-instagram me-2"></i>Instagram
                </a>
                <a href="#" class="btn btn-primary btn-lg me-3">
                    <i class="fab fa-linkedin me-2"></i>LinkedIn
                </a>
                <a href="#" class="btn btn-dark btn-lg">
                    <i class="fab fa-youtube me-2"></i>YouTube
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Response Time Info -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow">
                    <div class="card-body p-4">
                        <div class="row text-center">
                            <div class="col-md-3 mb-3">
                                <div class="response-icon bg-success text-white rounded-circle p-3 mx-auto mb-2">
                                    <i class="fas fa-envelope fa-2x"></i>
                                </div>
                                <h5>Email Response</h5>
                                <p class="text-muted">Within 24 hours</p>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="response-icon bg-primary text-white rounded-circle p-3 mx-auto mb-2">
                                    <i class="fas fa-phone fa-2x"></i>
                                </div>
                                <h5>Phone Support</h5>
                                <p class="text-muted">Mon-Fri, 9AM-6PM</p>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="response-icon bg-warning text-white rounded-circle p-3 mx-auto mb-2">
                                    <i class="fas fa-comments fa-2x"></i>
                                </div>
                                <h5>Live Chat</h5>
                                <p class="text-muted">Available 24/7</p>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="response-icon bg-info text-white rounded-circle p-3 mx-auto mb-2">
                                    <i class="fas fa-headset fa-2x"></i>
                                </div>
                                <h5>Priority Support</h5>
                                <p class="text-muted">Premium Members</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/validate.js"></script>

<?php include 'includes/Footer.php'; ?>
