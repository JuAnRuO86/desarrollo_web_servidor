<?php

// Está formado por 8 dígitos seguidos de una letra (mayúscula o minúscula)
// La letra es válida (debes de investigar cómo averiguar si la letra es válida)


function dniValido($dni)
{
    
    
    for($i=0;$i<9;$i++){
    if($i>=0 && $i<8){ //hacer el is numeric al substring del dno(numeros)
        if(!is_numeric(substr($dni,0,8))){
            return false;
        }
    }else if($i==8){
        $letraNUM=(substr($dni,0,8)%23);
        if($letraNUM>=0 && $letraNUM<=22){
            $letra = match ($letraNUM){
                0 => 'T',
                1 => 'R',
                2 => 'W',
                3 => 'A',
                4 => 'G',
                5 => 'M',
                6 => 'Y',
                7 => 'F',
                8 => 'P',
                9 => 'D',
                10 => 'X',
                11 => 'B',
                12 => 'N',
                13 => 'J',
                14 => 'Z',
                15 => 'S',
                16 => 'Q',
                17 => 'V',
                18 => 'H',
                19 => 'L',
                20 => 'C',
                21 => 'K',
                22 => 'E',
            };
            if($letra[0]==strtoupper($dni[$i])){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
        return true;
    }else{
        return false;
    }
   }

}

?>
