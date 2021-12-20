<?php
namespace Tutoriel\HTML;
class BootstrapForm extends Form{

    /**
     * @param string $html Code HTML à entourer
     * @return string 
     */
    protected function surround($html){
        return "<div class=\"form-group\">{$html}</div>";
    }

    /**
     * @param string $name
     * @return string
     */
    public function input($name){
        return $this->surround(
            '<label>' . $name . '</label><input type="text" name="' . $name . '" value="' . $this->getValue($name) . '" class="form-control">'
        );
    }


    /**
     * @return string
     */
    public function submit(){
        return '<button type="submit" class="btn btn-primary">Envoyer</button>';
    }

}