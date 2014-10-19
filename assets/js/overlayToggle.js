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