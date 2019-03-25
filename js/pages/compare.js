$(function () {
    let compareLink = $('.compare-link');
    $('body').on('click', '.compareProduct', function (e) {
        e.preventDefault();
        let $this = $(this),
            item = $this.closest('.buyItem'),
            id = item.data('id'),
            title = $this.find('.compareProduct__title'),
            data = {
                action: 'compare',
                id: id
            };

        $.ajax({
            dataType: "json",
            type: "POST",
            url: 'ajax.php',
            data: data,
            success: function (result) {
                if (result.status) {
                    compareLink.replaceWith(result.html);
                    $this.addClass('disabled');
                    title.text('В сравнении');
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