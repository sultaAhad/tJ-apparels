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
         DESKTOP / MAIN HEADER
    ====================================== -->
    <div class="tj-apparel-header-main">

        <div class="container">

            <div class="tj-apparel-header-inner">

                <!-- ==========================
                     LOGO
                =========================== -->
                <div class="tj-apparel-brand">

                    <a href="./" class="tj-apparel-brand-link">

                        <img
                            src="img/logo.png"
                            class="tj-apparel-logo"
                            alt="TJ Apparels">

                        <span class="tj-apparel-brand-name">
                            TJ APPARELS
                        </span>

                    </a>

                </div>


                <!-- ==========================
                     DESKTOP NAVIGATION
                =========================== -->
                <nav class="tj-apparel-navigation">

                    <ul class="tj-apparel-nav-list list-unstyled mb-0">

                        <li class="tj-apparel-nav-item">
                            <a href="./" class="tj-apparel-nav-link active">
                                Home
                            </a>
                        </li>

                        <li class="tj-apparel-nav-item">
                            <a href="shop" class="tj-apparel-nav-link">
                                Shop
                            </a>
                        </li>

                        <li class="tj-apparel-nav-item">
                            <a href="#" class="tj-apparel-nav-link">
                                Featured
                            </a>
                        </li>

                        <li class="tj-apparel-nav-item">
                            <a href="#" class="tj-apparel-nav-link">
                                Design Apparel
                            </a>
                        </li>

                        <li class="tj-apparel-nav-item">
                            <a href="#" class="tj-apparel-nav-link">
                                About
                            </a>
                        </li>

                        <li class="tj-apparel-nav-item">
                            <a href="#" class="tj-apparel-nav-link">
                                Women
                            </a>
                        </li>

                        <li class="tj-apparel-nav-item">
                            <a href="#" class="tj-apparel-nav-link">
                                Men
                            </a>
                        </li>

                        <li class="tj-apparel-nav-item">
                            <a href="#" class="tj-apparel-nav-link">
                                Kids
                            </a>
                        </li>

                    </ul>

                </nav>


                <!-- ==========================
                     HEADER ACTIONS
                =========================== -->
                <div class="tj-apparel-actions">

                    <!-- Search -->
                    <a
                        href="#"
                        class="tj-header-action"
                        aria-label="Search">

                        <i class="fa-solid fa-magnifying-glass"></i>

                    </a>


                    <!-- Account -->
                    <a
                        href="#"
                        class="tj-header-action"
                        aria-label="Account">

                        <i class="fa-regular fa-user"></i>

                    </a>


                    <!-- Wishlist -->
                    <a
                        href="#"
                        class="tj-header-action"
                        aria-label="Wishlist">

                        <i class="fa-regular fa-heart"></i>

                    </a>


                    <!-- Cart -->
                    <a
                        href="#"
                        class="tj-header-action tj-header-cart"
                        aria-label="Cart">

                        <i class="fa-solid fa-bag-shopping"></i>

                        <span class="tj-cart-count">
                            3
                        </span>

                    </a>


                    <!-- Mobile Hamburger -->
                    <button
                        type="button"
                        class="tj-mobile-menu-btn"
                        id="tjMobileMenuBtn"
                        aria-label="Open menu">

                        <i class="fa-solid fa-bars"></i>

                    </button>

                </div>

            </div>

        </div>

    </div>


    <!-- =====================================
         MOBILE SIDEBAR OVERLAY
    ====================================== -->
    <div
        class="tj-mobile-overlay"
        id="tjMobileOverlay">
    </div>


    <!-- =====================================
         MOBILE SIDEBAR
    ====================================== -->
    <aside
        class="tj-mobile-sidebar"
        id="tjMobileSidebar">

        <!-- Sidebar Header -->
        <div class="tj-sidebar-header">

            <a href="./" class="tj-sidebar-logo">

                <img
                    src="img/logo.png"
                    alt="TJ Apparels">

                <span>
                    TJ APPARELS
                </span>

            </a>


            <button
                type="button"
                class="tj-sidebar-close"
                id="tjSidebarClose"
                aria-label="Close menu">

                <i class="fa-solid fa-xmark"></i>

            </button>

        </div>


        <!-- Sidebar Search -->
        <div class="tj-sidebar-search">

            <div class="tj-sidebar-search-box">

                <input
                    type="text"
                    placeholder="Search products...">

                <button type="button">

                    <i class="fa-solid fa-magnifying-glass"></i>

                </button>

            </div>

        </div>


        <!-- Sidebar Navigation -->
        <nav class="tj-sidebar-navigation">

            <ul class="list-unstyled mb-0">

                <li>
                    <a href="./" class="active">

                        <span>
                            <i class="fa-solid fa-house"></i>
                            Home
                        </span>

                        <i class="fa-solid fa-chevron-right"></i>

                    </a>
                </li>


                <li>
                    <a href="shop">

                        <span>
                            <i class="fa-solid fa-bag-shopping"></i>
                            Shop
                        </span>

                        <i class="fa-solid fa-chevron-right"></i>

                    </a>
                </li>


                <li>
                    <a href="#">

                        <span>
                            <i class="fa-solid fa-star"></i>
                            Featured
                        </span>

                        <i class="fa-solid fa-chevron-right"></i>

                    </a>
                </li>


                <li>
                    <a href="#">

                        <span>
                            <i class="fa-solid fa-shirt"></i>
                            Design Apparel
                        </span>

                        <i class="fa-solid fa-chevron-right"></i>

                    </a>
                </li>


                <li>
                    <a href="#">

                        <span>
                            <i class="fa-regular fa-circle-user"></i>
                            About
                        </span>

                        <i class="fa-solid fa-chevron-right"></i>

                    </a>
                </li>


                <li>
                    <a href="#">

                        <span>
                            <i class="fa-solid fa-person-dress"></i>
                            Women
                        </span>

                        <i class="fa-solid fa-chevron-right"></i>

                    </a>
                </li>


                <li>
                    <a href="#">

                        <span>
                            <i class="fa-solid fa-person"></i>
                            Men
                        </span>

                        <i class="fa-solid fa-chevron-right"></i>

                    </a>
                </li>


                <li>
                    <a href="#">

                        <span>
                            <i class="fa-solid fa-child"></i>
                            Kids
                        </span>

                        <i class="fa-solid fa-chevron-right"></i>

                    </a>
                </li>

            </ul>

        </nav>


        <!-- Sidebar Bottom -->
        <div class="tj-sidebar-account-area">

            <a href="#">

                <i class="fa-regular fa-user"></i>

                <span>
                    My Account
                </span>

            </a>


            <a href="#">

                <i class="fa-regular fa-heart"></i>

                <span>
                    Wishlist
                </span>

            </a>

        </div>

    </aside>


    <!-- =====================================
         MOBILE BOTTOM APP BAR
    ====================================== -->
    <div class="tj-mobile-bottom-bar">

        <a href="./" class="tj-bottom-item active">

            <i class="fa-solid fa-house"></i>

            <span>
                Home
            </span>

        </a>


        <a href="shop" class="tj-bottom-item">

            <i class="fa-solid fa-bag-shopping"></i>

            <span>
                Shop
            </span>

        </a>


        <a href="#" class="tj-bottom-item">

            <i class="fa-regular fa-heart"></i>

            <span>
                Wishlist
            </span>

        </a>


        <a href="#" class="tj-bottom-item">

            <i class="fa-regular fa-user"></i>

            <span>
                Account
            </span>

        </a>


        <a href="#" class="tj-bottom-item tj-bottom-cart">

            <span class="tj-bottom-cart-icon">

                <i class="fa-solid fa-cart-shopping"></i>

                <b>
                    3
                </b>

            </span>

            <span>
                Cart
            </span>

        </a>

    </div>

</header>

<!-- =========================================
     TJ APPARELS HEADER END
========================================= -->
<style>
    /* =========================================
   TJ APPARELS HEADER
   MAIN PARENT
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

    font-family:
        Arial,
        Helvetica,
        sans-serif;
}


/* =========================================
   MAIN HEADER
========================================= */

.tj-apparel-header-main {
    position: relative;

    width: 100%;
    height: 59px;

    display: flex;
    align-items: center;

    overflow: hidden;

    background:
        linear-gradient(
            90deg,
            #10102d 0%,
            #100d2c 40%,
            #0d102d 75%,
            #080b20 100%
        );

    border-top: 1px solid rgba(255, 255, 255, 0.025);
    border-bottom: 1px solid var(--tj-border);
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


/* Left Purple */
.tj-header-bg-glow-left {
    width: 180px;
    height: 100px;

    left: 26%;
    top: -70px;

    background: rgba(113, 34, 204, 0.25);
}


/* Right Blue */
.tj-header-bg-glow-right {
    width: 220px;
    height: 100px;

    right: 5%;
    bottom: -80px;

    background: rgba(42, 73, 219, 0.18);
}


/* =========================================
   HEADER INNER
========================================= */

.tj-apparel-header-inner {
    position: relative;

    z-index: 2;

    min-height: 59px;

    display: flex;
    align-items: center;

    justify-content: space-between;
}


/* =========================================
   BRAND
========================================= */

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
    width: 31px;
    height: 31px;

    object-fit: contain;

    display: block;

    filter:
        drop-shadow(0 0 4px rgba(113, 75, 255, 0.55))
        drop-shadow(0 0 8px rgba(98, 51, 255, 0.18));
}


.tj-apparel-brand-name {
    color: #ffffff;

    font-size: 11px;

    font-weight: 500;

    letter-spacing: 2.7px;

    white-space: nowrap;
}


/* =========================================
   DESKTOP NAVIGATION
========================================= */

.tj-apparel-navigation {
    margin-left: auto;
    margin-right: 45px;
}


.tj-apparel-nav-list {
    display: flex;

    align-items: center;

    gap: 25px;
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

    font-size: 10px;

    font-weight: 400;

    text-decoration: none;

    white-space: nowrap;

    transition:
        color 0.3s ease;
}


.tj-apparel-nav-link:hover {
    color: #ffffff;
}


/* Active underline */
.tj-apparel-nav-link::after {
    content: "";

    position: absolute;

    left: 50%;
    bottom: 0;

    width: 0;
    height: 1px;

    transform: translateX(-50%);

    background:
        linear-gradient(
            90deg,
            var(--tj-purple),
            var(--tj-pink)
        );

    box-shadow:
        0 0 8px rgba(178, 62, 255, 0.5);

    transition:
        width 0.3s ease;
}


.tj-apparel-nav-link:hover::after,
.tj-apparel-nav-link.active::after {
    width: 100%;
}


.tj-apparel-nav-link.active {
    color: #ffffff;
}


/* =========================================
   HEADER ACTIONS
========================================= */

.tj-apparel-actions {
    display: flex;

    align-items: center;

    gap: 7px;

    flex-shrink: 0;
}


/* =========================================
   ACTION BUTTON
========================================= */

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

    background:
        rgba(255, 255, 255, 0.015);

    text-decoration: none;

    transition:
        color 0.3s ease,
        border-color 0.3s ease,
        background 0.3s ease,
        box-shadow 0.3s ease;
}


.tj-header-action i {
    font-size: 10px;
}


.tj-header-action:hover {
    color: #ffffff;

    border-color: rgba(150, 92, 255, 0.5);

    background:
        rgba(128, 56, 255, 0.08);

    box-shadow:
        0 0 10px rgba(108, 55, 255, 0.18);
}


/* =========================================
   CART BADGE
========================================= */

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

    background:
        linear-gradient(
            135deg,
            #ff3b9d,
            #d92eff
        );

    color: #ffffff;

    font-size: 7px;

    line-height: 1;

    box-shadow:
        0 0 7px rgba(255, 48, 158, 0.45);
}


/* =========================================
   MOBILE MENU BUTTON
========================================= */

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

    transition:
        border-color 0.3s ease,
        background 0.3s ease;
}


.tj-mobile-menu-btn i {
    font-size: 13px;
}


.tj-mobile-menu-btn:hover {
    border-color: rgba(153, 81, 255, 0.6);

    background:
        rgba(121, 54, 255, 0.10);
}


/* =========================================
   MOBILE SIDEBAR OVERLAY
========================================= */

.tj-mobile-overlay {
    position: fixed;

    inset: 0;

    z-index: 99998;

    background:
        rgba(0, 0, 0, 0.68);

    backdrop-filter: blur(3px);

    opacity: 0;

    visibility: hidden;

    transition:
        opacity 0.35s ease,
        visibility 0.35s ease;
}


.tj-mobile-overlay.active {
    opacity: 1;

    visibility: visible;
}


/* =========================================
   MOBILE SIDEBAR
========================================= */

.tj-mobile-sidebar {
    position: fixed;

    top: 0;
    right: 0;

    width: min(340px, 88vw);
    height: 100vh;

    z-index: 99999;

    display: flex;

    flex-direction: column;

    background:
        radial-gradient(
            circle at 100% 0%,
            rgba(113, 44, 207, 0.16),
            transparent 35%
        ),
        linear-gradient(
            180deg,
            #0c0b25 0%,
            #08091b 100%
        );

    border-left: 1px solid rgba(134, 87, 255, 0.20);

    box-shadow:
        -15px 0 50px rgba(0, 0, 0, 0.55);

    transform: translateX(105%);

    transition:
        transform 0.4s cubic-bezier(0.77, 0, 0.18, 1);

    overflow-y: auto;
}


.tj-mobile-sidebar.active {
    transform: translateX(0);
}


/* =========================================
   SIDEBAR HEADER
========================================= */

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

    transition: 0.3s ease;
}


.tj-sidebar-close:hover {
    color: #ffffff;

    border-color: rgba(228, 45, 163, 0.55);

    background: rgba(228, 45, 163, 0.08);
}


/* =========================================
   SIDEBAR SEARCH
========================================= */

.tj-sidebar-search {
    padding: 20px;
}


.tj-sidebar-search-box {
    height: 42px;

    display: flex;

    align-items: center;

    border-radius: 5px;

    border: 1px solid rgba(255, 255, 255, 0.09);

    background:
        rgba(255, 255, 255, 0.025);

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


.tj-sidebar-search-box input::placeholder {
    color: rgba(255, 255, 255, 0.35);
}


.tj-sidebar-search-box button {
    width: 45px;
    height: 100%;

    border: 0;

    color: rgba(255, 255, 255, 0.6);

    background: transparent;

    cursor: pointer;
}


/* =========================================
   SIDEBAR NAVIGATION
========================================= */

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

    transition:
        color 0.3s ease,
        padding-left 0.3s ease;
}


.tj-sidebar-navigation li a span {
    display: flex;

    align-items: center;

    gap: 13px;
}


.tj-sidebar-navigation li a span i {
    width: 18px;

    text-align: center;

    color: rgba(145, 92, 255, 0.75);

    font-size: 12px;
}


.tj-sidebar-navigation li a > i {
    font-size: 8px;

    opacity: 0.35;

    transition:
        transform 0.3s ease;
}


.tj-sidebar-navigation li a:hover,
.tj-sidebar-navigation li a.active {
    color: #ffffff;

    padding-left: 5px;
}


.tj-sidebar-navigation li a:hover > i {
    transform: translateX(3px);

    opacity: 0.8;
}


/* =========================================
   SIDEBAR ACCOUNT
========================================= */

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

    background:
        rgba(255, 255, 255, 0.025);

    border: 1px solid rgba(255, 255, 255, 0.06);

    text-decoration: none;

    font-size: 11px;

    transition: 0.3s ease;
}


.tj-sidebar-account-area a:hover {
    color: #ffffff;

    border-color: rgba(125, 53, 232, 0.4);

    background:
        rgba(125, 53, 232, 0.08);
}


/* =========================================
   MOBILE BOTTOM APP BAR
========================================= */

.tj-mobile-bottom-bar {
    display: none;
}


/* =========================================
   TABLET / MOBILE
========================================= */

@media (max-width: 991.98px) {

    .tj-apparel-header-main {
        height: 64px;
    }


    .tj-apparel-header-inner {
        min-height: 64px;
    }


    /* Hide desktop navigation */
    .tj-apparel-navigation {
        display: none;
    }


    /* Hide desktop action items except search */
    .tj-apparel-actions {
        gap: 7px;
    }


    .tj-apparel-actions
    .tj-header-action:not(:first-child) {
        display: none;
    }


    /* Show hamburger */
    .tj-mobile-menu-btn {
        display: flex;
    }


    .tj-apparel-brand-name {
        font-size: 10px;

        letter-spacing: 2.2px;
    }


    .tj-apparel-logo {
        width: 33px;
        height: 33px;
    }


    /* Bottom App Bar */
    .tj-mobile-bottom-bar {
        position: fixed;

        left: 0;
        right: 0;
        bottom: 0;

        height: 64px;

        z-index: 9990;

        display: flex;

        align-items: center;

        justify-content: space-around;

        padding:
            5px 8px
            env(safe-area-inset-bottom);

        background:
            rgba(8, 8, 27, 0.96);

        border-top:
            1px solid rgba(130, 83, 255, 0.18);

        box-shadow:
            0 -8px 30px rgba(0, 0, 0, 0.30);

        backdrop-filter: blur(15px);
    }


    .tj-bottom-item {
        position: relative;

        min-width: 55px;

        height: 53px;

        display: flex;

        flex-direction: column;

        align-items: center;

        justify-content: center;

        gap: 4px;

        color: rgba(255, 255, 255, 0.45);

        text-decoration: none;

        font-size: 8px;

        transition: 0.3s ease;
    }


    .tj-bottom-item i {
        font-size: 15px;

        transition:
            transform 0.3s ease,
            color 0.3s ease;
    }


    .tj-bottom-item span:last-child {
        font-size: 8px;

        letter-spacing: 0.2px;
    }


    .tj-bottom-item:hover,
    .tj-bottom-item.active {
        color: #ffffff;
    }


    .tj-bottom-item.active i {
        color: #a65cff;

        filter:
            drop-shadow(
                0 0 5px
                rgba(166, 92, 255, 0.6)
            );

        transform: translateY(-1px);
    }


    /* Active top glow */
    .tj-bottom-item.active::before {
        content: "";

        position: absolute;

        top: -6px;

        width: 22px;
        height: 2px;

        border-radius: 10px;

        background:
            linear-gradient(
                90deg,
                #873bff,
                #e936a7
            );

        box-shadow:
            0 0 8px rgba(176, 60, 255, 0.55);
    }


    /* Bottom Cart */
    .tj-bottom-cart-icon {
        position: relative;

        display: flex;

        align-items: center;
        justify-content: center;
    }


    .tj-bottom-cart-icon b {
        position: absolute;

        top: -8px;
        right: -10px;

        min-width: 14px;
        height: 14px;

        padding: 0 3px;

        display: flex;

        align-items: center;
        justify-content: center;

        border-radius: 20px;

        background:
            linear-gradient(
                135deg,
                #ff3d9f,
                #d52cff
            );

        color: #ffffff;

        font-size: 7px;

        font-weight: 500;

        box-shadow:
            0 0 7px rgba(255, 50, 155, 0.45);
    }


    /* Prevent page content hiding behind bottom nav */
    body {
        padding-bottom: 64px;
    }

}


/* =========================================
   SMALL MOBILE
========================================= */

@media (max-width: 575.98px) {

    .tj-apparel-header-main {
        height: 60px;
    }


    .tj-apparel-header-inner {
        min-height: 60px;
    }


    .tj-apparel-brand-link {
        gap: 6px;
    }


    .tj-apparel-logo {
        width: 31px;
        height: 31px;
    }


    .tj-apparel-brand-name {
        font-size: 9px;

        letter-spacing: 2px;
    }


    .tj-header-action {
        width: 31px;
        height: 31px;
    }


    .tj-header-action i {
        font-size: 10px;
    }


    .tj-mobile-menu-btn {
        width: 31px;
        height: 31px;
    }


    .tj-mobile-bottom-bar {
        height: 62px;
    }


    .tj-bottom-item {
        min-width: 48px;

        height: 52px;
    }


    .tj-bottom-item i {
        font-size: 14px;
    }


    body {
        padding-bottom: 62px;
    }

}


/* =========================================
   VERY SMALL DEVICES
========================================= */

@media (max-width: 360px) {

    .tj-apparel-brand-name {
        display: none;
    }


    .tj-apparel-actions {
        gap: 5px;
    }


    .tj-mobile-bottom-bar {
        padding-left: 3px;
        padding-right: 3px;
    }


    .tj-bottom-item {
        min-width: 43px;
    }

}
</style>
<script>
document.addEventListener("DOMContentLoaded", function () {

    const menuBtn = document.getElementById("tjMobileMenuBtn");
    const sidebar = document.getElementById("tjMobileSidebar");
    const overlay = document.getElementById("tjMobileOverlay");
    const closeBtn = document.getElementById("tjSidebarClose");

    function openMobileMenu() {

        sidebar.classList.add("active");
        overlay.classList.add("active");

        document.body.style.overflow = "hidden";
    }


    function closeMobileMenu() {

        sidebar.classList.remove("active");
        overlay.classList.remove("active");

        document.body.style.overflow = "";
    }


    if (menuBtn) {

        menuBtn.addEventListener("click", function () {
            openMobileMenu();
        });

    }


    if (closeBtn) {

        closeBtn.addEventListener("click", function () {
            closeMobileMenu();
        });

    }


    if (overlay) {

        overlay.addEventListener("click", function () {
            closeMobileMenu();
        });

    }


    /* ESC key */
    document.addEventListener("keydown", function (event) {

        if (event.key === "Escape") {
            closeMobileMenu();
        }

    });


    /* Close sidebar after clicking navigation */
    const sidebarLinks = document.querySelectorAll(
        ".tj-sidebar-navigation a"
    );

    sidebarLinks.forEach(function (link) {

        link.addEventListener("click", function () {

            closeMobileMenu();

        });

    });

});
</script>