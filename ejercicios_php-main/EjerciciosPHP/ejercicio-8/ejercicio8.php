<?php
    session_start();

    if (!isset($_SESSION['productos'])) {
        $_SESSION['productos'] = [];
    }

    if (isset($_POST['productos_anteriores']) && !empty($_POST['productos_anteriores'])) {
        $_SESSION['productos'] = explode(",", $_POST['productos_anteriores']);
    }


    if (isset($_POST['producto']) && !empty($_POST['producto'])) {
        $_SESSION['productos'][] = htmlspecialchars($_POST['producto']);
    }


    if (isset($_POST['finalizar']) && $_POST['finalizar'] === "true") {
        echo "<h2>Lista completa de productos ingresados</h2>"; 
        echo "<ul>";
        foreach ($_SESSION['productos'] as $producto) {
            echo "<li>" . htmlspecialchars($producto) . "</li>";
        }
        echo "</ul>";
        
        echo "<a href='ejercicio8.html'>Volver a empezar</a>";
        

        session_destroy();
    } else {

        echo "<h2>Productos en la lista hasta ahora:</h2>";
        echo "<ul>";
        foreach ($_SESSION['productos'] as $producto) {
            echo "<li>" . htmlspecialchars($producto) . "</li>";
        }
        echo "</ul>"; 
        echo "<a href='ejercicio8.html'>Agregar más productos</a>";
    }
?>
