require = "https://kit.fontawesome.com/531dcd88f8.js";

let popup = document.getElementById("popup");

function openPopup() {
    popup.classList.add("open-popup");
}

function closePopup() {
    popup.classList.remove("open-popup");
}

document.addEventListener("DOMContentLoaded", function () {
    // Membuat fungsi umum untuk scroll ke bagian target
    function scrollToSection(targetId) {
        const targetSection = document.getElementById(targetId);

        if (targetSection) {
            window.scrollTo({
                top:
                    targetSection.offsetTop -
                    document.querySelector("header").offsetHeight,
                behavior: "smooth",
            });
        }
    }

    // Menambahkan event listener untuk semua tautan navigasi
    const navLinks = document.querySelectorAll(".menu-link");

    navLinks.forEach(function (link) {
        link.addEventListener("click", function (event) {
            event.preventDefault();
            const targetId = this.getAttribute("href").substring(1);
            scrollToSection(targetId);
        });
    });
});

$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 3,
                autoWidth: false,
                center: true,
            },
        },
        nav: true,
        navText: [
            '<i class="fa-solid fa-circle-chevron-left fa-2xl"></i>',
            '<i class="fa-solid fa-circle-chevron-right fa-2xl"></i>',
        ],

        onInitialized: function () {
            // Custom positioning of navigation icons
            $(".owl-nav").addClass("custom-owl-nav");
        },
    });
});
