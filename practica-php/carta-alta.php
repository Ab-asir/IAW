<?php
/**
 * Escriba un programa que cada vez que se ejecute muestre tres carta entre 1 y 10,
 * al azar, e indique el valor más alto.
 *
 * El valor más alto se puede obtener con la función max().
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
    La carta más alta.
    Variables. Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  

  <p>Actualice la página para mostrar un nuevo trío de cartas.</p>

<?php
  $carta1 = rand(1,10);
  $carta2 = rand(1,10);
  $carta3 = rand(1,10);
  $carta_alta = max($carta1, $carta2, $carta3);

  $imagen1 = "img/c".$carta1.".svg";
  $imagen2 = "img/c".$carta2.".svg";
  $imagen3 = "img/c".$carta3.".svg";
  $carta_alta = "img/c".$carta_alta.".svg";
print "  <p class=\"aviso\">Ejercicio incompleto</p>\n";

?>
  
  <img src="<?php echo $imagen1; ?>">
  <img src="<?php echo $imagen2; ?>">
  <img src="<?php echo $imagen3; ?>">
  <h1>La carta mas alta es</h1>
  <img src="<?php echo $carta_alta; ?>">
  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
