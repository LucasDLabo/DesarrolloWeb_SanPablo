<?php
//Ejercicio 2
// Generar un array de 50 números enteros de forma aleatoria. Utilizar estructuras de control a gusto para recorrer el array creado.
// Determinar si el número 5, se encuentra incluído en los valores del arreglo.
// Mostrar por pantalla el resultado de la operación (encontrado o no encontrado). En caso de que existiera el valor indicar su posición.

// Indagar sobre el uso de la función rand() en la documentación oficial de PHP
// Bonus: buscar en la documentación oficial array_push() y array_search(). Realizar el mismo ejercicio haciendo uso de estas funciones.

//array_push: Inserta uno o más elementos al final de un array
//array_search: Busca un valor determinado en un array y devuelve la primera clave correspondiente en caso de éxito
//array_combine: Crea un array usando los valores del 1er array como keys y los valores del 2do array como valores

$numeros = [];
$numeros_5 = [];
//Manera #1
echo "<h2>Manera #1</h2>";
for ($i = 1 ; $i <=50; $i++) {
    //Genera 50 números aleatorios
    $numeros[$i] = rand(0,10);
    echo ("Posición [$i]: Numero:<b>$numeros[$i]</b> <br>");
    //Condicional
    if ($numeros[$i] == 5){
        echo "<b>¡Encontrado, número 5!<br> Posicion: $i<br><br></b>";
    }else{
        echo "No es un 5 <br><br>";
    }
    //$search guarda la posición del primer 5 que encuentra
    $search = array_search(5, $numeros);
    //Si $search encuentra un 5, guarda el valor (numero_5) y su posición(posicion_5).
    //En esa posición que encontro el 5, lo cambia por un string para que el array_search, no encuentre el mismo 5.
    if($search != NULL){
        $numeros_5[] = $numeros[$search];
        $posicion_5[] = $search;
        $numeros[$search] = "Encontrado";
    }
} 

//Manera #2
echo "<h2>Manera #2</h2>";
//Con array_push, se coloca dentro y al final de el array $numeros, el array $numeros_5 
array_push($numeros, $numeros_5);
//Si se encuentran valores dentro del array $numeros_5...
if ($numeros_5 != null){
    echo "Con array_push se encontro el número: <br>"; 
    //Combina la posicion de los numeros 5 (posicion_5 => $pos) con los valores de $numeros_5 (=> $value)
    //Muestra el valor y la posición de todos los 5 que salieron dentro de los 50 números.
    foreach(array_combine($posicion_5, $numeros_5) as $pos => $value){
        echo "$value en la posición [$pos]<br>";
    }
}

?>