<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- banner Include Here  -->
<?php 
$order_id = isset($_GET['id']) ? $_GET['id'] : '10248';$subtitle = "Account";
$title = "My Order Detail";
$desc = "Review your order status, purchased items, and delivery details.";
$currentPage = "My Orders";

include 'inc/inner-banner.php'; 
?>
<!-- banner Include Here  -->


<section class="tj-orderdetail-section">
    <div class="container">
        <div class="row g-4">
            
            <!-- Sidebar Column -->
            <div class="col-lg-3">
                <?php include 'inc/profile-sidebar.php'; ?>
            </div>

            <!-- Main Order Details Content -->
            <div class="col-lg-9">
                <div class="my-profile-wrapper order-wrapper p-4 p-md-5 info-card">

                    <!-- Order Top Bar Header -->
                    <div class="d-flex flex-sm-row flex-column gap-sm-0 gap-2 justify-content-between align-items-center mb-3">
                        <div>
                            <h3 class=" text-white font-bold  mb-1">MY ORDER DETAIL</h3>
                            <span class="text-secondary fw-semibold">#ORD-1788888300-GCIYJZ</span>
                        </div>
                        
                        <div class="d-flex flex-wrap gap-3">
                            <a href="write-review.php?id=ORD-1788888300-GCIYJZ&product_id=2511" id="writeReviewBtn" class="btn btn-review-purple px-4 py-2 rounded-pill">Write A Review</a>
                            <a href="my-orders.php" class="btn btn-theme-gradient">Back</a>
                        </div>
                    </div>

                    <hr class="border-secondary opacity-25 mb-4">

                    <!-- Order Tracking Progress Bar (Added at the top) -->
                    <div class="order-tracking-card info-card h-auto p-4 rounded-4 mb-4" style=" border: 1px solid rgba(255, 255, 255, 0.05);">
                        <div class="row text-center justify-content-between position-relative">
                            
                            <!-- Progress Step 1: Order Placed -->
                            <div class="col-3 position-relative">
                                <div class="mx-auto slide-proper d-flex align-items-center justify-content-center rounded-circle mb-2" style="width: 45px; height: 45px;     background: linear-gradient(135deg, #7d35e8, #e936a7); color: #fff; z-index: 2; position: relative;">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span class="d-block text-white small fw-semibold">Order Placed</span>
                            </div>

                            <!-- Progress Step 2: Processing -->
                            <div class="col-3 position-relative">
                                <div class="mx-auto slide-proper d-flex align-items-center justify-content-center rounded-circle mb-2" style="width: 45px; height: 45px; background:     background: linear-gradient(135deg, #7d35e8, #e936a7); color: #fff; z-index: 2; position: relative;">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span class="d-block text-white small fw-semibold">Processing</span>
                            </div>

                            <!-- Progress Step 3: Shipped -->
                            <div class="col-3 position-relative">
                                <div class="mx-auto slide-proper d-flex align-items-center justify-content-center rounded-circle mb-2" style="width: 45px; height: 45px;     background: linear-gradient(135deg, #7d35e8, #e936a7); color: #fff; z-index: 2; position: relative;">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span class="d-block text-white small fw-semibold">Shipped</span>
                            </div>

                            <!-- Progress Step 4: Delivered -->
                            <div class="col-3 position-relative">
                                <div class="mx-auto slide-proper d-flex align-items-center justify-content-center rounded-circle mb-2" style="width: 45px; height: 45px;     background: linear-gradient(135deg, #7d35e8, #e936a7); color: #fff; z-index: 2; position: relative;">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span class="d-block text-white small fw-semibold">Delivered</span>
                            </div>

                        </div>
                    </div>

                    <!-- Info blocks grid -->
                    <div class="row g-3 mb-5">
                        <!-- Shipping Info -->
                        <div class="col-md-6">
                            <div class="info-card p-3 h-100 d-flex align-items-start gap-3" >
                                <div class="info-circle-icon flex-shrink-0">
                                    <i class="fas fa-shipping-fast text-theme-primary"></i>
                                </div>
                                <div>
                                    <h6 class="heading-italic-font text-white mb-2 fs-6">SHIPPING INFORMATION</h6>
                                    <div class="order-detail-line"><i class="fas fa-home me-2"></i>1250 Waters Place</div>
                                    <div class="order-detail-line"><i class="fas fa-globe me-2"></i>United States</div>
                                    <div class="order-detail-line"><i class="fas fa-city me-2"></i>The Bronx, New York</div>
                                    <div class="order-detail-line"><i class="fas fa-mail-bulk me-2"></i>10461</div>
                                    <div class="order-detail-line"><i class="fas fa-phone-alt me-2"></i>1234567890</div>
                                </div>
                            </div>
                        </div>

                        <!-- Billing Info -->
                        <div class="col-md-6">
                            <div class="info-card p-3 h-100 d-flex align-items-start gap-3" >
                                <div class="info-circle-icon flex-shrink-0">
                                    <i class="fas fa-file-invoice text-theme-primary"></i>
                                </div>
                                <div>
                                    <h6 class="heading-italic-font text-white mb-2 fs-6">BILLING INFORMATION</h6>
                                    <div class="order-detail-line"><i class="fas fa-home me-2"></i>1250 Waters Place</div>
                                    <div class="order-detail-line"><i class="fas fa-globe me-2"></i>United States</div>
                                    <div class="order-detail-line"><i class="fas fa-city me-2"></i>The Bronx, New York</div>
                                    <div class="order-detail-line"><i class="fas fa-mail-bulk me-2"></i>10461</div>
                                    <div class="order-detail-line"><i class="fas fa-phone-alt me-2"></i>1234567890</div>
                                </div>
                            </div>
                        </div>

                        <!-- Order Info -->
                        <div class="col-md-12">
                            <div class="info-card p-3 h-100 d-flex align-items-start gap-3" >
                                <div class="info-circle-icon flex-shrink-0">
                                    <i class="fas fa-info-circle text-theme-primary"></i>
                                </div>
                                <div>
                                    <h6 class="heading-italic-font text-white mb-2 fs-6">ORDER INFO</h6>
                                    <div class="order-detail-line">Order Number: <span class="text-white fw-medium">ORD-1788888300-GCIYJZ</span></div>
                                    <div class="order-detail-line">Order Date: <span class="text-white fw-medium">08/09/2026</span></div>
                                    <div class="order-detail-line">Payment Status: <span class="badge text-white ms-1" style="background-color: green;">Paid</span></div>
                                    <div class="order-detail-line">Delivery Status: <span class="badge text-white ms-1" style="background-color: blue;">Processing</span></div>
                                    <div class="order-detail-line">Payment Method: <span class="text-white fw-medium">stripe</span></div>
                                    <div class="order-detail-line text-truncate">Transaction ID: <span class="text-white fw-medium">pi_3UDSlUG...</span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Products List Segment -->
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <h5 class="heading-italic-font text-theme-primary mb-3">PRODUCT LIST</h5>
                            <div class="table-responsive">
                                <table class="table text-white align-middle custom-detail-table m-0">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width: 70px;">SELECT</th>
                                            <th scope="col">PRODUCT</th>
                                            <th scope="col">QTY</th>
                                            <th scope="col" class="text-end">PRICE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Product 1 -->
                                        <tr>
                                            <td>
                                                <input type="radio" name="selected_product" value="2511" class="custom-radio review-product-radio" checked>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="prod-thumb">
                                                        <img src="img/cart.png" alt="Airplane Kite" class="img-fluid">
                                                    </div>
                                                    <div>
                                                        <span class="fw-bold text-white d-block">Airplane Kite</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-secondary fw-bold">11</td>
                                            <td class="text-end fw-bold text-white">$979.00</td>
                                        </tr>

                                        <!-- Product 2 -->
                                        <tr>
                                            <td>
                                                <input type="radio" name="selected_product" value="2507" class="custom-radio review-product-radio">
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="prod-thumb">
                                                        <img src="img/cart1.png" alt="3D Giant Octopus Kite" class="img-fluid">
                                                    </div>
                                                    <div>
                                                        <span class="fw-bold text-white d-block">3D Giant Octopus Kite</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-secondary fw-bold">1</td>
                                            <td class="text-end fw-bold text-white">$55.00</td>
                                        </tr>

                                        <!-- Product 3 -->
                                        <tr>
                                            <td>
                                                <input type="radio" name="selected_product" value="2508" class="custom-radio review-product-radio">
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="prod-thumb">
                                                        <img src="img/cart.png" alt="Eagle Wings Kids Kite" class="img-fluid">
                                                    </div>
                                                    <div>
                                                        <span class="fw-bold text-white d-block">Eagle Wings Kids Kite</span>
                                                        <div class="variant-details-line">
                                                            <span class="variant-chip"><span class="variant-swatch" style="background-color: #ffea00;"></span> Yellow</span>
                                                            <span class="variant-chip">small (30")</span>
                                                            <span class="variant-chip">RipStop Nylon</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-secondary fw-bold">1</td>
                                            <td class="text-end fw-bold text-white">$44.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Right Summary Segment -->
                    <div class="row g-4 mt-4 justify-content-end">
                        <div class="col-lg-5">
                            <div class="payment-summary-card p-4 rounded-4">
                                <h5 class="heading-italic-font text-white mb-3 fs-6">Payment Summary</h5>
                                <hr class="border-secondary opacity-25 mb-3">

                                <div class="d-flex justify-content-between mb-2 text-secondary small">
                                    <span>Sub Total</span>
                                    <span class="text-white fw-semibold">$1,078.00</span>
                                </div>

                                <div class="d-flex justify-content-between mb-2 text-secondary small">
                                    <span>Shipping Fee</span>
                                    <span class="text-white fw-semibold">$5.24</span>
                                </div>

                                <hr class="border-secondary opacity-25 mb-3">

                                <div class="d-flex justify-content-between align-items-center pt-1">
                                    <h5 class="heading-italic-font text-white m-0 fs-6">Total Amount</h5>
                                    <h4 class="heading-italic-font text-theme-primary m-0">$1,083.24</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- Script to make Write Review button dynamic based on radio selection -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const radios = document.querySelectorAll('.review-product-radio');
        const writeBtn = document.getElementById('writeReviewBtn');
        const orderId = "ORD-1788888300-GCIYJZ";

        radios.forEach(radio => {
            radio.addEventListener('change', function () {
                if(this.checked) {
                    const prodId = this.value;
                    writeBtn.href = `write-review.php?id=${orderId}&product_id=${prodId}`;
                }
            });
        });
    });
</script>

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->