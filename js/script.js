document.addEventListener('DOMContentLoaded', function () {
    const menuBtn = document.querySelector('.menu');
    const closeBtn = document.querySelector('.fechar');
    const nav = document.querySelector('nav');
    const menuOverlay = document.querySelector('.menu-overlay');
    const toggleMenus = document.querySelectorAll('.toggle');
    const searchIcon = document.getElementById('search-icon');
    const searchBar = document.querySelector('.search-bar');

    function toggleMenu() {
        if (searchBar.classList.contains('show')) {
            searchBar.classList.remove('show');
        }
        nav.classList.toggle('active');
        menuBtn.classList.toggle('active');
        document.body.classList.toggle('menu-open');
    }

    function closeAllMenus() {
        nav.classList.remove('active');
        menuBtn.classList.remove('active');
        document.body.classList.remove('menu-open');
        document.querySelectorAll('ul.submenu').forEach(menu => menu.classList.remove('show'));
    }

    menuBtn.addEventListener('click', toggleMenu);
    closeBtn.addEventListener('click', closeAllMenus);

    document.addEventListener('click', function (event) {
        if (!nav.contains(event.target) && !menuBtn.contains(event.target)) {
            closeAllMenus();
        }
    });

    toggleMenus.forEach(toggle => {
        toggle.addEventListener('click', function (e) {
            e.preventDefault();
            const submenu = this.nextElementSibling;
            submenu.classList.toggle('show');
        });
    });

    searchIcon.addEventListener('click', function () {
        searchBar.classList.toggle('show');
    });

    // Carrossel
    let currentSlide = 0;
    const slides = document.querySelectorAll('.carousel-slide');
    const totalSlides = slides.length;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.transform = `translateX(${100 * (i - index)}%)`;
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
    }

    setInterval(nextSlide, 5000); // Mudar slide a cada 5 segundos

    showSlide(currentSlide);
});
