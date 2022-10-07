<h1>Respuesta al formulario</h1>

<?php

    $nombre = $_POST["nombre"]; //$_GET si el metodo que se usa es get y $_POST si el metodo que se usa es post
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

    

    /*
        Crear un formulario que reciba el nombre y la edad de una persona y
        muestre por pantalla si es menor de edad, es adulta, o está jubilada en función
        a su edad. Además:
        - Convertir la edad a un número entero
        - Convertir el nombre introducido a minúsculas salvo la primera letra, que será mayúscula
    */      

?>