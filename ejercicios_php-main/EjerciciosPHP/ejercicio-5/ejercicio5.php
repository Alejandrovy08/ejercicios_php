<?php
    $edad = $_GET['edad'];
        if($edad < 12){
            echo "Eres un infante";
        }else if($edad >= 12 && $edad <= 17){
            echo "Eres un adolescente";
        }else if($edad >= 18 &&  $edad <= 60){
            echo "Eres un adulto";
        }else if($edad > 60){
            echo "Eres un anciano";
        }else{
            echo "Es imposible que tengas una edad negativa";
        }
   
?>