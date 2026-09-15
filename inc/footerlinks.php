<!-- GSAP Core + ScrollTrigger + 3D Plugins -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/Draggable.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/InertiaPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<!-- Bootstrap CDN -->
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Bootstrap CDN -->

<!-- Fancybox CDN  -->
<script src='https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js'></script>
<!-- Fancybox CDN  -->

<script src="slick/slick.min.js"></script>
<!-- Slick Slider CDN -->

<!-- <script src="https://api.mapbox.com/mapbox-gl-js/v3.0.1/mapbox-gl.js"></script> -->

<!-- Swiper Slider  -->
<script src="js/swiper.js"></script>
<!-- Swiper Slider  -->

<!-- Main Js -->
<script src="js/main.js"></script>
<script src="js/ease.js"></script>
<script src="js/nav-data.js"></script>
<script src="js/nav.js"></script>
<script src="js/hero.js"></script>
<!-- Main Js -->
<!-- Wow Js CDN -->
<script src="js/wow.min.js"></script>
<!-- AOS ANIMTAION CDN -->
<script>
    new WOW().init();
    // AOS.init();
</script>

<!-- Animation CDN  -->
<script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.27/bundled/lenis.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
<!-- Animation CDN  -->

<!-- Slick Slider CDN -->
<!-- Three.js -->
<script type="importmap">
    {
            "imports": {
                "three": "https://unpkg.com/three@0.128.0/build/three.module.js"
            }
        }
    </script>

<!-- navbar active script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const currentLocation = location.href;
        const menuItems = document.querySelectorAll('.nav-wrapper');

        menuItems.forEach(menuItem => {
            if (menuItem.href === currentLocation) {
                document.querySelector('.nav-wrapper.active').classList.remove('active');
                menuItem.classList.add('active');
            }
        });
    });
</script>

<script>
    document.querySelectorAll(".ml14 .letters").forEach(function(textWrapper) {
        textWrapper.innerHTML = textWrapper.textContent.replace(
            /\S/g,
            "<span class='letter'>$&</span>",
        );
    });

    document.querySelectorAll(".ml14").forEach(function(ml14, index) {
        var animation = anime
            .timeline({
                autoplay: false,
            })
            .add({
                targets: ml14.querySelector(".line"),
                scaleX: [0, 1],
                opacity: [0.5, 1],
                easing: "easeInOutExpo",
                duration: 100,
            })
            .add({
                targets: ml14.querySelectorAll(".letter"),
                opacity: [0, 1],
                translateX: [40, 0],
                translateZ: 0,
                scaleX: [0.3, 1],
                easing: "easeOutExpo",
                duration: 800,
                offset: "-=600",
                delay: function(el, i) {
                    return 150 + 50 * i;
                },
            })
            .add({
                targets: ml14,
                opacity: 1,
                duration: 1000,
                easing: "easeOutExpo",
                delay: 500,
            });
        const observer = new IntersectionObserver(
            (entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        animation.play();
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.2,
            },
        );

        observer.observe(ml14);
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
    const filterBtns = document.querySelectorAll(".tj-filter-btn"); // Home page filter pills
    const filterCheckboxes = document.querySelectorAll(".tj-filter-checkbox"); // Shop page checkboxes
    const sizeBadges = document.querySelectorAll(".tj-size-filter");
    const priceRange = document.getElementById("tjPriceRange");
    const priceOutput = document.getElementById("tjPriceOutput");
    const productCols = document.querySelectorAll(".tj-product-col");
    
    // Handle multiple search inputs (home/shop can have different inputs)
    const searchInputs = document.querySelectorAll("#tjProductSearch");
    
    const productCountEl = document.getElementById("tjProductCount");
    const resetBtn = document.getElementById("tjResetFilters");
    const sortSelect = document.getElementById("tjProductSortSelect");
    const productsGrid = document.getElementById("tjProductsGrid");

    let selectedSizes = [];

    function filterProducts() {
        // Get active search query from whichever search input is currently being typed in or has value
        let searchQuery = "";
        searchInputs.forEach(input => {
            if (input.value.trim() !== "") {
                searchQuery = input.value.toLowerCase().trim();
            }
        });

        const maxPrice = priceRange ? parseFloat(priceRange.value) : Infinity;

        // Checkbox filters (Shop page)
        const checkedCategories = filterCheckboxes.length > 0 
            ? Array.from(document.querySelectorAll('.tj-filter-checkbox[data-filter-type="category"]:checked')).map(cb => cb.value)
            : [];
            
        const checkedEdits = filterCheckboxes.length > 0 
            ? Array.from(document.querySelectorAll('.tj-filter-checkbox[data-filter-type="edit"]:checked')).map(cb => cb.value)
            : [];

        // Active pill filter (Home page)
        const activePillBtn = document.querySelector(".tj-filter-btn.active");
        const pillFilterValue = activePillBtn ? activePillBtn.getAttribute("data-filter") : "all";

        let visibleCount = 0;

        productCols.forEach(col => {
            const titleEl = col.querySelector(".tj-product-title");
            const descEl = col.querySelector(".tj-product-desc");
            
            const title = titleEl ? titleEl.innerText.toLowerCase() : "";
            const desc = descEl ? descEl.innerText.toLowerCase() : "";
            const categories = col.getAttribute("data-category") || "";
            const edit = col.getAttribute("data-edit") || "";
            const sizes = col.getAttribute("data-size") || "";
            const priceAttr = col.getAttribute("data-price");
            const price = priceAttr ? parseFloat(priceAttr) : 0;

            // Conditions
            const matchesSearch = title.includes(searchQuery) || desc.includes(searchQuery);
            
            // Pill filter condition (Home page)
            const matchesPill = pillFilterValue === "all" || categories.includes(pillFilterValue);

            // Checkbox conditions (Shop page)
            const matchesCategory = checkedCategories.length === 0 || checkedCategories.some(cat => categories.includes(cat));
            const matchesEdit = checkedEdits.length === 0 || checkedEdits.some(ed => edit.includes(ed));
            
            const matchesSize = selectedSizes.length === 0 || selectedSizes.some(sz => sizes.includes(sz));
            const matchesPrice = !priceRange || price <= maxPrice;

            if (matchesSearch && matchesPill && matchesCategory && matchesEdit && matchesSize && matchesPrice) {
                col.style.display = "block";
                visibleCount++;
            } else {
                col.style.display = "none";
            }
        });

        // Update product count if element exists
        if (productCountEl) {
            const totalProducts = productCols.length;
            productCountEl.innerText = `Showing ${visibleCount} of ${totalProducts} products`;
        }
    }

    // Sorting Logic
    if (sortSelect && productsGrid) {
        sortSelect.addEventListener("change", function () {
            let colsArray = Array.from(productCols);
            const sortVal = this.value;

            colsArray.sort((a, b) => {
                let priceA = parseFloat(a.getAttribute("data-price")) || 0;
                let priceB = parseFloat(b.getAttribute("data-price")) || 0;
                let ratingA = parseFloat(a.querySelector(".text-warning span")?.innerText) || 0;
                let ratingB = parseFloat(b.querySelector(".text-warning span")?.innerText) || 0;

                if (sortVal === "price-low") return priceA - priceB;
                if (sortVal === "price-high") return priceB - priceA;
                if (sortVal === "rating") return ratingB - ratingA;
                return 0; // default
            });

            // Re-append sorted elements to grid
            colsArray.forEach(col => productsGrid.appendChild(col));
        });
    }

    // 1. Home page filter pills event
    filterBtns.forEach(btn => {
        btn.addEventListener("click", function () {
            filterBtns.forEach(b => b.classList.remove("active"));
            this.classList.add("active");
            filterProducts();
        });
    });

    // 2. Shop page checkbox events
    if (filterCheckboxes.length > 0) {
        filterCheckboxes.forEach(cb => cb.addEventListener("change", filterProducts));
    }

    // 3. Search inputs synchronization & event
    searchInputs.forEach(input => {
        input.addEventListener("input", function () {
            // Sync values if multiple search boxes exist on the page
            searchInputs.forEach(si => { if (si !== input) si.value = input.value; });
            filterProducts();
        });
    });

    // 4. Size badges event
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

    // 5. Price range event
    if (priceRange) {
        priceRange.addEventListener("input", function () {
            if (priceOutput) {
                priceOutput.innerText = "$" + parseFloat(this.value).toFixed(2);
            }
            filterProducts();
        });
    }

    // 6. Reset filters button event
    if (resetBtn) {
        resetBtn.addEventListener("click", function () {
            filterCheckboxes.forEach(cb => cb.checked = false);
            sizeBadges.forEach(b => b.classList.remove("active"));
            selectedSizes = [];
            if (priceRange) {
                priceRange.value = 200;
                if (priceOutput) priceOutput.innerText = "$200.00";
            }
            searchInputs.forEach(si => si.value = "");
            filterBtns.forEach((b, index) => {
                if (index === 0) b.classList.add("active");
                else b.classList.remove("active");
            });
            if (sortSelect) sortSelect.value = "default";
            filterProducts();
        });
    }

    // 7. Grid / List Layout Toggle (Smart Column Detection)
    const gridViewBtn = document.getElementById("tjGridViewBtn");
    const listViewBtn = document.getElementById("tjListViewBtn");

    if (gridViewBtn && listViewBtn && productsGrid) {
        const isHomePageGrid = productCols.length > 0 && productCols[0].classList.contains("col-xl-3");
        const gridColClass = isHomePageGrid ? "col-xl-3 col-lg-4 col-md-6 tj-product-col" : "col-xl-4 col-md-6 tj-product-col";

        gridViewBtn.addEventListener("click", function () {
            gridViewBtn.classList.add("active");
            listViewBtn.classList.remove("active");
            productsGrid.classList.remove("list-view-mode");
            productCols.forEach(col => {
                col.className = gridColClass;
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
    }
});
</script>