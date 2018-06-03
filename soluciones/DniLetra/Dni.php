<?php
$error="";
$resultado="";
$dni="";
//iniciar cliente soap
//escribir la dirección donde se encuentra el servicio
    $url="http://localhost/DniLetra/calcularLetra.php";
    $uri="http://localhost/DniLetra";
    $cliente = new SoapClient(null,array('location'=>$url,'uri'=>$uri));
    if (isset($_POST['enviar']) )
    {    
        //establecer parametros de envío
        if (!empty($_POST['dni'])&&(strlen($_POST['dni']))>=7) 
        {
            $dni=$_POST['dni'];
            //llamar a la función 
            $resultado ="La letra es: ". $cliente->letra($dni);
        }
        else
        {
            $error="Debe introducir un dni";
        }
    }
    ?>    
<HTML LANG="es">

<HEAD>
   <TITLE>Letra del DNI</TITLE>
   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
</HEAD>

<BODY>
<H1>Obtener letra DNI</H1>
<FORM ACTION="dni.php" METHOD="POST">
<?php    
print "<INPUT TYPE='TEXT' NAME='dni' VALUE='$dni'>";
print "<INPUT TYPE='SUBMIT' NAME='enviar' VALUE='Obtener'>";
print "<p class='error'>$error</p>";
print "<p style='font-size: 12pt;font-weight: bold;color: #0066CC;'>$resultado</p>";
?>
</FORM>
</BODY>
</HTML>

