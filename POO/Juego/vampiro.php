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
}