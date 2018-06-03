<HTML LANG="es">

<HEAD>
   <meta http-equiv="Content-type" content="text/html; charset=utf-8" /> 
   <TITLE>Socios registrados en la actualidad</TITLE>
   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
</HEAD>

<BODY>

<?PHP

        // Conectar con la base de datos
        $bd=new mysqli();
        $bd->connect('localhost','root','1234','socios');
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
            $resultado=$bd->query("Select * from socio");
            $datos=$resultado->fetch_array();

         // Mostrar resultados
            print "<H1>Socios Registrados</H1>";
            print ("<TABLE width='50%'>\n");
            print ("<TR>\n");
            print ("<TH>D.N.I.</TH>\n");
            print ("<TH>Nombre</TH>\n");
            print ("<TH>Apellidos</TH>\n");
            print ("<TH>Fecha Alta</TH>\n");
            print ("</TR>\n");
            while ($datos !=null)
            {
                $dni = $datos["dni"];
                $nombre = $datos["nombre"];
                $apellidos = $datos["apellidos"];
                $fecha = $datos["fechaalta"];
                print ("<TD CLASS='derecha'>$dni</TD>\n");
                print ("<TD CLASS='derecha'>$nombre</TD>\n");
                print ("<TD CLASS='derecha'>$apellidos</TD>\n");
                print ("<TD CLASS='derecha'>$fecha</TD>\n");
                print ("</TR>\n");
                $datos=$resultado->fetch_array();
            }
            print ("</TABLE>\n");

            print ("<P><A HREF='socio.php'>Registro de socios</A></P>\n");

             // Desconectar
            $bd->close();
        }
      ?>

</BODY>
</HTML>
