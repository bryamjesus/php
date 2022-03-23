<?php
echo '<h1>Sesiones</h1>';

session_start();

$_SESSION["usuario"]="develoteca";
$_SESSION["estatus"]="logeado";

echo 'Sesion iniciada'.':<br>';
echo 'Usuario: '.$_SESSION["usuario"].' estatus: '.$_SESSION['estatus'];


?>