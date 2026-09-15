<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- banner Include Here  -->
<?php 
$subtitle = "Account";
$title = "Account Security";
$desc = "Update your password and secure your account.";
$currentPage = "Account Security";

include 'inc/inner-banner.php'; 
?>
<!-- banner Include Here  -->

<style>
    .tj-security-section {
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
        margin-bottom: 22px;
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

    /* Password Strength Meter */
    .tj-strength-meter {
        display: flex;
        gap: 6px;
        margin-top: 10px;
        margin-bottom: 6px;
    }

    .tj-strength-bar {
        flex: 1;
        height: 4px;
        background: rgba(135, 120, 255, 0.2);
        border-radius: 4px;
        transition: 0.3s;
    }

    .tj-strength-text {
        color: rgba(255, 255, 255, 0.5);
        font-size: 11.5px;
        font-weight: 500;
        margin-bottom: 20px;
        display: block;
    }

    /* Helper Text */
    .tj-helper-text {
        color: rgba(255, 255, 255, 0.5);
        font-size: 12px;
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 30px;
    }

    .tj-helper-text i {
        color: #38bdf8;
        font-size: 13px;
    }

    /* Submit Button */
    .tj-update-btn {
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

    .tj-update-btn:hover {
        opacity: 0.9;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(233, 54, 167, 0.4);
    }
</style>

<section class="tj-security-section">
    <div class="container">
        <div class="row g-4">
            
            <!-- Sidebar Column -->
            <div class="col-lg-3">
                <?php include 'inc/profile-sidebar.php'; ?>
            </div>

            <!-- Main Security Form Content -->
            <div class="col-lg-9">
                <div class="tj-form-card">
                    <form action="account-security.php" method="POST">
                        
                        <!-- Current Password -->
                        <div class="tj-form-group">
                            <label class="tj-form-label">Current Password</label>
                            <input type="password" class="tj-form-control" name="current_password" placeholder="••••••••" required>
                        </div>

                        <!-- New Password -->
                        <div class="tj-form-group" style="margin-bottom: 10px;">
                            <label class="tj-form-label">New Password</label>
                            <input type="password" class="tj-form-control" id="newPassword" name="new_password" placeholder="••••••••" required>
                        </div>

                        <!-- Password Strength Indicator Bars -->
                        <div class="tj-strength-meter">
                            <div class="tj-strength-bar" id="bar-1"></div>
                            <div class="tj-strength-bar" id="bar-2"></div>
                            <div class="tj-strength-bar" id="bar-3"></div>
                            <div class="tj-strength-bar" id="bar-4"></div>
                        </div>
                        <span class="tj-strength-text" id="strengthText">Strength: —</span>

                        <!-- Confirm New Password -->
                        <div class="tj-form-group">
                            <label class="tj-form-label">Confirm New Password</label>
                            <input type="password" class="tj-form-control" name="confirm_password" placeholder="••••••••" required>
                        </div>

                        <!-- Helper Instruction -->
                        <div class="tj-helper-text">
                            <i class="fa-solid fa-shield-halved"></i> Use at least 8 characters with a combination of letters, numbers and symbols.
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit" class="tj-update-btn">Update Password</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Simple Password Strength Checker Script -->
<script>
    const newPassword = document.getElementById('newPassword');
    const strengthText = document.getElementById('strengthText');
    const bars = [
        document.getElementById('bar-1'),
        document.getElementById('bar-2'),
        document.getElementById('bar-3'),
        document.getElementById('bar-4')
    ];

    newPassword.addEventListener('input', function() {
        const val = newPassword.value;
        let score = 0;

        if (val.length >= 8) score++;
        if (/[A-Z]/.test(val)) score++;
        if (/[0-9]/.test(val)) score++;
        if (/[^A-Za-z0-9]/.test(val)) score++;

        // Reset bars
        bars.forEach(bar => bar.style.background = 'rgba(135, 120, 255, 0.2)');

        if (val.length === 0) {
            strengthText.textContent = "Strength: —";
            return;
        }

        let strengthLabel = "Weak";
        let color = "#f87171"; // red

        if (score === 2) {
            strengthLabel = "Medium";
            color = "#fbbf24"; // yellow
        } else if (score >= 3) {
            strengthLabel = "Strong";
            color = "#34d399"; // green
        }

        for (let i = 0; i < score; i++) {
            bars[i].style.background = color;
        }

        strengthText.textContent = "Strength: " + strengthLabel;
    });
</script>

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->