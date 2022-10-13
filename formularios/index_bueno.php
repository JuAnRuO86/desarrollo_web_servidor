<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de clase de formularios</title>
</head>
<body>
<div>

    <h1>Ejercicios de clase de formularios</h1>
        <h2>Ejercicio 1</h2>
        <p>Formulario que reciba un nombre y una edad y los muestre por pantalla</p>
    <form action="" method="post">
        <label>Nombre</label><br>
        <input type="text" name="nombre"><br><br>
        <label>Edad</label><br>
        <input type="text" name="edad"><br><br>
        <input type="hidden" name="f" value="ej1">
        <input type="submit" value="Enviar"> 
    </form>
    <?php
        if($SERVER["REQUEST_METHOD"] == "POST"){
            if($_POST["f"] == "ej1"){
                $nombre = $_POST["nombre"]; 
                $edad = $_POST["edad"];

                echo "<p>$nombre</p>";
                echo "<p>$edad</p>";
            }
        }
    ?>
</div>

<div>
        <h2>Ejercicio 2</h2>
        <p>Crear un formulario que reciba un número. Generar una lista dinámicamente con tantos elementos como se haya indicado</p>
    <form action="" method="post">
        <label>Número</label><br>
        <input type="text" name="numero"><br><br>
        <input type="hidden" name="f" value="ej2">
        <input type="submit" value="Enviar"> 
    </form>
    <?php
        if($SERVER["REQUEST_METHOD"] == "POST"){
            if($_POST["f"] == "ej2"){
                $numero = $_POST["numero"];

                for($i=1;$i<=$numero;$i++){
                    echo "<li>$i</li>";
                }
            }
        }
    ?>
</div>

    <div>
        <h2>Ejercicio 3</h2>
        <p>Crear un formulario que reciba el nombre y la edad de una persona y muestre por pantalla si es menor de edad, es adulta, o está jubilada en función a su edad</p>
    <form action="ejercicio3_respuesta.php" method="post">
        <label>Nombre</label><br>
        <input type="text" name="nombre"><br><br>
        <label>Edad</label><br>
        <input type="text" name="edad"><br><br>
        <input type="hidden" name="f" value="ej3">
        <input type="submit" value="Enviar"> 
    </form>
    <?php
        if($SERVER["REQUEST_METHOD"] == "POST"){
            if($_POST["f"] == "ej3"){
                $nombre = $_POST["nombre"]; 
                $edad = (int) $_POST["edad"];
                $nombre=strtolower($nombre);
                $nombre=ucfirst($nombre);

                if ($edad<18) {
                    echo "$nombre es menor de edad";
                }else if($edad>65){
                    echo "$nombre es una persona jubilada";
                }else{
                    echo "$nombre es una persona adulta";
                }
            }
        }
    ?>
    </div>

    <div>
        <h2>Ejercicio 4</h2>
        <p>Crear un formulario que reciba una frase y un número del 1 al 6. Habrá que mostrar la frase en un encabezado de dicho número</p>
        <form action="" method="post">
        <label>Frase</label><br>
        <input type="text" name="frase"><br><br>
        <label>Número</label><br>
        <input type="text" name="numero"><br><br>
        <input type="hidden" name="f" value="ej4">
        <input type="submit" value="Enviar"> 
    </form>
    <?php
        if($SERVER["REQUEST_METHOD"] == "POST"){
            if($_POST["f"] == "ej4"){
               
                $frase = $_POST["frase"];
                $numero = (int) $_POST["numero"];
            
                echo "<h" . $numero . ">" . $frase . "</h" . $numero . ">";
            }
        }
    ?>
    </div>

    <div>
        <h2>Ejercicio 5</h2>
        <p>-.Enunciado.-</p>
    <form action="" method="post">
        <label>Número</label><br>
        <input type="text" name="numero"><br><br>
        <label>Exponente</label><br>
        <input type="text" name="exponente">
        <input type="hidden" name="f" value="ej5">
        <input type="submit" value="Enviar"> 
    </form>
    <?php
        if($SERVER["REQUEST_METHOD"] == "POST"){
            if($_POST["f"] == "ej5"){
                $numero = (int)$_POST["numero"]; 
                $exponente = (int)$_POST["exponente"]; 
            
                $cont=$numero;
                $i=1;
                while($i<=$exponente){
                    if($i!=1){
                    $numero=$numero*$cont;   
                    } 
                    $i++;
                }  
            
                echo "El resultado es $numero";
            }
        }
    ?>
    </div>

    <div>
        <h2>Ejercicio 6</h2>
        <p>Crear un formulario que reciba un número. Devolver en factorial</p>
    <form action="" method="post">
        <label>Número</label><br>
        <input type="text" name="numero">
        <input type="hidden" name="f" value="ej6">
        <input type="submit" value="Enviar"> 
    </form>
    <?php
        if($SERVER["REQUEST_METHOD"] == "POST"){
            if($_POST["f"] == "ej6"){
                $numero = $_GET["numero"];

                $resultado = 1;

                if($numero >=1){
                    for ($i = 1; $i <= $numero; $i++){
                        $resultado = $resultado * $i;
                        // Sintaxix alternativa: $resultado *= $i;
                    }
                
                echo "<p>Resultado</p>";
                }else{
                    echo "<p>El número debe ser igual o más que 1</p>";
                }
            }
        }
    ?>

    </div>

    <div>
        <h2>Ejercicio 7</h2>
        <p>.-Enunciado-.</p>
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
        <input type="hidden" name="f" value="ej7">
        <input type="submit" value="Enviar"> 
    </form>
    <?php
        if($SERVER["REQUEST_METHOD"] == "POST"){
            if($_POST["f"] == "ej7"){
                $videojuego = $_POST["videojuego"];
                $consola = $_POST["consola"];
                $especial = "no";
                if(isset($_POST["especial"])){
                    $especial = $_POST["especial"];
                }

                if($consola=="switch"){
                    $precio=40;
                }else if($consola=="ps4"){
                    $precio=60;
                }else if($consola=="ps5"){
                    $precio=70;
                }

                if($especial=="si"){
                    $precio=$precio+($precio*25)/100;
                }
                
                echo "$videojuego y costará $precio €";
            }
        }
    ?>
    </div>
</body>
</html>


