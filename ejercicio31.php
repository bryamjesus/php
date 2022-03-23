<?php
$txt_nombre = "";
$rdgLenguaje = "";

$chkphp = "";
$chkhtml = "";
$chkcss = "";

$lsAnime = "";

$txt_comentario = "";

if ($_POST) {
    $txt_nombre = (isset($_POST['txt_nombre'])) ? $_POST['txt_nombre'] : ""; #si hay algo ? has esto : sino pon ""
    $rdgLenguaje = (isset($_POST['lenguaje'])) ? $_POST['lenguaje'] : "";

    $chkphp = (isset($_POST['chkphp']) == 'si') ? "checked" : "";
    $chkhtml = (isset($_POST['chkhtml']) == 'si') ? "checked" : "";
    $chkcss = (isset($_POST['chkcss']) == 'si') ? "checked" : "";

    $lsAnime = (isset($_POST['lsAnime'])) ? $_POST['lsAnime'] : "";

    $txt_comentario = (isset($_POST['txt_comentario'])) ? $_POST['txt_comentario'] : "";

    /*
        Instruccion de insertar
        Rutina de algun calculo
    */



    // print_r($lsAnime);
    // print_r($rdgLenguaje);
    // print_r($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <h1>Obtension de datos</h1>
    <?php if ($_POST) { ?>
        <strong>Hola </strong> <?php echo $txt_nombre ?> <br>

        <strong>Tu lenguaje es </strong> <?php echo $rdgLenguaje ?> <br>

        <strong>Estas aprendiendo </strong>
        <br>
        <?php
        echo ($chkphp == "checked") ? "PHP <br>" : "";
        echo ($chkhtml == "checked") ? "HTML <br>" : "";
        echo ($chkcss == "checked") ? "CSS <br>" : "";
        ?>

        <strong>Tu anime preferido es </strong> <?php echo $lsAnime ?> <br>

        <strong>Tu mensaje fue </strong> <br> <?php echo $txt_comentario ?> <br>
    <?php } ?>

    <form action="ejercicio31.php" method="post">

        <label for="name">Nombre:</label>
        <input value="<?php echo $txt_nombre; ?>" type="text" name="txt_nombre" id="">

        <br>
        <label for="rb">¿Te gusta?</label>
        <div>
            <input type="radio" <?php echo ($rdgLenguaje == "php") ? "checked" : "" ?> name="lenguaje" id="php" value="php">
            <label for="php">PHP</label>
        </div>
        <div>
            <input type="radio" <?php echo ($rdgLenguaje == "html") ? "checked" : "" ?> name="lenguaje" id="html" value="html">
            <label for="html">HTML</label>
        </div>
        <div>
            <input type="radio" <?php echo ($rdgLenguaje == "css") ? "checked" : "" ?> name="lenguaje" id="css" value="css">
            <label for="css">CSS</label>
        </div>

        <label for="">Estas aprendiendo...</label>
        <div>
            <label for="phpc">PHP</label>
            <input type="checkbox" name="chkphp" <?php echo $chkphp ?> value="si" id="phpc">
        </div>
        <div>
            <label for="htmlc">Html</label>
            <input type="checkbox" name="chkhtml" <?php echo $chkhtml ?> value="si" id="htmlc">
        </div>
        <div>
            <label for="cssc">CSS</label>
            <input type="checkbox" name="chkcss" <?php echo $chkcss ?> value="si" id="cssc">
        </div>

        <div>
            <label for="anime">¿Qué anime te gusta?</label>
            <select name="lsAnime" id="anime">
                <option value="">[Ninguna serie]</option>
                <option value="naruto" <?php echo ($lsAnime == "naruto") ? "selected" : "" ?>>Naruto</option>
                <option value="bleach" <?php echo ($lsAnime == "bleach") ? "selected" : "" ?>>Bleach</option>
                <option value="dragon" <?php echo ($lsAnime == "dragon") ? "selected" : "" ?>>Dragon Ball</option>
            </select>
        </div>

        <div>
            <label for="duda">¿Tienes alguna duda?</label>
            <br>
            <textarea name="txt_comentario" id="duda" cols="30" rows="10">
                <?php
                echo $txt_comentario;
                ?>
            </textarea>
        </div>



        <input type="submit" value="Enviar informacion">
    </form>
</body>

</html>