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
    $c = 0;
    $d = 0;
    $p = 0;
    $t = 0;


    for ($i=0; $i < $cantidad ; $i++) { 
        $palo = ["c", "d", "t", "p"];
        $palosacado = $palo[rand(0,3)];
        $carta = rand(1, 10);
    echo "<img style='width:150px' src='img/".$palosacado.$carta.".svg'>";

    if($palosacado == "c"){
      $c = $c +1;
    }elseif ($palosacado == "d") {
      $d = $d +1;
    }elseif ($palosacado == "t") {
      $t = $t +1;
    }elseif ($palosacado == "p") {
      $p = $p +1;
    }
    }
echo "<ul>";
    echo "<li>Corazones: ".$c."</li>";
    echo "<li>Diamantes: ".$d."</li>";
    echo "<li>Picas: ".$p."</li>";
    echo "<li>Treboles: ".$t."</li>";
echo "</ul>";
?>



<footer>
    <p>Adrian Burgos</p>
  </footer>
  </form>
</body>
</html>
