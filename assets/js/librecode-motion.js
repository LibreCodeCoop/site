// LibreCode motion — progressive enhancement. No-ops without GSAP or under
// prefers-reduced-motion, where CSS keeps everything visible on its own.
(function () {
  "use strict";

  var prefersReducedMotion = window.matchMedia &&
    window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  if (typeof window.gsap === "undefined" || prefersReducedMotion) {
    return;
  }

  var gsap = window.gsap;
  if (window.ScrollTrigger) gsap.registerPlugin(window.ScrollTrigger);

  // Switches the CSS from "everything visible" to the hidden initial states
  // the animations reveal from — only now that JS + GSAP are confirmed live.
  document.documentElement.classList.add("gsap-ready");

  function runWhenReady(callback) {
    if (document.readyState !== "loading") callback();
    else document.addEventListener("DOMContentLoaded", callback);
  }

  runWhenReady(function () {

    var progressBar = document.querySelector(".lc-progress");
    if (progressBar && window.ScrollTrigger) {
      gsap.to(progressBar, {
        scaleX: 1,
        ease: "none",
        scrollTrigger: { start: 0, end: "max", scrub: 0.3 }
      });
    }

    // Scoped to the hero root so it also drives the `.lc-pagehero` variants
    // without the scroll reveals below animating the same elements twice.
    var heroTitle = document.querySelector("[data-hero-title]");
    var heroRoot = heroTitle && heroTitle.closest(".lc-hero, .lc-pagehero");
    var heroTimeline = gsap.timeline({ defaults: { ease: "power3.out" } });

    if (heroTitle && heroRoot) {
      var heroEyebrow = heroRoot.querySelector(".lc-hero__eyebrow");
      var heroTerminal = heroRoot.querySelector(".lc-terminal");
      var heroContentAfterTitle = gsap.utils.toArray("[data-reveal]", heroRoot)
        .filter(function (element) {
          return element !== heroEyebrow &&
            element !== heroTerminal &&
            !heroTitle.contains(element);
        });

      if (heroEyebrow) {
        heroTimeline.to(heroEyebrow, { opacity: 1, y: 0, duration: 0.6 });
      }
      heroTimeline.fromTo(heroTitle.querySelectorAll(".lc-line > span"),
        { yPercent: 110, opacity: 0 },
        { yPercent: 0, opacity: 1, duration: 1, stagger: 0.12 }, "-=0.25");
      if (heroContentAfterTitle.length) {
        heroTimeline.to(heroContentAfterTitle,
          { opacity: 1, y: 0, duration: 0.7, stagger: 0.08 }, "-=0.55");
      }
      if (heroTerminal) {
        heroTimeline.to(heroTerminal,
          { opacity: 1, y: 0, duration: 0.7, onStart: typeTerminal }, "-=0.5");
      }
    }

    function typeTerminal() {
      var terminalElement = document.querySelector("[data-terminal]");
      if (!terminalElement || terminalElement.dataset.typed) return;
      terminalElement.dataset.typed = "1";

      var terminalLines = [
        { html: '<span class="p">$</span> whoami' },
        { html: '<span class="o">gente que decide junta e escreve código aberto</span>' },
        { html: '<span class="p">$</span> ./valores --list' },
        { html: '<span class="o">transparência · liberdade · democracia · comunidade</span>' }
      ];
      var renderedHtml = "";
      var lineIndex = 0;
      terminalElement.innerHTML = "";

      function typeNextLine() {
        if (lineIndex >= terminalLines.length) return;
        var lineHtml = terminalLines[lineIndex].html;
        var decoder = document.createElement("span");
        decoder.innerHTML = lineHtml;
        var lineText = decoder.textContent;
        var lineClass = lineHtml.indexOf('class="p"') > -1 ? "p" : "o";
        var characterIndex = 0;

        (function typeNextCharacter() {
          characterIndex++;
          terminalElement.innerHTML = renderedHtml +
            '<span class="' + lineClass + '">' +
            escapeHtml(lineText.slice(0, characterIndex)) + "</span>";
          if (characterIndex < lineText.length) {
            gsap.delayedCall(0.028, typeNextCharacter);
          } else {
            renderedHtml += '<span class="' + lineClass + '">' +
              escapeHtml(lineText) + "</span><br>";
            lineIndex++;
            gsap.delayedCall(0.5, typeNextLine);
          }
        })();
      }
      typeNextLine();
    }

    function escapeHtml(value) {
      return value.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;");
    }

    if (window.ScrollTrigger) {
      gsap.utils.toArray('[data-reveal="up"]').forEach(function (revealElement) {
        if (revealElement.closest(".lc-hero, .lc-pagehero")) return;
        gsap.to(revealElement, {
          opacity: 1, y: 0, duration: 0.9, ease: "power3.out",
          scrollTrigger: { trigger: revealElement, start: "top 88%", once: true }
        });
      });

      gsap.utils.toArray('[data-reveal="stagger"]').forEach(function (revealElement) {
        if (revealElement.closest(".lc-hero, .lc-pagehero")) return;
        gsap.to(revealElement.children, {
          opacity: 1, y: 0, duration: 0.8, ease: "power3.out", stagger: 0.14,
          scrollTrigger: { trigger: revealElement, start: "top 85%", once: true }
        });
      });

      gsap.utils.toArray("[data-media]").forEach(function (mediaElement) {
        gsap.fromTo(mediaElement, { yPercent: -6 }, {
          yPercent: 6, ease: "none",
          scrollTrigger: {
            trigger: mediaElement.closest(".lc-solution") || mediaElement,
            start: "top bottom", end: "bottom top", scrub: true
          }
        });
      });
    }

    gsap.utils.toArray("[data-marquee]").forEach(function (marqueeTrack) {
      var pixelsPerSecond = parseFloat(marqueeTrack.dataset.speed || "40");
      var originalNodes = Array.prototype.slice.call(marqueeTrack.children);
      var singleSetWidth = marqueeTrack.scrollWidth;
      if (!singleSetWidth) return;

      // Clone the content until the track is wide enough to cover the viewport
      // plus one full set, so the wrapped loop never shows a gap.
      var minimumTrackWidth = marqueeTrack.parentElement.offsetWidth + singleSetWidth;
      var cloneGuard = 0;
      while (marqueeTrack.scrollWidth < minimumTrackWidth && cloneGuard++ < 40) {
        originalNodes.forEach(function (node) {
          marqueeTrack.appendChild(node.cloneNode(true));
        });
      }

      gsap.to(marqueeTrack, {
        x: -singleSetWidth,
        duration: singleSetWidth / pixelsPerSecond,
        ease: "none",
        repeat: -1,
        modifiers: {
          x: gsap.utils.unitize(gsap.utils.wrap(-singleSetWidth, 0))
        }
      });
    });

    if (window.matchMedia("(pointer:fine)").matches) {
      document.querySelectorAll(".lc-btn").forEach(function (magneticButton) {
        magneticButton.addEventListener("mousemove", function (event) {
          var bounds = magneticButton.getBoundingClientRect();
          gsap.to(magneticButton, {
            x: (event.clientX - bounds.left - bounds.width / 2) * 0.28,
            y: (event.clientY - bounds.top - bounds.height / 2) * 0.4,
            duration: 0.4, ease: "power3.out"
          });
        });
        magneticButton.addEventListener("mouseleave", function () {
          gsap.to(magneticButton, { x: 0, y: 0, duration: 0.5, ease: "elastic.out(1,0.4)" });
        });
      });
    }

    // The CSS renders a swipeable scroll-snap carousel by default; on desktop
    // this upgrades it to a GSAP filmstrip pinned to the vertical scroll.
    (function initNextcloudShowcase() {
      var showcase = document.querySelector("#nc-showcase");
      var panelTrack = showcase && showcase.querySelector("[data-nc-track]");
      if (!showcase || !panelTrack || !window.ScrollTrigger) return;

      var panels = gsap.utils.toArray("[data-nc-panel]", panelTrack);
      var progressDots = showcase.querySelectorAll("[data-nc-rail] .nc-rail__dots b");
      var progressLabel = showcase.querySelector("[data-nc-rail-label]");
      if (!panels.length) return;

      function getPanelLabel(panel) {
        var labelElement = panel.querySelector(".nc-panel__idx, .lc-eyebrow");
        return labelElement ? labelElement.textContent.trim() : "";
      }

      function markActivePanel(activeIndex) {
        progressDots.forEach(function (dot, dotIndex) {
          dot.classList.toggle("is-active", dotIndex === activeIndex);
        });
        if (progressLabel && panels[activeIndex]) {
          progressLabel.textContent = getPanelLabel(panels[activeIndex]);
        }
      }

      var isDesktop = window.matchMedia("(min-width: 880px) and (pointer: fine)").matches;

      if (isDesktop) {
        showcase.classList.add("is-pinned");

        var getHorizontalScrollDistance = function () {
          return panelTrack.scrollWidth - panelTrack.clientWidth;
        };

        var horizontalScroll = gsap.to(panelTrack, {
          x: function () { return -getHorizontalScrollDistance(); },
          ease: "none",
          scrollTrigger: {
            trigger: showcase,
            start: "top top",
            end: function () { return "+=" + getHorizontalScrollDistance(); },
            pin: true,
            scrub: 1,
            anticipatePin: 1,
            invalidateOnRefresh: true
          }
        });

        var scrollToPanel = function (panelIndex) {
          if (!window.ScrollToPlugin || panels.length < 2) return;
          var pinTrigger = horizontalScroll.scrollTrigger;
          if (!pinTrigger) return;
          var targetScroll = pinTrigger.start +
            (pinTrigger.end - pinTrigger.start) * (panelIndex / (panels.length - 1));
          gsap.to(window, {
            duration: 0.7, ease: "power2.inOut",
            scrollTo: { y: targetScroll, autoKill: false }
          });
        };

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

          var panelMedia = panel.querySelector("[data-nc-media]");
          if (panelMedia) {
            gsap.fromTo(panelMedia, { xPercent: 6 }, {
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
            scrollToPanel(panelIndex);
          });
        });

        panels[0].classList.add("is-current");
        markActivePanel(0);

        progressDots.forEach(function (dot, dotIndex) {
          dot.addEventListener("click", function () {
            scrollToPanel(dotIndex);
          });
        });

      } else {
        var syncProgressToScroll = function () {
          var nearestPanelIndex = Math.round(panelTrack.scrollLeft / panelTrack.clientWidth);
          markActivePanel(Math.max(0, Math.min(panels.length - 1, nearestPanelIndex)));
        };
        panelTrack.addEventListener("scroll", function () {
          window.requestAnimationFrame(syncProgressToScroll);
        }, { passive: true });
        markActivePanel(0);

        progressDots.forEach(function (dot, dotIndex) {
          dot.addEventListener("click", function () {
            panelTrack.scrollTo({ left: dotIndex * panelTrack.clientWidth, behavior: "smooth" });
          });
        });
      }
    })();

    if (window.ScrollTrigger) window.ScrollTrigger.refresh();
  });
})();
