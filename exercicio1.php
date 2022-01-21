<?php
$paises = [
    'Brasil'   => 'Brasilia',
    'EUA'      => 'Washington ',
    'Espanha'  => 'Madrid',
    'Alemanha' => 'Berlin',
    'Uruguai'  => 'Montevideu',
];
arsort($paises,SORT_DESC);
array_walk($paises, function(&$value, $key) {
    $value = "A capital de $key e $value". "<br>";
});
foreach ($paises as $clave => $valor) {
    echo $valor . "<br>";
}
?>