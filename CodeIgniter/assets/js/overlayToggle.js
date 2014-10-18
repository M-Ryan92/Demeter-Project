var overlay =null;

function OverlayCaroussel(images, baseUrl) {
    this.url = "/carousel/overlay.php";
    this.images = images;

    this.toggleOverlay = function() {
        var images = this.images;
        $.get(
                this.url,
                {images: images},
        function(data) {
            overlay = jQuery(data);
            overlay.prependTo(document.body);
            //add esc watcher
            document.onkeydown = function(e) {
                var ESC_KEY = 27;
                if (e.which === ESC_KEY) {
                    exitOverlay();
                    overlay.remove();
                    document.onkeydown = null;
                }
            };
            translate();
            window.onresize = translate;
        });
    };
}
function findOverlay(){
    var o = document.getElementById('overlay');
    return o;
}

// function translate() {
//     var tslY = (document.documentElement.clientHeight / 2) - (document.getElementById('contentOverlay').clientHeight / 2);
//     var tslX = -1 * (document.getElementById('contentOverlay').clientWidth / 2);
//     $(document.getElementById('contentOverlay')).css({transform: 'translate(' + tslX + 'px,' + tslY + 'px)'});
// }

function exitOverlay() {
    if(overlay==null) {
        overlay = findOverlay();
    }
    overlay.remove();
    window.onresize = null;
}
