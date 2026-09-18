<!-- =========================================
     TJ APPARELS HEADER START
========================================= -->

<header
    class="tj-apparel-header w-100 <?php echo isset($headerClass) ? $headerClass : ''; ?>"
    id="siteHeader">

    <!-- Background Glow / Decoration -->
    <div class="tj-header-bg-glow tj-header-bg-glow-left"></div>
    <div class="tj-header-bg-glow tj-header-bg-glow-right"></div>

    <!-- =====================================
         DESKTOP / MAIN HEADER (NAVBAR)
    ===================================== -->
    <div class="tj-apparel-header-main" id="tjHeaderMain">

        <div class="container">

            <div class="tj-apparel-header-inner">

                <!-- ==========================
                     LOGO
                =========================== -->
                <div class="tj-apparel-brand">
                    <a href="./" class="tj-apparel-brand-link">
                        <img src="img/logo.png" class="tj-apparel-logo" alt="TJ Apparels">
                    </a>
                </div>

                <!-- ==========================
                     DESKTOP NAVIGATION
                =========================== -->
                <nav class="tj-apparel-navigation">
                    <ul class="tj-apparel-nav-list list-unstyled mb-0" id="tjNavList">
                        <li class="tj-apparel-nav-item">
                            <a href="./" class="tj-apparel-nav-link active">Home</a>
                        </li>
                        <li class="tj-apparel-nav-item">
                            <a href="shop" class="tj-apparel-nav-link">Shop</a>
                        </li>
                        <li class="tj-apparel-nav-item">
                            <a href="#" class="tj-apparel-nav-link">Featured</a>
                        </li>
                        <li class="tj-apparel-nav-item">
                            <a href="#" class="tj-apparel-nav-link">Design Apparel</a>
                        </li>
                        <li class="tj-apparel-nav-item">
                            <a href="about" class="tj-apparel-nav-link">About</a>
                        </li>
                        <li class="tj-apparel-nav-item">
                            <a href="#" class="tj-apparel-nav-link">Women</a>
                        </li>
                        <li class="tj-apparel-nav-item">
                            <a href="#" class="tj-apparel-nav-link">Men</a>
                        </li>
                        <li class="tj-apparel-nav-item">
                            <a href="#" class="tj-apparel-nav-link">Kids</a>
                        </li>
                        <!-- Dynamic GSAP Indicator Bar -->
                        <div class="tj-nav-indicator" id="tjNavIndicator"></div>
                    </ul>
                </nav>

                <!-- ==========================
                     HEADER ACTIONS
                =========================== -->
                <div class="tj-apparel-actions">
                    <!-- Search Trigger Icon -->
                    <a href="#" class="tj-header-action" id="tjSearchToggleBtn" aria-label="Search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>

                    <!-- Account -->
                    <a href="login" class="tj-header-action" aria-label="Account">
                        <i class="fa-regular fa-user"></i>
                    </a>

                    <!-- Wishlist -->
                    <a href="Wishlist" class="tj-header-action" aria-label="Wishlist">
                        <i class="fa-regular fa-heart"></i>
                    </a>

                    <!-- Cart -->
                    <a href="cart" class="tj-header-action tj-header-cart" aria-label="Cart">
                        <i class="fa-solid fa-bag-shopping"></i>
                        <span class="tj-cart-count">3</span>
                    </a>

                    <!-- Mobile Hamburger -->
                    <button type="button" class="tj-mobile-menu-btn" id="tjMobileMenuBtn" aria-label="Open menu">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>

            </div>

        </div>

    </div>


    <!-- =====================================
         ADVANCED SLIDE-DOWN SEARCH BAR WRAPPER
    ===================================== -->
    <div class="tj-advanced-search-bar" id="tjAdvancedSearchBar">
        <div class="container">
            <div class="tj-search-bar-inner">
                
                <!-- Search Icon Left -->
                <div class="tj-search-icon-prefix">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>

                <!-- Form -->
                <form action="shop" method="GET" class="tj-inline-search-form">
                    <input 
                        type="text" 
                        name="s" 
                        id="tjAdvancedSearchInput" 
                        placeholder="Search for hoodies, oversized tees, winter jackets..." 
                        autocomplete="off">
                </form>

                <!-- Quick Inline Tags inside Bar -->
                <div class="tj-search-quick-tags">
                    <span class="tj-quick-title">Trending:</span>
                    <a href="shop?s=hoodie">Hoodie</a>
                    <a href="shop?s=jacket">Jacket</a>
                    <a href="shop?s=denim">Denim</a>
                </div>

                <!-- Close / Back Button -->
                <button type="button" class="tj-search-close-trigger" id="tjSearchCloseBtn" aria-label="Close Search">
                    <i class="fa-solid fa-xmark"></i>
                    <span>Close</span>
                </button>

            </div>
        </div>
    </div>


    <!-- =====================================
         MOBILE SIDEBAR OVERLAY
    ===================================== -->
    <div class="tj-mobile-overlay" id="tjMobileOverlay"></div>


    <!-- =====================================
         MOBILE SIDEBAR
    ===================================== -->
    <aside class="tj-mobile-sidebar" id="tjMobileSidebar">
        <div class="tj-sidebar-header">
            <a href="./" class="tj-sidebar-logo">
                <img src="img/logo.png" alt="TJ Apparels">
                <span>TJ APPARELS</span>
            </a>
            <button type="button" class="tj-sidebar-close" id="tjSidebarClose" aria-label="Close menu">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        <div class="tj-sidebar-search">
            <div class="tj-sidebar-search-box">
                <input type="text" placeholder="Search products...">
                <button type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </div>

        <nav class="tj-sidebar-navigation">
            <ul class="list-unstyled mb-0">
                <li><a href="./" class="active"><span><i class="fa-solid fa-house"></i>Home</span><i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="shop"><span><i class="fa-solid fa-bag-shopping"></i>Shop</span><i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="#"><span><i class="fa-solid fa-star"></i>Featured</span><i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="#"><span><i class="fa-solid fa-shirt"></i>Design Apparel</span><i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="#"><span><i class="fa-regular fa-circle-user"></i>About</span><i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="#"><span><i class="fa-solid fa-person-dress"></i>Women</span><i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="#"><span><i class="fa-solid fa-person"></i>Men</span><i class="fa-solid fa-chevron-right"></i></a></li>
                <li><a href="#"><span><i class="fa-solid fa-child"></i>Kids</span><i class="fa-solid fa-chevron-right"></i></a></li>
            </ul>
        </nav>

        <div class="tj-sidebar-account-area">
            <a href="#"><i class="fa-regular fa-user"></i><span>My Account</span></a>
            <a href="#"><i class="fa-regular fa-heart"></i><span>Wishlist</span></a>
        </div>
    </aside>


    <!-- =====================================
         MOBILE BOTTOM APP BAR
    ===================================== -->
    <div class="tj-mobile-bottom-bar">
        <a href="./" class="tj-bottom-item active"><i class="fa-solid fa-house"></i><span>Home</span></a>
        <a href="shop" class="tj-bottom-item"><i class="fa-solid fa-bag-shopping"></i><span>Shop</span></a>
        <a href="#" class="tj-bottom-item"><i class="fa-regular fa-heart"></i><span>Wishlist</span></a>
        <a href="#" class="tj-bottom-item"><i class="fa-regular fa-user"></i><span>Account</span></a>
        <a href="#" class="tj-bottom-item tj-bottom-cart">
            <span class="tj-bottom-cart-icon"><i class="fa-solid fa-cart-shopping"></i><b>3</b></span>
            <span>Cart</span>
        </a>
    </div>

</header>

<!-- =========================================
     TJ APPARELS HEADER END
========================================= -->

<style>
/* =========================================
   TJ APPARELS HEADER MAIN PARENT
========================================= */
.tj-apparel-header {
    --tj-bg-main: #08081c;
    --tj-bg-secondary: #0b0b25;
    --tj-border: rgba(135, 120, 255, 0.16);
    --tj-text: #ffffff;
    --tj-muted: rgba(255, 255, 255, 0.52);
    --tj-purple: #7d35e8;
    --tj-blue: #334fff;
    --tj-pink: #e936a7;

    position: relative;
    width: 100%;
    z-index: 9999;
    background: #000;
    font-family: Arial, Helvetica, sans-serif;
    overflow: hidden;
}

/* =========================================
   MAIN HEADER (NAVBAR)
========================================= */
.tj-apparel-header-main {
    position: relative;
    width: 100%;
    height: 59px;
    display: flex;
    align-items: center;
    background: linear-gradient(
        90deg,
        #10102d 0%,
        #100d2c 40%,
        #0d102d 75%,
        #080b20 100%
    );
    border-top: 1px solid rgba(255, 255, 255, 0.025);
    border-bottom: 1px solid var(--tj-border);
    z-index: 5;
}

/* =========================================
   BACKGROUND GLOW
========================================= */
.tj-header-bg-glow {
    position: absolute;
    pointer-events: none;
    border-radius: 50%;
    filter: blur(45px);
    z-index: 0;
}

.tj-header-bg-glow-left {
    width: 180px;
    height: 100px;
    left: 26%;
    top: -70px;
    background: rgba(113, 34, 204, 0.25);
}

.tj-header-bg-glow-right {
    width: 220px;
    height: 100px;
    right: 5%;
    bottom: -80px;
    background: rgba(42, 73, 219, 0.18);
}

.tj-apparel-header-inner {
    position: relative;
    z-index: 2;
    min-height: 59px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

/* BRAND */
.tj-apparel-brand {
    flex-shrink: 0;
}

.tj-apparel-brand-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    text-decoration: none;
}

.tj-apparel-logo {
    width: 100%;
    height: 100%;
    object-fit: scale-down;
    display: block;
    filter: drop-shadow(0 0 4px rgba(113, 75, 255, 0.55));
}

/* DESKTOP NAVIGATION */
.tj-apparel-navigation {
    position: relative;
}

.tj-apparel-nav-list {
    display: flex;
    align-items: center;
    gap: 25px;
    position: relative;
}

.tj-apparel-nav-item {
    position: relative;
}

.tj-apparel-nav-link {
    position: relative;
    display: inline-flex;
    align-items: center;
    height: 59px;
    color: rgba(255, 255, 255, 0.52);
    font-size: 12px;
    font-weight: 400;
    text-decoration: none;
    white-space: nowrap;
    transition: color 0.3s ease;
}

.tj-apparel-nav-link:hover,
.tj-apparel-nav-link.active {
    color: #ffffff;
}

.tj-nav-indicator {
    position: absolute;
    bottom: 13px;
    left: 0;
    height: 2px;
    background: linear-gradient(90deg, var(--tj-purple), var(--tj-pink));
    box-shadow: 0 0 8px rgba(178, 62, 255, 0.6);
    pointer-events: none;
    z-index: 5;
    border-radius: 2px;
}

/* HEADER ACTIONS */
.tj-apparel-actions {
    display: flex;
    align-items: center;
    gap: 7px;
    flex-shrink: 0;
}

.tj-header-action {
    position: relative;
    width: 28px;
    height: 28px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: rgba(255, 255, 255, 0.58);
    border: 1px solid rgba(255, 255, 255, 0.10);
    background: rgba(255, 255, 255, 0.015);
    text-decoration: none;
    transition: all 0.3s ease;
}

.tj-header-action i {
    font-size: 10px;
}

.tj-header-action:hover {
    color: #ffffff;
    border-color: rgba(150, 92, 255, 0.5);
    background: rgba(128, 56, 255, 0.08);
    box-shadow: 0 0 10px rgba(108, 55, 255, 0.18);
}

/* CART BADGE */
.tj-header-cart {
    overflow: visible;
}

.tj-cart-count {
    position: absolute;
    top: -5px;
    right: -4px;
    min-width: 13px;
    height: 13px;
    padding: 0 3px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50px;
    background: linear-gradient(135deg, #ff3b9d, #d92eff);
    color: #ffffff;
    font-size: 7px;
    line-height: 1;
    box-shadow: 0 0 7px rgba(255, 48, 158, 0.45);
}

/* =========================================
   ADVANCED SLIDE-DOWN SEARCH BAR STYLES
========================================= */
.tj-advanced-search-bar {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 59px;
    background: linear-gradient(90deg, #100f28 0%, #0d0b24 100%);
    border-bottom: 1px solid rgba(135, 120, 255, 0.3);
    z-index: 6;
    display: flex;
    align-items: center;
    visibility: hidden;
    opacity: 0;
    transform: translateY(-100%);
}

.tj-search-bar-inner {
    display: flex;
    align-items: center;
    width: 100%;
    height: 100%;
    gap: 15px;
}

.tj-search-icon-prefix {
    color: var(--tj-purple);
    font-size: 14px;
    display: flex;
    align-items: center;
}

.tj-inline-search-form {
    flex-grow: 1;
    height: 100%;
    display: flex;
    align-items: center;
}

.tj-inline-search-form input {
    width: 100%;
    background: transparent;
    border: none;
    outline: none;
    color: #ffffff;
    font-size: 14px;
    font-weight: 400;
}

.tj-inline-search-form input::placeholder {
    color: rgba(255, 255, 255, 0.35);
}

.tj-search-quick-tags {
    display: flex;
    align-items: center;
    gap: 8px;
    flex-shrink: 0;
}

.tj-quick-title {
    font-size: 11px;
    color: rgba(255, 255, 255, 0.4);
    text-transform: uppercase;
    letter-spacing: 1px;
}

.tj-search-quick-tags a {
    padding: 4px 12px;
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 15px;
    color: rgba(255, 255, 255, 0.75);
    font-size: 11px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.tj-search-quick-tags a:hover {
    background: rgba(125, 53, 232, 0.2);
    border-color: var(--tj-purple);
    color: #ffffff;
}

.tj-search-close-trigger {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    color: #ffffff;
    padding: 6px 14px;
    border-radius: 20px;
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 11px;
    cursor: pointer;
    transition: all 0.3s ease;
    flex-shrink: 0;
}

.tj-search-close-trigger:hover {
    background: rgba(233, 54, 167, 0.2);
    border-color: var(--tj-pink);
}

/* MOBILE MENU BUTTON & SIDEBAR */
.tj-mobile-menu-btn {
    display: none;
    width: 34px;
    height: 34px;
    border: 1px solid rgba(255, 255, 255, 0.12);
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.025);
    color: #ffffff;
    align-items: center;
    justify-content: center;
    cursor: pointer;
}

.tj-mobile-overlay {
    position: fixed;
    inset: 0;
    z-index: 99998;
    background: rgba(0, 0, 0, 0.68);
    backdrop-filter: blur(3px);
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.35s ease, visibility 0.35s ease;
}

.tj-mobile-overlay.active {
    opacity: 1;
    visibility: visible;
}

.tj-mobile-sidebar {
    position: fixed;
    top: 0;
    right: 0;
    width: min(340px, 88vw);
    height: 100vh;
    z-index: 99999;
    display: flex;
    flex-direction: column;
    background: linear-gradient(180deg, #0c0b25 0%, #08091b 100%);
    border-left: 1px solid rgba(134, 87, 255, 0.20);
    transform: translateX(105%);
    transition: transform 0.4s cubic-bezier(0.77, 0, 0.18, 1);
    overflow-y: auto;
}

.tj-mobile-sidebar.active {
    transform: translateX(0);
}

.tj-sidebar-header {
    min-height: 70px;
    padding: 0 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-bottom: 1px solid rgba(255, 255, 255, 0.07);
}

.tj-sidebar-logo {
    display: flex;
    align-items: center;
    gap: 9px;
    text-decoration: none;
}

.tj-sidebar-logo img {
    width: 34px;
    height: 34px;
    object-fit: contain;
}

.tj-sidebar-logo span {
    color: #ffffff;
    font-size: 10px;
    letter-spacing: 2.5px;
}

.tj-sidebar-close {
    width: 34px;
    height: 34px;
    border-radius: 50%;
    border: 1px solid rgba(255, 255, 255, 0.10);
    color: rgba(255, 255, 255, 0.7);
    background: rgba(255, 255, 255, 0.025);
    cursor: pointer;
}

.tj-sidebar-search {
    padding: 20px;
}

.tj-sidebar-search-box {
    height: 42px;
    display: flex;
    align-items: center;
    border-radius: 5px;
    border: 1px solid rgba(255, 255, 255, 0.09);
    background: rgba(255, 255, 255, 0.025);
    overflow: hidden;
}

.tj-sidebar-search-box input {
    width: 100%;
    height: 100%;
    padding: 0 14px;
    border: 0;
    outline: 0;
    background: transparent;
    color: #ffffff;
    font-size: 11px;
}

.tj-sidebar-search-box button {
    width: 45px;
    height: 100%;
    border: 0;
    color: rgba(255, 255, 255, 0.6);
    background: transparent;
    cursor: pointer;
}

.tj-sidebar-navigation {
    padding: 0 20px;
}

.tj-sidebar-navigation li {
    border-bottom: 1px solid rgba(255, 255, 255, 0.055);
}

.tj-sidebar-navigation li a {
    min-height: 54px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    color: rgba(255, 255, 255, 0.60);
    text-decoration: none;
    font-size: 12px;
}

.tj-sidebar-navigation li a span {
    display: flex;
    align-items: center;
    gap: 13px;
}

.tj-sidebar-navigation li a span i {
    color: rgba(145, 92, 255, 0.75);
}

.tj-sidebar-account-area {
    margin-top: auto;
    padding: 20px;
    display: flex;
    flex-direction: column;
    gap: 10px;
    border-top: 1px solid rgba(255, 255, 255, 0.06);
}

.tj-sidebar-account-area a {
    min-height: 45px;
    padding: 0 14px;
    display: flex;
    align-items: center;
    gap: 12px;
    border-radius: 5px;
    color: rgba(255, 255, 255, 0.60);
    background: rgba(255, 255, 255, 0.025);
    border: 1px solid rgba(255, 255, 255, 0.06);
    text-decoration: none;
    font-size: 11px;
}

.tj-mobile-bottom-bar {
    display: none;
}

@media (max-width: 991.98px) {
    .tj-apparel-header-main { height: 64px; }
    .tj-apparel-advanced-search-bar { height: 64px; }
    .tj-apparel-navigation { display: none; }
    .tj-mobile-menu-btn { display: flex; }
    .tj-search-quick-tags { display: none; } /* Hide quick tags on small screens */

    .tj-mobile-bottom-bar {
        position: fixed;
        left: 0; right: 0; bottom: 0;
        height: 64px;
        z-index: 9990;
        display: flex;
        align-items: center;
        justify-content: space-around;
        padding: 5px 8px env(safe-area-inset-bottom);
        background: rgba(8, 8, 27, 0.96);
        border-top: 1px solid rgba(130, 83, 255, 0.18);
        backdrop-filter: blur(15px);
    }

    .tj-bottom-item {
        position: relative;
        min-width: 55px; height: 53px;
        display: flex; flex-direction: column;
        align-items: center; justify-content: center;
        gap: 4px; color: rgba(255, 255, 255, 0.45);
        text-decoration: none; font-size: 8px;
    }
    body { padding-bottom: 64px; }
}
</style>


