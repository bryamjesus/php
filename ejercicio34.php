<?php
echo '<h1>Convirtiendo un ARRAY a JSON</h1>';
$personas = array("Bryam" => 22,"Andrea"=>19,"Marisa"=>35);

echo json_encode($personas);
?>