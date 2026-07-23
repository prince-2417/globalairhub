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
