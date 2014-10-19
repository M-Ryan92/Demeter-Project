<?php
class formHelper {
    
    function Column($fields){
        return new Column($fields);
    }
    function BasicField($fieldName, $fieldPlaceHolder, $columnName){
        return BasicField($fieldName, $fieldPlaceHolder, $columnName);
    }
    function TextField($fieldName, $fieldPlaceHolder, $columnName) {
        return new TextField($fieldName, $fieldPlaceHolder, $columnName);
    }
    function TextBoxField($fieldName, $fieldPlaceHolder, $columnName, $fieldRows){
        return new TextBoxField($fieldName, $fieldPlaceHolder, $columnName, $fieldRows);
    }
    function EmailField($fieldName, $fieldPlaceHolder, $columnName) {
        return new EmailField($fieldName, $fieldPlaceHolder, $columnName);
    }
    function SelectField($fieldName, $fieldPlaceHolder, $columnName, $fieldOptions){
        return new SelectField($fieldName, $fieldPlaceHolder, $columnName, $fieldOptions);
    }
    function SelectOption($selectFieldValue, $selectFieldName, $selected = false){
        return new SelectOption($selectFieldValue, $selectFieldName, $selected);
    }

}

class Column {

    private $fields = array();

    function Column($fields) {
        $this->fields = $fields;
    }

    function outputFieldHTML() {
        $fieldsHTML = "";
        foreach ($this->fields as $field) {
            $fieldsHTML = $fieldsHTML . $field->outputFieldHTML();
        }
        return $fieldsHTML;
    }

}

class BasicField {

    protected $fieldName;
    protected $fieldPlaceholder;
    protected $columnName;

    function BasicField($fieldName, $fieldPlaceHolder, $columnName) {
        $this->fieldName = $fieldName;
        $this->fieldPlaceholder = $fieldPlaceHolder;
        $this->columnName = $columnName;
    }

}

class TextField extends BasicField {

    function TextField($fieldName, $fieldPlaceHolder, $columnName) {
        parent::BasicField($fieldName, $fieldPlaceHolder, $columnName);
    }

    function outputFieldHTML() {
        $data = '
        <div class="form-group">
            <label for="name">'
                . $this->fieldName . '</label>
            <input type="text" class="form-control" name="' . $this->columnName . '" id="name" placeholder="' . $this->fieldPlaceholder . '" required="required" />
        </div>';
        return $data;
    }

}

class TextBoxField extends BasicField {

    private $fieldRows;

    function TextBoxField($fieldName, $fieldPlaceHolder, $columnName, $fieldRows) {
        parent::BasicField($fieldName, $fieldPlaceHolder, $columnName);
        $this->fieldRows = $fieldRows;
    }

    function outputFieldHTML() {
        $data = '<div class="form-group">
                <label for="name">'
                . $this->fieldName . '</label>
                <textarea name="' . $this->columnName . '" id="message" class="form-control" rows="' . $this->fieldRows . '" required="required"
                placeholder="' . $this->fieldPlaceholder . '"></textarea>
                  </div>';
        return $data;
    }

}

class EmailField extends BasicField {

    function EmailField($fieldName, $fieldPlaceHolder, $columnName) {
        parent::BasicField($fieldName, $fieldPlaceHolder, $columnName);
    }

    function outputFieldHTML() {
        $data = '
        <div class="form-group">
            <label for="email">
                ' . $this->fieldName . '</label>
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                </span>
                <input type="email" name="' . $this->columnName . '" class="form-control" id="email" placeholder="' . $this->fieldPlaceholder . '" required="required" /></div>
        </div>';
        return $data;
    }

}

class SelectField extends BasicField {

    private $fieldOptions = array();

    function SelectField($fieldName, $fieldPlaceHolder, $columnName, $fieldOptions) {
        parent::BasicField($fieldName, $fieldPlaceHolder, $columnName);
        $this->fieldOptions = $fieldOptions;
    }

    function outputFieldHTML() {
        $data = '
        <div class="form-group">
            <label for="select">
                    ' . $this->fieldName . '</label>
            <select id="select" name="' . $this->columnName . '" class="form-control" required="required">';
        foreach ($this->fieldOptions as $fieldOption) {
            $data = $data . '<option value="' . $fieldOption->selectFieldValue . '" ' . ($fieldOption->selected = true ? "selected" : "") . '">' .
                    $fieldOption->selectFieldName . '</option>';
        }
        $data = $data . '</select></div>';
        return $data;
    }

}

class SelectOption {

    public $selectFieldValue;
    public $selectFieldName;
    public $selected;

    function SelectOption($selectFieldValue, $selectFieldName, $selected = false) {
        $this->selectFieldValue = $selectFieldValue;
        $this->selectFieldName = $selectFieldName;
        $this->selected = $selected;
    }
}
?>