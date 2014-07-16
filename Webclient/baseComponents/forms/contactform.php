<?php

class ContactForm {
    private $formAction;
    private $formMethod;
    private $field = array();
    private $column;
    
    function ContactForm ($formAction, $formMethod, $field, $column = 1){
        $this->formAction = $formAction;
        $this->formMethod = $formMethod;
        $this->column = $column;
        $this->field = $field;
    }
    
    function outputForm(){
        return "Hello, World!";
    }
}


class Field {
    private $fieldName;
    private $fieldPlaceholder;
    private $fieldType;
            
    function Field ($fieldName, $fieldPlaceHolder, $fieldType) {
        $this->fieldName = $fieldName;
        $this->fieldPlaceholder = $fieldPlaceHolder;
        $this->fieldType = $fieldType;
    }
    
}
