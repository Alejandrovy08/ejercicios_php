<?php
    $dia = $_GET['num'];

    if($dia <= 7 && $dia >= 1){
        switch($dia){
            case 1:
                echo "Es Lunes";
            break;
            case 2:
                echo "Es Martes";
            break;
            case 3:
                echo "Es Miércoles";
            break;
            case 4:
                echo "Es Jueves";
            break;
            case 5:
                echo "Es Viernes";
            break;
            case 6:
                echo "Es Sábado";
            break;  
            case 7:
                echo "Es Domingo";
            break;  
        }
    }else{
        echo "Has introducido un número incorrecto";
    }

?>