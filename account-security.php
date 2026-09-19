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

                        <!-- Current Password with Eye Toggle -->
                        <div class="tj-form-group">
                            <label class="tj-form-label">Current Password</label>
                            <div class="tj-password-wrap position-relative">
                                <input type="password" class="tj-form-control pe-5" name="current_password"
                                    placeholder="••••••••" required>
                                <span class="tj-toggle-password position-absolute top-50 end-0 translate-middle-y me-3"
                                    style="cursor: pointer;">
                                    <i class="fa-regular fa-eye"></i>
                                </span>
                            </div>
                        </div>

                        <!-- New Password with Eye Toggle -->
                        <div class="tj-form-group" style="margin-bottom: 10px;">
                            <label class="tj-form-label">New Password</label>
                            <div class="tj-password-wrap position-relative">
                                <input type="password" class="tj-form-control pe-5" id="newPassword" name="new_password"
                                    placeholder="••••••••" required>
                                <span class="tj-toggle-password position-absolute top-50 end-0 translate-middle-y me-3"
                                    style="cursor: pointer;">
                                    <i class="fa-regular fa-eye"></i>
                                </span>
                            </div>
                        </div>

                        <!-- Password Strength Indicator Bars -->
                        <div class="tj-strength-meter">
                            <div class="tj-strength-bar" id="bar-1"></div>
                            <div class="tj-strength-bar" id="bar-2"></div>
                            <div class="tj-strength-bar" id="bar-3"></div>
                            <div class="tj-strength-bar" id="bar-4"></div>
                        </div>
                        <span class="tj-strength-text" id="strengthText">Strength: —</span>

                        <!-- Confirm New Password with Eye Toggle -->
                        <div class="tj-form-group mt-3">
                            <label class="tj-form-label">Confirm New Password</label>
                            <div class="tj-password-wrap position-relative">
                                <input type="password" class="tj-form-control pe-5" name="confirm_password"
                                    placeholder="••••••••" required>
                                <span class="tj-toggle-password position-absolute top-50 end-0 translate-middle-y me-3"
                                    style="cursor: pointer;">
                                    <i class="fa-regular fa-eye"></i>
                                </span>
                            </div>
                        </div>

                        <!-- Helper Instruction -->
                        <div class="tj-helper-text">
                            <i class="fa-solid fa-shield-halved"></i> Use at least 8 characters with a combination of
                            letters, numbers and symbols.
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