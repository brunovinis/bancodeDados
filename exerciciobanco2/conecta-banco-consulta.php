<body> <html> <head>
    <title>Resultado da pesquisa</title>
</head>

<table border="1" style='width:50%'>
<tr>  <th>ID</th> <th>Nome</th>
<th>Endereço</th> <th>Cidade</th>
<th>Estado</th> <th>Cep</th> </tr>
<?php
$servername = "localhost";
$database = "banco01";
$username = "root";
$password = "";

//cria conex�o

$conn = mysqli_connect($servername, $username, $password, $database);

//Verifica conex�o
if(!$conn){
    die("falha na conexão: ". mysqli_connect_error());
}

echo "conectado com sucesso";

$sql = "SELECT * FROM cadastro";
$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

//loop para ler todos os registros
while( $registro = mysqli_fetch_array($resultado))
{
    $Cad_id = $registro['idCadastro'];
    $Cad_nome = $registro['Cad_nome'];
    $Cad_endereco = $registro['Cad_endereco'];
    $Cad_cidade = $registro['Cad_cidade'];
    $Cad_estado = $registro['Cad_estado'];
    $Cad_cep = $registro['Cad_cep'];

    echo"<tr>";
    echo "<td>".$Cad_id."</td>";
    echo "<td>".$Cad_nome."</td>";
    echo "<td>".$Cad_endereco."</td>";
    echo "<td>".$Cad_cidade."</td>";
    echo "<td>".$Cad_estado."</td>";
    echo "<td>".$Cad_cep."</td>";
    echo"</tr>";
}
mysqli_close($conn);
echo "</table>";
?>
</body>
</html>