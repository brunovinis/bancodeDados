<?php
$servername = "localhost";
$database = "imgcandidato";
$username = "root";
$password = "";
$candidato = $_POST["confirma"];

//cria conex�o

$conn = mysqli_connect($servername, $username, $password, $database);

//Verifica conex�o
if(!$conn){
    die("falha na conexção: ". mysqli_connect_error());
}



$sql = "INSERT INTO votos   (candidato_id_candidato)VALUES
                            ('$candidato')";

if(mysqli_query($conn, $sql)){
    
}else{
    echo "Error: ". $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


?>

 <html>
     <head>
        <title>Resultado da pesquisa</title>
    </head>
    <body>
        <center>
            <h1>Voto Salvo</h1>
            <br>
            <h2>Obrigdo pela Participação<h2>
            
            <br><br>
            <form method="post" action="votacao.php">
            <input type="submit" value="Votar outra vez" class="enviar">
            </form>
        </center>
    </body>
</html>
