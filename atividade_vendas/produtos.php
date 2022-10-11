<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <link rel="stylesheet" href="produtos.css">
        <link rel="stylesheet" href="reset.css">
    </head>
    <body>
        <header>
            <h1>Livraria Amazonas Produtos</h1>
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

        <h2>Venha encontrar livros de qualidade!!!!!</h2> 
       
        <form method="post" action="cadastro_livro.php">
            <h3>Cadastro de livros</h3>
            
            <p>Preecha os campos abaixo para cadastrar um livro:</p>
            

            <label>Informe o nome do livro :</label> 
            <br>
            <input type="text" name="nome"  >
            <br><br>

            <label for="quantidade">Informe a quantidade de livros no estoque: </label>
            <br>
            <input type="text" id="quantidade" name="quantidade" >
            <br></br>

            <label for="preco">Informe o preço do livro: </label>
            <br>
            <input type="text" id="preco" name="preco" >
            <br><br>

            <label for="categoria">Informe a categoria do livro: </label>
            <br>
            <input type="text" id="categoria" name="categoria" >
            <br><br>

            <label for="autor">Informe o autor do livro: </label>
            <br>
            <input type="text" id="autor" name="autor" >
            <br><br>

            <label for="paginas">Informe o numero de paginas do livro: </label>
            <br>
            <input type="text" id="paginas" name="paginas" >
            <br><br>
            
        <input type="submit" value="Cadastrar" class="enviar">
        </form>  
        <br><br><br>




        <form method="post" action="consulta_livro.php" class=">
        
            <label for="name">
                <h3>Consulta de livros</h3>
                Preencha AQUI:
                <br><br>
                    ID: 
                    <br>
                <input type="number" name="dado[]"    placeholder= "Digite o ID Ex: 1,2,3...">
                    <br>
                    Nome:
                    <br>
                <input type="text" name="dado[]"  placeholder= "Digite o nome do livro">
                    <br>
                    Quantidade de estoque:
                    <br>
                <input type="text" name="dado[]"  placeholder= "informe a quantidade de livros no estoque " >
                    <br>
                    Preço:
                    <br>
                <input type="text" name="dado[]"   placeholder= "Digite o preço do livro">
                    <br>
                    Categoria:
                    <br>
                <input type="text" name="dado[]"  placeholder= "Digite a categoria do livro">
                    <br>
                    Autor:
                    <br>
                <input type="text" name="dado[]"  placeholder= "Informe o nome do autor">
                    <br>
                    Paginas:
                    <br>
                <input type="text" name="dado[]"  placeholder= "Informe o numero de paginas">
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
            <th>ID</th> <th>Livro</th>
            <th>Quantidade de estoque</th> <th>Preço</th>  
            <th>Categoriaca</th> <th>Autor</th> 
            <th>Paginas</th> <th>Escolha</th>
            
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
        
            $sql = "SELECT * FROM cadastro_produto  ";
            
            $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

            //loop para ler todos os registros  
            
            while( $registro = mysqli_fetch_array($resultado))
            {
                $pro_id = $registro['pro_id'];
                $pro_nomeProduto = $registro['pro_nomeProduto'];
                $pro_quantidadeEstoque = $registro['pro_quantidadeEstoque'];
                $pro_preco = $registro['pro_preco'];
                $pro_categoria = $registro['pro_categoria'];
                $pro_autor = $registro['pro_autor'];
                $pro_numeroPaginas = $registro['pro_numeroPaginas'];

                echo"<tr>";
                echo "<td>".$pro_id."</td>";
                echo "<td>".$pro_nomeProduto."</td>";
                echo "<td>".$pro_quantidadeEstoque."</td>";
                echo "<td>".$pro_preco. "</td>";
                echo "<td>".$pro_categoria."</td>";
                echo "<td>".$pro_autor."</td>";
                echo "<td>".$pro_numeroPaginas."</td>";
                
        
                echo"<td>";
                echo"<center>";
                echo"<form method='post' action='updateLivro.php'>";
                
                echo"<input type='hidden' name='escolha' value=".$pro_id.">";
                echo"<input type='submit' value='Update' class='botao' >";
                echo"</form>";
                echo"<form method='post' action='deleteLivro.php'>";
                echo"<input type='submit' value='Excluir' class='botao'>";
                echo"<input type='hidden' name='escolha' value=".$pro_id.">";
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