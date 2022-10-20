<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div>
        <h2 id="ej3">Ejercicio 3</h2><br>
        <h3>TABLAS DE MULTIPLICAR</h3>
        <p>Genera de manera dinámica las tablas de multiplicar del 1 al 10. </p>
    <form action="#ej3" method="post">
        <input type="hidden" name="f" value="ej3">
    </form>
    <?php
            
            $numero=1;               
            do{
                echo "<table>";
                echo "<tr></tr>";
                for ($i = 1; $i <= 10; $i++){
                    $resultado=$numero*$i;
                    if($i==1){
                        echo "<th><td>Tabla</td><td>del</td><td>$numero</td></th>";
                    }
                    echo "<tr><td></td>";
                    echo "<td>$numero x $i </td>";
                    echo "<td>" . $numero * $i . "</td>";
                    echo "</tr>";
                }
                echo "</table><br>";
                $numero++;
            }while($numero<11);
            
        
    ?>
    </div>
</body>
</html>