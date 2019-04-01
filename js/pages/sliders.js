$(function () {
    let ispecsSlider = new Swiper ('.ispecs__container', {
        slidesPerView: 4,
        slidesPerGroup: 4,
        spaceBetween: 20,
        navigation: {
            nextEl: '.ispecs__next .arrow',
            prevEl: '.ispecs__prev .arrow',
        },
        pagination: {
            el: '.ispecs__pag',
            clickable: true
        },
        breakpoints: {
            // when window width is <= 1199.99px
            767.99: {
                slidesPerView: 1,
                slidesPerGroup: 1,
                spaceBetween: 20
            },
            // when window width is <= 1199.99px
            1199.99: {
                slidesPerView: 2,
                slidesPerGroup: 2,
                spaceBetween: 20
            }
        }

    });

    let irevsSlider = new Swiper ('.irevs__container', {
        slidesPerView: 2,
        spaceBetween: 20,
        loop: true,
        navigation: {
            nextEl: '.irevs__next .arrow',
            prevEl: '.irevs__prev .arrow',
        },
        breakpoints: {
            // when window width is <= 1199.99px
            767.99: {
                slidesPerView: 1,
                spaceBetween: 10,
                pagination: {
                    el: '.irevs__pag',
                    clickable: true
                },
            },
            // when window width is <= 1199.99px
            1199.99: {
                slidesPerView: 1,
                spaceBetween: 10
            }
        }
    });

    let recentlySlider = new Swiper ('.recently__container', {
        slidesPerView: 4,
        spaceBetween: 20,
        navigation: {
            nextEl: '.recently__next .arrow',
            prevEl: '.recently__prev .arrow',
        },
        breakpoints: {
            767.99: {
                slidesPerView: 1,
                spaceBetween: 20,
                pagination: {
                    el: '.recently__pag',
                    clickable: true
                },
            },
            1199.99: {
                slidesPerView: 2,
                spaceBetween: 20,
                pagination: {
                    el: '.recently__pag',
                    clickable: true
                },
            }
        }
    });

    let catalogSlider = new Swiper ('.catalog__banner-container', {
        loop: true,
        speed: 1000,
        pagination: {
            el: '.catalog__banner-pag',
            clickable: true
        },
        autoplay: {
            delay: 3000,
        }
    });

    let compareSwiper = new Swiper ('.compare__container', {
        slidesPerView: 3,
        spaceBetween: 20,
        scrollbar: {
            el: '.compare__scrollbar',
            hide: false,
            draggable: true
        },
        mousewheel: {},
        breakpoints: {
            767.99: {
                slidesPerView: 1
            },
            1199.99: {
                slidesPerView: 2
            }
        }
    });

    $('.ccerts__slider').slick({
        centerMode: true,
        centerPadding: '160px',
        slidesToShow: 1,
        arrows: false,
        dots: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '0px',
                    slidesToShow: 1
                }
            }
        ]
    });
});