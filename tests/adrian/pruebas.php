<html>
    <body>
        <?php
            $provincias = array(
                'leon',
                'zamora',
                'burgos',
                'palencia',
                'valladolid',
                'avila',
                'salmanca',
                'segovia',
            );
            function getProvincias($provincias){
                foreach ($provincias as $key => $provincias){
                    echo "<li>".$provincias."</li>";
                }
            }
            getProvincias($provincias)
        ?>
           
    </body>
</html>