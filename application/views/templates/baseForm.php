<?php
	$col;
	if($form != 0){
		echo '<div class=\''.$formSize.'\'>';
		echo '<h3>'.$formTitle.'</h3>';
		echo "<script type=\"text/javascript\" src=\"".$js."StandardFormSubmit.js\"></script>";
		echo '<div style="display:none;margin-bottom: 10px;width: 100%" id="formresponse" class="btn text-center active"></div>';
		echo '<form accept-charset="UTF-8" id="form">';
		echo form_hidden(array('page'=>$pageTitle));
		foreach ($formInfo as $key) {
		 	$p = explode(',', $key->fieldcontents);
		 	$r = ($key->required==0) ? 'false':'true';
			
			if(!isset($col)) {
				$col = $key->formColumn;
				echo '<div class="'.$key->size.'">';
			}elseif($col != $key->formColumn){
				echo '</div>';
				echo '<div class="'.$key->size.'">';
			}

	 		switch ($key->columnFields) {
				case 'TextField':
					echo '<div class="form-group">'. form_label($p[0], $p[2]) ;
					echo form_input(array('type'=> 'text','required'=> $r,'class'=> 'form-control','name' => $p[2], 'id' => $p[2], 'placeholder'=> $p[1]));
					echo '</div>';
					break;
				case 'EmailField':
					echo '<div class="form-group">'. form_label($p[0], $p[2]) ;
					echo form_input(array('type'=> 'email','required'=> $r,'class'=> 'form-control','name' => $p[2], 'id' => $p[2], 'placeholder'=> $p[1]));
					echo '</div>';
					break;
				case 'TextBoxField':
					echo '<div class="form-group">'. form_label($p[0], $p[2]) ;
					echo form_textarea(array('rows'=> $p[3],'required'=> $r,'class'=> 'form-control','name' => $p[2], 'id' => $p[2], 'placeholder'=> $p[1]));
					echo '</div>';
					break;
				case 'SelectBoxField':
					echo '<div class="form-group">'. form_label($p[0], $p[2]) ;
					$list = explode(',', $key->options);
					$optionlist;
					foreach ($list as $key => $value) {
						$optionlist[$value] = $value;
					}
 					echo form_dropdown($p[2],$optionlist, $list[0],'class=\'form-control\' name=\''.$p[2].'\' id=\''.$p[2].'\' required=\''.$r.'\'');
 					echo '</div>';
 					break;
	 		}
		}
		echo form_button(array('type'=>'submit', 'id'=> 'btnContactUs', 'class' => 'btn btn-success pull-right', 'content' => $submitText));
		echo form_close();
		echo '</div>'.'</div>';
	}
?>