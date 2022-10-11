<body> <html> <head>
<link rel="stylesheet" href="carrinho.css">
    <title>Resultado da pesquisa</title>
    </head> </body>
    <center>
        <table border="1" style='width:50%'>
        <tr>
            <th>Quantidade</th> 
        
            
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

        $sql = "SELECT  pro_preco, pro_categoria, pe_id, pro_nomeProduto, iditens_pedido, cadastro_pedido_pe_id,cadastro_produto_pro_id, item_Quantidade, pe_valorFrete, item_valor FROM 
        cadastro_produto,cadastro_pedido,itens_pedido WHERE cadastro_pedido_pe_id = pe_id AND
        iditens_pedido = $dados";
        $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
        
        // loop para ler todos os registros
        $registro = mysqli_fetch_array($resultado);

        

        
        echo "<tr>";
        echo "<form action='updateItens2.php' method='post'>";
            echo '<input type="hidden"   name="dados[]"   value="'.$registro['iditens_pedido'].'">';
            echo '<td><center><input type="text" name="dados[]"   value="'.$registro['item_Quantidade'].'"></center></td>';
                
        echo '<td><center><input type=submit value="Alterar" ></center></form></td>';
        echo '</tr></table>';

        mysqli_close($conn);
        
        ?>
        </table>
    </center>
    </body>
</html>