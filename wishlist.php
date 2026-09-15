<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- banner Include Here  -->
<?php 
$subtitle = "Your Favorites";
$title = "Wishlist";
$desc = "Manage your saved items and easily move them to your cart.";
$currentPage = "Wishlist";

include 'inc/inner-banner.php'; 
?>
<!-- banner Include Here  -->

<style>
    :root {
        --tj-border: rgba(135, 120, 255, 0.16);
        --tj-purple: #7d35e8;
        --tj-pink: #e936a7;
    }

    .tj-wishlist-section {
        background-color: #0b0b1a;
        position: relative;
    }

    /* Wishlist Card Styling */
    .tj-wishlist-card {
        background: linear-gradient(145deg, rgba(17, 17, 43, 0.9), rgba(10, 10, 26, 0.95));
        border: 1px solid var(--tj-border);
        border-radius: 18px;
        overflow: hidden;
        transition: 0.3s ease;
        display: flex;
        flex-direction: column;
        height: 100%;
        position: relative;
    }

    .tj-wishlist-card:hover {
        border-color: rgba(125, 53, 232, 0.4);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
    }

    /* Image Wrapper & Saved Badge */
    .tj-wishlist-img-wrap {
        position: relative;
        width: 100%;
        height: 320px;
        overflow: hidden;
    }

    .tj-wishlist-img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .tj-wishlist-card:hover .tj-wishlist-img-wrap img {
        transform: scale(1.03);
    }

    .tj-saved-badge {
        position: absolute;
        top: 15px;
        left: 15px;
        background: linear-gradient(135deg, var(--tj-purple), var(--tj-pink));
        color: #fff;
        font-size: 11px;
        font-weight: 700;
        padding: 5px 12px;
        border-radius: 50px;
        display: flex;
        align-items: center;
        gap: 5px;
        box-shadow: 0 4px 10px rgba(125, 53, 232, 0.3);
        z-index: 2;
    }

    .tj-saved-badge i {
        font-size: 10px;
    }

    /* Card Body / Content */
    .tj-wishlist-body {
        padding: 20px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    .tj-wishlist-title {
        font-size: 15px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 6px;
        text-decoration: none;
    }

    .tj-wishlist-title:hover {
        color: var(--tj-pink);
    }

    .tj-wishlist-color {
        font-size: 12px;
        color: rgba(255, 255, 255, 0.5);
        margin-bottom: 4px;
    }

    .tj-wishlist-stock {
        font-size: 11.5px;
        color: #00e676;
        margin-bottom: 15px;
    }

    .tj-wishlist-price {
        font-size: 16px;
        font-weight: 800;
        color: #fff;
        margin-bottom: 15px;
    }

    /* Action Buttons */
    .tj-add-to-cart-btn {
        background: linear-gradient(135deg, var(--tj-purple), var(--tj-pink));
        color: #fff;
        border: none;
        border-radius: 50px;
        padding: 10px 20px;
        font-size: 12.5px;
        font-weight: 700;
        width: 100%;
        cursor: pointer;
        transition: 0.3s;
        text-align: center;
        text-decoration: none;
        margin-bottom: 10px;
        box-shadow: 0 4px 15px rgba(125, 53, 232, 0.3);
        display: block;
    }

    .tj-add-to-cart-btn:hover {
        opacity: 0.9;
        color: #fff;
        box-shadow: 0 6px 20px rgba(233, 54, 167, 0.4);
    }

    .tj-remove-btn {
        background: transparent;
        color: rgba(255, 255, 255, 0.6);
        border: 1px solid var(--tj-border);
        border-radius: 50px;
        padding: 8px 20px;
        font-size: 12px;
        font-weight: 600;
        width: 100%;
        cursor: pointer;
        transition: 0.3s;
        text-align: center;
        text-decoration: none;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
    }

    .tj-remove-btn:hover {
        background: rgba(255, 23, 68, 0.1);
        border-color: #ff1744;
        color: #ff1744;
    }
</style>

<!-- Body Content Start Here -->
<main class="tj-wishlist-section py-5">
    <div class="container py-3">
        
        <div class="row g-4">
            
            <!-- Item 1: Floral Midi Summer Dress -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="tj-wishlist-card">
                    <div class="tj-wishlist-img-wrap">
                        <span class="tj-saved-badge"><i class="fa-solid fa-heart"></i> SAVED</span>
                        <img src="assets/images/product-1.jpg" alt="Floral Midi Summer Dress">
                    </div>
                    <div class="tj-wishlist-body">
                        <a href="product-details.php" class="tj-wishlist-title">Floral Midi Summer Dress</a>
                        <div class="tj-wishlist-color">Colour : Floral Multi</div>
                        <div class="tj-wishlist-stock">In stock - ships in 1–2 days</div>
                        <div class="tj-wishlist-price">$119.99</div>
                        
                        <div class="mt-auto">
                            <button type="button" class="tj-add-to-cart-btn">Add to Cart</button>
                            <button type="button" class="tj-remove-btn"><i class="fa-regular fa-trash-can"></i> Remove</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 2: Elegant Jumpsuit -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="tj-wishlist-card">
                    <div class="tj-wishlist-img-wrap">
                        <span class="tj-saved-badge"><i class="fa-solid fa-heart"></i> SAVED</span>
                        <img src="assets/images/product-2.jpg" alt="Elegant Jumpsuit">
                    </div>
                    <div class="tj-wishlist-body">
                        <a href="product-details.php" class="tj-wishlist-title">Elegant Jumpsuit</a>
                        <div class="tj-wishlist-color">Colour : Navy</div>
                        <div class="tj-wishlist-stock">In stock - ships in 1–2 days</div>
                        <div class="tj-wishlist-price">$149.99</div>
                        
                        <div class="mt-auto">
                            <button type="button" class="tj-add-to-cart-btn">Add to Cart</button>
                            <button type="button" class="tj-remove-btn"><i class="fa-regular fa-trash-can"></i> Remove</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 3: A-Line Mini Skirt -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="tj-wishlist-card">
                    <div class="tj-wishlist-img-wrap">
                        <span class="tj-saved-badge"><i class="fa-solid fa-heart"></i> SAVED</span>
                        <img src="assets/images/product-3.jpg" alt="A-Line Mini Skirt">
                    </div>
                    <div class="tj-wishlist-body">
                        <a href="product-details.php" class="tj-wishlist-title">A-Line Mini Skirt</a>
                        <div class="tj-wishlist-color">Colour : Black</div>
                        <div class="tj-wishlist-stock">In stock - ships in 1–2 days</div>
                        <div class="tj-wishlist-price">$59.99</div>
                        
                        <div class="mt-auto">
                            <button type="button" class="tj-add-to-cart-btn">Add to Cart</button>
                            <button type="button" class="tj-remove-btn"><i class="fa-regular fa-trash-can"></i> Remove</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 4: Textured Leather Tote -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="tj-wishlist-card">
                    <div class="tj-wishlist-img-wrap">
                        <span class="tj-saved-badge"><i class="fa-solid fa-heart"></i> SAVED</span>
                        <img src="assets/images/product-4.jpg" alt="Textured Leather Tote">
                    </div>
                    <div class="tj-wishlist-body">
                        <a href="product-details.php" class="tj-wishlist-title">Textured Leather Tote</a>
                        <div class="tj-wishlist-color">Colour : Cognac</div>
                        <div class="tj-wishlist-stock">In stock - ships in 1–2 days</div>
                        <div class="tj-wishlist-price">$189.99</div>
                        
                        <div class="mt-auto">
                            <button type="button" class="tj-add-to-cart-btn">Add to Cart</button>
                            <button type="button" class="tj-remove-btn"><i class="fa-regular fa-trash-can"></i> Remove</button>
                        </div>
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