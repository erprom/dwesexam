<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Divisor monedas</title>
</head>
<body>
	<h1>Divisor Monedas</h1>
	<div class="form">
		<form action="convertir.php" method="post">
			<label for="cantidad">Cantidad en Euros:</label>
			<input type="text" name="cantidad" id="cantidad">
			<label for="convertir"></label>
			<select name="convertir" id="convertir">
				<option value="dolares">Dolares USA</option>
				<option value="libras">Libras Esterlinas</option>
				<option value="yenes">Yenes Japoneses</option>
				<option value="Francos">Francos Suizos</option>
			</select>
			<input type="submit" value="enviar" id="enviar">
		</form>
	</div>
</body>
</html>