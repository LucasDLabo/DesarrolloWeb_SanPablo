<?php
//Ejercicio 2
// Generar un array de 50 números enteros de forma aleatoria. Utilizar estructuras de control a gusto para recorrer el array creado.
// Determinar si el número 5, se encuentra incluído en los valores del arreglo.
// Mostrar por pantalla el resultado de la operación (encontrado o no encontrado). 
// En caso de que existiera el valor indicar su posición.

// Indagar sobre el uso de la función rand() en la documentación oficial de PHP
// Bonus: buscar en la documentación oficial array_push() y array_search(). 
// Realizar el mismo ejercicio haciendo uso de estas funciones.

//array_push: Inserta uno o más elementos al final de un array
//array_search: Busca un valor determinado en un array y devuelve la primera clave correspondiente en caso de éxito

//Manera #1
$numeros = [];
for ($i = 1 ; $i <=50; $i++) {
    $numeros[$i] = rand(0,1000);
    if ($numeros[$i] == 5){
        echo "Se encontro el numero 5 en la posición [$i] <br>";
    }else{
        echo "Nop, número $numeros[$i] en la posición [$i] <br>";
    }
    // echo ("Posición[$i]: $numeros[$i] <br>");

} 
// var_dump($numeros)
?>