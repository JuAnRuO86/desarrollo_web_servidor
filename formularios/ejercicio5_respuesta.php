
<h1>Respuesta al formulario</h1>

<ul>
<?php

    $numero = (int)$_POST["numero"]; 
    $exponente = (int)$_POST["exponente"]; 

    $cont=$numero;
    $i=1;
    while($i<=$exponente){
        if($i!=1){
        $numero=$numero*$cont;   
        } 
        $i++;
    }  

    echo "El resultado es $numero";

    /*
        Ejercicio 5
        Formulario que reciba dos números. Devolver el resultado de elevar el primero al segundo. 

    */      

?>
</ul>



