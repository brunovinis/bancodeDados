<body> <html> <head>
    <title>Resultado da pesquisa</title>
    <link rel="stylesheet" href="vendedor.css">
    </head> </body>
    
    <table border="1" style='width:50%' >
    <tr>  
        <th>Nome</th>
        <th>CPF</th> <th>telefone</th>
        <th>Idade</th>  <th>Data de nascimento</th> 
        <th>Endereco</th> <th>Estado</th> 
        
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

        $sql = "SELECT * FROM cadastro_vendedor where ven_id = $dados";   
        $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");

    // loop para ler todos os registros
    $registro = mysqli_fetch_array($resultado);
    
        $registro['ven_id'];
        $registro['ven_nome'];
        $registro['ven_cpf'];
        $registro['ven_telefone'];
        $registro['ven_idade'];
        $registro['ven_expediente'];
        $registro['ven_nascimento'];
        $registro['ven_carteiraTrabalho'];
    
    echo "<tr>";
    echo "<form action='updateVendedor2.php' method='post'>";
            echo '<input type="hidden"   name="dados[]"   value="'.$registro['ven_id'].'">';
            echo '<td><input type="text" name="dados[]"   value="'.$registro['ven_nome'].'"></td>';
            echo '<td><input type="text" name="dados[]"   value="'.$registro['ven_cpf'].'"></td>';
            echo '<td><input type="text" name="dados[]"   value="'.$registro['ven_telefone'].'"></td>';
            echo '<td><input type="text" name="dados[]"   value="'.$registro['ven_idade'].'"></td>';
            echo '<td><input type="text" name="dados[]"   value="'.$registro['ven_expediente'].'"></td>';
            echo '<td><input type="text" name="dados[]"   value="'.$registro['ven_nascimento'].'"></td>';
            echo '<td><input type="text" name="dados[]"   value="'.$registro['ven_carteiraTrabalho'].'"></td>';
            echo '<td><input type=submit value="Alterar" ></form></td>';
            echo "</tr></table>";
    mysqli_close($conn);    
    
    ?>
    </table>
    </table>
    </body>
</html>