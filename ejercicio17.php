<?php

echo '<h1>Introducción a las funciones</h1>';

function imprimirNombre($nombre = 'Pepito', $apellido = 'Piminchimo'){#Estamos inicializando por si no le mandas
    //Rutinas (instucciones)
    echo 'Hola '.$nombre.' '.$apellido.'<br>';
}

imprimirNombre('Bryam','Talledo');
imprimirNombre('Jesús','Ochoa');
imprimirNombre('Andrea','Perez');
imprimirNombre();

?>