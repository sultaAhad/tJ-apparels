<!DOCTYPE html>
<html lang="en" class="site-root">

<head>
  <!-- HeaderLinks Include Here -->
  <?php include 'headlinks.php'; ?>
  <!-- HeaderLinks Include Here -->
</head>

<body class="<?php echo isset($bodyClass) ? $bodyClass : ''; ?>">
  <?php
  // <!-- Header Include Here -->
  if (!isset($without_header)) {
    include 'header.php';
  }
  // <!-- Header Include Here -->
  ?>

  <!-- Preloader -->
  <div class="preloader">
    <div class="scene">
      <div class="particles"></div>
      <div class="loader-glow loader-glow-1"></div>
      <div class="loader-glow loader-glow-2"></div>
      <div class="loader-glow loader-glow-3"></div>
      <div class="tool tool1">⚙</div>
      <div class="tool tool2">🔧</div>
      <div class="tool tool3">⚙</div>
      <div class="tool tool4">🔧</div>
      <div class="tool tool5">⚙</div>
      <div class="tool tool6">🔧</div>
      <div class="gauge gauge1">
        <span>MPH</span>
        <i></i>
      </div>
      <div class="gauge gauge2">
        <span>TEMP</span>
        <i></i>
      </div>
      <div class="gauge gauge3">
        <span>RPM</span>
        <i></i>
      </div>
      <div class="ring ring1"></div>
      <div class="ring ring2"></div>
      <div class="ring ring3"></div>
      <div class="bolt bolt1"></div>
      <div class="bolt bolt2"></div>
      <div class="bolt bolt3"></div>
      <div class="bolt bolt4"></div>
      <div class="bolt bolt5"></div>
      <div class="bolt bolt6"></div>
      <div class="engine-block">
        <div class="engine part p1">
          <div class="piston-head"></div>
          <div class="piston-body">
            <span class="fin"></span>
            <span class="fin"></span>
            <span class="fin"></span>
            <span class="fin"></span>
            <span class="fin"></span>
          </div>
        </div>
        <div class="engine part p2">
          <div class="piston-head"></div>
          <div class="piston-body">
            <span class="fin"></span>
            <span class="fin"></span>
            <span class="fin"></span>
            <span class="fin"></span>
            <span class="fin"></span>
          </div>
        </div>
        <div class="engine part p3">
          <div class="piston-head"></div>
          <div class="piston-body">
            <span class="fin"></span>
            <span class="fin"></span>
            <span class="fin"></span>
            <span class="fin"></span>
            <span class="fin"></span>
          </div>
        </div>
        <div class="engine part p4">
          <div class="piston-head"></div>
          <div class="piston-body">
            <span class="fin"></span>
            <span class="fin"></span>
            <span class="fin"></span>
            <span class="fin"></span>
            <span class="fin"></span>
          </div>
        </div>
        <div class="engine part p5">
          <div class="piston-head"></div>
          <div class="piston-body">
            <span class="fin"></span>
            <span class="fin"></span>
            <span class="fin"></span>
            <span class="fin"></span>
            <span class="fin"></span>
          </div>
        </div>
      </div>
      <div class="piston-rod piston-rod-1">
        <div class="prod-head"></div>
        <div class="prod-shaft"></div>
        <div class="prod-base"></div>
      </div>
      <div class="piston-rod piston-rod-2">
        <div class="prod-head"></div>
        <div class="prod-shaft"></div>
        <div class="prod-base"></div>
      </div>
      <div class="mechanical mechanical1"></div>
      <div class="mechanical mechanical2"></div>
      <div class="mechanical mechanical3"></div>
      <div class="flare"></div>
      <div class="brand">
        <div class="tj">
          <img src="img/preloader.png" class="img-fluid" alt="TJ Apparels Logo">
        </div>
      </div>
      <div class="loader">
        <div></div>
      </div>
    </div>
  </div>
  <!-- Preloader -->

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
</body>
</html>