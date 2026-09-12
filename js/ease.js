(function () {
  function cubicBezier(x1, y1, x2, y2) {
    var NEWTON_ITERATIONS = 8, SUBDIVISION_PRECISION = 1e-7, SUBDIVISION_MAX = 12;

    function A(a1, a2) { return 1.0 - 3.0 * a2 + 3.0 * a1; }
    function B(a1, a2) { return 3.0 * a2 - 6.0 * a1; }
    function C(a1) { return 3.0 * a1; }

    function calcBezier(t, a1, a2) {
      return ((A(a1, a2) * t + B(a1, a2)) * t + C(a1)) * t;
    }
    function getSlope(t, a1, a2) {
      return 3.0 * A(a1, a2) * t * t + 2.0 * B(a1, a2) * t + C(a1);
    }
    function tForX(x) {
      var t = x, i, slope, currentX;
      for (i = 0; i < NEWTON_ITERATIONS; i++) {
        slope = getSlope(t, x1, x2);
        if (slope === 0) break;
        currentX = calcBezier(t, x1, x2) - x;
        t -= currentX / slope;
      }
      var lo = 0, hi = 1;
      t = x;
      for (i = 0; i < SUBDIVISION_MAX; i++) {
        currentX = calcBezier(t, x1, x2) - x;
        if (Math.abs(currentX) < SUBDIVISION_PRECISION) return t;
        if (currentX > 0) hi = t; else lo = t;
        t = (lo + hi) / 2;
      }
      return t;
    }
    return function (x) {
      if (x <= 0) return 0;
      if (x >= 1) return 1;
      return calcBezier(tForX(x), y1, y2);
    };
  }
  var fmIn    = cubicBezier(0.42, 0, 1, 1);
  var fmOut   = cubicBezier(0, 0, 0.58, 1);
  var fmInOut = cubicBezier(0.42, 0, 0.58, 1);
  if (window.gsap) {
    gsap.registerEase('fmIn', fmIn);
    gsap.registerEase('fmOut', fmOut);
    gsap.registerEase('fmInOut', fmInOut);
    gsap.registerEase('fmLinear', function (x) { return x; });
  }
  window.FM_EASE = { in: fmIn, out: fmOut, inOut: fmInOut };
  if (window.gsap && window.matchMedia &&
      window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    window.addEventListener('load', function () {
      setTimeout(function () {
        gsap.globalTimeline.getChildren(true, true, false).forEach(function (tw) {
          if (tw.repeat && tw.repeat() === -1) tw.progress(0).pause();
        });
      }, 2500);
    });
  }
})();
