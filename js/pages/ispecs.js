$(function () {
    let maxH = 0,
        tabs = $('.ispecs__tabs');
    $('.ispecs__tab').each(function (indx, elem) {
        let tab = $(elem),
            height = tab.outerHeight();

        if (maxH < height) {
            maxH = height;
        }
    });
    tabs.css('height', maxH + 'px');


    $('.count__up').on('click', function (e) {
        e.preventDefault();

        let $this = $(this),
            count = $this.closest('.count'),
            input = count.find('.count__input'),
            val = Number(input.val());
        val++;

        input.val(val);

    });

    $('.count__down').on('click', function (e) {
        e.preventDefault();

        let $this = $(this),
            count = $this.closest('.count'),
            input = count.find('.count__input'),
            val = Number(input.val());
        if (val>1) {
            val--;
        }

        input.val(val);

    });

});