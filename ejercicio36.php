<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include</title>
</head>

<body>
    <h1>Include</h1>
    <!-- continua, nos muestra un warmin pero seigue funcionando -->
    <?php include_once 'ejercicio36_1.php' #esto solo va a mostrar uno. OJO-> a todos los include 
    ?>
    <?php include_once 'ejercicio36_1.php' ?>
    <?php include 'ejercicio36_2.php' ?>
    <?php include 'ejercicio36_2.php' ?>

    <?php echo "Hola, estoy en la pagina principal" ?>
</body>

</html>