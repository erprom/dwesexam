<HTML LANG="es">

<HEAD>
   <TITLE>Conversor de monedas. Resultados del formulario</TITLE>
   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
</HEAD>

<BODY>

<H1>Conversor de monedas</H1>

<?PHP
   $tablaconversion = array (
      "dolares" => 1.488,
      "libras"  => 0.747,
      "yenes"   => 158.339,
      "francos" => 1.605
      );
   $euros = $_REQUEST['euros'];
   $moneda = $_REQUEST['moneda'];
   if ($euros == "")
      print ("<P>Debe introducir una cantidad</P>\n");
   else
   {
      $cantidad = $euros * $tablaconversion ["$moneda"];
      print ("<P>$euros euro(s) equivale(n) a $cantidad $moneda</P>\n");
   }
?>

<P>[ <A HREF='introducir.php'>Volver</A> ]</P>

</BODY>
</HTML>

