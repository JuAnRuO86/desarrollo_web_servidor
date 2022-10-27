<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    
<?php

    $estudiantes=[
        ["Roberto",rand(0,10)],
        ["Miriam",rand(0,10)],
        ["Leonor",rand(0,10)],
        ["Elena",rand(0,10)],
        ["Juan",rand(0,10)],
    ];

    //hacer funcion calificacion y llamarlo al final y mostrarlo
    function calificacion($nota){
        $calificacion_final = match($nota){
            0,1,2,3,4 => "suspenso",
            5 => "suficiente",
            6 => "bien",
            7,8 => "notable",
            9,10 => "sobresaliente",
            default => "nota no válida"
        };
        return $calificacion_final;
    }
   

?>
<table>
    <tr>
        <th>Nombre</th>
        <th>Nota</th>
        <th>Calificación Final</th>
    </tr>
    <?php
    $nombre=array_column($estudiantes,0);
    array_multisort($nombre,SORT_ASC,$estudiantes);
    foreach($estudiantes as $estudiante){
        list($nombre,$nota) = $estudiante;
    ?>
        <tr>
            <td><?php echo $nombre ?></td>
            <td><?php echo $nota ?></td>
            <td><?php echo calificacion($nota) ?></td>
        </tr>    
    
    <?php
    }
    ?>
</table>




</body>
</html>