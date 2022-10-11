<?php
$servername = "localhost";
$database = "vendas_01";
$username = "root";
$password = "";
$cliNome = $_POST['nome'];
$clicpf = $_POST['cpf'];
$cliIdade = $_POST['idade'];
$clidData = $_POST['data'];
$cliRg = $_POST['rg'];
$cliEndereco = $_POST['endereco'];
$cliEstado = $_POST['estado'];
$clitelefone = $_POST['contato'];

//cria conexão

$conn = mysqli_connect($servername, $username, $password, $database);

//Verifica conexão
if(!$conn){
    die("falha na conexão: ". mysqli_connect_error());
}

echo "conectado com sucesso";

$sql = "INSERT INTO cadastro_cliente ( cli_id,
                                 cli_nome,
                                 cli_cpf,
                                 cli_idade,
                                 cli_nascimento,
                                 cli_rg,
                                 cli_endereco,
                                 cli_estado,
                                 cli_telefone)VALUES
                                ('',
                                '$cliNome',
                                '$clicpf',
                                '$cliIdade',
                                '$clidData',
                                '$cliRg',
                                '$cliEndereco',
                                '$cliEstado',
                                '$clitelefone')";
if(mysqli_query($conn, $sql)){
    echo"<br>Registro Gravado com Sucesso";
}else{
    echo "Error: ". $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


?>

<body> <html> <head>
<link rel="stylesheet" href="clientes.css">
    <title>Resultado da pesquisa</title>
</head>

    <table border="1" style='width:50%'>
    <tr>  
        <th>ID</th> <th>Nome</th>
        <th>CPF</th> <th>Idade</th>  
        <th>Data de nascimento</th> <th>RG</th>
        <th>Endereço</th><th>Estado</th>
        <th>Contato</th>  
    </tr>
    <?php   

    $servername = "localhost";
    $database = "vendas_01";
    $username = "root";
    $password = "";
 

    //cria conexÃ£o
    
    $conn = mysqli_connect($servername, $username, $password, $database);

    //Verifica conexï¿½o
    if(!$conn){
        die("falha na conexÃ£o: ". mysqli_connect_error());
    }

    echo "conectado com sucesso";
    //Verifica essa escolha de comando
   
    $sql = "SELECT * FROM cadastro_cliente ";
    
    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

    //loop para ler todos os registros  

    while( $registro = mysqli_fetch_array($resultado))
    {
        $cli_id = $registro['cli_id'];
        $cli_nome = $registro['cli_nome'];
        $cli_cpf = $registro['cli_cpf'];
        $cli_idade = $registro['cli_idade'];
        $cli_nascimento = $registro['cli_nascimento'];
        $cli_rg = $registro['cli_rg'];
        $cli_endereco = $registro['cli_endereco'];
        $cli_estado = $registro['cli_estado'];
        $cli_telefone = $registro['cli_telefone'];

        echo"<tr>";
        echo "<td>".$cli_id."</td>";
        echo "<td>".$cli_nome."</td>";
        echo "<td>".$cli_cpf."</td>";
        echo "<td>".$cli_idade. "</td>";
        echo "<td>".$cli_nascimento."</td>";
        echo "<td>".$cli_rg."</td>";
        echo "<td>".$cli_endereco."</td>";
        echo "<td>".$cli_estado."</td>";
        echo "<td>".$cli_telefone."</td>";
        echo"</tr>";
        
    
    }

    mysqli_close($conn);
    echo "</table>";
    ?>
  

        <br><br>
        <form method="post" action="clientes.php">
        <input type="submit" value="Pagina anterior" class="enviar">
        </form>
    </body>
</html>
