<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <?php
            // GESTION DE ERRORES
            $errores = [];

            if(isset($_POST['enviar'])){

                if($_POST['nombre'] == ""){
                    $errores['nombre'] = "El nombre de la fiesta es requerido";
                  }
                if($_POST['espacios'] == ""){
                    $errores['nombre'] = "El nombre de la fiesta es requerido";
                  }
            }
            

            if(count($errores) == 0 && (isset($_POST['enviar']))){
        ?>
        <h1>Resultado del formulario</h1>

            <table>
                    <tr>
                        <td>Nombre de la fiesta</td>
                        <td><?php echo $_POST['nombre'] ?></td>
                    </tr>
                <br>
                    <tr>
                        <td>Numero de personas</td>
                        <td><?php echo $_POST['numero'] ?></td>
                    </tr>
                <br>
                    <tr>
                        <td>Fiesta</td>
                        <td><?php echo $_POST['fiesta'] ?></td>
                    </tr>
                <br>
                    <tr>
                        <td>Musica</td>
                        <td><?php echo $_POST['musica'] ?></td>
                    </tr>
                    <tr>
                        <td>Espacios</td>
                        <td><?php  if(isset ($_POST['espacios'])){
                            $espacios_elegidos = "";
                            foreach ($_POST['espacios'] as $key => $value) {
        
                            // $instalaciones_elegidas .= $value.", ";
                            $espacios_elegidos = $espacios_elegidos.$value.", ";
        
                            }
                                echo "Las instalaciones elegidas son: ".$espacios_elegidos. " </br>";
                            }else{
                                echo "No ha seleccionado ninguna instalación </br>";
                        }?> </td>
                    </tr>
                <br>    
                    <tr>
                        <td>Comentarios</td>
                        <td><?php echo $_POST['comentarios'] ?></td>
                    </tr>    
            </table>

        <?php
            
            }else{
    
        ?>

            <h2>Formulario</h2>
            <form action="formulario.php" method="POST" enctype="multipart/form-data">

            <b>Nombre de la fiesta</b> : <input type="text" name="nombre"></br>
            <br>
            <b>Numero de personas</b> : <input type="number" name="numero"></br>
            <br>
            <b>Fiesta:</b> <input type="radio" name="fiesta" value="Privada"> Privada
                    <input type="radio"  name="fiesta" value="Publica"> Publica</br><br>
            <b>Musica:</b> 
                    <select name="musica">
                        <option >Selecione un tipo de musica</option>
                        <option >POP</option>
                        <option >ROCK</option>
                        <option >JAZZ</option>
                        <option >INDIE</option>            
                    </select></br>
                    <br>
            <b>Instalaciones:</b> 
                    <input type="checkbox" name="espacios[]" value="Barras">Barras
                    <input type="checkbox" name="espacios[]" value="Escenarios">Escenarios
                    <input type="checkbox" name="espacios[]" value="Jardin">Jardin
                    <input type="checkbox" name="espacios[]" value="Zona chill">Zona chill</br>
                    <br>
            <b>Comentarios</b><br><textarea name="comentarios" cols="60" rows="10"></textarea><br>
                    <br>
                    <input type="submit" name="enviar" value="enviar">    
        </form> 
        <?php      
            }
        ?>    
    </body>
</html>