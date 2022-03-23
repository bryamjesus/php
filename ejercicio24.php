<?php
class Persona {
    public $nombre; #propiedades
    private $edad; #este dato solo se va a poder usada en esta clase nada mas
    protected $altura; 

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

$objeto_alumno_uno = new Persona();
$objeto_alumno_uno->asignarNombre("Parangaricutirimicuaro");

$objeto_alumno_dos = new Persona();
$objeto_alumno_dos->asignarNombre('TOTO');

$objeto_alumno_uno->imprimirNombre();
$objeto_alumno_dos->imprimirNombre();
echo $objeto_alumno_dos->mostrarEdad()
// echo $objeto_alumno_uno->nombre;
// echo $objeto_alumno_dos->nombre;
?>