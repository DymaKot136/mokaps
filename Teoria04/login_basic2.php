<?php   
    if($_POST['usuari']=='admin' && $_POST['pass']=='1234'){
        header("Location: benvinguda.html");
    }else{
        header("Location: error.html");
    }