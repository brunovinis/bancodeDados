<?php

//lendo em um arquivo
$nomearquivo = 'arquivo.txt';
$file = fopen($nomearquivo, 'r');
$buffer = fread($file,filesize($nomearquivo));
fclose($file);
echo($buffer.'<br>');

?>