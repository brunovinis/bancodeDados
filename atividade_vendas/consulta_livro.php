<body> <html> <head>
<link rel="stylesheet" href="produtos.css">
    <title>Livros encontrados</title>
</head>

    <table border="1" style='width:50%'>
        <tr>  
            <th>ID</th> <th>Livro</th>
            <th>Quantidade de estoque</th> <th>Pre�o</th>  
            <th>Categoriaca</th> <th>Autor</th> 
            <th>Paginas</th>   
        </tr>
    
    <?php   

    $servername = "localhost";
    $database = "vendas_01";
    $username = "root";
    $password = "";
    $campo= ["pro_id", "pro_nomeProduto", "pro_quantidadeEstoque","pro_preco","pro_categoria", "pro_autor", "pro_numeroPaginas"];
    $i = 0;
    $sequencia="";
    $comando="";  

    //cria conexão
    
    $conn = mysqli_connect($servername, $username, $password, $database);

    //Verifica conex�o
    if(!$conn){
        die("falha na conexão: ". mysqli_connect_error());
    }

    echo "conectado com sucesso";
    //Verifica essa escolha de comando
    if(isset($_POST["dado"])){
        foreach($_POST["dado"]as $dado){

   //Faz o loop
            if($dado <> ""){
                if($sequencia == "")
                $sequencia= 1 ;
                else
                    $comando = $comando . " and ";
                
                $comando = $comando . $campo[$i] ."="."'".$dado."' ";
                
            }
            $i++;
        }

      
   }
   else
   {
    echo "nenhum campo selecionado";
   }

   
    if($comando <> ""){
        $sql = "SELECT * FROM cadastro_produto where $comando ";
    }else{
        $sql = "SELECT * FROM cadastro_produto";
    }
    
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
    echo "</table>";
    mysqli_close($conn);
    
    ?>
    
        <br><br>
        <form method="post" action="produtos.php">
        <input type="submit" value="Pagina anterior" class="enviar">
        </form>
    </body>
</html>