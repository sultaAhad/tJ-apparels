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
                    <div class="d-flex align-items-center justify-content-between mb-4 pb-3 border-bottom border-secondary border-opacity-25">
                        <h5 class="text-white fw-bold mb-0 text-uppercase tracking-wider fs-6">Filters</h5>
                        <button type="button" id="tjResetFilters" class="btn btn-link text-white-50 text-decoration-none p-0" style="font-size: 12px;">Reset</button>
                    </div>

                    <!-- Category Filter -->
                    <div class="tj-filter-group mb-4">
                        <h6 class="text-white text-uppercase fw-bold mb-3" style="font-size: 11px; letter-spacing: 1.5px; color: rgba(255,255,255,0.6);">Category</h6>
                        <div class="d-flex flex-column gap-2">
                            <label class="tj-checkbox-label d-flex align-items-center gap-2 text-white-50" style="font-size: 13px; cursor: pointer;">
                                <input type="checkbox" class="form-check-input mt-0 bg-transparent border-secondary tj-filter-checkbox" data-filter-type="category" value="women"> Women
                            </label>
                            <label class="tj-checkbox-label d-flex align-items-center gap-2 text-white-50" style="font-size: 13px; cursor: pointer;">
                                <input type="checkbox" class="form-check-input mt-0 bg-transparent border-secondary tj-filter-checkbox" data-filter-type="category" value="men"> Men
                            </label>
                            <label class="tj-checkbox-label d-flex align-items-center gap-2 text-white-50" style="font-size: 13px; cursor: pointer;">
                                <input type="checkbox" class="form-check-input mt-0 bg-transparent border-secondary tj-filter-checkbox" data-filter-type="category" value="kids"> Kids
                            </label>
                            <label class="tj-checkbox-label d-flex align-items-center gap-2 text-white-50" style="font-size: 13px; cursor: pointer;">
                                <input type="checkbox" class="form-check-input mt-0 bg-transparent border-secondary tj-filter-checkbox" data-filter-type="category" value="accessories"> Accessories
                            </label>
                        </div>
                    </div>

                    <!-- Edit Filter -->
                    <div class="tj-filter-group mb-4">
                        <h6 class="text-white text-uppercase fw-bold mb-3" style="font-size: 11px; letter-spacing: 1.5px; color: rgba(255,255,255,0.6);">Edit</h6>
                        <div class="d-flex flex-column gap-2">
                            <label class="tj-checkbox-label d-flex align-items-center gap-2 text-white-50" style="font-size: 13px; cursor: pointer;">
                                <input type="checkbox" class="form-check-input mt-0 bg-transparent border-secondary tj-filter-checkbox" data-filter-type="edit" value="featured"> Featured
                            </label>
                            <label class="tj-checkbox-label d-flex align-items-center gap-2 text-white-50" style="font-size: 13px; cursor: pointer;">
                                <input type="checkbox" class="form-check-input mt-0 bg-transparent border-secondary tj-filter-checkbox" data-filter-type="edit" value="trending"> Trending
                            </label>
                            <label class="tj-checkbox-label d-flex align-items-center gap-2 text-white-50" style="font-size: 13px; cursor: pointer;">
                                <input type="checkbox" class="form-check-input mt-0 bg-transparent border-secondary tj-filter-checkbox" data-filter-type="edit" value="new in"> New In
                            </label>
                            <label class="tj-checkbox-label d-flex align-items-center gap-2 text-white-50" style="font-size: 13px; cursor: pointer;">
                                <input type="checkbox" class="form-check-input mt-0 bg-transparent border-secondary tj-filter-checkbox" data-filter-type="edit" value="essentials"> Essentials
                            </label>
                        </div>
                    </div>

                    <!-- Size Filter -->
                    <div class="tj-filter-group mb-4">
                        <h6 class="text-white text-uppercase fw-bold mb-3" style="font-size: 11px; letter-spacing: 1.5px; color: rgba(255,255,255,0.6);">Size</h6>
                        <div class="d-flex flex-wrap gap-2">
                            <?php foreach(['XS', 'S', 'M', 'L', 'XL', 'XXL'] as $size): ?>
                                <span class="tj-size-badge tj-size-filter" data-size="<?php echo $size; ?>"><?php echo $size; ?></span>
                            <?php endforeach; ?>
                            <span class="tj-size-badge tj-size-filter px-3" data-size="one size">One size</span>
                        </div>
                    </div>

                    <!-- Max Price Filter -->
                    <div class="tj-filter-group">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h6 class="text-white text-uppercase fw-bold mb-0" style="font-size: 11px; letter-spacing: 1.5px; color: rgba(255,255,255,0.6);">Max Price</h6>
                            <span class="text-white fw-bold" id="tjPriceOutput" style="font-size: 12px;">$200.00</span>
                        </div>
                        <input type="range" id="tjPriceRange" class="form-range custom-range" min="0" max="200" value="200">
                    </div>

                </div>
            </div>

            <!-- RIGHT SIDE: PRODUCTS AREA -->
            <div class="col-lg-9">
                
                <!-- Top Search & Controls Bar -->
                <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 mb-4">
                    <div class="tj-search-bar flex-grow-1" style="max-width: 400px;">
                        <div class="position-relative">
                            <i class="fa-solid fa-magnifying-glass position-absolute top-50 start-0 translate-middle-y ms-3 text-white-50" style="font-size: 13px;"></i>
                            <input type="text" id="tjProductSearch" class="form-control tj-collection-input ps-5" placeholder="Search products...">
                        </div>
                    </div>
                    
                    <!-- Controls: Product Count, Dropdown Select, and View Buttons -->
                    <div class="d-flex align-items-center gap-3 flex-wrap">
                        <span class="text-white-50" id="tjProductCount" style="font-size: 13px;">Showing <?php echo count($products); ?> of <?php echo count($products); ?> products</span>
                        
                        <!-- Product Select Dropdown Added Here -->
                        <select id="tjProductSortSelect" class="form-select tj-collection-select text-white bg-transparent border-secondary" style="font-size: 13px; width: auto; cursor: pointer;">
                            <option value="default" class="bg-dark text-white">Default Sorting</option>
                            <option value="price-low" class="bg-dark text-white">Price: Low to High</option>
                            <option value="price-high" class="bg-dark text-white">Price: High to Low</option>
                            <option value="rating" class="bg-dark text-white">Highest Rated</option>
                        </select>

                        <div class="d-flex gap-1">
                            <button type="button" id="tjGridViewBtn" class="tj-view-btn active"><i class="fa-solid fa-table-cells-large"></i></button>
                            <button type="button" id="tjListViewBtn" class="tj-view-btn"><i class="fa-solid fa-list"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Products Grid (Dynamic Loop) -->
                <div class="row g-4" id="tjProductsGrid">
                    <?php foreach ($products as $prod): ?>
                    <div class="col-xl-4 col-md-6 tj-product-col" 
                         data-category="<?php echo strtolower($prod['category']); ?>" 
                         data-edit="<?php echo strtolower($prod['edit']); ?>"
                         data-size="<?php echo strtolower($prod['size']); ?>"
                         data-price="<?php echo $prod['price']; ?>">
                        
                        <div class="tj-product-card h-100 d-flex flex-column rounded-4 overflow-hidden position-relative">
                            <?php if ($prod['is_featured']): ?>
                                <span class="tj-featured-badge">FEATURED</span>
                            <?php endif; ?>
                            
                            <!-- Image Linked to Detail Page -->
                            <a href="shop-detail.php?id=<?php echo $prod['id']; ?>" class="tj-product-img-wrapper position-relative overflow-hidden d-block" style="height: 320px;">
                                <img src="<?php echo $prod['image']; ?>" alt="<?php echo htmlspecialchars($prod['title']); ?>" class="w-100 h-100 object-fit-cover">
                                <div class="tj-img-overlay"></div>
                            </a>

                            <div class="tj-product-content p-4 d-flex flex-column flex-grow-1 justify-content-between">
                                <div>
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <div class="text-warning" style="font-size: 12px;"><i class="fa-solid fa-star"></i> <span class="text-white fw-bold ms-1"><?php echo $prod['rating']; ?></span></div>
                                        <span class="text-white-50" style="font-size: 12px;">· <?php echo $prod['reviews']; ?> reviews</span>
                                    </div>
                                    <!-- Title Linked to Detail Page -->
                                    <h5 class="mb-2 fs-6 tj-product-title">
                                        <a href="shop-detail.php?id=<?php echo $prod['id']; ?>" class="text-white fw-bold text-decoration-none"><?php echo htmlspecialchars($prod['title']); ?></a>
                                    </h5>
                                    <p class="text-white-50 mb-3 tj-product-desc" style="font-size: 12px; line-height: 1.5;"><?php echo htmlspecialchars($prod['desc']); ?></p>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <?php foreach ($prod['colors'] as $index => $color): ?>
                                            <span class="tj-color-dot <?php echo $index > 0 ? 'ms-2' : ''; ?>" style="background-color: <?php echo $color['hex']; ?>;" title="<?php echo $color['name']; ?>"></span> 
                                            <span class="text-white-50" style="font-size: 11px;"><?php echo $color['name']; ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between pt-3 border-top border-secondary border-opacity-25">
                                        <div>
                                            <span class="text-white fw-bold fs-5">$<?php echo number_format($prod['price'], 2); ?></span>
                                            <?php if (!empty($prod['old_price'])): ?>
                                                <span class="text-white-50 text-decoration-line-through ms-2" style="font-size: 12px;">$<?php echo number_format($prod['old_price'], 2); ?></span>
                                            <?php endif; ?>
                                        </div>
                                        <!-- View Details Link Connected -->
                                        <a href="shop-detail.php?id=<?php echo $prod['id']; ?>" class="tj-view-details-link text-white text-decoration-none d-flex align-items-center gap-1 fw-bold" style="font-size: 12px;">
                                            View Details <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

            </div>

        </div>
    </div>
</main>
<!-- Body Content End Here -->

<!-- Integrated Filtering & Toggle Script -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const filterCheckboxes = document.querySelectorAll(".tj-filter-checkbox");
    const sizeBadges = document.querySelectorAll(".tj-size-filter");
    const priceRange = document.getElementById("tjPriceRange");
    const priceOutput = document.getElementById("tjPriceOutput");
    const productCols = document.querySelectorAll(".tj-product-col");
    const searchInput = document.getElementById("tjProductSearch");
    const productCountEl = document.getElementById("tjProductCount");
    const resetBtn = document.getElementById("tjResetFilters");

    let selectedSizes = [];

    function filterProducts() {
        const searchQuery = searchInput.value.toLowerCase().trim();
        const maxPrice = parseFloat(priceRange.value);

        const checkedCategories = Array.from(document.querySelectorAll('.tj-filter-checkbox[data-filter-type="category"]:checked')).map(cb => cb.value);
        const checkedEdits = Array.from(document.querySelectorAll('.tj-filter-checkbox[data-filter-type="edit"]:checked')).map(cb => cb.value);

        let visibleCount = 0;

        productCols.forEach(col => {
            const title = col.querySelector(".tj-product-title").innerText.toLowerCase();
            const desc = col.querySelector(".tj-product-desc").innerText.toLowerCase();
            const categories = col.getAttribute("data-category");
            const edit = col.getAttribute("data-edit");
            const sizes = col.getAttribute("data-size");
            const price = parseFloat(col.getAttribute("data-price"));

            const matchesSearch = title.includes(searchQuery) || desc.includes(searchQuery);
            const matchesCategory = checkedCategories.length === 0 || checkedCategories.some(cat => categories.includes(cat));
            const matchesEdit = checkedEdits.length === 0 || checkedEdits.some(ed => edit.includes(ed));
            const matchesSize = selectedSizes.length === 0 || selectedSizes.some(sz => sizes.includes(sz));
            const matchesPrice = price <= maxPrice;

            if (matchesSearch && matchesCategory && matchesEdit && matchesSize && matchesPrice) {
                col.style.display = "block";
                visibleCount++;
            } else {
                col.style.display = "none";
            }
        });

        productCountEl.innerText = `Showing ${visibleCount} of ${productCols.length} products`;
    }

    filterCheckboxes.forEach(cb => cb.addEventListener("change", filterProducts));
    searchInput.addEventListener("input", filterProducts);

    sizeBadges.forEach(badge => {
        badge.addEventListener("click", function () {
            this.classList.toggle("active");
            const sizeVal = this.getAttribute("data-size").toLowerCase();
            
            if (this.classList.contains("active")) {
                selectedSizes.push(sizeVal);
            } else {
                selectedSizes = selectedSizes.filter(s => s !== sizeVal);
            }
            filterProducts();
        });
    });

    priceRange.addEventListener("input", function () {
        priceOutput.innerText = "$" + parseFloat(this.value).toFixed(2);
        filterProducts();
    });

    resetBtn.addEventListener("click", function () {
        filterCheckboxes.forEach(cb => cb.checked = false);
        sizeBadges.forEach(b => b.classList.remove("active"));
        selectedSizes = [];
        priceRange.value = 200;
        priceOutput.innerText = "$200.00";
        searchInput.value = "";
        filterProducts();
    });

    // Grid / List Layout Toggle
    const gridViewBtn = document.getElementById("tjGridViewBtn");
    const listViewBtn = document.getElementById("tjListViewBtn");
    const productsGrid = document.getElementById("tjProductsGrid");

    gridViewBtn.addEventListener("click", function () {
        gridViewBtn.classList.add("active");
        listViewBtn.classList.remove("active");
        productsGrid.classList.remove("list-view-mode");
        productCols.forEach(col => {
            col.className = "col-xl-4 col-md-6 tj-product-col";
        });
    });

    listViewBtn.addEventListener("click", function () {
        listViewBtn.classList.add("active");
        gridViewBtn.classList.remove("active");
        productsGrid.classList.add("list-view-mode");
        productCols.forEach(col => {
            col.className = "col-12 tj-product-col";
        });
    });
});
</script>

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->