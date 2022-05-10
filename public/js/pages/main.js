
// Tabs
$(document).ready(function() {
    $('ul.tabs__hotel li a:first').addClass('tab-hotel-active');
    $('.tabs__container article').hide();
    $('.tabs__container article:first').show();

    $('ul.tabs__hotel li a').click(function() {
        $('ul.tabs__hotel li a').removeClass('tab-hotel-active');
        $(this).addClass('tab-hotel-active');
        $('.tabs__container article').hide();

        var activeTabHotel = $(this).attr('href');
        $(activeTabHotel).show();
        return false;
    });
});

// slider
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 80,
    loop: true,
    autoplay: {
        delay: 10000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        200:{
            slidesPerView: 1,
        },
        300:{
            
            slidesPerView: 1,
        },
        620:{
            slidesPerView: 1,
        },
        690:{
            slidesPerView: 1,
        },
        920:{
            slidesPerView: 2,
        },
        1240:{
            slidesPerView: 3,
        }
    }
});

// slider
var swiper = new Swiper(".topD", {
    slidesPerView: 3,
    spaceBetween: 80,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        200:{
            slidesPerView: 1,
        },
        300:{
            
            slidesPerView: 1,
        },
        620:{
            slidesPerView: 1,
        },
        690:{
            slidesPerView: 1,
        },
        920:{
            slidesPerView: 2,
        },
        1240:{
            slidesPerView: 3,
        }
    }
});

// slider
var swiper = new Swiper(".flayers", {
    slidesPerView: 1,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    breakpoints: {
        200:{
            slidesPerView: 1,
        },
        300:{
            
            slidesPerView: 1,
        },
        620:{
            slidesPerView: 2,
        },
        690:{
            slidesPerView: 2,
        },
        920:{
            slidesPerView: 3,
        },
        1240:{
            slidesPerView: 4,
        }
    }
});

// slider
var swiper = new Swiper(".circuite", {
    slidesPerView: 1,
    spaceBetween: 100,loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        200:{
            slidesPerView: 1,
        },
        300:{
            
            slidesPerView: 1,
        },
        620:{
            slidesPerView: 1,
        },
        690:{
            slidesPerView: 1,
        },
        920:{
            slidesPerView: 1,
        },
        1240:{
            slidesPerView: 1,
        }
    }
});