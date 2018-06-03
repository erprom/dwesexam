<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>registro socios</title>
</head>
<body>
	<?php
	if (!isset($_POST['enviar'])) {
		
	?>
	<h1>Registro Socios</h1>
	<p>Datos Personales:</p>
	<div class="caja">
		<form action="" method="post">
			<label for="dni">dni</label>
			<input type="text" name="dni" id="dni"><br>
			<label for="nombre">nombre</label>
			<input type="text" name="nombre" id="nombre"><br>
			<label for="apellidos">apellidos</label>
			<input type="text" name="apellidos" id="apellidos"><br>
			<label for="fecha">fecha de alta:</label>
			<input type="date" name="fecha" id="fecha">
	</div>
	<input type="submit" value="enviar" name="enviar" id="enviar">
	</form>
	<p>
		<a href="listado.php">Ver socio registrados</a>
	</p>
	<?php
	}else{
		$salida = "";
		$dni = $_POST['dni'];
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$fecha = $_POST['fecha'];
		function vacio($valor){
			if (!empty($valor)) {
				return true;
			}
			return false;
		}
		$opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        $dsn = "mysql:host=localhost;dbname=socios";
        $usuario = 'dwes';
        $contrasena = 'abc123.';
        $bd = new PDO($dsn, $usuario, $contrasena, $opc);
		if (vacio($dni) && vacio($nombre) && vacio($apellidos) && vacio($fecha)){
			
			$sql = "INSERT INTO socio VALUES('".$dni."','".$nombre."','".$apellidos."','".$fecha."')";
			$resultado = $bd ->query($sql);
			if ($resultado) {
				$salida = "Socio Registrado correctamente";
			}else{
				$salida = "No se ha podido registrar";
			}
			
		}else{
			$salida = "hay algun dato vacio";
		}
		
	print("<h1>$salida</h1><br>");
	print("<a href='listado.php'>Listado de socios</a> o <a href='socio.php'>Registro de socios </a>");
	}
	
	?>

</body>
</html>