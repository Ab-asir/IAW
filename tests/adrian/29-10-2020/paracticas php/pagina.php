<html>

<head>
  <title>Mi primera vez en php</title>
</head>

<body>
  <?php
  $num = rand(1,100);
  echo $num;
  echo "<br>";
  if ($num <= 50) {
    echo "El numero es menor o igual a 50.";
  } else {
    echo "El numero es mayor que 50.";
  }
  ?>
</body>

</html>