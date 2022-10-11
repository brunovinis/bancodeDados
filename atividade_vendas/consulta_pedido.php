<html>
    <body>
        <head>
            <title>Livros encontrados</title>
            <link rel="stylesheet" href="pedido.css">
        </head>

        <table border="1" style='width:50%'>
        <tr>  
            <th>ID</th> <th>ID Vendedor</th>
            <th>ID Cliente</th> <th>ID produto</th>  
            <th>Frete</th> <th>Destribuidora</th>
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
            $sql = "SELECT * FROM cadastro_pedido where $comando ";

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
        }else{
            $sql = "SELECT cli_nome, ven_nome, pe_id, vendedor_id, cliente_id, pe_valorFrete, pe_destribuidora FROM 
            vendas_01.cadastro_cliente, vendas_01.cadastro_vendedor,vendas_01.cadastro_pedido WHERE cliente_id = cli_id AND vendedor_id = ven_id  
            ORDER BY cliente_id ASC";

            $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

            //loop para ler todos os registros  
            $valorTotal = (int)$pro_preco * (int)$item_Quantidade;
            while( $registro = mysqli_fetch_array($resultado))
            {
                $pe_id = $registro['pe_id'];
                $nomeVen = $registro['ven_nome'];
                $nomeCliente = $registro['cli_nome'];
                $pe_valorFrete = $registro['pe_valorFrete'];
                $pe_destribuidora = $registro['pe_destribuidora'];
             
                
                

                echo"<tr>";
                echo "<td>".$pe_id."</td>";
                echo "<td>".$nomeVen. "</td>";
                echo "<td>".$nomeCliente."</td>";
                echo "<td>".$pe_valorFrete."</td>";
                echo "<td>".$pe_destribuidora."</td>";
                echo"</tr>";
            }
        }
       
        echo "</table>";
        mysqli_close($conn);
        
        ?>
    
        <br><br>
        <form method="post" action="pedido.php">
        <input type="submit" value="Pagina anterior" class="enviar">
        </form>
    </body>
</html