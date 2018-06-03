<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resultados</title>
</head>
<body>
	<?php
	$opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    $dsn = "mysql:host=localhost;dbname=encuesta";
    $usuario = 'dwes';
    $contrasena = 'abc123.';
    $bd = new PDO($dsn, $usuario, $contrasena, $opc);
    $sql = "SELECT * FROM votos";
    $resultado = $bd->query($sql);
    if ($resultado) {
    	$row = $resultado->fetch();
    }
    $yes = $row['votos1'];
    $no = $row['votos2'];
    $total = $yes+$no;
    $medyes = round(($yes/$total)*100);
    $medno = round(($no/$total)*100);
	?>
	<h1>Encuesta. Resultados de la votación</h1>
	<table>
		<tr>
			<th>Respuesta</th>
			<th>Votos</th>
			<th>Porcentaje</th>
		</tr>
		<tr>
			<td>SI</td>
			<td><?php echo $yes; ?></td>
			<td><?php echo $medyes; ?>%</td>
		</tr>
		<tr>
			<td>NO</td>
			<td><?php echo $no; ?></td>
			<td><?php echo $medno; ?>%</td>
		</tr>
	</table>
	<p>Numero total de votos emitidos:<?php echo $total; ?> </p>
	<p><a href="encuesta.php">Pagina de Votación</a></p>
</body>
</html>