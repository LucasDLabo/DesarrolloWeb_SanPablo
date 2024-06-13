<?php

class Humano {
    // Aca irian los atributos de la clase
    public $salud;
    public $daño;
    public $clase;
    public $critic;
    public $critic_chance;
    public $habilidad;
    public $activacionDeHabilidad;
    public $icono;

    // Aca irian los metodos o acciones de la clase
    public function hit ($salud){
        $this->salud -= $salud;
    }

    public function attack (){

        switch ($this->clase) {

            case 'Tanque':
                $critic_chance = rand(1,10);

                if ($critic_chance == 1){
                    echo "<br>Turno 🧔: El humano toma el hacha con sus 2 manos e impacta al vampiro, realizando un GOLPE CRITICO💥 de <b>" 
                        . $this->daño*2 . 
                        "</b> 🪓PUNTOS DE DAÑO ❗❗";
                    return $this->daño*2;
                }else{
                    echo "<br>Turno 🧔: El humano balancea su hacha e impacta, infligiendo <b>" 
                        . $this->daño .
                        "</b> 🪓PUNTOS DE DAÑO" ;
                    return $this->daño;
                }
                break;
            
            case 'Asesino':
                $critic_chance = rand(1,5);

                if ($critic_chance == 1){
                    echo "<br>Turno 🧔: El humano consigue consigue acercarse y apuñala el punto vital del vampiro, dañandolo de gravedad con <b>" 
                        . $this->daño*3 . 
                        "💥🔪PUNTOS DE DAÑO</b>";
                    return $this->daño*3;
                }else{
                    echo "<br>Turno 🧔: El humano hace un corte fugaz con su daga, hiriendo al vampiro con <b>" 
                        . $this->daño . 
                        "  🔪PUNTOS DE DAÑO</b> " ;
                    return $this->daño;
                }
                break;
            
            case 'Laburante':
                $critic_chance = rand(1,10);
            
                if ($critic_chance == 1){
                    echo "<br>Turno 🧔: Increible! El humano realizó un golpe critico y ni sabemos como! <b>" . $this->daño*1.5 . "💥PUNTOS DE DAÑO</b>";
                    return $this->daño*1.5;
                }else{
                    echo "<br>Turno 🧔: El laburante le tira con su mochila haciendole <b>" . $this->daño . "✅PUNTOS DE DAÑO</b> " ;
                    return $this->daño;
                }
                break;

            case 'Mago':
                $critic_chance = rand(1,10);
            
                if ($critic_chance == 1){
                    echo "<br>Turno 🧔: Utilizando sus antiguos poderes, el mago desata una cadena de rayos que realizan un golpe critico de <b>" . $this->daño*2 . "💥PUNTOS DE DAÑO</b>";
                    return $this->daño*2;
                }else{
                    echo "<br>Turno 🧔: Lanza una bola de fuego con su bastón que inflige <b>" . $this->daño . "🔮PUNTOS DE DAÑO</b> " ;
                    return $this->daño;
                }

                break;
        }
    }

    public function special(){
        if ($this->clase == "Tanque"){
            return rand(1,6);
        }elseif ($this->clase == "Asesino"){
            return rand(1,10);
        }elseif ($this->clase == "Mago"){
            return rand(1,3) ;
        }
    }


}