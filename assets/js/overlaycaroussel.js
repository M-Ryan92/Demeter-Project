function toggleOverlay() {
    if(document.location.search.indexOf("?") < 0){
        document.location = document.location+'?'+'overlay=true';
    }else {
        document.location = document.location.origin + document.location.pathname;
    }
}

function translate() {
    var tslY = (document.body.clientHeight / 2) - (document.getElementById('contentOverlay').clientHeight / 2);
    var tslX = -1 * (document.getElementById('contentOverlay').clientWidth / 2);
    $(document.getElementById('contentOverlay')).css({transform: 'translate(' + tslX + 'px,' + tslY + 'px)'});
}



function overlayCaroussel(imglink, imgalt) {
    var carousselHtml = '<div id="contentOverlay" class="container col-xs-12 col-sm-9 col-md-9" >' +
            '<div id="owl-demo" class="owl-carousel">';
    var index, len;
    for (index = 0, len = imglink.length; index < len; ++index) {
        carousselHtml += '<div class="item">' +
                '<img class="lazyOwl" alt="'+ imgalt[index] +'" src="'+ imglink[index] +'">' +
                '</div>';
    }
    carousselHtml += '</div></div>';
    jQuery(carousselHtml).appendTo(document.body);
    instantiateCaroussel();
}

function instantiateCaroussel() {
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
}