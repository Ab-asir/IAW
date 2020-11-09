<html>
    <body>
        <?php
            echo "El nombre de la fiesta es: ".$_POST['nombre']. "<br>";
            echo "Numero de personas : ".$_POST['numero']. "<br>";
            echo "La fiesta es: ".$_POST['fiesta']. "<br>";
            echo "Tipo de musica: ".$_POST['musica']. "<br>";

            if($_POST['extra']){
                $instalaciones_elegidas = "";
                foreach ($_POST['extra'] as $key => $value) {
        
                  // $instalaciones_elegidas .= $value.", ";
                  $instalaciones_elegidas = $instalaciones_elegidas.$value.", ";
        
                }
                echo "Las instalaciones elegidas son: ".$instalaciones_elegidas. " </br>";
        
              }else{
                echo "No ha seleccionado ninguna instalación </br>";
              }
            echo "Comentarios: " .$_POST['comentarios']. "</br>"
        ?>
    </body>
</html>