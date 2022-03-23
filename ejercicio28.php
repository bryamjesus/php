<?php
echo '<h1>Union con base de datos</h1>';

$servidor = 'localhost'; //127.0.0.1
$usuario = 'root';
$password = '';

try{
    $conexion = new PDO("mysql:host=$servidor;dbname=album",$usuario,$password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $sql = "INSERT INTO `fotos` (`id`, `nombreFotos`, `ruta`) VALUES (NULL, 'Jugando con la programacion', 'foto.jpg')";
    $conexion->exec($sql);
    echo 'Conexion Establecida';

}catch(PDOException $error){
    echo 'Error de conexion'.$error;
}

?>