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

<style>
    :root {
        --tj-border: rgba(135, 120, 255, 0.16);
        --tj-purple: #7d35e8;
        --tj-pink: #e936a7;
    }

    .tj-contact-section {
        background-color: #0b0b1a;
        position: relative;
    }

    /* Info Cards Style */
    .tj-contact-info-card {
        background: linear-gradient(145deg, rgba(17, 17, 43, 0.8), rgba(10, 10, 26, 0.9));
        border: 1px solid var(--tj-border);
        border-radius: 16px;
        padding: 20px 24px;
        margin-bottom: 20px;
        display: flex;
        align-items: flex-start;
        gap: 18px;
        transition: 0.3s ease;
    }

    .tj-contact-info-card:hover {
        border-color: rgba(125, 53, 232, 0.4);
        box-shadow: 0 4px 20px rgba(125, 53, 232, 0.1);
    }

    .tj-contact-icon {
        width: 45px;
        height: 45px;
        border-radius: 12px;
        background: rgba(125, 53, 232, 0.1);
        border: 1px solid rgba(125, 53, 232, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--tj-pink);
        font-size: 16px;
        flex-shrink: 0;
    }

    .tj-contact-details label {
        font-size: 10px;
        letter-spacing: 1.5px;
        color: rgba(255, 255, 255, 0.4);
        text-transform: uppercase;
        font-weight: 700;
        display: block;
        margin-bottom: 4px;
    }

    .tj-contact-details span, 
    .tj-contact-details a {
        font-size: 14px;
        color: #ffffff;
        font-weight: 500;
        text-decoration: none;
        transition: 0.3s;
    }

    .tj-contact-details a:hover {
        color: var(--tj-pink);
    }

    .tj-faq-card {
        background: linear-gradient(145deg, rgba(17, 17, 43, 0.8), rgba(10, 10, 26, 0.9));
        border: 1px solid var(--tj-border);
        border-radius: 16px;
        padding: 20px 24px;
        font-size: 13px;
        color: rgba(255, 255, 255, 0.7);
        line-height: 1.5;
    }

    .tj-faq-card a {
        color: #fff;
        text-decoration: underline;
        font-weight: 600;
    }

    .tj-faq-card a:hover {
        color: var(--tj-pink);
    }

    /* Form Container Style */
    .tj-contact-form-wrapper {
        background: linear-gradient(145deg, rgba(17, 17, 43, 0.9), rgba(10, 10, 26, 0.95));
        border: 1px solid var(--tj-border);
        border-radius: 24px;
        padding: 40px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
    }

    .tj-form-title {
        font-size: 28px;
        font-weight: 800;
        color: #fff;
        margin-bottom: 8px;
    }

    .tj-form-desc {
        color: rgba(255, 255, 255, 0.5);
        font-size: 13.5px;
        margin-bottom: 30px;
    }

    .tj-input-group-custom {
        margin-bottom: 20px;
    }

    .tj-input-group-custom label {
        font-size: 11.5px;
        font-weight: 600;
        color: rgba(255, 255, 255, 0.7);
        margin-bottom: 8px;
        display: block;
    }

    .tj-form-control {
        width: 100%;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid var(--tj-border);
        border-radius: 12px;
        padding: 12px 16px;
        color: #fff;
        font-size: 13.5px;
        outline: none;
        transition: 0.3s;
    }

    .tj-form-control::placeholder {
        color: rgba(255, 255, 255, 0.25);
    }

    .tj-form-control:focus {
        border-color: var(--tj-pink);
        background: rgba(255, 255, 255, 0.05);
        box-shadow: 0 0 12px rgba(233, 54, 167, 0.25);
    }

    textarea.tj-form-control {
        resize: none;
        height: 140px;
    }

    select.tj-form-control option {
        background: #11112b;
        color: #fff;
    }

    .tj-submit-btn {
        background: linear-gradient(135deg, var(--tj-purple), var(--tj-pink));
        border: none;
        border-radius: 50px;
        padding: 12px 30px;
        color: #fff;
        font-weight: 600;
        font-size: 13.5px;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        cursor: pointer;
        box-shadow: 0 4px 15px rgba(125, 53, 232, 0.35);
        transition: 0.3s;
    }

    .tj-submit-btn:hover {
        opacity: 0.9;
        box-shadow: 0 6px 20px rgba(233, 54, 167, 0.5);
    }

    @media (max-width: 991px) {
        .tj-contact-form-wrapper {
            padding: 25px;
        }
    }
</style>

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
                                    <input type="text" class="tj-form-control" name="full_name" placeholder="Amelia Reyes" required>
                                </div>
                            </div>
                            <!-- Email Address -->
                            <div class="col-md-6">
                                <div class="tj-input-group-custom">
                                    <label>Email Address</label>
                                    <input type="email" class="tj-form-control" name="email" placeholder="you@email.com" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Phone -->
                            <div class="col-md-6">
                                <div class="tj-input-group-custom">
                                    <label>Phone</label>
                                    <input type="text" class="tj-form-control" name="phone" placeholder="(479) 000-0000">
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
                            <textarea class="tj-form-control" name="message" placeholder="How can we help?" required></textarea>
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