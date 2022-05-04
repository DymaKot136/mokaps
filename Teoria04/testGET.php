<?php
    echo sizeof($_GET);
    echo "<br>";
    print_r($_GET);
    echo "<br>";
    
    if(!empty($_GET["nom"])){
        echo "Hola " . $_GET["nom"];
    }
    else if(empty($_GET["nom"])){
        echo 'empty($_GET["nom"]) == TRUE';
        if(isset($_GET["nom"])){
            echo ' i isset($_GET["nom"]) == TRUE';
        }
        else{
            echo ' i isset($_GET["nom"]) == FALSE';
        }
    }
