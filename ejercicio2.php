<?php
if ($_POST) { #¿hicieron un envio?
    //Recibir informacion del formulario HTML (Método Post)
    $nombre = $_POST['txtNombre'];

    //Para concatenar se utiliza punto
    echo "Hola desde PHP " . $nombre; #
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio mediante Post</title>
</head>

<body>
    <h1>Hola Mundo desde HTML</h1>
    <form action="ejercicio2.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="txtNombre" id="">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>