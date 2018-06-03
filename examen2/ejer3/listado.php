<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listado socios</title>
</head>
<body>
	<h1>Listado socios registrados</h1>
	<table>
		<tr>
			<th>DNI</th>
			<th>Nombre</th>
			<th>Apellidos</th>
			<th>Fecha</th>
		</tr>
		<?php
		$opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        $dsn = "mysql:host=localhost;dbname=socios";
        $usuario = 'dwes';
        $contrasena = 'abc123.';
        $bd = new PDO($dsn, $usuario, $contrasena, $opc);
        $sql = "SELECT * FROM socio";
        $resultado = $bd->query($sql);
        if ($resultado) {
        	$row = $resultado->fetch();
        }
        while ($row !=null) {
        	$dni = $row['dni'];
        	$nombre = $row['nombre'];
        	$apellidos = $row['apellidos'];
        	$fecha = $row['fechaalta'];
        	print("<tr>");
        	print("<td> $dni </td>");
        	print("<td> $nombre </td>");
        	print("<td> $apellidos </td>");
        	print("<td> $fecha </td>");
        	print("</tr>");
        	$row = $resultado->fetch();
        }
		?>
	</table>
	<a href="socio.php"> Registro Socios</a>
	
</body>
</html>