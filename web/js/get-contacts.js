let select = document.querySelector('.contacts-select'),
    address = document.querySelector('.contact-address'),
    time = document.querySelector('.contact-time'),
    tel_number = document.querySelector('.contact-tel'),
    email = document.querySelector('.contact-email');

select.onchange = function (event) {
    async function getContacts() {
        await fetch('/site/get-contacts?id=' + event.target.value).then(async (response) => {
            response = JSON.parse(await response.text());
            address.innerHTML = response.address;
            time.innerHTML = response.time;
            tel_number.innerHTML = response.tel_number;
            email.innerHTML = response.email;
        })
    }

    getContacts();
}