<?php
// Ejercicio 1 
echo "Ejercicio 1 <br>";
    for ($i = 7; $i <=70; $i+=7){
        echo $i;
        echo "<br>";
    }

// Ejercicio 1.2 
//Realiza un programa que pida al usuario un número y muestre por pantalla
//todos los números pares desde 0 hasta ese número utilizando un bucle

$numero = 10;
$i = 0;
echo "<br>Ejercicio 2<br>";
echo "Hasta que número contar: $numero";
while ($i <= $numero):
    $resto = $i % 2;
    $par = ($resto == 0) ? "<br>El número $i es par" : "";
    echo $par;
    $i++;
endwhile;
?>