var toggleOverlay = false;
var overlay;
var content;

function overlayToggleExit() {
	//remove the overlay ,set toggle to false and remove overflow css
	overlay.remove();
	var cssObject = $( document.getElementsByTagName('html') ).prop('style');
	cssObject.removeProperty('position');
	cssObject.removeProperty('width');
	toggleOverlay = false;
	window.onresize = null;
}

function translate() {
	var tslY = (document.documentElement.clientHeight/2) - (document.getElementById('contentOverlay').clientHeight/2);
	var tslX = -1 * (document.getElementById('contentOverlay').clientWidth/2);

	$(document.getElementById('contentOverlay')).css({ transform: 'translate('+ tslX +'px,'+ tslY +'px)' });
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
				translate();
				window.onresize = translate;

				//get the proper translation value so it is properly centered in the middle of the screen
				$(document.getElementsByTagName('html')).css({
					position: 'fixed',
    				width: '100%'
					 });
				toggleOverlay = true;

		    }
		);

	}else{
		//remove the overlay ,set toggle to false and remove overflow css
		overlayToggleExit()
	}
}