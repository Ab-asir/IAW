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
  
<?php
    $cantidad = rand(3, 12);
    $palo = ["c", "d", "t", "p"];
    $palonombre = [];
    $palonombre ["c"] = "Corazon";
    $palonombre ["d"] = "Diamante";
    $palonombre ["t"] = "Trebol";
    $palonombre ["p"] = "Picas";

    for ($i=0; $i < $cantidad ; $i++) { 
        $palosacado = $palo[rand(0,3)];
        $carta = rand(1, 10);
    echo "<img style='width:150px' src='img/".$palosacado.$carta.".svg'>";
    foreach ($palosacado as $key => $value) {
        echo $value;
    }
    }
    
    
?>
<footer>
    <p>Adrian Burgos</p>
  </footer>
  </form>
</body>
</html>
