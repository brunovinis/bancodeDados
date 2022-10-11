<?php
$numero = $_POST['numero'];
$repetir = $_POST ['repetir'];
$escolha = $_POST ['escolha'];

if($escolha == 'Dobro'){
    echo"<table border>";
    for($a = 1; $a <= $repetir; $a++){
        echo "<tr><th>$numero X 2 = ",$numero = 2 * $numero,"</th></tr>";
    } 
    echo"</table>";
}
else{
    echo"<table border>";
    for($a = 1; $a <= $repetir; $a++){
        $numero = 3 * $numero;
        echo "<tr><th>$numero X 3 = ",$numero, "</th></tr>";
    }
    echo"</table>";
}



?>