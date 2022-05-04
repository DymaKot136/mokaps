<?php
    if(!empty($_GET["num1"]) && !empty($_GET["num2"])){
        if(is_numeric($_GET["num1"]) && is_numeric($_GET["num2"])){
            echo $_GET["num1"] + $_GET["num2"];
        }else{
            echo "Un dels dos paràmetres passats no és numèric";
        }

    }else{
        echo "El fitxer requereix dos params: num1 i num2";
    }