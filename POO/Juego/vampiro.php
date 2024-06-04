<?php

class Vampiro extends Humano{
    //Atributos
    public $poder;

    //Metodos
    public function hit ($salud){
        $this->salud -= $salud;
    }

    public function attack (){
        return rand(10,20);
    }

    public function robodevida(){
        $cura = rand(20,30);
        $this->salud += $cura;
        return $cura;
    }
}