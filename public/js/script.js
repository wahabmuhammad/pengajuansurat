document.addEventListener('DOMContentLoaded', function () {
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarMenu = document.querySelector('.navbar-menu');

    navbarToggler.addEventListener('click', function () {
        this.classList.toggle('open');
        navbarMenu.classList.toggle('open');
    });

    // Ensure navbar menu is initially displayed on larger screens
    if (window.innerWidth >= 768) {
        navbarMenu.classList.add('open');
    }
});