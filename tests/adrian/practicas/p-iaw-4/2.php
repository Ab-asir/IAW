<html>
    <head>
        <title>Php</title>   
    </head>
    <body>
        <?php

            $a = mt_rand(0,10);
            $b = mt_rand(0,10);

            echo "<br>";
            echo "<br>";
            echo "El valor de la variable <b>a</b> es: <b>$a</b>";
            echo "<br>";
            echo "El valor de la variable <b>b</b> es: <b>$b</b>";
            echo "<br>";

            function getGratherValue($a, $b){
                    if($a > $b){
                        echo "$a es mayor que $b";
                    }else{
                        echo "$b es mayor que $a";
                    } 
                }

            getGratherValue($a, $b)
            
        ?>
    </body>
</html>