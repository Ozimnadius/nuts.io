$(function () {
    var ispecsSlider = new Swiper ('.ispecs__container', {
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

    });
});