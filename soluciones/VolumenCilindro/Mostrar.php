<?php
$error="";
$resultado="";
$radio="";
$altura="";
//iniciar cliente soap
//escribir la dirección donde se encuentra el servicio
    $url="http://localhost/volumencilindro/volumencilindro.php";
    $uri="http://localhost/volumencilindro";
    $cliente = new SoapClient(null,array('location'=>$url,'uri'=>$uri));
    if (isset($_POST['enviar']) )
    {    
        //establecer parametros de envío
        if (!empty($_POST['radio'])&&!empty($_POST['altura'])&&
                (is_numeric($_POST['radio']))&&(is_numeric($_POST['altura'])))
        {
            $radio=$_POST['radio'];
            $altura=$_POST['altura'];
            //llamar a la función 
            $resultado ="El volumen del cilindro es: ". $cliente->volumen($radio,$altura);
        }
        else
        {
            $error="Los datos son obligatorios y deben de ser numéricos";
        }
    }
    ?>    
<HTML LANG="es">

<HEAD>
   <TITLE>Volumen de un cilindro</TITLE>
   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
</HEAD>

<BODY>
<H1>Obtener volumen del cilindro</H1>
<FORM ACTION="mostrar.php" METHOD="POST">
<?php
print "<p>Radio del cilindro:</p>";
print "<INPUT TYPE='TEXT' NAME='radio' VALUE='$radio' required>";
print "<p>Altura del cilindro:</p>";
print "<INPUT TYPE='TEXT' NAME='altura' VALUE='$altura' required>";
print "<p/>";
print "<INPUT TYPE='SUBMIT' NAME='enviar' VALUE='Calcular'>";
print "<p class='error'>$error</p>";
print "<p style='font-size: 12pt;font-weight: bold;color: #0066CC;'>$resultado</p>";
?>
</FORM>
</BODY>
</HTML>

