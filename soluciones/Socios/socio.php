<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta charset="UTF-8">
        <title>Agregar socio</title>
        <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
    </head>
    <body>

<?PHP
   if (isset($_REQUEST['registrar']))
   {
     
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
            // Registrar socio
            $dni=$_POST["dni"];
            $nombre=$_POST["nombre"];
            $apellidos=$_POST["apellidos"];
            $fecha=$_POST["fecha"];                                               
            $consulta=$bd->query("insert into socio values('".$dni."','".$nombre."','".$apellidos."','".$fecha."')");
            if ($consulta!= null) 
            {        
                // Desconectar
               $bd->close();
               print ("<H1>Socio registrado correctamente</H1>\n");
               print "<br />";
               print ("<A HREF='resultados.php'>Listado de socios</A> o <A HREF='socio.php'>Registro de socios</A>\n");
            }
            else {
                $bd->close();
                print ("<H1>El Socio no ha podido registrarse. DNI duplicado</H1>\n");
                print "<br />";
                print ("<A HREF='resultados.php'>Listado de socios</A> o <A HREF='socio.php'>Registro de socios</A>\n");                
            }
        }    
   }
   else
   {
        ?>

        <H1>Registro Socios</H1>

        <fieldset style="width:200px;">
        <legend>Datos Personales</legend>
        <FORM ACTION="socio.php" METHOD="POST">
           <p>D.N.I.</p>
           <INPUT TYPE="text" NAME="dni" maxlength="10" required=""/><br>
           <p>Nombre</p>
           <INPUT TYPE="text" style="text-transform:uppercase;" NAME="nombre" maxlength="50" required=""/><br>
           <p>Apellidos</p>
           <INPUT TYPE="text" style="text-transform:uppercase;" NAME="apellidos" maxlength="100" required=""/><br>
           <p>Fecha Alta</p>
           <INPUT TYPE="date" NAME="fecha" required="" /><br><br> 
           </fieldset>
           <br/>
           <INPUT TYPE="SUBMIT" NAME="registrar" VALUE="Enviar">
        </FORM>
        <br><br>
        <A HREF="resultados.php">Ver socios registrados</A>

        <?PHP
    }
        ?>
        
    </body>
</html>
