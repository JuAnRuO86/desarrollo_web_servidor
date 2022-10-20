<!-- Un número primo es aquel que sólo es divisible entre sí mismo y 1. Crea un formulario que reciba dos números “a” y “b”.
El formulario devolverá como respuesta los “a” primeros números primos empezando por “b”. 
Ej.: Si a=3 y b=4, se devolverán los tres primeros números primos empezando por 4. Es decir, 5, 7 y 11. 
 -->

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
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
            // if($_POST["f"] == "ej1"){
                require '../funciones/esPrimo.php';
                $num1 = $_POST["numero1"];
                $num2 = $_POST["numero2"];
                $i = $num2+1;
                do{ 

                    if(esPrimo($i)){
                        echo "$i ";
                        $num1=$num1-1;
                    }
                    $i++;
                }while($num1!=0);
                
                
            // }
        }
    ?>
    </div>

 </body>
 </html>