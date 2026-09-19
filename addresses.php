<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- banner Include Here  -->
<?php 
$subtitle = "Account";
$title = "My Addresses";
$desc = "Manage your shipping and billing addresses for a faster checkout.";
$currentPage = "My Addresses";

include 'inc/inner-banner.php'; 
?>
<!-- banner Include Here  -->



<section class="tj-addresses-section">
    <div class="container">
        <div class="row g-4">
            
            <!-- Sidebar Column -->
            <div class="col-lg-3">
                <?php include 'inc/profile-sidebar.php'; ?>
            </div>

            <!-- Main Addresses Content -->
            <div class="col-lg-9">
                <div class="row g-4">
                    
                    <!-- 1. Default Shipping Address -->
                    <div class="col-md-6">
                        <div class="tj-address-card">
                            <div>
                                <div class="tj-address-header">
                                    <h4 class="tj-address-title">Default Shipping</h4>
                                    <span class="tj-default-badge">Default</span>
                                </div>
                                <div class="tj-address-body">
                                    <h5>Amelia Reyes</h5>
                                    <p>1420 Rogers Avenue, Suite 300</p>
                                    <p>Fort Smith, AR 72901</p>
                                    <p class="mt-2" style="font-size: 12px; color: rgba(255,255,255,0.4);">(479) 763-1102</p>
                                </div>
                            </div>
                            <div class="tj-address-footer">
                                <a href="edit-address.php?id=1" class="tj-addr-btn"><i class="fa-solid fa-pen me-1"></i> Edit</a>
                                <a href="delete-address.php?id=1" class="tj-addr-btn tj-addr-btn-delete"><i class="fa-solid fa-trash me-1"></i> Delete</a>
                            </div>
                        </div>
                    </div>

                    <!-- 2. Billing Address -->
                    <div class="col-md-6">
                        <div class="tj-address-card">
                            <div>
                                <div class="tj-address-header">
                                    <h4 class="tj-address-title">Billing</h4>
                                </div>
                                <div class="tj-address-body">
                                    <h5>Amelia Reyes</h5>
                                    <p>88 Garrison Avenue</p>
                                    <p>Fort Smith, AR 72902</p>
                                    <p class="mt-2" style="font-size: 12px; color: rgba(255,255,255,0.4);">(479) 763-1188</p>
                                </div>
                            </div>
                            <div class="tj-address-footer">
                                <a href="edit-address.php?id=2" class="tj-addr-btn"><i class="fa-solid fa-pen me-1"></i> Edit</a>
                                <a href="delete-address.php?id=2" class="tj-addr-btn tj-addr-btn-delete"><i class="fa-solid fa-trash me-1"></i> Delete</a>
                            </div>
                        </div>
                    </div>

                    <!-- 3. Studio Address -->
                    <div class="col-md-6">
                        <div class="tj-address-card">
                            <div>
                                <div class="tj-address-header">
                                    <h4 class="tj-address-title">Studio</h4>
                                </div>
                                <div class="tj-address-body">
                                    <h5>Amelia Reyes</h5>
                                    <p>212 North 6th Street, Floor 2</p>
                                    <p>Fayetteville, AR 72701</p>
                                    <p class="mt-2" style="font-size: 12px; color: rgba(255,255,255,0.4);">(479) 555-0140</p>
                                </div>
                            </div>
                            <div class="tj-address-footer">
                                <a href="edit-address.php?id=3" class="tj-addr-btn"><i class="fa-solid fa-pen me-1"></i> Edit</a>
                                <a href="delete-address.php?id=3" class="tj-addr-btn tj-addr-btn-delete"><i class="fa-solid fa-trash me-1"></i> Delete</a>
                            </div>
                        </div>
                    </div>

                    <!-- 4. Add New Address Card -->
                    <div class="col-md-6">
                        <a href="add-address.php" class="tj-add-address-card">
                            <div class="tj-add-content">
                                <i class="fa-solid fa-plus fs-5"></i> Add New Address
                            </div>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->