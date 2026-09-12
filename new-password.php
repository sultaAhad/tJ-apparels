<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- body Content Starts Here  -->

<!-- auth-section Starts Here -->
<section class="auth-section min-vh-100 d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="auth-data">
                    <div class="form-wrapper">
                        <div class="top-heading mb-4">
                            <h2 class="ml14 sub_____gradient level-3-lg sub-heading-font text-uppercase letter-spacing-1">
                                <span class="letters">Password.</span>
                            </h2>
                            <p class="level-8 para-font extra-color-6 mb-0">
                                Enter the email associated with your account and we'll send
                                a reset link.
                            </p>
                        </div>
                        <form action="login" method="POST">
                            <div class="login_____form">
                                <div class="form-group mb-3">
                                    <div class="position-relative">
                                        <i class="fa-solid fa-lock position-absolute start-0 top-50 translate-middle-y ms-3 extra-color-6"></i>
                                        <input
                                            type="password"
                                            name="password"
                                            class="form-control ps-5 pe-5"
                                            placeholder="New password">
                                        <button
                                            type="button"
                                            class="input-inline-btn shop-password">
                                            <i class="fa-regular fa-eye"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="position-relative">
                                        <i class="fa-solid fa-lock position-absolute start-0 top-50 translate-middle-y ms-3 extra-color-6"></i>
                                        <input
                                            type="password"
                                            name="password_confirmation"
                                            class="form-control ps-5 pe-5"
                                            placeholder="Confirm password">
                                        <button
                                            type="button"
                                            class="input-inline-btn shop-password">
                                            <i class="fa-regular fa-eye"></i>
                                        </button>
                                    </div>
                                </div>
                                <button
                                    type="submit"
                                    class="btn contact______btn gap-2 w-100 mb-3">
                                    Update Password <i class="fa-solid fa-arrow-right ms-1"></i>
                                </button>
                            </div>
                        </form>
                        <hr class="profile-divider">
                        <p class="text-center mt-4 mb-0 level-8 para-font extra-color-6">
                            Remembered?
                            <a href="login"
                                class="extra-color-1 level-10 sub-font letter-spacing-3 text-decoration-none text-uppercase">
                                Remembered?
                            </a>
                        </p>
                    </div>
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