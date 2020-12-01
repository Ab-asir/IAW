<html>
    <head>
        <title>Array de las provincias de castilla y leon</title>
    </head>
    <body>
        <ol>
            <?php
                $provincias = array(
                    'Palencia',
                    'Burgos',
                    'Leon',
                    'Salamanca',
                    'Segovia',
                    'Zamora',
                    'Avila',
                    'Valladolid',
                    'Soria'
                );
            foreach ($provincias as $key => $provincia){
                echo "<li>".$provincia."</li>";
            }
            for ($i=0; $i <count($provincias) ; $i++ ){
                echo "<li>".$provincias."</li>";
            }
            
        ?>
    </ol>
    </body>
</html>