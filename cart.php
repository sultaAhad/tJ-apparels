<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- banner Include Here  -->
<?php 
$subtitle = "Review Your Order";
$title = "Shopping Cart";
$desc = "Review the items in your cart before proceeding to checkout.";
$currentPage = "Cart";

include 'inc/inner-banner.php'; 
?>
<!-- banner Include Here  -->



<!-- Body Content Start Here -->
<main class="tj-cart-section py-5">
    <div class="container py-4">
        <div class="row g-4">
            
            <!-- LEFT COLUMN: Cart Items & Promo Code -->
            <div class="col-lg-8">
                
                <!-- Header Title & Items Count -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="tj-cart-header-title">Your Items</h2>
                    <span class="tj-cart-item-count">3 items</span>
                </div>

                <!-- Item 1: Silk Designer Blouse -->
                <div class="tj-cart-item-card">
                    <div class="tj-cart-item-info-wrap">
                        <img src="img/cart.png" alt="Silk Designer Blouse" class="tj-cart-item-img">
                        <div class="tj-cart-item-details">
                            <h5>Silk Designer Blouse</h5>
                            <p>Colour: Ivory · Size: S</p>
                            
                            <div class="tj-cart-actions-row">
                                <div class="tj-qty-selector">
                                    <button type="button" class="tj-qty-btn"><i class="fa-solid fa-minus"></i></button>
                                    <span class="tj-qty-val">1</span>
                                    <button type="button" class="tj-qty-btn"><i class="fa-solid fa-plus"></i></button>
                                </div>
                                <a href="#" class="tj-cart-action-btn"><i class="fa-regular fa-heart"></i> Move to Wishlist</a>
                                <a href="#" class="tj-cart-action-btn"><i class="fa-regular fa-trash-can"></i> Remove</a>
                            </div>
                        </div>
                    </div>
                    <div class="tj-cart-item-price">$129.99</div>
                </div>

                <!-- Item 2: Premium Denim High-Rise Jeans -->
                <div class="tj-cart-item-card">
                    <div class="tj-cart-item-info-wrap">
                        <img src="img/cart1.png" alt="Premium Denim Jeans" class="tj-cart-item-img">
                        <div class="tj-cart-item-details">
                            <h5>Premium Denim High-Rise Jeans</h5>
                            <p>Colour: Dark Indigo · Size: 26</p>
                            
                            <div class="tj-cart-actions-row">
                                <div class="tj-qty-selector">
                                    <button type="button" class="tj-qty-btn"><i class="fa-solid fa-minus"></i></button>
                                    <span class="tj-qty-val">2</span>
                                    <button type="button" class="tj-qty-btn"><i class="fa-solid fa-plus"></i></button>
                                </div>
                                <a href="#" class="tj-cart-action-btn"><i class="fa-regular fa-heart"></i> Move to Wishlist</a>
                                <a href="#" class="tj-cart-action-btn"><i class="fa-regular fa-trash-can"></i> Remove</a>
                            </div>
                        </div>
                    </div>
                    <div class="tj-cart-item-price">$199.98</div>
                </div>

                <!-- Item 3: Textured Leather Tote -->
                <div class="tj-cart-item-card">
                    <div class="tj-cart-item-info-wrap">
                        <img src="img/cart2.png" alt="Textured Leather Tote" class="tj-cart-item-img">
                        <div class="tj-cart-item-details">
                            <h5>Textured Leather Tote</h5>
                            <p>Colour: Cognac · Size: One size</p>
                            
                            <div class="tj-cart-actions-row">
                                <div class="tj-qty-selector">
                                    <button type="button" class="tj-qty-btn"><i class="fa-solid fa-minus"></i></button>
                                    <span class="tj-qty-val">1</span>
                                    <button type="button" class="tj-qty-btn"><i class="fa-solid fa-plus"></i></button>
                                </div>
                                <a href="#" class="tj-cart-action-btn"><i class="fa-regular fa-heart"></i> Move to Wishlist</a>
                                <a href="#" class="tj-cart-action-btn"><i class="fa-regular fa-trash-can"></i> Remove</a>
                            </div>
                        </div>
                    </div>
                    <div class="tj-cart-item-price">$189.99</div>
                </div>

                <!-- Have a promo code box -->
                <div class="tj-promo-box">
                    <label>Have a promo code?</label>
                    <div class="tj-promo-input-group">
                        <input type="text" class="tj-promo-input" placeholder="Enter code">
                        <button type="button" class="tj-apply-btn">Apply</button>
                    </div>
                </div>

            </div>

            <!-- RIGHT COLUMN: Order Summary -->
            <div class="col-lg-4">
                <div class="tj-summary-card">
                    <h3 class="tj-summary-title">Order Summary</h3>

                    <div class="tj-summary-row">
                        <span>Subtotal</span>
                        <span>$519.96</span>
                    </div>
                    <div class="tj-summary-row">
                        <span>Shipping</span>
                        <span>Calculated at checkout</span>
                    </div>
                    <div class="tj-summary-row">
                        <span>Estimated Tax</span>
                        <span>Calculated at checkout</span>
                    </div>

                    <div class="tj-summary-divider"></div>

                    <div class="tj-summary-total">
                        <span>Total</span>
                        <span>$519.96</span>
                    </div>

                    <a href="checkout.php" class="tj-checkout-btn">
                        Proceed to Checkout <i class="fa-solid fa-arrow-right"></i>
                    </a>

                    <a href="shop.php" class="tj-continue-btn">
                        Continue Shopping
                    </a>

                    <div class="tj-security-badges">
                        <span><i class="fa-solid fa-lock"></i> Secure Checkout</span>
                        <span><i class="fa-solid fa-rotate-left"></i> Easy Returns</span>
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