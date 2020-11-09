<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <h1>Formulario Fiesta</h1>
        <form action="ejercicio1post.php" method="POST" enctype="multipart/form-data">
            <b>Nombre de la fiesta</b> : <input type="text" name="nombre"></br>
            <br>
            <b>Numero de personas</b> : <input type="number" name="numero"></br>
            <br>
            <b>Fiesta:</b> <input type="radio" name="fiesta" value="Privada"> Privada
                    <input type="radio"  name="fiesta" value="Publica"> Publica</br><br>
            <b>Musica:</b> 
                    <select name="musica">
                        <option >POP</option>
                        <option >ROCK</option>
                        <option >JAZZ</option>
                        <option >INDIE</option>            
                    </select></br>
                    <br>
            <b>Instalaciones:</b> 
                    <input type="checkbox" name="extra[]" value="Barras">Barras
                    <input type="checkbox" name="extra[]" value="Escenarios">Escenarios
                    <input type="checkbox" name="extra[]" value="Jardin">Jardin
                    <input type="checkbox" name="extra[]" value="Zona chill">Zona chill</br>
                    <br>
                    <b>Comentarios</b><br><textarea name="comentarios" cols="60" rows="10"></textarea><br>
                    <br>
                    <input type="submit" value="Enviar">    
        </form>        
    </body>
</html>