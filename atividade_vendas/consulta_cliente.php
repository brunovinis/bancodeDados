<body> <html> <head>
    <title>Livros encontrados</title>
    <link rel="stylesheet" href="clientes.css">
</head>

    <table border="1" style='width:50%'>
        <tr>  
            <th>ID</th> <th>Nome</th>
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
    $campo= ["cli_id", "cli_nome", "cli_cpf","cli_idade","cli_nascimento", "cli_rg", "cli_endereco", "cli_estado", "cli_telefone"];
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
        $sql = "SELECT * FROM cadastro_cliente where $comando ";
    }else{
        $sql = "SELECT * FROM cadastro_cliente";
    }
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
        echo"</tr>";
        
    
    }
    echo "</table>";
    mysqli_close($conn);
    
    ?>
    
        <br><br>
        <form method="post" action="clientes.php">
        <input type="submit" value="Pagina anterior" class="enviar">
        </form>
    </body>
</html>