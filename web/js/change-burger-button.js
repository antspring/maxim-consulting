let button = document.querySelector('.burger-menu-open-image');

if (window.innerWidth <= 576) {
    console.log(button);
    button.src = '/images/icons/icon_menu_white.png';
} else {
    button.src = '/images/icons/icon_menu.png';
}