var overlay;
var overlayIsVisible = false;

function OverlayCaroussel(url, images) {
    this.url = url;
    this.images = images;

    this.toggleOverlay = function() {
        if (!overlayIsVisible) {
            $.get(
                    this.url,
                    {id: "POEP"},
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

                //get the proper translation value so it is properly centered in the middle of the screen
                $(document.getElementsByTagName('html')).css({
                    position: 'fixed',
                    width: '100%'
                });
                overlayIsVisible = true;
            });
        } else {
            //remove the overlay ,set toggle to false and remove overflow css
            exitOverlay();
            overlay.remove();
        }
    };
}

function translate() {
    var tslY = (document.documentElement.clientHeight / 2) - (document.getElementById('contentOverlay').clientHeight / 2);
    var tslX = -1 * (document.getElementById('contentOverlay').clientWidth / 2);
    $(document.getElementById('contentOverlay')).css({transform: 'translate(' + tslX + 'px,' + tslY + 'px)'});
}

function exitOverlay() {
    overlay.remove();
    overlayIsVisible = false;
    window.onresize = null;
}
