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
                                    <div class="tj-product-thumb"><img src="img/cart.png" alt="Product"></div>
                                    <div class="tj-product-thumb"><img src="img/cart1.png" alt="Product"></div>
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
                                    <div class="tj-product-thumb"><img src="img/cart.png" alt="Product"></div>
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
                                      <div class="tj-product-thumb"><img src="img/cart.png" alt="Product"></div>
                                    <div class="tj-product-thumb"><img src="img/cart1.png" alt="Product"></div>
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
                                    <div class="tj-product-thumb"><img src="img/cart1.png" alt="Product"></div>
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
                                      <div class="tj-product-thumb"><img src="img/cart.png" alt="Product"></div>
                                    <div class="tj-product-thumb"><img src="img/cart1.png" alt="Product"></div>
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
                                    <div class="tj-product-thumb"><img src="img/cart1.png" alt="Product"></div>
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
                                     <div class="tj-product-thumb"><img src="img/cart.png" alt="Product"></div>
                                    <div class="tj-product-thumb"><img src="img/cart1.png" alt="Product"></div>
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
                                    <div class="tj-product-thumb"><img src="img/cart1.png" alt="Product"></div>
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