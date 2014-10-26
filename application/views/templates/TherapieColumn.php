<div class="col-md-9">
	<p id="maintext"><b>
		<?php echo $subContent;?>
	</b></p>
	<div id="descriptioncontent" style="display: block;">
		<?php echo $content;
			if($form != 0){
				echo <<<EOT
					<p>Wilt u meer weten of een afspraak maken? <a onclick="contactToggle('#contact', '#description')">Klik dan hier of op de knop contact.</a></p>
EOT;
			}
		?>
	</div>
	<?php
		if($form != 0){
			echo '<div id="contactcontent" style="display: none;">';
			echo '<h3>'.$formTitle.'</h3>';
			echo "<script type=\"text/javascript\" src=\"".$js."StandardFormSubmit.js\"></script>";
			echo '<div style="display:none;margin-bottom: 10px;width: 100%" id="formresponse" class="btn text-center active"></div>';
			echo '<form accept-charset="UTF-8" id="form">';
			echo form_hidden(array('page'=>$pageTitle));

			foreach ($formInfo as $key) {
				$fields = explode(';', $key->columnFields);
				$fieldContents = explode(';', $key->fieldcontents);
				echo '<div class="col-md-6">';
				for ($i=0; $i < sizeof($fields) ; $i++) {
					$p = explode(',', $fieldContents[$i]);
					switch ($fields[$i]) {
							case 'TextField':
								echo '<div class="form-group">'. form_label($p[0], $p[2]) ;
								echo form_input(array('type'=> 'text','required'=> 'true','class'=> 'form-control','name' => $p[2], 'id' => $p[2], 'placeholder'=> $p[1]));
								echo '</div>';
								break;
							case 'EmailField':
								echo '<div class="form-group">'. form_label($p[0], $p[2]) ;
								echo form_input(array('type'=> 'email','required'=> 'true','class'=> 'form-control','name' => $p[2], 'id' => $p[2], 'placeholder'=> $p[1]));
								echo '</div>';
								break;
							case 'TextBoxField':
								echo '<div class="form-group">'. form_label($p[0], $p[2]) ;
								echo form_textarea(array('required'=> 'true','class'=> 'form-control','name' => $p[2], 'id' => $p[2], 'placeholder'=> $p[1]));
								echo '</div>';
								break;
							case 'SelectBoxField':
								echo '<div class="form-group">'. form_label($p[0], $p[2]) ;
								$list = explode(',', $key->options);
								$optionlist;
								foreach ($list as $key => $value) {
									$optionlist[$value] = $value;
								}

								echo form_dropdown($p[2],$optionlist, $list[0],'class=\'form-control\' name=\''.$p[2].'\' id=\''.$p[2].'\' required=\'true\'');
								echo '</div>';
								break;
					}
				}
				echo '</div>';
			}
			echo form_button(array('type'=>'submit', 'id'=> 'btnContactUs', 'class' => 'btn btn-success pull-right', 'content' => $submitText));
			echo form_close();
			echo '</div>';
		}
	?>
</div>