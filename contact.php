<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- Body Content Start Here -->

<!-- banner Include Here  -->
<?php
$pageTitle = "Let's talk about the ride.";
$pageDesc = "Whether it's sizing, shipping or a build question — our rider support team knows the gear inside
out.";

$breadcrumbs = array(
    array('label' => 'Home', 'url' => './'),
    array('label' => 'Contact', 'url' => '/contact')
);

$showSearch = false;
$searchPlaceholder = "Search your question...";

$showTabs = false;
$tabsList = array(
    array('id' => 'all', 'label' => 'ALL'),
    array('id' => 'bike-culture', 'label' => 'Orders'),
    array('id' => 'riding-guides', 'label' => 'Shipping'),
    array('id' => 'maintenance', 'label' => 'Returns'),
    array('id' => 'gear', 'label' => 'Products'),
    array('id' => 'heritage', 'label' => 'Payments'),
    array('id' => 'travel', 'label' => 'Account')
);

include 'inc/sub-banner.php';
?>
<!-- banner Include Here  -->

<!-- contact-section Starts Here  -->
<section class="contact____section section">
    <div class="container">
        <div class="row g-4 mb-4">
            <div class="col-lg-4 col-md-6">
                <div class="contact____top____card bg_____wrap p-4 rounded-3 h-100 d-flex flex-column justify-content-between">
                    <div class="contact____detail">
                        <h5 class="level-5 sub-heading-font extra-color-7 text-uppercase letter-spacing-1 mb-2">
                            CUSTOMER SUPPORT
                        </h5>
                        <p class="level-8 para-font extra-color-6 mb-3">
                            Questions about orders, products or returns.
                        </p>
                    </div>
                    <a href="#" class="contact____link level-9 primary-semibold-font text-uppercase text-decoration-none d-inline-flex align-items-center gap-2">
                        GET SUPPORT <i class="fa-solid fa-arrow-right level-10"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact____top____card bg_____wrap p-4 rounded-3 h-100 d-flex flex-column justify-content-between">
                    <div class="contact____detail">
                        <h5 class="level-5 sub-heading-font extra-color-7 text-uppercase letter-spacing-1 mb-2">
                            ORDER HELP
                        </h5>
                        <p class="level-8 para-font extra-color-6 mb-3">
                            Need help tracking your order?
                        </p>
                    </div>
                    <a href="#" class="contact____link level-9 primary-semibold-font text-uppercase text-decoration-none d-inline-flex align-items-center gap-2">
                        TRACK ORDER <i class="fa-solid fa-arrow-right level-10"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact____top____card bg_____wrap p-4 rounded-3 h-100 d-flex flex-column justify-content-between">
                    <div class="contact____detail">
                        <h5 class="level-5 sub-heading-font extra-color-7 text-uppercase letter-spacing-1 mb-2">
                            GENERAL INQUIRIES
                        </h5>
                        <p class="level-8 para-font extra-color-6 mb-3">
                            Have something else in mind?
                        </p>
                    </div>
                    <a href="#" class="contact____link level-9 primary-semibold-font text-uppercase text-decoration-none d-inline-flex align-items-center gap-2">
                        CONTACT TEAM <i class="fa-solid fa-arrow-right level-10"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="contact____form____wrapper bg_____wrap p-3 p-md-4 rounded-3">
                    <h3 class="level-4 sub-heading-font extra-color-7 letter-spacing-1 text-uppercase mb-4">
                        SEND A MESSAGE
                    </h3>
                    <form action="#">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label form-label-1">First Name *</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label form-label-1">Last Name *</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label form-label-1">Email *</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label form-label-1">Phone</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label form-label-1">Subject *</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label form-label-1">Message *</label>
                                    <textarea class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn contact______btn gap-2">
                                    SEND MESSAGE <i class="fa-solid fa-arrow-right ms-1"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact____info____wrapper bg_____wrap p-4 rounded-3">
                    <h5 class="level-5 sub-heading-font extra-color-7 letter-spacing-1 text-uppercase mb-4">
                        CONTACT INFORMATION
                    </h5>
                    <ul class="contact____list list-unstyled d-flex flex-column gap-2">
                        <li>
                            <a href="mailto:info@tjbiker.com" class="level-8 para-font extra-color-6 text-decoration-none">
                                <i class="fas fa-envelope me-2 extra-color-1"></i>
                                info@tjbiker.com
                            </a>
                        </li>
                        <li>
                            <a href="tel:(512) 555-0134" class="level-8 para-font extra-color-6 text-decoration-none">
                                <i class="fas fa-phone me-2 extra-color-1"></i>
                                (512) 555-0134
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="level-8 para-font extra-color-6 text-decoration-none">
                                <i class="fa-regular fa-clock me-2 extra-color-1"></i>
                                Mon–Fri, 9am–6pm CT
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-section Ends Here  -->

<!-- Body Content End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->