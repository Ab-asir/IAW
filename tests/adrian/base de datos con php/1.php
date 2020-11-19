<html>
    <head>
        <title>Script de bases de datos</title>
    </head>
    <body>
        <?php
            //https://www.hostinger.es/tutoriales/conectar-php-mysql/

                $servername = "localhost";
                $database = "world";
                $username = "test";
                $password = "test";
            
            //Create connection
                $conn = mysqli_connect($servername, $username, $password, $database);
                $query = "SELECT * from city   limit 10";

                    if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }else{
                            echo "se ha conectado de forma satisfactoria";
                        }
                
                    if ($resultado = $conn->query($query)) {
                            echo "<ol>";
                            while( $row = $resultado->fetch_array() )
                            {
                                echo "<li> La ciudad ". $row['Name'] . " con codigo " . $row['CountryCode'] . " pertenece al distrito " . $row['District']. "</li>";
                                echo "<br/>";   
                            }               
                            echo "</ol>";
                        } 
            /* liberar el conjunto de resultados */
                    $resultado->close();
                    
            echo "Connected successfully";
            mysqli_close($conn);
        ?>
    </body>
</html>