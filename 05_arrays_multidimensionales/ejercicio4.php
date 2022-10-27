<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    
<?php
    $series = [
        ["Peaky Blinders", "Netflix", 6],
        ["Vikingos", "Netflix", 6],
        ["La casa de papel", "Netflix", 3],
        ["Juego de tronos", "HBO", 8],
        ["Señor de los anillos", "HBO", 1],
        ["Spiderman", "Disney Plus", 1],
    ];

?>

<table>
    <tr>
        <th>Título</th>
        <th>Plataformas</th>
        <th>Temporadas</th>
    </tr>
    <?php
    foreach($series as $serie){
    ?>
        <tr>
            <td><?php echo $serie[0] ?></td>
            <td><?php echo $serie[1] ?></td>
            <td><?php echo $serie[2] ?></td>
        </tr>    
    
    <?php
    }
    ?>
</table>

<table>
    <tr>
        <th>Título</th>
        <th>Plataformas</th>
        <th>Temporadas</th>
    </tr>
    <?php
    $temporada=array_column($series,2);
    array_multisort($temporada,SORT_ASC,$series);
    foreach($series as $serie){
        list($titulo,$plataforma,$temporada) = $serie;
    ?>
        <tr>
            <td><?php echo $titulo ?></td>
            <td><?php echo $plataforma ?></td>
            <td><?php echo $temporada ?></td>
        </tr>    
    
    <?php
    }
    ?>
</table>

<table>
    <tr>
        <th>Título</th>
        <th>Plataformas</th>
        <th>Temporadas</th>
    </tr>
    <?php
    $plataforma=array_column($series,1);
    $titulo=array_column($series,0);
    array_multisort($plataforma,SORT_ASC,$titulo,SORT_ASC,$series);
    foreach($series as $serie){
        list($titulo,$plataforma,$temporada) = $serie;
    ?>
        <tr>
            <td><?php echo $titulo ?></td>
            <td><?php echo $plataforma ?></td>
            <td><?php echo $temporada ?></td>
        </tr>    
    
    <?php
    }
    ?>
</table>


</body>
</html>