<?php
function volumen($base,$altura){

	$pi = 3.1416;
	$volumen = $pi * ($base*2) * $altura;
	return $volumen;
}

$uri="http://localhost/fp/dwesexam/examen2/ejer1/";
$server = new SoapServer(null,array('uri'=>$uri));
$server->addFunction("volumen");
$server->handle();
?>