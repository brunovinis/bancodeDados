<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <link rel="stylesheet" href="pedido.css">
        <link rel="stylesheet" href="reset.css">
    </head>
    <body>
        <header>
            <h1>Livraria Amazonas Pedidos</h1>
            
            <nav>
                <ul class="topicos">
                    <li><a href="menu.html">Home</a></li>
                    <li><a href="produtos.php">Produtos</a></li>
                    <li><a href="clientes.php">Clientes</a></li>
                    <li><a href="vendedor.php">Vendedores</a></li>
                    <li><a href="pedido.php">Pedidos</a></li>
                    <li><a href="pedidos_completo.php">Pedidos & Carrinho </a></li>
                </ul>
            </nav>    
        </header>
        <div id="linha-vertical"></div>
        <div id="linha-horizontal"></div>
        <h2>Ficha de controle de pedidos</h2> 
       
        <div class="cadastro">
            <form method="post" action="cadastro_pedido.php">
                <h3>Cadastro de pedidos</h3>
                
                <p>Preecha os campos abaixo para cadastrar um livro:</p>
                

                Vendedores:
                <br>
                <select name="vendedor">
                    
                    <?php   

                    $servername = "localhost";
                    $database = "vendas_01";
                    $username = "root";
                    $password = "";

                    $conn = mysqli_connect($servername, $username, $password, $database);
                    if(!$conn){
                        die("falha na conexão: ". mysqli_connect_error());
                    }

                    $sql = "SELECT * FROM cadastro_vendedor ";

                    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

                    while( $registro = mysqli_fetch_array($resultado))
                    {
                        $ven_id = $registro['ven_id'];
                        $ven_nome = $registro['ven_nome'];
        
                        echo "<option value='$ven_id'>$ven_nome</option>";
                        echo "<option value='$ven_id'>$ven_nome</option>";

                    }
                    mysqli_close($conn);
                    ?>

                </select>
                <bt><br>


                Clientes:
                <br>
                <select name="cliente">
                    
                    <?php   

                    $servername = "localhost";
                    $database = "vendas_01";
                    $username = "root";
                    $password = "";

                    $conn = mysqli_connect($servername, $username, $password, $database);
                    if(!$conn){
                        die("falha na conexão: ". mysqli_connect_error());
                    }

                    $sql = "SELECT * FROM cadastro_cliente ";

                    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

                    while( $registro = mysqli_fetch_array($resultado))
                    {
                        $cli_id = $registro['cli_id'];                    
                        $cli_nome = $registro['cli_nome'];
        
                        echo "<option value='$cli_id'>$cli_nome</option>";

                    }
                    mysqli_close($conn);
                    ?>

                </select>
                <bt><br>


               


                <label for="frete">Informe  valor do frete: </label>
                <br>
                <input type="text" id="frete" name="frete" >
                <br>

                <label for="destribuidora">Informe o nome da destribuidora: </label>
                <br>
                <input type="text" id="destribuidora" name="destribuidora" >
                <br><br>

            <input type="submit" value="Cadastrar" class="enviar">
            </form>  
            <br><br>
        </div>



        <form method="post" action="consulta_pedido.php">
        
            <label for="name">
                <h3>Consulta de pedidos</h3>
                Preencha AQUI:
                <br><br>
                    ID do pedido: 
                    <br>
                <input type="number" name="dado[]"    placeholder= "Digite o ID Ex: 1,2,3...">
                    <br>
                    ID do vendedor:
                    <br>
                <input type="text" name="dado[]"  placeholder= "Digite o ID Ex: 1,2,3..">
                    <br>
                    ID do cliente:
                    <br>
                <input type="text" name="dado[]"  placeholder= "Digite o ID Ex: 1,2,3.." >
                    <br>
                    Valor do frete:
                    <br>
                <input type="text" name="dado[]"  placeholder= "Digite o valor do frete">
                    <br>
                    Destribuidora:
                    <br>
                <input type="text" name="dado[]"  placeholder= "informe o nome da destribuidora " >
                    <br>
                    
                   
                   
                    
            </label>
           
            <br><br>
            <input type="submit" value="Procurar livro(s)" class="enviar">
        </form>
        <br><br><br>
        <div id="linha-vertical"></div>
        <div id="linha-horizontal"></div>

        <h3>Altere ou delete os cadastros de livros</h3>
        <p>Toque  em update ou delete para manusear diretamente na tabela<p>

            <table border="6" style='width:50%'>
            <tr>  
            <th>ID</th> <th>ID Vendedor</th>
            <th>ID Cliente</th>   <th>Frete</th>
            <th>Destribuidora</th> <th>Escolha</th> 
            
            </tr>
            <?php   

            $servername = "localhost";
            $database = "vendas_01";
            $username = "root";
            $password = "";
            

            //cria conexão
            
            $conn = mysqli_connect($servername, $username, $password, $database);

            //Verifica conex�o
            if(!$conn){
                die("falha na conexão: ". mysqli_connect_error());
            }

           
            //Verifica essa escolha de comando
        
            $sql = "SELECT cli_nome, ven_nome, pe_id, vendedor_id, cliente_id, pe_valorFrete, pe_destribuidora FROM vendas_01.cadastro_cliente,
             vendas_01.cadastro_vendedor,vendas_01.cadastro_pedido WHERE cliente_id = cli_id AND vendedor_id = ven_id   ORDER BY cliente_id ASC ";
            
            $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

            //loop para ler todos os registros  
            
            while( $registro = mysqli_fetch_array($resultado))
            {
                $pe_id = $registro['pe_id'];
                $vendedor_id = $registro['vendedor_id'];
                $cliente_id = $registro['cliente_id'];
                $pe_valorFrete = $registro['pe_valorFrete'];
                $pe_destribuidora = $registro['pe_destribuidora'];
                $cli_nome = $registro['cli_nome'];
                $ven_nome = $registro['ven_nome'];

                echo"<tr>";
                echo "<td>".$pe_id."</td>";
                echo "<td>".$ven_nome. "</td>";
                echo "<td>".$cli_nome."</td>";
                echo "<td>".$pe_valorFrete."</td>";
                echo "<td>".$pe_destribuidora."</td>";
               
                
                echo"<td>";
                echo"<center>";
                echo"<form method='post' action='updatePedido.php'>";
                
                echo"<input type='hidden' name='escolha' value=".$pe_id.">";
                echo"<input type='submit' value='Update' class='botao'>";
                echo"</form>";
                echo"<form method='post' action='deletePedido.php'>";
                echo"<input type='submit' value='Excluir' class='botao' >";
                echo"<input type='hidden' name='escolha' value=".$pe_id.">";
                echo"</form>";
                echo"</center>";
                echo"</td>";
                echo"</tr>";
                //}

            
            }

            mysqli_close($conn);
            echo "</table>";
            ?>
        <br>
        <form method="post" action="pedido2.php">
        <input type="submit" value="Tabela de IDs" class="enviar">
        <br><br>

        
        
    </body>
    <footer>
        
        <br>
        <p class="copyright">&copy; Copyright Livraria Amazonas- 2022</p>
        <br>
        

    </footer>
</html>