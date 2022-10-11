<html>
    <body>
        <head>
            <title>Livros encontrados</title>
            <link rel="stylesheet" href="vendedor.css">
        </head>

        <table border="1" style='width:50%'>
        <tr>  
            <th>ID</th> <th>Nome</th>
            <th>CPF</th><th>Telefone</th>
            <th>Idade</th> <th>Expediente</th> 
            <th>Data de nascimento</th> <th>Carteira de trabalho</th> 
        </tr>
        
        <?php   

        $servername = "localhost";
        $database = "vendas_01";
        $username = "root";
        $password = "";
        $campo= ["ven_id", "ven_nome", "ven_cpf","ven_telefone","ven_idade", "ven_expediente", "ven_nascimento", "ven_carteiraTrabalho"];
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
            $sql = "SELECT * FROM cadastro_vendedor where $comando ";
        }else{
            $sql = "SELECT * FROM cadastro_vendedor";
        }
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
            echo"</tr>";
            
        
        }
        echo "</table>";
        mysqli_close($conn);
        
        ?>
    
        <br><br>
        <form method="post" action="vendedor.php">
        <input type="submit" value="Pagina anterior" class="enviar">
        </form>
    </body>
</html>