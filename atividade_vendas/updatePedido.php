<html>
    <body> 
        <head>
            <title>Resultado da pesquisa</title>
            <link rel="stylesheet" href="pedido.css">
        </head> </body>
        
        <table border="1" style='width:50%'>
        <tr>  
        <th>ID Vendedor</th> <th>ID Cliente</th>
        <th>Frete</th> <th>Destribuidora</th> 
        <th>Escolha</th>
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

            $sql = "SELECT * FROM cadastro_pedido where pe_id = $dados";   
            $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");

        // loop para ler todos os registros
        $registro = mysqli_fetch_array($resultado);
        
        echo  $registro['pe_id'];
        echo  $registro['vendedor_id'];
        echo  $registro['cliente_id'];
        echo  $registro['pe_valorFrete'];
        echo  $registro['pe_destribuidora'];
        
        echo "<tr>";
        echo "<form action='updatePedido2.php' method='post'>";
                echo '<input type="hidden"   name="dados[]"   value="'.$registro['pe_id'].'">';
                echo '<td><input type="text" name="dados[]"   value="'.$registro['vendedor_id'].'"></td>';
                echo '<td><input type="text" name="dados[]"   value="'.$registro['cliente_id'].'"></td>';
                echo '<td><input type="tex" name="dados[]"   value="'.$registro['pe_valorFrete'].'"></td>';
                echo '<td><input type="tex" name="dados[]"   value="'.$registro['pe_destribuidora'].'"></td>';
                echo '<td><input type=submit value="Alterar" ></form></td>';
                echo "</tr></table>";

        mysqli_close($conn);
        
        ?>
    </table>
    </body>
</html>