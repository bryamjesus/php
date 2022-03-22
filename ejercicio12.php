<!DOCTYPE html>
<?php
if ($_POST) {
    $numero_uno = $_POST['numero_uno'];
    $numero_dos = $_POST['numero_dos'];

    if ($numero_uno != $numero_dos) { # != == <
        echo "A != B";
    }else{
        echo "A == B";
    }
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ejercicio12.php" method="post">
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