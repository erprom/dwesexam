<?php

function obtenerDni($dni){
  $resultado=substr("TRWAGMYFPDXBNJZSQVHLCKE",$dni%23,1);
   return $resultado;
}



$uri="http://localhost/fp/dwesexam/examen1/ejer3/";
$server = new SoapServer(null,array('uri'=>$uri));
$server->addFunction("obtenerDni");
$server->handle();

?>
