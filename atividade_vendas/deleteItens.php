<?php
$servername = "localhost";
$database = "vendas_01";
$username = "root";
$password = "";
$dados = $_POST['escolha'];


//cria conexo

$conn = mysqli_connect($servername, $username, $password, $database);

//Verifica conexo
if(!$conn){
    die("falha na conexo: ". mysqli_connect_error());
}

echo "conectado com sucesso";




$sql = "DELETE  FROM 
 itens_pedido WHERE iditens_pedido = $dados ";

$resultado = mysqli_query($conn,$sql) or die("Erro oa retornar dados");

if(mysqli_query($conn, $sql)){
    echo"<br>Registro Deletado com Sucesso";
}else{
    echo "Error: ". $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


?>

  <br><br>
        <form method="post" action="pedidos_completo.php">
        <input type="submit" value="Pagina anterior" class="enviar">
        </form>
        <meta http-equiv="refresh" content="0  ; URL='pedidos_completo.php'"/>
    </body>
</html>


