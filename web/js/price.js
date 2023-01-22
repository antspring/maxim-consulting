let buttons_category = document.querySelectorAll('.btn-service-price'),
    buttons_info = document.querySelectorAll('.services-price-list-item-button'),
    blocks_info = document.querySelectorAll('.services-price-list-item-info'),
    blocks = document.querySelectorAll('.services-price-list'),
    buttons_switcher = document.querySelectorAll('.price-switchers'),
    price_switchers = document.querySelectorAll('.price-switcher-block');

buttons_switcher.forEach(button => {
    button.onclick = function (event) {
        buttons_switcher.forEach(item => {
            item.classList.remove('active');
        })
        event.target.classList.add('active');
        price_switchers.forEach(price_switcher => {
            price_switcher.classList.add('d-none');
            if (event.target.id === price_switcher.id) {
                price_switcher.classList.remove('d-none');
            }
        })
    }
});

buttons_info.forEach(button => {
    button.onclick = function (event) {
        blocks_info.forEach(block => {
            block.classList.add('d-none');
            if (block.id === event.target.id) {
                block.classList.remove('d-none');
            }
        })
    }
})

if (window.innerWidth >= 576) {
    buttons_category.forEach(button => {
        button.onclick = function (event) {
            buttons_category.forEach(btn => {
                btn.classList.remove('main-background');
                btn.classList.remove('body-m-600');
            })
            event.target.classList.add('main-background');
            event.target.classList.add('body-m-600');
            blocks.forEach(block => {
                block.classList.add('d-none');
                if (block.id === event.target.id) {
                    block.classList.remove('d-none');
                }
            })
        }
    })
}

let buttons_adaptive = document.querySelectorAll('.services-price-category-item-button');

buttons_adaptive.forEach(button_adaptive => {
    button_adaptive.onclick = function (event) {
        buttons_adaptive.forEach(item => {
            item.classList.remove('services-price-category-item-button-active')
        })
        event.target.classList.add('services-price-category-item-button-active');
        blocks.forEach(block => {
            block.classList.add('d-none');
            if (block.id === event.target.id) {
                block.classList.remove('d-none');
                button_adaptive.parentElement.after(block.parentElement);
            }
        })
    }
})