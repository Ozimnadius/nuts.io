$(function () {
    let feed = $('.feed'),
        feedWrap = feed.find('.feed__wrap');

    feed.validate(
        {
            rules: {
                name: "required",
                email: "required"
            },
            messages: {
                name: "Введите ваше Имя",
                email: "Введите ваш E-mail",
            },

            submitHandler: function (form) {
                sendAjax(form);
            }
        }
    );

    feed.on('click', '.feed__close', function (e) {
        let success = $(this).closest('.feed__success');
        success.remove();
    });

    function sendAjax(form) {
        let data = $(form).serialize();

        $.ajax({
            dataType: "json",
            type: "POST",
            url: 'ajax.php',
            data: data,
            success: function (result) {
                if (result.status) {
                    feedWrap.append(result.html);
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