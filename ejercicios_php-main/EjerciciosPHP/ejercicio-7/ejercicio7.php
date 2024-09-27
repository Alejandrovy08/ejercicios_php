<?php
    $num = $_GET['num'];
    $resultado = 0;
    echo "<h2>Tabla del $num</h2>";
    for($i = 1 ; $i <= 10 ; $i++){
        $resultado = $num * $i;
        echo "$num * $i = $resultado <br>";
    }

?>