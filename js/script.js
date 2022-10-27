(function($) {

    "use strict";

    var swiper = new Swiper(".swiper-container", {
        slidesPerView: 1.5,
        spaceBetween: 10,
        centeredSlides: true,
        freeMode: true,
        grabCursor: true,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        },
        autoplay: {
            delay: 4000,
            disableOnInteraction: false
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        breakpoints: {
            500: {
                slidesPerView: 1
            },
            700: {
                slidesPerView: 1.5
            }
        }
    });
    $(document).ready(function(){

        $('body.single-download').find('style').remove();

    });
})(jQuery);