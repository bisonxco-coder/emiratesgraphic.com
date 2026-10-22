/* global Swiper */
(function applyStoredLanguage() {
  try {
    const stored = localStorage.getItem("invy-lang");
    if (!stored) return;
    const root = document.documentElement;
    root.lang = stored === "ar" ? "ar" : stored === "fr" ? "fr" : "en";
    root.dir = stored === "ar" ? "rtl" : "ltr";
  } catch (_) {}
})();

(function () {
  function initFeaturedSwap() {
    const root = document.querySelector("[data-featured-swap]");
    if (!root) return;

    const cfg = {
      intervalMs: 2000,
      bounceEasing: "cubic-bezier(.22, 1.4, .36, 1)",
      durationMs: 520,
      // Swap order: left -> center -> right -> left
      slots: ["left", "center", "right"],
    };

    const wraps = Array.from(root.querySelectorAll(".swapWrap"));
    if (wraps.length !== 3) return;

    function flipAnimate(before) {
      wraps.forEach((el) => {
        const first = before.get(el);
        const last = el.getBoundingClientRect();
        if (!first) return;

        const dx = first.left - last.left;
        const dy = first.top - last.top;
        if (dx === 0 && dy === 0) return;

        const base = getComputedStyle(el).getPropertyValue("--slot-transform").trim() || "";
        el.animate(
          [
            { transform: `translate(${dx}px, ${dy}px) ${base}`.trim() },
            { transform: `${base}`.trim() || "none" },
          ],
          {
            duration: cfg.durationMs,
            easing: cfg.bounceEasing,
            fill: "both",
          }
        );
      });
    }

    function step() {
      const before = new Map(wraps.map((el) => [el, el.getBoundingClientRect()]));

      // rotate slot labels among elements
      wraps.forEach((el) => {
        const cur = el.getAttribute("data-slot");
        const idx = cfg.slots.indexOf(cur);
        const next = cfg.slots[(idx + 1) % cfg.slots.length];
        el.setAttribute("data-slot", next);
      });

      // wait for style/layout to apply then FLIP animate
      requestAnimationFrame(() => flipAnimate(before));
    }

    // Stack layout sooner for narrow laptops/tablets too
    const mql = window.matchMedia ? window.matchMedia("(max-width: 1100px)") : null;

    function swapIsMobile() {
      return mql ? mql.matches : false;
    }

    function resetSlotsToDefault() {
      if (wraps.length !== 3) return;
      wraps[0].setAttribute("data-slot", "left");
      wraps[1].setAttribute("data-slot", "center");
      wraps[2].setAttribute("data-slot", "right");
    }

    let timer = null;
    let hoverActive = false;

    function stopSwapTimer() {
      if (timer) {
        window.clearInterval(timer);
        timer = null;
      }
    }

    function startSwapTimer() {
      if (swapIsMobile()) return;
      if (!hoverActive) return;
      if (timer) return;
      // kick one swap immediately on hover for â€œwowâ€
      requestAnimationFrame(step);
      timer = window.setInterval(step, cfg.intervalMs);
    }

    function syncSwapLayout() {
      if (swapIsMobile()) {
        stopSwapTimer();
        resetSlotsToDefault();
        root.setAttribute("data-swap-mobile-stack", "");
      } else {
        root.removeAttribute("data-swap-mobile-stack");
        // desktop: only animate on hover
        stopSwapTimer();
        resetSlotsToDefault();
      }
    }

    if (mql) {
      mql.addEventListener("change", syncSwapLayout);
    }
    syncSwapLayout();

    // desktop: animate only on hover
    root.addEventListener("mouseenter", () => {
      hoverActive = true;
      startSwapTimer();
    });
    root.addEventListener("mouseleave", () => {
      hoverActive = false;
      stopSwapTimer();
      // cancel in-flight FLIP animations before resetting slots
      wraps.forEach((el) => {
        try {
          el.getAnimations().forEach((a) => a.cancel());
        } catch (_) {}
      });
      resetSlotsToDefault();
    });
  }

  const swiperEl = document.querySelector(".eventsSwiper");
  if (swiperEl && window.Swiper) {
    const swiper = new Swiper(swiperEl, {
      slidesPerView: "auto",
      spaceBetween: 4,
      centeredSlides: false,
      loop: true,
      breakpoints: {
        0: { slidesPerView: "auto", spaceBetween: 12 },
        700: { slidesPerView: "auto", spaceBetween: 16 },
        1200: { slidesPerView: "auto", spaceBetween: 22 },
      },
    });

    const prev = document.querySelector("[data-swiper-prev]");
    const next = document.querySelector("[data-swiper-next]");
    if (prev) prev.addEventListener("click", () => swiper.slidePrev());
    if (next) next.addEventListener("click", () => swiper.slideNext());
  }

  function initFeaturedVenues() {
    const stack = document.querySelector("[data-featured-venues]");
    if (!stack) return;

    const section = stack.closest(".venues");
    const tiles = Array.from(stack.querySelectorAll(".venue-tile"));
    const isTouchLike =
      window.matchMedia &&
      (window.matchMedia("(hover: none)").matches || window.matchMedia("(pointer: coarse)").matches);
    let hintEl = null;

    function applyStack() {
      tiles.forEach((tile, idx) => {
        tile.style.removeProperty("--tx");
        tile.style.removeProperty("--ty");
        tile.style.removeProperty("--r");
        tile.style.removeProperty("--s");
        tile.style.zIndex = String(20 + idx);
      });
      stack.classList.remove("is-expanded");
    }

    function applyExpanded() {
      const w = stack.clientWidth || 1;
      const h = stack.clientHeight || 1;

      tiles.forEach((tile, idx) => {
        const hidden = tile.getAttribute("data-hidden") === "1";
        if (hidden) return;

        const x = parseFloat(tile.getAttribute("data-x") || "0.5");
        const y = parseFloat(tile.getAttribute("data-y") || "0.5");
        const r = parseFloat(tile.getAttribute("data-r") || "0");
        const s = parseFloat(tile.getAttribute("data-s") || "1");
        const z = parseInt(tile.getAttribute("data-z") || String(20 + idx), 10);

        const tx = (x - 0.5) * w;
        const ty = (y - 0.5) * h;

        tile.style.setProperty("--tx", `${tx.toFixed(2)}px`);
        tile.style.setProperty("--ty", `${ty.toFixed(2)}px`);
        tile.style.setProperty("--r", `${r}deg`);
        tile.style.setProperty("--s", `${s}`);
        tile.style.zIndex = String(z);
      });

      stack.classList.add("is-expanded");
    }

    function setHintState() {
      if (!hintEl) return;
      const expanded = stack.classList.contains("is-expanded");
      hintEl.dataset.state = expanded ? "close" : "open";
      const text = hintEl.querySelector(".venues__hintText");
      if (text) text.textContent = expanded ? "Close" : "Explore venues";
      hintEl.setAttribute("aria-label", expanded ? "Close venues" : "Explore venues");
    }

    function ensureHint() {
      if (!section || !isTouchLike) return;
      if (hintEl) return;

      hintEl = document.createElement("button");
      hintEl.type = "button";
      hintEl.className = "venues__hint";
      hintEl.innerHTML = '<span class="venues__hintText">Explore venues</span>';
      section.appendChild(hintEl);
      setHintState();

      hintEl.addEventListener("click", (e) => {
        e.preventDefault();
        e.stopPropagation();
        if (!armed) return;

        if (stack.classList.contains("is-expanded")) applyStack();
        else applyExpanded();
        setHintState();
      });
    }

    let armed = false;
    if (section && "IntersectionObserver" in window) {
      const io = new IntersectionObserver(
        (entries) => {
          const entry = entries[0];
          if (!entry) return;
          if (entry.isIntersecting) armed = true;
        },
        { threshold: 0.35 }
      );
      io.observe(section);
    } else {
      armed = true;
    }

    if (section) {
      section.addEventListener("mouseenter", () => {
        if (!armed) return;
        applyExpanded();
      });
      section.addEventListener("mouseleave", () => {
        applyStack();
      });
    }

    // Touch devices: tap to toggle expanded/stacked
    if (section && isTouchLike) {
      ensureHint();
      section.addEventListener("click", (e) => {
        if (!armed) return;
        // avoid toggling when tapping links/buttons inside cards
        const t = e.target;
        if (t && t.closest && t.closest("a, button, summary")) return;

        if (stack.classList.contains("is-expanded")) applyStack();
        else applyExpanded();
        setHintState();
      });
    }

    // keep deterministic layout on resize
    let t = null;
    window.addEventListener("resize", () => {
      if (!stack.classList.contains("is-expanded")) return;
      if (t) window.clearTimeout(t);
      t = window.setTimeout(applyExpanded, 150);
    });

    // initial state: stacked in center
    applyStack();
  }

  function initScrollReveal() {
    const selectors = [
      ".hero__copy",
      ".events-hero__copy",
      ".event-detail-hero__summary",
      ".venues-hero__copy",
      ".venue-detail-hero__copy",
      ".about-hero__copy",
      ".about-story__title",
      ".about-story__card",
      ".about-story__team",
      ".about-numbers__intro",
      ".about-numbers__brand",
      ".about-stat",
      ".about-services__stage > h2",
      ".about-service",
      ".about-quote blockquote",
      ".about-quote__author",
      ".how-hero__heading",
      ".how-hero__photo",
      ".how-steps h2",
      ".how-step",
      ".blog-header__inner",
      ".blog-story",
      ".featured-events__kicker",
      ".featured-events h2",
      ".events__header",
      ".events-grid-section__header",
      ".venues-directory__header",
      ".event-card",
      ".venue-card",
      ".venue-partner__copy",
      ".venue-partner__visual",
      ".event-detail__sidebar",
      ".event-detail__content > section",
      ".venue-detail__sidebar",
      ".venue-detail__content > section",
      ".legal__aside",
      ".legal__section",
      ".cta__inner > *",
      ".footer__brand",
      ".footer__nav",
      ".footer__bottom",
    ];

    const elements = Array.from(document.querySelectorAll(selectors.join(",")));
    if (!elements.length) return;

    elements.forEach((element, index) => {
      element.classList.add("scroll-reveal");
      element.style.setProperty("--reveal-delay", `${(index % 6) * 55}ms`);

      if (element.matches(".venue-partner__visual, .about-story__team, .about-stat, .about-service--crew, .about-service--venue")) {
        element.setAttribute("data-reveal-direction", "right");
      } else if (element.matches(".event-detail__sidebar, .venue-detail__sidebar, .legal__aside, .about-numbers__intro, .about-numbers__brand, .about-service--find, .about-service--book")) {
        element.setAttribute("data-reveal-direction", "left");
      }
    });

    if (!("IntersectionObserver" in window)) {
      elements.forEach((element) => element.classList.add("is-visible"));
      return;
    }

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (!entry.isIntersecting) return;
          entry.target.classList.add("is-visible");
          observer.unobserve(entry.target);
        });
      },
      {
        threshold: 0.12,
        rootMargin: "0px 0px -48px",
      }
    );

    elements.forEach((element) => observer.observe(element));
  }

  // Close other tabs when one opens (all accordions)
  const accordions = Array.from(document.querySelectorAll("[data-accordion]"));
  accordions.forEach((accordion) => {
    const items = Array.from(accordion.querySelectorAll("details"));
    items.forEach((d) => {
      d.addEventListener("toggle", () => {
        if (!d.open) return;
        items.forEach((other) => {
          if (other !== d) other.open = false;
        });
      });
    });
  });

  function initMobileNav() {
    const nav = document.querySelector(".nav");
    if (!nav) return;

    const toggle = nav.querySelector(".nav__toggle");
    const drawer = nav.querySelector(".nav__drawer");
    if (!toggle || !drawer) return;

    function setOpen(isOpen) {
      nav.classList.toggle("is-open", isOpen);
      toggle.setAttribute("aria-expanded", isOpen ? "true" : "false");
      toggle.setAttribute("aria-label", isOpen ? "Close menu" : "Open menu");
      if (isOpen) {
        drawer.removeAttribute("hidden");
      } else {
        drawer.setAttribute("hidden", "");
      }
    }

    toggle.addEventListener("click", () => {
      setOpen(!nav.classList.contains("is-open"));
    });

    drawer.querySelectorAll("a").forEach((link) => {
      link.addEventListener("click", () => setOpen(false));
    });

    document.addEventListener("keydown", (event) => {
      if (event.key === "Escape") setOpen(false);
    });

    const mql = window.matchMedia ? window.matchMedia("(min-width: 1101px)") : null;
    if (mql) {
      const sync = () => {
        if (mql.matches) setOpen(false);
      };
      if (typeof mql.addEventListener === "function") mql.addEventListener("change", sync);
      else if (typeof mql.addListener === "function") mql.addListener(sync);
    }
  }

  function initLocationFilters() {
    const hasEvents = (value) => value === "Dubai, UAE";

    function bind(select, hideEls, emptyEl) {
      if (!select) return;
      const update = () => {
        const show = hasEvents(select.value);
        hideEls.forEach((el) => {
          if (el) el.hidden = !show;
        });
        if (emptyEl) emptyEl.hidden = show;
      };
      select.addEventListener("change", update);
      update();
    }

    bind(
      document.getElementById("eventsLocation"),
      [document.querySelector(".events__carousel"), document.querySelector(".events__nav")],
      document.getElementById("eventsEmpty")
    );
    bind(
      document.getElementById("eventsPageLocation"),
      [document.querySelector(".events-grid")],
      document.getElementById("eventsPageEmpty")
    );
    bind(
      document.getElementById("venuesPageLocation"),
      [document.querySelector(".venues-directory__grid")],
      document.getElementById("venuesPageEmpty")
    );
  }

  function initLanguageSelector() {
    const select = document.querySelector("[data-lang-select]");
    if (!select) return;

    const stored = localStorage.getItem("invy-lang");
    if (stored) {
      select.value = stored;
    }

    function applyLanguage(lang) {
      const root = document.documentElement;
      root.lang = lang === "ar" ? "ar" : lang === "fr" ? "fr" : "en";
      root.dir = lang === "ar" ? "rtl" : "ltr";
      try {
        localStorage.setItem("invy-lang", lang);
      } catch (_) {}
    }

    select.addEventListener("change", () => {
      applyLanguage(select.value);
    });
  }

  initFeaturedSwap();
  initFeaturedVenues();
  initScrollReveal();
  initMobileNav();
  initLocationFilters();
  initLanguageSelector();
})();
