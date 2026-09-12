<!-- sub-banner Starts Here -->
<section class="sub-banner section">
    <div class="container">
        <div class="banner____heading">
            <?php
            if (isset($breadcrumbs) && !empty($breadcrumbs)) {
                include 'inc/breadcrumbs.php';
            }
            ?>
            <h1 class="ml14 sub_____gradient level-2-lg sub-heading-font text-uppercase letter-spacing-2">
                <span class="letters"><?= isset($pageTitle) ? $pageTitle : 'Page Title'; ?></span>
            </h1>
            <?php if (isset($pageDesc) && !empty($pageDesc)): ?>
                <p class="level-7 para-font extra-color-6 mb-4"><?= $pageDesc; ?></p>
            <?php endif; ?>
            <?php if (isset($showSearch) && $showSearch === true): ?>
                <div class="searchbar_____wrapper mb-4">
                    <div class="row">
                        <div class="col-lg-5 col-md-7">
                            <form action="#" class="position-relative">
                                <div class="form-group position-relative">
                                    <i class="fa-solid fa-magnifying-glass search_____icon position-absolute top-50 start-0 translate-middle-y ms-3 level-7 extra-color-3"></i>
                                    <input type="text" class="form-control journal_____search level-7 primary-regular-font ps-5" placeholder="<?= isset($searchPlaceholder) ? $searchPlaceholder : 'Search...'; ?>">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (isset($showTabs) && $showTabs === true && isset($tabsList) && is_array($tabsList)): ?>
                <div class="banner____tabs">
                    <ul class="nav nav-pills gap-2" id="pills-tab" role="tablist">
                        <?php foreach ($tabsList as $index => $tab): ?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link level-10 sub-font extra-color-6 letter-spacing-3 <?= $index === 0 ? 'active' : ''; ?>"
                                    id="pills-<?= $tab['id']; ?>-tab"
                                    data-bs-toggle="pill"
                                    data-bs-target="#pills-<?= $tab['id']; ?>"
                                    type="button"
                                    role="tab"
                                    aria-controls="pills-<?= $tab['id']; ?>"
                                    aria-selected="<?= $index === 0 ? 'true' : 'false'; ?>">
                                    <?= $tab['label']; ?>
                                </button>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- sub-banner Ends Here -->