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
?>
<!-- banner Include Here  -->

<style>
    :root {
        --tj-border: rgba(135, 120, 255, 0.16);
        --tj-purple: #7d35e8;
        --tj-pink: #e936a7;
    }

    .tj-about-section {
        background-color: #0b0b1a;
        position: relative;
    }

    /* Main Story Section */
    .tj-story-img-wrap {
        position: relative;
        border-radius: 24px;
        overflow: hidden;
        border: 1px solid var(--tj-border);
        background: #11112b;
    }

    .tj-story-img-wrap img {
        width: 100%;
        height: 520px;
        object-fit: cover;
    }

    .tj-floating-badge {
        position: absolute;
        bottom: 20px;
        left: 20px;
        background: rgba(11, 11, 26, 0.85);
        backdrop-filter: blur(10px);
        border: 1px solid var(--tj-border);
        padding: 15px 20px;
        border-radius: 14px;
        max-width: 240px;
    }

    .tj-floating-badge i {
        color: var(--tj-pink);
        font-size: 14px;
        margin-bottom: 6px;
        display: block;
    }

    .tj-floating-badge h6 {
        font-size: 12px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 3px;
    }

    .tj-floating-badge p {
        font-size: 10px;
        color: rgba(255, 255, 255, 0.5);
        margin: 0;
    }

    .tj-section-sub {
        font-size: 11px;
        letter-spacing: 2px;
        color: #f39c12;
        text-transform: uppercase;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .tj-section-title {
        font-size: 32px;
        font-weight: 800;
        color: #fff;
        margin-bottom: 20px;
        line-height: 1.3;
    }

    .tj-section-desc {
        color: rgba(255, 255, 255, 0.65);
        font-size: 13.5px;
        line-height: 1.7;
        margin-bottom: 15px;
    }

    /* Stats Grid */
    .tj-stats-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
        margin-top: 30px;
    }

    .tj-stat-card {
        background: linear-gradient(145deg, rgba(17, 17, 43, 0.8), rgba(10, 10, 26, 0.9));
        border: 1px solid var(--tj-border);
        border-radius: 16px;
        padding: 20px;
        transition: 0.3s;
    }

    .tj-stat-card:hover {
        border-color: rgba(125, 53, 232, 0.4);
    }

    .tj-stat-card h3 {
        font-size: 24px;
        font-weight: 800;
        color: #fff;
        margin-bottom: 4px;
    }

    .tj-stat-card p {
        font-size: 11px;
        color: rgba(255, 255, 255, 0.5);
        margin: 0;
    }

    /* What We Stand For Section */
    .tj-stand-card {
        background: linear-gradient(145deg, rgba(17, 17, 43, 0.8), rgba(10, 10, 26, 0.9));
        border: 1px solid var(--tj-border);
        border-radius: 20px;
        padding: 25px;
        height: 100%;
        transition: 0.3s;
    }

    .tj-stand-card:hover {
        border-color: var(--tj-pink);
        box-shadow: 0 4px 20px rgba(233, 54, 167, 0.15);
    }

    .tj-stand-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        background: rgba(125, 53, 232, 0.1);
        border: 1px solid rgba(125, 53, 232, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--tj-pink);
        font-size: 15px;
        margin-bottom: 15px;
    }

    .tj-stand-card h5 {
        font-size: 14px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 10px;
    }

    .tj-stand-card p {
        font-size: 11.5px;
        color: rgba(255, 255, 255, 0.55);
        line-height: 1.6;
        margin: 0;
    }

    /* Milestones Timeline */
    .tj-milestone-card {
        background: linear-gradient(145deg, rgba(17, 17, 43, 0.8), rgba(10, 10, 26, 0.9));
        border: 1px solid var(--tj-border);
        border-radius: 18px;
        padding: 22px;
        height: 100%;
    }

    .tj-milestone-year {
        font-size: 12px;
        font-weight: 700;
        color: #00d2ff;
        margin-bottom: 10px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .tj-milestone-card h6 {
        font-size: 14px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 8px;
    }

    .tj-milestone-card p {
        font-size: 11.5px;
        color: rgba(255, 255, 255, 0.55);
        line-height: 1.6;
        margin: 0;
    }

    /* Team Cards */
    .tj-team-card {
        border-radius: 20px;
        overflow: hidden;
        border: 1px solid var(--tj-border);
        background: linear-gradient(145deg, rgba(17, 17, 43, 0.9), rgba(10, 10, 26, 0.95));
        height: 100%;
    }

    .tj-team-img {
        width: 100%;
        height: 380px;
        object-fit: cover;
    }

    .tj-team-info {
        padding: 20px;
    }

    .tj-team-info h5 {
        font-size: 15px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 4px;
    }

    .tj-team-info p {
        font-size: 11px;
        color: rgba(255, 255, 255, 0.5);
        margin: 0;
    }

    /* CTA Banner */
    .tj-cta-banner {
        background: linear-gradient(145deg, rgba(17, 17, 43, 0.95), rgba(10, 10, 26, 0.98));
        border: 1px solid var(--tj-border);
        border-radius: 24px;
        padding: 40px;
        position: relative;
        overflow: hidden;
    }

    .tj-cta-banner h3 {
        font-size: 26px;
        font-weight: 800;
        color: #fff;
        margin-bottom: 10px;
    }

    .tj-cta-banner p {
        font-size: 13px;
        color: rgba(255, 255, 255, 0.6);
        margin: 0;
        max-width: 600px;
    }

    .tj-btn-primary-custom {
        background: linear-gradient(135deg, var(--tj-purple), var(--tj-pink));
        border: none;
        border-radius: 50px;
        padding: 12px 28px;
        color: #fff;
        font-weight: 600;
        font-size: 13px;
        text-decoration: none;
        display: inline-block;
        box-shadow: 0 4px 15px rgba(125, 53, 232, 0.35);
        transition: 0.3s;
    }

    .tj-btn-primary-custom:hover {
        opacity: 0.9;
        color: #fff;
        box-shadow: 0 6px 20px rgba(233, 54, 167, 0.5);
    }

    .tj-btn-outline-custom {
        background: transparent;
        border: 1px solid var(--tj-border);
        border-radius: 50px;
        padding: 12px 28px;
        color: #fff;
        font-weight: 600;
        font-size: 13px;
        text-decoration: none;
        display: inline-block;
        transition: 0.3s;
    }

    .tj-btn-outline-custom:hover {
        border-color: var(--tj-pink);
        color: #fff;
        background: rgba(233, 54, 167, 0.1);
    }

    @media (max-width: 768px) {
        .tj-story-img-wrap img {
            height: 350px;
        }
        .tj-team-img {
            height: 300px;
        }
    }
</style>

<!-- Body Content Start Here -->
<main class="tj-about-section py-5">
    <div class="container py-4">
        
        <!-- SECTION 1: Story & Stats -->
        <div class="row align-items-center g-5 mb-5 pb-5">
            <div class="col-lg-6">
                <div class="tj-story-img-wrap">
                    <img src="https://images.unsplash.com/photo-1558769132-cb1aea458c5e?auto=format&fit=crop&w=1000&q=80" alt="TJ Apparels Story">
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
                    TJ Apparels began in 2014 above a hardware store in Fort Smith, where our founder cut patterns after hours for clients who could never find something that truly fit. Word travelled. The blazer became a collection, the collection became a studio, and the studio became a house with artisans on three continents.
                </p>
                <p class="tj-section-desc">
                    We still design the way we did then — one garment at a time, drafted by hand, corrected on real bodies and released only when the drape is right. That patience is why our pieces outlast the season they were made for.
                </p>

                <!-- Stats Grid -->
                <div class="tj-stats-grid">
                    <div class="tj-stat-card">
                        <h3>2014</h3>
                        <p>Founded in Fort Smith</p>
                    </div>
                    <div class="tj-stat-card">
                        <h3>48k+</h3>
                        <p>Pieces delivered</p>
                    </div>
                    <div class="tj-stat-card">
                        <h3>120</h3>
                        <p>Artisans & partners</p>
                    </div>
                    <div class="tj-stat-card">
                        <h3>4.9</h3>
                        <p>Average customer rating</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- SECTION 2: What we stand for -->
        <div class="mb-5 pb-5 border-bottom" style="border-color: var(--tj-border) !important;">
            <div class="mb-4">
                <h3 class="text-white fw-bold mb-2" style="font-size: 22px;">What we stand for</h3>
                <p class="text-muted" style="font-size: 13px;">Four commitments that shape every decision from mill to mailer.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="tj-stand-card">
                        <div class="tj-stand-icon"><i class="fa-solid fa-scissors"></i></div>
                        <h5>Made with intent</h5>
                        <p>Every silhouette is drafted, draped and refined in-house before a single production run is approved.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="tj-stand-card">
                        <div class="tj-stand-icon"><i class="fa-solid fa-leaf"></i></div>
                        <h5>Responsible materials</h5>
                        <p>Mulberry silk, organic cotton and recycled trims sourced from mills we visit and audit ourselves.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="tj-stand-card">
                        <div class="tj-stand-icon"><i class="fa-solid fa-ruler-combined"></i></div>
                        <h5>Fit for real bodies</h5>
                        <p>Graded across a wide size range and fit-tested on multiple body types, not a single sample model.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="tj-stand-card">
                        <div class="tj-stand-icon"><i class="fa-solid fa-globe"></i></div>
                        <h5>Transparent supply</h5>
                        <p>We publish where each collection is made and what our makers are paid, season after season.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- SECTION 3: Milestones -->
        <div class="mb-5 pb-5 border-bottom" style="border-color: var(--tj-border) !important;">
            <div class="mb-4">
                <h3 class="text-white fw-bold mb-2" style="font-size: 22px;">Milestones</h3>
                <p class="text-muted" style="font-size: 13px;">A decade of slow, deliberate growth.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="tj-milestone-card">
                        <div class="tj-milestone-year">2014</div>
                        <h6>A studio of two</h6>
                        <p>TJ Apparels begins as a two-person tailoring studio on Garrison Avenue.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="tj-milestone-card">
                        <div class="tj-milestone-year">2018</div>
                        <h6>First full collection</h6>
                        <p>The Signature line launches, defining our clean, editorial house style.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="tj-milestone-card">
                        <div class="tj-milestone-year">2021</div>
                        <h6>Going direct</h6>
                        <p>We move online-first so more of every purchase goes back to our makers.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="tj-milestone-card">
                        <div class="tj-milestone-year">2025</div>
                        <h6>Beyond apparel</h6>
                        <p>Accessories, gifting and a members' atelier service join the house.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- SECTION 4: The people behind the label -->
        <div class="mb-5">
            <div class="mb-4">
                <h3 class="text-white fw-bold mb-2" style="font-size: 22px;">The people behind the label</h3>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="tj-team-card">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=800&q=80" alt="Tara Jensen" class="tj-team-img">
                        <div class="tj-team-info">
                            <h5>Tara Jensen</h5>
                            <p>Founder & Creative Director</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tj-team-card">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=800&q=80" alt="Marcus Vale" class="tj-team-img">
                        <div class="tj-team-info">
                            <h5>Marcus Vale</h5>
                            <p>Head of Design</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tj-team-card">
                        <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=800&q=80" alt="Amara Osei" class="tj-team-img">
                        <div class="tj-team-info">
                            <h5>Amara Osei</h5>
                            <p>Atelier & Production Lead</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SECTION 5: Trust badges & CTA Banner -->
        <div class="row g-4 align-items-center">
            <div class="col-12">
                <div class="tj-cta-banner d-flex flex-lg-row flex-column justify-content-between align-items-lg-center gap-4">
                    <div>
                        <div class="tj-section-sub mb-2">JOIN THE HOUSE</div>
                        <h3>Discover the current collection</h3>
                        <p>Explore the pieces our atelier is making right now, or talk to a stylist about something tailored.</p>
                    </div>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="shop.php" class="tj-btn-primary-custom">Shop Collection</a>
                        <a href="contact.php" class="tj-btn-outline-custom">Contact Us</a>
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