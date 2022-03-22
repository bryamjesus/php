<!DOCTYPE html>
<?php
if ($_POST) {
    $numero_uno = $_POST['numero_uno'];
    $numero_dos = $_POST['numero_dos'];

    if ($numero_uno == $numero_dos) {
        echo "El valor de A = B <br>";
        if ($numero_uno == 4) {
            echo "El valor A = 4<br>";
        }
        if ($numero_uno == 5) {
            echo "El valor A = 5 <br>";
        }
    }
    if (($numero_uno == $numero_dos) && ($numero_uno == 4)) {
        echo "Son igaules y el valor de A = 4";
    }
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If anidados</title>
</head>

<body>
    <form action="ejercicio11.php" method="post">
        <label for="num_uno">Numero Uno:</label>
        <input type="text" name="numero_uno" id="">
        <br>
        <label for="num_dos">Numero Dos:</label>
        <input type="text" name="numero_dos" id="">
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>

</html>