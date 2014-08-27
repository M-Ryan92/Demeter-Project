<?php

	/**
	*
	*/
	include '../../globalsettings.php';
	include 'carousel.php';
	class Overlay extends Carousel
	{
		private $node = "";
		function __construct($overlayId, $styleId='myCarousel')
		{
			//get the content based on overlay id
			$this->setStyleId($styleId);
			$this->getContentById($overlayId);
		}

		public function startup()
		{
			if(count($this->getContent()) > 0){
				//create carousel
				// $this->setAutoPlay(false);
				// $this->setCarouselControlls(true);
				$this->node .= "<div id='overlay' onclick='overlayToggleExit()'>"."</div>";
				$this->node .= "<div id='contentOverlay' class='container col-xs-12 col-sm-9 col-md-9'>";
				$this->node .= <<<EOT
<button type="button" class="close" style="margin:5px 5px 0 0;" onclick='overlayToggleExit()'><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
EOT;
				$this->node .=  '<!-- Owl Carousel Assets -->'.
						'<link href="'.'../resources/owl/owl.carousel.css" rel="stylesheet">'.
						'<link href="'.'../resources/owl/owl.theme.css" rel="stylesheet">';
				$this->node .=<<<EOT
							  <div style='background-color: white; padding: 20px 10px;'>
				              <div id="owl-demo" class="owl-carousel">
				                <div class="item"><img class="lazyOwl" data-src="img/verzuren.png" alt="Lazy Owl Image"></div>
				                <div class="item"><img class="lazyOwl" data-src="img/fitNJoy foto0.jpg" alt="Lazy Owl Image"></div>
				                <div class="item"><img class="lazyOwl" data-src="img/fitNJoy foto2.jpg" alt="Lazy Owl Image"></div>
				                <div class="item"><img class="lazyOwl" data-src="img/hart.jpg" alt="Lazy Owl Image"></div>
				                <div class="item"><img class="lazyOwl" data-src="img/Liftoff-Sinaasappel.png" alt="Lazy Owl Image"></div>
				                <div class="item"><img class="lazyOwl" data-src="img/H3OPro.png" alt="Lazy Owl Image"></div>
				                <div class="item"><img class="lazyOwl" data-src="img/Ontspannende gezichtsmassage foto.jpg" alt="Lazy Owl Image"></div>
				              </div>
				              </div>

EOT;
				$this->node .= '<script type="text/javascript" src="'.'../resources/owl/owl.carousel.min.js"></script>';
				$this->node .=<<<EOT
				    <script>
				    $(document).ready(function() {

				      $("#owl-demo").owlCarousel({
				        items : 3, //10 items above 1000px browser width
				        itemsDesktop : [1000,3], //5 items between 1000px and 901px
				        itemsDesktopSmall : [900,3], // betweem 900px and 601px
				        itemsTablet: [600,2], //2 items between 600 and 0
				        itemsMobile : [479,2], // itemsMobile disabled - inherit from itemsTablet option

				        lazyLoad : true,
				        navigation : true,
				        itemsScaleUp: true,
				        navigationText: [
				            "<i class='icon-chevron-left icon-white'><</i>",
				            "<i class='icon-chevron-right icon-white'>></i>"
				        ],

				        responsive: true,
				        responsiveRefreshRate : 200,
				        responsiveBaseWidth: window
				      });

				    });
				    </script>
EOT;
				$this->node .= "</div>";
				echo $this->node;
			}
		}

	}
	$o = new Overlay($_GET['id']);
	$o->startup();
?>
