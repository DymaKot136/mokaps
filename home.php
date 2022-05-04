<?php
    session_start();
if(!isset($_SESSION["nomUsuari"])){
    header("Location:./іndex.php");
  }

else{
    $nomUsuari = $_SESSION["nomUsuari"];
}
?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/home.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    </head>

    <body>
        <nav>   
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>         
            <a href="../html/home.php" class="home">
                <h1 class="title" data-text="EduHacks"><span>EduHacks</span></h1>
            </a>
            <ul>
                <li><a href="../html/logoutPage.php">Perfil</a></li>
                <li><a href="../html/ctf.php">Crear CTFS</a></li>
                <li><a href="../html/ctf.php">Puntuació</a></li>
            </ul>    
        </nav>
        <section class="principio">
            <h2>Quina alegria veure't!</h2>
            <br><br>
        <?php
            echo "<br><h1 data-text='$nomUsuari'><span>$nomUsuari</span></h1>";    
        ?>
            <br><br>
        </section>
        <div class="separar">
            <h1 class="titol2">Lets Go to capture some flags! </h1>
        </div>
        
       
    </body>

</html>