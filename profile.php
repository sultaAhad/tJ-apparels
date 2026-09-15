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

<style>
    .tj-dashboard-section {
        background-color: #0b0b1a;
        padding: 50px 0 80px 0;
    }

    /* Dashboard Cards Style */
    .tj-stat-card {
        background: linear-gradient(145deg, rgba(17, 17, 43, 0.9), rgba(10, 10, 26, 0.95));
        border: 1px solid rgba(135, 120, 255, 0.16);
        border-radius: 20px;
        padding: 25px;
        height: 100%;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
        transition: 0.3s;
    }
    .tj-stat-card:hover {
        border-color: rgba(233, 54, 167, 0.4);
        transform: translateY(-3px);
    }

    .tj-stat-icon {
        color: #e936a7;
        font-size: 18px;
        margin-bottom: 15px;
        display: inline-block;
    }

    .tj-stat-number {
        color: #fff;
        font-size: 28px;
        font-weight: 800;
        margin-bottom: 5px;
    }

    .tj-stat-label {
        color: rgba(255, 255, 255, 0.55);
        font-size: 12.5px;
        font-weight: 500;
    }

    /* Info & Address Boxes */
    .tj-info-box-title {
        color: rgba(255, 255, 255, 0.5);
        font-size: 10.5px;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        margin-bottom: 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .tj-edit-btn {
        background: rgba(125, 53, 232, 0.15);
        border: 1px solid rgba(135, 120, 255, 0.2);
        color: #fff;
        font-size: 11px;
        padding: 4px 12px;
        border-radius: 50px;
        text-decoration: none;
        transition: 0.3s;
    }
    .tj-edit-btn:hover {
        background: var(--tj-pink, #e936a7);
        color: #fff;
    }

    .tj-info-content h5 {
        color: #fff;
        font-size: 15px;
        font-weight: 700;
        margin-bottom: 6px;
    }

    .tj-info-content p {
        color: rgba(255, 255, 255, 0.6);
        font-size: 13px;
        margin-bottom: 4px;
    }
</style>

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
                            <div class="tj-info-box-title">
                                <span><i class="fa-solid fa-user me-1"></i> Account Information</span>
                                <a href="account-info.php" class="tj-edit-btn"><i class="fa-solid fa-pen me-1"></i> Edit</a>
                            </div>
                            <div class="tj-info-content">
                                <h5>Amelia Reyes</h5>
                                <p>amelia.reyes@example.com</p>
                                <p>(479) 763-1102</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="tj-stat-card">
                            <div class="tj-info-box-title" style="color: #38bdf8;">
                                <span><i class="fa-solid fa-location-crosshairs me-1"></i> Default Address</span>
                                <a href="addresses.php" class="tj-edit-btn"><i class="fa-solid fa-pen me-1"></i> Edit</a>
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