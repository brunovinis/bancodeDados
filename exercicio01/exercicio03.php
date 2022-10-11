<?php

$file = fopen ('arquivo.txt','w'); //escrevendo em um arquivo
fwrite ($file,'Escrevendo no arquivo'.'<br>');
fclose($file);
$file = fopen ('arquivo.txt','a+');//a+coloca o ponteiro no final do arquivo
fwrite($file,'teste numero = 1');
fclose($file);



?>