<?php
$servername = "localhost";
$database ="imgcandidato";
$username = "root";
$password = "";
$canNome = $_POST['nome'];
$canNumero = $_POST['numero'];
$file = $_FILES["foto"];
$nomeImagem = $file["name"];
//$dir = "img/imagens";
$tipoimg = $file["type"];
$imgTamanho = $file["size"];
//cria conexão

$conn = mysqli_connect($servername, $username, $password, $database);

//Verifica conexão
echo $imgTamanho;
if(!$conn){
    die("falha na conexão: ". mysqli_connect_error());
}
if($imgTamanho < 10000){
    if($tipoimg == 'image/png' || $tipoimg == 'image/jpeg'){


        if(move_uploaded_file($file["tmp_name"],$file["name"])){
            echo "Arquivo anviado com sucesso!";
        }
        else{
            echo"Erro aquivo não pode ser enviado";
        }

        $sql = "INSERT INTO candidato ( id_candidato,
                                        cand_nome,
                                        cand_numero,
                                        cand_foto)VALUES
                                        ('',
                                        '$canNome',
                                        '$canNumero',
                                        '$nomeImagem')";

        if(mysqli_query($conn, $sql)){
            
        }else{
            echo "Error: ". $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);

    }
    else{
        echo"Imagem com formato invalido";
        echo"<br>";
        echo"Por favor use somente imagens com final .jpeg, .jpg, .png";
    }
}else{
    echo"Imagem muito grande por favor escolha uma imagems com menos de 10000 pixels";
}
?>

<body> <html> <head>

    <title>Resultado da pesquisa</title>
</head>

    <table border="1" style='width:50%'>
    <tr>  
        <th>ID</th> <th>Candidato</th>
        <th>Número</th> <th>Imagem</th>  
         
    </tr>
    <?php   

    $servername = "localhost";
    $database = "imgcandidato";
    $username = "root";
    $password = "";
 

    //cria conexÃ£o
    
    $conn = mysqli_connect($servername, $username, $password, $database);

    //Verifica conexï¿½o
    if(!$conn){
        die("falha na conexÃ£o: ". mysqli_connect_error());
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