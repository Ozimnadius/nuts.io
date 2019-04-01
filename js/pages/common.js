$('input[type=tel]').mask('+7 (999) 999-99-99');

function number_format(number, decimals, dec_point, thousands_sep) {
    var i, j, kw, kd, km;
    if (isNaN(decimals = Math.abs(decimals))) {
        decimals = 2;
    }
    if (dec_point == undefined) {
        dec_point = ",";
    }
    if (thousands_sep == undefined) {
        thousands_sep = ".";
    }
    i = parseInt(number = (+number || 0).toFixed(decimals)) + "";
    if ((j = i.length) > 3) {
        j = j % 3;
    } else {
        j = 0;
    }
    km = (j ? i.substr(0, j) + thousands_sep : "");
    kw = i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands_sep);
    kd = (decimals ? dec_point + Math.abs(number - i).toFixed(decimals).replace(/-/, 0).slice(2) : "");
    return km + kw + kd;
}

function Switches(prop) {
    this.sws = document.querySelector(prop.sws);
    this.width = this.sws.offsetWidth;
    this.swsList = document.querySelectorAll(prop.sw);
    this.line = document.querySelector(prop.line);
    this.tabs = document.querySelectorAll(prop.tab);
    this.tabsObj = document.querySelector(prop.tabs);
    this.tabSelector = prop.tab;
    this.autoWidth = prop.autoWidth || false;
    // this.scrollbar = prop.scrollbar || true;

    if (prop.switchActive === false) {
        this.switchActive = false
    } else {
        this.switchActive = true;
    }

    if (prop.scrollbar === false) {
        this.scrollbar = false;
    } else {
        this.scrollbar = true;
    }

    let that = this;

    this.init = function () {
        let $this = that.swsList[0],
            percent = ($this.offsetLeft / that.width) * 100,
            id = $this.dataset.id,
            maxH = 0,
            tab = document.querySelector(that.tabSelector + '[data-id="' + id + '"]');


        for (let i = 0; i < that.swsList.length; i++) {
            that.swsList[i].classList.remove('active');
        }

        for (let i = 0; i < that.tabs.length; i++) {
            let tab = that.tabs[i],
                height = tab.offsetHeight;
            tab.classList.remove('active');
            if (maxH < height) {
                maxH = height;
            }
        }
        that.tabsObj.style.height = maxH + 'px';

        tab.classList.add('active');
        $this.classList.add('active');

        if (that.scrollbar) {
            that.line.style.left = percent + '%';

            if (that.autoWidth) {
                let lineWidth = $this.offsetWidth + 'px';
                that.line.style.width = lineWidth;
            }
        }
    };

    for (let i = 0; i < that.swsList.length; i++) {
        that.swsList[i].addEventListener('click', function (e) {

            let percent = (this.offsetLeft / that.width) * 100,
                id = this.dataset.id,
                tab = document.querySelector(that.tabSelector + '[data-id="' + id + '"]');


            for (let i = 0; i < that.swsList.length; i++) {
                that.swsList[i].classList.remove('active');
            }

            for (let i = 0; i < that.tabs.length; i++) {
                that.tabs[i].classList.remove('active');
            }

            tab.classList.add('active');
            this.classList.add('active');

            if (that.scrollbar) {
                that.line.style.left = percent + '%';

                if (that.autoWidth) {
                    let lineWidth = this.offsetWidth + 'px';
                    that.line.style.width = lineWidth;
                }
            }

        });
    }
}

function animateToCart(item) {

    var offset = item.offset(),
        width = item.outerWidth(),
        height = item.outerHeight(),
        offsetTop = offset.top,
        offsetLeft = offset.left,
        cart = $('.basket-link');

    $(item)
        .clone()
        .css({
            width: width,
            height: height,
            position: 'absolute',
            'z-index': '11100',
            top: offsetTop,
            left: offsetLeft
        })
        .appendTo("body")
        .animate({
            opacity: 0.05,
            left: cart.offset()['left'],
            top: cart.offset()['top'],
            width: 20,
            height: 13.2
        }, 2000, function () {
            $(this).remove();
        });
}

function getMediaCss() {
    if ($(window).width() < 1200) {
        return 'lg'
    } else if ($(window).width() < 992) {
        return 'md'
    } else if ($(window).width() < 768) {
        return 'sm'
    } else if ($(window).width() < 768) {
        return 'xs'
    } else {
        return 'default'
    }
}

function calcPrice() {
    let items = $('.cart__item'),
        totalObj = $('.cart__price-price').find('.price__val'),
        basketLink = $('.basket-link .compare-link__num'),
        totalCount = 0,
        total = 0;

    items.each(function (indx, elem) {
        let item = $(elem),
            count = Number(item.find('.count__input').val()),
            price = parseFloat(item.find('.price__val').text());

        totalCount = totalCount + count;
        total = total + (count * price);
    });

    basketLink.text(totalCount);
    totalObj.text(number_format(total, 2, '.', ''));
    sendCartForm();
}

function sendCartForm() {
    let form = $('.cart__form'),
        data = form.serialize();

    $.ajax({
        dataType: "json",
        type: "POST",
        url: 'ajax.php',
        data: data,
        success: function (result) {
            if (result.status) {
                console.log(result);
            } else {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        },
        error: function (result) {
            alert('Что-то пошло не так, попробуйте еще раз!!!');
        }
    });
}

$(function (e) {
    let drop = $('.drop');

    $('body').on('click', '.buy', function (e) {
        e.preventDefault();
        let $this = $(this),
            item = $this.closest('.buyItem'),
            id = item.attr('data-id'),
            count = item.find('.count__input'),
            val = count.val(),
            img = item.find('.buyImg'),
            data = {
                id: id,
                val: val,
                action: 'buyAjax'
            },
            basket = $('.basket-link');

        $.ajax({
            dataType: "json",
            type: "POST",
            url: 'ajax.php',
            data: data,
            success: function (result) {
                if (result.status) {
                    basket.replaceWith(result.html);
                    animateToCart(img);
                } else {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });

    });

    $('body').on('click', '.count__up', function (e) {
        e.preventDefault();

        let $this = $(this),
            count = $this.closest('.count'),
            input = count.find('.count__input'),
            val = Number(input.val());
        val++;

        input.val(val);
        if ($(this).closest('.pr').length == 0) {
            calcPrice();
        }
    });

    $('body').on('click', '.count__down', function (e) {

        e.preventDefault();

        let $this = $(this),
            count = $this.closest('.count'),
            input = count.find('.count__input'),
            val = Number(input.val());
        if (val > 1) {
            val--;
        }

        input.val(val);
        if ($(this).closest('.pr').length == 0) {
            calcPrice();
        }
    });

    $('body').on('change', '.fz__input', function (e) {
        let $this = $(this),
            form = $this.closest('form'),
            submit = form.find('[type=submit]');

        submit.toggleClass('disabled');
    });

    if ($(window).width() < 1200) {
        $('.nav__link_sub').on('click', function (e) {
            e.preventDefault();
            $(this).next().slideToggle();
        });
    }

    $('.drop__close').on('click', function (e) {
        drop.removeClass('active');
    });
    $('.drop-btn').on('click', function (e) {
        drop.addClass('active');
    });

    $('body').on('click', function (e) {
        let target = $(e.target);
        if (target.closest('.drop__wrapper').length == 0 && target.closest('.drop-btn').length == 0 && target.closest('.popup').length == 0) {
            drop.removeClass('active');
        }
    });


});

