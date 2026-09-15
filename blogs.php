<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- banner Include Here  -->
<?php 
$subtitle = "Editorial";
$title = "Fashion Insights";
$desc = "Stay updated with the latest trends, styling tips, and fashion inspiration from our expert curators.";
$currentPage = "Blog";

include 'inc/inner-banner.php'; 
?>
<!-- banner Include Here  -->

<style>
    :root {
        --tj-border: rgba(135, 120, 255, 0.16);
        --tj-purple: #7d35e8;
        --tj-pink: #e936a7;
    }

    .tj-blog-section {
        background-color: #0b0b1a;
        position: relative;
        overflow: hidden;
    }

    /* Glow Background Elements */
    .tj-blog-glow {
        position: absolute;
        width: 350px;
        height: 350px;
        border-radius: 50%;
        filter: blur(100px);
        z-index: 1;
        opacity: 0.15;
    }
    .tj-blog-glow-1 {
        top: 10%;
        left: -5%;
        background: var(--tj-purple);
    }
    .tj-blog-glow-2 {
        bottom: 10%;
        right: -5%;
        background: var(--tj-pink);
    }

    /* Section Headings */
    .tj-section-subtitle {
        color: var(--tj-pink);
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 2px;
    }

    .tj-section-title {
        color: #fff;
        font-size: 28px;
    }

    .tj-section-desc {
        color: rgba(255, 255, 255, 0.6);
        font-size: 13.5px;
    }

    /* Search & Filter Styling */
    .tj-blog-search-input {
        background: linear-gradient(145deg, rgba(17, 17, 43, 0.8), rgba(10, 10, 26, 0.9));
        border: 1px solid var(--tj-border);
        border-radius: 50px;
        padding: 12px 20px 12px 45px;
        color: #fff;
        font-size: 13px;
        outline: none;
        transition: 0.3s;
        width: 250px;
    }

    .tj-blog-search-input::placeholder {
        color: rgba(255, 255, 255, 0.3);
    }

    .tj-blog-search-input:focus {
        border-color: var(--tj-pink);
        box-shadow: 0 0 15px rgba(233, 54, 167, 0.2);
    }

    .tj-filter-btn {
        background: linear-gradient(145deg, rgba(17, 17, 43, 0.8), rgba(10, 10, 26, 0.9));
        border: 1px solid var(--tj-border);
        border-radius: 50px;
        padding: 10px 22px;
        color: rgba(255, 255, 255, 0.7);
        font-size: 12.5px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
    }

    .tj-filter-btn:hover,
    .tj-filter-btn.active {
        background: linear-gradient(135deg, var(--tj-purple), var(--tj-pink));
        border-color: transparent;
        color: #fff;
        box-shadow: 0 4px 15px rgba(125, 53, 232, 0.3);
    }

    /* Blog Card Styling */
    .tj-blog-card {
        background: linear-gradient(145deg, rgba(17, 17, 43, 0.85), rgba(10, 10, 26, 0.9));
        border: 1px solid var(--tj-border);
        border-radius: 16px;
        overflow: hidden;
        transition: 0.3s ease;
        height: 100%;
    }

    .tj-blog-card:hover {
        border-color: rgba(125, 53, 232, 0.4);
        transform: translateY(-5px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.4);
    }

    .tj-blog-img-wrapper {
        height: 200px;
        overflow: hidden;
    }

    .tj-blog-img-wrapper img {
        height: 100%;
        transition: transform 0.4s ease;
    }

    .tj-blog-card:hover .tj-blog-img-wrapper img {
        transform: scale(1.05);
    }

    .tj-blog-badge {
        background: linear-gradient(135deg, var(--tj-purple), var(--tj-pink));
        color: #fff;
        font-size: 10.5px;
        font-weight: 700;
        padding: 4px 12px;
        border-radius: 50px;
        z-index: 2;
    }

    .tj-blog-meta {
        color: rgba(255, 255, 255, 0.45);
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    .tj-blog-title {
        font-size: 14.5px !important;
        line-height: 1.4;
        transition: color 0.3s;
    }

    .tj-blog-card:hover .tj-blog-title {
        color: var(--tj-pink) !important;
    }

    .tj-tag-pill {
        background: rgba(135, 120, 255, 0.08);
        border: 1px solid var(--tj-border);
        color: rgba(255, 255, 255, 0.65);
        font-size: 10.5px;
        padding: 3px 10px;
        border-radius: 50px;
    }

    .tj-read-more {
        color: var(--tj-pink);
        transition: 0.3s;
    }

    .tj-read-more:hover {
        color: #fff;
    }
</style>

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
                        <i class="fa-solid fa-magnifying-glass position-absolute top-50 translate-middle-y ms-3 text-white-50 small"></i>
                        <input type="text" class="form-control tj-blog-search-input ps-5" id="tjBlogSearch" placeholder="Search blog posts...">
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
                            <img src="https://images.unsplash.com/photo-1558769132-cb1aea458c5e?auto=format&fit=crop&w=600&q=80" alt="Sustainable Fashion" class="w-100 object-fit-cover">
                        </div>
                        
                        <!-- Content -->
                        <div class="p-4">
                            <span class="tj-blog-meta d-block text-uppercase mb-2">January 20, 2025 · 6 min read</span>
                            <h4 class="tj-blog-title text-white fw-bold mb-2">Sustainable Fashion Revolution: Style with Purpose</h4>
                            <p class="tj-blog-excerpt small text-white-50 mb-3">Discover how eco-conscious choices are reshaping the fashion industry and how you can join the movement without compromising on style.</p>
                            
                            <!-- Tags Pills -->
                            <div class="d-flex flex-wrap gap-1 pb-3">
                                <span class="tj-tag-pill">Sustainable Fashion</span>
                                <span class="tj-tag-pill">Eco-Friendly</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card Footer -->
                    <div class="px-4 pb-4 pt-0 d-flex align-items-center justify-content-between">
                        <span class="tj-blog-likes small text-white-50"><i class="fa-solid fa-heart text-danger me-1"></i> 423</span>
                        <a href="blogs-detail" class="tj-read-more text-decoration-none small fw-bold">Read More <i class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-xl-3 col-lg-6 col-md-6 tj-blog-item" data-category="popular">
                <div class="tj-blog-card d-flex flex-column justify-content-between">
                    <div>
                        <div class="tj-blog-img-wrapper position-relative">
                            <span class="tj-blog-badge position-absolute top-0 start-0 m-3">Fashion</span>
                            <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?auto=format&fit=crop&w=600&q=80" alt="Capsule Wardrobe" class="w-100 object-fit-cover">
                        </div>
                        <div class="p-4">
                            <span class="tj-blog-meta d-block text-uppercase mb-2">January 15, 2025 · 4 min read</span>
                            <h4 class="tj-blog-title text-white fw-bold mb-2">Capsule Wardrobe Mastery: 30 Pieces, Endless Possibilities</h4>
                            <p class="tj-blog-excerpt small text-white-50 mb-3">Learn the art of building a versatile capsule wardrobe that maximizes style while minimizing clutter and decision fatigue.</p>
                            <div class="d-flex flex-wrap gap-1 pb-3">
                                <span class="tj-tag-pill">Capsule Wardrobe</span>
                                <span class="tj-tag-pill">Minimalism</span>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pb-4 pt-0 d-flex align-items-center justify-content-between">
                        <span class="tj-blog-likes small text-white-50"><i class="fa-solid fa-heart text-danger me-1"></i> 392</span>
                        <a href="#" class="tj-read-more text-decoration-none small fw-bold">Read More <i class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-xl-3 col-lg-6 col-md-6 tj-blog-item" data-category="latest">
                <div class="tj-blog-card d-flex flex-column justify-content-between">
                    <div>
                        <div class="tj-blog-img-wrapper position-relative">
                            <span class="tj-blog-badge position-absolute top-0 start-0 m-3">Fashion</span>
                            <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?auto=format&fit=crop&w=600&q=80" alt="Color Psychology" class="w-100 object-fit-cover">
                        </div>
                        <div class="p-4">
                            <span class="tj-blog-meta d-block text-uppercase mb-2">January 10, 2025 · 5 min read</span>
                            <h4 class="tj-blog-title text-white fw-bold mb-2">Color Psychology in Fashion: Dress for Success</h4>
                            <p class="tj-blog-excerpt small text-white-50 mb-3">Unlock the power of color to influence mood, confidence, and how others perceive you through strategic wardrobe choices.</p>
                            <div class="d-flex flex-wrap gap-1 pb-3">
                                <span class="tj-tag-pill">Color Psychology</span>
                                <span class="tj-tag-pill">Professional Style</span>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pb-4 pt-0 d-flex align-items-center justify-content-between">
                        <span class="tj-blog-likes small text-white-50"><i class="fa-solid fa-heart text-danger me-1"></i> 318</span>
                        <a href="#" class="tj-read-more text-decoration-none small fw-bold">Read More <i class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-xl-3 col-lg-6 col-md-6 tj-blog-item" data-category="popular">
                <div class="tj-blog-card d-flex flex-column justify-content-between">
                    <div>
                        <div class="tj-blog-img-wrapper position-relative">
                            <span class="tj-blog-badge position-absolute top-0 start-0 m-3">Fashion</span>
                            <img src="https://images.unsplash.com/photo-1539109136881-3be0616acf4b?auto=format&fit=crop&w=600&q=80" alt="Accessorizing" class="w-100 object-fit-cover">
                        </div>
                        <div class="p-4">
                            <span class="tj-blog-meta d-block text-uppercase mb-2">January 5, 2025 · 4 min read</span>
                            <h4 class="tj-blog-title text-white fw-bold mb-2">The Art of Accessorizing: Small Details, Big Impact</h4>
                            <p class="tj-blog-excerpt small text-white-50 mb-3">Master the finishing touches that elevate any outfit from ordinary to extraordinary with the right accessories.</p>
                            <div class="d-flex flex-wrap gap-1 pb-3">
                                <span class="tj-tag-pill">Accessories</span>
                                <span class="tj-tag-pill">Styling Tips</span>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 pb-4 pt-0 d-flex align-items-center justify-content-between">
                        <span class="tj-blog-likes small text-white-50"><i class="fa-solid fa-heart text-danger me-1"></i> 267</span>
                        <a href="#" class="tj-read-more text-decoration-none small fw-bold">Read More <i class="fa-solid fa-arrow-right ms-1"></i></a>
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
                if(searchInput) searchInput.value = "";
            });
        });

        // Search Functionality
        if(searchInput) {
            searchInput.addEventListener("keyup", function() {
                const searchTerm = this.value.toLowerCase().trim();

                blogItems.forEach(item => {
                    const title = item.querySelector(".tj-blog-title").textContent.toLowerCase();
                    const excerpt = item.querySelector(".tj-blog-excerpt").textContent.toLowerCase();

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