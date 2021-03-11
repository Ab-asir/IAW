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
$cantidad = rand(3, 12);
for ($i=0; $i < $cantidad ; $i++) {
  $carta = rand(1, 10); 
  $palos = ["d", "c", "t", "p"];
  $palosacado = $palos [rand(0, 3)];
  echo "<img style='width:150px' src='img/".$palosacado.$carta.".svg'>";
}
$palonombre = [];
$palonombre ["c"] = "Corazones";
$palonombre ["d"] = "Diamantes";
$palonombre ["p"] = "Picas";
$palonombre ["t"] = "Treboles";
echo "<ul>";
foreach ($palonombre as $key => $value) {
  echo "<li>".$value."</li>";
}
echo "</ul>";
?>



  <footer>
    <p>Adrian Burgos</p>
  </footer>
  </form>
</body>
</html>
