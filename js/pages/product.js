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

    $('.pr__rating').on('change','input', function (e) {
        let $this = $(this),
            val = $this.val(),
            item = $this.closest('.buyItem'),
            id = item.data('id'),
            rating = $this.closest('.rating'),
            data = {
                action: 'productRating',
                id: id,
                val: val
            };

        $.ajax({
            dataType: "json",
            type: "POST",
            url: 'ajax.php',
            data: data,
            success: function (result) {
                if (result.status) {
                    rating.find('input').prop('checked', false);
                    rating.find('input[value='+result.rating+']').prop('checked', true);
                } else {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });


    });

    $('.rev__rating').on('change','input', function (e) {
        let $this = $(this),
            val = $this.val(),
            item = $this.closest('.rev'),
            id = item.data('id'),
            rating = $this.closest('.rating'),
            data = {
                action: 'productRating',
                id: id,
                val: val
            };

        $.ajax({
            dataType: "json",
            type: "POST",
            url: 'ajax.php',
            data: data,
            success: function (result) {
                if (result.status) {
                    rating.find('input').prop('checked', false);
                    rating.find('input[value='+result.rating+']').prop('checked', true);
                } else {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });


    });
});