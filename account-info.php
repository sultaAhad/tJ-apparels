<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- banner Include Here  -->
<?php 
$subtitle = "Account";
$title = "Account Information";
$desc = "View and manage your personal profile information.";
$currentPage = "Account Information";

include 'inc/inner-banner.php'; 
?>
<!-- banner Include Here  -->

<style>
    .tj-account-section {
        background-color: #0b0b1a;
        padding: 50px 0 80px 0;
    }

    /* Account Card Container */
    .tj-account-card {
        background: linear-gradient(145deg, rgba(17, 17, 43, 0.9), rgba(10, 10, 26, 0.95));
        border: 1px solid rgba(135, 120, 255, 0.16);
        border-radius: 20px;
        padding: 35px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
    }

    /* Profile Top Header */
    .tj-profile-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
        padding-bottom: 25px;
        border-bottom: 1px solid rgba(135, 120, 255, 0.12);
    }

    .tj-profile-user-info {
        display: flex;
        align-items: center;
        gap: 18px;
    }

    .tj-profile-avatar {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: linear-gradient(135deg, #7d35e8, #e936a7);
        color: #fff;
        font-size: 20px;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 5px 15px rgba(233, 54, 167, 0.3);
    }

    .tj-profile-name-wrap h4 {
        color: #fff;
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 4px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .tj-profile-name-wrap h4 i {
        color: #38bdf8;
        font-size: 14px;
    }

    .tj-profile-submeta {
        display: flex;
        gap: 20px;
        color: rgba(255, 255, 255, 0.5);
        font-size: 13px;
    }

    .tj-profile-submeta span {
        display: flex;
        align-items: center;
        gap: 6px;
    }

    /* Edit Information Top Button */
    .tj-edit-info-btn {
        background: transparent;
        border: 1px solid rgba(135, 120, 255, 0.3);
        border-radius: 50px;
        padding: 8px 22px;
        color: #fff;
        font-size: 12.5px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .tj-edit-info-btn:hover {
        background: rgba(233, 54, 167, 0.15);
        border-color: #e936a7;
        color: #fff;
    }

    /* Info Display Boxes (Normal View) */
    .tj-info-box {
        background: rgba(11, 11, 26, 0.6);
        border: 1px solid rgba(135, 120, 255, 0.15);
        border-radius: 14px;
        padding: 18px 22px;
        margin-bottom: 20px;
    }

    .tj-info-label {
        color: rgba(255, 255, 255, 0.45);
        font-size: 10.5px;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        margin-bottom: 6px;
        display: block;
    }

    .tj-info-value {
        color: #fff;
        font-size: 15px;
        font-weight: 600;
        margin: 0;
    }

    /* Form Fields Styling (Edit View) */
    .tj-form-group {
        margin-bottom: 20px;
    }

    .tj-form-label {
        color: rgba(255, 255, 255, 0.7);
        font-size: 12px;
        font-weight: 600;
        margin-bottom: 8px;
        display: block;
    }

    .tj-form-control {
        width: 100%;
        background: rgba(11, 11, 26, 0.8);
        border: 1px solid rgba(135, 120, 255, 0.2);
        border-radius: 12px;
        padding: 12px 18px;
        color: #fff;
        font-size: 14px;
        transition: 0.3s;
    }

    .tj-form-control:focus {
        outline: none;
        border-color: #e936a7;
        box-shadow: 0 0 10px rgba(233, 54, 167, 0.2);
        background: rgba(11, 11, 26, 0.95);
    }

    /* Form Action Buttons */
    .tj-form-buttons {
        display: flex;
        gap: 15px;
        align-items: center;
        margin-top: 10px;
    }

    .tj-save-btn {
        background: linear-gradient(135deg, #7d35e8, #e936a7);
        border: none;
        border-radius: 50px;
        padding: 12px 32px;
        color: #fff;
        font-size: 12.5px;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        cursor: pointer;
        transition: 0.3s;
        box-shadow: 0 4px 15px rgba(125, 53, 232, 0.3);
    }

    .tj-save-btn:hover {
        opacity: 0.9;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(233, 54, 167, 0.4);
    }

    .tj-cancel-btn {
        background: transparent;
        border: 1px solid rgba(135, 120, 255, 0.3);
        border-radius: 50px;
        padding: 12px 28px;
        color: rgba(255, 255, 255, 0.7);
        font-size: 12.5px;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        cursor: pointer;
        transition: 0.3s;
    }

    .tj-cancel-btn:hover {
        background: rgba(135, 120, 255, 0.1);
        color: #fff;
        border-color: rgba(135, 120, 255, 0.5);
    }
</style>

<section class="tj-account-section">
    <div class="container">
        <div class="row g-4">
            
            <!-- Sidebar Column -->
            <div class="col-lg-3">
                <?php include 'inc/profile-sidebar.php'; ?>
            </div>

            <!-- Main Content Column -->
            <div class="col-lg-9">
                <div class="tj-account-card">
                    
                    <!-- Profile Header (Common for both views) -->
                    <div class="tj-profile-header">
                        <div class="tj-profile-user-info">
                            <div class="tj-profile-avatar">AR</div>
                            <div class="tj-profile-name-wrap">
                                <h4>Amelia Reyes <i class="fa-solid fa-circle-check" title="Verified Account"></i></h4>
                                <div class="tj-profile-submeta">
                                    <span><i class="fa-regular fa-envelope"></i> amelia.reyes@example.com</span>
                                    <span><i class="fa-solid fa-phone"></i> (479) 763-1102</span>
                                </div>
                            </div>
                        </div>
                        <!-- Edit Button (Visible in Normal View) -->
                        <button type="button" class="tj-edit-info-btn" id="editToggleBtn">
                            <i class="fa-solid fa-pen"></i> Edit Information
                        </button>
                    </div>

                    <!-- VIEW MODE (Default) -->
                    <div id="viewModeSection">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="tj-info-box">
                                    <span class="tj-info-label">Full Name</span>
                                    <h5 class="tj-info-value">Amelia Reyes</h5>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tj-info-box">
                                    <span class="tj-info-label">Email Address</span>
                                    <h5 class="tj-info-value">amelia.reyes@example.com</h5>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tj-info-box">
                                    <span class="tj-info-label">Phone Number</span>
                                    <h5 class="tj-info-value">(479) 763-1102</h5>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tj-info-box">
                                    <span class="tj-info-label">Email Preferences</span>
                                    <h5 class="tj-info-value">Weekly edit</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- EDIT MODE (Hidden by default) -->
                    <div id="editModeSection" style="display: none;">
                        <form action="account-information.php" method="POST">
                            <div class="row">
                                <!-- First Name -->
                                <div class="col-md-6 tj-form-group">
                                    <label class="tj-form-label">First Name</label>
                                    <input type="text" class="tj-form-control" name="first_name" value="Amelia" required>
                                </div>

                                <!-- Last Name -->
                                <div class="col-md-6 tj-form-group">
                                    <label class="tj-form-label">Last Name</label>
                                    <input type="text" class="tj-form-control" name="last_name" value="Reyes" required>
                                </div>

                                <!-- Email Address -->
                                <div class="col-md-6 tj-form-group">
                                    <label class="tj-form-label">Email Address</label>
                                    <input type="email" class="tj-form-control" name="email" value="amelia.reyes@example.com" required>
                                </div>

                                <!-- Phone Number -->
                                <div class="col-md-6 tj-form-group">
                                    <label class="tj-form-label">Phone Number</label>
                                    <input type="text" class="tj-form-control" name="phone" value="(479) 763-1102" required>
                                </div>
                            </div>

                            <!-- Buttons -->
                            <div class="tj-form-buttons">
                                <button type="submit" class="tj-save-btn">Save Changes</button>
                                <button type="button" class="tj-cancel-btn" id="cancelEditBtn">Cancel</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- JavaScript for Toggling Edit Form -->
<script>
    const editToggleBtn = document.getElementById('editToggleBtn');
    const cancelEditBtn = document.getElementById('cancelEditBtn');
    const viewModeSection = document.getElementById('viewModeSection');
    const editModeSection = document.getElementById('editModeSection');

    editToggleBtn.addEventListener('click', function() {
        viewModeSection.style.display = 'none';
        editModeSection.style.display = 'block';
        editToggleBtn.style.display = 'none'; // Hide edit button while editing
    });

    cancelEditBtn.addEventListener('click', function() {
        editModeSection.style.display = 'none';
        viewModeSection.style.display = 'block';
        editToggleBtn.style.display = 'flex'; // Show edit button again
    });
</script>

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->