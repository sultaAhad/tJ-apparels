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

<style>
    .tj-addresses-section {
        background-color: #0b0b1a;
        padding: 50px 0 80px 0;
    }

    /* Address Card Style */
    .tj-address-card {
        background: linear-gradient(145deg, rgba(17, 17, 43, 0.9), rgba(10, 10, 26, 0.95));
        border: 1px solid rgba(135, 120, 255, 0.16);
        border-radius: 20px;
        padding: 25px;
        height: 100%;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
        transition: 0.3s;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .tj-address-card:hover {
        border-color: rgba(233, 54, 167, 0.4);
        transform: translateY(-3px);
    }

    .tj-address-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
    }

    .tj-address-title {
        color: #fff;
        font-size: 16px;
        font-weight: 700;
        margin: 0;
    }

    /* Default Badge */
    .tj-default-badge {
        background: rgba(56, 189, 248, 0.1);
        border: 1px solid rgba(56, 189, 248, 0.3);
        color: #38bdf8;
        font-size: 10px;
        font-weight: 700;
        padding: 4px 12px;
        border-radius: 50px;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .tj-address-body {
        margin-bottom: 20px;
    }

    .tj-address-body h5 {
        color: #fff;
        font-size: 14.5px;
        font-weight: 600;
        margin-bottom: 6px;
    }

    .tj-address-body p {
        color: rgba(255, 255, 255, 0.6);
        font-size: 13px;
        margin-bottom: 4px;
    }

    .tj-address-footer {
        display: flex;
        gap: 10px;
        border-top: 1px solid rgba(135, 120, 255, 0.1);
        padding-top: 15px;
    }

    .tj-addr-btn {
        background: rgba(125, 53, 232, 0.15);
        border: 1px solid rgba(135, 120, 255, 0.2);
        color: #fff;
        font-size: 12px;
        font-weight: 600;
        padding: 5px 18px;
        border-radius: 50px;
        text-decoration: none;
        transition: 0.3s;
    }

    .tj-addr-btn:hover {
        background: #e936a7;
        color: #fff;
        border-color: #e936a7;
    }

    .tj-addr-btn-delete {
        background: rgba(239, 68, 68, 0.1);
        border-color: rgba(239, 68, 68, 0.2);
        color: #f87171;
    }

    .tj-addr-btn-delete:hover {
        background: #ef4444;
        color: #fff;
        border-color: #ef4444;
    }

    /* Add New Address Dashed Card */
    .tj-add-address-card {
        background: transparent;
        border: 2px dashed rgba(135, 120, 255, 0.25);
        border-radius: 20px;
        padding: 40px 25px;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        text-decoration: none;
        transition: 0.3s;
        min-height: 210px;
    }

    .tj-add-address-card:hover {
        border-color: #e936a7;
        background: rgba(233, 54, 167, 0.03);
    }

    .tj-add-content {
        color: rgba(255, 255, 255, 0.7);
        font-size: 14px;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: 0.3s;
    }

    .tj-add-address-card:hover .tj-add-content {
        color: #fff;
    }
</style>

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