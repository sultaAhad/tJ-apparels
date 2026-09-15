<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- banner Include Here  -->
<?php 
$subtitle = "Account";
$title = "My Orders";
$desc = "Check the status of recent orders, manage returns, and discover similar products.";
$currentPage = "My Orders";

include 'inc/inner-banner.php'; 
?>
<!-- banner Include Here  -->

<style>
    .tj-orders-section {
        background-color: #0b0b1a;
        padding: 50px 0 80px 0;
    }

    /* Bootstrap Custom Pills / Tabs */
    .tj-order-tabs.nav-pills {
        display: flex;
        gap: 12px;
        margin-bottom: 30px;
        background: transparent;
    }

    .tj-order-tabs .nav-link {
        background: rgba(17, 17, 43, 0.8) !important;
        border: 1px solid rgba(135, 120, 255, 0.16) !important;
        color: rgba(255, 255, 255, 0.6) !important;
        padding: 8px 22px !important;
        border-radius: 50px !important;
        font-size: 12.5px;
        font-weight: 600;
        transition: 0.3s;
    }

    .tj-order-tabs .nav-link.active, 
    .tj-order-tabs .nav-link:hover {
        background: linear-gradient(135deg, #7d35e8, #e936a7) !important;
        border-color: transparent !important;
        color: #fff !important;
        box-shadow: 0 4px 15px rgba(233, 54, 167, 0.3);
    }

    /* Order Card Style */
    .tj-order-card {
        background: linear-gradient(145deg, rgba(17, 17, 43, 0.9), rgba(10, 10, 26, 0.95));
        border: 1px solid rgba(135, 120, 255, 0.16);
        border-radius: 20px;
        padding: 25px;
        margin-bottom: 20px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
        transition: 0.3s;
    }

    .tj-order-card:hover {
        border-color: rgba(233, 54, 167, 0.4);
    }

    .tj-order-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 20px;
        border-bottom: 1px solid rgba(135, 120, 255, 0.1);
        padding-bottom: 15px;
    }

    .tj-order-id {
        color: #fff;
        font-size: 16px;
        font-weight: 700;
        margin-bottom: 4px;
    }

    .tj-order-date {
        color: rgba(255, 255, 255, 0.5);
        font-size: 12px;
    }

    /* Status Badges */
    .tj-status-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 6px 14px;
        border-radius: 50px;
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        border: 1px solid;
    }

    .tj-status-badge::before {
        content: "";
        width: 6px;
        height: 6px;
        border-radius: 50%;
    }

    .status-delivered {
        background: rgba(16, 185, 129, 0.1);
        color: #34d399;
        border-color: rgba(16, 185, 129, 0.2);
    }
    .status-delivered::before { background: #34d399; }

    .status-shipped {
        background: rgba(56, 189, 248, 0.1);
        color: #38bdf8;
        border-color: rgba(56, 189, 248, 0.2);
    }
    .status-shipped::before { background: #38bdf8; }

    .status-processing {
        background: rgba(251, 191, 36, 0.1);
        color: #fbbf24;
        border-color: rgba(251, 191, 36, 0.2);
    }
    .status-processing::before { background: #fbbf24; }

    .status-cancelled {
        background: rgba(239, 68, 68, 0.1);
        color: #f87171;
        border-color: rgba(239, 68, 68, 0.2);
    }
    .status-cancelled::before { background: #f87171; }

    /* Order Body & Products */
    .tj-order-body {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 15px;
    }

    .tj-order-products {
        display: flex;
        gap: 12px;
    }

    .tj-product-thumb {
        width: 55px;
        height: 55px;
        border-radius: 12px;
        overflow: hidden;
        border: 1px solid rgba(135, 120, 255, 0.2);
        background: #0b0b1a;
    }

    .tj-product-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .tj-order-price {
        color: #fff;
        font-size: 20px;
        font-weight: 800;
    }

    /* Order Action Buttons */
    .tj-order-actions {
        display: flex;
        gap: 10px;
        margin-top: 15px;
        padding-top: 15px;
        border-top: 1px solid rgba(135, 120, 255, 0.1);
    }

    .tj-action-btn {
        background: rgba(125, 53, 232, 0.15);
        border: 1px solid rgba(135, 120, 255, 0.2);
        color: #fff;
        font-size: 12px;
        font-weight: 600;
        padding: 6px 16px;
        border-radius: 50px;
        text-decoration: none;
        transition: 0.3s;
    }

    .tj-action-btn:hover {
        background: #e936a7;
        color: #fff;
        border-color: #e936a7;
    }

    .tj-action-btn-outline {
        background: transparent;
        border-color: rgba(135, 120, 255, 0.2);
        color: rgba(255, 255, 255, 0.7);
    }

    .tj-action-btn-outline:hover {
        background: rgba(255, 255, 255, 0.05);
        color: #fff;
        border-color: rgba(255, 255, 255, 0.3);
    }
</style>

<section class="tj-orders-section">
    <div class="container">
        <div class="row g-4">
            
            <!-- Sidebar Column -->
            <div class="col-lg-3">
                <?php include 'inc/profile-sidebar.php'; ?>
            </div>

            <!-- Main Orders Content -->
            <div class="col-lg-9">
                
                <!-- Bootstrap Nav Pills -->
                <ul class="nav nav-pills tj-order-tabs" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab">All</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-processing-tab" data-bs-toggle="pill" data-bs-target="#pills-processing" type="button" role="tab">Processing</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-shipped-tab" data-bs-toggle="pill" data-bs-target="#pills-shipped" type="button" role="tab">Shipped</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-delivered-tab" data-bs-toggle="pill" data-bs-target="#pills-delivered" type="button" role="tab">Delivered</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-cancelled-tab" data-bs-toggle="pill" data-bs-target="#pills-cancelled" type="button" role="tab">Cancelled</button>
                    </li>
                </ul>

                <!-- Bootstrap Tab Content -->
                <div class="tab-content" id="pills-tabContent">
                    
                    <!-- ALL TAB -->
                    <div class="tab-pane fade show active" id="pills-all" role="tabpanel">
                        
                        <!-- Order #TJ-10248 (Delivered) -->
                        <div class="tj-order-card">
                            <div class="tj-order-header">
                                <div>
                                    <h4 class="tj-order-id">Order #TJ-10248</h4>
                                    <span class="tj-order-date">January 28, 2025</span>
                                </div>
                                <span class="tj-status-badge status-delivered">Delivered</span>
                            </div>
                            <div class="tj-order-body">
                                <div class="tj-order-products">
                                    <div class="tj-product-thumb"><img src="assets/images/product-1.jpg" alt="Product"></div>
                                    <div class="tj-product-thumb"><img src="assets/images/product-2.jpg" alt="Product"></div>
                                </div>
                                <div class="tj-order-price">$248.38</div>
                            </div>
                            <div class="tj-order-actions">
                                <a href="order-detail.php?id=10248" class="tj-action-btn">View Order</a>
                                <a href="track.php?id=10248" class="tj-action-btn tj-action-btn-outline">Track Package</a>
                            </div>
                        </div>

                        <!-- Order #TJ-10193 (Shipped) -->
                        <div class="tj-order-card">
                            <div class="tj-order-header">
                                <div>
                                    <h4 class="tj-order-id">Order #TJ-10193</h4>
                                    <span class="tj-order-date">January 12, 2025</span>
                                </div>
                                <span class="tj-status-badge status-shipped">Shipped</span>
                            </div>
                            <div class="tj-order-body">
                                <div class="tj-order-products">
                                    <div class="tj-product-thumb"><img src="assets/images/product-3.jpg" alt="Product"></div>
                                </div>
                                <div class="tj-order-price">$197.19</div>
                            </div>
                            <div class="tj-order-actions">
                                <a href="order-detail.php?id=10193" class="tj-action-btn">View Order</a>
                                <a href="track.php?id=10193" class="tj-action-btn tj-action-btn-outline">Track Package</a>
                            </div>
                        </div>

                        <!-- Order #TJ-10154 (Processing) -->
                        <div class="tj-order-card">
                            <div class="tj-order-header">
                                <div>
                                    <h4 class="tj-order-id">Order #TJ-10154</h4>
                                    <span class="tj-order-date">December 30, 2024</span>
                                </div>
                                <span class="tj-status-badge status-processing">Processing</span>
                            </div>
                            <div class="tj-order-body">
                                <div class="tj-order-products">
                                    <div class="tj-product-thumb"><img src="assets/images/product-4.jpg" alt="Product"></div>
                                    <div class="tj-product-thumb"><img src="assets/images/product-5.jpg" alt="Product"></div>
                                </div>
                                <div class="tj-order-price">$291.87</div>
                            </div>
                            <div class="tj-order-actions">
                                <a href="order-detail.php?id=10154" class="tj-action-btn">View Order</a>
                            </div>
                        </div>

                        <!-- Order #TJ-10021 (Cancelled) -->
                        <div class="tj-order-card">
                            <div class="tj-order-header">
                                <div>
                                    <h4 class="tj-order-id">Order #TJ-10021</h4>
                                    <span class="tj-order-date">December 4, 2024</span>
                                </div>
                                <span class="tj-status-badge status-cancelled">Cancelled</span>
                            </div>
                            <div class="tj-order-body">
                                <div class="tj-order-products">
                                    <div class="tj-product-thumb"><img src="assets/images/product-6.jpg" alt="Product"></div>
                                </div>
                                <div class="tj-order-price">$75.59</div>
                            </div>
                            <div class="tj-order-actions">
                                <a href="order-detail.php?id=10021" class="tj-action-btn">View Order</a>
                            </div>
                        </div>

                    </div>

                    <!-- PROCESSING TAB -->
                    <div class="tab-pane fade" id="pills-processing" role="tabpanel">
                        <div class="tj-order-card">
                            <div class="tj-order-header">
                                <div>
                                    <h4 class="tj-order-id">Order #TJ-10154</h4>
                                    <span class="tj-order-date">December 30, 2024</span>
                                </div>
                                <span class="tj-status-badge status-processing">Processing</span>
                            </div>
                            <div class="tj-order-body">
                                <div class="tj-order-products">
                                    <div class="tj-product-thumb"><img src="assets/images/product-4.jpg" alt="Product"></div>
                                    <div class="tj-product-thumb"><img src="assets/images/product-5.jpg" alt="Product"></div>
                                </div>
                                <div class="tj-order-price">$291.87</div>
                            </div>
                            <div class="tj-order-actions">
                                <a href="order-detail.php?id=10154" class="tj-action-btn">View Order</a>
                            </div>
                        </div>
                    </div>

                    <!-- SHIPPED TAB -->
                    <div class="tab-pane fade" id="pills-shipped" role="tabpanel">
                        <div class="tj-order-card">
                            <div class="tj-order-header">
                                <div>
                                    <h4 class="tj-order-id">Order #TJ-10193</h4>
                                    <span class="tj-order-date">January 12, 2025</span>
                                </div>
                                <span class="tj-status-badge status-shipped">Shipped</span>
                            </div>
                            <div class="tj-order-body">
                                <div class="tj-order-products">
                                    <div class="tj-product-thumb"><img src="assets/images/product-3.jpg" alt="Product"></div>
                                </div>
                                <div class="tj-order-price">$197.19</div>
                            </div>
                            <div class="tj-order-actions">
                                <a href="order-detail.php?id=10193" class="tj-action-btn">View Order</a>
                                <a href="track.php?id=10193" class="tj-action-btn tj-action-btn-outline">Track Package</a>
                            </div>
                        </div>
                    </div>

                    <!-- DELIVERED TAB -->
                    <div class="tab-pane fade" id="pills-delivered" role="tabpanel">
                        <div class="tj-order-card">
                            <div class="tj-order-header">
                                <div>
                                    <h4 class="tj-order-id">Order #TJ-10248</h4>
                                    <span class="tj-order-date">January 28, 2025</span>
                                </div>
                                <span class="tj-status-badge status-delivered">Delivered</span>
                            </div>
                            <div class="tj-order-body">
                                <div class="tj-order-products">
                                    <div class="tj-product-thumb"><img src="assets/images/product-1.jpg" alt="Product"></div>
                                    <div class="tj-product-thumb"><img src="assets/images/product-2.jpg" alt="Product"></div>
                                </div>
                                <div class="tj-order-price">$248.38</div>
                            </div>
                            <div class="tj-order-actions">
                                <a href="order-detail.php?id=10248" class="tj-action-btn">View Order</a>
                                <a href="track.php?id=10248" class="tj-action-btn tj-action-btn-outline">Track Package</a>
                            </div>
                        </div>
                    </div>

                    <!-- CANCELLED TAB -->
                    <div class="tab-pane fade" id="pills-cancelled" role="tabpanel">
                        <div class="tj-order-card">
                            <div class="tj-order-header">
                                <div>
                                    <h4 class="tj-order-id">Order #TJ-10021</h4>
                                    <span class="tj-order-date">December 4, 2024</span>
                                </div>
                                <span class="tj-status-badge status-cancelled">Cancelled</span>
                            </div>
                            <div class="tj-order-body">
                                <div class="tj-order-products">
                                    <div class="tj-product-thumb"><img src="assets/images/product-6.jpg" alt="Product"></div>
                                </div>
                                <div class="tj-order-price">$75.59</div>
                            </div>
                            <div class="tj-order-actions">
                                <a href="order-detail.php?id=10021" class="tj-action-btn">View Order</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->