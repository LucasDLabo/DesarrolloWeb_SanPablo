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


$numeros = [];
//Manera #1
echo "<h2>Manera #1</h2>";
for ($i = 1 ; $i <=50; $i++) {
    break;
    $numeros[$i] = rand(0,10);
    if ($numeros[$i] == 5){
        echo "Se encontro el numero 5 en la posición [$i] <br>";
    }else{
        echo "Nop, número $numeros[$i] en la posición [$i] <br>";
    }
} 

$pushes = 0;
//Manera #2
echo "<h2>Manera #2</h2>";

echo "<br><h2>SALTO<h2><br>";
$numeros_5 = [];
for ($i = 1; $i <=10; $i++){
    $numeros[$i] = rand(0,10);
    $search = array_search(5, $numeros);
    echo "Search antes del loop: $search";
    if($search != NULL){
        $numeros_5[] = $numeros[$i];
        $numeros[$i] = "Encontrado";
        echo "<br>Search si es SI: $search";
    }else{
        echo "<br>Search si es NO: $search";
    }
    echo ("Posición [$i]: $numeros[$i] <br>");
    
}

array_push($numeros, $numeros_5);
var_dump($numeros);


?>