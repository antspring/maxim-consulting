window.onscroll = function () {
    const scrollTopPosition = document.documentElement.scrollTop;
    const header = document.querySelector('.header');
    const button = document.querySelector('.header .btn-request');
    if (scrollTopPosition > 0) {
        header.classList.add('header-slick');
        button.classList.add('btn-request-primary');
        button.classList.add('btn-request-primary-outline');
        button.classList.remove('btn-request-secondary');
        button.classList.remove('btn-request-secondary-outline');
    }
}