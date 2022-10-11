<body> <html> <head>

    <title>Resultado da pesquisa</title>
</head>

    <table border="1" style='width:50%'>
    <tr>  
        <th>ID</th> <th>Candidato</th>
        <th>N�mero</th> <th>Imagem</th>  
         
    </tr>
    <?php   

    $servername = "localhost";
    $database = "imgcandidato";
    $username = "root";
    $password = "";
 

    //cria conexão
    
    $conn = mysqli_connect($servername, $username, $password, $database);

    //Verifica conex�o
    if(!$conn){
        die("falha na conexão: ". mysqli_connect_error());
    }
   
    $sql = "SELECT * FROM candidato ";
    
    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

    //loop para ler todos os registros  

    while( $registro = mysqli_fetch_array($resultado))
    {
        $id_candidato = $registro['id_candidato'];
        $cand_nome = $registro['cand_nome'];
        $cand_numero = $registro['cand_numero'];
        $cand_foto = $registro['cand_foto'];
        
        echo"<tr>";
        echo "<td>".$id_candidato."</td>";
        echo "<td>".$cand_nome."</td>";
        echo "<td>".$cand_numero."</td>";
        echo "<td>"."<img src='$cand_foto' height='90px' width='100px'>"."</td>";
      
        echo"</tr>";
        
    
    }

    mysqli_close($conn);
    echo "</table>";
    ?>
  

        <br><br>
        <form method="post" action="candidato.html">
        <input type="submit" value="Pagina anterior" class="enviar">
        </form>
    </body>
</html>