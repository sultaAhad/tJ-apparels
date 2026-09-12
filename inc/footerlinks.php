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