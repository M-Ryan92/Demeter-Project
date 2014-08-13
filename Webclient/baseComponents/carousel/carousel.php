<?php
/**
*
*/
class Carousel
{
	private $state = "block";
	private $styleId;
	private $autoPlay = false;
	private $carouselControlls = false;
	private $itemIndicators = false;
	private $maxAllowed = 3;

	private $content;

	private $node = "";
	function __construct($styleId='myCarousel')
	{
		$this->styleId = $styleId;
	}


	public function render(){
		//checks if content is set
		if(!isset($this->content)){
			$this->state = 'none';
			$this->content = array();
		}

		//set the right script into the node
		if(!$this->autoPlay) {
			$this->node .= '
				<script>
					$(document).ready(function(){
						$(\'.carousel\').carousel({interval: false});
						$(document).on(\'mouseleave\', \'.carousel\', function() {

							$(this).carousel(\'pause\');
						});
					});
				</script>
			';
		} elseif(is_integer($this->autoPlay)) {
			$this->node .= '
				<script>
					$(document).ready(function(){
						$(\'.carousel\').carousel({interval: '.$this->autoPlay.'});
					});
				</script>
			';
		}

		//add the actual carousel into the node
		$this->node .= '<div class=\''.$this->styleId.'\' style=\' display:'. $this->state .'\'>'.
		'<div id=\''.$this->styleId.'\' class="carousel slide col-md-offset-2 col-md-8" data-ride="carousel">';

		//set the carousel indicators if needed
		if($this->itemIndicators){
			$arrayLenght = count($this->content);
			if($arrayLenght <= $this->maxAllowed && $arrayLenght > 0){
				$this->node .= '<ol class="carousel-indicators">';

				if($this->carouselControlls && $this->itemIndicators){
					$itemId = 0;
					foreach ($this->content as $item){
						if($itemId === 0){
							$this->node .= '<li data-target="#'.$itemId.'" data-slide-to="'.$itemId.'" class="active"></li>';
						}else{
						$this->node .= '<li data-target="#'.$itemId.'" data-slide-to="'.$itemId.'"></li>';
						}
						$itemId++;
					}
				}
				$this->node .= '</ol>';
			};
		}

		// Carousel items
		$this->node .= '<div class="carousel-inner text-center">';
		foreach ($this->content as $item){
			$this->node .= $item;
		}
		$this->node .= '</div>';

		// add the Carousel nav controlls if needed
		if($this->carouselControlls){
			$this->node .= '
				<a class="carousel-control left" href="#'.$this->styleId.'" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="carousel-control right" href="#'.$this->styleId.'" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
				';
		}
		//close the carousel node
		$this->node .='</div></div>';
		return $this->node;
	}

	public function startup(){
		echo $this->render();
	}

	// setters
	public function setStyleId($styleId='myCarousel')
	{
		$this->styleId = $styleId;
	}
	public function setAutoPlay($value=true)
	{
		$this->autoPlay = $value;
	}

	public function setCarouselControlls($boolean=true)
	{
		$this->carouselControlls = $boolean;
	}

	public function setItemIndicator($boolean=true)
	{
		if($this->getCarouselControlls){
			$this->itemIndicators = $boolean;
		} else {
			$this->itemIndicators = false;
		}
	}

	public function setContent(array $value)
	{
		$this->content = $value;
	}

	// getters
	public function getStyleId()
	{
		return $this->styleId;
	}

	public function getAutoPlay()
	{
		return $this->autoPlay;
	}

	public function getCarouselControlls($boolean=true)
	{
		return $this->carouselControlls;
	}

	public function getItemIndicators()
	{
		return $this->itemIndicators;
	}

	public function getContent()
	{
		return $this->content;
	}
}
?>
