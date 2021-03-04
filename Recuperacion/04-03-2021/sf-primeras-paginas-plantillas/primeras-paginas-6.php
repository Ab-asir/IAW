<?php
/**
 * Primeras páginas. Sin formularios. 6 - primeras-paginas-6.php
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
    Código de color.
    Primeras páginas. Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Código de color</h1>

  

<?php

$color1 = rand(0,255);
$color2 = rand(0,255);
$color3 = rand(0,255);
echo "rgb(".$color1.",".$color2.",".$color3.")";

?>
<p style="color:rgb<?php echo "(".$color1.",".$color2.",".$color3.");"?>">Actualice la página para mostrar un nuevo valor.</p>
  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
