<?php
	$url="http://localhost/fp/dwesexam/examen1/ejer3/servicio.php";
    $uri="http://localhost/fp/dwesexam/examen1/ejer3/";
    $cliente = new SoapClient(null,array('location'=>$url,'uri'=>$uri));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calcular dni</title>
</head>
<body>
	<?php
	if (!isset($_POST['obtener'])) {

	?>

	<h1>Calcular letra dni</h1>
	<form action="" method="post">
		<input type="text" name="numero" id="numero" required>
		<input type="submit" value="obtener" name="obtener">
	</form>
	<?php 
	}else{
		$numero = $_POST['numero'];
		$resultado = "";
		if (!empty($numero)) {
			$resultado = $cliente->obtenerDni($numero);
		}else{
			echo "no has introducido bien el numero";
		}
		

		echo "la letra de tu dni es: ".$resultado;
	}


	?>
	
</body>
</html>