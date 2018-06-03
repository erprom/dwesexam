<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Encuesta</title>
</head>
<body>
	<?php
	if (!isset($_POST['votar'])) {
	?>
	<h1>Encuesta</h1>
	<p>Cree usted que el precio de la vivienda seguira subiendo al ritmo actual?</p>
	<form action="encuesta.php" method="post">
		<input type="radio" name="select" id="select" value="si">Si <br>	
		<input type="radio" name="select" id="select" value="no">No <br><br>	
		<input type="submit" value="votar" id="votar" name="votar"><br>
	</form>
	<a href="resultados.php">Ver Resultados</a>
	<?php
	}else{
		$select = $_POST['select'];
		if (!empty($select)) {
			$opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
	        $dsn = "mysql:host=localhost;dbname=encuesta";
	        $usuario = 'dwes';
	        $contrasena = 'abc123.';
	        $bd = new PDO($dsn, $usuario, $contrasena, $opc);

			if ($select == "si") {

		        $sql = "UPDATE votos SET votos1=votos1+1";
		        $bd->query($sql);

		    }else{
		    	$sql = "UPDATE votos SET votos2=votos2+1";
		        $bd->query($sql);
		    }					
		}
	?>
	<h1>Encuesta</h1>
	<p>Su voto ha sido registrado. Gracias por participar</p>
	<p><a href="resultados.php">Ver resultados</a> o <a href="encuesta.php">Pagina de Votación</a></p>
	<?php
	}
	?>
</body>
</html>