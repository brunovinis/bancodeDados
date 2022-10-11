<body> <html> <head>
 <title>Resultado da update</title
 <link rel="stylesheet" href="clientes.css">
 </head> </body>
  
<?php
$servername = "localhost";
$database = "vendas_01";
$username = "root";
$password = "";
$dados = "";
$dados                  = $_POST["dados"];
$iditens_pedido         = $dados[0];
$item_Quantidade        = $dados[1];






// Cria Conexão
$conn = mysqli_connect($servername, $username, 
                       $password, $database);
// Verificar Conexão
if (!$conn) {
      die("falha na conexão: " . mysqli_connect_error());
}
echo "<br>Conectado com sucesso<br>";
// Verifica escolha de campos
if(isset($_POST["dados"]))
    {

        $sql = 
        "UPDATE itens_pedido
        set 
        item_Quantidade        = $item_Quantidade
       
        WHERE iditens_pedido   =  $iditens_pedido";
   
    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
    echo "estou aqui".$iditens_pedido;
    }
 mysqli_close($conn);

 ?>
<meta http-equiv="refresh" content="0; URL='pedidos_completo.php'"/>
</body>
</html>