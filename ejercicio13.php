<?php
if ($_POST) {
    $valor = $_POST['btn_valor'];

    switch ($valor) {
        case 1:
            echo "El usuario presiono el boton 1";
            break;
        case 2:
            echo "El usuario presiono el boton 2";
            break;

        case 3:
            echo "El usuario presiono el boton 3";
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>

<body>
    <h1>SWITCH</h1>
    <form action="ejercicio13.php" method="post">
        <input type="submit" name="btn_valor" value="1">
        <br>
        <input type="submit" name="btn_valor" value="2">
        <br>
        <input type="submit" name="btn_valor" value="3"><br>
    </form>
</body>

</html>