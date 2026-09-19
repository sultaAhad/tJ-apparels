<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->


<!-- Body Content Start Here -->
<section class="tj-auth-section">
    <div class="tj-auth-glow tj-auth-glow-1"></div>
    <div class="tj-auth-glow tj-auth-glow-2"></div>

    <div class="container d-flex justify-content-center">
        <div class="tj-auth-card">
            
            <h2 class="tj-auth-title">Welcome Back, TJ.</h2>
            <p class="tj-auth-desc">Sign in to track orders, save gear and check out faster.</p>

            <form action="profile.php" method="POST">
                <div class="mb-3">
                    <label class="tj-form-label">Email *</label>
                    <input type="email" class="tj-auth-input" placeholder="John@email.com" required>
                </div>

                <div class="mb-2">
                    <label class="tj-form-label">Password *</label>
                    <div class="tj-password-wrap position-relative">
                        <input type="password" class="tj-auth-input pe-5" placeholder="********" required>
                        <span class="tj-toggle-password position-absolute top-50 end-0 translate-middle-y me-3" style="cursor: pointer;">
                            <i class="fa-regular fa-eye"></i>
                        </span>
                    </div>
                </div>

                <div class="text-end mb-3">
                    <a href="forgot-password.php" class="tj-forgot-link">Forgot Password?</a>
                </div>

                <button type="submit" class="tj-gradient-btn">Sign In <i class="fa-solid fa-arrow-right ms-1"></i></button>
            </form>

            <a href="#" class="tj-google-btn my-3">Continue with Google</a>

            <div class="tj-auth-footer-text">
                New here? <a href="register.php">Create Account</a>
            </div>

        </div>
    </div>
</section>
<!-- Body Content End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->