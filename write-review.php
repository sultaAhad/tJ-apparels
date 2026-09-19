<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- banner Include Here  -->
<?php 
$order_id = isset($_GET['id']) ? $_GET['id'] : 'ORD-1788888300-GCIYJZ';
$product_id = isset($_GET['product_id']) ? $_GET['product_id'] : '2511';

// Sample product lookup data base on product_id passed from order details page
$products_data = [
    '2511' => ['name' => 'Airplane Kite', 'qty' => 11, 'price' => '$89.00', 'img' => 'assets/images/product-1.jpg'],
    '2507' => ['name' => '3D Giant Octopus Kite', 'qty' => 1, 'price' => '$55.00', 'img' => 'assets/images/product-2.jpg'],
    '2508' => ['name' => 'Eagle Wings Kids Kite', 'qty' => 1, 'price' => '$44.00', 'img' => 'assets/images/product-3.jpg']
];

$current_product = isset($products_data[$product_id]) ? $products_data[$product_id] : $products_data['2511'];

$subtitle = "Account";
$title = "Write a Review";
$desc = "Share your experience with the products from this order.";
$currentPage = "My Orders";

include 'inc/inner-banner.php'; 
?>
<!-- banner Include Here  -->



<section class="tj-review-section">
    <div class="container">
        <div class="row g-4">
            
            <!-- Sidebar Column -->
            <div class="col-lg-3">
                <?php include 'inc/profile-sidebar.php'; ?>
            </div>

            <!-- Main Review Content -->
            <div class="col-lg-9">
                <div class="tj-review-card">
                    <h3 class="tj-review-title">WRITE A REVIEW</h3>

                    <form action="submit-review.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="order_id" value="<?php echo htmlspecialchars($order_id); ?>">
                        <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product_id); ?>">

                        <div class="row">
                            <!-- Left Column: Ratings & Comments -->
                            <div class="col-lg-7">
                                <div class="tj-rating-box">
                                    <label class="tj-rating-label">Your Rating *</label>
                                    <div class="tj-stars" id="starRating">
                                        <i class="fa-solid fa-star selected" data-value="1"></i>
                                        <i class="fa-solid fa-star selected" data-value="2"></i>
                                        <i class="fa-solid fa-star selected" data-value="3"></i>
                                        <i class="fa-solid fa-star selected" data-value="4"></i>
                                        <i class="fa-solid fa-star" data-value="5"></i>
                                    </div>
                                    <input type="hidden" name="rating" id="ratingValue" value="4">
                                </div>

                                <div class="tj-form-group">
                                    <label class="tj-form-label">Review</label>
                                    <textarea name="review_comment" class="tj-form-control" placeholder="Write your review" required></textarea>
                                </div>

                                <div class="mt-4">
                                    <button type="submit" class="tj-submit-review-btn">Submit</button>
                                </div>
                            </div>

                            <!-- Right Column: Product Detail Card -->
                            <div class="col-lg-5">
                                <div class="review-product-summary-box">
                                    <span class="text-theme-primary fs-7 fw-bold d-block mb-2" style="font-size: 11px; letter-spacing: 1px;">ORDER ID</span>
                                    <h6 class="text-white fw-bold mb-3" style="font-size: 15px; font-style: italic;">#<?php echo htmlspecialchars($order_id); ?></h6>
                                    
                                    <div class="d-flex align-items-center gap-3 mt-3">
                                        <div class="tj-rev-prod-img">
                                            <img src="<?php echo htmlspecialchars($current_product['img']); ?>" alt="Product">
                                        </div>
                                        <div>
                                            <h6 class="text-white fw-bold mb-1" style="font-size: 14px;"><?php echo htmlspecialchars($current_product['name']); ?></h6>
                                            <span class="text-secondary d-block" style="font-size: 12px;">Qty: <?php echo htmlspecialchars($current_product['qty']); ?></span>
                                            <span class="text-theme-primary fw-bold" style="font-size: 13px;"><?php echo htmlspecialchars($current_product['price']); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Interactive Star Script -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const stars = document.querySelectorAll("#starRating i");
        const ratingInput = document.getElementById("ratingValue");

        stars.forEach((star) => {
            star.addEventListener("click", function () {
                const val = this.getAttribute("data-value");
                ratingInput.value = val;

                stars.forEach((s, i) => {
                    if (i < val) {
                        s.classList.add("selected");
                    } else {
                        s.classList.remove("selected");
                    }
                });
            });
        });
    });
</script>

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->