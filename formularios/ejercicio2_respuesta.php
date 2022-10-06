<h1>Respuesta al formulario</h1>

<ul>
<?php

    $numero = $_POST["numero"]; //$_GET si el metodo que se usa es get y $_POST si el metodo que se usa es post

    for($i=1;$i<=$numero;$i++){
        echo "<li>$i</li>";
    }

    /*
            EJERCICIO 2
        Crear un formulario que reciba un número

        Habrá que crear una lista con tantos números como se haya indicado

        Numero = 3
        <ul>
            <li>1</li>
            <li>2</li>
            <li>3</li>
        </ul>
    */      

?>
</ul>