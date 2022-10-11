<?php
$servername = "localhost";
$database = "vendas_01";
$username = "root";
$password = "";
$dados = $_POST['escolha'];


//cria conexo

$conn = mysqli_connect($servername, $username, $password, $database);

//Verifica conexo
if(!$conn){
    die("falha na conexo: ". mysqli_connect_error());
}

echo "conectado com sucesso";


$sql = "DELETE from cadastro_pedido where pe_id = $dados ";
$resultado = mysqli_query($conn,$sql) or die("Erro oa retornar dados");


if(mysqli_query($conn, $sql)){
    echo"<br>Registro Deletado com Sucesso";
}else{
    echo "Error: ". $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


?>
<body> <html> <head>
<link rel="stylesheet" href="pedido.css">
    <title>Resultado da pesquisa</title>
</head>

    <table border="1" style='width:50%'>
    <tr>  
        <th>ID</th> <th>ID Vendedor</th>
        <th>ID Cliente</th> <th>Frete</th>
        <th>Destribuidora</th>
    </tr>
        
    <?php   

    $servername = "localhost";
    $database = "vendas_01";
    $username = "root";
    $password = "";
    $campo= ["pe_id", "vendedor_id", "cliente_id","pe_valorFrete","pe_destribuidora"];    
    $i = 0;
    $sequencia="";
    $comando="";  

    //cria conexão
    
    $conn = mysqli_connect($servername, $username, $password, $database);

    //Verifica conexo
    if(!$conn){
        die("falha na conexão: ". mysqli_connect_error());
    }

    echo "conectado com sucesso";
    //Verifica essa escolha de comando
   
    $sql = "SELECT * FROM cadastro_pedido ";
    
    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

    //loop para ler todos os registros  

    while( $registro = mysqli_fetch_array($resultado))
    {
        $pe_id = $registro['pe_id'];
        $vendedor_id = $registro['vendedor_id'];
        $cliente_id = $registro['cliente_id'];
        $pe_valorFrete = $registro['pe_valorFrete'];
        $pe_destribuidora = $registro['pe_destribuidora'];
        
        

        echo"<tr>";
        echo "<td>".$pe_id."</td>";
        echo "<td>".$vendedor_id. "</td>";
        echo "<td>".$cliente_id."</td>";
        echo "<td>".$pe_valorFrete."</td>";
        echo "<td>".$pe_destribuidora."</td>";
        echo"</tr>";
    }


    mysqli_close($conn);
    echo "</table>";
    ?>
  

        <br><br>
        <form method="post" action="pedido.php">
        <input type="submit" value="Pagina anterior" class="enviar">
        </form>
        <meta http-equiv="refresh" content="0  ; URL='pedido.php'"/>
    </body>
</html>