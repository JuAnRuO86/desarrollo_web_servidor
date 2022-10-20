<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios De La Primera Practica</title>
</head>
<body>
<div>
        <h2 id="ej1">Ejercicio 1</h2>
        <p>Crea un formulario que reciba dos números “a” y “b”.
        El formulario devolverá como respuesta los “a” primeros números primos empezando por “b”. </p>
    <form action="#ej1" method="post">
        <label>Número 1</label><br>
        <input type="text" name="numero1"><br><br>
        <label>Número 2</label><br>
        <input type="text" name="numero2">
        <input type="hidden" name="f" value="ej1">
        <input type="submit" value="Enviar"><br>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
             if($_POST["f"] == "ej1"){
                require './funciones/esPrimo.php';
                $num1 = (int)$_POST["numero1"];
                $num2 = (int)$_POST["numero2"];
                $i = $num2+1;
                do{ 

                    if(esPrimo($i)){
                        echo "$i ";
                        $num1=$num1-1;
                    }
                    $i++;
                }while($num1!=0);
                
                
             }
        }
    ?>
    </div>
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
            require './funciones/dniValido.php';
            $dni = $_POST["dni"];
            if(dniValido($dni)){
                echo "DNI Válido";
            }else{
                echo "DNI Inválido";
            }

        }
    ?>
    </div>
    <div>
    <ul>
        <h2> Ejercicio 3</h2>
        <p>  Genera de manera dinámica las tablas de multiplicar del 1 al 10. El resultado debe ser parecido al siguiente y 
             estar estructurado mediante tablas HTML.</p>
    <?php
        $multiplicando;
        $multiplicador;
        
        echo "<table text-align:center; border=10 style='background-color:grey'>";
        echo "<tr>  ";
        for ($filaTabla=1; $filaTabla<=5 ; $filaTabla++) { 
            echo "<td>Tabla del $filaTabla </td>"; 
        }
        echo "</tr>";
        echo "<tr>";
        for ($multiplicador=1; $multiplicador <=10 ; $multiplicador++) { 
            for ($multiplicando=01; $multiplicando <= 5; $multiplicando++) { 
                echo "<td> $multiplicando X $multiplicador =";
                echo ($multiplicando * $multiplicador);
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "<table text-align:center; border=10 style='background-color:orange'>>";
        echo "<tr>  ";
            for ($filaTabla=6; $filaTabla<=10 ; $filaTabla++) { 
                echo "<td>Tabla del $filaTabla </td>";
            }
            echo "</tr>";
        echo "<tr>";
        for ($multiplicador=1; $multiplicador <=10 ; $multiplicador++) { 
            for ($multiplicando=06; $multiplicando <= 10; $multiplicando++) { 
                echo "<td> $multiplicando X $multiplicador =";
                echo ($multiplicando * $multiplicador);
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

    ?>
</body>
</html>