<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- body Content Starts Here  -->

<!-- auth-section Starts Here  -->
<section class="auth-section min-vh-100 d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7 col-sm-9">
                <div class="auth-data">
                    <div class="form-wrapper">
                        <div class="top-heading mb-4">
                            <h2 class="ml14 sub_____gradient level-3-lg sub-heading-font text-uppercase letter-spacing-1">
                                <span class="letters">Welcome back, rider.</span>
                            </h2>
                            <p class="level-8 para-font extra-color-6 mb-0">
                                Sign in to track orders, save gear and check out
                                faster.
                            </p>
                        </div>
                        <form action="profile" method="post">
                            <div class="login_____form">
                                <div class="form-group">
                                    <label class="form-label form-label-1">Email *</label>
                                    <input
                                        type="email"
                                        class="form-control"
                                        placeholder="rider@email.comm">
                                </div>
                                <div class="form-group position-relative">
                                    <label class="form-label form-label-1">Password *</label>
                                    <input
                                        type="password"
                                        class="form-control pe-5"
                                        placeholder="••••••••">
                                    <button
                                        class="input-inline-btn shop-password"
                                        type="button">
                                        <i class="fa-regular fa-eye"></i>
                                    </button>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div class="custom-checkbox">
                                        <input type="checkbox" id="remember" hidden>
                                        <label
                                            for="remember"
                                            class="extra-color-6 level-8 para-font d-flex align-items-center">
                                            Remember me
                                        </label>
                                    </div>
                                    <a href="./forgotpassword"
                                        class="extra-color-1 level-10 sub-font letter-spacing-3 text-uppercase text-decoration-none">
                                        Forgot Password?
                                    </a>
                                </div>
                                <button
                                    type="submit"
                                    class="btn contact______btn gap-2 w-100 mb-3">
                                    Sign In <i class="fa-solid fa-arrow-right ms-1"></i>
                                </button>
                                <button
                                    type="button"
                                    class="btn auth____google____btn w-100">
                                    Continue With Google
                                </button>
                            </div>
                            <hr class="profile-divider">
                            <p class="text-center mt-4 mb-0 level-8 para-font extra-color-6">
                                New here?
                                <a href="./signup"
                                    class="extra-color-1 level-10 sub-font letter-spacing-3 text-decoration-none text-uppercase">
                                    Create Account
                                </a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- auth-section Ends Here  -->

<!-- body Content Ends Here  -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->