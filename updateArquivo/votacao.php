<!DOCTYPE html>

<html>
    <meta charset="UTF-8">
    <center>
        <head>
            <title>Votação</title>
        </head>
        <body>
            <h1>Site para votação</h1>
            <h2>Preecha os campos abaixo para contabilizar o seu voto</h2>

            <form action="votoComFoto.php" method="post" enctype="multipart/form-data" accept=".jpg, .png">
              
            Escolha o numero do deu condidato:
                <br>
                <form action="votoComfoto.php">
                <select name='candidato'>
                    
                    <?php   

                    $servername = "localhost";
                    $database = "imgcandidato";
                    $username = "root";
                    $password = "";

                    $conn = mysqli_connect($servername, $username, $password, $database);
                    if(!$conn){
                        die("falha na conexão: ". mysqli_connect_error());
                    }

                    $sql = "SELECT * FROM candidato ";

                    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

                    while( $registro = mysqli_fetch_array($resultado))
                    {
                        $id_candidato = $registro['id_candidato'];
                        $cand_numero = $registro['cand_numero'];
        
                        echo "<option value='$id_candidato' >$cand_numero</option>";
                        //echo "<option value='$ven_id'>$ven_nome</option>";
                    }
                    mysqli_close($conn);
                    ?>

                </select>
                <bt><br>


              

        
                <p>Clique no botão abaixo para prosseguir para a proxima etapa</p>
               
                <button class="confirmaVoto">Prosseguir</button>

                <audio src="confirma1.mp3" id="voto"></audio>
                <script src="votacao.js"></script>
            </form>
        </body>
    </center>       
</html>