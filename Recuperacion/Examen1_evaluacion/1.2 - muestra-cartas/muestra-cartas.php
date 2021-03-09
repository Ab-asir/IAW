<?php
/**
 * Muestra cartas - muestra-cartas.php
 *
 * @author Escriba aquí su nombre
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Muestra cartas.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Muestra cartas</h1>

  <form action="muestra-cartas.php" method="POST"> 
    Eliga un numero de cartas (3 y 12)<input type="number" name="cantidad"><br>
    Enviar<input type="submit" name="enviar">
<?php

if (isset($_POST['enviar'])){

$cantidad = $_POST['cantidad'];
$palos = ["d", "c", "t", "p"];


}
?>
<?php
  for ($i = 1; $i <= $cantidad $i++) { 
    $palosacado = $palos [rand(0, 3)];
    $carta = rand(1, 10);
    echo '<img src="img/'.$palosacado.$carta.'.svg" alt="8" width="100">';
  }
?>
  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
  </form>
</body>
</html>
