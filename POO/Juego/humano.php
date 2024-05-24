<?php

class Humano {
    // Aca irian los atributos de la clase
    public $salud;
    public $daño;
    public $clase;
    public $critic;
    public $critic_chance;

    // Aca irian los metodos o acciones de la clase
    public function hit ($salud){
        $this->salud -= $salud;
    }


    public function attack (){
        if ($this->clase == "Tanque"){
            $critic_chance = rand(1,15);
            if ($critic_chance == 1){
                echo "<br>Humano golpeo: " . $this->daño*1.75 . " 💥";
                return $this->daño*1.75;
            }else{
                echo "<br>Humano golpeo: " . $this->daño . "  🔪 " ;
                return $this->daño;
            }
        }elseif ($this->clase == "Asesino"){
            $critic_chance = rand(1,2);
            if ($critic_chance == 1){
                echo "<br>Humano golpeo: " . $this->daño*2 . " 💥";
                return $this->daño*2;
            }else{
                echo "<br>Humano golpeo: " . $this->daño . "  🔪 " ;
                return $this->daño;
            }
        }else{
            $critic_chance = rand(1,10);
            if ($critic_chance == 1){
                echo "<br>Humano golpeo: " . $this->daño*1.5 . " 💥";
                return $this->daño*1.5;
            }else{
                echo "<br>Humano golpeo: " . $this->daño . "  🔪 " ;
                return $this->daño;
            }
        }
        
    }


    public function criticX (){
        if ($this->clase == "Tanque"){
            return "x0.75";
        }elseif ($this->clase == "Asesino"){
            return "x2";
        }else{
            return "x0.5";
        }
        
    }

}