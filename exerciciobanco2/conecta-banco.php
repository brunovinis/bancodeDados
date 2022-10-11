<?php
$servername = "localhost";
$database = "banco01";
$username = "root";
$password = "";
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
//cria conexão

$conn = mysqli_connect($servername, $username, $password, $database);

//Verifica conexão
if(!$conn){
    die("falha na conexão: ". mysqli_connect_error());
}

echo "conectado com sucesso";

$sql = "INSERT INTO cadastro (idCadastro,
                                CAd_nome,
                                Cad_endereco,
                                Cad_bairro,
                                Cad_cidade,
                                Cad_estado,
                                Cad_cep)VALUES
                                ('',
                                '$nome',
                                '$endereco',
                                '$bairro',
                                '$cidade',
                                '$estado',
                                '$cep')";
if(mysqli_query($conn, $sql)){
    echo"<br>Registro Gravado com Sucesso";
}else{
    echo "Error: ". $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>

