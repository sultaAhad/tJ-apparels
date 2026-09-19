<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- Body Content Start Here -->
<section class="tj-auth-section">
    <div class="tj-auth-glow tj-auth-glow-1"></div>
    <div class="tj-auth-glow tj-auth-glow-2"></div>

    <div class="container d-flex justify-content-center">
        <div class="tj-auth-card">
            
            <h2 class="tj-auth-title">Join the Brotherhood</h2>
            <p class="tj-auth-desc">Early access to drops, rider-only pricing and stories from the road.</p>

            <form action="#" method="POST">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="tj-form-label">First Name *</label>
                        <input type="text" class="tj-auth-input" placeholder="John" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="tj-form-label">Last Name *</label>
                        <input type="text" class="tj-auth-input" placeholder="Doe" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="tj-form-label">Email *</label>
                    <input type="email" class="tj-auth-input" placeholder="John@email.com" required>
                </div>

                <!-- Password 1 with Eye Toggle -->
                <div class="mb-3">
                    <label class="tj-form-label">Password *</label>
                    <div class="tj-password-wrap position-relative">
                        <input type="password" class="tj-auth-input pe-5" placeholder="********" required>
                        <span class="tj-toggle-password position-absolute top-50 end-0 translate-middle-y me-3" style="cursor: pointer;">
                            <i class="fa-regular fa-eye"></i>
                        </span>
                    </div>
                </div>

                <!-- Password 2 with Eye Toggle -->
                <div class="mb-3">
                    <label class="tj-form-label">Confirm Password *</label>
                    <div class="tj-password-wrap position-relative">
                        <input type="password" class="tj-auth-input pe-5" placeholder="********" required>
                        <span class="tj-toggle-password position-absolute top-50 end-0 translate-middle-y me-3" style="cursor: pointer;">
                            <i class="fa-regular fa-eye"></i>
                        </span>
                    </div>
                </div>

                <div class="tj-checkbox-wrapper mb-3">
                    <input type="checkbox" id="termsCheck" required>
                    <label for="termsCheck">I agree to the <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a></label>
                </div>

                <button type="submit" class="tj-gradient-btn">Create Account <i class="fa-solid fa-arrow-right ms-1"></i></button>
            </form>

            <div class="tj-auth-footer-text mt-3">
                Already riding with us? <a href="login.php">Sign In</a>
            </div>

        </div>
    </div>
</section>
<!-- Body Content End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->