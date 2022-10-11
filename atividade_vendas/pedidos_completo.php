<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <link rel="stylesheet" href="carrinho.css">
        <link rel="stylesheet" href="reset.css">
    </head>
    <body>
        <header>
            <h1>Livraria Amazonas Pedidos & Carrinho</h1>
            
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
            <form method="post" action="cadastro_pedidoDesafio.php">
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

            <form method="post" action="cadastroItens.php">
            <h3>Items do pedido</h3>
            Produtos:
                <br>
                <select name="produto">
                    
                    <?php   

                    $servername = "localhost";
                    $database = "vendas_01";
                    $username = "root";
                    $password = "";

                    $conn = mysqli_connect($servername, $username, $password, $database);
                    if(!$conn){
                        die("falha na conexão: ". mysqli_connect_error());
                    }

                    $sql = "SELECT * FROM cadastro_produto ";

                    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

                    while( $registro = mysqli_fetch_array($resultado))
                    {
                        $pro_id = $registro['pro_id'];                    
                        $pro_nomeProduto = $registro['pro_nomeProduto'];
        
                        echo "<option value='$pro_id'>$pro_nomeProduto</option>";

                    }
                    mysqli_close($conn);
                    ?>

                </select>
                <br>
                <label for="pedido">Informe  o seu pedido: </label>
                <br>
                <input type="text" id="pedido" name="pedido" >
                <br>

                <label for="qtd">Informe  a qantidade de pedidos: </label>
                <br>
                <input type="text" id="qtd" name="qtd" >
                <br>

                <label for="valorp">Informe o valor do pedido: </label>
                <br>
                <input type="text" id="valorp" name="valorp" >
                <br><br>


                <input type="submit" value="Cadastrar" class="enviar"> 
            </form>
                    <bt><br>
        </div>
        <br><br><br>
        <div id="linha-vertical"></div>
        <div id="linha-horizontal"></div>
        <center>
            <h3>CARRINHO</h3>
            <p>Toque  em update ou delete para manusear diretamente no carrinho<p>

            <table border="6" style='width:50%'>
            <tr>  
            <th> ID Itens</th>
            <th> ID Pedido</th> <th> ID Produto</th>
            <th>Descri��o</th> <th>Quantidade</th> 
            <th>Valor unitario</th><th>Total</th>
            <th>Escolha</th>
             
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
        
            $sql = "SELECT pro_preco, pro_categoria, pe_id, pro_nomeProduto, iditens_pedido, cadastro_pedido_pe_id,cadastro_produto_pro_id, item_Quantidade, pe_valorFrete, item_valor FROM 
            vendas_01.cadastro_produto,vendas_01.cadastro_pedido, vendas_01.itens_pedido WHERE cadastro_produto_pro_id = pro_id AND cadastro_pedido_pe_id = pe_id 
            ORDER BY iditens_pedido  ASC";
        
            $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

        //loop para ler todos os registros  
            $vtt = 0;
            while( $registro = mysqli_fetch_array($resultado))
            {
                $iditens_pedido = $registro['iditens_pedido'];
                $pe_id = $registro['pe_id'];
                $cadastro_produto_pro_id = $registro['cadastro_produto_pro_id'];
                $cadastro_pedido_pe_id = $registro['cadastro_pedido_pe_id'];
                $pro_categoria = $registro['pro_categoria'];
                $item_Quantidade = $registro['item_Quantidade'];
                $item_valor = $registro['item_valor'];
                $pro_nomeProduto = $registro['pro_nomeProduto'];
                $pro_preco = $registro['pro_preco'];
                $valorTotal = (int)$pro_preco * (int)$item_Quantidade;
                
                $vtt = $valorTotal + $vtt;
            
            

                echo"<tr>";
                echo "<td>".$iditens_pedido."</td>";
                echo "<td>".$pe_id."</td>";
                echo "<td>".$pro_nomeProduto. "</td>";
                //echo "<td>".$cadastro_pedido_pe_id."</td>";
                echo "<td>".$pro_categoria."</td>";
                echo "<td>".$item_Quantidade."</td>";
                echo "<td>".$pro_preco."</td>";
                echo "<td>".$valorTotal."</td>";
                    
                    
                echo"<td>";
                echo"<center>";
                echo"<form method='post' action='updateItens.php'>";
                
                echo"<input type='hidden' name='escolha' value=".$iditens_pedido.">";
                echo"<input type='submit' value='Update' class='botao'>";
                echo"</form>";
                echo"<form method='post' action='deleteItens.php'>";
                echo"<input type='submit' value='Excluir' class='botao' >";
                echo"<input type='hidden' name='escolha' value=".$iditens_pedido.">";
                echo"</form>";
                echo"</center>";
                echo"</td>";
                echo"</tr>";
                    //}   
            }
            
           

            mysqli_close($conn);
            echo "</table>";
            echo"<br>";
            //echo"Valor total:$vtt ";
           

            ?>
        <table border="6" style='width:50%' class="total">
            <tr>
                <th>Valor Total</th>
            </tr>
            <?php 
            echo"<tr>";
                echo"<center>";
                    echo"<td>".$vtt."</td>";
                echo"</center>";
            echo"</tr>";
        echo "</table>"; 
        echo"<br>";
        ?>  

        </center>
       
        </body>
        <footer>
           
           <br>
           <p class="copyright">&copy; Copyright Livraria Amazonas- 2022</p>
           <br>
          

        </footer>
</html>
