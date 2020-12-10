<html>
    <body>

        <?php
            //Probando bien la a aa
            $errores = [];
            if (isset($_POST['enviar'])){
                
                if ($_POST['fiesta'] == ""){
                    $errores['fiesta'] = "No se ha introducido el nombre de la fiesta";
                }

                if (isset($_POST['musica']) && $_POST['musica']){
                    $errores['musica'] = "Debes de selcionar un tipo de musica.";
                }

                if (isset($_POST['espacios']) || (isset ($_POST['espacios']) && count($_POST['espacios']) < 3)){
                    $errores['espacios'] = "No has selecionado dos espacios como minimo";
                }
            }

            if (count($errores) == 0 && (isset($_POST['enviar']))){
                
                echo "El nombre de la fiesta es: ". $_POST['fiesta']. "<br>";
                echo "El numeor de personas es: ". $_POST['numero']. "<br>";
                echo "El numeor de personas es: ". $_POST['opcion']. "<br>";
                echo "El numeor de personas es: ". $_POST['musica']. "<br>";

                if(isset ($_POST['espacios'])){
                    $espacios_elegidos = "";
                    foreach ($_POST['espacios'] as $key => $value) {
            
                      // $instalaciones_elegidas .= $value.", ";
                      $espacios_elegidos = $espacios_elegidos.$value.", ";
            
                    }
                    echo "Las instalaciones elegidas son: ".$espacios_elegidos. " </br>";
            
                  }else{
                    echo "No ha seleccionado ninguna instalación </br>";
                  }
                echo "El numeor de personas es: ". $_POST['texto']. "<br>"; 
            
        }else{
        ?>

        <form action="form.php" method="POST">
            Nombre de la fiesta: <input type="text" name="fiesta"><br>
            <?php if (isset($errores['fiesta'])){
                echo "<b>".$errores['fiesta']. "</b><br>";
            }?>

            Numero de personas: <input type="number" name="numero"><br>
            La fiesta es: <input type="radio" value="privado" name="opcion">Privada 
                          <input type="radio" value="publica" name="opcion">Publica
                          <br>
            Tipo de musica <select name="musica">
                                <option>POP</option>
                                <option>ROCK</option>  
                                <option>REGUE</option>    
                            </select><br>
            Espacios de la fiesta: <input type="checkbox" name="espacios[]" value="jardin">jardin
                                   <input type="checkbox" name="espacios[]" value="barras">barras
                                   <input type="checkbox" name="espacios[]" value="salon">salon
            <br>
            Reclamaciones<textarea name="texto" cols="60" rows="10"></textarea><br>
            <input type="submit" value="enviar" name="enviar">

        </form>
        <?php
        }  
        ?>
    </body>
</html>