// LibreCode motion — progressive enhancement over GSAP; no-ops without
// GSAP or when the user prefers reduced motion (CSS keeps content visible).
(function () {
  "use strict";

  var reduce = window.matchMedia &&
    window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  if (typeof window.gsap === "undefined" || reduce) {
    return;
  }

  var gsap = window.gsap;
  if (window.ScrollTrigger) gsap.registerPlugin(window.ScrollTrigger);

  // Enable the hidden initial states now that we know JS + GSAP are live.
  document.documentElement.classList.add("gsap-ready");

  function ready(fn) {
    if (document.readyState !== "loading") fn();
    else document.addEventListener("DOMContentLoaded", fn);
  }

  ready(function () {

    // Scroll progress bar
    var bar = document.querySelector(".lc-progress");
    if (bar && window.ScrollTrigger) {
      gsap.to(bar, {
        scaleX: 1,
        ease: "none",
        scrollTrigger: { start: 0, end: "max", scrub: 0.3 }
      });
    }

    // Hero load sequence
    var title = document.querySelector("[data-hero-title]");
    var tl = gsap.timeline({ defaults: { ease: "power3.out" } });

    if (title) {
      tl.to(".lc-hero__eyebrow", { opacity: 1, y: 0, duration: 0.6 })
        .fromTo(title.querySelectorAll(".lc-line > span"),
            { yPercent: 110, opacity: 0 },
            { yPercent: 0, opacity: 1, duration: 1, stagger: 0.12 }, "-=0.25")
        .to(".lc-hero__lead", { opacity: 1, y: 0, duration: 0.7 }, "-=0.6")
        .to(".lc-hero__actions", { opacity: 1, y: 0, duration: 0.7 }, "-=0.55")
        .to(".lc-terminal", { opacity: 1, y: 0, duration: 0.7,
             onStart: typeTerminal }, "-=0.5");
    }

    // Terminal typing
    function typeTerminal() {
      var el = document.querySelector("[data-terminal]");
      if (!el || el.dataset.typed) return;
      el.dataset.typed = "1";
      var lines = [
        { html: '<span class="p">$</span> whoami' },
        { html: '<span class="o">cooperativa de software livre — sem chefes, com cooperados</span>' },
        { html: '<span class="p">$</span> ./valores --list' },
        { html: '<span class="o">transparência · liberdade · democracia · comunidade</span>' }
      ];
      var out = "", li = 0;
      el.innerHTML = "";
      function nextLine() {
        if (li >= lines.length) return;
        var full = lines[li].html;
        var tmp = document.createElement("span");
        tmp.innerHTML = full;
        var text = tmp.textContent;
        var cls = full.indexOf('class="p"') > -1 ? "p" : "o";
        var i = 0;
        (function typeChar() {
          i++;
          el.innerHTML = out +
            '<span class="' + cls + '">' +
            escapeHtml(text.slice(0, i)) + "</span>";
          if (i < text.length) {
            gsap.delayedCall(0.028, typeChar);
          } else {
            out += '<span class="' + cls + '">' + escapeHtml(text) + "</span><br>";
            li++;
            gsap.delayedCall(0.5, nextLine);
          }
        })();
      }
      nextLine();
    }
    function escapeHtml(s) {
      return s.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;");
    }

    // Scroll reveals
    if (window.ScrollTrigger) {
      gsap.utils.toArray('[data-reveal="up"]').forEach(function (el) {
        if (el.closest(".lc-hero")) return; // handled by hero timeline
        gsap.to(el, {
          opacity: 1, y: 0, duration: 0.9, ease: "power3.out",
          scrollTrigger: { trigger: el, start: "top 88%", once: true }
        });
      });

      gsap.utils.toArray('[data-reveal="stagger"]').forEach(function (el) {
        gsap.to(el.children, {
          opacity: 1, y: 0, duration: 0.8, ease: "power3.out", stagger: 0.14,
          scrollTrigger: { trigger: el, start: "top 85%", once: true }
        });
      });

      // Parallax drift on solution media
      gsap.utils.toArray("[data-media]").forEach(function (el) {
        gsap.fromTo(el, { yPercent: -6 }, {
          yPercent: 6, ease: "none",
          scrollTrigger: {
            trigger: el.closest(".lc-solution") || el,
            start: "top bottom", end: "bottom top", scrub: true
          }
        });
      });
    }

    // Infinite marquees
    gsap.utils.toArray("[data-marquee]").forEach(function (track) {
      var speed = parseFloat(track.dataset.speed || "40");
      var originals = Array.prototype.slice.call(track.children);
      var setWidth = track.scrollWidth;
      if (!setWidth) return;
      var minWidth = track.parentElement.offsetWidth + setWidth;
      var guard = 0;
      while (track.scrollWidth < minWidth && guard++ < 40) {
        originals.forEach(function (node) {
          track.appendChild(node.cloneNode(true));
        });
      }
      var loopDuration = setWidth / speed;
      gsap.to(track, {
        x: -setWidth,
        duration: loopDuration,
        ease: "none",
        repeat: -1,
        modifiers: {
          x: gsap.utils.unitize(gsap.utils.wrap(-setWidth, 0))
        }
      });
    });

    // Magnetic buttons (pointer, non-touch)
    if (window.matchMedia("(pointer:fine)").matches) {
      document.querySelectorAll(".lc-btn").forEach(function (btn) {
        btn.addEventListener("mousemove", function (e) {
          var r = btn.getBoundingClientRect();
          gsap.to(btn, {
            x: (e.clientX - r.left - r.width / 2) * 0.28,
            y: (e.clientY - r.top - r.height / 2) * 0.4,
            duration: 0.4, ease: "power3.out"
          });
        });
        btn.addEventListener("mouseleave", function () {
          gsap.to(btn, { x: 0, y: 0, duration: 0.5, ease: "elastic.out(1,0.4)" });
        });
      });
    }

    // Default CSS renders a swipeable scroll-snap carousel; on desktop this
    // upgrades it to a GSAP pinned horizontal filmstrip driven by vertical scroll.
    (function () {
      var showcase = document.querySelector("#nc-showcase");
      var track = showcase && showcase.querySelector("[data-nc-track]");
      if (!showcase || !track || !window.ScrollTrigger) return;

      var panels = gsap.utils.toArray("[data-nc-panel]", track);
      var progressDots = showcase.querySelectorAll("[data-nc-rail] .nc-rail__dots b");
      var progressLabel = showcase.querySelector("[data-nc-rail-label]");
      if (!panels.length) return;

      function panelLabel(panel) {
        var labelElement = panel.querySelector(".nc-panel__idx, .lc-eyebrow");
        return labelElement ? labelElement.textContent.trim() : "";
      }

      function markActivePanel(activeIndex) {
        for (var dotIndex = 0; dotIndex < progressDots.length; dotIndex++) {
          progressDots[dotIndex].classList.toggle("is-active", dotIndex === activeIndex);
        }
        if (progressLabel && panels[activeIndex]) {
          progressLabel.textContent = panelLabel(panels[activeIndex]);
        }
      }

      var isDesktop = window.matchMedia("(min-width: 880px) and (pointer: fine)").matches;

      if (isDesktop) {
        showcase.classList.add("is-pinned");

        var getScrollDistance = function () {
          return track.scrollWidth - track.clientWidth;
        };

        var horizontalScroll = gsap.to(track, {
          x: function () { return -getScrollDistance(); },
          ease: "none",
          scrollTrigger: {
            trigger: showcase,
            start: "top top",
            end: function () { return "+=" + getScrollDistance(); },
            pin: true,
            scrub: 1,
            anticipatePin: 1,
            invalidateOnRefresh: true
          }
        });

        panels.forEach(function (panel, panelIndex) {
          window.ScrollTrigger.create({
            trigger: panel,
            containerAnimation: horizontalScroll,
            start: "left 70%",
            end: "right 30%",
            onToggle: function (panelTrigger) {
              panel.classList.toggle("is-current", panelTrigger.isActive);
              if (panelTrigger.isActive) markActivePanel(panelIndex);
            }
          });

          var screenshot = panel.querySelector("[data-nc-media]");
          if (screenshot) {
            gsap.fromTo(screenshot, { xPercent: 6 }, {
              xPercent: -6, ease: "none",
              scrollTrigger: {
                trigger: panel,
                containerAnimation: horizontalScroll,
                start: "left right",
                end: "right left",
                scrub: true
              }
            });
          }

          panel.addEventListener("focus", function () {
            if (!window.ScrollToPlugin || panels.length < 2) return;
            var pinTrigger = horizontalScroll.scrollTrigger;
            var targetScroll = pinTrigger.start +
              (pinTrigger.end - pinTrigger.start) * (panelIndex / (panels.length - 1));
            gsap.to(window, {
              duration: 0.6, ease: "power2.inOut",
              scrollTo: { y: targetScroll, autoKill: true }
            });
          });
        });

        panels[0].classList.add("is-current");
        markActivePanel(0);

        function scrollToPanel(index) {
          if (!window.ScrollToPlugin || panels.length < 2) return;
          var pinTrigger = horizontalScroll.scrollTrigger;
          if (!pinTrigger) return;
          var target = pinTrigger.start +
            (pinTrigger.end - pinTrigger.start) * (index / (panels.length - 1));
          gsap.to(window, {
            duration: 0.7, ease: "power2.inOut",
            scrollTo: { y: target, autoKill: false }
          });
        }
        for (var desktopDot = 0; desktopDot < progressDots.length; desktopDot++) {
          (function (index) {
            progressDots[index].addEventListener("click", function () {
              scrollToPanel(index);
            });
          })(desktopDot);
        }

      } else {
        var syncProgressToScroll = function () {
          var nearestPanel = Math.round(track.scrollLeft / track.clientWidth);
          markActivePanel(Math.max(0, Math.min(panels.length - 1, nearestPanel)));
        };
        track.addEventListener("scroll", function () {
          window.requestAnimationFrame(syncProgressToScroll);
        }, { passive: true });
        markActivePanel(0);

        for (var carouselDot = 0; carouselDot < progressDots.length; carouselDot++) {
          (function (index) {
            progressDots[index].addEventListener("click", function () {
              track.scrollTo({ left: index * track.clientWidth, behavior: "smooth" });
            });
          })(carouselDot);
        }
      }
    })();

    if (window.ScrollTrigger) window.ScrollTrigger.refresh();
  });
})();
