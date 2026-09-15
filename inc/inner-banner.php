<?php
// Default values agar koi variable set na ho
$subtitle = $subtitle ?? 'PAGE INFO';
$title = $title ?? 'Page Title';
$desc = $desc ?? 'Explore our latest collections and updates tailored just for you.';
$currentPage = $currentPage ?? 'Page';
?>

<!-- =========================================
     TJ DYNAMIC INNER PAGE BANNER START
========================================= -->
<section class="tj-inner-banner py-5">
    
    <!-- Ambient Background Glow Elements -->
    <div class="tj-banner-glow tj-banner-glow-1"></div>
    <div class="tj-banner-glow tj-banner-glow-2"></div>

    <div class="container py-lg-4 position-relative" style="z-index: 2;">
        <div class="row">
            <div class="col-lg-8">
                
                <!-- Breadcrumbs -->
                <nav aria-label="breadcrumb" class="mb-3">
                    <ol class="breadcrumb tj-breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="./" class="text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo htmlspecialchars($currentPage); ?></li>
                    </ol>
                </nav>

                <!-- Section Subtitle -->
                <span class="tj-banner-subtitle d-block text-uppercase mb-2"><?php echo htmlspecialchars($subtitle); ?></span>

                <!-- Main Title -->
                <h1 class="tj-banner-title fw-bold mb-3"><?php echo htmlspecialchars($title); ?></h1>

                <!-- Description -->
                <p class="tj-banner-desc mb-0">
                    <?php echo htmlspecialchars($desc); ?>
                </p>

            </div>
        </div>
    </div>
</section>
<!-- =========================================
     TJ DYNAMIC INNER PAGE BANNER END
========================================= -->