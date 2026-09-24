<?php

$marcas= ["Nike", "Puma", "Adidas", "Converse", "Vans"];

$platos= [
    "Milanesa"=> 2500,
    "Arroz" => 1500,
    "Pasta" => 2000,
    "Verdura" => 1000
];

foreach($marcas as $tienda){
    echo $tienda, "<br>";
}
echo "<br>";
foreach($platos as $comida  => $valor){
    echo "La/El " ,$comida, " vale $". $valor, "<br>";
}