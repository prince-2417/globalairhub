// Hamburger Toggle
const hamburger = document.getElementById('hamburger-btn');
const mainNav = document.getElementById('main-nav');
if (hamburger && mainNav) {
    hamburger.addEventListener('click', function(e) {
        e.stopPropagation();
        hamburger.classList.toggle('open');
        mainNav.classList.toggle('open');
    });
    document.addEventListener('click', function(e) {
        if (!mainNav.contains(e.target) && !hamburger.contains(e.target)) {
            hamburger.classList.remove('open');
            mainNav.classList.remove('open');
        }
    });
}

document.querySelectorAll('.action-item.dropdown').forEach(function(item) {
    item.addEventListener('click', function(e) {
        e.stopPropagation();
        const isOpen = this.classList.contains('open');
        document.querySelectorAll('.action-item.dropdown').forEach(d => d.classList.remove('open'));
        if (!isOpen) this.classList.add('open');
    });
});

document.addEventListener('click', function() {
    document.querySelectorAll('.action-item.dropdown').forEach(d => d.classList.remove('open'));
});

// Main navigation dropdown
document.querySelectorAll('.nav-dropdown-toggle').forEach(function(toggle) {
    toggle.addEventListener('click', function(event) {
        event.stopPropagation();
        const dropdown = this.closest('.nav-dropdown');
        const isOpen = dropdown.classList.contains('open');

        document.querySelectorAll('.nav-dropdown').forEach(function(item) {
            item.classList.remove('open');
            item.querySelector('.nav-dropdown-toggle').setAttribute('aria-expanded', 'false');
            item.querySelector('.nav-dropdown-menu').hidden = true;
        });

        if (!isOpen) {
            dropdown.classList.add('open');
            this.setAttribute('aria-expanded', 'true');
            dropdown.querySelector('.nav-dropdown-menu').hidden = false;
        }
    });
});

document.addEventListener('click', function() {
    document.querySelectorAll('.nav-dropdown').forEach(function(item) {
        item.classList.remove('open');
        item.querySelector('.nav-dropdown-toggle').setAttribute('aria-expanded', 'false');
        item.querySelector('.nav-dropdown-menu').hidden = true;
    });
});

// Offers Carousel
(function () {
    const outer = document.querySelector('.offers-track-outer');
    const grid  = document.querySelector('.offers-grid');
    if (!outer || !grid) return;

    const items   = grid.querySelectorAll('.offer-item');
    const total   = items.length;
    let current   = 0;

    function getVisible() {
        if (window.innerWidth <= 768) return 1;
        if (window.innerWidth <= 991) return 2;
        return 4;
    }

    function goTo(index) {
        const visible  = getVisible();
        const maxIndex = Math.max(0, total - visible);
        current        = Math.max(0, Math.min(index, maxIndex));
        const itemW    = items[0].offsetWidth + 18;
        grid.style.transform = 'translateX(-' + current * itemW + 'px)';
    }

    document.querySelector('.prev-btn').addEventListener('click', function () { goTo(current - 1); });
    document.querySelector('.next-btn').addEventListener('click', function () { goTo(current + 1); });
    window.addEventListener('resize', function () { goTo(0); });

    // Touch swipe support
    let touchStartX = 0;
    outer.addEventListener('touchstart', function(e) { touchStartX = e.touches[0].clientX; }, { passive: true });
    outer.addEventListener('touchend', function(e) {
        const diff = touchStartX - e.changedTouches[0].clientX;
        if (Math.abs(diff) > 40) goTo(diff > 0 ? current + 1 : current - 1);
    }, { passive: true });
})();

// Testimonials Carousel
(function() {
    const track = document.getElementById('testiTrack');
    if (!track) return;

    const cards = track.querySelectorAll('.testi-card');
    const total = cards.length;
    let current = 0;

    function isMobile() {
        return window.innerWidth <= 991;
    }

    function getVisible() {
        return isMobile() ? 1 : 2;
    }

    function goTo(index) {
        if (isMobile()) {
            // Mobile pe scroll snap use karo
            const cardWidth = cards[0].offsetWidth;
            track.scrollLeft = index * cardWidth;
            current = index;
            return;
        }
        const steps = total - getVisible() + 1;
        current = Math.max(0, Math.min(index, steps - 1));
        const cardWidth = cards[0].offsetWidth + 20;
        track.style.transform = 'translateX(-' + (current * cardWidth) + 'px)';
    }

    document.getElementById('testiPrev').addEventListener('click', () => goTo(current - 1));
    document.getElementById('testiNext').addEventListener('click', () => goTo(current + 1));

    window.addEventListener('resize', () => {
        current = 0;
        track.style.transform = 'translateX(0)';
        track.scrollLeft = 0;
    });
})();
