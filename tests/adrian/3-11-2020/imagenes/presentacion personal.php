<html>

<head>
    <style>
        body{
            background-color: blue;
        }
        h1{
            text-align: center;
            color: white;
            font-size: 30px;
        }
        p{
            font-family: verdana;
            font-size: 15px;
            color: white;
        }
        form{
            border: red 5px solid;
        }
    </style>
</head>

<body>
    <h1>Presentacion personal</h1>
    <br>
  <?php
  $Nombre = "Adrian";
  $Apellidos = "Burgos Sastre"; 
  $edad ="19";
  $estudios = "bachiller de ciencias";
  $foto_url="<img src= https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRwJDInaXCz5C2ahev7Lqg-dOW1gsT7Lvmk6A&usqp=CAU>";
 
  echo "<p>Nombre : $Nombre</p>";
  echo "<p>Apellidos : $Apellidos</p>";
  echo "<p>Edad : $edad</p>";
  echo "<p>Estudios: $estudios</p>";
  echo "<p> $foto_url</p>";


  ?>
  <form action="contacto.php" method="post">
  <p>Nº de telefono: <input type="number" name="telefono" min="9"></p>
  <p>Correo electronico: <input type="email" name="correo" size="40"></p>
  <p>
    <input type="submit" value="Enviar">
    <input type="reset" value="Borrar">
  </p>
</form>
</body>

</html>