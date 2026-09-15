<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- banner Include Here  -->
<?php 
// Banner variables
$subtitle = "Product Listing";
$title = "Shop the Collection";
$desc = "Ten signature pieces, filtered your way — refine by category, edit, size and price.";
$currentPage = "Shop";

include 'inc/inner-banner.php'; 
?>
<!-- banner Include Here  -->

<?php
// Dynamic Products Data Array
$products = [
    [
        "id" => 1,
        "title" => "Silk Designer Blouse",
        "desc" => "Elegant silk blouse with pearl buttons and flowing sleeves",
        "price" => 129.99,
        "old_price" => 159.99,
        "rating" => 4.8,
        "reviews" => 126,
        "image" => "https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=700&q=80",
        "category" => "women",
        "edit" => "featured",
        "size" => "S M L",
        "is_featured" => true,
        "colors" => [["name" => "Ivory", "hex" => "#f3e5ab"], ["name" => "Rose Gold", "hex" => "#d99b82"]]
    ],
    [
        "id" => 2,
        "title" => "High-Waisted Palazzo Pants",
        "desc" => "Flowy wide-leg palazzo pants in premium crepe fabric",
        "price" => 89.99,
        "old_price" => null,
        "rating" => 4.6,
        "reviews" => 84,
        "image" => "https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?auto=format&fit=crop&w=700&q=80",
        "category" => "women",
        "edit" => "trending",
        "size" => "M L XL",
        "is_featured" => false,
        "colors" => [["name" => "Emerald", "hex" => "#0b6623"], ["name" => "Navy", "hex" => "#121e36"]]
    ],
    [
        "id" => 3,
        "title" => "Women's Utility Cargo Pants",
        "desc" => "Stylish cargo pants with multiple pockets and adjustable waist",
        "price" => 74.99,
        "old_price" => null,
        "rating" => 4.5,
        "reviews" => 61,
        "image" => "https://images.unsplash.com/photo-1509631179647-0177331693ae?auto=format&fit=crop&w=700&q=80",
        "category" => "women",
        "edit" => "essentials",
        "size" => "S M L XL",
        "is_featured" => true,
        "colors" => [["name" => "Olive", "hex" => "#556b2f"], ["name" => "Black", "hex" => "#000000"]]
    ],
    [
        "id" => 4,
        "title" => "Floral Midi Summer Dress",
        "desc" => "Beautiful floral print midi dress perfect for any occasion",
        "price" => 119.99,
        "old_price" => 139.99,
        "rating" => 4.9,
        "reviews" => 203,
        "image" => "https://images.unsplash.com/photo-1502716119720-b23a93e5fb1b?auto=format&fit=crop&w=700&q=80",
        "category" => "women",
        "edit" => "featured",
        "size" => "XS S M",
        "is_featured" => true,
        "colors" => [["name" => "Floral Multi", "hex" => "#e8a5a5"], ["name" => "Solid Navy", "hex" => "#121e36"]]
    ],
    [
        "id" => 5,
        "title" => "Classic Button-Down Shirt",
        "desc" => "Crisp white cotton shirt perfect for professional or casual wear",
        "price" => 69.99,
        "old_price" => null,
        "rating" => 4.4,
        "reviews" => 74,
        "image" => "https://images.unsplash.com/photo-1618354691373-d851c5c3a990?auto=format&fit=crop&w=700&q=80",
        "category" => "men",
        "edit" => "essentials",
        "size" => "M L XL XXL",
        "is_featured" => false,
        "colors" => [["name" => "White", "hex" => "#ffffff"], ["name" => "Light Blue", "hex" => "#add8e6"]]
    ],
    [
        "id" => 6,
        "title" => "A-Line Mini Skirt",
        "desc" => "Versatile A-line skirt in premium fabric with side pockets",
        "price" => 59.99,
        "old_price" => null,
        "rating" => 4.3,
        "reviews" => 52,
        "image" => "https://images.unsplash.com/photo-1583496661160-fb5886a0aaaa?auto=format&fit=crop&w=700&q=80",
        "category" => "women kids",
        "edit" => "trending",
        "size" => "XS S M",
        "is_featured" => true,
        "colors" => [["name" => "Black", "hex" => "#000000"], ["name" => "Navy", "hex" => "#121e36"]]
    ]
];
?>

<!-- Body Content Start Here -->
<main class="tj-product-parent py-5">
    <div class="container">
        <div class="row g-4">

            <!-- LEFT SIDE: FILTERS SIDEBAR -->
            <div class="col-lg-3">
                <div class="tj-filter-sidebar p-4 rounded-4 position-relative">

                    <!-- Filters Header -->
                    <div
                        class="d-flex align-items-center justify-content-between mb-4 pb-3 border-bottom border-secondary border-opacity-25">
                        <h5 class="text-white fw-bold mb-0 text-uppercase tracking-wider fs-6">Filters</h5>
                        <button type="button" id="tjResetFilters"
                            class="btn btn-link text-white-50 text-decoration-none p-0"
                            style="font-size: 12px;">Reset</button>
                    </div>

                    <!-- Category Filter -->
                    <div class="tj-filter-group mb-4">
                        <h6 class="text-white text-uppercase fw-bold mb-3"
                            style="font-size: 11px; letter-spacing: 1.5px; color: rgba(255,255,255,0.6);">Category</h6>
                        <div class="d-flex flex-column gap-2">
                            <label class="tj-checkbox-label d-flex align-items-center gap-2 text-white-50"
                                style="font-size: 13px; cursor: pointer;">
                                <input type="checkbox"
                                    class="form-check-input mt-0 bg-transparent border-secondary tj-filter-checkbox"
                                    data-filter-type="category" value="women"> Women
                            </label>
                            <label class="tj-checkbox-label d-flex align-items-center gap-2 text-white-50"
                                style="font-size: 13px; cursor: pointer;">
                                <input type="checkbox"
                                    class="form-check-input mt-0 bg-transparent border-secondary tj-filter-checkbox"
                                    data-filter-type="category" value="men"> Men
                            </label>
                            <label class="tj-checkbox-label d-flex align-items-center gap-2 text-white-50"
                                style="font-size: 13px; cursor: pointer;">
                                <input type="checkbox"
                                    class="form-check-input mt-0 bg-transparent border-secondary tj-filter-checkbox"
                                    data-filter-type="category" value="kids"> Kids
                            </label>
                            <label class="tj-checkbox-label d-flex align-items-center gap-2 text-white-50"
                                style="font-size: 13px; cursor: pointer;">
                                <input type="checkbox"
                                    class="form-check-input mt-0 bg-transparent border-secondary tj-filter-checkbox"
                                    data-filter-type="category" value="accessories"> Accessories
                            </label>
                        </div>
                    </div>

                    <!-- Edit Filter -->
                    <div class="tj-filter-group mb-4">
                        <h6 class="text-white text-uppercase fw-bold mb-3"
                            style="font-size: 11px; letter-spacing: 1.5px; color: rgba(255,255,255,0.6);">Edit</h6>
                        <div class="d-flex flex-column gap-2">
                            <label class="tj-checkbox-label d-flex align-items-center gap-2 text-white-50"
                                style="font-size: 13px; cursor: pointer;">
                                <input type="checkbox"
                                    class="form-check-input mt-0 bg-transparent border-secondary tj-filter-checkbox"
                                    data-filter-type="edit" value="featured"> Featured
                            </label>
                            <label class="tj-checkbox-label d-flex align-items-center gap-2 text-white-50"
                                style="font-size: 13px; cursor: pointer;">
                                <input type="checkbox"
                                    class="form-check-input mt-0 bg-transparent border-secondary tj-filter-checkbox"
                                    data-filter-type="edit" value="trending"> Trending
                            </label>
                            <label class="tj-checkbox-label d-flex align-items-center gap-2 text-white-50"
                                style="font-size: 13px; cursor: pointer;">
                                <input type="checkbox"
                                    class="form-check-input mt-0 bg-transparent border-secondary tj-filter-checkbox"
                                    data-filter-type="edit" value="new in"> New In
                            </label>
                            <label class="tj-checkbox-label d-flex align-items-center gap-2 text-white-50"
                                style="font-size: 13px; cursor: pointer;">
                                <input type="checkbox"
                                    class="form-check-input mt-0 bg-transparent border-secondary tj-filter-checkbox"
                                    data-filter-type="edit" value="essentials"> Essentials
                            </label>
                        </div>
                    </div>

                    <!-- Size Filter -->
                    <div class="tj-filter-group mb-4">
                        <h6 class="text-white text-uppercase fw-bold mb-3"
                            style="font-size: 11px; letter-spacing: 1.5px; color: rgba(255,255,255,0.6);">Size</h6>
                        <div class="d-flex flex-wrap gap-2">
                            <?php foreach(['XS', 'S', 'M', 'L', 'XL', 'XXL'] as $size): ?>
                            <span class="tj-size-badge tj-size-filter"
                                data-size="<?php echo $size; ?>"><?php echo $size; ?></span>
                            <?php endforeach; ?>
                            <span class="tj-size-badge tj-size-filter px-3" data-size="one size">One size</span>
                        </div>
                    </div>

                    <!-- Max Price Filter -->
                    <div class="tj-filter-group">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h6 class="text-white text-uppercase fw-bold mb-0"
                                style="font-size: 11px; letter-spacing: 1.5px; color: rgba(255,255,255,0.6);">Max Price
                            </h6>
                            <span class="text-white fw-bold" id="tjPriceOutput" style="font-size: 12px;">$200.00</span>
                        </div>
                        <input type="range" id="tjPriceRange" class="form-range custom-range" min="0" max="200"
                            value="200">
                    </div>

                </div>
            </div>

            <!-- RIGHT SIDE: PRODUCTS AREA -->
            <div class="col-lg-9">

                <!-- Top Search & Controls Bar -->
                <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 mb-4">
                    <div class="tj-search-bar flex-grow-1" style="max-width: 400px;">
                        <div class="position-relative">
                            <i class="fa-solid fa-magnifying-glass position-absolute top-50 start-0 translate-middle-y ms-3 text-white-50"
                                style="font-size: 13px;"></i>
                            <input type="text" id="tjProductSearch" class="form-control tj-collection-input ps-5"
                                placeholder="Search products...">
                        </div>
                    </div>

                    <!-- Controls: Product Count, Dropdown Select, and View Buttons -->
                    <div class="d-flex align-items-center gap-3 flex-wrap">
                        <span class="text-white-50" id="tjProductCount" style="font-size: 13px;">Showing
                            <?php echo count($products); ?> of <?php echo count($products); ?> products</span>

                        <!-- Product Select Dropdown Added Here -->
                        <select id="tjProductSortSelect"
                            class="form-select tj-collection-select text-white bg-transparent border-secondary"
                            style="font-size: 13px; width: auto; cursor: pointer;">
                            <option value="default" class="bg-dark text-white">Default Sorting</option>
                            <option value="price-low" class="bg-dark text-white">Price: Low to High</option>
                            <option value="price-high" class="bg-dark text-white">Price: High to Low</option>
                            <option value="rating" class="bg-dark text-white">Highest Rated</option>
                        </select>

                        <div class="d-flex gap-1">
                            <button type="button" id="tjGridViewBtn" class="tj-view-btn active"><i
                                    class="fa-solid fa-table-cells-large"></i></button>
                            <button type="button" id="tjListViewBtn" class="tj-view-btn"><i
                                    class="fa-solid fa-list"></i></button>
                        </div>
                    </div>
                </div>

             <!-- Products Grid (Shop Page with Sidebar) -->
<div class="row g-4" id="tjProductsGrid">
    <?php foreach ($products as $prod) {
        // Set 3 columns layout for shop page grid view alongside sidebar
        $colClass = "col-lg-4 col-md-6 tj-product-col";
        include 'inc/product-card.php';
    } ?>
</div>
                </div>

            </div>

        </div>
    </div>
</main>
<!-- Body Content End Here -->



<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->