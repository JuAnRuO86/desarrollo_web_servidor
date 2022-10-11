<h1>Ejercicio 7</h1>

<?php

    $videojuego = $_POST["videojuego"];
    $consola = $_POST["consola"];
    $especial = "no";
    if(isset($_POST["especial"])){
        $especial = $_POST["especial"];
    }

    if($consola=="switch"){
        $precio=40;
    }else if($consola=="ps4"){
        $precio=60;
    }else if($consola=="ps5"){
        $precio=70;
    }

    if($especial=="si"){
        $precio=$precio+($precio*25)/100;
    }
    
    echo "$videojuego y costará $precio €";


    /*
            EJERCICIO 7

            Crear un formulario que reciba el nombre de un videojuego, su consola, y si es edición especial.

            Se mostrará por pantalla el nombre del juego junto a su precio. El precio será:

            40€ si es de la consola Switch, 60€ si es de PS4, y 70€ si es de PS5. La consola se elegirá
            mediante un campo select.

            Si el juego es edición especial, valdrá un 25% más. La edición especial se marcará con un
            checkbox. 
    */      

?>








