document.addEventListener('DOMContentLoaded', function () {
    let el_a = document.querySelectorAll('.nav a');
    let el_li = document.querySelectorAll('.nav li');
    for (let i = 0; i < el_a.length; i++) {
        if (el_a[i].href === window.location.href) {
            el_li[i].className = "active";
        }
    }
}, false);
