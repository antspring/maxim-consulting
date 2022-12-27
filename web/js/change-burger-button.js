let button = document.querySelector('.burger-menu-open-image');

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
})