<?php
$servername = "localhost";
$database = "vendas_01";
$username = "root";
$password = "";
$livroNome = $_POST['nome'];
$qtdEstoque = $_POST['quantidade'];
$preco = $_POST['preco'];
$categoria = $_POST['categoria'];
$autor = $_POST['autor'];
$paginas = $_POST['paginas'];

//cria conexão

$conn = mysqli_connect($servername, $username, $password, $database);

//Verifica conexão
if(!$conn){
    die("falha na conexão: ". mysqli_connect_error());
}

echo "conectado com sucesso";

$sql = "INSERT INTO cadastro_produto ( pro_id,
                                 pro_nomeProduto,
                                 pro_quantidadeEstoque,
                                 pro_preco,
                                 pro_categoria,
                                 pro_autor,
                                 pro_numeroPaginas)VALUES
                                ('',
                                '$livroNome',
                                '$qtdEstoque',
                                '$preco',
                                '$categoria',
                                '$autor',
                                '$paginas')";
if(mysqli_query($conn, $sql)){
    echo"<br>Registro Gravado com Sucesso";
}else{
    echo "Error: ". $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


?>

<body> <html> <head>
<link rel="stylesheet" href="produtos.css">
    <title>Resultado da pesquisa</title>
</head>

    <table border="1" style='width:50%'>
    <tr>  
        <th>ID</th> <th>Livro</th>
        <th>QTD Estoque</th> <th>Preço</th>  
        <th>Categoria</th> <th>Autor</th>
        <th>Paginas</th>  
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
   
    $sql = "SELECT * FROM cadastro_produto ";
    
    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

    //loop para ler todos os registros  

    while( $registro = mysqli_fetch_array($resultado))
    {
        $pro_id = $registro['pro_id'];
        $pro_nomeProduto = $registro['pro_nomeProduto'];
        $pro_quantidadeEstoque = $registro['pro_quantidadeEstoque'];
        $pro_preco = $registro['pro_preco'];
        $pro_categoria = $registro['pro_categoria'];
        $pro_autor = $registro['pro_autor'];
        $pro_numeroPaginas = $registro['pro_numeroPaginas'];

        echo"<tr>";
        echo "<td>".$pro_id."</td>";
        echo "<td>".$pro_nomeProduto."</td>";
        echo "<td>".$pro_quantidadeEstoque."</td>";
        echo "<td>".$pro_preco. "</td>";
        echo "<td>".$pro_categoria."</td>";
        echo "<td>".$pro_autor."</td>";
        echo "<td>".$pro_numeroPaginas."</td>";
        echo"</tr>";
        
    
    }

    mysqli_close($conn);
    echo "</table>";
    ?>
  

        <br><br>
        <form method="post" action="produtos.php">
        <input type="submit" value="Pagina anterior" class="enviar">
        </form>
    </body>
</html>