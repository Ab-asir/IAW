<html>

<head>
    <h1>Presentacion personal</h1>
</head>

<body>
  <?php
  $Nombre = "Adrian";
  $Apellidos = "Burgos Sastre"; 
  $edad ="19"; 
  $foto_url =; 
  echo "<p>Nombre : $Nombre</p>";
  echo "<p>Apellidos : $Apellidos</p>";
  echo "<p>Edad : $Edad</p>";


  ?>
  <form action="contacto.php" method="post">
  <p>Nº de telefono: <input type="number" name="telefono" min="9"></p>
  <p>Correo electronico: <input type="email" name="correo" size="40"></p>
  <p>Sexo:
    <input type="radio" name="hm" value="h"> Hombre
    <input type="radio" name="hm" value="m"> Mujer
  </p>
  <p>
    <input type="submit" value="Enviar">
    <input type="reset" value="Borrar">
  </p>
</form>
</body>

</html>