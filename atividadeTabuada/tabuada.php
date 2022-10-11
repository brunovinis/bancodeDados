<?php
$numero= $_POST['numero'];
$escolha= $_POST['escolha'];

if($escolha == 'Sim'){
    echo "Tabuada do numero: ", $numero;
    echo"<br>";
    
    echo"<table border>";
    for($b=0; $b<=10; $b++){
        echo"<tr><th> $numero x $b = </th>";
        echo"<th> ".$b * $numero."</th>";
        echo"</tr>";
    }
    echo"</table>";
    echo"<br>";
    echo"<form action='index.html'>";
    echo"<input type='submit' value='Escolher outro número' class='enviar'>";
    echo"</form>";
}
else{
    echo"<form action='index.html'>";
    echo"<input type='submit' value='Voltar a pagina anterior' class='enviar'>";
    echo"</form>";
    echo"<br>";
    for($a=0; $a<=99; $a++){
        echo"<table border>";
        for($b=0; $b<=10; $b++){
            echo"<tr><th> $a x $b = </th>";
            echo"<th> ".$b * $a."</th>";
            echo"</tr>";
        }
        echo"</table>";
        echo "<br>";
    }
}
?>