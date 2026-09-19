<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- banner Include Here  -->
<?php 
$subtitle = "LEGAL & POLICIES";
$title = "Terms & Privacy Policy";
$desc = "Please read these terms and conditions and privacy policies carefully before using our services.";
$currentPage = "Terms & Conditions";

include 'inc/inner-banner.php'; 
?>
<!-- banner Include Here  -->

<style>
:root {
    --tj-border: rgba(135, 120, 255, 0.16);
    --tj-purple: #7d35e8;
    --tj-pink: #e936a7;
    --tj-bg-dark: #090b29;
}

.tj-legal-wrapper {
    background-color: var(--tj-bg-dark);
    position: relative;
    color: rgba(255, 255, 255, 0.75);
}

/* Policy Switcher Tabs */
.tj-legal-tabs {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-bottom: 40px;
}

.tj-legal-tab-btn {
    background: linear-gradient(145deg, rgba(17, 17, 43, 0.8), rgba(10, 10, 26, 0.9));
    border: 1px solid var(--tj-border);
    color: rgba(255, 255, 255, 0.6);
    padding: 10px 28px;
    border-radius: 50px;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    transition: 0.3s;
}

.tj-legal-tab-btn.active, .tj-legal-tab-btn:hover {
    background: linear-gradient(135deg, var(--tj-purple), var(--tj-pink));
    border-color: transparent;
    color: #fff;
    box-shadow: 0 4px 15px rgba(125, 53, 232, 0.35);
}

/* Content Box */
.tj-legal-container {
    background: linear-gradient(145deg, rgba(17, 17, 43, 0.9), rgba(10, 10, 26, 0.95));
    border: 1px solid var(--tj-border);
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
}

.tj-legal-container h3 {
    font-size: 20px;
    font-weight: 700;
    color: #fff;
    margin-top: 25px;
    margin-bottom: 12px;
}

.tj-legal-container h3:first-child {
    margin-top: 0;
}

.tj-legal-container p {
    font-size: 13.5px;
    line-height: 1.8;
    color: rgba(255, 255, 255, 0.65);
    margin-bottom: 20px;
}

.tj-legal-container ul {
    margin-bottom: 20px;
    padding-left: 20px;
}

.tj-legal-container ul li {
    font-size: 13.5px;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.65);
    margin-bottom: 8px;
}

.legal-content-pane {
    display: none;
}

.legal-content-pane.active {
    display: block;
}
</style>

<!-- Main Wrapper -->
<div class="tj-legal-wrapper py-5">
    <div class="container py-3">

        <!-- Policy Navigation Tabs -->
        <div class="tj-legal-tabs">
            <button class="tj-legal-tab-btn active" onclick="switchPolicy(event, 'terms-pane')">Terms & Conditions</button>
            <button class="tj-legal-tab-btn" onclick="switchPolicy(event, 'privacy-pane')">Privacy Policy</button>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                
                <!-- 1. TERMS & CONDITIONS PANE -->
                <div id="terms-pane" class="tj-legal-container legal-content-pane active">
                    <h3>1. Introduction</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Purus gravida quis blandit turpis cursus in hac habitasse. Elit ut aliquam purus sit amet luctus venenatis lectus. Egestas dui id ornare.</p>

                    <h3>2. Guidelines for Using Our Services</h3>
                    <p>Cursus euismod quis viverra nibh cras. Facilisi nullam vehicula ipsum a. Vulputate odio ut enim blandit volutpat maecenas volutpat blandit. Blandit volutpat maecenas volutpat blandit aliquam etiam erat velit scelerisque.</p>
                    
                    <ul>
                        <li><strong>Consent:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Purus gravida quis blandit turpis cursus in hac.</li>
                        <li><strong>User Accounts:</strong> Elit ut aliquam purus sit amet luctus venenatis lectus. Egestas dui id ornare. Cursus euismod quis viverra nibh cras facilisi nullam.</li>
                        <li><strong>Intellectual Property:</strong> Vulputate odio ut enim blandit volutpat maecenas volutpat blandit aliquam etiam erat velit scelerisque libero volutpat sed cras ornare arcu.</li>
                    </ul>

                    <h3>3. Limitation of Liability</h3>
                    <p>Eu facilisis sed odio morbi. Placerat in egestas erat imperdiet. Mattis aliquam faucibus purus in massa tempor. Laoreet suspendisse interdum consectetur libero id faucibus nisl. Porta nibh venenatis cras sed felis.</p>

                    <h3>4. Changes to Terms</h3>
                    <p>Risus at ultrices mi tempus imperdiet nulla. Semper viverra nam libero justo laoreet sit. In metus vulputate eu scelerisque felis imperdiet proin fermentum leo. Phasellus egestas tellus rutrum tellus.</p>
                </div>

                <!-- 2. PRIVACY POLICY PANE -->
                <div id="privacy-pane" class="tj-legal-container legal-content-pane">
                    <h3>1. Information We Collect</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. We collect information you provide directly to us when you create an account, update your profile, or make a purchase.</p>

                    <h3>2. How We Use Your Information</h3>
                    <p>Cursus euismod quis viverra nibh cras. Facilisi nullam vehicula ipsum a. Vulputate odio ut enim blandit volutpat. We use the information we collect to provide, maintain, and improve our services, process transactions, and communicate with you.</p>

                    <ul>
                        <li><strong>Data Security:</strong> We implement appropriate technical and organizational measures to protect the security of your personal information against accidental loss or unauthorized access.</li>
                        <li><strong>Cookies:</strong> We use cookies and similar tracking technologies to track activity on our service and hold certain information to enhance your browsing experience.</li>
                        <li><strong>Third-Party Sharing:</strong> We do not sell, trade, or otherwise transfer your personally identifiable information to outside parties except to trusted third parties who assist us in operating our website.</li>
                    </ul>

                    <h3>3. Your Rights & Choices</h3>
                    <p>Eu facilisis sed odio morbi. Placerat in egestas erat imperdiet. You have the right to access, correct, or delete your personal information at any time by contacting our support team or updating your account settings.</p>

                    <h3>4. Contact Us</h3>
                    <p>If you have any questions about this Privacy Policy or our data practices, please feel free to reach out to our support team via our contact page.</p>
                </div>

            </div>
        </div>

    </div>
</div>

<!-- JavaScript for Tab Switching -->
<script>
function switchPolicy(evt, paneName) {
    let i, pane, btn;
    pane = document.getElementsByClassName("legal-content-pane");
    for (i = 0; i < pane.length; i++) {
        pane[i].classList.remove("active");
    }
    btn = document.getElementsByClassName("tj-legal-tab-btn");
    for (i = 0; i < btn.length; i++) {
        btn[i].classList.remove("active");
    }
    document.getElementById(paneName).classList.add("active");
    evt.currentTarget.classList.add("active");
}
</script>

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->