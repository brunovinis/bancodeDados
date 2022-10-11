

<html>
<head>
            <title>Candidato</title>
            <link rel="stylesheet" href="pedido.css">
        </head>
    <body>
        

        <h1>Votação</h1>
        
        
        <?php   

        $servername = "localhost";
        $database = "imgcandidato";
        $username = "root";
        $password = "";
        
        $campo=$_POST["candidato"];
       

        //cria conexão
        
        $conn = mysqli_connect($servername, $username, $password, $database);
       
        //Verifica essa escolha de comando
        

        //Verifica conex�o
        if(!$conn){
            die("falha na conexão: ". mysqli_connect_error());
        }

        echo "conectado com sucesso";
        //Verifica essa escolha de comando
       
       echo $campo;
            $sql = "SELECT * FROM candidato where id_candidato = $campo ";
        
        
            $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");
        
            //loop para ler todos os registros  
    
            while( $registro = mysqli_fetch_array($resultado))
            {
                $id_candidato = $registro['id_candidato'];
                $cand_nome = $registro['cand_nome'];
                $cand_numero = $registro['cand_numero'];
                $cand_foto = $registro['cand_foto'];
                
                
                echo"<table border='1' style='width:50%'>";
                echo"<tr>";  
                echo"<th>Numero</th>"; 
                echo"</tr>";
                
    
                echo"<tr>";
                echo "<td>".$cand_numero."</td>";
                
                echo"</tr>";
                echo "</table>";
                

                echo"<table border='1' style='width:50%'>";
                echo"<tr>";  
                echo"<th>Nome</th> <th>Foto</th>"; 
                echo"</tr>";
                
    
                echo"<tr>";
                echo "<td>".$cand_nome."</td>";
                echo "<td>"."<img src='$cand_foto' height='150px' width='150px'>"."</td>";
                echo"</tr>";
                echo "</table>";
            }
     
        
       
        mysqli_close($conn);
        

        echo"<br><br>";
        echo"<form method='post' action='guardaVoto.php'>";
        echo"<input type='submit' value='Confirmar' class='enviar'>";
        echo"<input type='hidden' name='confirma' value= $id_candidato>";
        echo"</form>";
        echo"<form method='post' action='votacao.php'>";
        echo"<input type='submit' value='Cancelar' class='enviar'>";
        echo"</form>";
        ?>
        
    
       
       
    </body>
</html