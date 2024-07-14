const sliderMain__swiperBg = new Swiper('.sliderMain__swiperBg', {
    speed: 1300,
    slidesPerView: 1,
    spaceBetween: 0,
    // effect:'fade'


});
const sliderMain__swiperText = new Swiper('.sliderMain__swiperText', {
    speed: 300,
    slidesPerView: 1,
    spaceBetween: 0,
    autoplay: {
        delay: 2000,
        pauseOnMouseEnter: true,
    },
    navigation: {
        nextEl: '.sliderMain-swiper-button-next',
        prevEl: '.sliderMain-swiper-button-prev',
    },
    thumbs: {
        swiper: sliderMain__swiperBg,
    },
});
const featuredProjects__swiper = new Swiper('.featuredProjects__swiper', {
    speed: 300,
    slidesPerView: 1,
    spaceBetween: 10,
    autoplay: {
        delay: 2000,
        pauseOnMouseEnter: true,
    },
    navigation: {
        nextEl: '.featuredProjects-swiper-button-next',
        prevEl: '.featuredProjects-swiper-button-prev',
    },
    breakpoints: {
        576: {
            slidesPerView: 1.5,
            spaceBetween: 14,
        },
        768: {
            slidesPerView: 1.9,
            spaceBetween: 14,
        },
        992: {
            slidesPerView: 2.5,
            spaceBetween: 14,
        },
        1200: {
            slidesPerView: 3,
            spaceBetween: 14,
        }
    }

});
const commentUser__swiper = new Swiper('.commentUser__swiper', {
    speed: 300,
    slidesPerView: 1.2,
    spaceBetween: 10,
    autoplay: {
        delay: 2000,
        pauseOnMouseEnter: true,
    },
    navigation: {
        nextEl: '.commentUser-swiper-button-next',
        prevEl: '.commentUser-swiper-button-prev',
    },
    breakpoints: {
        576: {
            slidesPerView: 1.2,
            spaceBetween: 10
        },
        768: {
            slidesPerView: 1.5,
            spaceBetween: 20
        },
        992: {
            slidesPerView: 2.5,
            spaceBetween: 14,
        },
        1200: {
            slidesPerView: 3,
            spaceBetween: 14,
        }
    }

});
const singlePage__swiper = new Swiper('.single-page__swiper', {
    speed: 300,
    slidesPerView: 1,
    spaceBetween: 0,
    autoplay: {
        delay: 2000,
        pauseOnMouseEnter: true,
    },
    navigation: {
        nextEl: '.single-page-swiper-button-prev',
        prevEl: '.single-page-swiper-button-next',
    },
});
addEventListener("load", (event) => {

    // console.log(window.innerWidth);
    // window.addEventListener('DOMContentLoaded', () => {

    // if (window.innerWidth < 786) {
    //     services__swiper.enableSwiper()
    // }else{
    //     services__swiper.destroy( true, true )
    // }
    // })
    let windowWidth = window.innerWidth
    if (992 > windowWidth) {
        const services__swiper = new Swiper('.services__swiper', {
            speed: 500,
            slidesPerView: 1.3,
            spaceBetween: 10,
            autoplay: {
                delay: 2000,
                pauseOnMouseEnter: true,
            },
            navigation: {
                nextEl: '.services-swiper-button-prev',
                prevEl: '.services-swiper-button-next',
            },
            breakpoints: {
                576: {
                    slidesPerView: 1.6,
                    spaceBetween: 10,
                },
            }
        });
    }
})



let showOverly = $('#bg-overly');
showOverly.on('click', function () {
    $('#ResponsiveMenuMobile').removeClass('show')
    showOverly.removeClass('showOverly')
    $('#ResponsiveMenuMobile').removeClass('show')
    showOverly.removeClass('showOverly')
    showOverly.removeClass('showOverly')
    $('.HamburgerAni').removeClass('close')
    $('body').removeClass('hideScroll')

})

$('#menuHamberger').on('click', () => {
    $('#ResponsiveMenuMobile').toggleClass('show')
    showOverly.addClass('showOverly')
    $('.HamburgerAni').addClass('close')
    $('body').addClass('hideScroll')

})
$('.ResponsiveMenuMobile_menu .toggleDropmenu').slideToggle(300)
$('.ResponsiveMenuMobile_menu .toggleDropmenu').slideToggle(300)
$('.ResponsiveMenuMobile_menu nav ul .toggleDropmenu').slideUp(300)
$('.ResponsiveMenuMobile_menu nav ul li').on('click', function () {
    $(this).siblings().children('ul').slideUp()
    $(this).children('ul').slideToggle(300)
})
$('#ResponsiveMenuMobile_close').on('click', function () {
    $('#ResponsiveMenuMobile').removeClass('show')
    showOverly.removeClass('showOverly');
    $('.HamburgerAni').removeClass('close')
    $('body').removeClass('hideScroll')

})