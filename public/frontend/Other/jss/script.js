//Fixed navbar
let nav = document.querySelector(".navigation-wrap");
window.onscroll = function () {
    if (document.documentElement.scrollTop > 20) {
        nav.classList.add("scroll-on");
    }
    else {
        nav.classList.remove("scroll-on");
    }
}

//nav hide

let navBar = document.querySelectorAll('.nav-link');
let navCollapse = document.querySelector('.navbar-collapse.collapse');
navBar.forEach(function (a) {
    a.addEventListener("click", function () {
        navCollapse.classList.remove("show");
    })
})
//Owl carousel
const prevIcon = '<i class="fa-solid fa-arrow-left icon"></i>';
const nextIcon = '<i class="fa-solid fa-arrow-right icon"></i>';

$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    // responsiveClass: true,
    autoplay: true,
    nav: true,
    navText: [
        prevIcon,
        nextIcon
    ],
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});

