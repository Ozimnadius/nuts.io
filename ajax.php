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
    case 'buyAjax':
        echo json_encode(array(
            'status' => true,
            'html' => getBuyBasket()
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
    case 'callorderOpen':
        echo json_encode(array(
            'status' => true,
            'html' => callorderForm()
        ));
        exit();
        break;
    case 'callorderSubmit':
        echo json_encode(array(
            'status' => true,
            'html' => callorderSuccess()
        ));
        exit();
        break;
    case 'fastOrder':
        echo json_encode(array(
            'status' => true,
            'html' => fastOrderForm()
        ));
        exit();
        break;
    case 'fastOrderSubmit':
        echo json_encode(array(
            'status' => true,
            'html' => fastOrderSuccess()
        ));
        exit();
        break;
    case 'productRating':
        echo json_encode(array(
            'status' => true,
            'rating' => 4
        ));
        exit();
        break;
    case 'productRevRating':
        echo json_encode(array(
            'status' => true,
            'rating' => 5
        ));
        exit();
        break;
    case 'reviewRating':
        echo json_encode(array(
            'status' => true,
            'rating' => 2
        ));
        exit();
        break;
    case 'productRevLike':
        echo json_encode(array(
            'status' => true,
            'value' => 5
        ));
        exit();
        break;
    case 'productRevDislike':
        echo json_encode(array(
            'status' => true,
            'value' => 3
        ));
        exit();
        break;
    case 'revLike':
        echo json_encode(array(
            'status' => true,
            'value' => 5
        ));
        exit();
        break;
    case 'revDislike':
        echo json_encode(array(
            'status' => true,
            'value' => 3
        ));
        exit();
        break;
    case 'feed':
        echo json_encode(array(
            'status' => true,
            'html' => feedSuccess()
        ));
        exit();
        break;
    case 'contacts':
        echo json_encode(array(
            'status' => true,
            'html' => contactsSuccess()
        ));
        exit();
        break;
    case 'revForm':
        echo json_encode(array(
            'status' => true,
            'html' => revFormSuccess()
        ));
        exit();
        break;
    case 'compare':
        echo json_encode(array(
            'status' => true,
            'html' => compareLink()
        ));
        exit();
        break;
    case 'enter':
        echo json_encode(array(
            'status' => true,
            'html' => enterForm()
        ));
        exit();
        break;
    case 'auth':
        echo json_encode(array(
            'status' => true, // Передавать false, если пользователь уже есть, пример в функции enterFormError
            'html' => enterFormError()
        ));
        exit();
        break;
    case 'reg':
        echo json_encode(array(
            'status' => true,
            'html' => regForm()
        ));
        exit();
        break;
    case 'regAjax':
        echo json_encode(array(
            'status' => true, // Передавать false, если пользователь уже есть, пример в функции regFormError
            'html' => regSuccess()
        ));
        exit();
        break;
    case 'recovery':
        echo json_encode(array(
            'status' => true,
            'html' => recoveryForm()
        ));
        exit();
        break;
    case 'recoveryAjax':
        echo json_encode(array(
            'status' => true, // Передавать false, если пользователь уже есть, пример в функции recoveryFormError
            'html' => recoverySuccess()
        ));
        exit();
        break;
    case 'ifeed':
        echo json_encode(array(
            'status' => true,
            'html' => ifeedSuccess()
        ));
        exit();
        break;
    case 'cartForm':
        echo json_encode(array(
            'status' => true
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
        <div class="row">
            <!--cats-->
            <div class="catalog__cats catalog__cats_lg">
                <div class="cats">
                    <div class="cats__title">
                        <div class="cats__title-title">Категории</div>
                        <svg class="cats__title-svg">
                            <use xlink:href="images/icons/sprite.svg#filter"></use>
                        </svg>
                    </div>
                    <div class="cats__list"><a class="cats__item active" href="catalog.html">Орехи</a><a
                                class="cats__item" href="catalog.html">Сухофрукты</a><a class="cats__item"
                                                                                        href="catalog.html">Глазурь</a>
                    </div>
                </div>
            </div>
            <div class="catalog__controls">
                <div class="catalog__select">
                    <div class="catalog__select-title">Показать:</div>
                    <div class="catalog__select-select">
                        <select class="select" data-placeholder="Выберите вариант">
                            <option selected></option>
                            <option value="Все">Все</option>
                            <option value="Вариант1">Вариант1</option>
                            <option value="Вариант2">Вариант2</option>
                            <option value="Вариант3">Вариант3</option>
                        </select>
                    </div>
                </div>
                <div class="catalog__types">
                    <div class="types">
                        <input type="hidden" name="type" value="tile">
                        <button class="type" type="button" data-type="tile">
                            <svg class="type__svg">
                                <use xlink:href="images/icons/sprite.svg#tile"></use>
                            </svg>
                        </button>
                        <button class="type active" type="button" data-type="list">
                            <svg class="type__svg">
                                <use xlink:href="images/icons/sprite.svg#list"></use>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="catalog__items">
            <div class="row">
                <? $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
                foreach ($arr as $i): ?>
                    <div class="catalog__item list">
                        <div class="item buyItem list" data-id="<?= $i ?>">
                            <div class="item__wrap">
                                <a href="product.html" class="item__top">
                                    <div class="item__discount">15%</div>
                                    <div class="item__country"><img class="item__country-img"
                                                                    src="images/bg/flag.png"/><span
                                                class="item__country-title">Россия</span></div>
                                    <div class="item__img"><img class="item__img-img buyImg"
                                                                src="images/content/products/product.png"/></div>
                                </a>
                                <div class="item__bottom">
                                    <div class="item__left">
                                        <a href="product.html" class="item__title">Миндаль голд сырой</a>
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
                                        <button class="item__fast fastOrder" type="button">Купить в один клик</button>
                                    </div>
                                </div>
                            </div>
                            <div class="item__hidden">
                                <div class="item__block">
                                    <div class="item__wrap">
                                        <div class="item__desc">
                                            <div class="item__desc-title">Пищевая и энергетическая ценность продукта на
                                                100
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
                                            <div class="item__period">Срок годности:&nbsp;<span
                                                        class="item__period_gold">6 месяцев</span>
                                            </div>
                                        </div>
                                        <a href="product.html" class="item__top">
                                            <div class="item__discount">15%</div>
                                            <div class="item__country"><img class="item__country-img"
                                                                            src="images/bg/flag.png"/><span
                                                        class="item__country-title">Россия</span></div>
                                            <div class="item__img"><img class="item__img-img"
                                                                        src="images/content/products/product.png"/>
                                            </div>
                                        </a>
                                        <div class="item__bottom">
                                            <div class="item__left">
                                                <a href="product.html" class="item__title">Миндаль голд сырой</a>
                                                <div class="item__pricing">
                                                    <div class="price"><span class="price__val">105.00</span><span
                                                                class="price__type">руб.</span></div>
                                                    <div class="price price_old"><span
                                                                class="price__val">120.00</span><span
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
                                                            <input class="count__input" type="text" name="count"
                                                                   value="1"
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
                                                <button class="item__fast fastOrder" type="button">Купить в один клик
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item__compare">
                                        <button type="button" class="item__compare-button compareProduct">
                                            <svg class="item__compare-svg">
                                                <use xlink:href="images/icons/sprite.svg#compare"></use>
                                            </svg>
                                            <div class="item__compare-title compareProduct__title">Сравнить</div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <? endforeach; ?>
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

function callorderForm()
{
    ob_start();
    ?>
    <div class="callorder">
        <form class="callorder__form form form_pop">
            <div class="form__wrap">
                <div class="form__title">Заказ звонка</div>
                <div class="form__sub">Оставте заявку и наш менеджер свяжеться с вами в ближайшее время</div>
                <div class="form__fields">
                    <div class="form__field">
                        <input class="input" type="text" name="name" placeholder="*Ваши имя">
                    </div>
                    <div class="form__field">
                        <input class="input" type="tel" name="tel" placeholder="*Телефон">
                    </div>
                </div>
                <div class="form__button">
                    <button class="btn" type="submit">
                        <div class="btn__title">Отправить</div>
                    </button>
                </div>
                <div class="form__fz">
                    <div class="fz">
                        <label class="fz__label">
                            <input class="fz__input" type="checkbox" name="fz" checked>
                            <div class="fz__fake">
                                <svg class="fz__svg">
                                    <use xlink:href="images/icons/sprite.svg#check"></use>
                                </svg>
                            </div>
                            <div class="fz__title">Я даю согласие на обработку<br>персональных данных</div>
                        </label>
                    </div>
                </div>
                <button class="form__close" type="button">
                    <svg class="form__close-svg">
                        <use xlink:href="images/icons/sprite.svg#cancel"></use>
                    </svg>
                </button>
            </div>
            <input type="hidden" name="action" value="callorderSubmit">
        </form>
    </div>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function callorderSuccess()
{
    ob_start();
    ?>
    <div class="callorder">
        <form class="callorder__form form form_pop form_suc">
            <div class="form__wrap">
                <div class="form__logo"><img class="form__logo-img" src="images/bg/logo_2.svg"></div>
                <div class="form__title">Спасибо!</div>
                <div class="form__sub">Мы скоро с вами свяжемся.</div>
                <div class="form__image"><img class="form__image-img" src="images/bg/formImg.png"></div>
                <button class="form__close" type="button">
                    <svg class="form__close-svg">
                        <use xlink:href="images/icons/sprite.svg#cancel"></use>
                    </svg>
                </button>
            </div>
        </form>
    </div>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function fastOrderForm()
{
    ob_start();
    ?>
    <div class="callorder">
        <form class="callorder__form form form_pop">
            <div class="form__wrap">
                <div class="form__title">Быстрая покупка</div>
                <div class="form__sub">
                    Оставте Ваш номер телефона <br>
                    и мы свяжемся с Вами для <br>
                    подтверждения заказа
                </div>
                <div class="form__fields">
                    <div class="form__field">
                        <input class="input" type="text" name="name" placeholder="*Ваши имя">
                    </div>
                    <div class="form__field">
                        <input class="input" type="tel" name="tel" placeholder="*Телефон">
                    </div>
                </div>
                <div class="form__button">
                    <button class="btn" type="submit">
                        <div class="btn__title">Отправить</div>
                    </button>
                </div>
                <div class="form__fz">
                    <div class="fz">
                        <label class="fz__label">
                            <input class="fz__input" type="checkbox" name="fz" checked>
                            <div class="fz__fake">
                                <svg class="fz__svg">
                                    <use xlink:href="images/icons/sprite.svg#check"></use>
                                </svg>
                            </div>
                            <div class="fz__title">Я даю согласие на обработку<br>персональных данных</div>
                        </label>
                    </div>
                </div>
                <button class="form__close" type="button">
                    <svg class="form__close-svg">
                        <use xlink:href="images/icons/sprite.svg#cancel"></use>
                    </svg>
                </button>
            </div>
            <input type="hidden" name="action" value="fastOrderSubmit">
        </form>
    </div>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function fastOrderSuccess()
{
    ob_start();
    ?>
    <div class="callorder">
        <form class="callorder__form form form_pop form_suc">
            <div class="form__wrap">
                <div class="form__logo"><img class="form__logo-img" src="images/bg/logo_2.svg"></div>
                <div class="form__title">Спасибо за покупку!</div>
                <div class="form__sub">Мы скоро с вами свяжемся.</div>
                <div class="form__image"><img class="form__image-img" src="images/bg/formImg.png"></div>
                <button class="form__close" type="button">
                    <svg class="form__close-svg">
                        <use xlink:href="images/icons/sprite.svg#cancel"></use>
                    </svg>
                </button>
            </div>
        </form>
    </div>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function getBuyBasket()
{
    ob_start();
    ?>
    <a class="basket-link" href="cart.html">
        <div class="basket-link__icon">
            <div class="basket-link__icon-wrap">
                <svg class="basket-link__svg">
                    <use xlink:href="images/icons/sprite.svg#basket"></use>
                </svg>
                <div class="compare-link__num">99</div>
            </div>
        </div>
        <div class="basket-link__price">
            <svg class="basket-link__price-type">
                <use xlink:href="images/icons/sprite.svg#rubl"></use>
            </svg>
            <div class="basket-link__price-num">999 999</div>
        </div>
    </a>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function ratingHtml()
{
    ob_start();
    ?>
    <div class="rating">
        <div class="rating__wrapper">
            <input class="rating__input" type="radio" name="rating" value="5" id="rating-5">
            <label class="rating__star" for="rating-5">
                <svg class="rating__star-svg">
                    <use xlink:href="images/icons/sprite.svg#star"></use>
                </svg>
            </label>
            <input class="rating__input" type="radio" name="rating" value="4" id="rating-4" checked>
            <label class="rating__star" for="rating-4">
                <svg class="rating__star-svg">
                    <use xlink:href="images/icons/sprite.svg#star"></use>
                </svg>
            </label>
            <input class="rating__input" type="radio" name="rating" value="3" id="rating-3">
            <label class="rating__star" for="rating-3">
                <svg class="rating__star-svg">
                    <use xlink:href="images/icons/sprite.svg#star"></use>
                </svg>
            </label>
            <input class="rating__input" type="radio" name="rating" value="2" id="rating-2">
            <label class="rating__star" for="rating-2">
                <svg class="rating__star-svg">
                    <use xlink:href="images/icons/sprite.svg#star"></use>
                </svg>
            </label>
            <input class="rating__input" type="radio" name="rating" value="1" id="rating-1">
            <label class="rating__star" for="rating-1">
                <svg class="rating__star-svg">
                    <use xlink:href="images/icons/sprite.svg#star"></use>
                </svg>
            </label>
        </div>
    </div>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function feedSuccess()
{
    ob_start();
    ?>
    <div class="feed__success">
        <button class="feed__close" type="button">
            <svg class="feed__close-svg">
                <use xlink:href="images/icons/sprite.svg#cancel"></use>
            </svg>
        </button>
        <div class="form__logo"><img class="form__logo-img" src="images/bg/logo_2.svg"></div>
        <div class="form__title">Спасибо за покупку!</div>
        <div class="form__sub">Мы скоро с вами свяжемся.</div>
    </div>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function revFormSuccess()
{
    ob_start();
    ?>
    <div class="feed__success">
        <button class="feed__close" type="button">
            <svg class="feed__close-svg">
                <use xlink:href="images/icons/sprite.svg#cancel"></use>
            </svg>
        </button>
        <div class="form__logo"><img class="form__logo-img" src="images/bg/logo_2.svg"></div>
        <div class="form__title">Спасибо за отзыв!</div>
        <div class="form__sub">Скоро он появится на сайте.</div>
    </div>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function compareLink()
{
    ob_start();
    ?>
    <a class="compare-link" href="cabinet.html">
        <svg class="compare-link__svg">
            <use xlink:href="images/icons/sprite.svg#compare"></use>
        </svg>
        <div class="compare-link__num">10</div>
    </a>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function enterForm()
{
    ob_start();
    ?>
    <div class="enter">
        <form class="form enter__form form_pop" action="#" method="post">
            <div class="form__wrap enter__wrap">
                <div class="form__title enter__title">Вход в личный кабинет</div>
                <div class="form__fields enter__fields">
                    <div class="form__field">
                        <input class="input" type="email" name="email" placeholder="*E-mail">
                    </div>
                    <div class="form__field">
                        <input class="input" type="password" name="password" placeholder="*Пароль">
                    </div>
                    <div class="form__button">
                        <button class="btn" type="submit">
                            <div class="btn__title">Войти</div>
                        </button>
                    </div>
                    <div class="enter__socials">
                        <div class="enter__socials-title">Войти с помощью:</div>
                        <div class="enter__socials-list"><a class="enter__social" href="/"><img
                                        class="enter__social-img" src="images/icons/facebook.svg"></a><a
                                    class="enter__social" href="/"><img class="enter__social-img"
                                                                        src="images/icons/vk.svg"></a><a
                                    class="enter__social" href="/"><img class="enter__social-img"
                                                                        src="images/icons/ok.svg"></a></div>
                    </div>
                    <div class="enter__recovery">
                        <button class="enter__recovery-button recoveryForm" type="button">Забыли пароль?</button>
                    </div>
                    <button class="enter__registration regForm" type="button">
                        <svg class="enter__registration-svg">
                            <use xlink:href="images/icons/sprite.svg#user"></use>
                        </svg>
                        <div class="enter__registration-title">Регистрация нового пользователя</div>
                    </button>
                    <button class="form__close" type="button">
                        <svg class="form__close-svg">
                            <use xlink:href="images/icons/sprite.svg#cancel"></use>
                        </svg>
                    </button>
                </div>
            </div>
            <input type="hidden" name="action" value="auth">
        </form>
    </div>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function enterFormError()
{
    ob_start();
    ?>
    <div class="enter">
        <form class="form enter__form form_pop" action="#" method="post">
            <div class="form__wrap enter__wrap">
                <div class="form__title enter__title">Вход в личный кабинет</div>
                <div class="form__fields enter__fields">
                    <div class="form__field">
                        <input class="input" type="email" name="email" value=" <?= $_POST['email'] ?>"
                               placeholder="*E-mail">
                    </div>
                    <div class="form__field">
                        <input class="input error" type="password" name="password" value=" <?= $_POST['password'] ?>"
                               placeholder="*Пароль">
                        <label id="email-error" class="error" for="password">Неверный пароль</label>
                    </div>
                    <div class="form__button">
                        <button class="btn" type="submit">
                            <div class="btn__title">Войти</div>
                        </button>
                    </div>
                    <div class="enter__socials">
                        <div class="enter__socials-title">Войти с помощью:</div>
                        <div class="enter__socials-list"><a class="enter__social" href="/"><img
                                        class="enter__social-img" src="images/icons/facebook.svg"></a><a
                                    class="enter__social" href="/"><img class="enter__social-img"
                                                                        src="images/icons/vk.svg"></a><a
                                    class="enter__social" href="/"><img class="enter__social-img"
                                                                        src="images/icons/ok.svg"></a></div>
                    </div>
                    <div class="enter__recovery">
                        <button class="enter__recovery-button recoveryForm" type="button">Забыли пароль?</button>
                    </div>
                    <button class="enter__registration regForm" type="button">
                        <svg class="enter__registration-svg">
                            <use xlink:href="images/icons/sprite.svg#user"></use>
                        </svg>
                        <div class="enter__registration-title">Регистрация нового пользователя</div>
                    </button>
                    <button class="form__close" type="button">
                        <svg class="form__close-svg">
                            <use xlink:href="images/icons/sprite.svg#cancel"></use>
                        </svg>
                    </button>
                </div>
            </div>
            <input type="hidden" name="action" value="auth">
        </form>
    </div>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function regForm()
{
    ob_start();
    ?>
    <div class="reg">
        <form class="form reg__form form_pop" action="#" method="post">
            <div class="form__wrap reg__wrap">
                <div class="form__title reg__title">Регистрация</div>
                <div class="form__sub">Все поля обязательны к заполнению</div>
                <div class="form__fields reg__fields">
                    <div class="form__field">
                        <input class="input" type="text" name="name" placeholder="*Имя">
                    </div>
                    <div class="form__field">
                        <input class="input" type="email" name="email" placeholder="*E-mail">
                    </div>
                </div>
                <div class="form__sub">Пароль должен быть не менее 6 символов длиной</div>
                <div class="form__fields reg__fields">
                    <div class="form__field">
                        <input class="input" type="password" id="passwordReg" name="password" placeholder="*Пароль">
                    </div>
                    <div class="form__field">
                        <input class="input" type="password" name="confirmPassword" placeholder="*Подтверждение пароля">
                    </div>
                </div>
                <div class="form__button">
                    <button class="btn" type="submit">
                        <div class="btn__title">Регистрация</div>
                    </button>
                </div>
                <div class="form__fz">
                    <div class="fz">
                        <label class="fz__label">
                            <input class="fz__input" type="checkbox" name="fz" checked>
                            <div class="fz__fake">
                                <svg class="fz__svg">
                                    <use xlink:href="images/icons/sprite.svg#check"></use>
                                </svg>
                            </div>
                            <div class="fz__title">Я даю согласие на обработку<br>персональных данных</div>
                        </label>
                    </div>
                </div>
                <button class="form__close" type="button">
                    <svg class="form__close-svg">
                        <use xlink:href="images/icons/sprite.svg#cancel"></use>
                    </svg>
                </button>
            </div>
            <input type="hidden" name="action" value="regAjax">
        </form>
    </div>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function regSuccess()
{
    ob_start();
    ?>
    <div class="reg">
        <form class="reg__form form form_pop form_suc">
            <div class="form__wrap">
                <div class="form__logo"><img class="form__logo-img" src="images/bg/logo_2.svg"></div>
                <div class="form__title">Спасибо за регистрацию!</div>
                <div class="form__sub">
                    На указанный Вами e-mail выслано письмо
                    с подтверждением аккаунта
                </div>
                <div class="form__image"><img class="form__image-img" src="images/bg/formImg.png"></div>
                <button class="form__close" type="button">
                    <svg class="form__close-svg">
                        <use xlink:href="images/icons/sprite.svg#cancel"></use>
                    </svg>
                </button>
            </div>
        </form>
    </div>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function regFormError()
{
    ob_start();
    ?>
    <div class="reg">
        <form class="form reg__form form_pop" action="#" method="post">
            <div class="form__wrap reg__wrap">
                <div class="form__title reg__title">Регистрация</div>
                <div class="form__sub">Все поля обязательны к заполнению</div>
                <div class="form__fields reg__fields">
                    <div class="form__field">
                        <input class="input" type="text" name="name" value="<?= $_POST['name'] ?>" placeholder="*Имя">
                    </div>
                    <div class="form__field">
                        <div class="form__error">E-mail уже зарегестрирован</div>
                        <input class="input" type="email" name="email" value="<?= $_POST['email'] ?>"
                               placeholder="*E-mail">
                    </div>
                </div>
                <div class="form__sub">Пароль должен быть не менее 6 символов длиной</div>
                <div class="form__fields reg__fields">
                    <div class="form__field">
                        <input class="input" type="password" name="password" id="passwordReg"
                               value="<?= $_POST['password'] ?>" placeholder="*Пароль">
                    </div>
                    <div class="form__field">
                        <input class="input" type="password" name="confirmPassword"
                               value="<?= $_POST['confirmPassword'] ?>" placeholder="*Подтверждение пароля">
                    </div>
                </div>
                <div class="form__button">
                    <button class="btn" type="submit">
                        <div class="btn__title">Регистрация</div>
                    </button>
                </div>
                <div class="form__fz">
                    <div class="fz">
                        <label class="fz__label">
                            <input class="fz__input" type="checkbox" name="fz" checked>
                            <div class="fz__fake">
                                <svg class="fz__svg">
                                    <use xlink:href="images/icons/sprite.svg#check"></use>
                                </svg>
                            </div>
                            <div class="fz__title">Я даю согласие на обработку<br>персональных данных</div>
                        </label>
                    </div>
                </div>
                <button class="form__close" type="button">
                    <svg class="form__close-svg">
                        <use xlink:href="images/icons/sprite.svg#cancel"></use>
                    </svg>
                </button>
            </div>
            <input type="hidden" name="action" value="regAjax">
        </form>
    </div>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function recoveryForm()
{
    ob_start();
    ?>
    <div class="recovery">
        <form class="form recovery__form form_pop" action="#" method="post">
            <div class="form__wrap recovery__wrap">
                <div class="form__title recovery__title">Восстановление пароля</div>
                <div class="form__sub">Введите свой e-mail и мы вышлем Вам регистрационные данные</div>
                <div class="form__fields reg__fields">
                    <div class="form__field">
                        <input class="input" type="email" name="email" placeholder="*E-mail">
                    </div>
                </div>
                <div class="form__button">
                    <button class="btn" type="submit">
                        <div class="btn__title">Отправить</div>
                    </button>
                </div>
                <button class="form__close" type="button">
                    <svg class="form__close-svg">
                        <use xlink:href="images/icons/sprite.svg#cancel"></use>
                    </svg>
                </button>
            </div>
            <input type="hidden" name="action" value="recoveryAjax">
        </form>
    </div>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function recoverySuccess()
{
    ob_start();
    ?>
    <div class="recovery">
        <form class="recovery__form form form_pop form_suc">
            <div class="form__wrap">
                <div class="form__logo"><img class="form__logo-img" src="images/bg/logo_2.svg"></div>
                <div class="form__title">Восстановление пароля</div>
                <div class="form__sub">
                    На указанный Вами e-mail выслано письмо
                    с данными для востановления
                </div>
                <div class="form__image"><img class="form__image-img" src="images/bg/formImg.png"></div>
                <button class="form__close" type="button">
                    <svg class="form__close-svg">
                        <use xlink:href="images/icons/sprite.svg#cancel"></use>
                    </svg>
                </button>
            </div>
        </form>
    </div>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function recoveryFormError()
{
    ob_start();
    ?>
    <div class="recovery">
        <form class="form recovery__form form_pop" action="#" method="post">
            <div class="form__wrap recovery__wrap">
                <div class="form__title recovery__title">Восстановление пароля</div>
                <div class="form__sub">Введите свой e-mail и мы вышлем Вам регистрационные данные</div>
                <div class="form__fields reg__fields">
                    <div class="form__field">
                        <div class="form__error">E-mail уже зарегестрирован</div>
                        <input class="input" type="email" name="email" value="<?= $_POST['email'] ?>"
                               placeholder="*E-mail">
                    </div>
                </div>
                <div class="form__button">
                    <button class="btn" type="submit">
                        <div class="btn__title">Отправить</div>
                    </button>
                </div>
                <button class="form__close" type="button">
                    <svg class="form__close-svg">
                        <use xlink:href="images/icons/sprite.svg#cancel"></use>
                    </svg>
                </button>
            </div>
            <input type="hidden" name="action" value="recoveryAjax">
        </form>
    </div>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function ifeedSuccess()
{
    ob_start();
    ?>
    <div class="enter">
        <form class="enter__form form form_pop form_suc">
            <div class="form__wrap">
                <div class="form__logo"><img class="form__logo-img" src="images/bg/logo_2.svg"></div>
                <div class="form__title">Спасибо за заявку!</div>
                <div class="form__sub">
                    Мы скоро с Вами свяжемся.
                </div>
                <div class="form__image"><img class="form__image-img" src="images/bg/formImg.png"></div>
                <button class="form__close" type="button">
                    <svg class="form__close-svg">
                        <use xlink:href="images/icons/sprite.svg#cancel"></use>
                    </svg>
                </button>
            </div>
        </form>
    </div>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function contactsSuccess()
{
    ob_start();
    ?>
    <div class="feed__success">
        <button class="feed__close" type="button">
            <svg class="feed__close-svg">
                <use xlink:href="images/icons/sprite.svg#cancel"></use>
            </svg>
        </button>
        <div class="form__logo"><img class="form__logo-img" src="images/bg/logo_2.svg"></div>
        <div class="form__title">Спасибо за заявку!</div>
        <div class="form__sub">Мы скоро с вами свяжемся.</div>
    </div>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}
