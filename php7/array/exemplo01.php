<?php

$frutas = array();

array_push($frutas, array('nome' => 'Marcello', 'idade' => '21'));
array_push($frutas, array('nome' => 'Marcello', 'idade' => '21'));

//echo json_encode($frutas);

$json = '[{"nome":"Marcello","idade":21},{"nome":"Marcello","idade":21"}]';
$data =  json_decode($json, true);
var_dump($data);

?>