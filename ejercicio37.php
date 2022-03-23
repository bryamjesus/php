<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requiered</title>
</head>

<body>
    <h1>Require</h1>
    <!-- si este falla no muestra nada que sea php -->
    <?php require_once('ejercicio37_1.php') #solo mostrara uno 
    ?>
    <?php require_once('ejercicio37_1.php') ?>
    <?php require('ejercicio37_2.php') ?>
    <?php require('ejercicio37_2.php') ?>
    <?php echo "Hola, estoy en la pagina principal" ?>
</body>

</html>