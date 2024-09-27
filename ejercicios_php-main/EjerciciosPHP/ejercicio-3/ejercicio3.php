<?php
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $num3 = $_GET["num3"];

    if($num1 > $num2 && $num2 > $num3){
        echo "El número más alto más alto es $num1";
    }else if ($num1 > $num3 && $num3 > $num2){
        echo "El número más alto más alto es $num1";
    }else if($num2 > $num1 && $num1 > $num3){
        echo "El número más alto más alto es $num2";
    }else if($num2 > $num3 && $num3 > $num1){
        echo "El número más alto más alto es $num2";
    }else if($num3 > $num2 && $num2 > $num1){
        echo "El número más alto más alto es $num3";
    }
    else if($num3 > $num1 && $num1 > $num2){
        echo "El número más alto más alto es $num3";
    }else{
        echo "Todos los números introducidos son iguales";
    }
?>