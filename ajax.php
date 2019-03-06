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
    default:
        echo json_encode(array(
            'status' => false,
        ));
        exit();
        break;
}

function getSearchResult(){
    ob_start();
    ?>
    <div class="search__wrap">
        <div class="search__list"><a class="search__item" href="product.html">
                <div class="row">
                    <div class="search__item-img"><img class="undefined" src="images/content/search/img.jpg" alt="undefined"/>
                    </div>
                    <div class="search__item-desc">
                        <div class="search__item-title">Миндаль голд сырой</div>
                        <div class="search__item-price">
                            <div class="price"><span class="price__val">105.00</span><span class="price__type">руб.</span></div>
                            <div class="price price_old"><span class="price__val">120.00</span><span class="price__type">руб.</span></div>
                        </div>
                    </div>
                </div></a><a class="search__item" href="product.html">
                <div class="row">
                    <div class="search__item-img"><img class="undefined" src="images/content/search/img.jpg" alt="undefined"/>
                    </div>
                    <div class="search__item-desc">
                        <div class="search__item-title">Миндаль голд сырой</div>
                        <div class="search__item-price">
                            <div class="price"><span class="price__val">105.00</span><span class="price__type">руб.</span></div>
                            <div class="price price_old"><span class="price__val">120.00</span><span class="price__type">руб.</span></div>
                        </div>
                    </div>
                </div></a><a class="search__item" href="product.html">
                <div class="row">
                    <div class="search__item-img"><img class="undefined" src="images/content/search/img.jpg" alt="undefined"/>
                    </div>
                    <div class="search__item-desc">
                        <div class="search__item-title">Миндаль голд сырой</div>
                        <div class="search__item-price">
                            <div class="price"><span class="price__val">105.00</span><span class="price__type">руб.</span></div>
                            <div class="price price_old"><span class="price__val">120.00</span><span class="price__type">руб.</span></div>
                        </div>
                    </div>
                </div></a><a class="search__item" href="product.html">
                <div class="row">
                    <div class="search__item-img"><img class="undefined" src="images/content/search/img.jpg" alt="undefined"/>
                    </div>
                    <div class="search__item-desc">
                        <div class="search__item-title">Миндаль голд сырой</div>
                        <div class="search__item-price">
                            <div class="price"><span class="price__val">105.00</span><span class="price__type">руб.</span></div>
                            <div class="price price_old"><span class="price__val">120.00</span><span class="price__type">руб.</span></div>
                        </div>
                    </div>
                </div></a><a class="search__item" href="product.html">
                <div class="row">
                    <div class="search__item-img"><img class="undefined" src="images/content/search/img.jpg" alt="undefined"/>
                    </div>
                    <div class="search__item-desc">
                        <div class="search__item-title">Миндаль голд сырой</div>
                        <div class="search__item-price">
                            <div class="price"><span class="price__val">105.00</span><span class="price__type">руб.</span></div>
                            <div class="price price_old"><span class="price__val">120.00</span><span class="price__type">руб.</span></div>
                        </div>
                    </div>
                </div></a><a class="search__item" href="product.html">
                <div class="row">
                    <div class="search__item-img"><img class="undefined" src="images/content/search/img.jpg" alt="undefined"/>
                    </div>
                    <div class="search__item-desc">
                        <div class="search__item-title">Миндаль голд сырой</div>
                        <div class="search__item-price">
                            <div class="price"><span class="price__val">105.00</span><span class="price__type">руб.</span></div>
                            <div class="price price_old"><span class="price__val">120.00</span><span class="price__type">руб.</span></div>
                        </div>
                    </div>
                </div></a>
        </div>
    </div>
    <?
    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}