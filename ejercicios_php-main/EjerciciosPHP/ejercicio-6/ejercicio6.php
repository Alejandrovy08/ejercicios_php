<?php
    $num = $_GET['num'];
    $suma = 0;

    for ($i = 1 ; $i <= $num ; $i++){
        $suma += $i; 
    }
    echo "La suma de todos los números del 0 hasta $num es $suma";
?>