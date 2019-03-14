/*YANDEX*/
$(function ()   {
    ymaps.ready(init);
    var myMap,
        myPlacemark;

    function init() {

        if ($('#map').length) {
            var center = [55.733996408140875,37.712371096572895];
            // if ($(window).width() < 576) {
            //     center = [55.609501798660396, 37.61325538360591];
            // }

            myMap = new ymaps.Map("map", {
                center: center,
                zoom: 17,
                controls: []
            });


            myMap.behaviors.disable(['scrollZoom']);
            // myMap.controls.remove('geolocationControl')
            //     .remove('searchControl')
            //     .remove('trafficControl')
            //     .remove('typeSelector')
            //     .remove('fullscreenControl')
            //     .remove('zoomControl')
            //     .remove('rulerControl');

            myPin = new ymaps.GeoObjectCollection({}, {
                // iconLayout: 'default#image',
                // iconImageHref: '/img/icons/map-marker.svg',
                // iconImageSize: [46, 57],
                // iconImageOffset: [-15, -55]
            });


            myPlacemark1 = new ymaps.Placemark([55.734299088188656, 37.71238182540895], {
                    balloonContentHeader: "Вкусита",
                    balloonContentBody: "Оптово - розничный интернет магазин орехов и сухофруктов",
                    balloonContentFooter: "Россия, 125040, г. Москва, улица Нижегородская, 29-33",
                    hintContent: "vkusita.ru"
                },
                {
                    iconLayout: 'default#image',
                    iconImageHref: 'images/icons/pinY.svg',
                    iconImageSize: [75, 90],
                    iconImageOffset: [-45, -75]
                    // preset: 'islands#redGlyphIcon'
                });


            myPin.add(myPlacemark1);
            myMap.geoObjects.add(myPin);
        }
    }
});
/*END YANDEX*/