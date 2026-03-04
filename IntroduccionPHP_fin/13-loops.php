<?php include 'includes/header.php';

// While

$i = 0; // Inicializador

while ($i < 10) {

    echo $i . "<br>";

    $i++; // Incremento
}

echo "<br>";

// Do While
$i = 100;

do {
    echo $i . "<br>";

    $i++;
} while ($i < 10);



/**
 * 3 imprimir Fizz
 * 5 imprimir Buzz
 * 3 y 5 Imprimir FIZZ BUZZ
 */

echo "<br>";

// For Loop.
// for ($i = 1; $i < 100; $i++) {
//     if ($i % 5 === 0 && $i % 3 === 0) {
//         echo $i . " FIZZBUZZ<br>";
//     } elseif ($i % 3 === 0) {
//         echo $i . " FIZZ<br>";
//     } elseif ($i % 5 === 0) {
//         echo $i . " BUZZ<br>";
//     } else {
//         echo $i . "<br>";
//     }
// }
// endfor;


// For Each
$clientes = array('Pedro', 'Juan', 'Karen');
sort($clientes);

foreach ($clientes as $cliente) {
    echo $cliente . '<br/>';
}

$prueba = [
    ['a', 'b', 'c'],
    ['d', 'e', 'f'],
    ['g', 'h', 'i']
];
foreach ($prueba as $array) {
    foreach ($array as $letra) {
        echo $letra . '<br/>';
    }
}

// foreach ($clientes as $cliente):
//     echo $cliente . '<br/>';
// endforeach;

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'tipo' => 'Premium'
];

foreach ($cliente as $key => $valor):
    echo $key . " - " . $valor . '<br/>';
endforeach;



include 'includes/footer.php';
