<?php
class OwlCarousel {

	private $images = array();
	private $baseUrl = "";
	public function __construct($images = '') {
		$this->images = $images;
	}
	public function addImages($images){
		$this->images = $images;   
	}

	public function setBaseUrl($url){
		$this->baseUrl = $url;
	}

	public function outputSlider() {
		$node = '<!-- Owl Carousel Assets -->';
		$node .= '<link href="'.$this->baseUrl.'/owl/owl.carousel.css" rel="stylesheet">';
		$node .= '<link href="'.$this->baseUrl.'/owl/owl.theme.css" rel="stylesheet">';        
		$node .= '<div id="owl-demo" class="owl-carousel">';

		foreach ($this->images as $image) {
			$node .= '<div class="item"><img class="lazyOwl" data-src="'.$this->baseUrl.'img/'.$image->getImageSrc().'" alt="'.$image->getAltImage().'"></div>';
		}
		$node .= '</div>';
		$node .= '<script type="text/javascript" src="'.$this->baseUrl.'/owl/owl.carousel.min.js"></script>';
		$node .= <<<EOT
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
	  return $node;  
	}  
}