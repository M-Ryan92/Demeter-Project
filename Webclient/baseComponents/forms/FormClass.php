<?php

class ContactForm {

    private $formAction;
    private $formMethod;
    private $fields = array();
    private $submitName;
    
    function ContactForm($formAction, $formMethod, $fields,$submitName = "Verstuur") {
        $this->formAction = $formAction;
        $this->formMethod = $formMethod;
        $this->fields = $fields;
        $this->submitName = $submitName;
    }

    function outputFormHTML() {
        //create top Form
        $formHTML = <<<EOT
           <form action="$this->formAction" method="$this->formMethod">
EOT;
        //Create Fields
        foreach ($this->fields as $field){
        $formHTML = $formHTML . $field->outputFieldHTML();
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

class Field {

    private $fieldName;
    private $fieldPlaceholder;

    function Field($fieldName, $fieldPlaceHolder) {
        $this->fieldName = $fieldName;
        $this->fieldPlaceholder = $fieldPlaceHolder;
    }

    function outputFieldHTML() {
        $data = <<<EOT
        <div class="form-group">
            <label for="name">
                $this->fieldName</label>
            <input type="text" class="form-control" id="name" placeholder="$this->fieldPlaceholder" required="required" />
        </div>
EOT;
        return $data;
    }
}
