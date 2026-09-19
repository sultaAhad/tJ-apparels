<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- banner Include Here  -->
<?php 
$subtitle = "Account";
$title = "Welcome back, Amelia";
$desc = "Track orders, revisit your wishlists and keep your details current.";
$currentPage = "My Profile";

include 'inc/inner-banner.php'; 
?>
<!-- banner Include Here  -->



<section class="tj-dashboard-section">
    <div class="container">
        <div class="row g-4">
            
            <!-- Sidebar Column -->
            <div class="col-lg-3">
                <?php include 'inc/profile-sidebar.php'; ?>
            </div>

            <!-- Main Content Column -->
            <div class="col-lg-9">
                
                <!-- Top Row: 4 Stat Cards -->
                <div class="row g-4 mb-4">
                    <div class="col-md-3 col-6">
                        <div class="tj-stat-card">
                            <div class="tj-stat-icon"><i class="fa-solid fa-box"></i></div>
                            <div class="tj-stat-number">4</div>
                            <div class="tj-stat-label">Orders placed</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="tj-stat-card">
                            <div class="tj-stat-icon"><i class="fa-solid fa-heart"></i></div>
                            <div class="tj-stat-number">13</div>
                            <div class="tj-stat-label">Saved pieces</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="tj-stat-card">
                            <div class="tj-stat-icon"><i class="fa-solid fa-location-dot"></i></div>
                            <div class="tj-stat-number">3</div>
                            <div class="tj-stat-label">Addresses</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="tj-stat-card">
                            <div class="tj-stat-icon"><i class="fa-solid fa-shield-check"></i></div>
                            <div class="tj-stat-number" style="font-size: 22px; margin-top: 4px;">Verified</div>
                            <div class="tj-stat-label">Account status</div>
                        </div>
                    </div>
                </div>

                <!-- Bottom Row: Account Information & Default Address -->
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="tj-stat-card">
                            <div class="tj-info-box-title" style="color: #38bdf8;">
                                <span><i class="fa-solid fa-location-crosshairs me-1"></i> Default Address</span>
                                <a href="edit-address.php" class="tj-edit-btn"><i class="fa-solid fa-pen me-1"></i> Edit</a>
                            </div>
                            <div class="tj-info-content">
                                <h5>Default Shipping</h5>
                                <p>1420 Rogers Avenue, Suite 300</p>
                                <p>Fort Smith, AR 72901</p>
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