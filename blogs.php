<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- Body Content Start Here -->

<!-- banner Include Here  -->
<?php
$pageTitle = "THE RIDER'S JOURNAL";
$pageDesc = "Stories, guides, motorcycle culture, maintenance tips and everything that keeps the passion alive.";

$breadcrumbs = array(
    array('label' => 'Home', 'url' => './'),
    array('label' => 'Blog', 'url' => '/blog.php')
);

$showSearch = true;
$searchPlaceholder = "Search the journal...";

$showTabs = true;
$tabsList = array(
    array('id' => 'all', 'label' => 'ALL'),
    array('id' => 'bike-culture', 'label' => 'BIKE CULTURE'),
    array('id' => 'riding-guides', 'label' => 'RIDING GUIDES'),
    array('id' => 'maintenance', 'label' => 'MAINTENANCE'),
    array('id' => 'gear', 'label' => 'GEAR'),
    array('id' => 'heritage', 'label' => 'HERITAGE'),
    array('id' => 'travel', 'label' => 'TRAVEL')
);

include 'inc/sub-banner.php';
?>
<!-- banner Include Here  -->

<!-- blogs-page-section Starts Here  -->
<section class="blogs-page-section section">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-12">
                <div class="blogs______wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="blogs_____image">
                                <figure>
                                    <img src="img/blog-img1.png" alt="" class="img-fluid">
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blogs______content">
                                <span class="level-10 sub-font extra-color-1 letter-spacing-3">Bike Culture</span>
                                <h2 class="ml14 level-3-lg sub-heading-font extra-color-7 text-uppercase letter-spacing-1 mt-2">
                                    <span class="letters">The Evolution of Motorcycle Heritage</span>
                                </h2>
                                <p class="level-8 para-font extra-color-6">From post-war clubs to modern performance culture — how the motorcycle became a
                                    symbol of freedom, craft and brotherhood.</p>
                                <p class="level-10 sub-font extra-color-6 letter-spacing-3">August 28, 2026 · 8 min read</p>
                                <a href="blogs-detail" class="btn blogs_____btn gap-2">Read Story <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blogs______wrapper">
                    <div class="blogs_____image">
                        <figure>
                            <img src="img/blog-img2.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                    <div class="blogs______content p-3">
                        <span class="level-10 sub-font extra-color-1 letter-spacing-3">Heritage</span>
                        <h4 class="ml14 level-4 sub-heading-font extra-color-7 text-uppercase letter-spacing-1 line-clamp-2 mt-2">
                            <span class="letters">The Hollister 1947 Event: Birth of Biker
                                Culture</span>
                        </h4>
                        <p class="level-8 para-font extra-color-6 line-clamp-2">One weekend in California rewrote how the world saw
                            riders — and built a legend that still rides today.</p>
                        <p class="level-10 sub-font extra-color-6 letter-spacing-3">August 21, 2026 · 6 min read</p>
                        <a href="blogs-detail" class="level-10 sub-font extra-color-1 letter-spacing-3 text-uppercase text-decoration-none">Read Article <span><i class="fa-solid fa-arrow-right ms-2"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blogs______wrapper">
                    <div class="blogs_____image">
                        <figure>
                            <img src="img/blog-img3.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                    <div class="blogs______content p-3">
                        <span class="level-10 sub-font extra-color-1 letter-spacing-3">Riding Guides</span>
                        <h4 class="ml14 level-4 sub-heading-font extra-color-7 text-uppercase letter-spacing-1 line-clamp-2 mt-2">
                            <span class="letters">Cruiser vs Sport: Choosing Your Riding
                                Style</span>
                        </h4>
                        <p class="level-8 para-font extra-color-6 line-clamp-2">Two philosophies, two machines. Here is how to pick the
                            platform that matches how you actually ride.</p>
                        <p class="level-10 sub-font extra-color-6 letter-spacing-3">August 14, 2026 · 7 min read</p>
                        <a href="blogs-detail" class="level-10 sub-font extra-color-1 letter-spacing-3 text-uppercase text-decoration-none">Read Article <span><i class="fa-solid fa-arrow-right ms-2"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blogs______wrapper">
                    <div class="blogs_____image">
                        <figure>
                            <img src="img/blog-img4.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                    <div class="blogs______content p-3">
                        <span class="level-10 sub-font extra-color-1 letter-spacing-3">Maintenance</span>
                        <h4 class="ml14 level-4 sub-heading-font extra-color-7 text-uppercase letter-spacing-1 line-clamp-2 mt-2">
                            <span class="letters">Essential Maintenance for Long
                                Distance Touring</span>
                        </h4>
                        <p class="level-8 para-font extra-color-6 line-clamp-2">The pre-ride checklist that keeps 1,000-mile weeks
                            boring — in the best possible way.</p>
                        <p class="level-10 sub-font extra-color-6 letter-spacing-3">August 7, 2026 · 9 min read</p>
                        <a href="blogs-detail" class="level-10 sub-font extra-color-1 letter-spacing-3 text-uppercase text-decoration-none">Read Article <span><i class="fa-solid fa-arrow-right ms-2"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blogs______wrapper">
                    <div class="blogs_____image">
                        <figure>
                            <img src="img/blog-img5.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                    <div class="blogs______content p-3">
                        <span class="level-10 sub-font extra-color-1 letter-spacing-3">Gear</span>
                        <h4 class="ml14 level-4 sub-heading-font extra-color-7 text-uppercase letter-spacing-1 line-clamp-2 mt-2">
                            <span class="letters">Gear That Lasts: Reading Leather Like a
                                Pro</span>
                        </h4>
                        <p class="level-8 para-font extra-color-6 line-clamp-2">Grain, tannage, stitch density. A field guide to spotting
                            jackets built for decades, not seasons.</p>
                        <p class="level-10 sub-font extra-color-6 letter-spacing-3">July 30, 2026 · 5 min read</p>
                        <a href="blogs-detail" class="level-10 sub-font extra-color-1 letter-spacing-3 text-uppercase text-decoration-none">Read Article <span><i class="fa-solid fa-arrow-right ms-2"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blogs______wrapper">
                    <div class="blogs_____image">
                        <figure>
                            <img src="img/blog-img6.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                    <div class="blogs______content p-3">
                        <span class="level-10 sub-font extra-color-1 letter-spacing-3">Travel</span>
                        <h4 class="ml14 level-4 sub-heading-font extra-color-7 text-uppercase letter-spacing-1 line-clamp-2 mt-2">
                            <span class="letters">Coast Road Diaries: Three Days, One Tank
                                Bag</span>
                        </h4>
                        <p class="level-8 para-font extra-color-6 line-clamp-2">A minimal-kit run down the coast with nothing but a tank
                            bag and a very loose plan.</p>
                        <p class="level-10 sub-font extra-color-6 letter-spacing-3">July 22, 2026 · 10 min read</p>
                        <a href="blogs-detail" class="level-10 sub-font extra-color-1 letter-spacing-3 text-uppercase text-decoration-none">Read Article <span><i class="fa-solid fa-arrow-right ms-2"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blogs-page-section Ends Here  -->

<!-- Body Content End Here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->