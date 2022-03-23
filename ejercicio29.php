<?php

echo '<h1>Trayendo datos de la base de datos</h1>';
$servidor = 'localhost'; //127.0.0.1
$usuario = 'root';
$password = '';

try{
    $conexion = new PDO("mysql:host=$servidor;dbname=album",$usuario,$password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $sql = "SELECT * FROM `fotos`";
    
    $sentencia = $conexion->prepare($sql);#prepara
    $sentencia->execute(); #ejecuto

    $resultado = $sentencia->fetchAll();

    // print_r($resultado);

    foreach($resultado as $foto){
        echo $foto['nombreFotos'].'<br>';
    }

    echo 'Conexion Establecida';
}catch(PDOException $error){
    echo 'Conexcion Establecida'.$error;
}

?>