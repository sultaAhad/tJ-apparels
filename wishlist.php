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



<!-- Body Content Start Here -->
<main class="tj-wishlist-section py-5">
    <div class="container py-3">

        <div class="row g-4">

            <!-- Item 1: Floral Midi Summer Dress -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="tj-wishlist-card">
                    <div class="tj-wishlist-img-wrap">
                        <span class="tj-saved-badge"><i class="fa-solid fa-heart"></i> SAVED</span>
                        <img src="img/wishlist.png" alt="Floral Midi Summer Dress">
                    </div>
                    <div class="tj-wishlist-body">
                        <a href="product-details.php" class="tj-wishlist-title">Floral Midi Summer Dress</a>
                        <div class="tj-wishlist-color">Colour : Floral Multi</div>
                        <div class="tj-wishlist-stock">In stock - ships in 1–2 days</div>
                        <div class="tj-wishlist-price">$119.99</div>

                        <div class="mt-auto">
                            <a href="cart" type="button" class="tj-add-to-cart-btn">Add to Cart</a>
                            <button type="button" class="tj-remove-btn"><i class="fa-regular fa-trash-can"></i>
                                Remove</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 2: Elegant Jumpsuit -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="tj-wishlist-card">
                    <div class="tj-wishlist-img-wrap">
                        <span class="tj-saved-badge"><i class="fa-solid fa-heart"></i> SAVED</span>
                        <img src="img/wishlist1.png" alt="Elegant Jumpsuit">
                    </div>
                    <div class="tj-wishlist-body">
                        <a href="product-details.php" class="tj-wishlist-title">Elegant Jumpsuit</a>
                        <div class="tj-wishlist-color">Colour : Navy</div>
                        <div class="tj-wishlist-stock">In stock - ships in 1–2 days</div>
                        <div class="tj-wishlist-price">$149.99</div>

                        <div class="mt-auto">
                            <button type="button" class="tj-add-to-cart-btn">Add to Cart</button>
                            <button type="button" class="tj-remove-btn"><i class="fa-regular fa-trash-can"></i>
                                Remove</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 3: A-Line Mini Skirt -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="tj-wishlist-card">
                    <div class="tj-wishlist-img-wrap">
                        <span class="tj-saved-badge"><i class="fa-solid fa-heart"></i> SAVED</span>
                        <img src="img/wishlist2.png" alt="A-Line Mini Skirt">
                    </div>
                    <div class="tj-wishlist-body">
                        <a href="product-details.php" class="tj-wishlist-title">A-Line Mini Skirt</a>
                        <div class="tj-wishlist-color">Colour : Black</div>
                        <div class="tj-wishlist-stock">In stock - ships in 1–2 days</div>
                        <div class="tj-wishlist-price">$59.99</div>

                        <div class="mt-auto">
                            <button type="button" class="tj-add-to-cart-btn">Add to Cart</button>
                            <button type="button" class="tj-remove-btn"><i class="fa-regular fa-trash-can"></i>
                                Remove</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 4: Textured Leather Tote -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="tj-wishlist-card">
                    <div class="tj-wishlist-img-wrap">
                        <span class="tj-saved-badge"><i class="fa-solid fa-heart"></i> SAVED</span>
                        <img src="img/wishlist3.png" alt="Textured Leather Tote">
                    </div>
                    <div class="tj-wishlist-body">
                        <a href="product-details.php" class="tj-wishlist-title">Textured Leather Tote</a>
                        <div class="tj-wishlist-color">Colour : Cognac</div>
                        <div class="tj-wishlist-stock">In stock - ships in 1–2 days</div>
                        <div class="tj-wishlist-price">$189.99</div>

                        <div class="mt-auto">
                            <button type="button" class="tj-add-to-cart-btn">Add to Cart</button>
                            <button type="button" class="tj-remove-btn"><i class="fa-regular fa-trash-can"></i>
                                Remove</button>
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