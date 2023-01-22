let buttons_blog = document.querySelectorAll('.blog-switcher-button'),
    blog_container = document.querySelector('#pjax-block');
buttons_blog.forEach(button => {
    button.onclick = function (event) {
        buttons_blog.forEach(item => {
            item.classList.remove('active');
        })
        event.target.classList.add('active');

        async function getBlogRubric() {
            await fetch('/blog/rubric?id=' + event.target.id).then(async (response) => {
                blog_container.innerHTML = await response.text()
            });
        }

        getBlogRubric();
    }
});