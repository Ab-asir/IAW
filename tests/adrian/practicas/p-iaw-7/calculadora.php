<html>
    <body>
        <h1>Formulario-Calculadora</h1>
        <form action="calculadora.php" method="POST"  enctype="multipart/form-data">
           Numero 1 <input type="number" name="input_a" required="required"><br>
           Numero 2 <input type="number" name="input_b" required="required"><br>
                    <input type="submit" name="sumar" value="sumar">
                    <input type="submit" name="restar" value="restar">
                    <input type="submit" name="multiplicar" value="multiplicar">
                    <input type="submit" name="dividir" value="dividir">
            
            <?php
                //Gestion de errores
                $errores = [];
                if (isset($_POST['sumar'])){
                    
                }
                if (isset($_POST['sumar'])){
                    $a=$_POST['input_a'];
                    $b=$_POST['input_b'];
                    $resultado= $a + $b;
                    echo "El valor de la suma de".$a." + ".$b." es " .$resultado;
                }
                if (isset($_POST['restar'])){
                    $a=$_POST['input_a'];
                    $b=$_POST['input_b'];
                    $resultado= $a - $b;
                    echo "El valor de la resta de".$a." - ".$b." es " .$resultado;
                }
                if (isset($_POST['multiplicar'])){
                    $a=$_POST['input_a'];
                    $b=$_POST['input_b'];
                    $resultado= $a * $b;
                    echo "El valor de la suma de".$a." x ".$b." es " .$resultado;
                }
                if (isset($_POST['dividir'])){
                    $a=$_POST['input_a'];
                    $b=$_POST['input_b'];
                    $resultado= $a / $b;
                    echo "El valor de la suma de".$a." : ".$b." es " .$resultado;
                }
            ?>

        </form>
    </body>
</html>