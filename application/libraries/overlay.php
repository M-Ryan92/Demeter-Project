<?php

class Overlay {

    private $images;
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

    public function startup() {
        $node  = "<div id='overlay' onclick='exitOverlay()'></div>";
        $node .= "<div id='contentOverlay' class='container col-xs-12 col-sm-9 col-md-9'>";
        $node .= "<button type=\"button\" class=\"close\" style=\"margin:5px 5px 0 0;\" onclick='exitOverlay()'>";
		$node .= "<span aria-hidden=\"true\">&times;</span>";
		$node .= "<span class=\"sr-only\">Close</span>";
		$node .= "</button>";
        $node .= "<!-- Owl Carousel Assets -->";
		$node .= "<link href=\"" .$this->baseUrl. "owl/owl.carousel.css\" rel=\"stylesheet\">";
		$node .= "<link href=\"" .$this->baseUrl. "owl/owl.theme.css\" rel=\"stylesheet\">";
        $node .= "<div style='background-color: white; padding: 20px 10px;'>";
 		$node .= "<div id=\"owl-demo\" class=\"owl-carousel\">";
        foreach ($this->images as $img) {
         	$node.= "<div class='item'><img class='lazyOwl' data-src='".$this->baseUrl.'img/'.$img->getImageSrc()."' alt='".$img->getAltImage()."'></div>";
        }
        $node .= '</div></div><script type="text/javascript" src="' .$this->baseUrl. 'owl/owl.carousel.min.js"></script>';
        
        $node .=<<<EOT
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
        $node .= "</div>";
        echo $node;
    }

}