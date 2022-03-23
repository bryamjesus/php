<?php
    echo "<h1>Abriendo un archivo mediante PHP</h1>";
    $archivo= "contenido.txt";

    $archivo_abierto=fopen($archivo,"r");#la opcion de lectura es la letra r

    $contenido = fread($archivo_abierto, filesize($archivo));
    echo $contenido;

?>