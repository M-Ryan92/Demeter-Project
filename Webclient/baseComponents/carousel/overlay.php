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
				$this->setAutoPlay(false);
				$this->setCarouselControlls(true);

				$this->node .= "<div id='overlay' onclick='overlayToggleExit()'>"."</div>";
				$this->node .= "<div id='contentOverlay'>";
				$this->node .= $this->render();
				$this->node .= "</div>";

				echo $this->node;
			}
		}

	}
	$o = new Overlay($_GET['id']);
	$o->startup();
?>
