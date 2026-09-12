<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- Body Content Start Here -->

<!-- banner Include Here  -->
<?php
$pageTitle = "Got questions? We've got answers.";
$pageDesc = "Everything about orders, shipping, returns, sizing and payments — in one place.";

$breadcrumbs = array(
    array('label' => 'Home', 'url' => './'),
    array('label' => 'FAQs', 'url' => '/faqs')
);

$showSearch = true;
$searchPlaceholder = "Search your question...";

$showTabs = true;
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

<!-- faqs-section Starts Here  -->
<section class="faqs____section section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="faqs____wrapper rounded-3">
                    <div class="accordion" id="faqAccordion">

                        <!-- Item 1 -->
                        <div class="accordion-item bg-transparent">
                            <h2 class="accordion-header" id="faqHeadingOne">
                                <button class="accordion-button collapsed level-7 sub-font extra-color-7 text-uppercase letter-spacing-1 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="false" aria-controls="faqCollapseOne">
                                    HOW DO I TRACK MY ORDER?
                                </button>
                            </h2>
                            <div id="faqCollapseOne" class="accordion-collapse collapse" aria-labelledby="faqHeadingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="level-8 primary-regular-font extra-color-6 mb-0">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="accordion-item bg-transparent">
                            <h2 class="accordion-header" id="faqHeadingTwo">
                                <button class="accordion-button collapsed level-7 sub-font extra-color-7 text-uppercase letter-spacing-1 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                                    HOW LONG DOES SHIPPING TAKE?
                                </button>
                            </h2>
                            <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="level-8 primary-regular-font extra-color-6 mb-0">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="accordion-item bg-transparent">
                            <h2 class="accordion-header" id="faqHeadingThree">
                                <button class="accordion-button collapsed level-7 sub-font extra-color-7 text-uppercase letter-spacing-1 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                                    WHAT IS YOUR RETURN POLICY?
                                </button>
                            </h2>
                            <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="level-8 primary-regular-font extra-color-6 mb-0">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 4 -->
                        <div class="accordion-item bg-transparent">
                            <h2 class="accordion-header" id="faqHeadingFour">
                                <button class="accordion-button collapsed level-7 sub-font extra-color-7 text-uppercase letter-spacing-1 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour">
                                    HOW DO I CHOOSE THE RIGHT JACKET SIZE?
                                </button>
                            </h2>
                            <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqHeadingFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="level-8 primary-regular-font extra-color-6 mb-0">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 5 -->
                        <div class="accordion-item bg-transparent">
                            <h2 class="accordion-header" id="faqHeadingFive">
                                <button class="accordion-button collapsed level-7 sub-font extra-color-7 text-uppercase letter-spacing-1 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFive" aria-expanded="false" aria-controls="faqCollapseFive">
                                    WHICH PAYMENT METHODS DO YOU ACCEPT?
                                </button>
                            </h2>
                            <div id="faqCollapseFive" class="accordion-collapse collapse" aria-labelledby="faqHeadingFive" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="level-8 primary-regular-font extra-color-6 mb-0">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 6 -->
                        <div class="accordion-item bg-transparent">
                            <h2 class="accordion-header" id="faqHeadingSix">
                                <button class="accordion-button collapsed level-7 sub-font extra-color-7 text-uppercase letter-spacing-1 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseSix" aria-expanded="false" aria-controls="faqCollapseSix">
                                    CAN I SAVE MULTIPLE WISHLISTS?
                                </button>
                            </h2>
                            <div id="faqCollapseSix" class="accordion-collapse collapse" aria-labelledby="faqHeadingSix" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="level-8 primary-regular-font extra-color-6 mb-0">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Item 7 -->
                        <div class="accordion-item bg-transparent">
                            <h2 class="accordion-header" id="faqHeadingSeven">
                                <button class="accordion-button collapsed level-7 sub-font extra-color-7 text-uppercase letter-spacing-1 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseSeven" aria-expanded="false" aria-controls="faqCollapseSeven">
                                    CAN I CHANGE MY ORDER AFTER PLACING IT?
                                </button>
                            </h2>
                            <div id="faqCollapseSeven" class="accordion-collapse collapse" aria-labelledby="faqHeadingSeven" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="level-8 primary-regular-font extra-color-6 mb-0">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="help_____wrapper text-center p-md-5 p-4 mt-5">
                    <h3 class="ml14 sub_____gradient level-3 sub-heading-font text-uppercase letter-spacing-1">
                        <span class="letters">Still need help?</span>
                    </h3>
                    <p class="level-8 para-font extra-color-6">Our rider support team answers within one business day.</p>
                    <a href="blogs-detail" class="btn contact______btn gap-2">Contact Us <span><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faqs-section Ends Here  -->

<!-- Body Content End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->