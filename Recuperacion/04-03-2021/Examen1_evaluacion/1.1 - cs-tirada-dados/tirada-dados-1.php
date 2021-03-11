<?php
/**
 * Tirada dados - tirada-dados-1.php
 *
 * @author Escriba aquí su nombre
 */

print "<!-- Ejercicio incompleto -->\n";

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Tirada dados (Formulario).
    Con sesiones.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Tirada de dados</h1>
  
<?php

$dado1 = rand(1, 6);
$dado2 = rand(1, 6);
$dado3 = rand(1, 6);
$dado4 = rand(1, 6);
$dado5 = rand(1, 6);

$total = $dado1 + $dado2 +$dado3 + $dado4 +$dado5;
?>
<p>
            <img src=<?php echo "img/".$dado1.".svg";?> alt="4" width="140" height="140">
            <img src=<?php echo "img/".$dado2.".svg";?> alt="4" width="140" height="140">
            <img src=<?php echo "img/".$dado3.".svg";?> alt="4" width="140" height="140">
            <img src=<?php echo "img/".$dado4.".svg";?> alt="4" width="140" height="140">
            <img src=<?php echo "img/".$dado5.".svg";?> alt="4" width="140" height="140">
</p>

<?php
echo "<b>total</b> = " .$total."<br>";
echo "<br>";
echo "<a href='tirada-dados-1.php'>Volver a tirar</a>";
?>

<footer>
  <p>Escriba aquí su nombre</p>
</footer>
</body>
</html>
