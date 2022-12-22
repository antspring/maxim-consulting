let btn_open = document.querySelector('.burger-menu-open'),
    btn_close = document.querySelector('.burger-menu-close'),
    list = document.querySelector('.nav-items-list'),
    list_child = document.querySelectorAll('.nav-items-list li');
btn_open.onclick = function () {
    list.classList.add('nav-items-list-active');
    list.classList.remove('d-none');
    list.classList.remove('p-0');
    list_child.forEach(el => {
        el.classList.add('header-m-400');
        el.classList.remove('body-m-400')
    });
};
btn_close.onclick = function () {
    list.classList.remove('nav-items-list-active');
    list.classList.add('d-none');
    list.classList.add('p-0');
    list_child.forEach(el => {
        el.classList.remove('header-m-400');
        el.classList.add('body-m-400')
    });
}