<html>
	<head>
		<link href="../../../resources/Bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	</head>
	<body id="frame">
		<div id="header" style="background-color:red; width:100%; height:140px;"></div>
		<div style="background-color:rgb(207, 204, 189); width:100%; height:4000px;">
			

		<div onclick="toggle()" id="agenda-btn" style="
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
		<div id="sidebar" style="
			position: absolute;
			right: 0px;
			height: inherit;
			width: 0;
			background-color: rgb(127, 255, 212);
			">

		</div>


		</div>
		<div id="footer" style="background-color:red; width:100%; height:440px;"></div>

		<script type="text/javascript">
			function toggle(){
					var btn = $('#agenda-btn');
					var sidebar = $('#sidebar');

					var sidebarWidth = sidebar.outerWidth();
					var defaultOpenWidth = '250px';
					var animationTime = 30;

					if(sidebarWidth === 0){
						//open
						btn.animate({'right': defaultOpenWidth}, animationTime);
						sidebar.animate({'width': defaultOpenWidth}, animationTime);
					}else{
						//close
						btn.animate({'right': '0'}, animationTime);
						sidebar.animate({'width': '0'}, animationTime);
					}
			}

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
					var height = window.document.body.clientHeight,
						btnHeight = $('#agenda-btn').outerHeight(),
						scrollTop = document.body.scrollTop,
						footerOffsetTop = document.getElementById('footer').offsetTop,
						center = (height/2)- (btnHeight/2) + scrollTop;
					
					if(center < $('#header').height()) {
						center = $('#header').height();
					}
					if( center + btnHeight > footerOffsetTop){
						center = footerOffsetTop-btnHeight;
					}

					$('#agenda-btn').animate({top: center}, 50);
					// $("#footermargin").css("padding-bottom", footerHeight);
				},10);
			}

			PosRenderer();
		</script>
		<script type="text/javascript" src="../../../resources/JQuery/jquery.min.js"></script>
	</body>
</html>