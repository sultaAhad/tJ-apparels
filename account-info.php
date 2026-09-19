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