<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>calcular numero</title>
</head>
<body>
	<?php 
	if (!isset($_POST['enviar'])) {
	?>
	<h1>Calcular tabla multiplicar</h1>
	<form action="calcularnumero.php" method="post">
		<input type="text" name="numero" id="numero">
		<input type="submit" value="enviar" name="enviar" id="enviar">
	</form>
	<?php 
	}else{
		$numero = $_POST['numero'];
		$resultado ="";
		$error="";
		if (!empty($numero) && is_numeric($numero)) {
			if ($numero < 11) {
				print("<h1>Tabla de multiplicar del ".$numero);
				for ($i=0; $i <= 10 ; $i++) { 
					$resultado = $numero *$i;
					print("<p>".$numero." x ".$i. " = ".$resultado."</p>");
				}
				print("<br><a href='calcularnumero.php'>Volver</a>");
				
			}else{
				$error = "debe introducir un numero entre el 1 y el 10";
				print($error);
				print("<br><a href='calcularnumero.php'>Volver</a>");
			}
		}else{
			$error = "debe introducir un numero";
			print($error);
			print("<br><a href='calcularnumero.php'>Volver</a>");
		}
	}
	?>
	
</body>
</html>