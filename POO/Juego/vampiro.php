<?php

class Vampiro extends Humano{
    //Atributos
    public $poder;

    //Metodos
    public function hit ($salud){
        $this->salud -= $salud;
    }

    public function attack (){
        return $this->daño;
    }

    public function robodevida(){
        $cura = rand(20,30);
        $this->salud += $cura;
        return $cura;
    }
}