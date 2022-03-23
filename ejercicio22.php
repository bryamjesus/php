<?php
     echo '<h1>Arreglos asociativos</h1>';
     $frutas = array('f'=>'fresa','m'=>'manzana','p'=>'pera');
     print_r($frutas);
     echo '<br>'.$frutas["m"]; #para acceder usamos las letras que hemos puesto

     foreach($frutas as $indice=>&$valor){
          // echo '<br>'.$indice;
          // echo '<br>'.$frutas[$indice];
          echo '<br>El valor '.$valor." tiene el indice: ".$indice; # $valor == $frutas[$indice] 
     }
?>