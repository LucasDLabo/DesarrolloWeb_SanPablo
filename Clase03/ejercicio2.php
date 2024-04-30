<?php

//Ejercicio 2.1
//Crear una función que tenga una varibale local y una variable global. 
//Dentro de la función, asigna un valor a la variable local y luego el valor de la variable globabl. 
//¿Qué valor se imprime?
echo "<h2>Ejercicio 1</h2>";

$variable = "Local";

function variables(){
    global $variable;
    $variable = "Global";
}
variables ();
echo $variable;

//Ejercicio 2.2
//Crea una función que tenga una varibale local y una variable estática.
//Dentro de la función, incrementar el valor de la variable estática y luego imprime el valor de ambas variables.
//Luego, llama a la función varias veces y observa como cambian los valores de las variables
echo "<h2>Ejercicio 2</h2>";

function estatica(){
    $nostatic = 0;
    static $a = 0;
    $a++;
    echo "Estatica: $a No estatica: $nostatic<br>";
}
estatica();
estatica();
estatica();
estatica();

//Ejercicio 2.3
//Crea una función que tenga una variable global y otra local con el mismo nombre.
//Dentro de la función, imprime el valor de ambas variables y luego cambia el valor de la variable local
//Luego, imprime el valor de ambas variable nuevamente. 
//¿Qué valor se imprime?
echo "<h2>Ejercicio 3</h2>";

function ejercicio3(){
    global $global;
    $global = 1;
    echo "Valor= $global <br>";
    $global = 2;
    echo "Nuevo valor= $global";
}
ejercicio3();

