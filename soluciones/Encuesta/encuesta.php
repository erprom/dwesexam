<HTML LANG="es">
<HEAD>
   <TITLE>Encuesta</TITLE>
   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
</HEAD>

<BODY>

<?PHP
   if (isset($_REQUEST['enviar']))
   {
     
        // Conectar con la base de datos
        $bd=new mysqli();
        $bd->connect('localhost','root','1234','encuesta');
        $error=$bd->connect_errno;
        if ($error!=null)
        {
        ?>
            <p Style="color:red">
            <?php
            print "Error " .$error ." al conectar con la base de datos";
             ?>
        <?php    
        }
        else
        {   
            // Obtener votos actuales
            $resultado=$bd->query("Select * from votos");
            $datos=$resultado->fetch_array();

            // Actualizar votos
           $votos1 = $datos["votos1"];
           $votos2 = $datos["votos2"];
           $voto = $_POST['voto'];
           if ($voto == "si")
              $votos1 = $votos1 + 1;
           else if ($voto == "no")
              $votos2 = $votos2 + 1;
            $consulta=$bd->query("update votos set votos1=$votos1, votos2=$votos2");
		 //$consulta=$bd->query("update votos set votos1=".$votos1.", votos2=".$votos2);
             // Desconectar
            $bd->close();
            print ("<H1>Encuesta. Voto registrado</H1>\n");
             // Mostrar mensaje de agradecimiento
            print ("<P>Su voto ha sido registrado. Gracias por participar</P>\n");
            print ("<A HREF='resultados.php'>Ver resultados</A> o <A HREF='encuesta.php'>Pagina de votacion</A>\n");
        }    
   }
   else
   {
        ?>

        <H1>Encuesta</H1>

        <P>Cree ud. que el precio de la vivienda seguira subiendo al ritmo actual?</P>

        <FORM ACTION="encuesta.php" METHOD="POST">
           <INPUT TYPE="RADIO" NAME="voto" VALUE="si" CHECKED>Si<BR>
           <INPUT TYPE="RADIO" NAME="voto" VALUE="no">No<BR><BR>
           <INPUT TYPE="SUBMIT" NAME="enviar" VALUE="votar">
        </FORM>

        <A HREF="resultados.php">Ver resultados</A>

        <?PHP
    }
        ?>

</BODY>
</HTML>

