<?php
echo '<h1>Herencia</h1>';
class persona {
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

class trabajador extends persona{
    public $puesto;

    public function presentarseComoTrabajador(){
        echo 'Hola soy '.$this->nombre.' y soy un '.$this->puesto.'<br>';
    }

}

$obj_trabajador = new trabajador();
$obj_trabajador->puesto = 'Tester';
$obj_trabajador->asignarNombre('Bryam Talledo');

echo $obj_trabajador->mostrarEdad();
$obj_trabajador->imprimirNombre();
$obj_trabajador->presentarseComoTrabajador();

?>