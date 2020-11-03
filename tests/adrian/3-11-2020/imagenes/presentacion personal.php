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
  $foto_url="C:\xampp\htdocs\IAW\tests\adrian\3-11-2020\imagenes\foto.jpeg.jpg";
 
  echo "<p>Nombre : $Nombre</p>";
  echo "<p>Apellidos : $Apellidos</p>";
  echo "<p>Edad : $edad</p>";
  echo "<p>Foto : $foto_url</p>";


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