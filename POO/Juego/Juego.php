<?php
require_once 'humano.php';
require_once 'vampiro.php';

$protagonista = new Humano();


$rol = rand(0,2);
if ($rol == 1){
    $protagonista->clase="Tanque";
    $protagonista->salud=300;
    $protagonista->daño=7;
    $protagonista->critic=1.5;
    $protagonista->critic_chance;
}elseif ($rol == 2){
    $protagonista->clase="Asesino";
    $protagonista->salud=150;
    $protagonista->daño=7;
    $protagonista->critic=2 ;
    $protagonista->critic_chance;
}else{
    $protagonista->clase="Laburante";
    $protagonista->salud=100;
    $protagonista->daño=10;
    $protagonista->critic=1.25;
    $protagonista->critic_chance;
}

echo "Su rol es: $protagonista->clase";


$enemigo = new Vampiro();
    $enemigo->salud=150;
    $enemigo->daño=15;

// $golpeHumano = $humano->attack();
// $vampiro->hit($golpeHumano);
// 🧔🧛‍♀️
echo "<br>Estadisticas <br> Salud: $protagonista->salud 🧔 Daño: $protagonista->daño 🔪 <br>";
echo "Critico: x". $protagonista->critic. " <br>";

echo "<br>Enemigo <br>Vida : $enemigo->salud 🧛‍♀️ Daño: $enemigo->daño 🩸<br>";

echo "<br>INICIO";
do {
    $protagonista->hit($enemigo->attack($enemigo->daño));
    echo "<br>🩸 Vampiro golpeo:" . $enemigo->attack($enemigo->daño). "! ";
    echo "Vida: $protagonista->salud 🧔";

    $enemigo->hit($protagonista->critic());
    echo "<br> 🔪 Humano golpeo:" . $protagonista->attack(). "!";
    echo " Vida:" . $enemigo->salud . "🧛‍♀️<br>";

    
} while ($protagonista->salud > 0 and $enemigo->salud > 0);


