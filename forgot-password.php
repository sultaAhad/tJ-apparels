<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->



<!-- Body Content Start Here -->
<section class="tj-auth-section">
    <div class="tj-auth-glow tj-auth-glow-1"></div>
    <div class="tj-auth-glow tj-auth-glow-2"></div>

    <div class="container d-flex justify-content-center">
        <div class="tj-auth-card">
            
            <h2 class="tj-auth-title">Forgot Password</h2>
            <p class="tj-auth-desc">Enter your registered email address and we'll send you a verification code to reset your password.</p>

            <form action="verify-otp.php" method="POST">
                <div>
                    <label class="tj-form-label">Email Address *</label>
                    <input type="email" class="tj-auth-input" placeholder="John@email.com" required>
                </div>

                <button type="submit" class="tj-gradient-btn">Send OTP Code <i class="fa-solid fa-arrow-right ms-1"></i></button>
            </form>

            <div class="tj-auth-footer-text">
                Remember your password? <a href="login.php">Sign In</a>
            </div>

        </div>
    </div>
</section>
<!-- Body Content End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->