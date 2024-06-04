<?php
require_once 'humano.php';
require_once 'vampiro.php';

$protagonista = new Humano();


$rol = rand(1,1);
if ($rol == 1){
    $protagonista->clase="Tanque";
    $protagonista->salud=300;
    $protagonista->daño=7;
    $protagonista->critic=2;
    $protagonista->habilidad="Posibilidad de bloquear daño 🛡️";
}elseif ($rol == 2){
    $protagonista->clase="Asesino";
    $protagonista->salud=150;
    $protagonista->daño=10;
    $protagonista->critic=3 ;
    $protagonista->habilidad="Gran probabilidad de critico";

}else{
    $protagonista->clase="Laburante";
    $protagonista->salud=100;
    $protagonista->daño=10;
    $protagonista->critic=1.25;
    $protagonista->habilidad="No llega a finde mes";

}

echo "Su rol es: $protagonista->clase";

$enemigo = new Vampiro();
    $enemigo->salud=150;

// $golpeHumano = $humano->attack();
// $vampiro->hit($golpeHumano);
// 🧔🧛‍♀️
echo "<br>Estadisticas <br> Salud: $protagonista->salud 🧔 Daño: $protagonista->daño 🔪 <br>";
echo "Critico: x". $protagonista->critic. " <br> Habilidad: " . $protagonista->habilidad ."<br>";

echo "<br>Enemigo <br>Vida : $enemigo->salud 🧛‍♀️ Daño: $enemigo->daño 🩸<br>";

echo "<br>INICIO";
$turno = 0;
do {
    $turno += 1;
    echo "<br><br><b>Turno N#$turno</b>";

    $enemigo->hit($protagonista->attack());

    if ($enemigo->salud <= 0){

        $enemigo->salud = 0;
        echo " acabando con la vida del 🧛‍♀️⚰️<br> <h2>🌟VICTORIA PARA EL HUMANO</h2>";
        break;

    }elseif ($enemigo->salud <=75) {

        $curaRNG = rand(1,7);
        if ($curaRNG == 1){

            echo " y la vida del 🧛‍♀️ baja a " . $enemigo->salud . " <br>";
            $cura = $enemigo->robodevida();
            echo "Turno🧛‍♀️: Utiliza sus colmillos y se cura $cura PUNTOS DE VIDA💖 Su vida sube a $enemigo->salud ";
            $protagonista->hit($enemigo->attack($cura));

            if ($protagonista->salud <= 0){
                $protagonista->salud = 0;
                echo "y la vida del humano baja a $protagonista->salud 👤 <br> <h2>❌DERROTA PARA EL HUMANO</h2>" ;
            }else{
                echo "y la vida del humano baja a $protagonista->salud 📛🧔" ;
            }
            continue;

        }else{
            echo ". La vida del 🧛‍♀️ baja a " . $enemigo->salud . " <br>";
        }
    }
    else{
        echo ". La vida del 🧛‍♀️ baja a " . $enemigo->salud . " <br>";
    }
    switch ($protagonista->clase) {
        case 'Tanque':
            if ($protagonista->special()==1){
                echo "Turno🧛‍♀️: Intenta golpear pero el humano utiliza su escudo 🛡️ y se cubre del daño";
                break;
            }else{
                $dañoEnemigo = $enemigo->attack();

                $protagonista->hit($dañoEnemigo);
                if ($protagonista->salud <= 0){
                    echo "Turno🧛‍♀️: Acierta su golpe final de " . $enemigo->attack($enemigo->daño) . "🩸 DE DAÑO para eliminar a el humano <br> <h2>❌DERROTA PARA EL HUMANO</h2>";
                    break;
                }else{

                    if ($dañoEnemigo < 15){
                        echo "Turno🧛‍♀️: El enemigo se abalanza y conecta una piña de " . $dañoEnemigo . "👊 PUNTOS DE DAÑO. La vida del 🧔 baja a <b>" . $protagonista->salud . "</b>💚";
                    }elseif ($dañoEnemigo >= 15 and $dañoEnemigo < 18){
                        echo "Turno🧛‍♀️: Utilizando sus garras, impacta un arañazo de ". $dañoEnemigo . "🩸​ PUNTOS DE DAÑO haciendo que el 🧔 se desangre y pierda vida hasta llegar a <b>" . $protagonista->salud . "</b> puntos de vida💚";
                    }else{
                        echo "Turno🧛‍♀️: El vampiro logra colocarse en la espalda del humano y realiza un golpe critico de ". $dañoEnemigo . "💢 PUNTOS DE DAÑO haciendo que la vida del 🧔 se reduzca a <b>". $protagonista->salud. "</b>💚";
                    }

                }
                break;
            }
            
        
        case 'Asesino':
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
            break;

        case 'Laburante':
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
            break;
    }

    

    

} while ($protagonista->salud > 0 and $enemigo->salud > 0);


