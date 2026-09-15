<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- banner Include Here  -->
<?php 
$order_id = isset($_GET['id']) ? $_GET['id'] : '10248';
$subtitle = "Account";
$title = "My Order Detail";
$desc = "Review your order status, purchased items, and delivery details.";
$currentPage = "My Orders";

include 'inc/inner-banner.php'; 
?>
<!-- banner Include Here  -->

<style>
    .tj-orderdetail-section {
        background-color: #0b0b1a;
        padding: 50px 0 80px 0;
    }

    .text-theme-primary { color: #e936a7 !important; }
    .heading-italic-font { font-style: italic; font-weight: 800; }

    /* Custom Info Cards */
    .info-card {
        background: linear-gradient(145deg, rgba(17, 17, 43, 0.9), rgba(10, 10, 26, 0.95));
        border: 1px solid rgba(135, 120, 255, 0.16);
        border-radius: 20px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
    }

    .info-circle-icon {
        width: 45px;
        height: 45px;
        background: rgba(135, 120, 255, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .order-detail-line {
        color: rgba(255, 255, 255, 0.6);
        font-size: 13px;
        margin-bottom: 5px;
    }

    /* Custom Table */
    .custom-detail-table th {
        background: transparent;
        color: rgba(255, 255, 255, 0.5);
        font-size: 12px;
        text-transform: uppercase;
        border-bottom: 1px solid rgba(135, 120, 255, 0.2);
        padding-bottom: 15px;
    }

    .custom-detail-table td {
        background: transparent;
        border-bottom: 1px solid rgba(135, 120, 255, 0.1);
        padding: 15px 10px;
    }

    .prod-thumb {
        width: 55px;
        height: 55px;
        border-radius: 10px;
        overflow: hidden;
        border: 1px solid rgba(135, 120, 255, 0.2);
    }

    .prod-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Variant Chips */
    .variant-details-line {
        display: flex;
        gap: 8px;
        margin-top: 5px;
        flex-wrap: wrap;
    }

    .variant-chip {
        background: rgba(135, 120, 255, 0.1);
        border: 1px solid rgba(135, 120, 255, 0.2);
        padding: 2px 8px;
        border-radius: 20px;
        font-size: 11px;
        color: rgba(255, 255, 255, 0.8);
        display: inline-flex;
        align-items: center;
        gap: 5px;
    }

    .variant-swatch {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        display: inline-block;
    }

    /* Payment Summary Card */
    .payment-summary-card {
        background: linear-gradient(145deg, rgba(17, 17, 43, 0.9), rgba(10, 10, 26, 0.95));
        border: 1px solid rgba(135, 120, 255, 0.16);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
    }

    /* Buttons */
    .btn-review-purple {
        background: linear-gradient(135deg, #7d35e8, #e936a7);
        border: none;
        color: #fff;
        font-weight: 700;
        font-size: 13px;
        text-transform: uppercase;
    }

    .btn-theme-gradient {
        background: linear-gradient(135deg, #7d35e8, #e936a7);
        border: none;
        color: #fff;
        font-weight: 700;
        border-radius: 50px;
        padding: 8px 25px;
    }

    /* Custom Radio styling matching theme */
    .custom-radio {
        accent-color: #e936a7;
        transform: scale(1.2);
        cursor: pointer;
    }
</style>

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
                            <h3 class="heading-italic-font text-theme-primary mb-1">MY ORDER DETAIL</h3>
                            <span class="text-secondary fw-semibold">#ORD-1788888300-GCIYJZ</span>
                        </div>
                        
                        <div class="d-flex flex-wrap gap-3">
                            <a href="write-review.php?id=ORD-1788888300-GCIYJZ&product_id=2511" id="writeReviewBtn" class="btn btn-review-purple px-4 py-2 rounded-pill">Write A Review</a>
                            <a href="my-orders.php" class="btn btn-theme-gradient">Back</a>
                        </div>
                    </div>

                    <hr class="border-secondary opacity-25 mb-4">

                    <!-- Info blocks grid -->
                    <div class="row g-3 mb-5">
                        <!-- Shipping Info -->
                        <div class="col-md-4">
                            <div class="info-card p-3 h-100 d-flex align-items-start gap-3" style="background: rgba(11, 11, 26, 0.4);">
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
                        <div class="col-md-4">
                            <div class="info-card p-3 h-100 d-flex align-items-start gap-3" style="background: rgba(11, 11, 26, 0.4);">
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
                        <div class="col-md-4">
                            <div class="info-card p-3 h-100 d-flex align-items-start gap-3" style="background: rgba(11, 11, 26, 0.4);">
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
                                                        <img src="assets/images/product-1.jpg" alt="Airplane Kite" class="img-fluid">
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
                                                        <img src="assets/images/product-2.jpg" alt="3D Giant Octopus Kite" class="img-fluid">
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
                                                        <img src="assets/images/product-3.jpg" alt="Eagle Wings Kids Kite" class="img-fluid">
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