<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- banner Include Here  -->
<?php 
$subtitle = "Got Questions?";
$title = "Help Center";
$desc = "Find answers to common questions about orders, shipping, returns, and more.";
$currentPage = "Help Center";

include 'inc/inner-banner.php'; 
?>
<!-- banner Include Here  -->

<style>
:root {
    --tj-border: rgba(135, 120, 255, 0.16);
    --tj-purple: #7d35e8;
    --tj-pink: #e936a7;
}

.tj-help-section {
    background-color: #090b29;
    position: relative;
}

/* Search Bar */
.tj-help-search-wrap {
    max-width: 600px;
    margin: 0 auto 25px auto;
    position: relative;
}

.tj-help-search-input {
    width: 100%;
    background: #11153b;
    border: 1px solid var(--tj-border);
    border-radius: 50px;
    padding: 14px 20px 14px 48px;
    color: #fff;
    font-size: 13.5px;
    outline: none;
    transition: 0.3s;
}

.tj-help-search-input::placeholder {
    color: rgba(255, 255, 255, 0.3);
}

.tj-help-search-input:focus {
    border-color: var(--tj-pink);
    box-shadow: 0 0 15px rgba(233, 54, 167, 0.2);
}

.tj-help-search-icon {
    position: absolute;
    left: 20px;
    top: 50%;
    transform: translateY(-50%);
    color: rgba(255, 255, 255, 0.4);
    font-size: 14px;
}

/* Bootstrap Nav Tabs Custom Styling */
.tj-help-filters.nav-tabs {
    border: none;
    justify-content: center;
    gap: 10px;
    margin-bottom: 40px;
}

.tj-help-filters .nav-link {
    background: linear-gradient(145deg, rgba(17, 17, 43, 0.8), rgba(10, 10, 26, 0.9));
    border: 1px solid var(--tj-border) !important;
    border-radius: 50px !important;
    padding: 8px 22px;
    color: rgba(255, 255, 255, 0.7);
    font-size: 12.5px;
    font-weight: 600;
    cursor: pointer;
    transition: 0.3s;
}

.tj-help-filters .nav-link:hover {
    border-color: var(--tj-pink) !important;
    color: #fff;
}

.tj-help-filters .nav-link.active {
    background: linear-gradient(135deg, var(--tj-purple), var(--tj-pink)) !important;
    border-color: transparent !important;
    color: #fff !important;
    box-shadow: 0 4px 15px rgba(125, 53, 232, 0.3);
}

/* FAQ Accordion Styling */
.tj-faq-container {
    max-width: 750px;
    margin: 0 auto 50px auto;
}

.tj-faq-item {
    background: #11143f;
    border: 1px solid var(--tj-border);
    border-radius: 14px;
    margin-bottom: 14px;
    overflow: hidden;
    transition: 0.3s;
}

.tj-faq-item:hover {
    border-color: rgba(125, 53, 232, 0.4);
}

.tj-faq-question {
    width: 100%;
    background: none;
    border: none;
    padding: 18px 22px;
    color: #fff;
    font-size: 14px;
    font-weight: 700;
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
    text-align: left;
}
.tj-faq-item.active .tj-faq-question {
    border-bottom: 1px solid #ffffff3b;
    margin-bottom: 11px;
}
.tj-faq-question i {
    color: rgba(255, 255, 255, 0.5);
    font-size: 12px;
    transition: transform 0.3s ease;
}

.tj-faq-item.active .tj-faq-question i {
    transform: rotate(180deg);
    color: var(--tj-pink);
}

.tj-faq-answer {
    padding: 0 22px 18px 22px;
    font-size: 12.5px;
    color: rgba(255, 255, 255, 0.55);
    line-height: 1.6;
    display: none;
}

.tj-faq-item.active .tj-faq-answer {
    display: block;
}

/* Still Need a Hand Card */
.tj-support-card {
    max-width: 750px;
    margin: 0 auto;
    background: linear-gradient(135deg, rgba(125, 53, 232, 0.85), rgba(233, 54, 167, 0.85));
    border-radius: 20px;
    padding: 40px 30px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(125, 53, 232, 0.3);
}

.tj-support-card h3 {
    font-size: 20px;
    font-weight: 800;
    color: #fff;
    margin-bottom: 8px;
}

.tj-support-card p {
    font-size: 12.5px;
    color: rgba(255, 255, 255, 0.85);
    margin-bottom: 22px;
    max-width: 450px;
    margin-left: auto;
    margin-right: auto;
}

.tj-contact-us-btn {
    background: #0b0b1a;
    color: #fff;
    border: none;
    border-radius: 50px;
    padding: 10px 30px;
    font-size: 13px;
    font-weight: 700;
    cursor: pointer;
    transition: 0.3s;
    text-decoration: none;
    display: inline-block;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

.tj-contact-us-btn:hover {
    background: #fff;
    color: #0b0b1a;
}
</style>

<!-- Body Content Start Here -->
<main class="tj-help-section py-5">
    <div class="container py-3">

        <!-- Search Bar -->
        <div class="tj-help-search-wrap">
            <i class="fa-solid fa-magnifying-glass tj-help-search-icon"></i>
            <input type="text" class="tj-help-search-input" placeholder="Search help articles...">
        </div>

        <!-- Bootstrap Nav Tabs (Filters) -->
        <ul class="nav nav-tabs tj-help-filters" id="helpTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all-pane"
                    type="button" role="tab" aria-controls="all-pane" aria-selected="true">All</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="shopping-tab" data-bs-toggle="tab" data-bs-target="#shopping-pane"
                    type="button" role="tab" aria-controls="shopping-pane" aria-selected="false">Shopping</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="orders-tab" data-bs-toggle="tab" data-bs-target="#orders-pane"
                    type="button" role="tab" aria-controls="orders-pane" aria-selected="false">Orders</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="shipping-tab" data-bs-toggle="tab" data-bs-target="#shipping-pane"
                    type="button" role="tab" aria-controls="shipping-pane" aria-selected="false">Shipping</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="returns-tab" data-bs-toggle="tab" data-bs-target="#returns-pane"
                    type="button" role="tab" aria-controls="returns-pane" aria-selected="false">Returns</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="account-tab" data-bs-toggle="tab" data-bs-target="#account-pane"
                    type="button" role="tab" aria-controls="account-pane" aria-selected="false">Account</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="payments-tab" data-bs-toggle="tab" data-bs-target="#payments-pane"
                    type="button" role="tab" aria-controls="payments-pane" aria-selected="false">Payments</button>
            </li>
        </ul>

        <!-- Tab Content Panes -->
        <div class="tab-content" id="helpTabContent">

            <!-- ALL PANE -->
            <div class="tab-pane fade show active" id="all-pane" role="tabpanel" aria-labelledby="all-tab" tabindex="0">
                <div class="tj-faq-container">
                    <div class="tj-faq-item active">
                        <button type="button" class="tj-faq-question">
                            How can I track my order?
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                        <div class="tj-faq-answer">
                            Once your parcel leaves our Fort Smith studio, you’ll receive an email with a tracking
                            number. You can also open Account → My Orders, select the order and choose Track Package for
                            live carrier updates.
                        </div>
                    </div>

                    <div class="tj-faq-item">
                        <button type="button" class="tj-faq-question">
                            What payment methods do you accept?
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                        <div class="tj-faq-answer">
                            We accept all major credit cards (Visa, MasterCard, American Express, Discover) as well as
                            secure online payment gateways.
                        </div>
                    </div>

                    <div class="tj-faq-item">
                        <button type="button" class="tj-faq-question">
                            How long does shipping take?
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                        <div class="tj-faq-answer">
                            Standard shipping typically takes 3 to 5 business days, while express shipping takes 1 to 2
                            business days depending on your location.
                        </div>
                    </div>
                </div>
            </div>

            <!-- SHOPPING PANE -->
            <div class="tab-pane fade" id="shopping-pane" role="tabpanel" aria-labelledby="shopping-tab" tabindex="0">
                <div class="tj-faq-container">
                    <div class="tj-faq-item">
                        <button type="button" class="tj-faq-question">
                            How do I find my size?
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                        <div class="tj-faq-answer">
                            You can check our detailed size guide available on every product page to find the perfect
                            fit based on your measurements.
                        </div>
                    </div>
                </div>
            </div>

            <!-- ORDERS PANE -->
            <div class="tab-pane fade" id="orders-pane" role="tabpanel" aria-labelledby="orders-tab" tabindex="0">
                <div class="tj-faq-container">
                    <div class="tj-faq-item">
                        <button type="button" class="tj-faq-question">
                            Can I change or cancel my order?
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                        <div class="tj-faq-answer">
                            Orders can be modified or cancelled within 1 hour of placement before they enter the
                            fulfillment process at our studio.
                        </div>
                    </div>
                </div>
            </div>

            <!-- SHIPPING PANE -->
            <div class="tab-pane fade" id="shipping-pane" role="tabpanel" aria-labelledby="shipping-tab" tabindex="0">
                <div class="tj-faq-container">
                    <div class="tj-faq-item">
                        <button type="button" class="tj-faq-question">
                            How long does shipping take?
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                        <div class="tj-faq-answer">
                            Standard shipping typically takes 3 to 5 business days, while express shipping takes 1 to 2
                            business days.
                        </div>
                    </div>
                </div>
            </div>

            <!-- RETURNS PANE -->
            <div class="tab-pane fade" id="returns-pane" role="tabpanel" aria-labelledby="returns-tab" tabindex="0">
                <div class="tj-faq-container">
                    <div class="tj-faq-item">
                        <button type="button" class="tj-faq-question">
                            Can I return an item?
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                        <div class="tj-faq-answer">
                            Yes, we offer easy returns within 30 days of purchase for unworn and unwashed items in their
                            original condition.
                        </div>
                    </div>
                </div>
            </div>

            <!-- ACCOUNT PANE -->
            <div class="tab-pane fade" id="account-pane" role="tabpanel" aria-labelledby="account-tab" tabindex="0">
                <div class="tj-faq-container">
                    <div class="tj-faq-item">
                        <button type="button" class="tj-faq-question">
                            How do I reset my password?
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                        <div class="tj-faq-answer">
                            Click on "Forgot Password" on the login page, enter your registered email address, and
                            follow the instructions sent to your inbox.
                        </div>
                    </div>
                </div>
            </div>

            <!-- PAYMENTS PANE -->
            <div class="tab-pane fade" id="payments-pane" role="tabpanel" aria-labelledby="payments-tab" tabindex="0">
                <div class="tj-faq-container">
                    <div class="tj-faq-item">
                        <button type="button" class="tj-faq-question">
                            What payment methods do you accept?
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                        <div class="tj-faq-answer">
                            We accept all major credit cards, debit cards, and secure online payment gateways.
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Still Need a Hand? Card -->
        <div class="tj-support-card">
            <h3>Still need a hand?</h3>
            <p>Our stylists reply within one business day — sizing, fit, orders or returns.</p>
            <a href="contact.php" class="tj-contact-us-btn">Contact Us</a>
        </div>

    </div>
</main>
<!-- Body Content End Here -->

<!-- FAQ Accordion & Bootstrap Tabs Script -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    // FAQ Accordion Toggle Script
    const faqItems = document.querySelectorAll(".tj-faq-item");

    faqItems.forEach(item => {
        const questionBtn = item.querySelector(".tj-faq-question");
        questionBtn.addEventListener("click", () => {
            const isActive = item.classList.contains("active");
            if (!isActive) {
                item.classList.add("active");
            } else {
                item.classList.remove("active");
            }
        });
    });
});
</script>

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->