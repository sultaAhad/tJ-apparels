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
                                <span class="letters">Join the Brotherhood</span>
                            </h2>
                            <p class="level-8 para-font extra-color-6 mb-0">
                                Early access to drops, rider-only pricing and stories
                                from the road.
                            </p>
                        </div>
                        <form action="profile" method="post">
                            <div class="login_____form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label form-label-1">
                                                First Name *
                                            </label>
                                            <input type="text"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label form-label-1">
                                                Last Name *
                                            </label>
                                            <input type="text"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label form-label-1">
                                                Email <span class="extra-color-1"> * </span>
                                            </label>
                                            <input type="email"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group position-relative">
                                            <label class="form-label form-label-1">
                                                Password *
                                            </label>
                                            <input
                                                type="password"
                                                class="form-control pe-5">
                                            <button
                                                class="input-inline-btn shop-password"
                                                type="button">
                                                <i class="fa-regular fa-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group position-relative">
                                            <label class="form-label form-label-1">
                                                Confirm Password *
                                            </label>
                                            <input
                                                type="password"
                                                class="form-control pe-5">
                                            <button
                                                class="input-inline-btn shop-password"
                                                type="button">
                                                <i class="fa-regular fa-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-4">
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="terms" hidden>
                                            <label
                                                for="terms"
                                                class="extra-color-6 level-9 para-font d-flex align-items-start">
                                                I agree to the <a href="#" class="extra-color-1 text-decoration-none px-1"> Terms & Conditions </a> and acknowledge the <a href="#" class="extra-color-1 text-decoration-none ps-1"> Privacy Policy.</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button
                                            type="submit"
                                            class="btn contact______btn gap-2 w-100 mb-3">
                                            Create Account <i class="fa-solid fa-arrow-right ms-1"></i>
                                        </button>
                                    </div>
                                </div>
                                <hr class="profile-divider">
                                <p class="text-center mt-4 mb-0 level-8 para-font extra-color-6">
                                    Already riding with us?
                                    <a href="login"
                                        class="extra-color-1 level-10 sub-font letter-spacing-3 text-decoration-none text-uppercase">
                                        Sign In
                                    </a>
                                </p>
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