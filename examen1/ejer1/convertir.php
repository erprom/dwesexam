<?php
if (!isset($_POST['enviar']) && empty($_POST['cantidad'])) {
	$info = "No se ha enviado ninguna información";
}else{
	
	$cantidad = $_POST['cantidad'];
	$select = $_POST['convertir'];

	switch ($select) {

		case 'dolares':
			$resultado = $cantidad * 1.488;
			break;

		case 'libras':
			$resultado = $cantidad * 0.747;
			break;

		case 'yenes':
			$resultado = $cantidad * 158.339;
			break;

		case 'francos':
			$resultado = $cantidad * 1.605;
			break;

	}
	$info = "$cantidad euros equivalen a $resultado $select";

}
?>
<h1> Conversor de monedas</h1>
<p><?php echo $info; ?></p>
<a href="introducir.php">Volver Atras</a>
