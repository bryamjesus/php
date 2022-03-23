<?php
echo '<h1>Metodos estaticos</h1>';

#Metodos estaticos pueden llamarse sin instaanciarse
class UnaClase{
    public static function unMetodo(){
        echo "Hola desde un metodo estatico <br>";
    }
}

$obj = new UnaClase();
$obj->unMetodo();

#no se necesita instanciar
UnaClase::unMetodo(); #para llamar un metodo estatico - reemplaza a los lineas de codifo 10 y 11

?>