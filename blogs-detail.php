<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- banner Include Here  -->
<?php 
$subtitle = "Editorial";
$title = "Fashion Insights";
$desc = "Stay updated with the latest trends, styling tips, and fashion inspiration from our expert curators.";
$currentPage = "Blog Detail";

include 'inc/inner-banner.php'; 
?>
<!-- banner Include Here  -->

<style>
    :root {
        --tj-border: rgba(135, 120, 255, 0.16);
        --tj-purple: #7d35e8;
        --tj-pink: #e936a7;
    }

    .tj-blog-detail-section {
        background-color: #0b0b1a;
        position: relative;
        color: rgba(255, 255, 255, 0.7);
    }

    .tj-blog-detail-wrap {
        max-width: 800px;
        margin: 0 auto;
    }

    /* Meta & Header Info */
    .tj-blog-sub-category {
        color: var(--tj-pink);
        font-size: 11.5px;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 12px;
        display: block;
    }

    .tj-blog-main-title {
        color: #fff;
        font-size: 36px;
        font-weight: 800;
        line-height: 1.25;
        margin-bottom: 15px;
        text-transform: uppercase;
    }

    .tj-blog-lead-desc {
        color: rgba(255, 255, 255, 0.85);
        font-size: 15px;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .tj-blog-published-date {
        color: rgba(255, 255, 255, 0.4);
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-bottom: 30px;
        display: block;
    }

    /* Images Styling */
    .tj-blog-featured-img {
        width: 100%;
        border-radius: 14px;
        overflow: hidden;
        margin-bottom: 40px;
        border: 1px solid var(--tj-border);
    }

    .tj-blog-featured-img img {
        width: 100%;
        height: auto;
        display: block;
    }

    /* Content Typography */
    .tj-blog-content p {
        font-size: 13.5px;
        line-height: 1.8;
        color: rgba(255, 255, 255, 0.6);
        margin-bottom: 25px;
    }

    .tj-blog-content h3 {
        color: #fff;
        font-size: 18px;
        font-weight: 800;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-top: 40px;
        margin-bottom: 15px;
    }

    /* Blockquote */
    .tj-blog-quote {
        border-left: 3px solid var(--tj-pink);
        padding-left: 20px;
        margin: 35px 0;
        font-style: italic;
        color: #fff;
        font-size: 15px;
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    /* Bullet Points */
    .tj-blog-bullet-list {
        list-style: none;
        padding-left: 0;
        margin-bottom: 30px;
    }

    .tj-blog-bullet-list li {
        position: relative;
        padding-left: 18px;
        font-size: 13.5px;
        color: rgba(255, 255, 255, 0.6);
        margin-bottom: 10px;
    }

    .tj-blog-bullet-list li::before {
        content: "";
        position: absolute;
        left: 0;
        top: 9px;
        width: 5px;
        height: 5px;
        background-color: var(--tj-pink);
        border-radius: 50%;
    }

    /* Share Section */
    .tj-blog-share-wrap {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-top: 50px;
        padding-top: 25px;
        border-top: 1px solid var(--tj-border);
    }

    .tj-blog-share-label {
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        color: rgba(255, 255, 255, 0.4);
        font-weight: 700;
    }

    .tj-share-icons {
        display: flex;
        gap: 10px;
    }

    .tj-share-icon-btn {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: linear-gradient(145deg, rgba(17, 17, 43, 0.8), rgba(10, 10, 26, 0.9));
        border: 1px solid var(--tj-border);
        display: flex;
        align-items: center;
        justify-content: center;
        color: rgba(255, 255, 255, 0.7);
        font-size: 12px;
        transition: 0.3s;
        text-decoration: none;
    }

    .tj-share-icon-btn:hover {
        background: linear-gradient(135deg, var(--tj-purple), var(--tj-pink));
        border-color: transparent;
        color: #fff;
    }
</style>

<!-- Body Content Start Here -->
<main class="tj-blog-detail-section py-5">
    <div class="container py-4">
        <div class="tj-blog-detail-wrap">
            
            <!-- Category & Title -->
            <span class="tj-blog-sub-category">Bike Culture</span>
            <h1 class="tj-blog-main-title">The Evolution of Motorcycle Heritage</h1>
            <p class="tj-blog-lead-desc">From post-war clubs to modern performance culture — how the motorcycle became a symbol of freedom, craft and brotherhood.</p>
            <span class="tj-blog-published-date">August 28, 2026 · 6 min read</span>

            <!-- Featured Image -->
            <div class="tj-blog-featured-img">
                <img src="assets/images/blog-detail-1.jpg" alt="Motorcycle Heritage T-Shirt Showcase">
            </div>

            <!-- Content Area -->
            <div class="tj-blog-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <h3>Where the Culture Started</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <!-- Blockquote -->
                <div class="tj-blog-quote">
                    “The bike was never the point. The road was the point. The bike just made it possible.”
                </div>

                <h3>Craft Became the Standard</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <h3>What to Look for Today</h3>
                
                <!-- Bullet Points -->
                <ul class="tj-blog-bullet-list">
                    <li>Full-grain hides with consistent grain and tight pores</li>
                    <li>CE-rated armour pockets at shoulders, elbows and back</li>
                    <li>Double or triple stitching on all impact seams</li>
                    <li>Hardware that still runs smooth after a wet season</li>
                </ul>

                <!-- Second Image -->
                <div class="tj-blog-featured-img my-4">
                    <img src="assets/images/blog-detail-2.jpg" alt="Basketball / Action Players">
                </div>
            </div>

            <!-- Share Section -->
            <div class="tj-blog-share-wrap">
                <span class="tj-blog-share-label">Share</span>
                <div class="tj-share-icons">
                    <a href="#" class="tj-share-icon-btn"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="tj-share-icon-btn"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="tj-share-icon-btn"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>

        </div>
    </div>
</main>
<!-- Body Content End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->