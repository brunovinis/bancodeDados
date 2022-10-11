<?php

$coluna = $_POST['coluna'];
$linha = $_POST['linha'];


if($coluna > 50 || $linha > 50){
    echo"Numero maior que o limite, por favor tente novamente";
    echo"<br> <br>";

    echo"<form action='index.html'>";
    echo"<input type='submit' value='Tente novamente' class='enviar'>";
    echo"</form>";

    //echo"<a href='http://localhost/Aula/pHp/atividadeMatriz/'>Clique aqui para tentar novamente</a>";
}
else if ($coluna <= 0 || $linha <= 0){
    echo"Numero menor que o limite, por favor tente novamente";
    echo"<br> <br>";

    echo"<form action='index.html'>";
    echo"<input type='submit' value='Tente novamente' class='enviar'>";
    echo"</form>";

}
else{
    echo "Numero de colunas da matriz: ",$coluna,"<br>";
    echo "Numero de linhas da matriz: ",$linha,"<br>";

    echo"<br> <br>";

    echo"<table border>";
    
for($a=1; $a<=$coluna; $a++){
    echo"<tr>";
    for($b=1; $b<=$linha; $b++){ 
        echo"<td>".$a."X".$b."</td>";
    }
    
    echo"</tr>";   
}
    echo"</table>";

    echo"<br> <br>";
    echo"<form action='index.html'>";
    echo"<input type='submit' value='Tente novamente' class='enviar'>";
    echo"</form>";
}


?>