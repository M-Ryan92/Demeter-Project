var toggleOverlay = false;
var overlay;
var content;

function overlayToggleExit() {
	//remove the overlay ,set toggle to false and remove overflow css
	overlay.remove();
	var cssObject = $( document.getElementsByTagName('html') ).prop('style');
	cssObject.removeProperty('overflow');
	toggleOverlay = false;
}

function overlayToggle(overlayId, url) {

	if(!toggleOverlay){
		$.get(
		    url,
		    {id : overlayId},
		    function(data) {
		    	console.log(data);
				overlay = jQuery(data);
				// alert(data);
				overlay.prependTo(document.body);
				//add esc watcher
				document.onkeydown = function(e) {
 					var ESC_KEY = 27;
 					if(e.which === ESC_KEY){
						overlayToggle();
						document.onkeydown = null;
					}
				}
				//focus it and hide overlay
				$(document.getElementById('contentOverlay')).css({ paddingTop: document.documentElement.clientHeight/2 });
				// $(document.getElementsByTagName('html')).css({ overflow: "hidden" });
				toggleOverlay = true;

		    }
		);

	}else{
		//remove the overlay ,set toggle to false and remove overflow css
		overlay.remove();
		var cssObject = $( document.getElementsByTagName('html') ).prop('style');
		cssObject.removeProperty('overflow');
		toggleOverlay = false;
	}
}