<html> 
    <head>
        <link rel="stylesheet" href="games.css">
        <title>Jogos encontrados</title>
    </head> 
    <body>
        <center> 
        <table border="1" style='width:50%' class="tabela">
            <tr>  
                <th>ID</th> <th>Jogo</th>
                <th>Pre�o</th> <th>Desenvolvedora</th>  
                <th>Genero</th> <th>Plataforma</th> 
            </tr>
        
            <?php   

            $servername = "localhost";
            $database = "games";
            $username = "root";
            $password = "";
            $campo= ["idconsulta_games", "con_nome", "con_preco","con_desenvolvedora","con_genero", "con_plataforma"];
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

            //mostra a tabela filtrada ou mostra comleto
            if($comando <> ""){
                $sql = "SELECT * FROM consulta_games where $comando ";
            }else{
                $sql = "SELECT * FROM consulta_games";
            }
            
            $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

            //loop para ler todos os registros  

            while( $registro = mysqli_fetch_array($resultado))
            {
                $idconsulta_games = $registro['idconsulta_games'];
                $con_nome = $registro['con_nome'];
                $con_preco = $registro['con_preco'];
                $con_desenvolvedora = $registro['con_desenvolvedora'];
                $con_genero = $registro['con_genero'];
                $con_plataforma = $registro['con_plataforma'];
            
                

                echo"<tr>";
                echo "<td>".$idconsulta_games."</td>";
                echo "<td>".$con_nome."</td>";
                echo "<td>".$con_preco."</td>";
                echo "<td>".$con_desenvolvedora. "</td>";
                echo "<td>".$con_genero."</td>";
                echo "<td>".$con_plataforma."</td>";
                echo"</tr>";
                
            
            }
        echo "</table>";
        mysqli_close($conn);
        
        ?>
    
        <br><br>
        <form method="post" action="games.php">
        <input type="submit" value="Pagina anterior" class="enviar">
        </form>
        </center>
    </body>
</html>