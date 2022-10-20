<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    
<div>
        <h2 id="ej2">Ejercicio 2</h2>
        <p>Crea un formulario que compruebe si un DNI es válido. </p>
    <form action="#ej2" method="post">
        <label>DNI</label><br>
        <input type="text" name="dni"><br><br>
        <input type="hidden" name="f" value="ej2">
        <input type="submit" value="Enviar"><br>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            require '../funciones/dniValido.php';
            $dni = $_POST["dni"];
            if(dniValido($dni)){
                echo "DNI Válido";
            }else{
                echo "DNI Inválido";
            }

        }
    ?>
    </div>

</body>
</html>