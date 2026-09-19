<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<!-- banner Include Here  -->
<?php 
$subtitle = "The Story Behind The Label";
$title = "About Us";
$desc = "Discover our journey, our commitments, and the people behind every design.";
$currentPage = "About Us";

include 'inc/inner-banner.php'; 

// ==========================================
// SECTION DATA ARRAYS (For Clean Single-Page Structure)
// ==========================================
$stats = [
    ['num' => '2014', 'label' => 'Founded in Fort Smith'],
    ['num' => '48k+', 'label' => 'Pieces delivered'],
    ['num' => '120', 'label' => 'Artisans & partners'],
    ['num' => '4.9', 'label' => 'Average customer rating']
];

$commitments = [
    ['icon' => 'fa-scissors', 'title' => 'Made with intent', 'desc' => 'Every silhouette is drafted, draped and refined in-house before a single production run is approved.'],
    ['icon' => 'fa-leaf', 'title' => 'Responsible materials', 'desc' => 'Mulberry silk, organic cotton and recycled trims sourced from mills we visit and audit ourselves.'],
    ['icon' => 'fa-ruler-combined', 'title' => 'Fit for real bodies', 'desc' => 'Graded across a wide size range and fit-tested on multiple body types, not a single sample model.'],
    ['icon' => 'fa-globe', 'title' => 'Transparent supply', 'desc' => 'We publish where each collection is made and what our makers are paid, season after season.']
];

$milestones = [
    ['year' => '2014', 'title' => 'A studio of two', 'desc' => 'TJ Apparels begins as a two-person tailoring studio on Garrison Avenue.'],
    ['year' => '2018', 'title' => 'First full collection', 'desc' => 'The Signature line launches, defining our clean, editorial house style.'],
    ['year' => '2021', 'title' => 'Going direct', 'desc' => 'We move online-first so more of every purchase goes back to our makers.'],
    ['year' => '2025', 'title' => 'Beyond apparel', 'desc' => 'Accessories, gifting and a members\' atelier service join the house.']
];

$team = [
    ['name' => 'Tara Jensen', 'role' => 'Founder & Creative Director', 'img' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=800&q=80'],
    ['name' => 'Marcus Vale', 'role' => 'Head of Design', 'img' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=800&q=80'],
    ['name' => 'Amara Osei', 'role' => 'Atelier & Production Lead', 'img' => 'https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=800&q=80']
];
?>
<!-- banner Include Here  -->



<!-- Main Wrapper -->
<div class="tj-about-wrapper">

    <!-- ==========================================
         SECTION 1: STORY & STATS SECTION
    =========================================== -->
    <section id="tj-about-story" class="py-5">
        <div class="container py-2">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="tj-story-img-wrap">
                        <img src="https://images.unsplash.com/photo-1558769132-cb1aea458c5e?auto=format&fit=crop&w=1000&q=80"
                            alt="TJ Apparels Story">
                        <div class="tj-floating-badge">
                            <i class="fa-solid fa-wand-magic-sparkles"></i>
                            <h6>Small-batch by design</h6>
                            <p>No overproduction. Ever.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tj-section-sub">THE HOUSE</div>
                    <h2 class="tj-section-title">We started with one blazer and a stubborn belief in fit</h2>
                    <p class="tj-section-desc">
                        TJ Apparels began in 2014 above a hardware store in Fort Smith, where our founder cut patterns
                        after hours for clients who could never find something that truly fit. Word travelled. The
                        blazer became a collection, the collection became a studio, and the studio became a house with
                        artisans on three continents.
                    </p>
                    <p class="tj-section-desc">
                        We still design the way we did then — one garment at a time, drafted by hand, corrected on real
                        bodies and released only when the drape is right. That patience is why our pieces outlast the
                        season they were made for.
                    </p>

                    <!-- Dynamic Stats Loop -->
                    <div class="tj-stats-grid">
                        <?php foreach($stats as $stat): ?>
                        <div class="tj-stat-card">
                            <h3><?php echo $stat['num']; ?></h3>
                            <p><?php echo $stat['label']; ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ==========================================
         SECTION 2: WHAT WE STAND FOR SECTION
    =========================================== -->
    <section id="tj-about-values" class="py-5 border-top border-bottom"
        style="border-color: var(--tj-border) !important;">
        <div class="container py-2">
            <div class="mb-4">
                <h3 class="text-white fw-bold mb-2" style="font-size: 22px;">What we stand for</h3>
                <p class="text-muted" style="font-size: 13px;">Four commitments that shape every decision from mill to
                    mailer.</p>
            </div>

            <!-- Dynamic Values Loop -->
            <div class="row g-4">
                <?php foreach($commitments as $item): ?>
                <div class="col-lg-3 col-md-6">
                    <div class="tj-stand-card">
                        <div class="tj-stand-icon"><i class="fa-solid <?php echo $item['icon']; ?>"></i></div>
                        <h5><?php echo $item['title']; ?></h5>
                        <p><?php echo $item['desc']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <!-- ==========================================
         SECTION 3: MILESTONES TIMELINE SECTION
    =========================================== -->
    <section id="tj-about-milestones" class="py-5 " style="border-color: var(--tj-border) !important;">
        <div class="container py-2">
            <div class="mb-4">
                <h3 class="text-white fw-bold mb-2" style="font-size: 22px;">Milestones</h3>
                <p class="text-muted" style="font-size: 13px;">A decade of slow, deliberate growth.</p>
            </div>

            <!-- Dynamic Milestones Loop -->
            <div class="row g-4">
                <?php foreach($milestones as $ms): ?>
                <div class="col-lg-3 col-md-6">
                    <div class="tj-milestone-card">
                        <div class="tj-milestone-year"><?php echo $ms['year']; ?></div>
                        <h6><?php echo $ms['title']; ?></h6>
                        <p><?php echo $ms['desc']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <!-- ==========================================
         SECTION 4: TEAM MEMBERS SECTION
    =========================================== -->
    <section id="tj-about-team" class="py-5" style="border-color: var(--tj-border) !important;">
        <div class="container py-2">
            <div class="mb-4">
                <h3 class="text-white fw-bold mb-2" style="font-size: 22px;">The people behind the label</h3>
            </div>

            <!-- Dynamic Team Loop -->
            <div class="row g-4">
                <?php foreach($team as $member): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="tj-team-card">
                        <img src="<?php echo $member['img']; ?>" alt="<?php echo $member['name']; ?>"
                            class="tj-team-img">
                        <div class="tj-team-info">
                            <h5><?php echo $member['name']; ?></h5>
                            <p><?php echo $member['role']; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="tj-security-badges">
                <span class="text-white-50 sub-heading-font level-7"><i class="fa-solid fa-lock text-white-50"></i> Secure Checkout</span>
                <span class="text-white-50 sub-heading-font level-7"><i class="fa-solid fa-rotate-left text-white-50"></i> Easy Returns</span>
                <span class="text-white-50 sub-heading-font level-7"><i class="fa-solid fa-rotate-left text-white-50"></i> Fast Delivery</span>
            </div>
        </div>
    </section>


    <!-- ==========================================
         SECTION 5: CTA BANNER SECTION
    =========================================== -->
    <section id="tj-about-cta" class="py-5">
        <div class="container py-2">
            <div class="row g-4 align-items-center">
                <div class="col-12">
                    <div
                        class="tj-cta-banner d-flex flex-lg-row flex-column justify-content-between align-items-lg-center gap-4">
                        <div>
                            <div class="tj-section-sub mb-2">JOIN THE HOUSE</div>
                            <h3>Discover the current collection</h3>
                            <p>Explore the pieces our atelier is making right now, or talk to a stylist about something
                                tailored.</p>
                        </div>
                        <div class="d-flex gap-3 flex-wrap">
                            <a href="shop.php" class="tj-btn-primary-custom">Shop Collection</a>
                            <a href="contact.php" class="tj-btn-outline-custom">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->