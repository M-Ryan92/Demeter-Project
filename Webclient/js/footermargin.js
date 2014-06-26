/*
 * since we dont want a fixed height for the footer this js script will add an resize event on the window
 * when the window is resized the height is checked and the padding is set
 *
 */
function footermargin(){
	setTimeout(function(){
		var footerHeight = $("#footerheight").height();
		$("#footermargin").css("padding-bottom", footerHeight);
	},10);
};

window.onresize = footermargin;
footermargin();