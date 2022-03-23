<?php
echo '<h1>Arreglos de índice numérico</h1>';
     $frutas = array('manzana','pera','mandarina','platano');

     print_r($frutas);
     echo '<br>'.$frutas[1];
    //print_r($frutas[0][5]);//manzana => [m,a,n,z,a,n,a]

    for($indice = 0; $indice<count($frutas);$indice++){
        echo '<br>'.$frutas[$indice];
    }
?>