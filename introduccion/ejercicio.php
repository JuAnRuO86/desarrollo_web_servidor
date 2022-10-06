<h1>Ejercicio</h1>

<ul>
<?php
    echo "<p>Esto funciona<?p>";

    /*  EJERCICIO 1
    Vamos a generar 10 números aleatorios entre 1 y 10

    Mostrar dichos números indicando si son pares o impares

    Mostrarlos en una lista
    */

    //  1º Función rand
    //  2º Comprobar si es par o impar
    //  3º Imprimirlo en la lista

     /*
    $num=1;
    $i=1;

    for($i = 1; $i <=10; $i++){
        $num=rand(1,10);
        if($num%2==0){
            echo "<li> El número $num es par </li>";
        }else{
            echo "<li> El número $num es impar </li>";
        }
    $i++;
    }
    */
    /*
    for($i = 1; $i <=10; $i++):
        $num=rand(1,10);
        if($num%2==0):
            echo "<li> El número $num es par </li>";
        else:
            echo "<li> El número $num es impar </li>";
        endif;
    $i++;
    endfor;
    */

    /*  EJERCICIO 2
        
        Imprimir los múltiplos de 3 entre 0 y 30 en "formato array"

        [3, 6, 9, ... 30]
    */

    echo "[";
    for ($i = 3; $i <= 30; $i+=3) {
        if ($i < 30) {
            echo "$i,";
        } else {
            echo "$i";
        }
        
    }
    echo "]";






?>
</ul>


