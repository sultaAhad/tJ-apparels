<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- banner Include Here  -->
<?php 
$subtitle = "Secure Checkout";
$title = "Checkout";
$desc = "Complete your order — it takes less than two minutes.";
$currentPage = "Checkout";

include 'inc/inner-banner.php'; 
?>
<!-- banner Include Here  -->

<style>
    :root {
        --tj-border: rgba(135, 120, 255, 0.16);
        --tj-purple: #7d35e8;
        --tj-pink: #e936a7;
    }

    .tj-checkout-section {
        background-color: #0b0b1a;
        position: relative;
    }

    /* Checkout Main Headings */
    .tj-checkout-main-title {
        font-size: 26px;
        font-weight: 800;
        color: #fff;
        margin-bottom: 6px;
    }

    .tj-checkout-main-desc {
        font-size: 13px;
        color: rgba(255, 255, 255, 0.5);
        margin-bottom: 30px;
    }

    /* Step Heading Style */
    .tj-step-title {
        font-size: 15px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 18px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .tj-step-num {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background: var(--tj-purple);
        color: #fff;
        font-size: 11px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
    }

    /* Form Controls */
    .tj-input-group-custom {
        margin-bottom: 18px;
    }

    .tj-input-group-custom label {
        font-size: 11.5px;
        font-weight: 600;
        color: rgba(255, 255, 255, 0.7);
        margin-bottom: 6px;
        display: block;
    }

    .tj-form-control {
        width: 100%;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid var(--tj-border);
        border-radius: 12px;
        padding: 11px 16px;
        color: #fff;
        font-size: 13px;
        outline: none;
        transition: 0.3s;
    }

    .tj-form-control::placeholder {
        color: rgba(255, 255, 255, 0.25);
    }

    .tj-form-control:focus {
        border-color: var(--tj-pink);
        background: rgba(255, 255, 255, 0.05);
        box-shadow: 0 0 10px rgba(233, 54, 167, 0.2);
    }

    select.tj-form-control option {
        background: #11112b;
        color: #fff;
    }

    /* Delivery Options Radio Cards */
    .tj-delivery-option {
        background: linear-gradient(145deg, rgba(17, 17, 43, 0.8), rgba(10, 10, 26, 0.9));
        border: 1px solid var(--tj-border);
        border-radius: 14px;
        padding: 14px 18px;
        margin-bottom: 12px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
        transition: 0.3s;
    }

    .tj-delivery-option:hover,
    .tj-delivery-option.active {
        border-color: var(--tj-pink);
        background: rgba(233, 54, 167, 0.05);
    }

    .tj-delivery-info h6 {
        font-size: 13.5px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 2px;
    }

    .tj-delivery-info p {
        font-size: 11px;
        color: rgba(255, 255, 255, 0.45);
        margin: 0;
    }

    .tj-delivery-price {
        font-size: 13px;
        font-weight: 700;
        color: #fff;
    }

    /* Checkbox Style */
    .tj-checkbox-wrap {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 12.5px;
        color: rgba(255, 255, 255, 0.7);
        cursor: pointer;
        margin-top: 10px;
    }

    .tj-checkbox-wrap input {
        accent-color: var(--tj-pink);
        width: 16px;
        height: 16px;
        cursor: pointer;
    }

    /* Order Summary Sidebar */
    .tj-summary-card {
        background: linear-gradient(145deg, rgba(17, 17, 43, 0.9), rgba(10, 10, 26, 0.95));
        border: 1px solid var(--tj-border);
        border-radius: 20px;
        padding: 24px;
        position: sticky;
        top: 20px;
    }

    .tj-summary-title {
        font-size: 17px;
        font-weight: 800;
        color: #fff;
        margin-bottom: 18px;
    }

    .tj-summary-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        margin-bottom: 14px;
        padding-bottom: 14px;
        border-bottom: 1px solid rgba(135, 120, 255, 0.08);
    }

    .tj-summary-item-left {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .tj-summary-item img {
        width: 45px;
        height: 45px;
        border-radius: 8px;
        object-fit: cover;
        border: 1px solid var(--tj-border);
    }

    .tj-summary-item h6 {
        font-size: 12.5px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 2px;
    }

    .tj-summary-item p {
        font-size: 10.5px;
        color: rgba(255, 255, 255, 0.45);
        margin: 0;
    }

    .tj-summary-item-price {
        font-size: 13px;
        font-weight: 700;
        color: #fff;
    }

    .tj-summary-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 12px;
        font-size: 12.5px;
        color: rgba(255, 255, 255, 0.6);
    }

    .tj-summary-row span:last-child {
        color: #fff;
        font-weight: 500;
    }

    .tj-summary-divider {
        height: 1px;
        background: var(--tj-border);
        margin: 16px 0;
    }

    .tj-summary-total {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .tj-summary-total span:first-child {
        font-size: 15px;
        font-weight: 700;
        color: #fff;
    }

    .tj-summary-total span:last-child {
        font-size: 19px;
        font-weight: 800;
        color: #fff;
    }

    .tj-place-order-btn {
        background: linear-gradient(135deg, var(--tj-purple), var(--tj-pink));
        border: none;
        border-radius: 50px;
        width: 100%;
        padding: 12px;
        color: #fff;
        font-weight: 600;
        font-size: 13.5px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 4px 15px rgba(125, 53, 232, 0.35);
        transition: 0.3s;
        text-decoration: none;
        margin-bottom: 14px;
    }

    .tj-place-order-btn:hover {
        opacity: 0.9;
        color: #fff;
        box-shadow: 0 6px 20px rgba(233, 54, 167, 0.5);
    }

    .tj-secure-badge-text {
        text-align: center;
        font-size: 11px;
        color: rgba(255, 255, 255, 0.4);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
    }
</style>

<!-- Body Content Start Here -->
<main class="tj-checkout-section py-5">
    <div class="container py-4">
        <div class="row g-4">
            
            <!-- LEFT COLUMN: Checkout Form -->
            <div class="col-lg-7">
                <h1 class="tj-checkout-main-title">Checkout</h1>
                <p class="tj-checkout-main-desc">Complete your order — it takes less than two minutes.</p>

                <form action="#" method="POST">
                    
                    <!-- STEP 1: Contact Information -->
                    <div class="mb-4">
                        <div class="tj-step-title">
                            <span class="tj-step-num">1</span> Contact Information
                        </div>
                        <div class="tj-input-group-custom">
                            <label>Email Address</label>
                            <input type="email" class="tj-form-control" name="email" value="you@example.com" required>
                        </div>
                    </div>

                    <!-- STEP 2: Shipping Address -->
                    <div class="mb-4">
                        <div class="tj-step-title">
                            <span class="tj-step-num">2</span> Shipping Address
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="tj-input-group-custom">
                                    <label>First Name</label>
                                    <input type="text" class="tj-form-control" name="first_name" value="Amelia" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tj-input-group-custom">
                                    <label>Last Name</label>
                                    <input type="text" class="tj-form-control" name="last_name" value="Reyes" required>
                                </div>
                            </div>
                        </div>

                        <div class="tj-input-group-custom">
                            <label>Address</label>
                            <input type="text" class="tj-form-control" name="address" value="1420 Rogers Avenue" required>
                        </div>

                        <div class="tj-input-group-custom">
                            <label>Apartment / Suite</label>
                            <input type="text" class="tj-form-control" name="apartment" value="Suite 500">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="tj-input-group-custom">
                                    <label>City</label>
                                    <input type="text" class="tj-form-control" name="city" value="Fort Smith" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tj-input-group-custom">
                                    <label>State</label>
                                    <select class="tj-form-control" name="state" required>
                                        <option value="AR" selected>Arkansas (AR)</option>
                                        <option value="TX">Texas (TX)</option>
                                        <option value="CA">California (CA)</option>
                                        <option value="NY">New York (NY)</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="tj-input-group-custom" style="max-width: 50%;">
                            <label>ZIP Code</label>
                            <input type="text" class="tj-form-control" name="zip_code" value="72901" required>
                        </div>
                    </div>

                    <!-- STEP 3: Delivery Options -->
                    <div class="mb-4">
                        <div class="tj-step-title">
                            <span class="tj-step-num">3</span> Delivery
                        </div>

                        <label class="tj-delivery-option active">
                            <div class="d-flex align-items-center gap-3">
                                <input type="radio" name="shipping_method" checked style="accent-color: var(--tj-pink);">
                                <div class="tj-delivery-info">
                                    <h6>Standard Shipping</h6>
                                    <p>3–5 business days</p>
                                </div>
                            </div>
                            <span class="tj-delivery-price">Free</span>
                        </label>

                        <label class="tj-delivery-option">
                            <div class="d-flex align-items-center gap-3">
                                <input type="radio" name="shipping_method" style="accent-color: var(--tj-pink);">
                                <div class="tj-delivery-info">
                                    <h6>Express Shipping</h6>
                                    <p>1–2 business days</p>
                                </div>
                            </div>
                            <span class="tj-delivery-price">$16.00</span>
                        </label>
                    </div>

                    <!-- STEP 4: Payment Information -->
                    <div class="mb-4">
                        <div class="tj-step-title">
                            <span class="tj-step-num">4</span> Payment
                        </div>

                        <div class="tj-input-group-custom">
                            <label>Card Number</label>
                            <input type="text" class="tj-form-control" name="card_number" value="4242 4242 4242 4242" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="tj-input-group-custom">
                                    <label>Expiration</label>
                                    <input type="text" class="tj-form-control" name="expiration" placeholder="MM / YY" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tj-input-group-custom">
                                    <label>CVV</label>
                                    <input type="password" class="tj-form-control" name="cvv" placeholder="123" maxlength="4" required>
                                </div>
                            </div>
                        </div>

                        <label class="tj-checkbox-wrap">
                            <input type="checkbox" name="save_info" checked>
                            Save this information for next time
                        </label>
                    </div>

                </form>
            </div>

            <!-- RIGHT COLUMN: Order Summary Sidebar -->
            <div class="col-lg-5">
                <div class="tj-summary-card">
                    <h3 class="tj-summary-title">Order Summary</h3>

                    <!-- Item 1 -->
                    <div class="tj-summary-item">
                        <div class="tj-summary-item-left">
                            <img src="https://images.unsplash.com/photo-1551803091-e20399d15ab0?auto=format&fit=crop&w=200&q=80" alt="Silk Designer Blouse">
                            <div>
                                <h6>Silk Designer Blouse</h6>
                                <p>Ivory · S · Qty 1</p>
                            </div>
                        </div>
                        <span class="tj-summary-item-price">$129.99</span>
                    </div>

                    <!-- Item 2 -->
                    <div class="tj-summary-item">
                        <div class="tj-summary-item-left">
                            <img src="https://images.unsplash.com/photo-1541099649105-f69ad21f3246?auto=format&fit=crop&w=200&q=80" alt="Premium Denim Jeans">
                            <div>
                                <h6>Premium Denim High-Rise Jeans</h6>
                                <p>Dark Indigo · 26 · Qty 2</p>
                            </div>
                        </div>
                        <span class="tj-summary-item-price">$199.98</span>
                    </div>

                    <!-- Item 3 -->
                    <div class="tj-summary-item">
                        <div class="tj-summary-item-left">
                            <img src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?auto=format&fit=crop&w=200&q=80" alt="Textured Leather Tote">
                            <div>
                                <h6>Textured Leather Tote</h6>
                                <p>Cognac · One size · Qty 1</p>
                            </div>
                        </div>
                        <span class="tj-summary-item-price">$189.99</span>
                    </div>

                    <div class="tj-summary-divider"></div>

                    <div class="tj-summary-row">
                        <span>Subtotal</span>
                        <span>$519.96</span>
                    </div>
                    <div class="tj-summary-row">
                        <span>Shipping</span>
                        <span>Free</span>
                    </div>
                    <div class="tj-summary-row">
                        <span>Tax</span>
                        <span>$42.90</span>
                    </div>

                    <div class="tj-summary-divider"></div>

                    <div class="tj-summary-total">
                        <span>Total</span>
                        <span>$562.86</span>
                    </div>

                    <button type="submit" class="tj-place-order-btn">
                        Place Order
                    </button>

                    <div class="tj-secure-badge-text">
                        <i class="fa-solid fa-lock"></i> Secure encrypted checkout
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
<!-- Body Content End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->