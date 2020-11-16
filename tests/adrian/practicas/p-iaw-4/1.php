<html>
    <head>
        <title>Php</title>   
    </head>
    <body>
        <?php
             $a = mt_rand(0,5);
             $b = mt_rand(0,5);

                 if($a > $b){
                    echo "$a es mayor que $b";
                 }else{
                     echo "$b es mayor que $a";
                 }
            echo "<br>";
            echo "<br>";
            echo "Este es el numero de la variable a: $a";
            echo "<br>";
            echo " Este es el numero de la variable b: $b";
        ?>
    </body>
</html>