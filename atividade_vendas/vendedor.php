<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <link rel="stylesheet" href="vendedor.css">
        <link rel="stylesheet" href="reset.css">
        
    </head>
    <body>
        <header>
            <h1>Livraria Amazonas Vendedor</h1>
            <h2></h2>
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
        <h2>Ficha de controle de vendedores</h2> 


        <form method="post" action="vendedor_cadastro.php">
            <h3>Cadastro de vendedores</h3>
            
            <p>Preecha os campos abaixo para cadastrar um novo vendedor:</p>
            

            <label>Informe o nome do vendedor :</label> 
            <br>
            <input type="text" name="nome"  >
            <br><br>

            <label for="cpf">Informe o cpf do vendedor: </label>
            <br>
            <input type="text" id="cpf" name="cpf" >
            <br></br>

            <label for="contato">Informe o telefone do vendedor: </label>
            <br>
            <input type="text" id="contato" name="contato" >
            <br><br>

            <label for="idade">Informe a idade do vendedor: </label>
            <br>
            <input type="number" id="idade" name="idade" >
            <br><br>

            <label for="expediente">Informe o expediente do vendedor: </label>
            <br>
            <input type="text" id="expediente" name="expediente" >
            <br><br>

            <label for="data">Informe a data de nascimento do vendedor: </label>
            <br>
            <input type="text" id="data" name="data" >
            <br><br>

            <label for="carteira">Informe o numero da carteira de trabalho do vendedor: </label>
            <br>
            <input type="text" id="carteira" name="carteira" >
            <br><br>
            
        <input type="submit" value="Cadastrar" class="enviar">
        </form>  
        <br><br><br>




        <form method="post" action="consulta_vendedor.php">
        
            <label for="name">
                <h3>Consulta de vendedores</h3>
                Preencha AQUI:
                <br><br>
                    ID: 
                    <br>
                <input type="number" name="dado[]"    placeholder= "Digite o ID Ex: 1,2,3...">
                    <br>
                    Nome:
                    <br>
                <input type="text" name="dado[]"  placeholder= "Digite o nome do vendedor">
                    <br>
                    CPF:
                    <br>
                <input type="text" name="dado[]"  placeholder= "informe o cpf do vendedor " >
                    <br>
                    Telefone:
                    <br>
                <input type="text" name="dado[]"  placeholder= "Informe o telefone do vendedor">
                    <br>
                    Idade:
                    <br>
                <input type="text" name="dado[]"   placeholder= "Digite a idade do vendedor">
                    <br>
                    Expediente:
                    <br>
                <input type="text" name="dado[]"  placeholder= "Informe o expediente do vendedor">
                    <br>
                    Data de nascimento:
                    <br>
                <input type="text" name="dado[]"  placeholder= "Informe a data de nascimento do vendedor">
                    <br>
                    Carteira de trabalho:
                    <br>
                <input type="text" name="dado[]"  placeholder= "Informe a carteira de trabalho do vendedor">
                    <br>
                    
                   
                    
            </label>
           
            <br><br>
            <input type="submit" value="Procurar vendedor(s)" class="enviar">
        </form>
        <br><br><br>
        <div id="linha-vertical"></div>
        <div id="linha-horizontal"></div>

        <h3>Altere ou delete os cadastros de vendedores</h3>
        <p>Toque  em update ou delete para manusear diretamente na tabela<p>

            <table border="6" style='width:50%' class="primeiraTabela">
            <tr>  
                <th>ID</th> <th>Nome</th>
                <th>CPF</th><th>Telefone</th>
                <th>Idade</th> <th>Expediente</th> 
                <th>Data de nascimento</th> <th>Carteira de trabalho</th> 
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
        
            $sql = "SELECT * FROM cadastro_vendedor  ";
            
            $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

            //loop para ler todos os registros  
            
            while( $registro = mysqli_fetch_array($resultado))
            {
                $ven_id = $registro['ven_id'];
                $ven_nome = $registro['ven_nome'];
                $ven_cpf = $registro['ven_cpf'];
                $ven_telefone = $registro['ven_telefone'];
                $ven_idade = $registro['ven_idade'];
                $ven_expediente = $registro['ven_expediente'];
                $ven_nascimento = $registro['ven_nascimento'];
                $ven_carteiraTrabalho = $registro['ven_carteiraTrabalho'];
                
                
                

                echo"<tr>";
                echo "<td>".$ven_id."</td>";
                echo "<td>".$ven_nome."</td>";
                echo "<td>".$ven_cpf."</td>";
                echo "<td>".$ven_telefone. "</td>";
                echo "<td>".$ven_idade."</td>";
                echo "<td>".$ven_expediente."</td>";
                echo "<td>".$ven_nascimento."</td>";
                echo "<td>".$ven_carteiraTrabalho."</td>";
                
        
                echo"<td>";
                echo"<center>";
                echo"<form method='post' action='updateVendedor.php'>";
                
                echo"<input type='hidden' name='escolha' value=".$ven_id.">";
                echo"<input type='submit' value='Update' class='botao' >";
                echo"</form>";
                echo"<form method='post' action='deleteVendedor.php'>";
                echo"<input type='submit' value='Excluir' class='botao' >";
                echo"<input type='hidden' name='escolha' value=".$ven_id.">";
                echo"</form>";
                echo"</center>";
                echo"</td>";
                echo"</tr>";
                //}

            
            }

            mysqli_close($conn);
            echo "</table>";
            ?>



        <br><br>
        
    </body>
    <footer>
        
        <br>
        <p class="copyright">&copy; Copyright Livraria Amazonas- 2022</p>
        <br>
        

    </footer>
</html>