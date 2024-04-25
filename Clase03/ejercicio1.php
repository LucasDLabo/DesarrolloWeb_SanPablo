<?php
// Escribe un programa que muestre por pantalla los números de 1 a 100 
//(ambos incluidos y con un salto de línea entre cada impresión), sustituyendo lo siguiente:
//- Multiplos de 3 por la palabra "fizz"
//- Multiplos de 5 por la palabra "buzz"
//- Multiplos de 3 y de 5 a la vez por la palabra "fizzbuzz"

for ($i=1; $i<=100;$i++){
    echo fizbuz($i);
}
function fizbuz($valor){
    if ($valor % 5 == 0 and $valor % 3 == 0){
        echo "<br>fizzbuzz";
    }elseif ($valor % 5 == 0){
        echo "<br>buzz";
    }elseif($valor % 3 == 0){
        echo "<br>fizz";
    }else{
        echo "<br>$valor";
    }
}

// for ($i=1; $i<=100;$i++){
//     if($i % 5 == 0 and $i % 3 == 0){
//         echo fizzbuzz($i);
//     }elseif($i % 5 == 0){
//         echo buzz($i);
//     }elseif($i % 3 ==0){
//         echo fizz($i);
//     }else{
//         echo "<br>Número: $i ";
//     }
// }
// function fizzbuzz ($valor){
//     return "<br><b>Fizzbuzz </b>";
// }
// function buzz ($valor){
//     return "<br><b>Buzz </b>";
// }
// function fizz ($valor){
//     return "<br><b>Fizz </b>";
// }