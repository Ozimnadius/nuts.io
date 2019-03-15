$(function () {
    let row = $('.arts__row_bottom'),
        items = row.find('.arts__item'),
        imgs = $('.arts__row_bottom .arts__item-image'),
        maH = 0;

    items.each(function (indx,elem) {
        let item = $(elem),
            img = item.find('.arts__item-image'),
            height = img.outerHeight();

        if (maH<height){
            maH = height;
        }
    });


    imgs.css('height', maH);
});