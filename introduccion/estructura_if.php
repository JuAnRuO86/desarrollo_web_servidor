<?php

/*
        Crear una variable $alumno y una variable $nota
        Mostrar por pantalla el nombre del alumno junto
        a su calificación. Su calificación será:
            - Suspenso si es menor que 5
            - Aprobado si está entre 5 y 6
            - Notable si está entre 7 y 8
            - Sobresaliente si está entre 9 y 10
    */


    $alumno = "Pepe Luis";
    $nota = 6;

    if($nota >=0 && $nota < 5){
        echo "$alumno ha suspendido";
    }else if($nota >=5 && $nota < 7){
        echo "$alumno ha aprobado";
    }else if ($nota>=7 && $nota < 9){
        echo "$alumno ha sacado notable";
    }else if($nota>=9 && $nota <= 10){
        echo "$alumno ha sacado sobresaliente";
    }else{
        echo "<p>La nota no es válida</p>";
    }


    /*
    Credenciales correctas:
    $usuario = "admin"
    $contraseña = "123"
    
    Si $usuario y $contrasena son correctos, mostrar el mensaje
    "Sesión iniciada"

    Si $usuario y $contrasena son erróneos,
    mostrar los mensajes adecuados
    
    Hay 3 casos
    */

    $usuario = "admin";
    $contrasena = "123";

    id ($usuario == "admin" && $contrasena == "123"){
        echo "<p>Sesión iniciada</p>"
    }else if($usuario == "admin" && $contrasena != "123"){
        echo "<p>Contraseña errónea</p>";
    }




?>

