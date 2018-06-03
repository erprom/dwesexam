<?php
$url="http://localhost/fp/dwesexam/examen2/ejer1/volumencilindro.php";
$uri="http://localhost/fp/dwesexam/examen2/ejer1/";
$cliente = new SoapClient(null,array('location'=>$url,'uri'=>$uri));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calcular volumen cilidro</title>
</head>
<body>
	<h1>Obtener volumen cilindro</h1>
	<form action="" method="post">
		<label for="radio">Radio del cilindro:</label>
		<input type="text" name="radio" id="radio" pattern="[0-9]" required>
		<label for="altura">altura del cilindro:</label>
		<input type="text" name="altura" id="altura" pattern="[0-9]" required>
		<input type="submit" value="enviar" id="enviar" name="enviar">
	</form>

	<?php
	if (isset($_POST['enviar'])) {
		$radio = $_POST['radio'];
		$altura = $_POST['altura'];
		$resultado = $cliente ->volumen($radio,$altura);
		echo "<p> El volumen del cilindro es: ".$resultado;
	}

	?>
</body>
</html>