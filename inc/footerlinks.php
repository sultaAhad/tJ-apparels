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
</script>

<!-- Animation CDN  -->
<script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.27/bundled/lenis.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
<!-- Animation CDN  -->

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
<!-- shop -->
<script>
document.addEventListener("DOMContentLoaded", function() {
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
        const checkedCategories = filterCheckboxes.length > 0 ?
            Array.from(document.querySelectorAll('.tj-filter-checkbox[data-filter-type="category"]:checked'))
            .map(cb => cb.value) :
            [];

        const checkedEdits = filterCheckboxes.length > 0 ?
            Array.from(document.querySelectorAll('.tj-filter-checkbox[data-filter-type="edit"]:checked')).map(
                cb => cb.value) :
            [];

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
            const matchesCategory = checkedCategories.length === 0 || checkedCategories.some(cat =>
                categories.includes(cat));
            const matchesEdit = checkedEdits.length === 0 || checkedEdits.some(ed => edit.includes(ed));

            const matchesSize = selectedSizes.length === 0 || selectedSizes.some(sz => sizes.includes(
                sz));
            const matchesPrice = !priceRange || price <= maxPrice;

            if (matchesSearch && matchesPill && matchesCategory && matchesEdit && matchesSize &&
                matchesPrice) {
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
        sortSelect.addEventListener("change", function() {
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
        btn.addEventListener("click", function() {
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
        input.addEventListener("input", function() {
            // Sync values if multiple search boxes exist on the page
            searchInputs.forEach(si => {
                if (si !== input) si.value = input.value;
            });
            filterProducts();
        });
    });

    // 4. Size badges event
    sizeBadges.forEach(badge => {
        badge.addEventListener("click", function() {
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
        priceRange.addEventListener("input", function() {
            if (priceOutput) {
                priceOutput.innerText = "$" + parseFloat(this.value).toFixed(2);
            }
            filterProducts();
        });
    }

    // 6. Reset filters button event
    if (resetBtn) {
        resetBtn.addEventListener("click", function() {
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
        const gridColClass = isHomePageGrid ? "col-xl-3 col-lg-4 col-md-6 tj-product-col" :
            "col-xl-4 col-md-6 tj-product-col";

        gridViewBtn.addEventListener("click", function() {
            gridViewBtn.classList.add("active");
            listViewBtn.classList.remove("active");
            productsGrid.classList.remove("list-view-mode");
            productCols.forEach(col => {
                col.className = gridColClass;
            });
        });

        listViewBtn.addEventListener("click", function() {
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

<script>
document.addEventListener("DOMContentLoaded", function() {

    /* ==========================================
        MOBILE MENU LOGIC
    ========================================== */
    const menuBtn = document.getElementById("tjMobileMenuBtn");
    const sidebar = document.getElementById("tjMobileSidebar");
    const overlay = document.getElementById("tjMobileOverlay");
    const closeBtn = document.getElementById("tjSidebarClose");

    function openMobileMenu() {
        sidebar.classList.add("active");
        overlay.classList.add("active");
        document.body.style.overflow = "hidden";
    }

    function closeMobileMenu() {
        sidebar.classList.remove("active");
        overlay.classList.remove("active");
        document.body.style.overflow = "";
    }

    if (menuBtn) menuBtn.addEventListener("click", openMobileMenu);
    if (closeBtn) closeBtn.addEventListener("click", closeMobileMenu);
    if (overlay) overlay.addEventListener("click", closeMobileMenu);

    document.addEventListener("keydown", function(event) {
        if (event.key === "Escape") closeMobileMenu();
    });


    /* ==========================================
        GSAP DYNAMIC NAV HOVER/ACTIVE INDICATOR
    ========================================== */
    const navList = document.getElementById("tjNavList");
    const navLinks = document.querySelectorAll(".tj-apparel-nav-link");
    const indicator = document.getElementById("tjNavIndicator");

    if (navList && indicator && navLinks.length > 0) {
        const currentPath = window.location.pathname.split("/").pop();

        navLinks.forEach(link => {
            const href = link.getAttribute("href");
            if (href === currentPath || (currentPath === "" && (href === "./" || href === "/"))) {
                navLinks.forEach(l => l.classList.remove("active"));
                link.classList.add("active");
            }
        });

        const activeLink = document.querySelector(".tj-apparel-nav-link.active") || navLinks[0];

        function moveIndicator(link, instant = false) {
            const listRect = navList.getBoundingClientRect();
            const linkRect = link.getBoundingClientRect();
            const left = linkRect.left - listRect.left;
            const width = linkRect.width;

            if (instant) {
                gsap.set(indicator, {
                    x: left,
                    width: width
                });
            } else {
                gsap.to(indicator, {
                    x: left,
                    width: width,
                    duration: 0.4,
                    ease: "power3.out"
                });
            }
        }

        moveIndicator(activeLink, true);

        navLinks.forEach(link => {
            link.addEventListener("mouseenter", function() {
                moveIndicator(this);
            });
        });

        navList.addEventListener("mouseleave", function() {
            const currentActive = document.querySelector(".tj-apparel-nav-link.active") || activeLink;
            moveIndicator(currentActive);
        });
    }


    /* ==========================================
        ADVANCED SLIDE-DOWN SEARCH BAR LOGIC
    ========================================== */
    const searchToggleBtn = document.getElementById("tjSearchToggleBtn");
    const searchCloseBtn = document.getElementById("tjSearchCloseBtn");
    const headerMain = document.getElementById("tjHeaderMain");
    const searchBar = document.getElementById("tjAdvancedSearchBar");
    const searchInput = document.getElementById("tjAdvancedSearchInput");

    function openAdvancedSearch(e) {
        if (e) e.preventDefault();

        // Make search bar visible and animate transition
        gsap.set(searchBar, {
            visibility: "visible"
        });

        const tl = gsap.timeline();
        tl.to(headerMain, {
                y: -60,
                opacity: 0,
                duration: 0.3,
                ease: "power2.in"
            })
            .to(searchBar, {
                y: 0,
                opacity: 1,
                duration: 0.4,
                ease: "power3.out"
            }, "-=0.1");

        if (searchInput) {
            setTimeout(() => {
                searchInput.focus();
            }, 200);
        }
    }

    function closeAdvancedSearch(e) {
        if (e) e.preventDefault();

        const tl = gsap.timeline();
        tl.to(searchBar, {
                y: -60,
                opacity: 0,
                duration: 0.3,
                ease: "power2.in",
                onComplete: () => {
                    gsap.set(searchBar, {
                        visibility: "hidden"
                    });
                }
            })
            .to(headerMain, {
                y: 0,
                opacity: 1,
                duration: 0.4,
                ease: "power3.out"
            }, "-=0.1");

        if (searchInput) searchInput.value = "";
    }

    if (searchToggleBtn) searchToggleBtn.addEventListener("click", openAdvancedSearch);
    if (searchCloseBtn) searchCloseBtn.addEventListener("click", closeAdvancedSearch);

    // Close on Escape key
    document.addEventListener("keydown", function(event) {
        if (event.key === "Escape" && searchBar.style.visibility === "visible") {
            closeAdvancedSearch();
        }
    });

});
</script>
<!-- preloader -->
<script>
document.addEventListener("DOMContentLoaded", () => {
    const preloader = document.querySelector(".preloader");
    const scene = document.querySelector(".preloader .scene");
    if (!preloader || !scene) return;
    const particles = scene.querySelector(".particles");
    if (particles) {
        particles.innerHTML = "";
        const fragment = document.createDocumentFragment();

        for (let i = 0; i < 50; i++) {
            const particle = document.createElement("i");
            const size = Math.random() > 0.85 ? 3 : 2;
            particle.style.cssText = `
        position: absolute;
        width: ${size}px;
        height: ${size}px;
        left: ${Math.random() * 100}%;
        top: ${Math.random() * 100}%;
        background: #d946ef;
        border-radius: 50%;
        opacity: ${0.2 + Math.random() * 0.6};
        box-shadow: 0 0 8px rgba(217, 70, 239, 0.7);
      `;
            fragment.appendChild(particle);
            particle.animate(
                [{
                        transform: "translate3d(0,0,0) scale(0.6)",
                        opacity: 0.1
                    },
                    {
                        transform: `translate3d(${Math.random() * 80 - 40}px, ${Math.random() * 80 - 40}px, 0) scale(1.4)`,
                        opacity: 0.85
                    },
                    {
                        transform: "translate3d(0,0,0) scale(0.6)",
                        opacity: 0.1
                    }
                ], {
                    duration: 3000 + Math.random() * 3000,
                    delay: -Math.random() * 3000,
                    iterations: Infinity,
                    easing: "ease-in-out"
                }
            );
        }
        particles.appendChild(fragment);
    }
    scene.querySelectorAll(".tool").forEach((tool, index) => {
        const dir = index % 2 === 0 ? 1 : -1;
        tool.animate(
            [{
                    transform: "translate3d(0,0,0) rotate(0deg)",
                    opacity: 0.3
                },
                {
                    transform: `translate3d(${12 * dir}px, -18px, 0) rotate(${25 * dir}deg)`,
                    opacity: 0.8
                },
                {
                    transform: "translate3d(0,0,0) rotate(0deg)",
                    opacity: 0.3
                }
            ], {
                duration: 3500 + index * 300,
                delay: index * 120,
                iterations: Infinity,
                easing: "ease-in-out"
            }
        );
    });
    scene.querySelectorAll(".gauge").forEach((gauge, index) => {
        const needle = gauge.querySelector("i");
        if (needle) {
            needle.animate(
                [{
                        transform: "rotate(-60deg)"
                    },
                    {
                        transform: "rotate(55deg)"
                    },
                    {
                        transform: "rotate(-10deg)"
                    },
                    {
                        transform: "rotate(-60deg)"
                    }
                ], {
                    duration: 3200 + index * 350,
                    delay: index * 200,
                    iterations: Infinity,
                    easing: "ease-in-out"
                }
            );
        }
    });
    scene.querySelectorAll(".ring").forEach((ring, index) => {
        ring.animate(
            [{
                    transform: "rotate(0deg) scale(0.9)",
                    opacity: 0.3
                },
                {
                    transform: "rotate(180deg) scale(1.05)",
                    opacity: 0.85
                },
                {
                    transform: "rotate(360deg) scale(0.9)",
                    opacity: 0.3
                }
            ], {
                duration: 3200 + index * 400,
                delay: index * 150,
                iterations: Infinity,
                easing: "ease-in-out"
            }
        );
    });
    scene.querySelectorAll(".engine").forEach((piston, index) => {
        piston.animate(
            [{
                    transform: "translateY(0)"
                },
                {
                    transform: "translateY(-14px)"
                },
                {
                    transform: "translateY(0)"
                }
            ], {
                duration: 1800 + index * 200,
                delay: index * 150,
                iterations: Infinity,
                easing: "ease-in-out"
            }
        );
    });
    scene.querySelectorAll(".piston-rod").forEach((rod, index) => {
        rod.animate(
            [{
                    transform: "translateY(0) rotate(0deg)"
                },
                {
                    transform: "translateY(-10px) rotate(6deg)"
                },
                {
                    transform: "translateY(0) rotate(0deg)"
                }
            ], {
                duration: 2000 + index * 300,
                iterations: Infinity,
                easing: "ease-in-out"
            }
        );
    });
    const loaderBar = scene.querySelector(".loader div");
    if (loaderBar) {
        loaderBar.animate(
            [{
                    width: "0%"
                },
                {
                    width: "35%",
                    offset: 0.3
                },
                {
                    width: "70%",
                    offset: 0.7
                },
                {
                    width: "100%"
                }
            ], {
                duration: 2800,
                easing: "cubic-bezier(0.4, 0, 0.2, 1)",
                fill: "forwards"
            }
        );
    }
    window.addEventListener("load", () => {
        setTimeout(() => {
            preloader.classList.add("preloader-hidden");
        }, 600);
    });
});
</script>

<!-- eye -->
 <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Yeh script page ke sare password fields ko automatically dhoond legi jinke sath toggle icon hoga
        const toggleIcons = document.querySelectorAll(".tj-toggle-password");

        toggleIcons.forEach(icon => {
            icon.addEventListener("click", function() {
                // Icon ke andar ka 'i' tag ya input target find karein
                const inputWrap = this.closest('.tj-password-wrap');
                const passwordInput = inputWrap.querySelector("input");
                const iconElement = this.querySelector("i");

                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    iconElement.classList.remove("fa-eye");
                    iconElement.classList.add("fa-eye-slash");
                } else {
                    passwordInput.type = "password";
                    iconElement.classList.remove("fa-eye-slash");
                    iconElement.classList.add("fa-eye");
                }
            });
        });
    });
</script>