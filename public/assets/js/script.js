document.addEventListener('DOMContentLoaded', function () {
    let lastScrollTop = 0;
    const header = document.querySelector('.head');
    const threshold = 50;

    if (!header) return;

    window.addEventListener('scroll', function () {
        let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

        if (currentScroll < 0) {
            currentScroll = 0;
        }

        if (currentScroll > lastScrollTop && currentScroll > threshold) {

            header.classList.add('hidden');
        } else {

            header.classList.remove('hidden');
        }
        lastScrollTop = currentScroll;
    }, { passive: true });
});
