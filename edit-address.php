App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- banner Include Here  -->
<?php 
$address_id = isset($_GET['id']) ? $_GET['id'] : '1';
$subtitle = "Account";
$title = "Edit Address";
$desc = "Update your shipping or billing address details.";
$currentPage = "My Addresses";

include 'inc/inner-banner.php'; 
?>
<!-- banner Include Here  -->



<section class="tj-editaddress-section">
    <div class="container">
        <div class="row g-4">
            
            <!-- Sidebar Column -->
            <div class="col-lg-3">
                <?php include 'inc/profile-sidebar.php'; ?>
            </div>

            <!-- Main Edit Form Content -->
            <div class="col-lg-9">
                <div class="tj-form-card">
                    <form action="addresses.php" method="POST">
                        <input type="hidden" name="address_id" value="<?php echo $address_id; ?>">

                        <div class="row">
                            <!-- First Name -->
                            <div class="col-md-6 tj-form-group">
                                <label class="tj-form-label">First Name</label>
                                <input type="text" class="tj-form-control" name="first_name" value="Amelia" placeholder="Enter first name" required>
                            </div>

                            <!-- Last Name -->
                            <div class="col-md-6 tj-form-group">
                                <label class="tj-form-label">Last Name</label>
                                <input type="text" class="tj-form-control" name="last_name" value="Reyes" placeholder="Enter last name" required>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="tj-form-group">
                            <label class="tj-form-label">Phone</label>
                            <input type="text" class="tj-form-control" name="phone" value="(479) 763-1102" placeholder="(479) 000-0000" required>
                        </div>

                        <!-- Address -->
                        <div class="tj-form-group">
                            <label class="tj-form-label">Address</label>
                            <input type="text" class="tj-form-control" name="address" value="1420 Rogers Avenue" placeholder="Street address" required>
                        </div>

                        <!-- Apartment / Suite -->
                        <div class="tj-form-group">
                            <label class="tj-form-label">Apartment / Suite</label>
                            <input type="text" class="tj-form-control" name="apartment" value="Suite 300" placeholder="Apartment, suite, unit, etc. (optional)">
                        </div>

                        <div class="row">
                            <!-- City -->
                            <div class="col-md-4 tj-form-group">
                                <label class="tj-form-label">City</label>
                                <input type="text" class="tj-form-control" name="city" value="Fort Smith" placeholder="City" required>
                            </div>

                            <!-- State -->
                            <div class="col-md-4 tj-form-group">
                                <label class="tj-form-label">State</label>
                                <input type="text" class="tj-form-control" name="state" value="AR" placeholder="State" required>
                            </div>

                            <!-- ZIP Code -->
                            <div class="col-md-4 tj-form-group">
                                <label class="tj-form-label">ZIP Code</label>
                                <input type="text" class="tj-form-control" name="zip_code" value="72901" placeholder="ZIP Code" required>
                            </div>
                        </div>

                        <!-- Set as Default Checkbox -->
                        <div class="tj-checkbox-wrap">
                            <input type="checkbox" id="set_default" name="is_default" checked>
                            <label for="set_default">Set as default address</label>
                        </div>

                        <!-- Form Action Buttons -->
                        <div class="tj-form-buttons">
                            <button type="submit" class="tj-save-btn">Save Address</button>
                            <a href="addresses.php" class="tj-cancel-btn">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here