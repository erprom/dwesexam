<?php
 
//funcion para obtener raíz cuadrada
function volumen($radio,$altura) {
   $pi=3.1416;
   $resultado= $pi*pow($radio,2)*$altura;
   return $resultado;
}
 
//instanciamos un nuevo servidor soap
$uri="http://localhost/volumencilindro";
$server = new SoapServer(null,array('uri'=>$uri));
$server->addFunction("volumen");
$server->handle();
?>
