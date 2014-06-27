<html>
	<head>
		<link href="../../../resources/Bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	</head>
	<body id="frame" style="height:5000px">
		<div id="agenda-btn" style="
			position: absolute;
			right: 0px;
			text-align: center;
			width: 45px;
			height: 60px;
			top: 572px;
			background-color: rgb(127, 255, 212);
			border-bottom-left-radius: 50;
			border-top-left-radius: 50;
			padding-top: 13px;
			padding-left: 10px;
			">
			<span style="font-size: 32px;" class="glyphicon glyphicon-calendar"></span>
		</div>
		<div style="
			position: absolute;
			right: 0px;
			height: inherit;
			width: 2px;
			background-color: rgb(127, 255, 212);
			">

		</div>
		<script type="text/javascript">
				setTimeout(function(){
					window.onresize = function(){
						clearTimeout($.data(this, 'resizeTimer'));

						$.data(this, 'resizeTimer', setTimeout(function() {
							PosRenderer();
						}, 200));
					};
					document.getElementById('frame').onscroll = function(){
						clearTimeout($.data(this, 'scrollTimer'));

						$.data(this, 'scrollTimer', setTimeout(function() {
							PosRenderer();
						}, 200));
					};
					
				},10);

			function PosRenderer(){
				setTimeout(function(){
					var height = window.document.body.clientHeight;
					var btn = $('#agenda-btn').height();
					var scrollTop = document.body.scrollTop;
					
					var center = (height/2)- (btn/2) + scrollTop;
					// var scrollHeight = document.body.scrollHeight;


					$('#agenda-btn').animate({top: center}, 50);
					// $("#footermargin").css("padding-bottom", footerHeight);
				},10);
			}

			PosRenderer();
		</script>
		<script type="text/javascript" src="../../../resources/JQuery/jquery.min.js"></script>
	</body>
</html>