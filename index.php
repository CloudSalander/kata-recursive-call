<?php 

function countDown(int $n): void {
    if($n == 0) echo $n;
    else {
        echo $n.",";
        echo countDown($n-1);
    }
}

function getFactorial(int $n): mixed {
    if($n == 0 || $n == 1) return 1;
    else return $n*getFactorial($n-1);
}

function printFibonacciSerie($n): ?int {
    if($n == 0) {
        echo 0;
        return 0;
    }
    else if($n == 1) {
        echo 1;
        return 1;
    }
    else {
        $n = printFibonacciSerie($n-1) + printFibonacciSerie($n-2);
        echo $n;
        return $n;
    }
} 
/*
$n = readline("Cuenta atrás desde...");
countDown(intval($n));
echo PHP_EOL;
//TO-DO: Interesante que tenga que poner el tipo a mixed.
$n = readline("Dime de qué número quieres calcular el factorial?");
echo "El factorial de {$n} es ".getFactorial(intval($n)).PHP_EOL;
*/
$n = readline("Serie de Fibonacci hasta...");
printFibonacciSerie(intval($n));
echo PHP_EOL;
?>