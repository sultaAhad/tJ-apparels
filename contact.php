<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- banner Include Here  -->
<?php 
$subtitle = "Get In Touch";
$title = "Contact Us";
$desc = "We would love to hear from you. Reach out to us for any queries.";
$currentPage = "Contact Us";

include 'inc/inner-banner.php'; 
?>
<!-- banner Include Here  -->



<!-- Body Content Start Here -->
<main class="tj-contact-section py-5">
    <div class="container py-4">
        <div class="row g-4">

            <!-- LEFT COLUMN: Contact Information Cards -->
            <div class="col-lg-5">

                <!-- Email Card -->
                <div class="tj-contact-info-card">
                    <div class="tj-contact-icon">
                        <i class="fa-regular fa-envelope"></i>
                    </div>
                    <div class="tj-contact-details">
                        <label>Email</label>
                        <a href="mailto:info@tjapparels.com">info@tjapparels.com</a>
                    </div>
                </div>

                <!-- Phone Card -->
                <div class="tj-contact-info-card">
                    <div class="tj-contact-icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="tj-contact-details">
                        <label>Phone</label>
                        <a href="tel:4797631102">(479) 763-1102</a>
                    </div>
                </div>

                <!-- Studio Card -->
                <div class="tj-contact-info-card">
                    <div class="tj-contact-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="tj-contact-details">
                        <label>Studio</label>
                        <span>1420 Rogers Avenue, Fort Smith, AR 72901</span>
                    </div>
                </div>

                <!-- Hours Card -->
                <div class="tj-contact-info-card">
                    <div class="tj-contact-icon">
                        <i class="fa-regular fa-clock"></i>
                    </div>
                    <div class="tj-contact-details">
                        <label>Hours</label>
                        <span>Mon–Fri 9am–6pm CT - Sat 10am–4pm</span>
                    </div>
                </div>

                <!-- FAQ Helper Card -->
                <div class="tj-faq-card">
                    Looking for sizing help or returns? Most answers live in our <a href="faq.php">FAQs</a>.
                </div>

            </div>

            <!-- RIGHT COLUMN: Contact Form -->
            <div class="col-lg-7">
                <div class="tj-contact-form-wrapper">
                    <h2 class="tj-form-title">Send us a message</h2>
                    <p class="tj-form-desc">Fill in the form and we'll get back to you by email.</p>

                    <form action="#" method="POST">
                        <div class="row">
                            <!-- Full Name -->
                            <div class="col-md-6">
                                <div class="tj-input-group-custom">
                                    <label>Full Name</label>
                                    <input type="text" class="tj-form-control" name="full_name"
                                        placeholder="Amelia Reyes" required>
                                </div>
                            </div>
                            <!-- Email Address -->
                            <div class="col-md-6">
                                <div class="tj-input-group-custom">
                                    <label>Email Address</label>
                                    <input type="email" class="tj-form-control" name="email" placeholder="you@email.com"
                                        required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Phone -->
                            <div class="col-md-6">
                                <div class="tj-input-group-custom">
                                    <label>Phone</label>
                                    <input type="text" class="tj-form-control" name="phone"
                                        placeholder="(479) 000-0000">
                                </div>
                            </div>
                            <!-- Subject -->
                            <div class="col-md-6">
                                <div class="tj-input-group-custom">
                                    <label>Subject</label>
                                    <select class="tj-form-control" name="subject">
                                        <option value="" disabled selected>Select subject</option>
                                        <option value="General Inquiry">General Inquiry</option>
                                        <option value="Sizing Help">Sizing Help</option>
                                        <option value="Returns">Returns & Refunds</option>
                                        <option value="Order Tracking">Order Tracking</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Message -->
                        <div class="tj-input-group-custom">
                            <label>Message</label>
                            <textarea class="tj-form-control" name="message" placeholder="How can we help?"
                                required></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="tj-submit-btn">
                            Send Message <i class="fa-solid fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</main>
<!-- Body Content End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->