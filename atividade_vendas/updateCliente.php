<body> <html> <head>
    <title>Resultado da pesquisa</title>
    <link rel="stylesheet" href="clientes.css">
    </head> </body>
    
    <table border="1" style='width:50%'>
    <tr>  
        <th>Nome</th>
        <th>CPF</th> <th>Idade</th>  
        <th>Data de nascimento</th> <th>RG</th> 
        <th>Endereco</th> <th>Estado</th> 
        <th>telefone</th>
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

        $sql = "SELECT * FROM cadastro_cliente where cli_id = $dados";   
        $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");

    // loop para ler todos os registros
    $registro = mysqli_fetch_array($resultado);
    
    echo $registro['cli_id'];
    echo $registro['cli_nome'];
    echo $registro['cli_cpf'];
    echo $registro['cli_idade'];
    echo $registro['cli_nascimento'];
    echo $registro['cli_rg'];
    echo $registro['cli_endereco'];
    echo $registro['cli_estado'];
    echo $registro['cli_telefone'];
    
    
    echo "<tr>";
    echo "<form action='updateCliente2.php' method='post' class='tabelaerro'>";
            echo '<input type="hidden"   name="dados[]"   value="'.$registro['cli_id'].'">';
            echo '<td><input type="text" name="dados[]"   value="'.$registro['cli_nome'].'"></td>';
            echo '<td><input type="text" name="dados[]"   value="'.$registro['cli_cpf'].'"></td>';
            echo '<td><input type="text" name="dados[]"   value="'.$registro['cli_idade'].'"></td>';
            echo '<td><input type="text" name="dados[]"   value="'.$registro['cli_nascimento'].'"></td>';
            echo '<td><input type="text" name="dados[]"   value="'.$registro['cli_rg'].'"></td>';
            echo '<td><input type="text" name="dados[]"   value="'.$registro['cli_endereco'].'"></td>';
            echo '<td><input type="text" name="dados[]"   value="'.$registro['cli_estado'].'"></td>';
            echo '<td><input type="text" name="dados[]"   value="'.$registro['cli_telefone'].'"></td>';
            echo '<td><input type=submit value="Alterar" ></form></td>';
            echo "</tr></table>";

    mysqli_close($conn);
    
    ?>
    </table>
    </table>
    </body>
</html>