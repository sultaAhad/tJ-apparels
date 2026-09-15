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

<style>
    :root {
        --tj-border: rgba(135, 120, 255, 0.16);
        --tj-purple: #7d35e8;
        --tj-pink: #e936a7;
    }

    .tj-cart-section {
        background-color: #0b0b1a;
        position: relative;
    }

    /* Section Title & Item Count */
    .tj-cart-header-title {
        font-size: 20px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 0;
    }

    .tj-cart-item-count {
        font-size: 12px;
        color: rgba(255, 255, 255, 0.4);
    }

    /* Cart Item Card */
    .tj-cart-item-card {
        background: linear-gradient(145deg, rgba(17, 17, 43, 0.8), rgba(10, 10, 26, 0.9));
        border: 1px solid var(--tj-border);
        border-radius: 18px;
        padding: 20px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        transition: 0.3s;
    }

    .tj-cart-item-card:hover {
        border-color: rgba(125, 53, 232, 0.4);
    }

    .tj-cart-item-info-wrap {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .tj-cart-item-img {
        width: 85px;
        height: 85px;
        border-radius: 12px;
        object-fit: cover;
        border: 1px solid var(--tj-border);
    }

    .tj-cart-item-details h5 {
        font-size: 15px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 4px;
    }

    .tj-cart-item-details p {
        font-size: 11.5px;
        color: rgba(255, 255, 255, 0.45);
        margin-bottom: 12px;
    }

    /* Quantity Controls & Action Links */
    .tj-cart-actions-row {
        display: flex;
        align-items: center;
        gap: 15px;
        flex-wrap: wrap;
    }

    .tj-qty-selector {
        display: flex;
        align-items: center;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid var(--tj-border);
        border-radius: 50px;
        padding: 4px 12px;
        gap: 12px;
    }

    .tj-qty-btn {
        background: none;
        border: none;
        color: rgba(255, 255, 255, 0.6);
        font-size: 12px;
        cursor: pointer;
        transition: 0.2s;
    }

    .tj-qty-btn:hover {
        color: #fff;
    }

    .tj-qty-val {
        font-size: 13px;
        font-weight: 600;
        color: #fff;
    }

    .tj-cart-action-btn {
        background: none;
        border: none;
        color: rgba(255, 255, 255, 0.5);
        font-size: 12px;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        cursor: pointer;
        text-decoration: none;
        transition: 0.2s;
        padding: 0;
    }

    .tj-cart-action-btn:hover {
        color: var(--tj-pink);
    }

    .tj-cart-item-price {
        font-size: 18px;
        font-weight: 800;
        color: #fff;
        text-align: right;
    }

    /* Promo Code Box */
    .tj-promo-box {
        background: linear-gradient(145deg, rgba(17, 17, 43, 0.8), rgba(10, 10, 26, 0.9));
        border: 1px solid var(--tj-border);
        border-radius: 18px;
        padding: 20px;
        margin-top: 10px;
    }

    .tj-promo-box label {
        font-size: 12px;
        font-weight: 600;
        color: rgba(255, 255, 255, 0.7);
        display: block;
        margin-bottom: 12px;
    }

    .tj-promo-input-group {
        display: flex;
        gap: 10px;
    }

    .tj-promo-input {
        flex: 1;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid var(--tj-border);
        border-radius: 50px;
        padding: 10px 18px;
        color: #fff;
        font-size: 13px;
        outline: none;
        transition: 0.3s;
    }

    .tj-promo-input::placeholder {
        color: rgba(255, 255, 255, 0.25);
    }

    .tj-promo-input:focus {
        border-color: var(--tj-pink);
        background: rgba(255, 255, 255, 0.05);
    }

    .tj-apply-btn {
        background: linear-gradient(135deg, var(--tj-purple), var(--tj-pink));
        border: none;
        border-radius: 50px;
        padding: 10px 24px;
        color: #fff;
        font-weight: 600;
        font-size: 13px;
        cursor: pointer;
        transition: 0.3s;
        box-shadow: 0 4px 15px rgba(125, 53, 232, 0.3);
    }

    .tj-apply-btn:hover {
        opacity: 0.9;
    }

    /* Order Summary Card */
    .tj-summary-card {
        background: linear-gradient(145deg, rgba(17, 17, 43, 0.9), rgba(10, 10, 26, 0.95));
        border: 1px solid var(--tj-border);
        border-radius: 20px;
        padding: 25px;
        position: sticky;
        top: 20px;
    }

    .tj-summary-title {
        font-size: 18px;
        font-weight: 800;
        color: #fff;
        margin-bottom: 20px;
    }

    .tj-summary-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 14px;
        font-size: 13px;
        color: rgba(255, 255, 255, 0.6);
    }

    .tj-summary-row span:last-child {
        color: #fff;
        font-weight: 500;
    }

    .tj-summary-divider {
        height: 1px;
        background: var(--tj-border);
        margin: 18px 0;
    }

    .tj-summary-total {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 22px;
    }

    .tj-summary-total span:first-child {
        font-size: 15px;
        font-weight: 700;
        color: #fff;
    }

    .tj-summary-total span:last-child {
        font-size: 20px;
        font-weight: 800;
        color: #fff;
    }

    .tj-checkout-btn {
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
        gap: 8px;
        cursor: pointer;
        box-shadow: 0 4px 15px rgba(125, 53, 232, 0.35);
        transition: 0.3s;
        text-decoration: none;
        margin-bottom: 12px;
    }

    .tj-checkout-btn:hover {
        opacity: 0.9;
        color: #fff;
        box-shadow: 0 6px 20px rgba(233, 54, 167, 0.5);
    }

    .tj-continue-btn {
        background: transparent;
        border: 1px solid var(--tj-border);
        border-radius: 50px;
        width: 100%;
        padding: 11px;
        color: rgba(255, 255, 255, 0.8);
        font-weight: 600;
        font-size: 13px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: 0.3s;
        text-decoration: none;
        margin-bottom: 20px;
    }

    .tj-continue-btn:hover {
        border-color: var(--tj-pink);
        color: #fff;
        background: rgba(233, 54, 167, 0.05);
    }

    .tj-security-badges {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        font-size: 11px;
        color: rgba(255, 255, 255, 0.4);
    }

    .tj-security-badges span {
        display: inline-flex;
        align-items: center;
        gap: 5px;
    }

    @media (max-width: 991px) {
        .tj-cart-item-card {
            flex-direction: column;
            align-items: flex-start;
        }
        .tj-cart-item-price {
            align-self: flex-end;
            margin-top: -10px;
        }
    }
</style>

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
                        <img src="https://images.unsplash.com/photo-1551803091-e20399d15ab0?auto=format&fit=crop&w=300&q=80" alt="Silk Designer Blouse" class="tj-cart-item-img">
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
                        <img src="https://images.unsplash.com/photo-1541099649105-f69ad21f3246?auto=format&fit=crop&w=300&q=80" alt="Premium Denim Jeans" class="tj-cart-item-img">
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
                        <img src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?auto=format&fit=crop&w=300&q=80" alt="Textured Leather Tote" class="tj-cart-item-img">
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