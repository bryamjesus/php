<?php
//$numero_aleatorio = rand(1,10);
echo '<h1>Funciones de numeros</h1>';
function imprimirNumero($numero_min="", $numero_max=""){
    if((empty($numero_min)) && (empty($numero_max))){
        $numero_aleatorio = rand();
        echo $numero_aleatorio;
    }elseif((empty($numero_min)) || (empty($numero_max))){
        echo 'Ingrese dos numeros';
    }else{
        $numero_aleatorio = rand($numero_min,$numero_max);
        echo $numero_aleatorio;
    }
}

imprimirNumero(50,6)

?>