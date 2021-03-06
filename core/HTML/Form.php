<?php
namespace Core\HTML;

use function PHPSTORM_META\elementType;

/**
 * class Form
 * Permet de générer un formulaire rapidement et simplement
 */
class Form{

    /**
     * @var array Données utilisées par le formulaire
     */
    protected $data;

    /**
     * @var string le tag utilisé pour entourer les champs
     */
    public $surround = 'p';

    /**
     * @param array $data Données utilisées par le formulaire
     */
    public function __construct($data = array()){
        $this->data = $data;
    }

    /**
     * @param string $html Code HTML à entourer
     * @return string 
     */
    protected function surround($html){
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }

    /**
     * @param string $index Index de la valeur à récupérer
     * return string
     */
    protected function getvalue($index){
        if (is_object($this->data)) {
            return $this->data->$index;
        }
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    /**
     * @param string $name
     * @param string $label
     * @param array $options
     * @return string
     */
    public function input($name, $label, $options = []){
        $type = isset($options['type']) ? $options['type'] : 'text';
        return $this->surround(
            '<input type="' . $type . '" name="' . $name . '" value="' . $this->getValue($name) . '">'
        );
    }

    /**
     * @return string
     */
    public function submit(){
        return $this->surround('<button type="submit">Envoyer</button>');
    }
}