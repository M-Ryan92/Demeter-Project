<?php
if($formInfo){
    $fh = new formHelper();
	$colArr = array();
	foreach ($formInfo as $key) {
		$fieldArr = array();
		$fields = explode(';', $key->columnFields);
		$fieldContents = explode(';', $key->fieldcontents);
		for ($i=0; $i < sizeof($fields) ; $i++) { 
			$p = explode(',', $fieldContents[$i]);
			switch ($fields[$i]) {
				case 'TextField':
					array_push($fieldArr, $fh->TextField($p[0],$p[1],$p[2]));
					break;
				case 'EmailField':
					array_push($fieldArr, $fh->EmailField($p[0],$p[1],$p[2]));
					break;
				case 'TextBoxField':
					array_push($fieldArr, $fh->TextBoxField($p[0],$p[1],$p[2],$p[3]));
					break;
			}
		}
		array_push($colArr, $fh->Column($fieldArr));
	}
	$form = new Form();
	$form->baseUrl($js);
	$form->setupForm($formInfo[0]->formTitle, 1, $colArr, $formInfo[0]->formTableName, $title);
}
?>

<div class="col-md-6">
<?php
echo $form->outputFormHTML();
?>
</div>