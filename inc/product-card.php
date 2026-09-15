<?php
// Product Card Component
// Expects $prod and optional $colClass variables to be available
if (!isset($prod)) return;
$column_classes = isset($colClass) ? $colClass : "col-xl-4 col-md-6 tj-product-col";
?>
<div class="<?php echo $column_classes; ?>" 
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