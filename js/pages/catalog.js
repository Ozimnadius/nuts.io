$(function () {
    $('.select').styler();

    $('body').on('click', '.catalog__types .type', function (e) {
        let $this = $(this),
            form = $this.closest('form'),
            type = $this.attr('data-type'),
            input = form.find('input[name=type]');

        if (input.val() != type) {
            input.val(type);

            let data = form.serialize();

            sendAjax(form, data);
        }
    });


    $('body').on('change', '.catalog__select-select .select', function (e) {
        let $this = $(this),
            form = $this.closest('form'),
            data = form.serialize();

        sendAjax(form, data);

    });

    function sendAjax(form, data) {
        $.ajax({
            dataType: "json",
            type: "POST",
            url: 'ajax.php',
            data: data,
            success: function (result) {
                if (result.status) {
                    form.replaceWith(result.html);
                    $('.select').styler();
                } else {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });
    }

});