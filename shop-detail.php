<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<?php
// Dynamic Products Data Array
$products = [
    [
        "id" => 1,
        "title" => "Silk Designer Blouse",
        "subtitle" => "FEATURED COLLECTION",
        "description" => "Elegant silk blouse with pearl buttons and flowing sleeves, crafted with meticulous attention to detail for a premium look.",
        "price" => 129.99,
        "old_price" => 159.99,
        "rating" => 4.8,
        "reviews" => 126,
        "images" => [
            "https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=1000&q=80",
            "https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?auto=format&fit=crop&w=1000&q=80",
            "https://images.unsplash.com/photo-1509631179647-0177331693ae?auto=format&fit=crop&w=1000&q=80"
        ],
        "colors" => [
            ["name" => "Ivory", "hex" => "#f3e5ab"], 
            ["name" => "Rose Gold", "hex" => "#d99b82"]
        ],
        "sizes" => ['XS', 'S', 'M', 'L']
    ],
    [
        "id" => 2,
        "title" => "High-Waisted Palazzo Pants",
        "subtitle" => "TRENDING COLLECTION",
        "description" => "Flowy wide-leg palazzo pants in premium crepe fabric designed for ultimate comfort and elegance.",
        "price" => 89.99,
        "old_price" => null,
        "rating" => 4.6,
        "reviews" => 84,
        "images" => [
            "https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?auto=format&fit=crop&w=1000&q=80",
            "https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=1000&q=80"
        ],
        "colors" => [
            ["name" => "Emerald", "hex" => "#0b6623"], 
            ["name" => "Navy", "hex" => "#121e36"]
        ],
        "sizes" => ['M', 'L', 'XL']
    ],
    [
        "id" => 3,
        "title" => "Women's Utility Cargo Pants",
        "subtitle" => "ESSENTIALS COLLECTION",
        "description" => "Stylish cargo pants with multiple pockets and adjustable waist for a modern utility look.",
        "price" => 74.99,
        "old_price" => null,
        "rating" => 4.5,
        "reviews" => 61,
        "images" => [
            "https://images.unsplash.com/photo-1509631179647-0177331693ae?auto=format&fit=crop&w=1000&q=80",
            "https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=1000&q=80"
        ],
        "colors" => [
            ["name" => "Olive", "hex" => "#556b2f"], 
            ["name" => "Black", "hex" => "#000000"]
        ],
        "sizes" => ['S', 'M', 'L', 'XL']
    ],
    [
        "id" => 4,
        "title" => "Floral Midi Summer Dress",
        "subtitle" => "FEATURED COLLECTION",
        "description" => "Beautiful floral print midi dress perfect for any summer occasion, light and breathable.",
        "price" => 119.99,
        "old_price" => 139.99,
        "rating" => 4.9,
        "reviews" => 203,
        "images" => [
            "https://images.unsplash.com/photo-1502716119720-b23a93e5fb1b?auto=format&fit=crop&w=1000&q=80",
            "https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=1000&q=80"
        ],
        "colors" => [
            ["name" => "Floral Multi", "hex" => "#e8a5a5"], 
            ["name" => "Solid Navy", "hex" => "#121e36"]
        ],
        "sizes" => ['XS', 'S', 'M']
    ],
    [
        "id" => 5,
        "title" => "Classic Button-Down Shirt",
        "subtitle" => "ESSENTIALS COLLECTION",
        "description" => "Crisp white cotton shirt perfect for professional or casual wear, tailored fit.",
        "price" => 69.99,
        "old_price" => null,
        "rating" => 4.4,
        "reviews" => 74,
        "images" => [
            "https://images.unsplash.com/photo-1618354691373-d851c5c3a990?auto=format&fit=crop&w=1000&q=80",
            "https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=1000&q=80"
        ],
        "colors" => [
            ["name" => "White", "hex" => "#ffffff"], 
            ["name" => "Light Blue", "hex" => "#add8e6"]
        ],
        "sizes" => ['M', 'L', 'XL', 'XXL']
    ],
    [
        "id" => 6,
        "title" => "A-Line Mini Skirt",
        "subtitle" => "TRENDING COLLECTION",
        "description" => "Versatile A-line skirt in premium fabric with side pockets and chic finish.",
        "price" => 59.99,
        "old_price" => null,
        "rating" => 4.3,
        "reviews" => 52,
        "images" => [
            "https://images.unsplash.com/photo-1583496661160-fb5886a0aaaa?auto=format&fit=crop&w=1000&q=80",
            "https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=1000&q=80"
        ],
        "colors" => [
            ["name" => "Black", "hex" => "#000000"], 
            ["name" => "Navy", "hex" => "#121e36"]
        ],
        "sizes" => ['XS', 'S', 'M']
    ]
];

// Get Product ID from URL, default to 1 if not set or not found
$productId = isset($_GET['id']) ? intval($_GET['id']) : 1;
$product = null;

foreach ($products as$p) {
    if ($p['id'] ===$productId) {
        $product =$p;
        break;
    }
}

if (!$product) {
    $product =$products[0];
}
?>

<!-- banner Include Here  -->
<?php 
$subtitle = "Product Detail";
$title = $product['title'];$desc = "Explore complete details, size, and color options for this piece.";
$currentPage = "Shop Detail";

include 'inc/inner-banner.php'; 
?>
<!-- banner Include Here  -->

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

<style>
:root {
    --tj-border: rgba(135, 120, 255, 0.16);
    --tj-purple: #7d35e8;
    --tj-pink: #e936a7;
}

.tj-product-gallery {
    position: relative;
}

/* Zoom Effect Container Style */
.swiper-main {
    width: 100%;
    height: 500px;
    border-radius: 20px;
    overflow: hidden;
    border: 1px solid var(--tj-border);
    background: #11112b;
    margin-bottom: 15px;
}

.img-zoom-container {
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.img-zoom-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
    transform-origin: center center;
}

.swiper-thumbs .swiper-slide {
    width: 90px;
    height: 90px;
    border-radius: 12px;
    overflow: hidden;
    cursor: pointer;
    opacity: 0.5;
    border: 2px solid transparent;
    transition: all 0.3s ease;
    background: #11112b;
}

.swiper-thumbs .swiper-slide-thumb-active {
    opacity: 1;
    border-color: var(--tj-pink);
    box-shadow: 0 0 12px rgba(233, 54, 167, 0.4);
}

.swiper-thumbs .swiper-slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.tj-product-subtitle {
    font-weight: 700;
    color: #F8D05C;
    font-size: 11px;
    letter-spacing: 2px;
}

.tj-product-title {
    font-size: 32px;
    font-weight: 800;
    margin-bottom: 12px;
    color: #fff;
}

.tj-product-desc {
    color: rgba(255, 255, 255, 0.65);
    font-size: 14px;
    line-height: 1.6;
    margin-bottom: 20px;
}

.tj-product-rating {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 20px;
    font-size: 13px;
    color: #fff;
}

.tj-product-rating i {
    color: #ffc107;
    font-size: 12px;
}

.tj-product-price-box {
    display: flex;
    align-items: baseline;
    gap: 15px;
    margin-bottom: 25px;
}

.tj-current-price {
    font-size: 28px;
    font-weight: 700;
    color: #ffffff;
}

.tj-old-price {
    font-size: 18px;
    color: rgba(255, 255, 255, 0.4);
    text-decoration: line-through;
}

.tj-option-label {
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 10px;
    color: rgba(255, 255, 255, 0.8);
}

.tj-color-swatches {
    display: flex;
    gap: 12px;
    margin-bottom: 25px;
}

.tj-color-btn {
    width: 28px;
    height: 28px;
    border-radius: 50%;
    border: 2px solid rgba(255, 255, 255, 0.2);
    cursor: pointer;
    transition: 0.3s;
}

.tj-color-btn.active,
.tj-color-btn:hover {
    border-color: var(--tj-pink);
    box-shadow: 0 0 10px rgba(233, 54, 167, 0.5);
}

.tj-size-selector {
    display: flex;
    gap: 10px;
    margin-bottom: 25px;
}

.tj-size-btn {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid var(--tj-border);
    color: #fff;
    font-size: 12px;
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: 0.3s;
}

.tj-size-btn.active,
.tj-size-btn:hover {
    background: linear-gradient(135deg, var(--tj-purple), var(--tj-pink));
    border-color: var(--tj-purple);
    box-shadow: 0 0 10px rgba(125, 53, 232, 0.5);
}

.tj-purchase-box {
    display: flex;
    gap: 15px;
    align-items: center;
    margin-bottom: 30px;
}

.tj-quantity-selector {
    display: flex;
    align-items: center;
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid var(--tj-border);
    border-radius: 50px;
    padding: 5px 12px;
    height: 48px;
}

.tj-quantity-selector button {
    background: transparent;
    border: none;
    color: #fff;
    font-size: 14px;
    cursor: pointer;
    width: 25px;
}

.tj-quantity-selector input {
    width: 35px;
    background: transparent;
    border: none;
    text-align: center;
    color: #fff;
    font-weight: 600;
    font-size: 14px;
    outline: none;
}

.tj-add-to-cart-btn {
    flex-grow: 1;
    height: 48px;
    border-radius: 50px;
    background: linear-gradient(135deg, var(--tj-purple), var(--tj-pink));
    border: none;
    color: #fff;
    font-weight: 600;
    font-size: 13px;
    letter-spacing: 0.5px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    cursor: pointer;
    box-shadow: 0 4px 15px rgba(125, 53, 232, 0.35);
    transition: 0.3s;
}

.tj-add-to-cart-btn:hover {
    opacity: 0.9;
    box-shadow: 0 6px 20px rgba(233, 54, 167, 0.5);
}

.tj-wishlist-action {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid var(--tj-border);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: 0.3s;
    text-decoration: none;
}

.tj-wishlist-action:hover {
    border-color: var(--tj-pink);
    background: rgba(233, 54, 167, 0.1);
    color: #fff;
}

.tj-features-row {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 12px;
}

.tj-feature-card {
    background: #101141;
    border: 1px solid var(--tj-border);
    padding: 15px;
    border-radius: 22px;
}

.tj-feature-card i {
    color: var(--tj-purple);
    font-size: 16px;
    margin-bottom: 8px;
    display: block;
}

.tj-feature-card h6 {
    font-size: 11px;
    font-weight: 700;
    margin-bottom: 4px;
    color: #fff;
}

.tj-feature-card p {
    font-size: 9.5px;
    color: rgba(255, 255, 255, 0.5);
    margin: 0;
    line-height: 1.4;
}

@media (max-width: 768px) {
    .tj-features-row {
        grid-template-columns: 1fr;
    }

    .swiper-main {
        height: 380px;
    }
}
</style>

<!-- Body Content Start Here -->
<main class="tj-product-parent py-5">
    <div class="container">
        <div class="row g-5 align-items-center">

            <!-- LEFT COLUMN: Image Gallery & Zoom Effect -->
            <div class="col-lg-6">
                <div class="tj-product-gallery">
                    <!-- Main Swiper with Zoom Container -->
                    <div class="swiper swiper-main">
                        <div class="swiper-wrapper">
                            <?php foreach($product['images'] as$img): ?>
                            <div class="swiper-slide">
                                <div class="img-zoom-container">
                                    <img src="<?php echo $img; ?>" alt="<?php echo htmlspecialchars($product['title']); ?>">
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Thumbs Swiper -->
                    <div class="swiper swiper-thumbs">
                        <div class="swiper-wrapper">
                            <?php foreach($product['images'] as$img): ?>
                            <div class="swiper-slide">
                                <img src="<?php echo $img; ?>" alt="Thumbnail">
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: Product Details -->
            <div class="col-lg-6">
                <div class="tj-product-content">
                    <div class="tj-product-subtitle"><?php echo $product['subtitle']; ?></div>
                    <h1 class="tj-product-title"><?php echo htmlspecialchars($product['title']); ?></h1>
                    <p class="tj-product-desc"><?php echo htmlspecialchars($product['description']); ?></p>

                    <!-- Rating -->
                    <div class="tj-product-rating">
                        <div>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <span class="fw-bold"><?php echo $product['rating']; ?></span>
                        <span class="text-muted">(<?php echo $product['reviews']; ?> Reviews)</span>
                    </div>

                    <!-- Price -->
                    <div class="tj-product-price-box">
                        <span class="tj-current-price">$<?php echo number_format($product['price'], 2); ?></span>
                        <?php if(!empty($product['old_price'])): ?>
                        <span class="tj-old-price">$<?php echo number_format($product['old_price'], 2); ?></span>
                        <?php endif; ?>
                    </div>

                    <!-- Color Swatches -->
                    <div class="mb-3">
                        <div class="tj-option-label">Colour : <span id="selectedColorName"><?php echo $product['colors'][0]['name']; ?></span></div>
                        <div class="tj-color-swatches">
                            <?php foreach($product['colors'] as $index =>$color): ?>
                            <div class="tj-color-btn <?php echo $index === 0 ? 'active' : ''; ?>"
                                style="background-color: <?php echo $color['hex']; ?>;"
                                onclick="selectColor(this, '<?php echo $color['name']; ?>')"></div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Size Selector -->
                    <div class="mb-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="tj-option-label mb-0">Size</div>
                            <!-- Size Guide Trigger Button Added Here -->
                            <button type="button" class="btn btn-link text-decoration-none p-0 text-warning" style="font-size: 11px;" data-bs-toggle="modal" data-bs-target="#sizeGuideModal">
                                Size Guide <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                        <div class="tj-size-selector mt-2">
                            <?php foreach($product['sizes'] as $index =>$size): ?>
                            <button type="button" class="tj-size-btn <?php echo $index === 0 ? 'active' : ''; ?>"
                                onclick="selectSize(this)"><?php echo $size; ?></button>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Quantity & Cart Action -->
                    <div class="tj-purchase-box">
                        <div class="tj-quantity-selector">
                            <button type="button" onclick="decrementQty()">-</button>
                            <input type="text" id="qtyInput" value="1" readonly>
                            <button type="button" onclick="incrementQty()">+</button>
                        </div>

                        <button type="button" class="tj-add-to-cart-btn">
                            <i class="fa-solid fa-bag-shopping"></i> Add to Cart
                        </button>

                        <a href="checkout.php" class="tj-wishlist-action" title="Add to Wishlist">
                            <i class="fa-regular fa-heart"></i>
                        </a>
                    </div>

                    <!-- Trust Badges -->
                    <div class="tj-features-row">
                        <div class="tj-feature-card">
                            <i class="fa-solid fa-gem"></i>
                            <h6>Premium Quality</h6>
                            <p>Crafted with attention to detail</p>
                        </div>
                        <div class="tj-feature-card">
                            <i class="fa-solid fa-shield-halved"></i>
                            <h6>Secure Checkout</h6>
                            <p>Protected payment experience</p>
                        </div>
                        <div class="tj-feature-card">
                            <i class="fa-solid fa-rotate-left"></i>
                            <h6>Easy Returns</h6>
                            <p>Simple 30-day return process</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</main>

<!-- =========================================
     TJ YOU MAY ALSO LIKE / RELATED PRODUCTS SECTION START
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

// Related Products Filter Logic
$related_products = array_filter($collection_products, function($p) use ($productId) {
    return $p['id'] !==$productId;
});
$related_products = array_slice($related_products, 0, 4);
?>

<section class="tj-related-products-section pb-5 pt-3">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-6">
                <span class="tj-section-subtitle d-block text-uppercase mb-2 text-warning fw-bold" style="font-size: 11px; letter-spacing: 2px;">You May Also Like</span>
                <h2 class="tj-section-title fw-bold text-white mb-2" style="font-size: 28px;">Pieces our stylists pair with this one</h2>
                <p class="text-white-50 mb-0" style="font-size: 13px;">
                    Complete your look with our handpicked matching pieces and complementary accessories.
                </p>
            </div>
        </div>

        <div class="row g-4">
            <?php 
            if (!empty($related_products)) {
                foreach ($related_products as $prod) {$colClass = "col-xl-3 col-lg-4 col-md-6 tj-product-col";
                    include 'inc/product-card.php'; 
                }
            } else {
                echo '<p class="text-center text-white-50">No related products found.</p>';
            }
            ?>
        </div>
    </div>
</section>
<!-- =========================================
     TJ YOU MAY ALSO LIKE SECTION END
========================================= -->

<!-- Include Size Guide Component Here -->
<?php include 'inc/size-guide-modal.php'; ?>

<!-- Swiper JS & Custom Zoom Script -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var thumbsSlider = new Swiper(".swiper-thumbs", {
        spaceBetween: 10,
        slidesPerView: 3,
        freeMode: true,
        watchSlidesProgress: true,
    });

    var mainSlider = new Swiper(".swiper-main", {
        spaceBetween: 10,
        thumbs: {
            swiper: thumbsSlider,
        },
    });

    // Image Zoom Hover Effect Implementation
    const zoomContainers = document.querySelectorAll(".img-zoom-container");

    zoomContainers.forEach(container => {
        const img = container.querySelector("img");

        container.addEventListener("mousemove", function(e) {
            const rect = container.getBoundingClientRect();
            const x = ((e.clientX - rect.left) / container.offsetWidth) * 100;
            const y = ((e.clientY - rect.top) / container.offsetHeight) * 100;

            img.style.transformOrigin = `${x}% ${y}%`;
            img.style.transform = "scale(2)";
        });

        container.addEventListener("mouseleave", function() {
            img.style.transformOrigin = "center center";
            img.style.transform = "scale(1)";
        });
    });
});

function selectColor(element, colorName) {
    document.querySelectorAll('.tj-color-btn').forEach(btn => btn.classList.remove('active'));
    element.classList.add('active');
    document.getElementById('selectedColorName').innerText = colorName;
}

function selectSize(element) {
    document.querySelectorAll('.tj-size-btn').forEach(btn => btn.classList.remove('active'));
    element.classList.add('active');
}

function incrementQty() {
    let input = document.getElementById('qtyInput');
    let val = parseInt(input.value) || 1;
    input.value = val + 1;
}

function decrementQty() {
    let input = document.getElementById('qtyInput');
    let val = parseInt(input.value) || 1;
    if (val > 1) {
        input.value = val - 1;
    }
}
</script>

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->