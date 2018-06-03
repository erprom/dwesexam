<HTML LANG="es">

<HEAD>
   <TITLE>Conversor de monedas</TITLE>
   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
</HEAD>

<BODY>

<H1>Conversor de monedas</H1>

<FORM ACTION="convertir.php" METHOD="POST">

<P>Cantidad en euros:
<INPUT TYPE="TEXT" NAME="euros">
Convertir a:
<SELECT NAME="moneda">
   <OPTION VALUE="dolares" SELECTED>Dolares USA
   <OPTION VALUE="libras">Libras esterlinas
   <OPTION VALUE="yenes">Yenes japoneses
   <OPTION VALUE="francos">Francos suizos
</SELECT></P>

<INPUT TYPE="SUBMIT" NAME="enviar" VALUE="Convertir">

</FORM>

</BODY>
</HTML>