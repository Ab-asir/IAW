<?php
/**
 * Primeras páginas. Sin formularios. 8 - primeras-paginas-8.php
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
    Emoticono.
    Primeras páginas. Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Emoticono</h1>

  <p>Actualice la página para mostrar otro emoticono.</p>

<?php

$emoticono = rand(128512, 128586);
$tamaño = rand(200, 800);

?>
<p style="font-size:<?php echo $tamaño."%";?>"><?php echo "&#".$emoticono;?></p>
  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
