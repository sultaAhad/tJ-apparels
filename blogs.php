<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- banner Include Here  -->
<?php 
$subtitle = "Saved";
$title = "Blogs";
$desc = "Stay updated with the latest trends, styling tips, and fashion inspiration from our expert curators.";
$currentPage = "Blog";

include 'inc/inner-banner.php'; 
?>
<!-- banner Include Here  -->



<!-- Body Content Start Here -->
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
                        <i
                            class="fa-solid fa-magnifying-glass position-absolute top-50 translate-middle-y ms-3 text-white-50 small"></i>
                        <input type="text" class="form-control tj-blog-search-input ps-5" id="tjBlogSearch"
                            placeholder="Search blog posts...">
                    </div>

                    <!-- Filter Buttons -->
                    <div class="tj-blog-filter-btns d-flex gap-2">
                        <button type="button" class="tj-filter-btn active" data-filter="all">All</button>
                        <button type="button" class="tj-filter-btn" data-filter="latest">Latest</button>
                        <button type="button" class="tj-filter-btn" data-filter="popular">Popular</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog Cards Grid (4 Columns) -->
        <div class="row g-4" id="tjBlogGrid">

            <!-- Card 1 -->
            <div class="col-xl-3 col-lg-6 col-md-6 tj-blog-item" data-category="latest">
                <div class="tj-blog-card d-flex flex-column justify-content-between">
                    <div>
                        <!-- Card Image / Header -->
                        <div class="tj-blog-img-wrapper position-relative">
                            <span class="tj-blog-badge position-absolute top-0 start-0 m-3">Fashion</span>
                            <img src="img/artical6.png" alt="Sustainable Fashion" class="w-100 object-fit-cover">
                        </div>

                        <!-- Content -->
                        <div class="p-4">
                            <span class="tj-blog-meta d-block text-uppercase mb-2">January 20, 2025 · 6 min read</span>
                            <h4 class="tj-blog-title text-white fw-bold mb-2">Sustainable Fashion Revolution: Style with
                                Purpose</h4>
                            <p class="tj-blog-excerpt small text-white-50 mb-3">Discover how eco-conscious choices are
                                reshaping the fashion industry and how you can join the movement without compromising on
                                style.</p>

                            <!-- Tags Pills -->
                            <div class="d-flex flex-wrap gap-1 pb-3">
                                <span class="tj-tag-pill">Sustainable Fashion</span>
                                <span class="tj-tag-pill">Eco-Friendly</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card Footer -->
                    <div class="px-4 pb-4 pt-0 d-flex align-items-center justify-content-between">
                        <span class="tj-blog-likes small text-white-50"><i
                                class="fa-solid fa-heart text-danger me-1"></i> 423</span>
                        <a href="blogs-detail" class="tj-read-more text-decoration-none small fw-bold">Read More <i
                                class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-xl-3 col-lg-6 col-md-6 tj-blog-item" data-category="popular">
                <div class="tj-blog-card d-flex flex-column justify-content-between">
                    <div>
                        <div class="tj-blog-img-wrapper position-relative">
                            <span class="tj-blog-badge position-absolute top-0 start-0 m-3">Fashion</span>
                            <img src="img/artical5.png" alt="Capsule Wardrobe" class="w-100 object-fit-cover">
                        </div>
                        <div class="p-4">
                            <span class="tj-blog-meta d-block text-uppercase mb-2">January 15, 2025 · 4 min read</span>
                            <h4 class="tj-blog-title text-white fw-bold mb-2">Capsule Wardrobe Mastery: 30 Pieces,
                                Endless Possibilities</h4>
                            <p class="tj-blog-excerpt small text-white-50 mb-3">Learn the art of building a versatile
                                capsule wardrobe that maximizes style while minimizing clutter and decision fatigue.</p>
                            <div class="d-flex flex-wrap gap-1 pb-3">
                                <span class="tj-tag-pill">Capsule Wardrobe</span>
                                <span class="tj-tag-pill">Minimalism</span>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pb-4 pt-0 d-flex align-items-center justify-content-between">
                        <span class="tj-blog-likes small text-white-50"><i
                                class="fa-solid fa-heart text-danger me-1"></i> 392</span>
                        <a href="#" class="tj-read-more text-decoration-none small fw-bold">Read More <i
                                class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-xl-3 col-lg-6 col-md-6 tj-blog-item" data-category="latest">
                <div class="tj-blog-card d-flex flex-column justify-content-between">
                    <div>
                        <div class="tj-blog-img-wrapper position-relative">
                            <span class="tj-blog-badge position-absolute top-0 start-0 m-3">Fashion</span>
                            <img src="img/artical4.png" alt="Color Psychology" class="w-100 object-fit-cover">
                        </div>
                        <div class="p-4">
                            <span class="tj-blog-meta d-block text-uppercase mb-2">January 10, 2025 · 5 min read</span>
                            <h4 class="tj-blog-title text-white fw-bold mb-2">Color Psychology in Fashion: Dress for
                                Success</h4>
                            <p class="tj-blog-excerpt small text-white-50 mb-3">Unlock the power of color to influence
                                mood, confidence, and how others perceive you through strategic wardrobe choices.</p>
                            <div class="d-flex flex-wrap gap-1 pb-3">
                                <span class="tj-tag-pill">Color Psychology</span>
                                <span class="tj-tag-pill">Professional Style</span>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pb-4 pt-0 d-flex align-items-center justify-content-between">
                        <span class="tj-blog-likes small text-white-50"><i
                                class="fa-solid fa-heart text-danger me-1"></i> 318</span>
                        <a href="#" class="tj-read-more text-decoration-none small fw-bold">Read More <i
                                class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-xl-3 col-lg-6 col-md-6 tj-blog-item" data-category="popular">
                <div class="tj-blog-card d-flex flex-column justify-content-between">
                    <div>
                        <div class="tj-blog-img-wrapper position-relative">
                            <span class="tj-blog-badge position-absolute top-0 start-0 m-3">Fashion</span>
                            <img src="img/artical3.png" alt="Accessorizing" class="w-100 object-fit-cover">
                        </div>
                        <div class="p-4">
                            <span class="tj-blog-meta d-block text-uppercase mb-2">January 5, 2025 · 4 min read</span>
                            <h4 class="tj-blog-title text-white fw-bold mb-2">The Art of Accessorizing: Small Details,
                                Big Impact</h4>
                            <p class="tj-blog-excerpt small text-white-50 mb-3">Master the finishing touches that
                                elevate any outfit from ordinary to extraordinary with the right accessories.</p>
                            <div class="d-flex flex-wrap gap-1 pb-3">
                                <span class="tj-tag-pill">Accessories</span>
                                <span class="tj-tag-pill">Styling Tips</span>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pb-4 pt-0 d-flex align-items-center justify-content-between">
                        <span class="tj-blog-likes small text-white-50"><i
                                class="fa-solid fa-heart text-danger me-1"></i> 267</span>
                        <a href="#" class="tj-read-more text-decoration-none small fw-bold">Read More <i
                                class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Body Content End Here -->

<!-- Blog Filter & Search Script -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const filterBtns = document.querySelectorAll(".tj-filter-btn");
    const blogItems = document.querySelectorAll(".tj-blog-item");
    const searchInput = document.getElementById("tjBlogSearch");

    // Filter Functionality
    filterBtns.forEach(btn => {
        btn.addEventListener("click", function() {
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

            // Reset search when filtering
            if (searchInput) searchInput.value = "";
        });
    });

    // Search Functionality
    if (searchInput) {
        searchInput.addEventListener("keyup", function() {
            const searchTerm = this.value.toLowerCase().trim();

            blogItems.forEach(item => {
                const title = item.querySelector(".tj-blog-title").textContent.toLowerCase();
                const excerpt = item.querySelector(".tj-blog-excerpt").textContent
            .toLowerCase();

                if (title.includes(searchTerm) || excerpt.includes(searchTerm)) {
                    item.style.display = "block";
                } else {
                    item.style.display = "none";
                }
            });
        });
    }
});
</script>

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->