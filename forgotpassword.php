<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- body Content Starts Here  -->

<!-- auth-section Starts Here  -->
<section class="auth-section min-vh-100 d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="auth-data">
                    <div class="form-wrapper">
                        <div class="top-heading mb-4">
                            <h2 class="ml14 sub_____gradient level-3-lg sub-heading-font text-uppercase letter-spacing-1">
                                <span class="letters">Forgot Password.</span>
                            </h2>
                            <p class="level-8 para-font extra-color-6 mb-0">
                                Enter the email associated with your account and we'll send
                                a reset link.
                            </p>
                        </div>
                        <form action="otp">
                            <div class="login_____form">
                                <div class="form-group">
                                    <label class="form-label form-label-1">
                                        Email *
                                    </label>
                                    <div class="email____input position-relative">
                                        <i class="fa-regular fa-envelope"></i>
                                        <input
                                            type="email"
                                            class="form-control ps-5"
                                            placeholder="you@yourprogram.com">

                                    </div>
                                </div>
                                <button
                                    type="submit"
                                    class="btn contact______btn gap-2 w-100 mb-3">
                                    Send Reset Link <i class="fa-solid fa-arrow-right ms-1"></i>
                                </button>
                            </div>
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