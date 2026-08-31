(function () {
    'use strict';

    var root = document.documentElement;
    var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // A page loaded into a hidden tab — a background tab, a print, or a
    // screenshot service rendering the document off-screen — gets its
    // observers and transitions throttled by the browser, which would leave
    // every revealed element stuck at zero opacity forever. So motion is
    // only ever enabled for a document that is actually on screen.
    var animate = !reduced && document.visibilityState === 'visible';

    // Scripting opts in to motion. Until this line runs, every animated
    // element is in its finished, visible state — so a failed script can
    // never leave the page blank.
    if (animate) {
        root.classList.add('js-motion');
    }

    /* ---------------------------------------------------------------
       Scroll reveals
       --------------------------------------------------------------- */
    var revealables = document.querySelectorAll('.reveal');

    var revealAll = function () {
        revealables.forEach(function (el) { el.classList.add('is-visible'); });
    };

    if (animate && 'IntersectionObserver' in window) {
        var revealObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) return;
                entry.target.classList.add('is-visible');
                revealObserver.unobserve(entry.target);
            });
        }, { rootMargin: '0px 0px -6% 0px', threshold: 0.05 });

        revealables.forEach(function (el) { revealObserver.observe(el); });

        // Last resort. If the observer never fires — a browser quirk, a tab
        // that went to sleep between load and paint — nothing is left hidden.
        window.setTimeout(revealAll, 2500);
    } else {
        revealAll();
    }

    /* ---------------------------------------------------------------
       The wash drifts a little slower than the page. A shallow parallax
       only — enough to feel like depth, never enough to notice.
       --------------------------------------------------------------- */
    var wash = document.querySelector('[data-wash]');

    if (wash && animate) {
        var washTicking = false;

        var placeWash = function () {
            var offset = Math.min(window.scrollY, 600) * 0.15;
            wash.style.translate = '0 ' + offset.toFixed(1) + 'px';
            washTicking = false;
        };

        window.addEventListener('scroll', function () {
            if (washTicking) return;
            washTicking = true;
            window.requestAnimationFrame(placeWash);
        }, { passive: true });

        placeWash();
    }

    /* ---------------------------------------------------------------
       The pointer preview — the signature.

       Hovering a writing or project row fades in a small card that
       trails the pointer. It is an enhancement on top of a row that
       already works: it never appears on a coarse pointer (where there
       is no pointer to follow), nor under reduced motion, and the card
       starts hidden in CSS so neither case ever sees it.
       --------------------------------------------------------------- */
    var card = document.querySelector('[data-cursor-preview]');
    var rows = document.querySelectorAll('[data-preview-title]');
    var finePointer = window.matchMedia('(pointer: fine)').matches;

    if (card && rows.length && finePointer && animate) {
        // The template gallery serves this document under a path prefix and
        // rewrites href/src attributes to match it. Data attributes are not
        // rewritten, so preview paths are rebased against the one rewritten
        // URL every page is guaranteed to carry. On a real site the icon sits
        // at the root, the prefix comes out empty, and nothing changes.
        var base = '';
        var icon = document.querySelector('link[rel="icon"]');

        if (icon) {
            var iconHref = icon.getAttribute('href') || '';
            var cut = iconHref.lastIndexOf('/favicon.png');
            if (cut > 0) base = iconHref.slice(0, cut);
        }

        var image = card.querySelector('[data-preview-image-slot]');
        var titleEl = card.querySelector('[data-preview-title-slot]');
        var noteEl = card.querySelector('[data-preview-note-slot]');

        // Where the pointer is, and where the card has caught up to.
        var pointerX = 0;
        var pointerY = 0;
        var cardX = 0;
        var cardY = 0;
        var active = false;
        var running = false;

        var place = function () {
            // The card sits below and right of the pointer, and is nudged
            // back inside the viewport near the edges.
            var width = card.offsetWidth;
            var height = card.offsetHeight;
            var targetX = Math.min(pointerX + 24, window.innerWidth - width - 16);
            var targetY = Math.min(pointerY + 24, window.innerHeight - height - 16);

            // Ease toward the pointer rather than snapping to it. This lag is
            // the whole feel of the thing.
            cardX += (targetX - cardX) * 0.16;
            cardY += (targetY - cardY) * 0.16;

            card.style.translate = cardX.toFixed(1) + 'px ' + cardY.toFixed(1) + 'px';

            if (active) {
                window.requestAnimationFrame(place);
            } else {
                running = false;
            }
        };

        var track = function (event) {
            pointerX = event.clientX;
            pointerY = event.clientY;
        };

        var show = function (row, event) {
            var title = row.getAttribute('data-preview-title') || '';
            var note = row.getAttribute('data-preview-note') || '';
            var src = row.getAttribute('data-preview-image') || '';

            titleEl.textContent = title;

            // The card exists to add what the row does not already show. A
            // project row prints its description, so it gets the thumbnail
            // instead; a writing row prints only a date, so it gets the line.
            noteEl.textContent = note;
            noteEl.classList.toggle('hidden', src !== '');

            // The frame stays hidden until the bytes arrive, so the card never
            // opens around an empty box. A cached image fires load immediately.
            image.classList.add('hidden');

            if (src) {
                image.setAttribute('src', base + src);
            } else {
                image.removeAttribute('src');
            }

            pointerX = event.clientX;
            pointerY = event.clientY;

            // Drop the card at the pointer before revealing it, so the first
            // frame does not fly in from wherever it was last left.
            cardX = pointerX + 24;
            cardY = pointerY + 24;

            active = true;
            card.classList.add('is-active');

            if (!running) {
                running = true;
                window.requestAnimationFrame(place);
            }
        };

        image.addEventListener('load', function () {
            image.classList.remove('hidden');
        });

        var hide = function () {
            active = false;
            card.classList.remove('is-active');
        };

        rows.forEach(function (row) {
            row.addEventListener('pointerenter', function (event) {
                if (event.pointerType !== 'mouse') return;
                show(row, event);
            });
            row.addEventListener('pointermove', track);
            row.addEventListener('pointerleave', hide);
            // A keyboard user never sees the card, so it must not linger
            // behind a focus jump either.
            row.addEventListener('focus', hide);
        });

        window.addEventListener('scroll', hide, { passive: true });
    }

    /* ---------------------------------------------------------------
       Mobile menu: close on outside click and on Escape
       --------------------------------------------------------------- */
    var menus = document.querySelectorAll('[data-mobile-menu]');

    if (menus.length) {
        document.addEventListener('click', function (event) {
            menus.forEach(function (menu) {
                if (menu.open && !menu.contains(event.target)) {
                    menu.open = false;
                }
            });
        });

        document.addEventListener('keydown', function (event) {
            if (event.key !== 'Escape') return;
            menus.forEach(function (menu) { menu.open = false; });
        });
    }
})();
