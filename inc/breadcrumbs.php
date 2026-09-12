<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <?php
        $totalCrumbs = count($breadcrumbs);
        foreach ($breadcrumbs as $index => $crumb) {
            $isLast = ($index === $totalCrumbs - 1);
        ?>
            <li class="breadcrumb-item <?= $isLast ? 'active' : ''; ?>" <?= $isLast ? 'aria-current="page"' : ''; ?>>
                <?php if (!$isLast) { ?>
                    <a href="<?= $crumb['url']; ?>" class="extra-color-6 text-decoration-none sub-font level-10 letter-spacing-3 text-uppercase">
                        <?= $crumb['label']; ?>
                    </a>
                <?php } else { ?>
                    <span class="sub-font level-10 extra-color-6 letter-spacing-3 text-uppercase">
                        <?= $crumb['label']; ?>
                    </span>
                <?php } ?>
            </li>
        <?php } ?>
    </ol>
</nav>