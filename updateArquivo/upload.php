<?php
    //$dir = "img/imagens";
    //recebendo o arquivo multipart
    $file = $_FILES["arquivo"];
    $teste1 = $file["tmp_name"];
    $teste2 = $file["name"];
    echo $teste1;
    echo"<br>";
    echo $teste2;
    //Move o arquivo da pasta temporaria de upload para a pasta de destino
    if(move_uploaded_file($file["tmp_name"],$file["name"])){
        echo "Arquivo anviado com sucesso!";
    }
    else{
        echo"Erro aquivo não pode ser enviado";
    }
?>  