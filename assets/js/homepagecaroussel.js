$(document).ready(function () {

    $("#owl-demo").owlCarousel({
        navigation: true,
        navigationText: ['<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>',
            '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>'],
        lazyLoad: true,
        autoPlay: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        responsive: true,
        singleItem: true
    });
});