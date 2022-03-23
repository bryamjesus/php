<?php
echo '<h1>Constructor</h1>';
class Persona {
    public $nombre; #propiedades
    private $edad; #este dato solo se va a poder usada en esta clase nada mas
    protected $altura; 

    function __construct($nuevo_nombre)
    {
        $this->nombre = $nuevo_nombre;
    }

    public function asignarNombre($nuevo_nombre){ #acciones o metodos
        $this->nombre = $nuevo_nombre;
    }

    public function imprimirNombre(){
        echo "Hola soy ".$this->nombre.'<br>';
    }

    public function mostrarEdad(){
        $this->edad = 20;
        return $this->edad;
    }
}

$objeto_alumno_uno = new Persona('Bryam Talledo');
// $objeto_alumno_uno->asignarNombre("Parangaricutirimicuaro");
$objeto_alumno_uno->imprimirNombre()

?>