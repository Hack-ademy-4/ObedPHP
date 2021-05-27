<?php



function sum($a, $b){
    return $a + $b;
};
$suma = sum(2, 4);
echo $suma.PHP_EOL;
$suma = sum(5, 43);
echo $suma.PHP_EOL;


function rest($a, $b){
    return $a - $b;
};
$resta = rest(2, 4);
echo $resta.PHP_EOL;
$resta = rest(5, 43);
echo $resta.PHP_EOL;


function mult($a, $b){
    return $a * $b;
};
$multipl = mult(2, 4);
echo $multipl.PHP_EOL;
$multipl = mult(5, 43);
echo $multipl.PHP_EOL;


function div($a, $b){
    return $a % $b;
};
$modulo = div(2, 4);
echo $modulo.PHP_EOL;
$modulo = div(5, 43);
echo $modulo.PHP_EOL;

function expo($a, $b) {
    return $a ** $b;
};
$exponent = expo(2, 4);
echo $exponent.PHP_EOL;
$exponent = expo(5, 43);
echo $exponent.PHP_EOL;


?>