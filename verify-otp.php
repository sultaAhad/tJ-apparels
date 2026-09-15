<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<style>
    :root {
        --tj-border: rgba(135, 120, 255, 0.16);
        --tj-purple: #7d35e8;
        --tj-pink: #e936a7;
    }

    .tj-auth-section {
        background-color: #0b0b1a;
        min-height: 85vh;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
        padding: 60px 0;
    }

    .tj-auth-glow {
        position: absolute;
        width: 350px;
        height: 350px;
        border-radius: 50%;
        filter: blur(100px);
        z-index: 1;
        opacity: 0.15;
    }
    .tj-auth-glow-1 { top: 10%; left: 20%; background: var(--tj-purple); }
    .tj-auth-glow-2 { bottom: 10%; right: 20%; background: var(--tj-pink); }

    .tj-auth-card {
        background: linear-gradient(145deg, rgba(17, 17, 43, 0.9), rgba(10, 10, 26, 0.95));
        border: 1px solid var(--tj-border);
        border-radius: 24px;
        padding: 45px 35px;
        width: 100%;
        max-width: 440px;
        position: relative;
        z-index: 2;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
    }

    .tj-auth-title {
        color: #fff;
        font-size: 22px;
        font-weight: 800;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-bottom: 8px;
    }

    .tj-auth-desc {
        color: rgba(255, 255, 255, 0.55);
        font-size: 13px;
        line-height: 1.5;
        margin-bottom: 30px;
    }

    /* OTP Inputs Grid Style */
    .tj-otp-inputs {
        display: flex;
        gap: 12px;
        justify-content: center;
        margin-bottom: 25px;
    }

    .tj-otp-input {
        width: 50px;
        height: 55px;
        background: rgba(10, 10, 26, 0.6);
        border: 1px solid var(--tj-border);
        border-radius: 12px;
        color: #fff;
        font-size: 20px;
        font-weight: 700;
        text-align: center;
        outline: none;
        transition: 0.3s;
    }

    .tj-otp-input:focus {
        border-color: var(--tj-pink);
        box-shadow: 0 0 15px rgba(233, 54, 167, 0.2);
    }

    .tj-gradient-btn {
        background: linear-gradient(135deg, var(--tj-purple), var(--tj-pink));
        border: none;
        border-radius: 50px;
        padding: 13px;
        color: #fff;
        font-size: 12.5px;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        width: 100%;
        cursor: pointer;
        transition: 0.3s;
        box-shadow: 0 4px 15px rgba(125, 53, 232, 0.3);
        margin-bottom: 20px;
    }

    .tj-gradient-btn:hover {
        opacity: 0.9;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(233, 54, 167, 0.4);
    }

    .tj-resend-text {
        text-align: center;
        color: rgba(255, 255, 255, 0.5);
        font-size: 11.5px;
    }

    .tj-resend-text a {
        color: var(--tj-pink);
        font-weight: 700;
        text-decoration: none;
        margin-left: 4px;
    }

    .tj-resend-text a:hover {
        color: #fff;
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
                Didn't receive code? <a href="#">Resend Code</a>
            </div>

        </div>
    </div>
</section>
<!-- Body Content End Here -->

<!-- Auto jump script for OTP inputs -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
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
    });
</script>

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->