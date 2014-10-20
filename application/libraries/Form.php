<?php
class Form {
	
	private $submitName;
	private $displayStyle;
	private $page;
	private $colums = array();
	private $js;
	private $FormLocation;
	function Form(){}
	
	function setupForm($submitName = "Verstuur", $displayStyle, $colums, $page = "Geen pagina opgegeven", $FormLocation) {
		$this->submitName = $submitName;
		$this->page = $page;
		$this->FormLocation = $FormLocation;
		switch ($displayStyle) {
			case 1:
				$this->displayStyle = 0;
				break;
			case 2:
				$this->displayStyle = 6;
				break;
			case 3:
				$this->displayStyle = 4;
				break;
			case 4:
				$this->displayStyle = 3;
				break;
			case 6:
				$this->displayStyle = 2;
				break;
			default:
				$this->displayStyle = 0;
				break;
		}
		$this->colums = $colums;
	}
	function baseUrl($i){
		$this->js = $i;
	}
	function outputFormHTML() {
		//create top Form
		$formHTML = "<script type=\"text/javascript\" src=\"".$this->js."StandardFormSubmit.js\"></script>";
		$formHTML .= <<<EOT
<div style="display:none;margin-bottom: 10px;width: 100%" id="formresponse" class="btn text-center active">
</div>
<form accept-charset="UTF-8" id="form">
<input type="hidden" value="$this->page" name="table" />
<input type="hidden" value="$this->FormLocation" name="page" />
EOT;
		//Create colums
		foreach ($this->colums as $colum) {
			$formHTML = $formHTML . '<div class="col-md-' . $this->displayStyle . '">';
			$formHTML = $formHTML . $colum->outputFieldHTML();
			$formHTML = $formHTML . '</div>';
		}
		//Create Send Button;
		$formHTML = $formHTML . "<button";
		$formHTML = $formHTML . <<<EOT
			type="submit" class="btn btn-success pull-right" id="btnContactUs">
				$this->submitName
			</button>
		</form>
EOT;
		return $formHTML;
	}

}