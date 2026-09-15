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

    .tj-form-label {
        color: rgba(255, 255, 255, 0.7);
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        margin-bottom: 8px;
        display: block;
    }

    .tj-auth-input {
        background: rgba(10, 10, 26, 0.6);
        border: 1px solid var(--tj-border);
        border-radius: 10px;
        padding: 12px 18px;
        color: #fff;
        font-size: 13px;
        width: 100%;
        outline: none;
        transition: 0.3s;
        margin-bottom: 20px;
    }

    .tj-auth-input::placeholder {
        color: rgba(255, 255, 255, 0.25);
    }

    .tj-auth-input:focus {
        border-color: var(--tj-pink);
        box-shadow: 0 0 15px rgba(233, 54, 167, 0.15);
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
        margin-top: 10px;
    }

    .tj-gradient-btn:hover {
        opacity: 0.9;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(233, 54, 167, 0.4);
    }
</style>

<!-- Body Content Start Here -->
<section class="tj-auth-section">
    <div class="tj-auth-glow tj-auth-glow-1"></div>
    <div class="tj-auth-glow tj-auth-glow-2"></div>

    <div class="container d-flex justify-content-center">
        <div class="tj-auth-card">
            
            <h2 class="tj-auth-title">Set New Password</h2>
            <p class="tj-auth-desc">Your identity has been verified. Please create a secure new password for your account.</p>

            <form action="login.php" method="POST">
                <div>
                    <label class="tj-form-label">New Password *</label>
                    <input type="password" class="tj-auth-input" placeholder="********" required>
                </div>

                <div>
                    <label class="tj-form-label">Confirm New Password *</label>
                    <input type="password" class="tj-auth-input" placeholder="********" required>
                </div>

                <button type="submit" class="tj-gradient-btn">Update Password <i class="fa-solid fa-arrow-right ms-1"></i></button>
            </form>

        </div>
    </div>
</section>
<!-- Body Content End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->