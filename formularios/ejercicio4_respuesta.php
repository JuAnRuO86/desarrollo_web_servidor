<h1>Respuesta al formulario</h1>
<?php

    $frase = $_POST["frase"]; //$_GET si el metodo que se usa es get y $_POST si el metodo que se usa es post
    $numero = (int) $_POST["numero"];

    echo "<h" . $numero . ">" . $frase . "</h" . $numero . ">";
    

    /*
        Crear un formulario que reciba una frase y un número del 1 al 6. Habrá que mostrar la frase
        en un encabezado de dicho número.

        Si introducimos "5" y "Hola mundo" se mostrará un encabezado <h5>Hola mundo</h5>
    */      

?>



