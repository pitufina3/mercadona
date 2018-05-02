<?php
require_once ("Persona.php");

class Cliente extends Persona {
    var $cif;

    function __construct ($nombre,$edad,$cif){
        parent::__construct ($nombre, $edad);
        $this->cif = $cif;
    }

    function getCif (){
        return $this->cif;
    }

    function setId ($cif){
        $this->cif = $cif;
    }

    function mostrar () {
        parent::mostrar();
        echo $this->getCif()." <br>";
    }
}

?>