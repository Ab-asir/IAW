<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php
  //Generar un valor aleatorio entre 1 y 3. 

  $valor = rand(1,3);
  echo "El valor generado es $valor<br>";
  if ($valor ==1) {
    echo "es uno";
  } else {
    if ($valor == 2) {
      echo "El numero es $valor";
    } else {
        echo "tres";
    }
  }
  ?>

</body>

</html>