(function () {
  'use strict';
  var q = function (sel) { return document.querySelector('[data-fx="' + sel + '"]'); };
  var rnd = Math.random;
  gsap.to(q('gear-a'), { rotation: 360, duration: 20, repeat: -1, ease: 'none' });
  gsap.fromTo(q('gear-a'), { scale: 1 }, { scale: 1.1, duration: 8, repeat: -1, ease: 'fmInOut' });
  gsap.fromTo(q('gear-a-glow'), { scale: 1, opacity: 0.4 },
    { scale: 1.5, opacity: 0.7, duration: 4, repeat: -1, yoyo: true, ease: 'fmInOut' });
  gsap.to(q('gear-b'), { rotation: -360, duration: 15, repeat: -1, ease: 'none' });
  gsap.fromTo(q('gear-b-glow'), { scale: 1, opacity: 0.3 },
    { scale: 1.3, opacity: 0.5, duration: 6, repeat: -1, yoyo: true, ease: 'fmInOut' });
  gsap.to(q('chain'), {
    keyframes: { x: [0, 20, 0], easeEach: 'fmInOut' },
    duration: 3, repeat: -1
  });
  gsap.fromTo(q('chain-glow'), { opacity: 0.3 },
    { opacity: 0.6, duration: 2, repeat: -1, yoyo: true, ease: 'fmInOut' });
  gsap.to(q('rod'), {
    keyframes: { x: [0, -15, 0], easeEach: 'none' },
    duration: 2.5, repeat: -1
  });
  gsap.to(q('needle-a'), {
    keyframes: { rotation: [0, 45, 0], easeEach: 'fmInOut' },
    duration: 4, repeat: -1
  });
  gsap.to(q('needle-b'), {
    keyframes: { rotation: [0, 90, 45, 0], easeEach: 'fmInOut' },
    duration: 5, repeat: -1
  });
  gsap.to(q('flame-a'), {
    keyframes: { scaleY: [1, 1.1, 0.9, 1], opacity: [0.2, 0.3, 0.1, 0.2], easeEach: 'fmInOut' },
    duration: 0.8, repeat: -1
  });
  gsap.to(q('halo'), {
    keyframes: { opacity: [0.1, 0.3, 0.1, 0.25, 0.1], scale: [1, 1.1, 1, 1.05, 1], easeEach: 'fmInOut' },
    duration: 2, repeat: -1
  });
  gsap.to(q('dial'), { rotation: 360, duration: 8, repeat: -1, ease: 'none' });
  var sparkHost = q('dial-sparks');
  for (var s = 0; s < 3; s++) {
    var sp = document.createElement('div');
    sp.className = 'dial-spark';
    sp.style.left = (18 + s * 2) + 'px';
    sp.style.top = (18 + s * 2) + 'px';
    sparkHost.appendChild(sp);
    gsap.to(sp, {
      keyframes: { opacity: [0, 1, 0], scale: [0, 1, 0] },
      duration: 0.5, repeat: -1, delay: s * 0.2
    });
  }
  gsap.to(q('piston'), {
    keyframes: { y: [0, -8, 0], easeEach: 'fmInOut' },
    duration: 1.5, repeat: -1
  });
  gsap.to(q('smoke-puff'), {
    keyframes: { y: [0, -50, -100], x: [0, 30, 60], opacity: [0.5, 0.3, 0], easeEach: 'fmOut' },
    duration: 6, repeat: -1
  });
  gsap.to(q('smoke-puff-inner'), {
    keyframes: { scale: [1, 1.3, 1.6], opacity: [0.6, 0.3, 0], easeEach: 'fmOut' },
    duration: 8, repeat: -1
  });
  gsap.to(q('ground-fog'), {
    keyframes: { x: [-50, 50, -50], opacity: [0.1, 0.2, 0.1], easeEach: 'fmInOut' },
    duration: 8, repeat: -1
  });
  gsap.to(q('exhaust'), {
    keyframes: { scaleY: [1, 1.3, 0.8, 1.1, 1], opacity: [0.3, 0.5, 0.2, 0.4, 0.3], easeEach: 'fmInOut' },
    duration: 1.5, repeat: -1
  });
  var smokeLayer = document.getElementById('heroSmoke');
  for (var i = 0; i < 15; i++) {
    var el = document.createElement('div');
    el.className = 'spark';
    el.style.left = (rnd() * 100) + '%';
    el.style.bottom = (rnd() * 20) + '%';
    smokeLayer.appendChild(el);
    gsap.to(el, {
      keyframes: {
        y: [-20, -150, -300],
        x: [0, rnd() * 60 - 30, rnd() * 120 - 60],
        opacity: [0.8, 0.5, 0],
        scale: [1, 1.5, 0.5],
        easeEach: 'fmOut'
      },
      duration: 5 + rnd() * 3,
      repeat: -1,
      delay: i * 0.3
    });
  }
  for (var d = 0; d < 12; d++) {
    var du = document.createElement('div');
    du.className = 'dust';
    du.style.left = (rnd() * 100) + '%';
    du.style.top = (rnd() * 100) + '%';
    smokeLayer.appendChild(du);
    gsap.to(du, {
      keyframes: {
        y: [0, -30, -60],
        x: [0, rnd() * 20 - 10, rnd() * 20 - 10],
        opacity: [0.4, 0.2, 0],
        easeEach: 'fmOut'
      },
      duration: 6 + rnd() * 3,
      repeat: -1,
      delay: d * 0.3
    });
  }
  gsap.to(q('blob-main'), {
    keyframes: { scale: [1, 1.2, 0.8, 1], opacity: [0.2, 0.3, 0.1, 0.2], easeEach: 'fmInOut' },
    duration: 3, repeat: -1
  });
  for (var b = 0; b < 4; b++) {
    var bl = document.createElement('div');
    bl.className = 'blob';
    bl.style.left = (30 + b * 20) + '%';
    bl.style.top = (40 + b * 10) + '%';
    bl.innerHTML = '<div class="blob-inner"></div>';
    smokeLayer.appendChild(bl);

    gsap.to(bl, {
      keyframes: { scale: [1, 1.1, 0.9, 1], opacity: [0.15, 0.25, 0.1, 0.15], easeEach: 'fmInOut' },
      duration: 4 + b, repeat: -1, delay: b * 0.8
    });
  }
  gsap.to(q('plate-a'), {
    keyframes: { rotation: [0, 5, -5, 0], scale: [1, 1.05, 0.95, 1], easeEach: 'fmInOut' },
    duration: 10, repeat: -1
  });
  gsap.to(q('plate-b'), {
    keyframes: { rotation: [0, -3, 3, 0], scale: [1, 1.02, 0.98, 1], easeEach: 'fmInOut' },
    duration: 12, repeat: -1
  });
  gsap.fromTo(q('logo-radial'), { scale: 1, opacity: 0.2 },
    { scale: 1.2, opacity: 0.4, duration: 6, repeat: -1, yoyo: true, ease: 'fmInOut' });
  var holder = document.getElementById('logoHolder');
  gsap.fromTo(holder, { opacity: 0, y: 50, scale: 0.8 },
    { opacity: 1, y: 0, scale: 1, duration: 1.2, ease: 'fmOut' });
  var logo = document.getElementById('heroLogo');
  var logoGlow = gsap.fromTo(logo,
    { filter: 'drop-shadow(0 0 20px rgba(220, 38, 38, 0.5))' },
    { filter: 'drop-shadow(0 0 40px rgba(220, 38, 38, 0.8))', duration: 3, repeat: -1, yoyo: true, ease: 'fmInOut' });
  var logoScale = gsap.fromTo(logo, { scale: 1 },
    { scale: 1.05, duration: 5, repeat: -1, yoyo: true, ease: 'fmInOut' });
  logo.addEventListener('mouseenter', function () {
    logoGlow.pause(); logoScale.pause();
    gsap.to(logo, {
      scale: 1.15, rotationY: 15, rotationX: 5,
      filter: 'drop-shadow(0 0 60px rgba(220, 38, 38, 1))',
      duration: 0.4, ease: 'fmOut', overwrite: 'auto'
    });
  });
  logo.addEventListener('mouseleave', function () {
    gsap.to(logo, {
      scale: 1, rotationY: 0, rotationX: 0,
      filter: 'drop-shadow(0 0 20px rgba(220, 38, 38, 0.5))',
      duration: 0.4, ease: 'fmOut', overwrite: 'auto',
      onComplete: function () { logoGlow.restart(true); logoScale.restart(true); }
    });
  });
  logo.addEventListener('click', function () {
    gsap.to(logo, {
      keyframes: {
        scale: [1, 1.3, 0.9, 1.1, 1],
        rotation: [0, 5, -5, 2, 0],
        filter: [
          'drop-shadow(0 0 60px rgba(220, 38, 38, 1))',
          'drop-shadow(0 0 100px rgba(220, 38, 38, 1))',
          'drop-shadow(0 0 60px rgba(220, 38, 38, 1))'
        ],
        easeEach: 'fmOut'
      },
      duration: 0.8, overwrite: 'auto'
    });
  });
  gsap.to(document.getElementById('logoDivider'),
    { width: '60%', duration: 1.5, delay: 0.8, ease: 'fmOut' });
  var FEATURES = [
    { label: 'QUALITY',   desc: 'Premium Materials', tint: 'tint-blue',
      icon: '<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/>' },
    { label: 'AUTHENTIC', desc: 'Genuine Products',  tint: 'tint-yellow',
      icon: '<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>' },
    { label: 'STORE',     desc: 'Fast Shipping',     tint: 'tint-green',
      icon: '<path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z"/><path d="M12 22V12"/><path d="m3.3 7 7.703 4.734a2 2 0 0 0 1.994 0L20.7 7"/><path d="m7.5 4.27 9 5.15"/>' },
    { label: 'TRUSTED',   desc: '1K+ Riders',        tint: 'tint-purple',
      icon: '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>' }
  ];
  var grid = document.getElementById('featureGrid');
  FEATURES.forEach(function (f, t) {
    var card = document.createElement('div');
    card.className = 'feature-card';
    card.tabIndex = 0;
    card.innerHTML =
      '<div class="feature-tint ' + f.tint + '"></div>' +
      '<div class="feature-body">' +
        '<div class="feature-icon-wrap">' +
          '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ico">' + f.icon + '</svg>' +
          '<div class="feature-icon-glow"></div>' +
        '</div>' +
        '<div>' +
          '<h3 class="feature-title">' + f.label + '</h3>' +
          '<p class="feature-desc">' + f.desc + '</p>' +
        '</div>' +
      '</div>';
    grid.appendChild(card);
    gsap.fromTo(card, { boxShadow: '0 0 20px rgba(220, 38, 38, 0.2)' },
      { boxShadow: '0 0 30px rgba(220, 38, 38, 0.4)', duration: 0.3 });
    gsap.fromTo(card.querySelector('.feature-tint'), { opacity: 0 },
      { opacity: 0.1, duration: 4, repeat: -1, delay: t * 0.8, ease: 'fmInOut' });
    gsap.to(card.querySelector('.feature-icon-wrap'), {
      keyframes: { rotation: [0, 5, -5, 0], easeEach: 'fmInOut' },
      duration: 3 + t, repeat: -1
    });
    gsap.to(card.querySelector('.feature-icon-wrap'), {
      keyframes: { scale: [1, 1.1, 1], easeEach: 'fmInOut' },
      duration: 3 + t, repeat: -1
    });
    gsap.to(card.querySelector('.feature-icon-glow'), {
      keyframes: { scale: [1, 1.5, 1], opacity: [0.3, 0.6, 0.3], easeEach: 'fmInOut' },
      duration: 2, repeat: -1, delay: t * 0.3
    });
    gsap.to(card.querySelector('.feature-title'), {
      keyframes: {
        textShadow: [
          '0 0 10px rgba(220, 38, 38, 0.3)',
          '0 0 20px rgba(220, 38, 38, 0.6)',
          '0 0 10px rgba(220, 38, 38, 0.3)'
        ],
        easeEach: 'fmInOut'
      },
      duration: 3, repeat: -1, delay: t * 0.4
    });
    for (var n = 0; n < 3; n++) {
      var p = document.createElement('div');
      p.className = 'feature-particle';
      p.style.left = (20 + n * 30) + '%';
      p.style.top = (20 + n * 20) + '%';
      card.appendChild(p);
      gsap.to(p, {
        keyframes: {
          y: [0, -20, 0],
          x: [0, rnd() * 20 - 10, 0],
          opacity: [0.6, 1, 0.6],
          scale: [1, 1.5, 1],
          easeEach: 'fmInOut'
        },
        duration: 3 + rnd() * 2,
        repeat: -1,
        delay: n * 0.5 + t * 0.2
      });
    }
    card.addEventListener('mouseenter', function () {
      gsap.to(card, { scale: 1.08, y: -8, rotationX: 5, rotationY: 5, duration: 0.45, ease: 'back.out(1.6)', overwrite: 'auto' });
    });
    card.addEventListener('mouseleave', function () {
      gsap.to(card, { scale: 1, y: 0, rotationX: 0, rotationY: 0, duration: 0.45, ease: 'back.out(1.6)', overwrite: 'auto' });
    });
    card.addEventListener('mousedown', function () {
      gsap.to(card, { scale: 0.95, duration: 0.15, overwrite: 'auto' });
    });
    card.addEventListener('mouseup', function () {
      gsap.to(card, { scale: 1.08, duration: 0.2, overwrite: 'auto' });
    });
  });
  gsap.fromTo(grid, { opacity: 0, y: 30 }, { opacity: 1, y: 0, duration: 0.8, delay: 0.5 });
})();
