
        <?php
        $error="";
        $mostrarformulario=1;
        if (isset($_POST['enviar']))
        {
            if (!empty($_POST['numero']) && is_numeric($_POST['numero']) 
                    && $_POST['numero']>0 && $_POST['numero']<11 )
            {
                $numero=$_POST['numero'];  
                print "<H1>Tabla de multiplicar del $numero</H1>";
                for($i=1;$i<=10;$i++){
                    $valor=$numero*$i;
                    print "$numero x ".$i." = ". $valor;
                    print "<br/>";
                }
                $mostrarformulario=0;
                print ("<P><A HREF='index.php'>Volver</A></P>\n");
            }
            else
            {
                $error="Debes de introducir un número entre 1 y 10";
            }     
        }   

            
        ?>
<html>
    <head>
        <meta charset="UTF-8">

        <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
    </head>
    <body>
        <?php
        if ($mostrarformulario==1)
        {?>
            <H1>Calcular tabla de multiplicar del número:</H1>
            <FORM ACTION="index.php" METHOD="POST">
            <?php
            print "<INPUT TYPE='TEXT' NAME='numero' required>";
            print "<INPUT TYPE='SUBMIT' NAME='enviar' VALUE='Calcular'>";
            print "<p class='error'>$error</p>";
        ?>
        </FORM>
        <?php
        }
        ?>
    </body>
</html>
