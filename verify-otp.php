<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<style>
    /* Optional: Disabled state style for resend link */
    .tj-resend-text a.disabled {
        color: #6c757d;
        pointer-events: none;
        text-decoration: none;
    }
</style>

<!-- Body Content Start Here -->
<section class="tj-auth-section">
    <div class="tj-auth-glow tj-auth-glow-1"></div>
    <div class="tj-auth-glow tj-auth-glow-2"></div>

    <div class="container d-flex justify-content-center">
        <div class="tj-auth-card">
            
            <h2 class="tj-auth-title">Email Verification</h2>
            <p class="tj-auth-desc">Please enter the 4-digit verification code sent to your email address (<strong>john@email.com</strong>).</p>

            <form action="reset-password.php" method="POST">
                <!-- 4 Digit OTP Inputs -->
                <div class="tj-otp-inputs">
                    <input type="text" maxlength="1" class="tj-otp-input" required autofocus>
                    <input type="text" maxlength="1" class="tj-otp-input" required>
                    <input type="text" maxlength="1" class="tj-otp-input" required>
                    <input type="text" maxlength="1" class="tj-otp-input" required>
                </div>

                <button type="submit" class="tj-gradient-btn">Verify Code <i class="fa-solid fa-arrow-right ms-1"></i></button>
            </form>

            <div class="tj-resend-text">
                Didn't receive code? <a href="#" id="resendBtn">Resend Code</a> <span id="timerText">in <strong id="countdown">60</strong>s</span>
            </div>

        </div>
    </div>
</section>
<!-- Body Content End Here -->

<!-- Auto jump script & Timer script for OTP inputs -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // 1. Auto jump script for OTP inputs
        const inputs = document.querySelectorAll(".tj-otp-input");
        inputs.forEach((input, index) => {
            input.addEventListener("input", (e) => {
                if (e.target.value.length === 1 && index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }
            });
            input.addEventListener("keydown", (e) => {
                if (e.key === "Backspace" && input.value === "" && index > 0) {
                    inputs[index - 1].focus();
                }
            });
        });

        // 2. Resend Timer Script
        let timeLeft = 60;
        const countdownEl = document.getElementById("countdown");
        const resendBtn = document.getElementById("resendBtn");
        const timerText = document.getElementById("timerText");

        // Initially disable resend link
        resendBtn.classList.add("disabled");

        let timer = setInterval(function() {
            if (timeLeft <= 0) {
                clearInterval(timer);
                resendBtn.classList.remove("disabled");
                timerText.style.display = "none"; // Hide timer text or customize as needed
            } else {
                countdownEl.textContent = timeLeft;
                timeLeft -= 1;
            }
        }, 1000);

        // Resend click event handler (Optional AJAX trigger can be added here)
        resendBtn.addEventListener("click", function(e) {
            e.preventDefault();
            if(!resendBtn.classList.contains("disabled")) {
                // Reset timer
                timeLeft = 60;
                timerText.style.display = "inline";
                resendBtn.classList.add("disabled");
                
                // Restart timer interval
                timer = setInterval(arguments.callee, 1000); // simplified restart or recreate interval logic
                location.reload(); // Simple reload or fetch API call to trigger backend OTP resend
            }
        });
    });
</script>

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->