<body> <html> <head>
<link rel="stylesheet" href="produtos.css">
    <title>Resultado da pesquisa</title>
    </head> </body>
    
    <table border="1" style='width:50%'>
    <tr>  
        <th>Livro</th>
        <th>Quantidade de estoque</th> <th>Pre�o</th>  
        <th>Categoriaca</th> <th>Autor</th> 
        <th>Paginas</th>   
    </tr>

    <?php
    $servername = "localhost";
    $database = "vendas_01";
    $username = "root";
    $password = "";
    $dados = $_POST['escolha'];
     


    // Cria Conexão
    $conn = mysqli_connect($servername, $username, 
                        $password, $database);
    // Verificar Conexão
    if (!$conn) {
        die("falha na conexão: " . mysqli_connect_error());
    }
    
    echo "<br>Conectado com sucesso<br>";
    
    // Verifica escolha de campos

        $sql = "SELECT * FROM cadastro_produto where pro_id = $dados";   
        $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");

    // loop para ler todos os registros
    $registro = mysqli_fetch_array($resultado);
    
    echo  $registro['pro_id'];
    echo  $registro['pro_nomeProduto'];
    echo  $registro['pro_quantidadeEstoque'];
    echo  $registro['pro_preco'];
    echo  $registro['pro_categoria'];
    echo  $registro['pro_autor'];
    echo  $registro['pro_numeroPaginas'];
    
    
    echo "<tr>";
    echo "<form action='updateLivro2.php' method='post'>";
            echo '<input type="hidden"   name="dados[]"   value="'.$registro['pro_id'].'">';
            echo '<td><input type="text" name="dados[]"   value="'.$registro['pro_nomeProduto'].'"></td>';
            echo '<td><input type="text" name="dados[]"   value="'.$registro['pro_quantidadeEstoque'].'"></td>';
            echo '<td><input type="text" name="dados[]"   value="'.$registro['pro_preco'].'"></td>';
            echo '<td><input type="text" name="dados[]"   value="'.$registro['pro_categoria'].'"></td>';
            echo '<td><input type="text" name="dados[]"   value="'.$registro['pro_autor'].'"></td>';
            echo '<td><input type="text" name="dados[]"   value="'.$registro['pro_numeroPaginas'].'"></td>';
            echo '<td><input type=submit value="Alterar" ></form></td>';
            echo '</tr></table>';

    mysqli_close($conn);
    
    ?>
    </table>
    </table>
    </body>
</html>