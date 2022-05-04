<?php

    include("../php/connectDB.php");

    $ConsultadarrerCtf = "SELECT `fileName`,`filePath` FROM `ctfs` WHERE `title` = 'Una prova molt bona (o no..)';";
    $darrerCtf = $db->prepare($ConsultadarrerCtf);
    $darrerCtf->execute();
    $CTF = $darrerCtf->fetch(PDO::FETCH_ASSOC);

    $nomOriginal = $CTF['fileName'];
    $nomCod = $CTF['filePath'];

    $ruta="C:/Users/dymab/OneDrive - Educem/Escritorio/HelloWorld/EduHacks/uploads/";

    $nomAcanviar = $ruta.$nomOriginal;
    $nomQueTeAra = $ruta.$nomCod;

    copy($nomQueTeAra, $nomAcanviar)

    /*<?php  
    if(!isset($_POST['flag'])){
       
     }
     else{
         $resposta = $_POST['flag'];
         if($resposta == $flagCtf){
             echo "Repte validat exitosament!";
         }
         else{
             echo "Flag incorrecta!";
         }
     }
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="user-box">
                            <input type="text" name="flag" placeholder="Flag:" required="">
                            <p class="resposta">
                               
                            </p>
                        </div>
                    </form> -->*/
 ?>

