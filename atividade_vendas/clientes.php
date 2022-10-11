<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <link rel="stylesheet" href="clientes.css">
        <link rel="stylesheet" href="reset.css">
        
    </head>
    <body>
        <header>
            <h1>Livraria Amazonas Clientes</h1>
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
        <h2>Ficha de controle de clientes</h2> 


        <form method="post" action="cadastroCli.php">
            <h3>Cadastro de clientes</h3>
            
            <p>Preecha os campos abaixo para cadastrar um novo cliente:</p>
            

            <label>Informe o nome do cliente :</label> 
            <br>
            <input type="text" name="nome"  >
            <br><br>

            <label for="cpf">informe o cpf do cliente: </label>
            <br>
            <input type="text" id="cpf" name="cpf" >
            <br></br>

            <label for="idade">Informe a idade do clinete: </label>
            <br>
            <input type="number" id="idade" name="idade" >
            <br><br>

            <label for="data">Informe a data de nascimento do clientte: </label>
            <br>
            <input type="text" id="data" name="data" >
            <br><br>

            <label for="rg">Informe o rg do cliente: </label>
            <br>
            <input type="text" id="rg" name="rg" >
            <br><br>

            <label for="endereco">Informe o endereço do cliente: </label>
            <br>
            <input type="text" id="endereco" name="endereco" >
            <br><br>

            <label for="estado">Informe o estado do cliente: </label>
            <br>
            <input type="text" id="estado" name="estado" >
            <br><br>

            <label for="contato">Informe o telefone do cliente: </label>
            <br>
            <input type="text" id="contato" name="contato" >
            <br><br>
            
        <input type="submit" value="Cadastrar" class="enviar">
        </form>  
        <br><br><br>




        <form method="post" action="consulta_cliente.php">
        
            <label for="name">
                <h3>Consulta de clientes</h3>
                Preencha AQUI:
                <br><br>
                    ID: 
                    <br>
                <input type="number" name="dado[]"    placeholder= "Digite o ID Ex: 1,2,3...">
                    <br>
                    Nome:
                    <br>
                <input type="text" name="dado[]"  placeholder= "Digite o nome do cliente">
                    <br>
                    CPF:
                    <br>
                <input type="text" name="dado[]"  placeholder= "informe o cpf do cliente " >
                    <br>
                    Idade:
                    <br>
                <input type="text" name="dado[]"   placeholder= "Digite a idade do cliente">
                    <br>
                    Data de nascimento:
                    <br>
                <input type="text" name="dado[]"  placeholder= "Informe a data de nascimento do cliente">
                    <br>
                    RG:
                    <br>
                <input type="text" name="dado[]"  placeholder= "Informe o rg do cliente">
                    <br>
                    Endereço:
                    <br>
                <input type="text" name="dado[]"  placeholder= "Informe o endere�o do cliente">
                    <br>
                    Estado:
                    <br>
                <input type="text" name="dado[]"  placeholder= "Informe o estado do cliente">
                    <br>
                    Telefone:
                    <br>
                <input type="text" name="dado[]"  placeholder= "Informe o telefoene do cliente">
                    <br>
                   
                    
            </label>
           
            <br><br>
            <input type="submit" value="Procurar cliente(s)" class="enviar">
        </form>
        <br><br><br>

        <div id="linha-vertical"></div>
        <div id="linha-horizontal"></div>
        <h3>Altere ou delete os cadastros de clientes</h3>
        <p>Toque  em update ou delete para manusear diretamente na tabela<p>

            <table border="6" style='width:50%' class="primeiraTabela">
            <tr>  
            <th>ID</th> <th>Nome</th>
            <th>CPF</th> <th>Idade</th>  
            <th>Data de nascimento</th> <th>RG</th> 
            <th>Endereco</th> <th>Estado</th> 
            <th>telefone</th><th>Escolha</th>
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
        
            $sql = "SELECT * FROM cadastro_cliente  ";
            
            $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

            //loop para ler todos os registros  
            
            while( $registro = mysqli_fetch_array($resultado))
            {
                $cli_id = $registro['cli_id'];
                $cli_nome = $registro['cli_nome'];
                $cli_cpf = $registro['cli_cpf'];
                $cli_idade = $registro['cli_idade'];
                $cli_nascimento = $registro['cli_nascimento'];
                $cli_rg = $registro['cli_rg'];
                $cli_endereco = $registro['cli_endereco'];
                $cli_estado = $registro['cli_estado'];
                $cli_telefone = $registro['cli_telefone'];
                

                echo"<tr>";
                echo "<td>".$cli_id."</td>";
                echo "<td>".$cli_nome."</td>";
                echo "<td>".$cli_cpf."</td>";
                echo "<td>".$cli_idade. "</td>";
                echo "<td>".$cli_nascimento."</td>";
                echo "<td>".$cli_rg."</td>";
                echo "<td>".$cli_endereco."</td>";
                echo "<td>".$cli_estado."</td>";
                echo "<td>".$cli_telefone."</td>";
        
                echo"<td>";
                echo"<center>";
                echo"<form method='post' action='updateCliente.php'>";
                
                echo"<input type='hidden' name='escolha' value=".$cli_id.">";
                echo"<input type='submit' value='Update'class='botao' >";
                echo"</form>";
                echo"<form method='post' action='deleteCliente.php'>";
                echo"<input type='submit' value='Excluir' class='botao' >";
                echo"<input type='hidden' name='escolha' value=".$cli_id.">";
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