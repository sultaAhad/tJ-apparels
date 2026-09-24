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


</style>

<!-- Main Wrapper -->
<div class="tj-legal-wrapper py-2">
    <div class="container py-3">

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="tj-legal-container legal-content-pane">
                    <h3>1. Introduction</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Purus gravida quis blandit turpis cursus in hac habitasse. Elit
                        ut aliquam purus sit amet luctus venenatis lectus. Egestas dui id ornare.</p>

                    <h3>2. Guidelines for Using Our Services</h3>
                    <p>Cursus euismod quis viverra nibh cras. Facilisi nullam vehicula ipsum a. Vulputate odio ut enim
                        blandit volutpat maecenas volutpat blandit. Blandit volutpat maecenas volutpat blandit aliquam
                        etiam erat velit scelerisque.</p>

                    <ul>
                        <li><strong>Consent:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Purus gravida quis blandit
                            turpis cursus in hac.</li>
                        <li><strong>User Accounts:</strong> Elit ut aliquam purus sit amet luctus venenatis lectus.
                            Egestas dui id ornare. Cursus euismod quis viverra nibh cras facilisi nullam.</li>
                        <li><strong>Intellectual Property:</strong> Vulputate odio ut enim blandit volutpat maecenas
                            volutpat blandit aliquam etiam erat velit scelerisque libero volutpat sed cras ornare arcu.
                        </li>
                    </ul>

                    <h3>3. Limitation of Liability</h3>
                    <p>Eu facilisis sed odio morbi. Placerat in egestas erat imperdiet. Mattis aliquam faucibus purus in
                        massa tempor. Laoreet suspendisse interdum consectetur libero id faucibus nisl. Porta nibh
                        venenatis cras sed felis.</p>

                    <h3>4. Changes to Terms</h3>
                    <p>Risus at ultrices mi tempus imperdiet nulla. Semper viverra nam libero justo laoreet sit. In
                        metus vulputate eu scelerisque felis imperdiet proin fermentum leo. Phasellus egestas tellus
                        rutrum tellus.</p>
                </div>
            </div>
        </div>

    </div>
</div>



<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->