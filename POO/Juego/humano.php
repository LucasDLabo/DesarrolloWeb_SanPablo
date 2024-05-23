<?php

class Humano {
    // Aca irian los atributos de la clase
    public $salud;
    public $daño;
    public $clase;
    public $pasiva;

    // Aca irian los metodos o acciones de la clase
    public function hit ($salud){
        $this->salud -= $salud;
    }

    public function attack ($daño){
        return $daño;
    }
}