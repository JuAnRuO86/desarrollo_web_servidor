<?php
    //echo date ("l "); //Muestra el día actual
    //echo date ("j "); //Muestra el nº dia actual
    //echo date ("\of Y "); //Muestra el año actual


    /*
    Mostrar la fecha y hora en el mismo formato que el reloj del ordenador

    10:38
    06/10/2022

    */

    // echo date ("G:s");
    // echo "<br>";
    // echo date("d/m/Y");

    // echo "<br><br>";

    // echo date("h:i a");
    // echo "<br>";
    // echo date("d/m/Y");

    /*
        Usar la estructura switch para mostrar el dia actual en español

        "Hoy es jueves 6 de octubre de 2022"
    */
?>
<?php

    /*
        Usar la estructura switch para mostrar la 
        fecha actual en español. Por ejemplo: 

        "Hoy es jueves 6 de octubre de 2022"
    */

    $d = date("l");

    switch($d) {
        case "Monday": 
            $dia = "Lunes";
            break;
        case "Tuesday": 
            $dia = "Martes";
            break;
        case "Thursday":
            $dia = "Jueves";
            break;
    }

    $ndia = date("j");

    $m = date("F");

    switch($m) {
        case "January":
            $mes = "Enero";
            break;
        case "February":
            $mes = "Febrero";
            break;
        case "October":
            $mes = "Octubre";
            break;
    }

    $anho = date("Y");

    echo "Hoy es $dia $ndia de $mes de $anho";
    
?>