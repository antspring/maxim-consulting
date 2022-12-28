let button = document.querySelector('.burger-menu-open-image'),
    button_request = document.querySelector('#btn-request');

if (window.innerWidth <= 576) {
    button.src = '/images/icons/icon_menu_white.png';
} else {
    button.src = '/images/icons/icon_menu.png';
}
window.addEventListener('scroll', function () {
    let scrollTopPosition = document.documentElement.scrollTop;
    if (scrollTopPosition === 0 && window.innerWidth <= 576) {
        button.src = '/images/icons/icon_menu_white.png';
    }

    if (scrollTopPosition === 0){
        button_request.classList.remove('btn-request-primary');
        button_request.classList.remove('btn-request-primary-outline');
        button_request.classList.add('btn-request-secondary');
        button_request.classList.add('btn-request-secondary-outline');
    }
})