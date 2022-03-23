<?php

echo '<h1>Leyendo JSON</h1>';

$jsonContenido = '[
    {"nombre":"Bryam","apellido":"Talledo"},
    {"nombre":"Andrea","apellido":"Ochoa"}
]';

$resultado = json_decode($jsonContenido);
// print_r($resultado);

foreach($resultado as $persona){
    echo ($persona->nombre)." ".($persona->apellido).'<br>';
}

?>