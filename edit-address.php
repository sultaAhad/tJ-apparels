<!-- App Include Here -->
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

<style>
    .tj-editaddress-section {
        background-color: #0b0b1a;
        padding: 50px 0 80px 0;
    }

    /* Form Card Container */
    .tj-form-card {
        background: linear-gradient(145deg, rgba(17, 17, 43, 0.9), rgba(10, 10, 26, 0.95));
        border: 1px solid rgba(135, 120, 255, 0.16);
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
    }

    /* Form Fields Styling */
    .tj-form-group {
        margin-bottom: 20px;
    }

    .tj-form-label {
        color: rgba(255, 255, 255, 0.7);
        font-size: 12px;
        font-weight: 600;
        margin-bottom: 8px;
        display: block;
        letter-spacing: 0.5px;
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

    .tj-form-control::placeholder {
        color: rgba(255, 255, 255, 0.3);
    }

    /* Checkbox Styling */
    .tj-checkbox-wrap {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-top: 15px;
        margin-bottom: 25px;
    }

    .tj-checkbox-wrap input[type="checkbox"] {
        width: 18px;
        height: 18px;
        accent-color: #e936a7;
        cursor: pointer;
    }

    .tj-checkbox-wrap label {
        color: rgba(255, 255, 255, 0.8);
        font-size: 13.5px;
        cursor: pointer;
        user-select: none;
    }

    /* Form Buttons */
    .tj-form-buttons {
        display: flex;
        gap: 15px;
        align-items: center;
    }

    .tj-save-btn {
        background: linear-gradient(135deg, #7d35e8, #e936a7);
        border: none;
        border-radius: 50px;
        padding: 12px 35px;
        color: #fff;
        font-size: 13px;
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
        padding: 12px 30px;
        color: rgba(255, 255, 255, 0.7);
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        text-decoration: none;
        transition: 0.3s;
        text-align: center;
    }

    .tj-cancel-btn:hover {
        background: rgba(135, 120, 255, 0.1);
        color: #fff;
        border-color: rgba(135, 120, 255, 0.5);
    }
</style>

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
<!-- Footer Include Here -->