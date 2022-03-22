<?php
if($_GET){
    #OJO: no olvidar que son corchetes
    $nombre = $_GET["nombre"]; 
    echo "Hola ".$nombre;
}
?>