<HTML LANG="es">

<HEAD>
   <TITLE>Encuesta. Resultados de la votacion</TITLE>
   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
</HEAD>

<BODY>

<?PHP

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

            $votos1 = $datos["votos1"];
            $votos2 = $datos["votos2"];
            $totalVotos = $votos1 + $votos2;
            $porcentaje=0;

         // Mostrar resultados
            print "<H1>Encuesta. Resultados de la votacion</H1>";
            print ("<TABLE>\n");

            print ("<TR>\n");
            print ("<TH>Respuesta</TH>\n");
            print ("<TH>Votos</TH>\n");
            print ("<TH>Porcentaje</TH>\n");
            print ("</TR>\n");
            print ("<TD CLASS='izquierda'>Si</TD>\n");
            print ("<TD CLASS='derecha'>$votos1</TD>\n");
            if ($totalVotos<>0) $porcentaje = round (($votos1/$totalVotos)*100,2);
            print ("<TD CLASS='derecha'>$porcentaje%</TD>\n");
            print ("</TR>\n");
            print ("<TD CLASS='izquierda'>No</TD>\n");
            print ("<TD CLASS='derecha'>$votos2</TD>\n");
            if ($totalVotos<>0) $porcentaje = round (($votos2/$totalVotos)*100,2);
            print ("<TD CLASS='derecha'>$porcentaje%</TD>\n");
            print ("</TABLE>\n");

            print ("<P>Numero total de votos emitidos: $totalVotos </P>\n");

            print ("<P><A HREF='encuesta.php'>Pagina de votacion</A></P>\n");

             // Desconectar
            $bd->close();
        }
      ?>

</BODY>
</HTML>
