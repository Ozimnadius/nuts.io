$(function () {
    $('.revRating').on('change','input', function (e) {
        let $this = $(this),
            val = $this.val(),
            item = $this.closest('.rev'),
            id = item.data('id'),
            rating = $this.closest('.rating'),
            data = {
                action: 'reviewRating',
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

    $('.revLike').on('click', function (e) {
        let $this = $(this),
            count = $this.find('.rev__like-count'),
            val = Number(count.text()),
            item = $this.closest('.rev'),
            id = item.data('id'),
            data = {
                action: 'revLike',
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
                    count.text(result.value);
                } else {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });
    });

    $('.revDislike').on('click', function (e) {
        let $this = $(this),
            count = $this.find('.rev__dislike-count'),
            val = Number(count.text()),
            item = $this.closest('.rev'),
            id = item.data('id'),
            data = {
                action: 'revDislike',
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
                    count.text(result.value);
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