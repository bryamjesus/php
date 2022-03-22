<!DOCTYPE html>
<?php
if ($_POST) {
    $numero_uno = $_POST['numero_uno'];
    $numero_dos = $_POST['numero_dos'];

    $suma = $numero_uno + $numero_dos;
    $resta = $numero_uno - $numero_dos;
    $multiplicacion = $numero_uno * $numero_dos;
    $division = $numero_uno / $numero_dos;

    echo "<br>" . $suma;
    echo "<br>" . $resta;
    echo "<br>" . $multiplicacion;
    echo "<br>" . $division;
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores matemáticos</title>
</head>

<body>
    <form action="ejercicio8.php" method="post">
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