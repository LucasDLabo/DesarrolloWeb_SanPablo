<?php
require_once 'humano.php';
require_once 'vampiro.php';

$protagonista = new Humano();

$rol = rand(1,4);
if ($rol == 1){
    $protagonista->clase="Tanque";
    $protagonista->salud=325;
    $protagonista->daño=7;
    $protagonista->critic=2;
    $protagonista->habilidad="Posibilidad de bloquear daño 🛡️";
    $protagonista->icono="🧔";
}elseif ($rol == 2){
    $protagonista->clase="Asesino";
    $protagonista->salud=150;
    $protagonista->daño=10;
    $protagonista->critic=3 ;
    $protagonista->habilidad="Posibilidad de golpear 2 veces 🤺";
    $protagonista->icono="🐱‍👤";

}elseif ($rol == 3){
    $protagonista->clase="Laburante";
    $protagonista->salud=100;
    $protagonista->daño=10;
    $protagonista->critic=1.25;
    $protagonista->habilidad="Levantarse todos los dias a las 6 AM 😴";
    $protagonista->icono="👷";

}else{
    $protagonista->clase="Mago";
    $protagonista->salud=200;
    $protagonista->daño=9;
    $protagonista->critic=2;
    $protagonista->habilidad="Posibilidad de activar una habilidad secreta cuando tenga la mitad de su vida🌌";
    $protagonista->activacionDeHabilidad = false;
    $protagonista->icono="🧙‍♂️";
}
$enemigo = new Vampiro();
    $enemigo->salud=150;

echo "<h2>🦇Bienvenido a PHP Vampires 🦇</h2>";

echo "Su rol elegido es <b>$protagonista->clase $protagonista->icono </b> y tu habilidad es: <b>  $protagonista->habilidad </b> 
    <br> Tus estadístisticas son:<b>
    <br>Salud: $protagonista->salud 💚 
    <br>Daño: $protagonista->daño" ; switch ($protagonista->clase) {case 'Tanque': echo "🪓"; break; case 'Asesino': echo "🔪"; break; case 'Laburante': echo "✅"; break; case 'Mago': echo "🔮"; break;
    }
    echo "<br>Daño crítico: x$protagonista->critic 💥<br></b>";


echo "<br>Las estadístisticas del enemigo son:<b>
    <br>Vida : $enemigo->salud 🧛‍♀️ 
    <br>Daño: Variable entre 10 y 20 🩸
    <br>Habilidad: Posibilidad de curarse cuando se encuentra a mitad de su vida💖</b><br>";

echo "<br>INICIO";

$turno = 0;
$mitadDeVida = ($protagonista->salud / 2);

do {

    $turno += 1;
    echo "<br><br><b>Turno N#$turno</b>";

    $enemigo->hit($protagonista->attack());

    if ($enemigo->salud <= 0){

        $enemigo->salud = 0;
        echo ", liquidando con este ultimo golpe la vida del 🧛‍♀️⚰️<br> <h2>🌟VICTORIA PARA EL HUMANO</h2>";
        exit;

    }elseif ($enemigo->salud <=75) {

        $curaRNG = rand(1,7);

        if ($curaRNG == 1){

            echo " y la vida del 🧛‍♀️ baja a $enemigo->salud <br>";

            $cura = $enemigo->robodevida();
            echo "Turno 🧛‍♀️: Utiliza sus colmillos y se cura $cura PUNTOS DE VIDA💖 Su vida sube a $enemigo->salud ";

            $protagonista->hit($enemigo->attack($cura));

            if ($protagonista->salud <= 0){

                $protagonista->salud = 0;
                echo "y mata al humano con esta habilidad $protagonista->salud 👤 <br> <h2>❌DERROTA PARA EL HUMANO</h2>";

            }else{

                echo "y la vida del humano baja a $protagonista->salud 📛🧔" ;

            }
            continue;
        }
    }

    echo ". La vida del 🧛‍♀️ baja a " . $enemigo->salud . " <br>";
    
    switch ($protagonista->clase) {

        case 'Tanque':

            if ($protagonista->special()==1){
                echo "Turno 🧛‍♀️: Intenta golpear pero el humano utiliza su escudo 🛡️ y se cubre del daño";
                break;

            }else{
                $dañoEnemigo = $enemigo->attack();
                VampiroGolpea($protagonista, $enemigo, $dañoEnemigo,);
                break;
            }
        
        case 'Asesino':

            if ($protagonista->special()==1){
                echo "<b>🤺El humano se vuelve a preparar para atacar🔁❗... </b>"  ;
                $enemigo->hit($protagonista->attack());
                echo ". La vida del 🧛‍♀️ baja a " . $enemigo->salud . " <br>";
            }

            $dañoEnemigo = $enemigo->attack();
            VampiroGolpea($protagonista, $enemigo, $dañoEnemigo);
            
            break;

        case 'Laburante':

            $dañoEnemigo = $enemigo->attack();
            VampiroGolpea($protagonista,$enemigo, $dañoEnemigo);           
            break;

        case 'Mago':
            
            if ($protagonista->special()==1 and $protagonista->salud <= $mitadDeVida and $protagonista->activacionDeHabilidad == false ){
                $protagonista->activacionDeHabilidad = true;
                echo "🌌El mago comienza a leer su libro para conjurar su hechizo, destellos salen y  ";
                $magoRNG = rand(1,3);
                    if ($magoRNG == 1) {
                        $curacion = round($protagonista->salud / 2);
                        $protagonista->salud += $curacion;
                        echo "una energía regenerativa le cura la mitad de su vida💓($curacion puntos). La vida sube a <b>". $protagonista->salud ."</b>💚 <br>";

                    }elseif ($magoRNG == 2){
                        $protagonista->daño = $protagonista->daño * 2;
                        echo "se envuelve en un umbral de poder el cual potencia su daño el doble! 📈<br>";

                    }else{
                        echo " una ráfaga de hielo penetra en el enemigo, lo cual lo deja paralizado! 💫🧊";

                        $turno += 1;
                        echo "<br><br><b>Turno N#$turno</b>";
                        $enemigo->hit($protagonista->attack());
                        if ($enemigo->salud <= 0){
                            echo ", liquidando con este último golpe la vida del 🧛‍♀️⚰️<br> <h2>🌟VICTORIA PARA EL HUMANO</h2>";
                            break;

                        }else{
                            echo ". La vida del 🧛‍♀️ baja a " . $enemigo->salud . " <br>";
                        }
                        
                        echo "Turno 🧛‍♀️: El enemigo aún se encuentra congelado 💫🧊";
                    }
            }else{
                $dañoEnemigo = $enemigo->attack();
                VampiroGolpea($protagonista, $enemigo,$dañoEnemigo);
                break;

            }

            
    }

} while ($protagonista->salud > 0 and $enemigo->salud > 0);

function VampiroGolpea($protagonista, $enemigo, $dañoEnemigo){

    switch ($protagonista->clase) {

        case 'Tanque':

            $protagonista->hit($dañoEnemigo);

            if ($protagonista->salud <= 0){
                echo "Turno 🧛‍♀️: Acierta su golpe final de " 
                    . $enemigo->attack($enemigo->daño) . "🩸 DE DAÑO para eliminar a el humano <br> 
                    <h2>❌DERROTA PARA EL HUMANO</h2>";
        
            }else{
                if ($dañoEnemigo < 15){
        
                    echo "Turno 🧛‍♀️: El enemigo se abalanza y conecta una piña de " 
                        . $dañoEnemigo . "👊 PUNTOS DE DAÑO. 
                        La vida del ". $protagonista->icono ." baja a <b>" . $protagonista->salud . 
                        "</b>💚";
        
                }elseif ($dañoEnemigo >= 15 and $dañoEnemigo < 18){
        
                    echo "Turno 🧛‍♀️: Utilizando sus garras, impacta un arañazo de "
                        . $dañoEnemigo . "🩸​ PUNTOS DE DAÑO haciendo que el ". $protagonista->icono ." se desangre y 
                        pierda vida hasta llegar a <b>" . $protagonista->salud . "</b> puntos de vida💚";
        
                }else{
                    echo "Turno 🧛‍♀️: El vampiro logra colocarse en la espalda del humano y realiza un golpe crítico de "
                        . $dañoEnemigo . "💢 PUNTOS DE DAÑO haciendo que la vida del ". $protagonista->icono ." 
                        se reduzca a <b>" . $protagonista->salud . 
                        "</b>💚";
                }
            }

            break;
        
        case 'Asesino':

            if($dañoEnemigo >= $protagonista->salud){
                echo "Turno 🧛‍♀️: El humano con sus ultimos " . $protagonista->salud. "💚 PUNTOS DE VIDA, 
                    es dañado efectivamente con " . $dañoEnemigo . "🩸 DE DAÑO para terminar con su vida y hacer vencedor al 🧛‍♀️. <br> 
                    <h2>❌DERROTA PARA EL HUMANO</h2>";

                    exit;
            }

            $protagonista->hit($dañoEnemigo);

                if ($dañoEnemigo < 15){
        
                    echo "Turno 🧛‍♀️: El vampiro se acerca al humano para impactar una patada que inflige " 
                        . $dañoEnemigo . "🦶 PUNTOS DE DAÑO. 
                        La vida del ". $protagonista->icono ." baja a <b>" . $protagonista->salud . 
                        "</b>💚";
        
                }elseif ($dañoEnemigo >= 15 and $dañoEnemigo < 18){
        
                    echo "Turno 🧛‍♀️: Utilizando sus poderes psiquicos, arroja piedras hacia el humano, las cuales hacen "
                        . $dañoEnemigo . "🩸​ PUNTOS DE DAÑO. 
                        La vida del ". $protagonista->icono ." baja a <b>" . $protagonista->salud .
                        "</b>💚";
        
                }else{
                    echo "Turno 🧛‍♀️: El vampiro alza un arma del suelo, golpeando al humano y realizando un golpe crítico de "
                        . $dañoEnemigo . "💢 PUNTOS DE DAÑO haciendo que el ". $protagonista->icono ." pierda vida y se reduzca hasta <b>"
                        . $protagonista->salud . 
                        "</b>💚";
                }
            break;
        
        case 'Laburante':
            
            $protagonista->hit($dañoEnemigo);

            if ($protagonista->salud <= 0){
                echo "Turno 🧛‍♀️: Estando el humano debilitado, el vampiro inflige su ultimo golpe de " . $dañoEnemigo . "🩸PUNTOS DE DAÑO,";
                echo " derrotando a nuestro pobre laburante 👤 <br> <h2>❌DERROTA PARA EL HUMANO</h2>";

            }elseif ($dañoEnemigo < 15){

                echo "Turno 🧛‍♀️: El vampiro abofetea al humano, realizandole " 
                    . $dañoEnemigo . "🖐 PUNTOS DE DAÑO. 
                    La vida del 🧔 baja a <b>" . $protagonista->salud . 
                    "</b>💚";

            }elseif ($dañoEnemigo >= 15 and $dañoEnemigo < 18){

                echo "Turno 🧛‍♀️: Utilizando su inmenso poder, el enemigo pellizca al humano infligiendole "
                    . $dañoEnemigo . "🩸​ PUNTOS DE DAÑO. 
                    La vida del 🧔 baja a <b>" . $protagonista->salud .
                    "</b>💚";

            }else{
                echo "Turno 🧛‍♀️: El vampiro le muestra impuestos sin pagar y hace que el laburante se deprima. Golpe crítico de "
                    . $dañoEnemigo . "💢 PUNTOS DE DAÑO haciendo que el ". $protagonista->icono ." pierda vida y se reduzca hasta <b>"
                    . $protagonista->salud . 
                    "</b>💚";
            }
            break;

        case 'Mago':
            
            $protagonista->hit($dañoEnemigo);

            if ($protagonista->salud <= 0){
                echo "Turno 🧛‍♀️: El vampiro inflige " . $dañoEnemigo . "🩸PUNTOS DE DAÑO para rematar con un golpe final al mago.";
                echo "👤 <br> <h2>❌DERROTA PARA EL HUMANO</h2>";

            }elseif ($dañoEnemigo < 15){

                echo "Turno 🧛‍♀️: El vampiro golpea al mago con sus alas haciendole " 
                    . $dañoEnemigo . "💥 PUNTOS DE DAÑO. 
                    La vida del ". $protagonista->icono ." baja a <b>" . $protagonista->salud . 
                    "</b>💚";

            }elseif ($dañoEnemigo >= 15 and $dañoEnemigo < 18){

                echo "Turno 🧛‍♀️: Desata un ataque de murcielagos enfurecidos que muerden al mago, realizandole "
                    . $dañoEnemigo . "🦇​ PUNTOS DE DAÑO. 
                    La vida del ". $protagonista->icono ." baja a <b>" . $protagonista->salud .
                    "</b>💚";

            }else{
                echo "Turno 🧛‍♀️: El vampiro utiliza sus poderes para utilizar los rayos del mago, haciendo que infliga un golpe crítico de "
                    . $dañoEnemigo . "💢 PUNTOS DE DAÑO haciendo que el ". $protagonista->icono ." pierda vida y se reduzca hasta <b>"
                    . $protagonista->salud . 
                    "</b>💚";
            }
            break;
    }
}
?>
