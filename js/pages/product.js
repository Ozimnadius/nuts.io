$(function () {
    $('.pr__img').on('click', function (e) {

        let $this = $(this),
            imgs = $('.pr__img'),
            img = $this.find('.pr__img-img'),
            src = img.attr('src'),
            image = $('.pr__image-img');

        imgs.removeClass('active');
        image.attr('src', src);
        $this.addClass('active');

    });


    let productSwithes = document.querySelector('.pr__sws-list');
    if (productSwithes) {

        let switches = new Switches({
            sws: '.pr__sws-list',
            sw: '.pr__sw',
            line: '.pr__subline',
            tab: '.pr__tab',
            tabs: '.pr__tabs',
            autoWidth: true
        }).init();
    }
});