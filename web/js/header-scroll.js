window.onscroll = function () {
    const scrollTopPosition = document.documentElement.scrollTop;
    const header = document.querySelector('.header');
    const button = document.querySelector('.header .btn-request');
    const burger_button = document.querySelector('.burger-menu-open-image');
    if (scrollTopPosition > 0) {
        header.classList.add('header-slick');
        button.classList.add('btn-request-primary');
        button.classList.add('btn-request-primary-outline');
        button.classList.remove('btn-request-secondary');
        button.classList.remove('btn-request-secondary-outline');
        burger_button.src = '/images/icons/icon_menu.png';
    } else {
        header.classList.remove('header-slick');
        button.classList.remove('btn-request-primary');
        button.classList.remove('btn-request-primary-outline');
        button.classList.add('btn-request-secondary');
        button.classList.add('btn-request-secondary-outline');
    }
}