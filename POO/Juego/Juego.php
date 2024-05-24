<?php
require_once 'humano.php';
require_once 'vampiro.php';

$protagonista = new Humano();


$rol = rand(1,2);
if ($rol == 1){
    $protagonista->clase="Tanque";
    $protagonista->salud=300;
    $protagonista->daño=7;
    $protagonista->critic=1.6;
}elseif ($rol == 2){
    $protagonista->clase="Asesino";
    $protagonista->salud=150;
    $protagonista->daño=10;
    $protagonista->critic=2 ;
}else{
    $protagonista->clase="Laburante";
    $protagonista->salud=100;
    $protagonista->daño=10;
    $protagonista->critic=1.25;
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

echo "<br>INICIO<br>";
do {
    echo "-------------------------------------------------------------";
    $enemigo->hit($protagonista->attack());
    if ($enemigo->salud <= 0){
        $enemigo->salud = 0;
        echo " y la vida del 🧛‍♀️ baja a " . $enemigo->salud . " <br> 🌟VICTORIA PARA EL HUMANO";
        break;
    }elseif ($enemigo->salud <=75) {
        $curaRNG = rand(1,10);
        if ($curaRNG == 1){
            echo " y la vida del 🧛‍♀️ baja a " . $enemigo->salud . " <br>";
            $cura = $enemigo->robodevida();
            echo "El 🧛‍♀️ utiliza sus colmillos y se cura $cura puntos! 💖 Su vida sube a $enemigo->salud <br>";
            $protagonista->hit($enemigo->attack($cura));
            echo " La vida  baja a $protagonista->salud 🧔 <br>" ;
            continue;
        }else{
            echo " y la vida del 🧛‍♀️ baja a " . $enemigo->salud . " <br>";
        }
    }
    else{
        echo " y la vida del 🧛‍♀️ baja a " . $enemigo->salud . " <br>";
    }
    
    
    $protagonista->hit($enemigo->attack($enemigo->daño));
    if ($protagonista->salud <= 0){
        echo "Vampiro golpeo:" . $enemigo->attack($enemigo->daño) . "🩸\n";
        $protagonista->salud=0;
        echo "y la vida baja a $protagonista->salud 👤 <br> ❌DERROTA PARA EL HUMANO";
        break;
    }else{
        echo "Vampiro golpeo:" . $enemigo->attack($enemigo->daño). "🩸\n";
        echo "y la vida baja a $protagonista->salud 🧔 <br>";
    }

} while ($protagonista->salud > 0 and $enemigo->salud > 0);


