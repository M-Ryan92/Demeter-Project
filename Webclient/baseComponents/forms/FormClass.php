<?php

class Form {

    private $formAction;
    private $formMethod;
    private $submitName;
    private $displayStyle;
    private $colums = array();

    function Form($formAction, $formMethod = "POST", $submitName = "Verstuur", $displayStyle, $colums) {
        $this->formAction = $formAction;
        $this->formMethod = $formMethod;
        $this->submitName = $submitName;
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

    function outputFormHTML() {
        //create top Form
        $formHTML = <<<EOT
<script type="text/javascript" src="baseComponents/forms/StandardFormSubmit.js"></script>
<div style="display:none;margin-bottom: 10px;width: 100%" id="formresponse" class="btn text-center active">
</div>
<form accept-charset="UTF-8" id="form">
EOT;
        //Create colums
        foreach ($this->colums as $colum) {
            $formHTML = $formHTML . '<div class="col-md-' . $this->displayStyle . '">';
            $formHTML = $formHTML . $colum->outputFieldHTML();
            $formHTML = $formHTML . '</div>';
        }
        //Create Send Button;
        $formHTML = $formHTML . <<<EOT
            <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                $this->submitName
            </button>
        </form>     
EOT;
        return $formHTML;
    }

}

class Colum {

    private $fields = array();

    function Colum($fields) {
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

    function EmailFiel($fieldName, $fieldPlaceHolder, $columnName) {
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
