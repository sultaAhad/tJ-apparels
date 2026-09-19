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
                            <a href="blog" class="tj-apparel-nav-link">Featured</a>
                        </li>
                        <!-- <li class="tj-apparel-nav-item">
                            <a href="shop" class="tj-apparel-nav-link">Design Apparel</a>
                        </li> -->
                        <li class="tj-apparel-nav-item">
                            <a href="about" class="tj-apparel-nav-link">About</a>
                        </li>
                        <li class="tj-apparel-nav-item">
                            <a href="shop" class="tj-apparel-nav-link">Women</a>
                        </li>
                        <li class="tj-apparel-nav-item">
                            <a href="shop" class="tj-apparel-nav-link">Men</a>
                        </li>
                        <li class="tj-apparel-nav-item">
                            <a href="shop" class="tj-apparel-nav-link">Kids</a>
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



