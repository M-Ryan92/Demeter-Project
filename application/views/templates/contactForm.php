<div class="col-md-6">
<?php
if($formInfo){
	echo "<script type=\"text/javascript\" src=\"".$js."StandardFormSubmit.js\"></script>";	
	echo "<div style=\"display:none;margin-bottom: 10px;width: 100%\" id=\"formresponse\" class=\"btn text-center active\"></div>";
	echo '<form accept-charset="UTF-8" id="form">';
	echo form_hidden(array('page'=>$pageTitle));

	foreach ($formInfo as $key) {
		$fields = explode(';', $key->columnFields);
		$fieldContents = explode(';', $key->fieldcontents);
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
			}
		}

	}

	echo form_button(array('type'=>'submit', 'id'=> 'btnContactUs', 'class' => 'btn btn-success pull-right', 'content' => $formTitle));
	echo form_close();
}
?>
</div>