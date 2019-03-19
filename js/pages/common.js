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
            if (maxH<height){
                maxH=height;
            }
        }
        that.tabsObj.style.height = maxH+'px';

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

$('body').on('click', '.buy', function (e) {
    e.preventDefault();
    let $this = $(this),
        item = $this.closest('.buyItem'),
        id = item.attr('data-id'),
        img = item.find('.buyImg');
    animateToCart(img);
});

$('body').on('click', '.count__up', function (e) {
    e.preventDefault();

    let $this = $(this),
        count = $this.closest('.count'),
        input = count.find('.count__input'),
        val = Number(input.val());
    val++;

    input.val(val);

});

$('body').on('click', '.count__down', function (e) {
    e.preventDefault();

    let $this = $(this),
        count = $this.closest('.count'),
        input = count.find('.count__input'),
        val = Number(input.val());
    if (val>1) {
        val--;
    }

    input.val(val);

});