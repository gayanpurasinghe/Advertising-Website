document.addEventListener('DOMContentLoaded', function () {
    let lastScrollTop = 0;
    const header = document.querySelector('.head');
    const threshold = 50; // Minimum scroll amount before hiding

    if (!header) return;

    window.addEventListener('scroll', function () {
        let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

        // Prevent negative scroll values (e.g. mobile bounce)
        if (currentScroll < 0) {
            currentScroll = 0;
        }

        if (currentScroll > lastScrollTop && currentScroll > threshold) {
            // Scrolling down
            header.classList.add('hidden');
        } else {
            // Scrolling up
            header.classList.remove('hidden');
        }
        lastScrollTop = currentScroll;
    }, { passive: true });
});
