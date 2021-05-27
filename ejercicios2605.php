<?php

/* Crear un programa que imprima los X numeros random */

/* $x = 12;

for($i=0;$i<$x;$i++){
    echo rand().PHP_EOL;
    } */


/*Crear una función que imprima X valores random en el intervarl 0 - X. Ej: x=10, imprimirá 10 valores random entre 0 y 10. x = 4, imprimirá 4 valores random entre 0 y 4 */


function randomNums($n) {
    for($i=0; $i<=$n; $i++){
      echo rand(0,$n).PHP_EOL;
   }
}
/* randomNums(10);
randomNums(4); */


/*Crear una función que dado un numero imprima solo los valores pares */



function soloNumsPares($n){
    for($i=1;$i<=$n;$i++){
      if($i % 2 == 0){
        echo $i.PHP_EOL;
      }
    }
  }
/* soloNumsPares(10);
soloNumsPares(7); */


/* Repetir el ejercicio 8 pero esta vez imprimir sólo los números impares */

function soloNumsImpares($n){
    for($i=1;$i<=$n;$i++){
      if($i % 2 !== 0){
        echo $i.PHP_EOL;
      }
    }
  }
/* soloNumsImpares(10);
soloNumsImpares(6);
 */



/* Considerando las funciones de antes (pares e impares), crear una función que tenga como limite un numero dado n y como segundo parametro un valor booleano que: si es true imprime los pares y si es false imprime los impares
 */


function showEvenOrOdd($n,$odd){
    for($i=1;$i<=$n;$i++){
        if($i%2==$odd)
            echo $i.PHP_EOL; 
    }
  }

/* showEvenOrOdd(10, true);
showEvenOrOdd(10,false)
 */


/* Crear una función que dado una cartera y un array de productos con (nombre y precio) devuelva un array (misma estructura) con solo los productos que se han podido comprar.  */

/* cartera: 7

Productos disponibles:
pan, 2
papas, 1
cocacola,3
agua, 2

cesta: pan, papas, cocacola
cartera: 1 */


$productos = [

    ["Nombre" => "Pan", "Precio" => 2],
    ["Nombre" => "Papas", "Precio" =>1],
    ["Nombre" => "Coca-Cola", "Precio" =>3],
    ["Nombre" => "Agua", "Precio" =>2]
    

];


function compra($cartera){
    $cartera = []
    foreach ($productos as $product) {
        if ($producto["Precio"] <= $cartera) {
            $carrito[]= $producto
            echo $carrito
        }
    }
}

compra(7);




?>