<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <?php

        ?>

        <h1>Resultado</h1>
            <p><?php echo $_POST['nombre'] ?></p>
            <p><?php echo $_POST['numero'] ?></p>
            <p><?php echo $_POST['fiesta'] ?></p>
            <p>
                <?php  if(isset ($_POST['espacios'])){
                $espacios_elegidos = "";
                foreach ($_POST['espacios'] as $key => $value) {
        
                  // $instalaciones_elegidas .= $value.", ";
                  $espacios_elegidos = $espacios_elegidos.$value.", ";
        
                }
                echo "Las instalaciones elegidas son: ".$espacios_elegidos. " </br>";
        
              }else{
                echo "No ha seleccionado ninguna instalación </br>";
              }?>
            </p>
            <p><?php echo $_POST['comentarios'] ?></p>
            <?php { ?>

            <?php
                }else{
            ?>
        <h2>Formulario Fiesta</h2>
            <form action="formulario.php" method="POST" enctype="multipart/form-data">
                <b>Nombre de la fiesta</b> : <input type="text" name="nombre"></br>
                <br>
                <b>Numero de personas</b> : <input type="number" name="numero"></br>
                <br>
                <b>Fiesta:</b> <input type="radio" name="fiesta" value="Privada"> Privada
                    <input type="radio"  name="fiesta" value="Publica"> Publica</br><br>
                <b>Musica:</b> 
                    <select name="musica">
                        <option >POP</option>
                        <option >ROCK</option>
                        <option >JAZZ</option>
                        <option >INDIE</option>            
                    </select></br>
                    <br>
                <b>Espacios:</b> 
                    <input type="checkbox" name="espacios[]" value="Barras">Barras
                    <input type="checkbox" name="espacios[]" value="Escenarios">Escenarios
                    <input type="checkbox" name="espacios[]" value="Jardin">Jardin
                    <input type="checkbox" name="espacios[]" value="Zona chill">Zona chill</br>
                    <br>
                <b>Comentarios</b><br><textarea name="comentarios" cols="60" rows="10"></textarea><br>
                    <br>
                    <input type="submit" value="Enviar">    
        </form> 
        <?php } ?>
    </body>
</html>