$(function () {

    $('.search__input').on('input', $.debounce(sendAjax, 300));

    $('.search__input').closest();

    function sendAjax(){
        let $this = $('.search__input'),
            val = $this.val(),
            form = $this.closest('.search'),
            rep = form.find('.search__ajax'),
            data = form.serialize();

        if (val.length > 2) {
            $.ajax({
                dataType: "json",
                type: "POST",
                url: 'ajax.php',
                data: data,
                success: function (result) {
                    if (result.status) {
                        rep.html(result.html).addClass('active');
                    } else {
                        alert('Что-то пошло не так, попробуйте еще раз!!!');
                    }
                },
                error: function (result) {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            });
        } else {
            rep.removeClass('active');
        }
    }

    $('.search__clear').on('click', function (e) {
        let $this = $(this),
            form = $this.closest('.search');

        form.trigger('reset');
    });

    $('.search').on('reset', function (e) {
        let $this = $(this),
            ajax = $this.find('.search__ajax');
        ajax.removeClass('active');
    });

    let ispecsSwithes = document.querySelector('.ispecs__sws-list');
    if (ispecsSwithes) {

        let switches = new Switches({
            sws: '.ispecs__sws-list',
            sw: '.ispecs__sw',
            line: '.ispecs__subline',
            tab: '.ispecs__tab',
            tabs: '.ispecs__tabs',
            autoWidth: true
        }).init();
    }

});