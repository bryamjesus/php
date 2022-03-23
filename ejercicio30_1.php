<?php

session_start();

if(isset($_SESSION['usuario'])){#isset es para saber si esta vacio
    echo 'Sesion iniciada'.':<br>';
    echo 'Usuario: '.$_SESSION["usuario"].' estatus: '.$_SESSION['estatus'];
}else{
    echo 'No hay datos';
}


?>