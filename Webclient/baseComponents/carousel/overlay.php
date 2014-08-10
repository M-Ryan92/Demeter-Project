<?php

	/**
	*
	*/
	include '../../globalsettings.php';
	include 'carousel.php';
	class Overlay extends Carousel
	{
		private $node = "";
		private $itemList;
		function __construct($overlayId, $styleId='myCarousel')
		{
			//get the content based on overlay id
			$this->setStyleId($styleId);
			$this->getContent($overlayId);

		}

		public function getContent($id)
		{
			//TODO add logic to return the right content as array
			 $this->itemList = array();
				$item1 = '<div class="item active">
								<h2>Slide 1</h2>
								<div>
									<h3>First slide label</h3>
									<p>and some random text</p>
								</div>
							</div>';
				$item2 = '<div class="item">
								<h2>Slide 2</h2>
								<div>
									<h3>Second slide label</h3>
									<p>and some random text</p>
								</div>
							</div>';
				$item3 = '<div class="item">
								<h2>Slide 3</h2>
								<div >
									<h3>Third slide label</h3>
									<p>and some random text</p>
								</div>
							</div>';
				array_push($this->itemList, $item1, $item2, $item3);
		}

		public function startup()
		{
			//create carousel
			$this->setAutoPlay(false);
			$this->setCarouselControlls(true);
			$this->setContent($this->itemList);

			$this->node .= "<div id='overlay'>"."</div>";

			$this->node .= "<div id='content'>";
			$this->node .= $this->render();
			$this->node .= "</div>";

			echo $this->node;
		}

	}
	$o = new Overlay($_GET['id']);
	$o->startup();
?>
