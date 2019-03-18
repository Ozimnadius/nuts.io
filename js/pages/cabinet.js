$(function () {

    let cabinetSwithes = document.querySelector('.cab__sws-list');
    if (cabinetSwithes) {

        let switches = new Switches({
            sws: '.cab__sws-list',
            sw: '.cab__sw',
            line: '.cab__subline',
            tab: '.cab__tab',
            tabs: '.cab__tabs',
            autoWidth: true
        }).init();
    }
});