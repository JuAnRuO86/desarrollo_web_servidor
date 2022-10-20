<?php

// Un número primo es aquel que sólo es divisible entre sí mismo y 1. Crea un formulario que reciba dos números “a” y “b”.
// El formulario devolverá como respuesta los “a” primeros números primos empezando por “b”. 
// Ej.: Si a=3 y b=4, se devolverán los tres primeros números primos empezando por 4. Es decir, 5, 7 y 11. 

function esPrimo($numero)
{
    
    for ($i = 2; $i < $numero; $i++) {
        
        if (($numero % $i) == 0) {
            
            return false;

        }

    }

    return true;
}

?>