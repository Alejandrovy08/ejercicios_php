<?php

    $distancia = $_POST['distancia'];
    $velocidad = $_POST['velocidad'];

    if(isset($distancia) && isset($distancia)){
        if(is_numeric($distancia) && is_numeric($velocidad)){
            $tiempo = $distancia / $velocidad            
        }else{
            echo "No es número"
        }
        
    }

    echo "El tiempo total es $tiempo";

?>