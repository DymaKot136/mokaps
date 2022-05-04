<?php
    $mida = $_FILES["fitxer"]["size"];
    //Miro si la mida del fitxer és > 1MB
    if($mida > 1 * 1024 * 1024){
        echo "<br>Fitxer massa gran (>1MB)";
        return;
    }
    echo "Nom del fitxer: " . $_FILES["fitxer"]["name"];
    echo "<br>";
    echo "Nom temporal del fitxer: " . $_FILES["fitxer"]["tmp_name"];
    $res = move_uploaded_file($_FILES["fitxer"]["tmp_name"], "pujades/" . $_FILES["fitxer"]["name"]);
    if($res){
        echo "<br>Fitxer desat";
        $fileName = "C:\Users\dymab\OneDrive - Educem\Escritorio\HelloWorld\EduHacks\Teoria04\pujades\Examen_WIFI.pdf";
        if (file_exists($fileName)){
            echo "<br>I el fitxer existeix!";

            rename($fileName,"C:\Users\dymab\OneDrive - Educem\Escritorio\HelloWorld\EduHacks\Teoria04\pujades\Merda.pdf");
        }
        else{
            echo "</br>El fitxer no existeix!";
        }
    }else{
        echo "<br>Error";

    }
