<?php
header('Content-Type: application/json');

$data = $_POST;
$action = $data['action'];
switch ($action) {
    case 'searchAjax':
        echo json_encode(array(
            'status' => true,
            'html' => getSearchResult()
        ));
        exit();
        break;
    case 'catalogAjax':
        echo json_encode(array(
            'status' => true,
            'html' => getCatalogResult()
        ));
        exit();
        break;
    default:
        echo json_encode(array(
            'status' => false,
        ));
        exit();
        break;
}

function getSearchResult()
{
    ob_start();
    ?>
    <div class="search__wrap">
        <div class="search__list"><a class="search__item" href="product.html">
                <div class="row">
                    <div class="search__item-img"><img class="undefined" src="images/content/search/img.jpg"
                                                       alt="undefined"/>
                    </div>
                    <div class="search__item-desc">
                        <div class="search__item-title">Миндаль голд сырой</div>
                        <div class="search__item-price">
                            <div class="price"><span class="price__val">105.00</span><span
                                        class="price__type">руб.</span></div>
                            <div class="price price_old"><span class="price__val">120.00</span><span
                                        class="price__type">руб.</span></div>
                        </div>
                    </div>
                </div>
            </a><a class="search__item" href="product.html">
                <div class="row">
                    <div class="search__item-img"><img class="undefined" src="images/content/search/img.jpg"
                                                       alt="undefined"/>
                    </div>
                    <div class="search__item-desc">
                        <div class="search__item-title">Миндаль голд сырой</div>
                        <div class="search__item-price">
                            <div class="price"><span class="price__val">105.00</span><span
                                        class="price__type">руб.</span></div>
                            <div class="price price_old"><span class="price__val">120.00</span><span
                                        class="price__type">руб.</span></div>
                        </div>
                    </div>
                </div>
            </a><a class="search__item" href="product.html">
                <div class="row">
                    <div class="search__item-img"><img class="undefined" src="images/content/search/img.jpg"
                                                       alt="undefined"/>
                    </div>
                    <div class="search__item-desc">
                        <div class="search__item-title">Миндаль голд сырой</div>
                        <div class="search__item-price">
                            <div class="price"><span class="price__val">105.00</span><span
                                        class="price__type">руб.</span></div>
                            <div class="price price_old"><span class="price__val">120.00</span><span
                                        class="price__type">руб.</span></div>
                        </div>
                    </div>
                </div>
            </a><a class="search__item" href="product.html">
                <div class="row">
                    <div class="search__item-img"><img class="undefined" src="images/content/search/img.jpg"
                                                       alt="undefined"/>
                    </div>
                    <div class="search__item-desc">
                        <div class="search__item-title">Миндаль голд сырой</div>
                        <div class="search__item-price">
                            <div class="price"><span class="price__val">105.00</span><span
                                        class="price__type">руб.</span></div>
                            <div class="price price_old"><span class="price__val">120.00</span><span
                                        class="price__type">руб.</span></div>
                        </div>
                    </div>
                </div>
            </a><a class="search__item" href="product.html">
                <div class="row">
                    <div class="search__item-img"><img class="undefined" src="images/content/search/img.jpg"
                                                       alt="undefined"/>
                    </div>
                    <div class="search__item-desc">
                        <div class="search__item-title">Миндаль голд сырой</div>
                        <div class="search__item-price">
                            <div class="price"><span class="price__val">105.00</span><span
                                        class="price__type">руб.</span></div>
                            <div class="price price_old"><span class="price__val">120.00</span><span
                                        class="price__type">руб.</span></div>
                        </div>
                    </div>
                </div>
            </a><a class="search__item" href="product.html">
                <div class="row">
                    <div class="search__item-img"><img class="undefined" src="images/content/search/img.jpg"
                                                       alt="undefined"/>
                    </div>
                    <div class="search__item-desc">
                        <div class="search__item-title">Миндаль голд сырой</div>
                        <div class="search__item-price">
                            <div class="price"><span class="price__val">105.00</span><span
                                        class="price__type">руб.</span></div>
                            <div class="price price_old"><span class="price__val">120.00</span><span
                                        class="price__type">руб.</span></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function getCatalogResult()
{
    ob_start();
    ?>
    <form class="catalog__main" action="#" method="post">
        <input type="hidden" name="action" value="catalogAjax">
        <div class="catalog__controls">
            <div class="catalog__select">
                <div class="catalog__select-title">Показать:</div>
                <div class="catalog__select-select">
                    <select class="select" data-placeholder="Выберите вариант">
                        <option></option>
                        <option value="Все">Все</option>
                        <option value="Вариант1">Вариант1</option>
                        <option value="Вариант2" selected>Вариант2</option>
                        <option value="Вариант3">Вариант3</option>
                    </select>
                </div>
            </div>
            <div class="catalog__types">
                <div class="types">
                    <input type="hidden" name="type" value="list">
                    <button class="type" type="button" data-type="tile">
                        <svg class="type__svg">
                            <use xlink:href="images/icons/sprite.svg#tile"></use>
                        </svg>
                    </button>
                    <button class="type  active" type="button" data-type="list">
                        <svg class="type__svg">
                            <use xlink:href="images/icons/sprite.svg#list"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="catalog__items">
            <div class="row">
                <div class="catalog__item list"><a class="item buyItem list" href="product.html" data-id="1">
                        <div class="item__wrap">
                            <div class="item__top">
                                <div class="item__discount">15%</div>
                                <div class="item__country"><img class="item__country-img"
                                                                src="images/bg/flag.png"/><span
                                            class="item__country-title">Россия</span></div>
                                <div class="item__img"><img class="item__img-img buyImg"
                                                            src="images/content/products/product.png"/></div>
                            </div>
                            <div class="item__bottom">
                                <div class="item__left">
                                    <div class="item__title">Миндаль голд сырой</div>
                                    <div class="item__pricing">
                                        <div class="price"><span class="price__val">105.00</span><span
                                                    class="price__type">руб.</span></div>
                                        <div class="price price_old"><span class="price__val">120.00</span><span
                                                    class="price__type">руб.</span></div>
                                    </div>
                                    <div class="item__weight">
                                        <div class="item__weight-title">Вес:</div>
                                        <div class="item__weight-val">500 гр.</div>
                                    </div>
                                </div>
                                <div class="item__center">
                                    <div class="item__count">
                                        <div class="item__count-title">Количество:</div>
                                        <div class="item__count-input">
                                            <form class="count" action="#" method="post">
                                                <button class="count__down" type="button"></button>
                                                <input class="count__input" type="text" name="count" value="1"
                                                       readonly="readonly"/>
                                                <button class="count__up" type="button"></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item__right">
                                    <div class="item__buy">
                                        <button class="btn buy" type="button">
                                            <svg class="btn__svg">
                                                <use xlink:href="images/icons/sprite.svg#basket"></use>
                                            </svg>
                                            <div class="btn__title">В корзину</div>
                                        </button>
                                    </div>
                                    <button class="item__fast" type="button">Купить в один клик</button>
                                </div>
                            </div>
                        </div>
                        <div class="item__hidden">
                            <div class="item__block">
                                <div class="item__wrap">
                                    <div class="item__desc">
                                        <div class="item__desc-title">Пищевая и энергетическая ценность продукта на 100
                                            гр.
                                        </div>
                                        <div class="item__list">
                                            <div class="item__item">
                                                <div class="item__item-title">Ккал</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">643</div>
                                            </div>
                                            <div class="item__item">
                                                <div class="item__item-title">Углеводы</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">19,9</div>
                                            </div>
                                            <div class="item__item">
                                                <div class="item__item-title">Жиры</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">53,3</div>
                                            </div>
                                            <div class="item__item">
                                                <div class="item__item-title">Белки</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">20,8</div>
                                            </div>
                                        </div>
                                        <div class="item__period">Срок годности:&nbsp;<span class="item__period_gold">6 месяцев</span>
                                        </div>
                                    </div>
                                    <div class="item__top">
                                        <div class="item__discount">15%</div>
                                        <div class="item__country"><img class="item__country-img"
                                                                        src="images/bg/flag.png"/><span
                                                    class="item__country-title">Россия</span></div>
                                        <div class="item__img"><img class="item__img-img"
                                                                    src="images/content/products/product.png"/></div>
                                    </div>
                                    <div class="item__bottom">
                                        <div class="item__left">
                                            <div class="item__title">Миндаль голд сырой</div>
                                            <div class="item__pricing">
                                                <div class="price"><span class="price__val">105.00</span><span
                                                            class="price__type">руб.</span></div>
                                                <div class="price price_old"><span class="price__val">120.00</span><span
                                                            class="price__type">руб.</span></div>
                                            </div>
                                            <div class="item__weight">
                                                <div class="item__weight-title">Вес:</div>
                                                <div class="item__weight-val">500 гр.</div>
                                            </div>
                                        </div>
                                        <div class="item__center">
                                            <div class="item__count">
                                                <div class="item__count-title">Количество:</div>
                                                <div class="item__count-input">
                                                    <form class="count" action="#" method="post">
                                                        <button class="count__down" type="button"></button>
                                                        <input class="count__input" type="text" name="count" value="1"
                                                               readonly="readonly"/>
                                                        <button class="count__up" type="button"></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item__right">
                                            <div class="item__buy">
                                                <button class="btn buy" type="button">
                                                    <svg class="btn__svg">
                                                        <use xlink:href="images/icons/sprite.svg#basket"></use>
                                                    </svg>
                                                    <div class="btn__title">В корзину</div>
                                                </button>
                                            </div>
                                            <button class="item__fast" type="button">Купить в один клик</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item__compare">
                                    <div class="item__compare-button">
                                        <svg class="item__compare-svg">
                                            <use xlink:href="images/icons/sprite.svg#compare"></use>
                                        </svg>
                                        <div class="item__compare-title">Сравнить</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="catalog__item list"><a class="item buyItem list" href="product.html" data-id="2">
                        <div class="item__wrap">
                            <div class="item__top">
                                <div class="item__discount">15%</div>
                                <div class="item__country"><img class="item__country-img"
                                                                src="images/bg/flag.png"/><span
                                            class="item__country-title">Россия</span></div>
                                <div class="item__img"><img class="item__img-img buyImg"
                                                            src="images/content/products/product.png"/></div>
                            </div>
                            <div class="item__bottom">
                                <div class="item__left">
                                    <div class="item__title">Миндаль голд сырой</div>
                                    <div class="item__pricing">
                                        <div class="price"><span class="price__val">105.00</span><span
                                                    class="price__type">руб.</span></div>
                                        <div class="price price_old"><span class="price__val">120.00</span><span
                                                    class="price__type">руб.</span></div>
                                    </div>
                                    <div class="item__weight">
                                        <div class="item__weight-title">Вес:</div>
                                        <div class="item__weight-val">500 гр.</div>
                                    </div>
                                </div>
                                <div class="item__center">
                                    <div class="item__count">
                                        <div class="item__count-title">Количество:</div>
                                        <div class="item__count-input">
                                            <form class="count" action="#" method="post">
                                                <button class="count__down" type="button"></button>
                                                <input class="count__input" type="text" name="count" value="1"
                                                       readonly="readonly"/>
                                                <button class="count__up" type="button"></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item__right">
                                    <div class="item__buy">
                                        <button class="btn buy" type="button">
                                            <svg class="btn__svg">
                                                <use xlink:href="images/icons/sprite.svg#basket"></use>
                                            </svg>
                                            <div class="btn__title">В корзину</div>
                                        </button>
                                    </div>
                                    <button class="item__fast" type="button">Купить в один клик</button>
                                </div>
                            </div>
                        </div>
                        <div class="item__hidden">
                            <div class="item__block">
                                <div class="item__wrap">
                                    <div class="item__desc">
                                        <div class="item__desc-title">Пищевая и энергетическая ценность продукта на 100
                                            гр.
                                        </div>
                                        <div class="item__list">
                                            <div class="item__item">
                                                <div class="item__item-title">Ккал</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">643</div>
                                            </div>
                                            <div class="item__item">
                                                <div class="item__item-title">Углеводы</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">19,9</div>
                                            </div>
                                            <div class="item__item">
                                                <div class="item__item-title">Жиры</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">53,3</div>
                                            </div>
                                            <div class="item__item">
                                                <div class="item__item-title">Белки</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">20,8</div>
                                            </div>
                                        </div>
                                        <div class="item__period">Срок годности:&nbsp;<span class="item__period_gold">6 месяцев</span>
                                        </div>
                                    </div>
                                    <div class="item__top">
                                        <div class="item__discount">15%</div>
                                        <div class="item__country"><img class="item__country-img"
                                                                        src="images/bg/flag.png"/><span
                                                    class="item__country-title">Россия</span></div>
                                        <div class="item__img"><img class="item__img-img"
                                                                    src="images/content/products/product.png"/></div>
                                    </div>
                                    <div class="item__bottom">
                                        <div class="item__left">
                                            <div class="item__title">Миндаль голд сырой</div>
                                            <div class="item__pricing">
                                                <div class="price"><span class="price__val">105.00</span><span
                                                            class="price__type">руб.</span></div>
                                                <div class="price price_old"><span class="price__val">120.00</span><span
                                                            class="price__type">руб.</span></div>
                                            </div>
                                            <div class="item__weight">
                                                <div class="item__weight-title">Вес:</div>
                                                <div class="item__weight-val">500 гр.</div>
                                            </div>
                                        </div>
                                        <div class="item__center">
                                            <div class="item__count">
                                                <div class="item__count-title">Количество:</div>
                                                <div class="item__count-input">
                                                    <form class="count" action="#" method="post">
                                                        <button class="count__down" type="button"></button>
                                                        <input class="count__input" type="text" name="count" value="1"
                                                               readonly="readonly"/>
                                                        <button class="count__up" type="button"></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item__right">
                                            <div class="item__buy">
                                                <button class="btn buy" type="button">
                                                    <svg class="btn__svg">
                                                        <use xlink:href="images/icons/sprite.svg#basket"></use>
                                                    </svg>
                                                    <div class="btn__title">В корзину</div>
                                                </button>
                                            </div>
                                            <button class="item__fast" type="button">Купить в один клик</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item__compare">
                                    <div class="item__compare-button">
                                        <svg class="item__compare-svg">
                                            <use xlink:href="images/icons/sprite.svg#compare"></use>
                                        </svg>
                                        <div class="item__compare-title">Сравнить</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="catalog__item list"><a class="item buyItem list" href="product.html" data-id="3">
                        <div class="item__wrap">
                            <div class="item__top">
                                <div class="item__discount">15%</div>
                                <div class="item__country"><img class="item__country-img"
                                                                src="images/bg/flag.png"/><span
                                            class="item__country-title">Россия</span></div>
                                <div class="item__img"><img class="item__img-img buyImg"
                                                            src="images/content/products/product.png"/></div>
                            </div>
                            <div class="item__bottom">
                                <div class="item__left">
                                    <div class="item__title">Миндаль голд сырой</div>
                                    <div class="item__pricing">
                                        <div class="price"><span class="price__val">105.00</span><span
                                                    class="price__type">руб.</span></div>
                                        <div class="price price_old"><span class="price__val">120.00</span><span
                                                    class="price__type">руб.</span></div>
                                    </div>
                                    <div class="item__weight">
                                        <div class="item__weight-title">Вес:</div>
                                        <div class="item__weight-val">500 гр.</div>
                                    </div>
                                </div>
                                <div class="item__center">
                                    <div class="item__count">
                                        <div class="item__count-title">Количество:</div>
                                        <div class="item__count-input">
                                            <form class="count" action="#" method="post">
                                                <button class="count__down" type="button"></button>
                                                <input class="count__input" type="text" name="count" value="1"
                                                       readonly="readonly"/>
                                                <button class="count__up" type="button"></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item__right">
                                    <div class="item__buy">
                                        <button class="btn buy" type="button">
                                            <svg class="btn__svg">
                                                <use xlink:href="images/icons/sprite.svg#basket"></use>
                                            </svg>
                                            <div class="btn__title">В корзину</div>
                                        </button>
                                    </div>
                                    <button class="item__fast" type="button">Купить в один клик</button>
                                </div>
                            </div>
                        </div>
                        <div class="item__hidden">
                            <div class="item__block">
                                <div class="item__wrap">
                                    <div class="item__desc">
                                        <div class="item__desc-title">Пищевая и энергетическая ценность продукта на 100
                                            гр.
                                        </div>
                                        <div class="item__list">
                                            <div class="item__item">
                                                <div class="item__item-title">Ккал</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">643</div>
                                            </div>
                                            <div class="item__item">
                                                <div class="item__item-title">Углеводы</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">19,9</div>
                                            </div>
                                            <div class="item__item">
                                                <div class="item__item-title">Жиры</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">53,3</div>
                                            </div>
                                            <div class="item__item">
                                                <div class="item__item-title">Белки</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">20,8</div>
                                            </div>
                                        </div>
                                        <div class="item__period">Срок годности:&nbsp;<span class="item__period_gold">6 месяцев</span>
                                        </div>
                                    </div>
                                    <div class="item__top">
                                        <div class="item__discount">15%</div>
                                        <div class="item__country"><img class="item__country-img"
                                                                        src="images/bg/flag.png"/><span
                                                    class="item__country-title">Россия</span></div>
                                        <div class="item__img"><img class="item__img-img"
                                                                    src="images/content/products/product.png"/></div>
                                    </div>
                                    <div class="item__bottom">
                                        <div class="item__left">
                                            <div class="item__title">Миндаль голд сырой</div>
                                            <div class="item__pricing">
                                                <div class="price"><span class="price__val">105.00</span><span
                                                            class="price__type">руб.</span></div>
                                                <div class="price price_old"><span class="price__val">120.00</span><span
                                                            class="price__type">руб.</span></div>
                                            </div>
                                            <div class="item__weight">
                                                <div class="item__weight-title">Вес:</div>
                                                <div class="item__weight-val">500 гр.</div>
                                            </div>
                                        </div>
                                        <div class="item__center">
                                            <div class="item__count">
                                                <div class="item__count-title">Количество:</div>
                                                <div class="item__count-input">
                                                    <form class="count" action="#" method="post">
                                                        <button class="count__down" type="button"></button>
                                                        <input class="count__input" type="text" name="count" value="1"
                                                               readonly="readonly"/>
                                                        <button class="count__up" type="button"></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item__right">
                                            <div class="item__buy">
                                                <button class="btn buy" type="button">
                                                    <svg class="btn__svg">
                                                        <use xlink:href="images/icons/sprite.svg#basket"></use>
                                                    </svg>
                                                    <div class="btn__title">В корзину</div>
                                                </button>
                                            </div>
                                            <button class="item__fast" type="button">Купить в один клик</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item__compare">
                                    <div class="item__compare-button">
                                        <svg class="item__compare-svg">
                                            <use xlink:href="images/icons/sprite.svg#compare"></use>
                                        </svg>
                                        <div class="item__compare-title">Сравнить</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="catalog__item list"><a class="item buyItem list" href="product.html" data-id="4">
                        <div class="item__wrap">
                            <div class="item__top">
                                <div class="item__discount">15%</div>
                                <div class="item__country"><img class="item__country-img"
                                                                src="images/bg/flag.png"/><span
                                            class="item__country-title">Россия</span></div>
                                <div class="item__img"><img class="item__img-img buyImg"
                                                            src="images/content/products/product.png"/></div>
                            </div>
                            <div class="item__bottom">
                                <div class="item__left">
                                    <div class="item__title">Миндаль голд сырой</div>
                                    <div class="item__pricing">
                                        <div class="price"><span class="price__val">105.00</span><span
                                                    class="price__type">руб.</span></div>
                                        <div class="price price_old"><span class="price__val">120.00</span><span
                                                    class="price__type">руб.</span></div>
                                    </div>
                                    <div class="item__weight">
                                        <div class="item__weight-title">Вес:</div>
                                        <div class="item__weight-val">500 гр.</div>
                                    </div>
                                </div>
                                <div class="item__center">
                                    <div class="item__count">
                                        <div class="item__count-title">Количество:</div>
                                        <div class="item__count-input">
                                            <form class="count" action="#" method="post">
                                                <button class="count__down" type="button"></button>
                                                <input class="count__input" type="text" name="count" value="1"
                                                       readonly="readonly"/>
                                                <button class="count__up" type="button"></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item__right">
                                    <div class="item__buy">
                                        <button class="btn buy" type="button">
                                            <svg class="btn__svg">
                                                <use xlink:href="images/icons/sprite.svg#basket"></use>
                                            </svg>
                                            <div class="btn__title">В корзину</div>
                                        </button>
                                    </div>
                                    <button class="item__fast" type="button">Купить в один клик</button>
                                </div>
                            </div>
                        </div>
                        <div class="item__hidden">
                            <div class="item__block">
                                <div class="item__wrap">
                                    <div class="item__desc">
                                        <div class="item__desc-title">Пищевая и энергетическая ценность продукта на 100
                                            гр.
                                        </div>
                                        <div class="item__list">
                                            <div class="item__item">
                                                <div class="item__item-title">Ккал</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">643</div>
                                            </div>
                                            <div class="item__item">
                                                <div class="item__item-title">Углеводы</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">19,9</div>
                                            </div>
                                            <div class="item__item">
                                                <div class="item__item-title">Жиры</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">53,3</div>
                                            </div>
                                            <div class="item__item">
                                                <div class="item__item-title">Белки</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">20,8</div>
                                            </div>
                                        </div>
                                        <div class="item__period">Срок годности:&nbsp;<span class="item__period_gold">6 месяцев</span>
                                        </div>
                                    </div>
                                    <div class="item__top">
                                        <div class="item__discount">15%</div>
                                        <div class="item__country"><img class="item__country-img"
                                                                        src="images/bg/flag.png"/><span
                                                    class="item__country-title">Россия</span></div>
                                        <div class="item__img"><img class="item__img-img"
                                                                    src="images/content/products/product.png"/></div>
                                    </div>
                                    <div class="item__bottom">
                                        <div class="item__left">
                                            <div class="item__title">Миндаль голд сырой</div>
                                            <div class="item__pricing">
                                                <div class="price"><span class="price__val">105.00</span><span
                                                            class="price__type">руб.</span></div>
                                                <div class="price price_old"><span class="price__val">120.00</span><span
                                                            class="price__type">руб.</span></div>
                                            </div>
                                            <div class="item__weight">
                                                <div class="item__weight-title">Вес:</div>
                                                <div class="item__weight-val">500 гр.</div>
                                            </div>
                                        </div>
                                        <div class="item__center">
                                            <div class="item__count">
                                                <div class="item__count-title">Количество:</div>
                                                <div class="item__count-input">
                                                    <form class="count" action="#" method="post">
                                                        <button class="count__down" type="button"></button>
                                                        <input class="count__input" type="text" name="count" value="1"
                                                               readonly="readonly"/>
                                                        <button class="count__up" type="button"></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item__right">
                                            <div class="item__buy">
                                                <button class="btn buy" type="button">
                                                    <svg class="btn__svg">
                                                        <use xlink:href="images/icons/sprite.svg#basket"></use>
                                                    </svg>
                                                    <div class="btn__title">В корзину</div>
                                                </button>
                                            </div>
                                            <button class="item__fast" type="button">Купить в один клик</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item__compare">
                                    <div class="item__compare-button">
                                        <svg class="item__compare-svg">
                                            <use xlink:href="images/icons/sprite.svg#compare"></use>
                                        </svg>
                                        <div class="item__compare-title">Сравнить</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="catalog__item list"><a class="item buyItem list" href="product.html" data-id="5">
                        <div class="item__wrap">
                            <div class="item__top">
                                <div class="item__discount">15%</div>
                                <div class="item__country"><img class="item__country-img"
                                                                src="images/bg/flag.png"/><span
                                            class="item__country-title">Россия</span></div>
                                <div class="item__img"><img class="item__img-img buyImg"
                                                            src="images/content/products/product.png"/></div>
                            </div>
                            <div class="item__bottom">
                                <div class="item__left">
                                    <div class="item__title">Миндаль голд сырой</div>
                                    <div class="item__pricing">
                                        <div class="price"><span class="price__val">105.00</span><span
                                                    class="price__type">руб.</span></div>
                                        <div class="price price_old"><span class="price__val">120.00</span><span
                                                    class="price__type">руб.</span></div>
                                    </div>
                                    <div class="item__weight">
                                        <div class="item__weight-title">Вес:</div>
                                        <div class="item__weight-val">500 гр.</div>
                                    </div>
                                </div>
                                <div class="item__center">
                                    <div class="item__count">
                                        <div class="item__count-title">Количество:</div>
                                        <div class="item__count-input">
                                            <form class="count" action="#" method="post">
                                                <button class="count__down" type="button"></button>
                                                <input class="count__input" type="text" name="count" value="1"
                                                       readonly="readonly"/>
                                                <button class="count__up" type="button"></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item__right">
                                    <div class="item__buy">
                                        <button class="btn buy" type="button">
                                            <svg class="btn__svg">
                                                <use xlink:href="images/icons/sprite.svg#basket"></use>
                                            </svg>
                                            <div class="btn__title">В корзину</div>
                                        </button>
                                    </div>
                                    <button class="item__fast" type="button">Купить в один клик</button>
                                </div>
                            </div>
                        </div>
                        <div class="item__hidden">
                            <div class="item__block">
                                <div class="item__wrap">
                                    <div class="item__desc">
                                        <div class="item__desc-title">Пищевая и энергетическая ценность продукта на 100
                                            гр.
                                        </div>
                                        <div class="item__list">
                                            <div class="item__item">
                                                <div class="item__item-title">Ккал</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">643</div>
                                            </div>
                                            <div class="item__item">
                                                <div class="item__item-title">Углеводы</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">19,9</div>
                                            </div>
                                            <div class="item__item">
                                                <div class="item__item-title">Жиры</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">53,3</div>
                                            </div>
                                            <div class="item__item">
                                                <div class="item__item-title">Белки</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">20,8</div>
                                            </div>
                                        </div>
                                        <div class="item__period">Срок годности:&nbsp;<span class="item__period_gold">6 месяцев</span>
                                        </div>
                                    </div>
                                    <div class="item__top">
                                        <div class="item__discount">15%</div>
                                        <div class="item__country"><img class="item__country-img"
                                                                        src="images/bg/flag.png"/><span
                                                    class="item__country-title">Россия</span></div>
                                        <div class="item__img"><img class="item__img-img"
                                                                    src="images/content/products/product.png"/></div>
                                    </div>
                                    <div class="item__bottom">
                                        <div class="item__left">
                                            <div class="item__title">Миндаль голд сырой</div>
                                            <div class="item__pricing">
                                                <div class="price"><span class="price__val">105.00</span><span
                                                            class="price__type">руб.</span></div>
                                                <div class="price price_old"><span class="price__val">120.00</span><span
                                                            class="price__type">руб.</span></div>
                                            </div>
                                            <div class="item__weight">
                                                <div class="item__weight-title">Вес:</div>
                                                <div class="item__weight-val">500 гр.</div>
                                            </div>
                                        </div>
                                        <div class="item__center">
                                            <div class="item__count">
                                                <div class="item__count-title">Количество:</div>
                                                <div class="item__count-input">
                                                    <form class="count" action="#" method="post">
                                                        <button class="count__down" type="button"></button>
                                                        <input class="count__input" type="text" name="count" value="1"
                                                               readonly="readonly"/>
                                                        <button class="count__up" type="button"></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item__right">
                                            <div class="item__buy">
                                                <button class="btn buy" type="button">
                                                    <svg class="btn__svg">
                                                        <use xlink:href="images/icons/sprite.svg#basket"></use>
                                                    </svg>
                                                    <div class="btn__title">В корзину</div>
                                                </button>
                                            </div>
                                            <button class="item__fast" type="button">Купить в один клик</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item__compare">
                                    <div class="item__compare-button">
                                        <svg class="item__compare-svg">
                                            <use xlink:href="images/icons/sprite.svg#compare"></use>
                                        </svg>
                                        <div class="item__compare-title">Сравнить</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="catalog__item list"><a class="item buyItem list" href="product.html" data-id="6">
                        <div class="item__wrap">
                            <div class="item__top">
                                <div class="item__discount">15%</div>
                                <div class="item__country"><img class="item__country-img"
                                                                src="images/bg/flag.png"/><span
                                            class="item__country-title">Россия</span></div>
                                <div class="item__img"><img class="item__img-img buyImg"
                                                            src="images/content/products/product.png"/></div>
                            </div>
                            <div class="item__bottom">
                                <div class="item__left">
                                    <div class="item__title">Миндаль голд сырой</div>
                                    <div class="item__pricing">
                                        <div class="price"><span class="price__val">105.00</span><span
                                                    class="price__type">руб.</span></div>
                                        <div class="price price_old"><span class="price__val">120.00</span><span
                                                    class="price__type">руб.</span></div>
                                    </div>
                                    <div class="item__weight">
                                        <div class="item__weight-title">Вес:</div>
                                        <div class="item__weight-val">500 гр.</div>
                                    </div>
                                </div>
                                <div class="item__center">
                                    <div class="item__count">
                                        <div class="item__count-title">Количество:</div>
                                        <div class="item__count-input">
                                            <form class="count" action="#" method="post">
                                                <button class="count__down" type="button"></button>
                                                <input class="count__input" type="text" name="count" value="1"
                                                       readonly="readonly"/>
                                                <button class="count__up" type="button"></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item__right">
                                    <div class="item__buy">
                                        <button class="btn buy" type="button">
                                            <svg class="btn__svg">
                                                <use xlink:href="images/icons/sprite.svg#basket"></use>
                                            </svg>
                                            <div class="btn__title">В корзину</div>
                                        </button>
                                    </div>
                                    <button class="item__fast" type="button">Купить в один клик</button>
                                </div>
                            </div>
                        </div>
                        <div class="item__hidden">
                            <div class="item__block">
                                <div class="item__wrap">
                                    <div class="item__desc">
                                        <div class="item__desc-title">Пищевая и энергетическая ценность продукта на 100
                                            гр.
                                        </div>
                                        <div class="item__list">
                                            <div class="item__item">
                                                <div class="item__item-title">Ккал</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">643</div>
                                            </div>
                                            <div class="item__item">
                                                <div class="item__item-title">Углеводы</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">19,9</div>
                                            </div>
                                            <div class="item__item">
                                                <div class="item__item-title">Жиры</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">53,3</div>
                                            </div>
                                            <div class="item__item">
                                                <div class="item__item-title">Белки</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">20,8</div>
                                            </div>
                                        </div>
                                        <div class="item__period">Срок годности:&nbsp;<span class="item__period_gold">6 месяцев</span>
                                        </div>
                                    </div>
                                    <div class="item__top">
                                        <div class="item__discount">15%</div>
                                        <div class="item__country"><img class="item__country-img"
                                                                        src="images/bg/flag.png"/><span
                                                    class="item__country-title">Россия</span></div>
                                        <div class="item__img"><img class="item__img-img"
                                                                    src="images/content/products/product.png"/></div>
                                    </div>
                                    <div class="item__bottom">
                                        <div class="item__left">
                                            <div class="item__title">Миндаль голд сырой</div>
                                            <div class="item__pricing">
                                                <div class="price"><span class="price__val">105.00</span><span
                                                            class="price__type">руб.</span></div>
                                                <div class="price price_old"><span class="price__val">120.00</span><span
                                                            class="price__type">руб.</span></div>
                                            </div>
                                            <div class="item__weight">
                                                <div class="item__weight-title">Вес:</div>
                                                <div class="item__weight-val">500 гр.</div>
                                            </div>
                                        </div>
                                        <div class="item__center">
                                            <div class="item__count">
                                                <div class="item__count-title">Количество:</div>
                                                <div class="item__count-input">
                                                    <form class="count" action="#" method="post">
                                                        <button class="count__down" type="button"></button>
                                                        <input class="count__input" type="text" name="count" value="1"
                                                               readonly="readonly"/>
                                                        <button class="count__up" type="button"></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item__right">
                                            <div class="item__buy">
                                                <button class="btn buy" type="button">
                                                    <svg class="btn__svg">
                                                        <use xlink:href="images/icons/sprite.svg#basket"></use>
                                                    </svg>
                                                    <div class="btn__title">В корзину</div>
                                                </button>
                                            </div>
                                            <button class="item__fast" type="button">Купить в один клик</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item__compare">
                                    <div class="item__compare-button">
                                        <svg class="item__compare-svg">
                                            <use xlink:href="images/icons/sprite.svg#compare"></use>
                                        </svg>
                                        <div class="item__compare-title">Сравнить</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="catalog__item list"><a class="item buyItem list" href="product.html" data-id="7">
                        <div class="item__wrap">
                            <div class="item__top">
                                <div class="item__discount">15%</div>
                                <div class="item__country"><img class="item__country-img"
                                                                src="images/bg/flag.png"/><span
                                            class="item__country-title">Россия</span></div>
                                <div class="item__img"><img class="item__img-img buyImg"
                                                            src="images/content/products/product.png"/></div>
                            </div>
                            <div class="item__bottom">
                                <div class="item__left">
                                    <div class="item__title">Миндаль голд сырой</div>
                                    <div class="item__pricing">
                                        <div class="price"><span class="price__val">105.00</span><span
                                                    class="price__type">руб.</span></div>
                                        <div class="price price_old"><span class="price__val">120.00</span><span
                                                    class="price__type">руб.</span></div>
                                    </div>
                                    <div class="item__weight">
                                        <div class="item__weight-title">Вес:</div>
                                        <div class="item__weight-val">500 гр.</div>
                                    </div>
                                </div>
                                <div class="item__center">
                                    <div class="item__count">
                                        <div class="item__count-title">Количество:</div>
                                        <div class="item__count-input">
                                            <form class="count" action="#" method="post">
                                                <button class="count__down" type="button"></button>
                                                <input class="count__input" type="text" name="count" value="1"
                                                       readonly="readonly"/>
                                                <button class="count__up" type="button"></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item__right">
                                    <div class="item__buy">
                                        <button class="btn buy" type="button">
                                            <svg class="btn__svg">
                                                <use xlink:href="images/icons/sprite.svg#basket"></use>
                                            </svg>
                                            <div class="btn__title">В корзину</div>
                                        </button>
                                    </div>
                                    <button class="item__fast" type="button">Купить в один клик</button>
                                </div>
                            </div>
                        </div>
                        <div class="item__hidden">
                            <div class="item__block">
                                <div class="item__wrap">
                                    <div class="item__desc">
                                        <div class="item__desc-title">Пищевая и энергетическая ценность продукта на 100
                                            гр.
                                        </div>
                                        <div class="item__list">
                                            <div class="item__item">
                                                <div class="item__item-title">Ккал</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">643</div>
                                            </div>
                                            <div class="item__item">
                                                <div class="item__item-title">Углеводы</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">19,9</div>
                                            </div>
                                            <div class="item__item">
                                                <div class="item__item-title">Жиры</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">53,3</div>
                                            </div>
                                            <div class="item__item">
                                                <div class="item__item-title">Белки</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">20,8</div>
                                            </div>
                                        </div>
                                        <div class="item__period">Срок годности:&nbsp;<span class="item__period_gold">6 месяцев</span>
                                        </div>
                                    </div>
                                    <div class="item__top">
                                        <div class="item__discount">15%</div>
                                        <div class="item__country"><img class="item__country-img"
                                                                        src="images/bg/flag.png"/><span
                                                    class="item__country-title">Россия</span></div>
                                        <div class="item__img"><img class="item__img-img"
                                                                    src="images/content/products/product.png"/></div>
                                    </div>
                                    <div class="item__bottom">
                                        <div class="item__left">
                                            <div class="item__title">Миндаль голд сырой</div>
                                            <div class="item__pricing">
                                                <div class="price"><span class="price__val">105.00</span><span
                                                            class="price__type">руб.</span></div>
                                                <div class="price price_old"><span class="price__val">120.00</span><span
                                                            class="price__type">руб.</span></div>
                                            </div>
                                            <div class="item__weight">
                                                <div class="item__weight-title">Вес:</div>
                                                <div class="item__weight-val">500 гр.</div>
                                            </div>
                                        </div>
                                        <div class="item__center">
                                            <div class="item__count">
                                                <div class="item__count-title">Количество:</div>
                                                <div class="item__count-input">
                                                    <form class="count" action="#" method="post">
                                                        <button class="count__down" type="button"></button>
                                                        <input class="count__input" type="text" name="count" value="1"
                                                               readonly="readonly"/>
                                                        <button class="count__up" type="button"></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item__right">
                                            <div class="item__buy">
                                                <button class="btn buy" type="button">
                                                    <svg class="btn__svg">
                                                        <use xlink:href="images/icons/sprite.svg#basket"></use>
                                                    </svg>
                                                    <div class="btn__title">В корзину</div>
                                                </button>
                                            </div>
                                            <button class="item__fast" type="button">Купить в один клик</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item__compare">
                                    <div class="item__compare-button">
                                        <svg class="item__compare-svg">
                                            <use xlink:href="images/icons/sprite.svg#compare"></use>
                                        </svg>
                                        <div class="item__compare-title">Сравнить</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="catalog__item list"><a class="item buyItem list" href="product.html" data-id="8">
                        <div class="item__wrap">
                            <div class="item__top">
                                <div class="item__discount">15%</div>
                                <div class="item__country"><img class="item__country-img"
                                                                src="images/bg/flag.png"/><span
                                            class="item__country-title">Россия</span></div>
                                <div class="item__img"><img class="item__img-img buyImg"
                                                            src="images/content/products/product.png"/></div>
                            </div>
                            <div class="item__bottom">
                                <div class="item__left">
                                    <div class="item__title">Миндаль голд сырой</div>
                                    <div class="item__pricing">
                                        <div class="price"><span class="price__val">105.00</span><span
                                                    class="price__type">руб.</span></div>
                                        <div class="price price_old"><span class="price__val">120.00</span><span
                                                    class="price__type">руб.</span></div>
                                    </div>
                                    <div class="item__weight">
                                        <div class="item__weight-title">Вес:</div>
                                        <div class="item__weight-val">500 гр.</div>
                                    </div>
                                </div>
                                <div class="item__center">
                                    <div class="item__count">
                                        <div class="item__count-title">Количество:</div>
                                        <div class="item__count-input">
                                            <form class="count" action="#" method="post">
                                                <button class="count__down" type="button"></button>
                                                <input class="count__input" type="text" name="count" value="1"
                                                       readonly="readonly"/>
                                                <button class="count__up" type="button"></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item__right">
                                    <div class="item__buy">
                                        <button class="btn buy" type="button">
                                            <svg class="btn__svg">
                                                <use xlink:href="images/icons/sprite.svg#basket"></use>
                                            </svg>
                                            <div class="btn__title">В корзину</div>
                                        </button>
                                    </div>
                                    <button class="item__fast" type="button">Купить в один клик</button>
                                </div>
                            </div>
                        </div>
                        <div class="item__hidden">
                            <div class="item__block">
                                <div class="item__wrap">
                                    <div class="item__desc">
                                        <div class="item__desc-title">Пищевая и энергетическая ценность продукта на 100
                                            гр.
                                        </div>
                                        <div class="item__list">
                                            <div class="item__item">
                                                <div class="item__item-title">Ккал</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">643</div>
                                            </div>
                                            <div class="item__item">
                                                <div class="item__item-title">Углеводы</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">19,9</div>
                                            </div>
                                            <div class="item__item">
                                                <div class="item__item-title">Жиры</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">53,3</div>
                                            </div>
                                            <div class="item__item">
                                                <div class="item__item-title">Белки</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">20,8</div>
                                            </div>
                                        </div>
                                        <div class="item__period">Срок годности:&nbsp;<span class="item__period_gold">6 месяцев</span>
                                        </div>
                                    </div>
                                    <div class="item__top">
                                        <div class="item__discount">15%</div>
                                        <div class="item__country"><img class="item__country-img"
                                                                        src="images/bg/flag.png"/><span
                                                    class="item__country-title">Россия</span></div>
                                        <div class="item__img"><img class="item__img-img"
                                                                    src="images/content/products/product.png"/></div>
                                    </div>
                                    <div class="item__bottom">
                                        <div class="item__left">
                                            <div class="item__title">Миндаль голд сырой</div>
                                            <div class="item__pricing">
                                                <div class="price"><span class="price__val">105.00</span><span
                                                            class="price__type">руб.</span></div>
                                                <div class="price price_old"><span class="price__val">120.00</span><span
                                                            class="price__type">руб.</span></div>
                                            </div>
                                            <div class="item__weight">
                                                <div class="item__weight-title">Вес:</div>
                                                <div class="item__weight-val">500 гр.</div>
                                            </div>
                                        </div>
                                        <div class="item__center">
                                            <div class="item__count">
                                                <div class="item__count-title">Количество:</div>
                                                <div class="item__count-input">
                                                    <form class="count" action="#" method="post">
                                                        <button class="count__down" type="button"></button>
                                                        <input class="count__input" type="text" name="count" value="1"
                                                               readonly="readonly"/>
                                                        <button class="count__up" type="button"></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item__right">
                                            <div class="item__buy">
                                                <button class="btn buy" type="button">
                                                    <svg class="btn__svg">
                                                        <use xlink:href="images/icons/sprite.svg#basket"></use>
                                                    </svg>
                                                    <div class="btn__title">В корзину</div>
                                                </button>
                                            </div>
                                            <button class="item__fast" type="button">Купить в один клик</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item__compare">
                                    <div class="item__compare-button">
                                        <svg class="item__compare-svg">
                                            <use xlink:href="images/icons/sprite.svg#compare"></use>
                                        </svg>
                                        <div class="item__compare-title">Сравнить</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="catalog__item list"><a class="item buyItem list" href="product.html" data-id="9">
                        <div class="item__wrap">
                            <div class="item__top">
                                <div class="item__discount">15%</div>
                                <div class="item__country"><img class="item__country-img"
                                                                src="images/bg/flag.png"/><span
                                            class="item__country-title">Россия</span></div>
                                <div class="item__img"><img class="item__img-img buyImg"
                                                            src="images/content/products/product.png"/></div>
                            </div>
                            <div class="item__bottom">
                                <div class="item__left">
                                    <div class="item__title">Миндаль голд сырой</div>
                                    <div class="item__pricing">
                                        <div class="price"><span class="price__val">105.00</span><span
                                                    class="price__type">руб.</span></div>
                                        <div class="price price_old"><span class="price__val">120.00</span><span
                                                    class="price__type">руб.</span></div>
                                    </div>
                                    <div class="item__weight">
                                        <div class="item__weight-title">Вес:</div>
                                        <div class="item__weight-val">500 гр.</div>
                                    </div>
                                </div>
                                <div class="item__center">
                                    <div class="item__count">
                                        <div class="item__count-title">Количество:</div>
                                        <div class="item__count-input">
                                            <form class="count" action="#" method="post">
                                                <button class="count__down" type="button"></button>
                                                <input class="count__input" type="text" name="count" value="1"
                                                       readonly="readonly"/>
                                                <button class="count__up" type="button"></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="item__right">
                                    <div class="item__buy">
                                        <button class="btn buy" type="button">
                                            <svg class="btn__svg">
                                                <use xlink:href="images/icons/sprite.svg#basket"></use>
                                            </svg>
                                            <div class="btn__title">В корзину</div>
                                        </button>
                                    </div>
                                    <button class="item__fast" type="button">Купить в один клик</button>
                                </div>
                            </div>
                        </div>
                        <div class="item__hidden">
                            <div class="item__block">
                                <div class="item__wrap">
                                    <div class="item__desc">
                                        <div class="item__desc-title">Пищевая и энергетическая ценность продукта на 100
                                            гр.
                                        </div>
                                        <div class="item__list">
                                            <div class="item__item">
                                                <div class="item__item-title">Ккал</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">643</div>
                                            </div>
                                            <div class="item__item">
                                                <div class="item__item-title">Углеводы</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">19,9</div>
                                            </div>
                                            <div class="item__item">
                                                <div class="item__item-title">Жиры</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">53,3</div>
                                            </div>
                                            <div class="item__item">
                                                <div class="item__item-title">Белки</div>
                                                <div class="item__item-line"></div>
                                                <div class="item__item-val">20,8</div>
                                            </div>
                                        </div>
                                        <div class="item__period">Срок годности:&nbsp;<span class="item__period_gold">6 месяцев</span>
                                        </div>
                                    </div>
                                    <div class="item__top">
                                        <div class="item__discount">15%</div>
                                        <div class="item__country"><img class="item__country-img"
                                                                        src="images/bg/flag.png"/><span
                                                    class="item__country-title">Россия</span></div>
                                        <div class="item__img"><img class="item__img-img"
                                                                    src="images/content/products/product.png"/></div>
                                    </div>
                                    <div class="item__bottom">
                                        <div class="item__left">
                                            <div class="item__title">Миндаль голд сырой</div>
                                            <div class="item__pricing">
                                                <div class="price"><span class="price__val">105.00</span><span
                                                            class="price__type">руб.</span></div>
                                                <div class="price price_old"><span class="price__val">120.00</span><span
                                                            class="price__type">руб.</span></div>
                                            </div>
                                            <div class="item__weight">
                                                <div class="item__weight-title">Вес:</div>
                                                <div class="item__weight-val">500 гр.</div>
                                            </div>
                                        </div>
                                        <div class="item__center">
                                            <div class="item__count">
                                                <div class="item__count-title">Количество:</div>
                                                <div class="item__count-input">
                                                    <form class="count" action="#" method="post">
                                                        <button class="count__down" type="button"></button>
                                                        <input class="count__input" type="text" name="count" value="1"
                                                               readonly="readonly"/>
                                                        <button class="count__up" type="button"></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item__right">
                                            <div class="item__buy">
                                                <button class="btn buy" type="button">
                                                    <svg class="btn__svg">
                                                        <use xlink:href="images/icons/sprite.svg#basket"></use>
                                                    </svg>
                                                    <div class="btn__title">В корзину</div>
                                                </button>
                                            </div>
                                            <button class="item__fast" type="button">Купить в один клик</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item__compare">
                                    <div class="item__compare-button">
                                        <svg class="item__compare-svg">
                                            <use xlink:href="images/icons/sprite.svg#compare"></use>
                                        </svg>
                                        <div class="item__compare-title">Сравнить</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="catalog__pag">
                <div class="pag"><a class="pag__link" href="catalog.html">1</a><a class="active pag__link"
                                                                                  href="catalog.html">2</a><a
                            class="pag__link" href="catalog.html">3</a><a class="pag__link" href="catalog.html">4</a><a
                            class="pag__link" href="catalog.html">...</a><a class="pag__link" href="catalog.html">54</a>
                </div>
            </div>
        </div>
    </form>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}



