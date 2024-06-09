<?php
require_once 'humano.php';
require_once 'vampiro.php';

$protagonista = new Humano();


$rol = rand(1,2);
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
    $protagonista->habilidad="Posibilidad de golpear 2 veces 🤺";

}else{
    $protagonista->clase="Laburante";
    $protagonista->salud=100;
    $protagonista->daño=10;
    $protagonista->critic=1.25;
    $protagonista->habilidad="No llega a finde mes";

}
$enemigo = new Vampiro();
    $enemigo->salud=150;
echo "<h2>Bienvenido a PHP Vampires</h2>";
echo "Su rol elegido es <b>$protagonista->clase</b> y tu habilidad es: <b>  $protagonista->habilidad </b> 
    <br> Tus estadististicas son:<b>
    <br>Salud: $protagonista->salud 💚 
    <br>Daño: $protagonista->daño 🔪 
    <br>Daño Critico: x$protagonista->critic 💥<br></b>";


echo "<br>Las estadististicas del enemigo son:<b>
    <br>Vida : $enemigo->salud 🧛‍♀️ 
    <br>Daño: Variable entre 10 y 20 🩸
    <br>Habilidad: Posibilidad de curarse cuando se encuentra a mitad de su vida💖</b><br>";

echo "<br>INICIO";
$turno = 0;
do {
    $turno += 1;
    echo "<br><br><b>Turno N#$turno</b>";

    $enemigo->hit($protagonista->attack());

    if ($enemigo->salud <= 0){

        $enemigo->salud = 0;
        echo ", liquidando con este ultimo golpe la vida del 🧛‍♀️⚰️<br> <h2>🌟VICTORIA PARA EL HUMANO</h2>";
        break;

    }elseif ($enemigo->salud <=75) {
        $curaRNG = rand(1,7);
        if ($curaRNG == 1){

            echo " y la vida del 🧛‍♀️ baja a " . $enemigo->salud . " <br>";
            $cura = $enemigo->robodevida();
            echo "Turno 🧛‍♀️: Utiliza sus colmillos y se cura $cura PUNTOS DE VIDA💖 Su vida sube a $enemigo->salud ";
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
                echo "Turno 🧛‍♀️: Intenta golpear pero el humano utiliza su escudo 🛡️ y se cubre del daño";
                break;
            }else{
                $dañoEnemigo = $enemigo->attack();
                VampiroGolpeaTanque($protagonista, $enemigo, $dañoEnemigo);
                break;
            }
        
        case 'Asesino':
            if ($protagonista->special()==1){
                echo "<b>El humano se vuelve a preparar para atacar🔁❗... </b>"  ;
                $enemigo->hit($protagonista->attack());
                echo ". La vida del 🧛‍♀️ baja a " . $enemigo->salud . " <br>";
            }else{

            }
            $dañoEnemigo = $enemigo->attack();
            VampiroGolpeaAsesino($protagonista, $dañoEnemigo);
            
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

function VampiroGolpeaTanque($protagonista, $enemigo, $dañoEnemigo){
    $protagonista->hit($dañoEnemigo);
    if ($protagonista->salud <= 0){
        echo "Turno 🧛‍♀️: Acierta su golpe final de " 
            . $enemigo->attack($enemigo->daño) .
            "🩸 DE DAÑO para eliminar a el humano <br> 
            <h2>❌DERROTA PARA EL HUMANO</h2>";

    }else{
        if ($dañoEnemigo < 15){

            echo "Turno 🧛‍♀️: El enemigo se abalanza y conecta una piña de " 
                . $dañoEnemigo . 
                "👊 PUNTOS DE DAÑO. La vida del 🧔 baja a <b>" 
                . $protagonista->salud . 
                "</b>💚";

        }elseif ($dañoEnemigo >= 15 and $dañoEnemigo < 18){

            echo "Turno 🧛‍♀️: Utilizando sus garras, impacta un arañazo de "
                . $dañoEnemigo .
                "🩸​ PUNTOS DE DAÑO haciendo que el 🧔 se desangre y pierda vida hasta llegar a <b>" 
                . $protagonista->salud .
                "</b> puntos de vida💚";

        }else{
            echo "Turno 🧛‍♀️: El vampiro logra colocarse en la espalda del humano y realiza un golpe critico de "
                . $dañoEnemigo . 
                "💢 PUNTOS DE DAÑO haciendo que la vida del 🧔 se reduzca a <b>"
                . $protagonista->salud . 
                "</b>💚";
        }
    }
}
function VampiroGolpeaAsesino($protagonista, $dañoEnemigo){
    if($dañoEnemigo >= $protagonista->salud){
        echo "Turno 🧛‍♀️: El humano con sus ultimos " . $protagonista->salud. "💚 PUNTOS DE VIDA, es dañado efectivamente con " 
            . $dañoEnemigo .
            "🩸 DE DAÑO para terminar con su vida y hacer vencedor al 🧛‍♀️. <br> 
            <h2>❌DERROTA PARA EL HUMANO</h2>";
            exit;
    }
    $protagonista->hit($dañoEnemigo);
        if ($dañoEnemigo < 15){

            echo "Turno 🧛‍♀️: El vampiro se acerca al humano para impactar una patada que inflige " 
                . $dañoEnemigo . 
                "🦶 PUNTOS DE DAÑO. La vida del 🧔 baja a <b>" 
                . $protagonista->salud . 
                "</b>💚";

        }elseif ($dañoEnemigo >= 15 and $dañoEnemigo < 18){

            echo "Turno 🧛‍♀️: Utilizando sus poderes psiquicos, arroja piedras hacia el humano, las cuales hacen "
                . $dañoEnemigo .
                "🩸​ PUNTOS DE DAÑO. La vida del 🧔 baja a <b>" 
                . $protagonista->salud .
                "</b>💚";

        }else{
            echo "Turno 🧛‍♀️: El vampiro alza un arma del suelo, golpeando al humano y realizando un golpe critico de "
                . $dañoEnemigo . 
                "💢 PUNTOS DE DAÑO haciendo que el 🧔 pierda vida y se reduzca hasta <b>"
                . $protagonista->salud . 
                "</b>💚";
        }
    }

?>