<?php
if ($_POST) {
    $txtNombre = $_POST['txtNombre'];
    $txtApellido = $_POST['txtApellido'];
    echo "Hola " . $txtNombre ." ". $txtApellido;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenacion</title>
</head>

<body>
    <h1>Hola Mundo desde HTML</h1>
    <form action="ejercicio5.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="txtNombre" id="">
        <label for="apellido">Apellido</label>
        <input type="text" name="txtApellido" id="">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>