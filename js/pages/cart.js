$(function (e) {
   $('.cart__item-del').on('click', function (e) {
       let $this = $(this),
           item = $this.closest('.cart__item');


      item.remove();
       calcPrice();
   });
});