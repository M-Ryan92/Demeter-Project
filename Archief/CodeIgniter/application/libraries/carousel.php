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
		if(count($this->getContent()) > 0){
			echo $this->render();
		}
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

	public function setContent($list)
	{
		$this->content = $list;
	}

	// getters
	public function getContentById($id)
	{
		//TODO add logic to return the right content as array
		 $itemList = array();
                $item1 = <<<EOT
<div class="item active" style="background-image: url('http://localhost/Demeter/Webclient/img/Natuurvoeding%20foto%20liggend.jpg');     background-size: 100% 100%;
height: 250px;">
</div>
EOT;
                $item2 = <<<EOT
<div class="item" style="background-size: 100% 100%;
height: 250px;">
</div>
EOT;
                $item3 = <<<EOT
<div class="item" style="background-image: url('http://localhost/Demeter/Webclient/img/Natuurvoeding%20foto%20liggend.jpg');     background-size: 100% 100%;
height: 250px;">
</div>
EOT;
// <div class="item">
//     <h2>Slide 3</h2>
//     <div >
//         <h3>Third slide label</h3>
//         <p>and some random text</p>
//     </div>
// </div>
			// $item3 = '<div class="item">
			// 				<h2>Slide 3</h2>
			// 				<div >
			// 					<h3>Third slide label</h3>
			// 					<p>and some random text</p>
			// 				</div>
			// 			</div>';
			array_push($itemList, $item1, $item2, $item3);
			$this->setContent($itemList);
	}

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
