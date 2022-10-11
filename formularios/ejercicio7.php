<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"></meta>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"></meta>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
    <title>Ejercicio 7</title>
</head>
<body>
<div>
 
 <form action="ejercicio7_respuesta.php" method="post">
     <label>Videojuego</label>
     <input type="text" name="videojuego"><br><br>
     <label>Consolas:</label>
     <select name="consola">
     <option value="switch">Switch</option>
     <option value="ps4">PS4</option>
     <option value="ps5">PS5</option>
     </select><br><br>
     <label>¿Edición Especial?</label>
     <input type="checkbox" name="especial" value="si"><br><br>
     
     <input type="submit" value="Enviar"> 

 </form>
 
 </div>

 
 <a href="index.php">Volver</a>
</body>
</html>