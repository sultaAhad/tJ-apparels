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