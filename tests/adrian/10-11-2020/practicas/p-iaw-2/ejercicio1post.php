<html>
    <body>
        <?php
            echo "El nombre de la fiesta es: ".$_POST['nombre']. "<br>";
            echo "Numero de personas : ".$_POST['numero']. "<br>";
            echo "La fiesta es: ".$_POST['fiesta']. "<br>";
            echo "Tipo de musica: ".$_POST['musica']. "<br>";

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
            echo "Comentarios: " .$_POST['comentarios']. "</br>"
        ?>
    </body>
</html>