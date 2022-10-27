<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>


<?php
    $num=[];
    for($i=0;$i<10;$i++){
        $num=rand(0,100);
        
    }    
?>

<h2>Números ordenados de mayor a menor</h2>
<ul>
    <?php
    for($i=0;$i < count($numeros);$i++){
        echo "<li>" . $numeros[$i] . "</li>";
    }
    ?>
</ul>


<h2>Números ordenados de menor a mayor</h2>
<ul>
    <?php
    sort($numeros);
    for($i=0; $i< count($numeros); $i++){
        echo "<li>" . $numeros[$i] . "</li>";
    }
    ?>
</ul>


</body>
</html>