<?php
$nome1 = $_POST['1nome'];
$endereco1 = $_POST['1endereco'];
$bairro1 = $_POST['1bairro'];
$cidade1 = $_POST['1cidade'];
$estado1 = $_POST['1estado'];
$cep1 = $_POST['1cep'];

$nome2 = $_POST['2nome'];
$endereco2 = $_POST['2endereco'];
$bairro2 = $_POST['2bairro'];
$cidade2 = $_POST['2cidade'];
$estado2 = $_POST['2estado'];
$cep2 = $_POST['2cep'];

 $nome3 = $_POST['3nome'];
 $endereco3 = $_POST['3endereco'];
 $bairro3 = $_POST['3bairro'];
 $cidade3 = $_POST['3cidade'];
 $estado3 = $_POST['3estado'];
 $cep3 = $_POST['3cep'];

 $nome4 = $_POST['4nome'];
 $endereco4 = $_POST['4endereco'];
 $bairro4 = $_POST['4bairro'];
 $cidade4 = $_POST['4cidade'];
 $estado4 = $_POST['4estado'];
$cep4 = $_POST['4cep'];

 $nome5 = $_POST['5nome'];
 $endereco5 = $_POST['5endereco'];
 $bairro5 = $_POST['5bairro'];
 $cidade5 = $_POST['5cidade'];
 $estado5 = $_POST['5estado'];
 $cep5 = $_POST['5cep'];

 $nome6 = $_POST['6nome'];
 $endereco6 = $_POST['6endereco'];
 $bairro6 = $_POST['6bairro'];
 $cidade6 = $_POST['6cidade'];
 $estado6 = $_POST['6estado'];
 $cep6 = $_POST['6cep'];

 $nome7 = $_POST['7nome'];
 $endereco7 = $_POST['7endereco'];
 $bairro7 = $_POST['7bairro'];
 $cidade7 = $_POST['7cidade'];
 $estado7 = $_POST['7estado'];
 $cep7 = $_POST['7cep'];

 $nome8 = $_POST['8nome'];
 $endereco8 = $_POST['8endereco'];
 $bairro8 = $_POST['8bairro'];
 $cidade8 = $_POST['8cidade'];
 $estado8 = $_POST['8estado'];
 $cep8 = $_POST['8cep'];

 $nome9 = $_POST['9nome'];
 $endereco9 = $_POST['9endereco'];
 $bairro9 = $_POST['9bairro'];
 $cidade9 = $_POST['9cidade'];
 $estado9 = $_POST['9estado'];
 $cep9 = $_POST['9cep'];

 $nome10 = $_POST['10nome'];
 $endereco10 = $_POST['10endereco'];
 $bairro10 = $_POST['10bairro'];
 $cidade10 = $_POST['10cidade'];
 $estado10 = $_POST['10estado'];
 $cep10 = $_POST['10cep'];

//for($i = 1; $i <=2; $i++){

echo"<table border='1' style='width:50%'>";
//echo"<thead>";
echo"<tr>  <th>ID</th> <th>Nome</th>";
echo"<th>Endereco</th> <th>Bairro</th> <th>Cidade</th>";
echo"<th>Estado</th> <th>Cep</th> </tr>";

echo "<tr>";
echo"<th>1 </th>";
echo "<td>".$nome1."</td>";
echo "<td>".$endereco1."</td>";
echo "<td>".$bairro1."</td>";
echo "<td>".$cidade1."</td>";
echo "<td>".$estado1."</td>";
echo "<td>".$cep1."</td>";

echo "<tr>";
echo"<th>2 </th>";
echo "<td>".$nome2."</td>";
echo "<td>".$endereco2."</td>";
echo "<td>".$bairro2."</td>";
echo "<td>".$cidade2."</td>";
echo "<td>".$estado2."</td>";
echo "<td>".$cep2."</td>";

echo "<tr>";
echo"<th>3 </th>";
echo "<td>".$nome3."</td>";
echo "<td>".$endereco3."</td>";
echo "<td>".$bairro3."</td>";
echo "<td>".$cidade3."</td>";
echo "<td>".$estado3."</td>";
echo "<td>".$cep3."</td>";

echo "<tr>";
echo"<th>4 </th>";
echo "<td>".$nome4."</td>";
echo "<td>".$endereco4."</td>";
echo "<td>".$bairro4."</td>";
echo "<td>".$cidade4."</td>";
echo "<td>".$estado4."</td>";
echo "<td>".$cep4."</td>";

echo "<tr>";
echo"<th>5 </th>";
echo "<td>".$nome5."</td>";
echo "<td>".$endereco5."</td>";
echo "<td>".$bairro5."</td>";
echo "<td>".$cidade5."</td>";
echo "<td>".$estado5."</td>";
echo "<td>".$cep5."</td>";

echo "<tr>";
echo"<th>6 </th>";
echo "<td>".$nome6."</td>";
echo "<td>".$endereco6."</td>";
echo "<td>".$bairro6."</td>";
echo "<td>".$cidade6."</td>";
echo "<td>".$estado6."</td>";
echo "<td>".$cep6."</td>";

echo "<tr>";
echo"<th>7</th>";
echo "<td>".$nome7."</td>";
echo "<td>".$endereco7."</td>";
echo "<td>".$bairro7."</td>";
echo "<td>".$cidade7."</td>";
echo "<td>".$estado7."</td>";
echo "<td>".$cep7."</td>";

echo "<tr>";
echo"<th>8</th>";
echo "<td>".$nome8."</td>";
echo "<td>".$endereco8."</td>";
echo "<td>".$bairro8."</td>";
echo "<td>".$cidade8."</td>";
echo "<td>".$estado8."</td>";
echo "<td>".$cep8."</td>";

echo "<tr>";
echo"<th>9 </th>";
echo "<td>".$nome9."</td>";
echo "<td>".$endereco9."</td>";
echo "<td>".$bairro9."</td>";
echo "<td>".$cidade9."</td>";
echo "<td>".$estado9."</td>";
echo "<td>".$cep9."</td>";

echo "<tr>";
echo"<th>10 </th>";
echo "<td>".$nome10."</td>";
echo "<td>".$endereco10."</td>";
echo "<td>".$bairro10."</td>";
echo "<td>".$cidade10."</td>";
echo "<td>".$estado10."</td>";
echo "<td>".$cep10."</td>";

echo"</tr>";
//echo"</thead>";
echo"</table>";

//}

$file = fopen ('cad_001.dat','w'); //escrevendo em um arquivo

fwrite ($file,$nome1);
fwrite ($file,$endereco1);
fwrite ($file,$bairro1);
fwrite ($file,$cidade1);
fwrite ($file,$estado1);
fwrite ($file,$cep1);


fwrite ($file,$nome2);
fwrite ($file,$endereco2);
fwrite ($file,$bairro2);
fwrite ($file,$cidade2);
fwrite ($file,$estado2);
fwrite ($file,$cep2);


fwrite ($file,$nome3);
fwrite ($file,$endereco3);
fwrite ($file,$bairro3);
fwrite ($file,$cidade3);
fwrite ($file,$estado3);
fwrite ($file,$cep3);


fwrite ($file,$nome4);
fwrite ($file,$endereco4);
fwrite ($file,$bairro4);
fwrite ($file,$cidade4);
fwrite ($file,$estado4);
fwrite ($file,$cep4);


fwrite ($file,$nome5);
fwrite ($file,$endereco5);
fwrite ($file,$bairro5);
fwrite ($file,$cidade5);
fwrite ($file,$estado5);
fwrite ($file,$cep5);


fwrite ($file,$nome6);
fwrite ($file,$endereco6);
fwrite ($file,$bairro6);
fwrite ($file,$cidade6);
fwrite ($file,$estado6);
fwrite ($file,$cep6);

fwrite ($file,$nome7);
fwrite ($file,$endereco7);
fwrite ($file,$bairro7);
fwrite ($file,$cidade7);
fwrite ($file,$estado7);
fwrite ($file,$cep7);

fwrite ($file,$nome8);
fwrite ($file,$endereco8);
fwrite ($file,$bairro8);
fwrite ($file,$cidade8);
fwrite ($file,$estado8);
fwrite ($file,$cep8);

fwrite ($file,$nome9);
fwrite ($file,$endereco9);
fwrite ($file,$bairro9);
fwrite ($file,$cidade9);
fwrite ($file,$estado9);
fwrite ($file,$cep9);

fwrite ($file,$nome10);
fwrite ($file,$endereco10);
fwrite ($file,$bairro10);
fwrite ($file,$cidade10);
fwrite ($file,$estado10);
fwrite ($file,$cep10);


fclose($file);

?>