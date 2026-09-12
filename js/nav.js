(function () {
  'use strict';
  var header   = document.getElementById('siteHeader');
  var nav      = document.getElementById('mainNav');
  var homePill = nav.querySelector('.nav-home');
  gsap.fromTo(header, { y: -100 }, { y: 0, duration: 0.8, ease: 'fmOut' });

  gsap.to(header, {
    keyframes: {
      // boxShadow: [
      //   '0 4px 20px rgba(220, 38, 38, 0.1)',
      //   '0 4px 30px rgba(220, 38, 38, 0.2)',
      //   '0 4px 20px rgba(220, 38, 38, 0.1)'
      // ],
      easeEach: 'fmInOut'
    },
    duration: 4,
    repeat: -1
  });

  window.addEventListener('scroll', function () {
    header.classList.toggle('is-scrolled', window.scrollY > 20);
  }, { passive: true });
  gsap.fromTo(homePill, { opacity: 0, y: -20 }, { opacity: 1, y: 0, duration: 0.6 });
  gsap.to(homePill.querySelector('[data-home-icon]'), {
    keyframes: { rotate: [0, 5, -5, 0], easeEach: 'fmInOut' },
    duration: 2, repeat: -1
  });
  gsap.to(homePill.querySelector('[data-home-icon]'), {
    keyframes: { scale: [1, 1.1, 1], easeEach: 'fmInOut' },
    duration: 2, repeat: -1
  });
  attachPillHover(homePill);
  gsap.fromTo(homePill.querySelector('.active-bar'),
    { opacity: 0, scaleX: 0 },
    { opacity: 1, scaleX: 1, duration: 0.5, ease: 'fmOut' });
  var CARET = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ico"><path d="m6 9 6 6 6-6"/></svg>';
  var closeTimer = null;
  var openName   = null;
  var registry   = {};  
  NAV_ITEMS.forEach(function (item, m) {
    var wrap = document.createElement('div');
    wrap.className = 'nav-item-wrap';
    var pill = document.createElement('a');
    pill.className = 'nav-pill';
    pill.href = item.href;
    pill.innerHTML =
      '<span class="nav-text">' + item.name + '</span>' +
      (item.dropdown ? '<span class="nav-caret">' + CARET + '</span>' : '') +
      '<span class="active-bar"></span>' +
      '<span class="nav-hover-glow"></span>';
    wrap.appendChild(pill);
    gsap.fromTo(pill, { opacity: 0, y: -20 },
      { opacity: 1, y: 0, duration: 0.6, delay: m * 0.1 });
    gsap.to(pill.querySelector('.nav-text'), {
      keyframes: {
        textShadow: [
          '0 0 4px rgba(248,198,12,0.3)',
          '0 0 8px rgba(248,198,12,0.5)',
          '0 0 4px rgba(248,198,12,0.3)'
        ],
        easeEach: 'fmInOut'
      },
      duration: 3,
      repeat: -1
    });
    attachPillHover(pill);
    if (item.dropdown) {
      var dd = buildDropdown(item, m);
      wrap.appendChild(dd.el);
      registry[item.name] = {
        el: dd.el,
        groups: dd.groups,
        links: dd.links,
        underline: dd.underline,
        caret: pill.querySelector('.nav-caret'),
        centered: dd.centered,
        tl: null
      };
      wrap.addEventListener('mouseenter', function () { openDropdown(item.name); });
      wrap.addEventListener('mouseleave', scheduleClose);
      dd.el.addEventListener('mouseenter', function () { openDropdown(item.name); });
      dd.el.addEventListener('mouseleave', scheduleClose);
    }
    nav.appendChild(wrap);
  });
  function attachPillHover(pill) {
    var hoverTo = { y: -3, scale: 1.05, backgroundColor: 'rgba(220, 38, 38, 0.1)', duration: 0.3, ease: 'fmOut', overwrite: 'auto' };
    var restTo  = { y: 0, scale: 1, backgroundColor: 'rgba(220, 38, 38, 0)', duration: 0.3, ease: 'fmOut', overwrite: 'auto' };
    pill.addEventListener('mouseenter', function () { gsap.to(pill, hoverTo); });
    pill.addEventListener('mouseleave', function () { gsap.to(pill, restTo); });
    pill.addEventListener('mousedown',  function () { gsap.to(pill, { scale: 0.95, duration: 0.15, ease: 'fmOut', overwrite: 'auto' }); });
    pill.addEventListener('mouseup',    function () { gsap.to(pill, hoverTo); });
  }
  function buildDropdown(item, m) {
    var keys = Object.keys(item.dropdown);
    var wide = item.name === 'Bike Gear';
    var el = document.createElement('div');
    el.className = 'nav-dropdown';
    var centered = false;
    if (m >= NAV_ITEMS.length - 3)      el.classList.add('pos-right');
    else if (m <= 2)                    el.classList.add('pos-left');
    else { el.classList.add('pos-center'); centered = true; }
    el.style.width = keys.length > 2 ? '700px' : '450px';
    var sheen = document.createElement('div');
    sheen.className = 'dd-sheen';
    el.appendChild(sheen);
    var body = document.createElement('div');
    body.className = 'dd-body ' + (wide ? 'is-wide' : 'cols-' + Math.min(keys.length, 3));
    var groups = [], links = [];
    keys.forEach(function (title) {
      var g = document.createElement('div');
      g.className = 'dd-group' + (wide ? ' span-all' : '');
      var h = document.createElement('h3');
      h.className = 'dd-title';
      h.textContent = title;
      g.appendChild(h);
      var list = document.createElement('div');
      list.className = 'dd-links' + (wide ? ' grid-3' : '');
      item.dropdown[title].forEach(function (link) {
        var a = document.createElement('a');
        a.className = 'dd-link';
        a.href = link.href;
        a.innerHTML = '<span>' + link.name + '</span>';
        a.addEventListener('mouseenter', function () {
          gsap.to(a, { x: 2, scale: 1.01, duration: 0.15, ease: 'fmOut', overwrite: 'auto' });
        });
        a.addEventListener('mouseleave', function () {
          gsap.to(a, { x: 0, scale: 1, duration: 0.15, ease: 'fmOut', overwrite: 'auto' });
        });
        a.addEventListener('mousedown', function () {
          gsap.to(a, { scale: 0.98, duration: 0.1, overwrite: 'auto' });
        });
        list.appendChild(a);
        links.push(a);
      });
      g.appendChild(list);
      body.appendChild(g);
      groups.push(g);
    });
    el.appendChild(body);
    var underline = document.createElement('div');
    underline.className = 'dd-underline';
    el.appendChild(underline);

    return { el: el, groups: groups, links: links, underline: underline, centered: centered };
  }
  function openDropdown(name) {
    if (closeTimer) { clearTimeout(closeTimer); closeTimer = null; }
    if (openName === name) return;
    if (openName) closeDropdown(openName, true);
    openName = name;
    var d = registry[name];
    if (!d) return;
    d.el.classList.add('is-mounted');
    gsap.killTweensOf([d.el, d.groups, d.links, d.underline, d.caret]);
    gsap.to(d.caret, { rotate: 180, scale: 1.1, duration: 0.3, ease: 'fmOut' });
    d.caret.classList.add('is-open');
    gsap.fromTo(d.el,
      { opacity: 0, y: -15, scale: 0.92, xPercent: d.centered ? -50 : 0 },
      { opacity: 1, y: 0, scale: 1, xPercent: d.centered ? -50 : 0, duration: 0.3, ease: 'fmOut' });
    gsap.fromTo(d.groups, { opacity: 0, y: 10 },
      { opacity: 1, y: 0, duration: 0.3, delay: 0.1 });
    gsap.fromTo(d.links, { opacity: 0, x: -10 },
      { opacity: 1, x: 0, duration: 0.2, stagger: 0.01 });
    gsap.fromTo(d.underline, { scaleX: 0 },
      { scaleX: 1, duration: 0.5, delay: 0.2 });
  }
  function closeDropdown(name, instant) {
    var d = registry[name];
    if (!d) return;
    d.caret.classList.remove('is-open');
    gsap.to(d.caret, { rotate: 0, scale: 1, duration: 0.3, ease: 'fmOut' });
    gsap.to(d.el, {
      opacity: 0, y: -15, scale: 0.92,
      duration: instant ? 0 : 0.3,
      ease: 'fmOut',
      onComplete: function () { d.el.classList.remove('is-mounted'); }
    });
  }
  function scheduleClose() {
    if (closeTimer) clearTimeout(closeTimer);
    closeTimer = setTimeout(function () {         
      if (openName) { closeDropdown(openName); openName = null; }
      closeTimer = null;
    }, 150);
  }
  var brand = document.getElementById('brandLink');
  if (brand) {
    brand.addEventListener('mouseenter', function () { gsap.to(brand, { scale: 1.05, duration: 0.3, ease: 'fmOut', overwrite: 'auto' }); });
    brand.addEventListener('mouseleave', function () { gsap.to(brand, { scale: 1, duration: 0.3, ease: 'fmOut', overwrite: 'auto' }); });
    brand.addEventListener('mousedown',  function () { gsap.to(brand, { scale: 0.95, duration: 0.15, overwrite: 'auto' }); });
  }
  var cartIcon = document.querySelector('[data-cart-icon]');
  if (cartIcon) {
    gsap.to(cartIcon, {
      keyframes: { rotate: [0, 10, -10, 0], easeEach: 'fmInOut' },
      duration: 3, repeat: -1
    });
  }
  var badge = document.querySelector('[data-cart-badge]');
  if (badge) {
    gsap.fromTo(badge, { scale: 0 }, { scale: 1, duration: 0.45, ease: 'back.out(1.7)' });
    gsap.to(badge, {
      keyframes: { rotate: [0, 15, -15, 0], easeEach: 'fmInOut' },
      duration: 2, repeat: -1, delay: 0.45
    });
  }
  var pulseIcon = document.querySelector('[data-pulse-icon] .ico');
  if (pulseIcon) {
    gsap.to(pulseIcon, {
      keyframes: { scale: [1, 1.1, 1], easeEach: 'fmInOut' },
      duration: 4, repeat: -1
    });
  }
  document.querySelectorAll('.icon-btn').forEach(function (b) {
    b.addEventListener('mouseenter', function () { gsap.to(b, { scale: 1.15, duration: 0.3, ease: 'fmOut', overwrite: 'auto' }); });
    b.addEventListener('mouseleave', function () { gsap.to(b, { scale: 1, duration: 0.3, ease: 'fmOut', overwrite: 'auto' }); });
  });
  document.querySelectorAll('[data-social]').forEach(function (s) {
    s.addEventListener('mouseenter', function () {
      gsap.to(s, { scale: 1.2, duration: 0.3, ease: 'fmOut', overwrite: 'auto' });
      gsap.fromTo(s, { rotate: 0 }, { keyframes: { rotate: [0, -10, 10, 0] }, duration: 0.3 });
    });
    s.addEventListener('mouseleave', function () { gsap.to(s, { scale: 1, rotate: 0, duration: 0.3, ease: 'fmOut', overwrite: 'auto' }); });
  });
  var burger = document.getElementById('burgerBtn');
  var burgerIco = document.getElementById('burgerIco');
  var panel = document.getElementById('mobilePanel');
  var panelInner = document.getElementById('mobilePanelInner');
  var mobileOpen = false;
  var mLinks = [{ name: 'Home', href: '/' }].concat(NAV_ITEMS);
  mLinks.forEach(function (l) {
    var a = document.createElement('a');
    a.className = 'm-link';
    a.href = l.href;
    a.textContent = l.name;
    panelInner.appendChild(a);
  });
  if (burger) {
    burger.addEventListener('click', function () {
      mobileOpen = !mobileOpen;
      gsap.to(burgerIco, { rotate: mobileOpen ? 180 : 0, duration: 0.4, ease: 'back.out(1.4)' });
      if (mobileOpen) {
        panel.classList.add('is-mounted');
        gsap.fromTo(panel, { opacity: 0, height: 0 },
          { opacity: 1, height: 'auto', duration: 0.3 });
        gsap.fromTo(panelInner.children, { opacity: 0, x: -20 },
          { opacity: 1, x: 0, duration: 0.3, stagger: 0.1 });
      } else {
        gsap.to(panel, {
          opacity: 0, height: 0, duration: 0.3,
          onComplete: function () { panel.classList.remove('is-mounted'); }
        });
      }
    });
  }
})();
