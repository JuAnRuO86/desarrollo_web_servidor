<?php
    ECHO "[";
    $string = "";
    for ($i = 3; $i <= 30; $i+=3){
        $string = $string . $i . ","; // El . concatena
        
    }
    $string = substr($string, 0, strlen($string)-1);
    echo $string;
    echo "]";



?>