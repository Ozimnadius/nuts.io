$(function () {

    let cabinetSwithes = document.querySelector('.cab__sws-list');
    if (cabinetSwithes) {

        let switches = new Switches({
            sws: '.cab__sws-list',
            sw: '.cab__sw',
            line: '.cab__subline',
            tab: '.cab__tab',
            tabs: '.cab__tabs',
            autoWidth: true
        }).init();
    }

    let headers = $('.compare__header'),
        rows = $('.compare__item-row');


    rows.each(function (i, elem) {
        let row = $(elem),
            rowH = row.outerHeight(),
            header = $(headers[i]),
            headerH = header.outerHeight(),
            maxH = headerH;

        if (rowH > headerH) {
            maxH = rowH;
        }

        row.css('height', maxH + 'px');
        header.css('height', maxH + 'px');
    });

    $('.pass__field-show').on('click', function (e) {
        let $this = $(this),
            field = $this.closest('.pass__field'),
            input = field.find('.input'),
            inputType = input.attr('type');

        if (inputType == 'password') {
            input.attr('type', 'text');
        } else {
            input.attr('type', 'password');
        }
    });

    $('.pass__form').validate({
        rules: {
            password: {
                required: true,
                minlength: 6
            },
            confirmPassword: {
                required: true,
                equalTo: "#password"
            },

        },
        messages: {
            password: {
                required: "Введите ваш пароль",
                minlength: "Не менее 6-ти символов"
            },
            confirmPassword: {
                required: "Введите ваш пароль",
                equalTo: "Пароли не совпадают"
            }
        },
        submitHandler: function(form) {
            console.log(this);
        }
    });

});