<?php
if ($_POST) {
    print_r($_POST);
    print_r($_FILES['archivo']['name']);


    move_uploaded_file($_FILES['archivo']['tmp_name'], $_FILES['archivo']['name']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Imagenes</h1>
    <!-- es para enviar informacion en este caso los archivos -->
    <form action="ejercicio32.php" enctype="multipart/form-data" method="post">
        <div>
            <label for="img">Imagen</label>
            <input type="file" name="archivo" id="img">
        </div>
        <div>
            <input type="submit" name="enviar" value="Enviar información">
        </div>
    </form>

</body>

</html>