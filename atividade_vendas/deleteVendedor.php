<?php
$servername = "localhost";
$database = "vendas_01";
$username = "root";
$password = "";
$dados = $_POST['escolha'];


//cria conex�o

$conn = mysqli_connect($servername, $username, $password, $database);

//Verifica conex�o
if(!$conn){
    die("falha na conex�o: ". mysqli_connect_error());
}

echo "conectado com sucesso";


$sql = "DELETE from cadastro_vendedor where ven_id = $dados ";
$resultado = mysqli_query($conn,$sql) or die("Erro oa retornar dados");


if(mysqli_query($conn, $sql)){
    echo"<br>Registro Deletado com Sucesso";
}else{
    echo "Error: ". $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


?>
<body> <html> <head>
<link rel="stylesheet" href="vendedor.css">
    <title>Resultado da pesquisa</title>
</head>

    <table border="1" style='width:50%'>
    <tr>  
        <th>ID</th> <th>Nome</th>
        <th>CPF</th><th>Telefone</th>
        <th>Idade</th> <th>Expediente</th> 
        <th>Data de nascimento</th> <th>Carteira de trabalho</th>       
    </tr>
    <?php   

    $servername = "localhost";
    $database = "vendas_01";
    $username = "root";
    $password = "";
    $campo= ["ven_id", "ven_nome", "ven_cpf","ven_telefone","ven_idade", "ven_expediente", "ven_nascimento", "ven_carteiraTrabalho"];    $i = 0;
    $sequencia="";
    $comando="";  

    //cria conex�o
    
    $conn = mysqli_connect($servername, $username, $password, $database);

    //Verifica conex�o
    if(!$conn){
        die("falha na conex�o: ". mysqli_connect_error());
    }

    echo "conectado com sucesso";
    //Verifica essa escolha de comando
   
    $sql = "SELECT * FROM cadastro_vendedor  ";
    
    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

    //loop para ler todos os registros  

    while( $registro = mysqli_fetch_array($resultado))
    {
        $ven_id = $registro['ven_id'];
        $ven_nome = $registro['ven_nome'];
        $ven_cpf = $registro['ven_cpf'];
        $ven_telefone = $registro['ven_telefone'];
        $ven_idade = $registro['ven_idade'];
        $ven_expediente = $registro['ven_expediente'];
        $ven_nascimento = $registro['ven_nascimento'];
        $ven_carteiraTrabalho = $registro['ven_carteiraTrabalho'];
        
                

        echo"<tr>";
        echo "<td>".$ven_id."</td>";
        echo "<td>".$ven_nome."</td>";
        echo "<td>".$cli_cpf."</td>";
        echo "<td>".$ven_telefone. "</td>";
        echo "<td>".$ven_idade."</td>";
        echo "<td>".$ven_expediente."</td>";
        echo "<td>".$ven_nascimento."</td>";
        echo "<td>".$ven_carteiraTrabalho."</td>";
        echo"</tr>";
        
    
    }

    mysqli_close($conn);
    echo "</table>";
    ?>
  

        <br><br>
        <form method="post" action="verdedor.php">
        <input type="submit" value="Pagina anterior" class="enviar">
        </form>
        <meta http-equiv="refresh" content="0  ; URL='vendedor.php'"/>
    </body>
</html>