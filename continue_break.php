<?php

$marcas= ["Nike", "Puma", "Adidas", "Converse", "Vans"];

foreach($marcas as $tienda){
    echo $tienda, "<br>";
    if ($tienda=="Adidas"){
        break;
    }        
}

echo "--------------------------<br>";

$numero=1;

while($numero<=20){
    echo $numero,"<br>";
    $numero++;
     if($numero==12){
        break;
    }
}


echo "--------------------------<br>";

for($i=1; $i<=15;$i++){
    if($i==6){
        continue;
    }
    echo $i,"<br>";
}