<?php

function saludo($nombre){
    echo "Hola mundo, soy ",$nombre, "<br>";
}

saludo("Thomas");

echo "--------------------------<br>";

function saludo1(){
    return "Hola mundo (saludo en variable)";
}

$a=saludo1();
echo $a, "<br>";

echo "--------------------------<br>";

$usuario="Maria";
saludo($usuario);

echo "--------------------------<br>";

saludo($nombre="Catalina");

echo "--------------------------<br>";

function promedio($nota1,$nota2,$nota3){
    $prom=($nota1+$nota2+$nota3)/3;
    return $prom;
}
echo "El promedio es ",promedio(9,10,8);