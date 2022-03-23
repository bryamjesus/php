<?php
echo '<h1>Crear un archivo</h1>';
$nombre_archivo = 'archivo.txt';
$contenido_archivo = 'Hola Bryam, soy el archivo creado';

$archivo_crear = fopen($nombre_archivo,"w"); #modo escritura

fwrite($archivo_crear, $contenido_archivo);
fclose($archivo_crear);
?>