<!-- App Include Here -->
<?php $headerClass = 'header-relative';
$bodyClass = 'home-page';
include 'inc/app.php'; ?>

<!-- Body Content Start Here -->
<style>
    .ah-apparel-category-circle {
    overflow: hidden;
    border-radius: 50%;
}



.ah-apparel-category {
    will-change: transform, opacity;
}
</style>
<!-- =========================================
     APPAREL HERO BANNER START
========================================= -->
<section class="ah-apparel-banner">

    <!-- Background Glow Effects -->
    <div class="ah-apparel-glow ah-apparel-glow-left"></div>
    <div class="ah-apparel-glow ah-apparel-glow-right"></div>
    <div class="ah-apparel-glow ah-apparel-glow-center"></div>

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-12 text-center">

                <!-- Logo -->
                <div class="ah-apparel-logo-wrap">
                    <img 
                        src="img/banner.png" 
                        alt="Apparel Logo"
                        class="ah-apparel-logo img-fluid"
                    >
                </div>

                <!-- Heading -->
                <h1 class="ah-apparel-title">
                    APPARELS
                </h1>

                <!-- Description -->
                <p class="ah-apparel-description">
                    Fashion that fits every chapter of your life — crafted with intent,
                    worn with confidence.
                </p>

                <!-- Button -->
                <a href="#" class="ah-apparel-btn">
                    Shop Now
                </a>

                <!-- Category Images -->
                <div class="ah-apparel-categories">

                    <!-- Category 1 -->
                    <div class="ah-apparel-category">
                        <div class="ah-apparel-category-circle">
                            <img 
                                src="img/banner-card5.png"
                                alt="Category"
                            >
                        </div>
                    </div>

                    <!-- Category 2 -->
                    <div  class="ah-apparel-category">
                        <div class="ah-apparel-category-circle">
                            <img 
                                src="img/banner-card4.png"
                                alt="Category"
                            >
                        </div>
                    </div>

                    <!-- Category 3 -->
                    <div class="ah-apparel-category">
                        <div class="ah-apparel-category-circle">
                            <img 
                                src="img/banner-card3.png"
                                alt="Category"
                            >
                        </div>
                    </div>

                    <!-- Category 4 -->
                    <div class="ah-apparel-category">
                        <div class="ah-apparel-category-circle">
                            <img 
                                src="img/banner-card2.png"
                                alt="Category"
                            >
                        </div>
                    </div>

                    <!-- Category 5 -->
                    <div class="ah-apparel-category">
                        <div class="ah-apparel-category-circle">
                            <img 
                                src="img/banner-card5.png"
                                alt="Category"
                            >
                        </div>
                    </div>

                    <!-- Category 6 -->
                    <div class="ah-apparel-category">
                        <div class="ah-apparel-category-circle">
                            <img 
                                src="img/banner-card.png"
                                alt="Category"
                            >
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

</section>
<!-- =========================================
     APPAREL HERO BANNER END
========================================= -->

<!-- =========================================
     TJ FAMILY OF BRANDS SECTION START
========================================= -->
<section class="tj-brands-section py-5" id="tjBrandsSection">
    <div class="container py-lg-4">
        
        <!-- Section Header -->
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-6 tj-brand-header-anim">
                <span class="tj-section-subtitle d-block text-uppercase mb-2">The TJ Umbrella</span>
                <h2 class="tj-section-title fw-bold mb-3">Our Family of Brands</h2>
                <p class="tj-section-desc mb-0">
                    Discover the diverse portfolio of brands under the TJ umbrella, each crafted with passion and purpose.
                </p>
            </div>
        </div>

        <!-- Brands Cards Grid -->
        <div class="row g-4 justify-content-center">
            
            <!-- Card 1: TJ Corp. (Light Card) -->
            <div class="col-lg-5 tj-brand-card-anim">
                <div class="tj-brand-card tj-brand-light h-100 p-4 p-sm-5">
                    <div class="tj-brand-card-top d-flex align-items-center justify-content-between mb-4">
                        <div class="tj-brand-icon-box">
                            <img src="img/logo-brand.png" alt="TJ Corp" class="tj-brand-logo-img">
                        </div>
                        <span class="tj-brand-badge">Parent Company</span>
                    </div>
                    <div class="tj-brand-content">
                        <h3 class="tj-brand-title fw-bold mb-1">TJ Corp.</h3>
                        <span class="tj-brand-category d-block mb-3">Parent Company</span>
                        <p class="tj-brand-text mb-0">
                            TJ Corp. is the corporation and the parent company that oversees our diverse portfolio of brands. Founded on principles of innovation, quality, and customer satisfaction, we continue to expand our reach across multiple industries while maintaining our commitment to excellence.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 2: TJ Biker (Dark Card) -->
            <div class="col-lg-5 tj-brand-card-anim">
                <div class="tj-brand-card tj-brand-dark h-100 p-4 p-sm-5">
                    <div class="tj-brand-card-top d-flex align-items-center justify-content-between mb-4">
                        <div class="tj-brand-icon-box-dark">
                            <i class="fa-solid fa-motorcycle"></i>
                        </div>
                        <span class="tj-brand-badge-dark">Motorcycle Brand</span>
                    </div>
                    <div class="tj-brand-content">
                        <h3 class="tj-brand-title fw-bold mb-1">TJ Biker</h3>
                        <span class="tj-brand-category d-block mb-3">Motorcycle Brand</span>
                        <p class="tj-brand-text mb-0">
                            TJ Biker is a cruise motorcycles, gears and apparels brand dedicated to the freedom of the open road. We provide high-quality motorcycle gear, stylish riding apparel, and accessories that combine safety with style for every adventure on two wheels.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- =========================================
     TJ FAMILY OF BRANDS SECTION END
========================================= -->

<!-- =========================================
     TJ SHOP BY CATEGORY SECTION START
========================================= -->
<section class="tj-category-section " id="tjCategorySection">
    
    <!-- Background Ambient Glow Elements -->
    <div class="tj-cat-glow tj-cat-glow-1"></div>
    <div class="tj-cat-glow tj-cat-glow-2"></div>

    <div class="container py-lg-4 position-relative" style="z-index: 2;">
        
        <!-- Section Header with Center Glow -->
        <div class="row justify-content-center text-center mb-5 position-relative">
            <div class="tj-header-center-glow"></div>
            <div class="col-lg-6 tj-cat-header-anim position-relative" style="z-index: 2;">
                <span class="tj-section-subtitle d-block text-uppercase mb-2">United By Excellence</span>
                <h2 class="tj-section-title fw-bold mb-2">Shop by Category</h2>
                <p class="tj-section-desc mb-0">
                    Experience fashion like never before with our interactive collections
                </p>
            </div>
        </div>

        <!-- Categories Grid (3 Columns) -->
        <div class="row g-4 justify-content-center">
            
            <!-- Category Card 1: Women -->
            <div class="col-lg-4 col-md-6 tj-cat-card-anim">
                <a href="#" class="tj-cat-card d-block text-decoration-none h-100 p-4 p-xl-5">
                    <!-- Right Top Card Glow -->
                    <div class="tj-card-glow-rt first-color"></div>
                    
                    <div class="tj-cat-card-top d-flex align-items-center justify-content-between mb-5">
                        <div class="tj-cat-img-box first-color">
                            <img src="img/category2.png" alt="Women" class="tj-cat-image">
                        </div>
                    </div>
                    <div class="tj-cat-content">
                        <div class="d-flex align-items-end justify-content-between">
                            <div>
                                <h3 class="tj-cat-title fw-bold mb-1">Women</h3>
                                <span class="tj-cat-subtitle d-block">Elegant & Stylish</span>
                            </div>
                            <div class="tj-cat-arrow-icon">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Category Card 2: Men -->
            <div class="col-lg-4 col-md-6 tj-cat-card-anim">
                <a href="#" class="tj-cat-card d-block text-decoration-none h-100 p-4 p-xl-5">
                    <!-- Right Top Card Glow -->
                    <div class="tj-card-glow-rt second-color"></div>

                    <div class="tj-cat-card-top d-flex align-items-center justify-content-between mb-5">
                        <div class="tj-cat-img-box second-color">
                            <img src="img/category1.png" alt="Men" class="tj-cat-image">
                        </div>
                    </div>
                    <div class="tj-cat-content">
                        <div class="d-flex align-items-end justify-content-between">
                            <div>
                                <h3 class="tj-cat-title fw-bold mb-1">Men</h3>
                                <span class="tj-cat-subtitle d-block">Bold & Confident</span>
                            </div>
                            <div class="tj-cat-arrow-icon">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Category Card 3: Kids -->
            <div class="col-lg-4 col-md-6 tj-cat-card-anim">
                <a href="#" class="tj-cat-card d-block text-decoration-none h-100 p-4 p-xl-5">
                    <!-- Right Top Card Glow -->
                    <div class="tj-card-glow-rt third-color"></div>

                    <div class="tj-cat-card-top d-flex align-items-center justify-content-between mb-5">
                        <div class="tj-cat-img-box third-color">
                            <img src="img/category.png" alt="Kids" class="tj-cat-image">
                        </div>
                    </div>
                    <div class="tj-cat-content">
                        <div class="d-flex align-items-end justify-content-between">
                            <div>
                                <h3 class="tj-cat-title fw-bold mb-1">Kids</h3>
                                <span class="tj-cat-subtitle d-block">Fun & Comfortable</span>
                            </div>
                            <div class="tj-cat-arrow-icon">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>

    </div>
</section>
<!-- =========================================
     TJ SHOP BY CATEGORY SECTION END
========================================= -->
<?php
// Collections Products Data Array
$collection_products = [
    [
        "id" => 1,
        "title" => "Silk Designer Blouse",
        "desc" => "Elegant silk blouse with pearl buttons and flowing sleeves",
        "image" => "img/shop.png",
        "price" => 129.99,
        "old_price" => null,
        "rating" => "4.9",
        "reviews" => "38",
        "is_featured" => true,
        "category" => "featured women",
        "edit" => "edit-1",
        "size" => "m",
        "colors" => [
            ["name" => "Ivory", "hex" => "#f3efe9"],
            ["name" => "Rose Gold", "hex" => "#e0b8ab"]
        ]
    ],
    [
        "id" => 2,
        "title" => "High-Waisted Palazzo",
        "desc" => "Flowy wide-leg palazzo pants in premium crepe fabric",
        "image" => "img/shop1.png",
        "price" => 89.99,
        "old_price" => null,
        "rating" => "4.7",
        "reviews" => "24",
        "is_featured" => false,
        "category" => "trending women",
        "edit" => "edit-1",
        "size" => "l",
        "colors" => [
            ["name" => "Emerald", "hex" => "#19583c"],
            ["name" => "Navy", "hex" => "#23314a"]
        ]
    ],
    [
        "id" => 3,
        "title" => "Utility Cargo Pants",
        "desc" => "Stylish cargo pants with multiple pockets and adjustable waist",
        "image" => "img/shop2.png",
        "price" => 74.99,
        "old_price" => null,
        "rating" => "4.8",
        "reviews" => "42",
        "is_featured" => true,
        "category" => "featured women",
        "edit" => "edit-2",
        "size" => "m",
        "colors" => [
            ["name" => "Olive", "hex" => "#737554"],
            ["name" => "Black", "hex" => "#1b1b1b"]
        ]
    ],
    [
        "id" => 4,
        "title" => "Floral Midi Summer Dress",
        "desc" => "Beautiful floral print midi dress perfect for any occasion",
        "image" => "img/shop3.png",
        "price" => 119.99,
        "old_price" => null,
        "rating" => "4.9",
        "reviews" => "56",
        "is_featured" => true,
        "category" => "trending women",
        "edit" => "edit-2",
        "size" => "s",
        "colors" => [
            ["name" => "Floral Multi", "hex" => "#e6ccd0"],
            ["name" => "Solid Navy", "hex" => "#192a4a"]
        ]
    ],
    [
        "id" => 5,
        "title" => "High-Rise Denim Jeans",
        "desc" => "Sustainable high-rise jeans with perfect stretch and fit",
        "image" => "img/shop4.png",
        "price" => 99.99,
        "old_price" => null,
        "rating" => "4.6",
        "reviews" => "31",
        "is_featured" => false,
        "category" => "featured women",
        "edit" => "edit-1",
        "size" => "m",
        "colors" => [
            ["name" => "Dark Indigo", "hex" => "#212c42"],
            ["name" => "Light Wash", "hex" => "#9ab4cb"]
        ]
    ],
    [
        "id" => 6,
        "title" => "Elegant Jumpsuit",
        "desc" => "Sophisticated sleeveless jumpsuit with wide legs and belt",
        "image" => "img/shop5.png",
        "price" => 149.99,
        "old_price" => null,
        "rating" => "5.0",
        "reviews" => "19",
        "is_featured" => true,
        "category" => "trending women",
        "edit" => "edit-1",
        "size" => "l",
        "colors" => [
            ["name" => "Navy", "hex" => "#17213b"],
            ["name" => "Black", "hex" => "#121212"]
        ]
    ],
    [
        "id" => 7,
        "title" => "Classic Button-Down Shirt",
        "desc" => "Crisp white cotton shirt perfect for professional or casual wear",
        "image" => "img/shop6.png",
        "price" => 69.99,
        "old_price" => null,
        "rating" => "4.8",
        "reviews" => "27",
        "is_featured" => false,
        "category" => "men",
        "edit" => "edit-2",
        "size" => "l",
        "colors" => [
            ["name" => "White", "hex" => "#ffffff"],
            ["name" => "Light Blue", "hex" => "#b5d1e8"]
        ]
    ],
    [
        "id" => 8,
        "title" => "A-Line Mini Skirt",
        "desc" => "Versatile A-line skirt in premium fabric with side pockets",
        "image" => "img/shop7.png",
        "price" => 59.99,
        "old_price" => null,
        "rating" => "4.7",
        "reviews" => "35",
        "is_featured" => true,
        "category" => "featured women",
        "edit" => "edit-2",
        "size" => "s",
        "colors" => [
            ["name" => "Black", "hex" => "#1f1f1f"],
            ["name" => "Navy", "hex" => "#1c2838"]
        ]
    ]
];
?>

<!-- =========================================
     TJ DISCOVER COLLECTIONS SECTION START
========================================= -->
<!-- =========================================
     TJ DISCOVER COLLECTIONS SECTION START
========================================= -->
<section class="tj-collections-section py-5" id="tjCollectionsSection">
    
    <!-- Background Glow Elements -->
    <div class="tj-col-glow tj-col-glow-1"></div>
    <div class="tj-col-glow tj-col-glow-2"></div>

    <div class="container py-lg-4 position-relative" style="z-index: 2;">
        
        <!-- Section Header -->
        <div class="row justify-content-center text-center mb-4">
            <div class="col-lg-6 tj-col-header-anim">
                <span class="tj-section-subtitle d-block text-uppercase mb-2">The Edit</span>
                <h2 class="tj-section-title fw-bold mb-2">Discover Collections</h2>
                <p class="tj-section-desc mb-0">
                    Explore our trendy and featured collections with advanced search and filtering
                </p>
            </div>
        </div>

        <!-- Search, Filters & View Toggle Bar -->
        <div class="row align-items-center justify-content-between mb-5 g-3 tj-col-filter-bar-anim">
            <!-- Search Input -->
            <div class="col-lg-3 col-md-4">
                <div class="tj-search-box position-relative">
                    <i class="fa-solid fa-magnifying-glass position-absolute"></i>
                    <input type="text" class="form-control tj-search-input" placeholder="Search products..." id="tjProductSearch">
                </div>
            </div>

            <!-- Filter Pills -->
            <div class="col-lg-7 col-md-8">
                <div class="tj-filter-pills d-flex flex-wrap gap-2 justify-content-lg-center">
                    <button class="tj-filter-btn active" data-filter="all">All Products</button>
                    <button class="tj-filter-btn" data-filter="trending">Trending</button>
                    <button class="tj-filter-btn" data-filter="featured">Featured</button>
                    <button class="tj-filter-btn" data-filter="women">Women</button>
                    <button class="tj-filter-btn" data-filter="men">Men</button>
                    <button class="tj-filter-btn" data-filter="kids">Kids</button>
                </div>
            </div>

            <!-- Layout Toggle Buttons -->
            <div class="col-lg-2 col-md-12 d-flex justify-content-lg-end justify-content-center">
                <div class="tj-view-toggle d-flex align-items-center gap-1 p-1">
                    <button class="tj-toggle-btn active" id="tjGridViewBtn" title="Grid View">
                        <i class="fa-solid fa-table-cells"></i>
                    </button>
                    <button class="tj-toggle-btn" id="tjListViewBtn" title="List View">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Products Grid (4 Columns on Home Page: col-xl-3) -->
        <div class="row g-4 tj-products-container" id="tjProductsGrid">
            <?php foreach ($collection_products as $prod) {
                // Set 4 columns layout for home page
                $colClass = "col-xl-3 col-lg-4 col-md-6 tj-product-col";
                include 'inc/product-card.php';
            } ?>
        </div>

        <!-- Bottom View All Button -->
        <div class="row justify-content-center mt-5">
            <div class="col-auto text-center">
                <a href="#" class="ah-apparel-btn11">
                    View All Products (<?php echo count($collection_products); ?>) <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>

    </div>
</section>
<!-- =========================================
     TJ DISCOVER COLLECTIONS SECTION END
========================================= -->
<!-- =========================================
     TJ DISCOVER COLLECTIONS SECTION END
========================================= -->
<!-- =========================================
     TJ GIFT CARDS SECTION START
========================================= -->
<section class="tj-gift-card-section py-5" id="tjGiftCardSection">
    
    <!-- Background Glow Elements -->
    <div class="tj-gc-glow tj-gc-glow-1"></div>
    <div class="tj-gc-glow tj-gc-glow-2"></div>

    <div class="container py-lg-4 position-relative" style="z-index: 2;">
        <div class="row align-items-center g-4">
            
            <!-- LEFT COLUMN: Info & Features -->
            <div class="col-lg-4">
                <div class="tj-gc-left-content pe-lg-3">
                    <span class="tj-section-subtitle d-block text-uppercase mb-2">Gifting</span>
                    <h2 class="tj-section-title fw-bold mb-3">Perfect Gift Cards</h2>
                    <p class="tj-section-desc mb-4">
                        Give the gift of fashion choice. Instant delivery, never expires, always appreciated.
                    </p>

                    <!-- Feature List -->
                    <div class="tj-gc-features d-flex flex-column gap-4">
                        <div class="d-flex align-items-start gap-3">
                            <div class="tj-gc-icon-box flex-shrink-0">
                                <i class="fa-solid fa-bolt"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-white mb-1 fs-6">Instant Delivery</h5>
                                <p class="mb-0 text-white-50 small">Digital gift cards delivered immediately</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start gap-3">
                            <div class="tj-gc-icon-box flex-shrink-0">
                                <i class="fa-solid fa-infinity"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-white mb-1 fs-6">Never Expires</h5>
                                <p class="mb-0 text-white-50 small">No expiration date, use anytime</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start gap-3">
                            <div class="tj-gc-icon-box flex-shrink-0">
                                <i class="fa-solid fa-gift"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold text-white mb-1 fs-6">Perfect for Any Occasion</h5>
                                <p class="mb-0 text-white-50 small">Birthdays, holidays, or just because</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MIDDLE COLUMN: Preview & Choose Design -->
            <div class="col-lg-4">
                <div class="tj-gc-card-box p-4 h-100">
                    <span class="tj-gc-label d-block text-uppercase mb-3">Gift Card Preview</span>
                    
                    <!-- Live Preview Card -->
                    <div class="tj-preview-card p-4 mb-4" id="tjPreviewCardBg" style="background: linear-gradient(135deg, #7d35e8 0%, #3b1770 100%);">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="tj-preview-logo d-flex align-items-center gap-2">
                                <span class="tj-logo-badge"><i class="fa-solid fa-bolt"></i></span>
                                <span class="fw-bold text-white small tracking-wider">TJ APPARELS</span>
                            </div>
                        </div>
                        <div>
                            <span class="d-block text-white-50 small mb-1">Fashion Gift Card</span>
                            <h3 class="tj-preview-amount fw-bold text-white mb-0" id="tjPreviewAmountText">$50</h3>
                        </div>
                    </div>

                    <!-- Choose Design Options -->
                    <span class="tj-gc-label d-block text-uppercase mb-3">Choose Design</span>
                    <div class="row g-2 tj-design-swatches">
                        <div class="col-6">
                            <div class="tj-design-option active" data-gradient="linear-gradient(135deg, #5725B8 0%, #7B3FF2 100%)">
                                <div class="tj-swatch-bg" style="background: linear-gradient(135deg, #5725B8 0%, #7B3FF2 100%);"></div>
                                <span class="small text-white d-block mt-1">Purple Elegance</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="tj-design-option" data-gradient="linear-gradient(135deg, #B8256F 0%, #FF4FB3 100%)">
                                <div class="tj-swatch-bg" style="background: linear-gradient(135deg, #B8256F 0%, #FF4FB3 100%);"></div>
                                <span class="small text-white-50 d-block mt-1">Pink Romance</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="tj-design-option" data-gradient="linear-gradient(135deg, #111A45 0%, #62DFFF 100%)">
                                <div class="tj-swatch-bg" style="background: linear-gradient(135deg, #111A45 0%, #62DFFF 100%);"></div>
                                <span class="small text-white-50 d-block mt-1">Blue Dreams</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="tj-design-option" data-gradient="linear-gradient(135deg, #8A6A18 0%, #FFD34E 100%)">
                                <div class="tj-swatch-bg" style="background: linear-gradient(135deg, #8A6A18 0%, #FFD34E 100%);"></div>
                                <span class="small text-white-50 d-block mt-1">Golden Luxury</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: Details Form -->
            <div class="col-lg-4">
                <div class="tj-gc-card-box p-4 h-100">
                    <h4 class="text-white fw-bold mb-3 fs-5">Gift Card Details</h4>
                    
                    <form id="tjGiftCardForm">
                        <!-- Select Amount Checkboxes -->
                        <div class="mb-3">
                            <label class="tj-gc-label d-block text-uppercase mb-2">Select Amount</label>
                            <div class="d-flex flex-wrap gap-2 tj-amount-checkbox-group">
                                <label class="tj-amount-label">
                                    <input type="checkbox" name="gift_amount" value="25" class="tj-amount-checkbox">
                                    <span class="tj-amount-pill">$25</span>
                                </label>
                                <label class="tj-amount-label">
                                    <input type="checkbox" name="gift_amount" value="50" class="tj-amount-checkbox" checked>
                                    <span class="tj-amount-pill">$50</span>
                                </label>
                                <label class="tj-amount-label">
                                    <input type="checkbox" name="gift_amount" value="100" class="tj-amount-checkbox">
                                    <span class="tj-amount-pill">$100</span>
                                </label>
                                <label class="tj-amount-label">
                                    <input type="checkbox" name="gift_amount" value="150" class="tj-amount-checkbox">
                                    <span class="tj-amount-pill">$150</span>
                                </label>
                                <label class="tj-amount-label">
                                    <input type="checkbox" name="gift_amount" value="200" class="tj-amount-checkbox">
                                    <span class="tj-amount-pill">$200</span>
                                </label>
                            </div>
                        </div>

                        <!-- Custom Amount Input -->
                        <div class="mb-3">
                            <input type="number" class="form-control tj-gc-input" id="tjCustomAmount" placeholder="Custom amount ($10 min)" min="10">
                        </div>

                        <!-- Recipient Email -->
                        <div class="mb-3">
                            <label class="tj-gc-label d-block text-uppercase mb-1">Recipient Email</label>
                            <input type="email" class="form-control tj-gc-input" placeholder="Enter recipient's email" required>
                        </div>

                        <!-- Personal Message -->
                        <div class="mb-4">
                            <label class="tj-gc-label d-block text-uppercase mb-1">Personal Message (Optional)</label>
                            <textarea class="form-control tj-gc-input" rows="3" placeholder="Add a personal touch..."></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="tj-gc-submit-btn w-100 py-3 fw-bold text-white text-decoration-none border-0" id="tjSubmitBtn">
                            Create Gift Card • $50
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- =========================================
     TJ GIFT CARDS SECTION END
========================================= -->
<!-- =========================================
     TJ FASHION INSIGHTS SECTION START
========================================= -->
<section class="tj-blog-section py-5" id="tjFashionInsights">
    
    <!-- Background Glow Elements -->
    <div class="tj-blog-glow tj-blog-glow-1"></div>
    <div class="tj-blog-glow tj-blog-glow-2"></div>

    <div class="container py-lg-4 position-relative" style="z-index: 2;">
        
        <!-- Header Row with Search & Filters -->
        <div class="row align-items-end mb-5 g-3">
            <div class="col-lg-6">
                <span class="tj-section-subtitle d-block text-uppercase mb-2">Editorial</span>
                <h2 class="tj-section-title fw-bold mb-2">Fashion Insights</h2>
                <p class="tj-section-desc mb-0">
                    Stay updated with the latest trends, styling tips, and fashion inspiration from our expert curators.
                </p>
            </div>
            
            <div class="col-lg-6">
                <div class="d-flex flex-wrap align-items-center justify-content-lg-end gap-3">
                    <!-- Search Input -->
                    <div class="tj-search-wrapper position-relative">
                        <i class="fa-solid fa-magnifying-glass position-absolute top-50 translate-middle-y ms-3 text-white-50 small"></i>
                        <input type="text" class="form-control tj-blog-search-input ps-5" id="tjBlogSearch" placeholder="Search blog posts...">
                    </div>
                    
                    <!-- Filter Buttons -->
                    <div class="tj-blog-filter-btns d-flex gap-2">
                        <button type="button" class="tj-filter-btn active" data-filter="latest">Latest</button>
                        <button type="button" class="tj-filter-btn" data-filter="popular">Popular</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog Cards Grid (4 Columns) -->
        <div class="row g-4" id="tjBlogGrid">
            
            <!-- Card 1 -->
            <div class="col-xl-3 col-lg-6 col-md-6 tj-blog-item" data-category="latest">
                <div class="tj-blog-card h-15 d-flex flex-column justify-content-between">
                    <div>
                        <!-- Card Image / Header -->
                        <div class="tj-blog-img-wrapper position-relative">
                            <span class="tj-blog-badge position-absolute top-0 start-0 m-3">Fashion</span>
                            <img src="https://images.unsplash.com/photo-1558769132-cb1aea458c5e?auto=format&fit=crop&w=600&q=80" alt="Sustainable Fashion" class="w-100 object-fit-cover">
                        </div>
                        
                        <!-- Content -->
                        <div class="p-4">
                            <span class="tj-blog-meta d-block text-uppercase mb-2">January 20, 2025 · 6 min read</span>
                            <h4 class="tj-blog-title text-white fw-bold mb-2 fs-6">Sustainable Fashion Revolution: Style with Purpose</h4>
                            <p class="tj-blog-excerpt small text-white-50 mb-3">Discover how eco-conscious choices are reshaping the fashion industry and how you can join the movement without compromising on style.</p>
                            
                            <!-- Tags Pills -->
                            <div class="d-flex flex-wrap gap-1  border-bottom pb-3">
                                <span class="tj-tag-pill">Sustainable Fashion</span>
                                <span class="tj-tag-pill">Eco-Friendly</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card Footer -->
                    <div class="px-4 pb-4 pt-0 d-flex align-items-center justify-content-between border-top-0">
                        <span class="tj-blog-likes small text-white-50"><i class="fa-solid fa-heart text-danger me-1"></i> 423</span>
                        <a href="#" class="tj-read-more text-decoration-none small fw-bold">Read More <i class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-xl-3 col-lg-6 col-md-6 tj-blog-item" data-category="popular">
                <div class="tj-blog-card h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="tj-blog-img-wrapper position-relative">
                            <span class="tj-blog-badge position-absolute top-0 start-0 m-3">Fashion</span>
                            <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?auto=format&fit=crop&w=600&q=80" alt="Capsule Wardrobe" class="w-100 object-fit-cover">
                        </div>
                        <div class="p-4">
                            <span class="tj-blog-meta d-block text-uppercase mb-2">January 15, 2025 · 4 min read</span>
                            <h4 class="tj-blog-title text-white fw-bold mb-2 fs-6">Capsule Wardrobe Mastery: 30 Pieces, Endless Possibilities</h4>
                            <p class="tj-blog-excerpt small text-white-50 mb-3">Learn the art of building a versatile capsule wardrobe that maximizes style while minimizing clutter and decision fatigue.</p>
                            <div class="d-flex flex-wrap gap-1 border-bottom pb-3">
                                <span class="tj-tag-pill">Capsule Wardrobe</span>
                                <span class="tj-tag-pill">Minimalism</span>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pb-4 pt-0 d-flex align-items-center justify-content-between border-top-0">
                        <span class="tj-blog-likes small text-white-50"><i class="fa-solid fa-heart text-danger me-1"></i> 392</span>
                        <a href="#" class="tj-read-more text-decoration-none small fw-bold">Read More <i class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-xl-3 col-lg-6 col-md-6 tj-blog-item" data-category="latest">
                <div class="tj-blog-card h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="tj-blog-img-wrapper position-relative">
                            <span class="tj-blog-badge position-absolute top-0 start-0 m-3">Fashion</span>
                            <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?auto=format&fit=crop&w=600&q=80" alt="Color Psychology" class="w-100 object-fit-cover">
                        </div>
                        <div class="p-4">
                            <span class="tj-blog-meta d-block text-uppercase mb-2">January 10, 2025 · 5 min read</span>
                            <h4 class="tj-blog-title text-white fw-bold mb-2 fs-6">Color Psychology in Fashion: Dress for Success</h4>
                            <p class="tj-blog-excerpt small text-white-50 mb-3">Unlock the power of color to influence mood, confidence, and how others perceive you through strategic wardrobe choices.</p>
                            <div class="d-flex flex-wrap gap-1 border-bottom pb-3">
                                <span class="tj-tag-pill">Color Psychology</span>
                                <span class="tj-tag-pill">Professional Style</span>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pb-4 pt-0 d-flex align-items-center justify-content-between border-top-0">
                        <span class="tj-blog-likes small text-white-50"><i class="fa-solid fa-heart text-danger me-1"></i> 318</span>
                        <a href="#" class="tj-read-more text-decoration-none small fw-bold">Read More <i class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-xl-3 col-lg-6 col-md-6 tj-blog-item" data-category="popular">
                <div class="tj-blog-card h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="tj-blog-img-wrapper position-relative">
                            <span class="tj-blog-badge position-absolute top-0 start-0 m-3">Fashion</span>
                            <img src="https://images.unsplash.com/photo-1539109136881-3be0616acf4b?auto=format&fit=crop&w=600&q=80" alt="Accessorizing" class="w-100 object-fit-cover">
                        </div>
                        <div class="p-4">
                            <span class="tj-blog-meta d-block text-uppercase mb-2">January 5, 2025 · 4 min read</span>
                            <h4 class="tj-blog-title text-white fw-bold mb-2 fs-6">The Art of Accessorizing: Small Details, Big Impact</h4>
                            <p class="tj-blog-excerpt small text-white-50 mb-3">Master the finishing touches that elevate any outfit from ordinary to extraordinary with the right accessories.</p>
                            <div class="d-flex flex-wrap gap-1 border-bottom pb-3">
                                <span class="tj-tag-pill">Accessories</span>
                                <span class="tj-tag-pill">Styling Tips</span>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pb-4 pt-0 d-flex align-items-center justify-content-between border-top-0">
                        <span class="tj-blog-likes small text-white-50"><i class="fa-solid fa-heart text-danger me-1"></i> 267</span>
                        <a href="#" class="tj-read-more text-decoration-none small fw-bold">Read More <i class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- =========================================
     TJ FASHION INSIGHTS SECTION END
========================================= -->
<!-- =========================================
     TJ STAY CONNECTED SECTION START
========================================= -->
<section class="tj-connect-section py-5" id="tjStayConnected">
    
    <!-- Background Glow Elements -->
    <div class="tj-connect-glow tj-connect-glow-1"></div>
    <div class="tj-connect-glow tj-connect-glow-2"></div>

    <div class="container py-lg-4 position-relative" style="z-index: 2;">
        <div class="row align-items-center g-5">
            
            <!-- LEFT COLUMN: Content & Newsletter Form -->
            <div class="col-lg-6">
                <div class="tj-connect-left pe-lg-3">
                    <span class="tj-section-subtitle d-block text-uppercase mb-2">Community</span>
                    <h2 class="tj-section-title fw-bold mb-3">Stay Connected</h2>
                    <p class="tj-section-desc mb-4">
                        Join our fashion community and never miss out on exclusive deals, new arrivals, and style inspiration.
                    </p>

                    <!-- Newsletter Form (Input + Button inline) -->
                    <form class="tj-newsletter-form d-flex align-items-center gap-2 mb-5" onsubmit="event.preventDefault();">
                        <div class="flex-grow-1 position-relative">
                            <input type="email" class="form-control tj-connect-input" placeholder="Enter your email address" required>
                        </div>
                        <button type="submit" class="tj-connect-submit-btn text-white fw-bold border-0 flex-shrink-0">
                            Subscribe Now
                        </button>
                    </form>

                    <!-- Why Subscribe Features (3 Columns Layout) -->
                    <span class="tj-gc-label d-block text-uppercase mb-3">Why Subscribe?</span>
                    <div class="row g-3">
                        <!-- Feature 1 -->
                        <div class="col-4">
                            <div class="tj-connect-feature-item">
                                <div class="tj-connect-icon-box mb-2">
                                    <i class="fa-solid fa-tag"></i>
                                </div>
                                <h6 class="text-white fw-bold mb-1 fs-6">Exclusive Offers</h6>
                                <p class="text-white-50 small mb-0" style="font-size: 11px !important;">Get 20% off your first purchase</p>
                            </div>
                        </div>
                        <!-- Feature 2 -->
                        <div class="col-4">
                            <div class="tj-connect-feature-item">
                                <div class="tj-connect-icon-box mb-2">
                                    <i class="fa-solid fa-rocket"></i>
                                </div>
                                <h6 class="text-white fw-bold mb-1 fs-6">Early Access</h6>
                                <p class="text-white-50 small mb-0" style="font-size: 11px !important;">Be first to shop new arrivals</p>
                            </div>
                        </div>
                        <!-- Feature 3 -->
                        <div class="col-4">
                            <div class="tj-connect-feature-item">
                                <div class="tj-connect-icon-box mb-2">
                                    <i class="fa-solid fa-ticket"></i>
                                </div>
                                <h6 class="text-white fw-bold mb-1 fs-6">VIP Events</h6>
                                <p class="text-white-50 small mb-0" style="font-size: 11px !important;">Exclusive invites to fashion shows</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- RIGHT COLUMN: Big Banner Card with Social Icons -->
            <div class="col-lg-6">
                <div class="tj-connect-card-box position-relative overflow-hidden">
                    
                    <!-- Background Image -->
                    <img src="https://images.unsplash.com/photo-1551698618-1dfe5d97d256?auto=format&fit=crop&w=1000&q=80" alt="Skiing Sports Fashion" class="tj-connect-bg-img w-100 h-100 object-fit-cover position-absolute top-0 start-0">
                    
                    <!-- Gradient Overlay (Bottom Solid Dark, Top Faded) -->
                    <div class="tj-connect-overlay position-absolute top-0 start-0 w-100 h-100"></div>

                    <!-- Card Content (Bottom Aligned) -->
                    <div class="position-relative p-4 p-lg-5 h-100 d-flex flex-column justify-content-end" style="z-index: 3; min-height: 380px;">
                        <h4 class="text-white fw-bold mb-3 fs-5">Follow Us for Daily Inspiration</h4>
                        
                        <!-- Social Media Icon Buttons -->
                        <div class="d-flex align-items-center gap-2">
                            <a href="#" class="tj-social-icon-btn"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#" class="tj-social-icon-btn"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="tj-social-icon-btn"><i class="fa-solid fa-bookmark"></i></a>
                            <a href="#" class="tj-social-icon-btn"><i class="fa-brands fa-tiktok"></i></a>
                            <a href="#" class="tj-social-icon-btn"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- =========================================
     TJ STAY CONNECTED SECTION END
========================================= -->

<!-- Body Content End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->
<!-- Include GSAP and ScrollTrigger if not already loaded -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<!-- collection script -->

<script>
document.addEventListener("DOMContentLoaded", function () {
    const amountCheckboxes = document.querySelectorAll(".tj-amount-checkbox");
    const customAmountInput = document.getElementById("tjCustomAmount");
    const previewAmountText = document.getElementById("tjPreviewAmountText");
    const submitBtn = document.getElementById("tjSubmitBtn");
    const designOptions = document.querySelectorAll(".tj-design-option");
    const previewCardBg = document.getElementById("tjPreviewCardBg");

    function updateAmount(val) {
        previewAmountText.innerText = "$" + val;
        submitBtn.innerText = `Create Gift Card • $${val}`;
    }

    // Checkboxes behavior (Single Select / Radio style)
    amountCheckboxes.forEach(checkbox => {
        checkbox.addEventListener("change", function () {
            if (this.checked) {
                amountCheckboxes.forEach(cb => {
                    if (cb !== this) cb.checked = false;
                });
                customAmountInput.value = ""; // clear custom input
                updateAmount(this.value);
            } else {
                const anyChecked = Array.from(amountCheckboxes).some(cb => cb.checked);
                if (!anyChecked && customAmountInput.value === "") {
                    this.checked = true;
                }
            }
        });
    });

    // Custom Amount Input Event
    customAmountInput.addEventListener("input", function () {
        const val = this.value.trim();
        if (val !== "" && val > 0) {
            amountCheckboxes.forEach(cb => cb.checked = false);
            updateAmount(val);
        } else {
            const anyChecked = Array.from(amountCheckboxes).some(cb => cb.checked);
            if (!anyChecked) {
                document.querySelector('.tj-amount-checkbox[value="50"]').checked = true;
                updateAmount("50");
            }
        }
    });

    // Design Swatch Selection Event
    designOptions.forEach(option => {
        option.addEventListener("click", function () {
            designOptions.forEach(o => {
                o.classList.remove("active");
                const span = o.querySelector("span");
                span.classList.remove("text-white");
                span.classList.add("text-white-50");
            });

            this.classList.add("active");
            const activeSpan = this.querySelector("span");
            activeSpan.classList.remove("text-white-50");
            activeSpan.classList.add("text-white");

            const gradient = this.getAttribute("data-gradient");
            previewCardBg.style.background = gradient;
        });
    });
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const filterBtns = document.querySelectorAll(".tj-filter-btn");
    const blogItems = document.querySelectorAll(".tj-blog-item");
    const searchInput = document.getElementById("tjBlogSearch");

    // Filter Button Click Event
    filterBtns.forEach(btn => {
        btn.addEventListener("click", function () {
            filterBtns.forEach(b => b.classList.remove("active"));
            this.classList.add("active");

            const filterValue = this.getAttribute("data-filter");

            blogItems.forEach(item => {
                const category = item.getAttribute("data-category");
                if (filterValue === "all" || category === filterValue) {
                    item.style.display = "block";
                } else {
                    item.style.display = "none";
                }
            });
        });
    });

    // Search Input Functionality
    searchInput.addEventListener("input", function () {
        const query = this.value.toLowerCase().trim();

        blogItems.forEach(item => {
            const title = item.querySelector(".tj-blog-title").innerText.toLowerCase();
            const excerpt = item.querySelector(".tj-blog-excerpt").innerText.toLowerCase();

            if (title.includes(query) || excerpt.includes(query)) {
                item.style.display = "block";
            } else {
                item.style.display = "none";
            }
        });
    });
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {

    gsap.registerPlugin(ScrollTrigger);

    const categories = gsap.utils.toArray(".ah-apparel-category");

    // Entrance animation (slow, staggered)
    gsap.from(categories, {
        y: 50,
        opacity: 0,
        scale: 0.8,
        duration: 1.5,
        ease: "power3.out",
        stagger: 0.25,
        scrollTrigger: {
            trigger: ".ah-apparel-categories",
            start: "top 65%",
            once: true  
        },
        onComplete: startFloating
    });

    // Continuous slow floating animation
    function startFloating() {
        categories.forEach((item, i) => {
            gsap.to(item, {
                y: i % 2 === 0 ? -10 : 15,   // alternate up/down
                duration: 2 + (i * 0.2),      // har ek ki speed thodi alag
                ease: "sine.inOut",
                repeat: -1,
                yoyo: true
            });
        });
    }

    // Slow hover zoom on image
    document.querySelectorAll(".ah-apparel-category-circle").forEach(circle => {
        const img = circle.querySelector("img");

        circle.addEventListener("mouseenter", () => {
            gsap.to(img, { scale: 1.12, duration: 1.2, ease: "power2.out" });
        });

        circle.addEventListener("mouseleave", () => {
            gsap.to(img, { scale: 1, duration: 1.2, ease: "power2.out" });
        });
    });

});
</script>