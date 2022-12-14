const links = document.querySelectorAll('.paragraph-main .link');

links.forEach((link) => {
    if (link.href === location.href) {
        link.classList.add('link-active');
        link.classList.remove('link');
    }
})