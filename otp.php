<!-- App Include Here -->
<?php $headerClass = 'header-absolute';
include 'inc/app.php'; ?>
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
                                <span class="letters"> Enter OTP Code</span>
                            </h2>
                            <p class="level-8 para-font extra-color-6 mb-0">
                                Enter the email associated with your account and we'll send
                                a reset link.
                            </p>
                        </div>
                        <form action="new-password" method="post">
                            <div class="login_____form">
                                <div class="row g-3">
                                    <div class="col-3">
                                        <div class="form-group mb-0">
                                            <input
                                                type="text"
                                                name="otp1"
                                                id="otp1"
                                                maxlength="1"
                                                class="form-control text-center otp____input"
                                                placeholder="0"
                                                oninput="moveToNext(this,'otp2')">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group mb-0">
                                            <input
                                                type="text"
                                                name="otp2"
                                                id="otp2"
                                                maxlength="1"
                                                class="form-control text-center otp____input"
                                                placeholder="0"
                                                oninput="moveToNext(this,'otp3')">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group mb-0">
                                            <input
                                                type="text"
                                                name="otp3"
                                                id="otp3"
                                                maxlength="1"
                                                class="form-control text-center otp____input"
                                                placeholder="0"
                                                oninput="moveToNext(this,'otp4')">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group mb-0">
                                            <input
                                                type="text"
                                                name="otp4"
                                                id="otp4"
                                                maxlength="1"
                                                class="form-control text-center otp____input"
                                                placeholder="0">
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <button
                                            type="submit"
                                            class="btn contact______btn gap-2 w-100 mb-3">
                                            Submit <i class="fa-solid fa-arrow-right ms-1"></i>
                                        </button>
                                    </div>
                                </div>
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