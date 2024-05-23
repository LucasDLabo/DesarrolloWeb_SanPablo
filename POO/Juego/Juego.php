<?php
require_once 'humano.php';
require_once 'vampiro.php';

$protagonista = new Humano();


$rol = rand(0,2);
if ($rol == 1){
    $protagonista->clase="Tanque";
    $protagonista->salud=300;
    $protagonista->daño=5;
}elseif ($rol == 2){
    $protagonista->clase="Asesino";
    $protagonista->salud=150;
    $protagonista->daño=20;
}else{
    $protagonista->clase="Laburante";
    $protagonista->salud=100;
    $protagonista->daño=10;
}
$poder = rand(20,25);
echo "Su rol es: $protagonista->clase";

$enemigo = new Vampiro();
    $enemigo->salud=150;
    $enemigo->daño=15;

// $golpeHumano = $humano->attack();
// $vampiro->hit($golpeHumano);
echo "<br>Estadisticas <br> Daño: $protagonista->daño Salud: $protagonista->salud <br>";
do {
    $protagonista->hit($enemigo->attack($enemigo->daño));
    if ($protagonista->salud <= 0){
        echo "<br>🩸 Vampiro golpeo:" . $enemigo->attack($enemigo->daño). "!";
        $protagonista->salud=0;
        echo "👤 Vida Humano:" . $protagonista->salud . " ❌DERROTA PARA EL HUMANO";
        break;
    }
    else{
        echo "<br>🩸 Vampiro golpeo:" . $enemigo->attack($enemigo->daño). "! ";
        echo "🧔 Vida Humano:" . $protagonista->salud;
    }

    $enemigo->hit($protagonista->attack($protagonista->daño));
    if ($enemigo->salud <= 0){
        echo "<br> 🔪 Humano golpeo:" . $protagonista->attack($protagonista->daño). "!";
        $enemigo->salud=0;
        echo " 💀 Vida Vampiro:" . $enemigo->salud . " 🌟VICTORIA PARA EL HUMANO";
        break;
    }else{
        echo "<br> 🔪 Humano golpeo:" . $protagonista->attack($protagonista->daño). "!";
        echo " 🧛‍♀️ Vida Vampiro:" . $enemigo->salud . "<br>";
    }
    
} while ($protagonista->salud != 0 and $enemigo->salud != 0);


