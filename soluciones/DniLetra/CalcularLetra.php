<?php
 
//funcion para obtener raíz cuadrada
function letra($dni) {
  $resultado=substr("TRWAGMYFPDXBNJZSQVHLCKE",$dni%23,1);
   return $resultado;
}
 
//instanciamos un nuevo servidor soap
$uri="http://localhost/CalcularLetra";
$server = new SoapServer(null,array('uri'=>$uri));
$server->addFunction("letra");
$server->handle();
?>
