<?php

$valor1 = 150220.888;
$valor2 = number_format($valor1, 1);
$valor3 = number_format($valor1, 2,',','.');

echo($valor1.'<br>');
echo($valor2.'<br>');
echo($valor3.'<br>');
print"<br>".$valor1."->".number_format($valor1,2,'.',',')."<br>";

?>