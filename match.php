<?php

$a=3;
$b=5;
$c=3;
$d=6;

$resultado = match($a){
    $b => "B vale lo mismo que a",
    $c => "C vale lo mismo que a",
    $d => "D vale lo mismo que a",
    default => "No coincide con ninguna variable"
};

echo $resultado;