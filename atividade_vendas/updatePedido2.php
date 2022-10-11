<body> <html> <head>
<link rel="stylesheet" href="pedido.css">
 <title>Resultado da exclusao</title>
 </head> </body>
  
<?php
$servername = "localhost";
$database = "vendas_01";
$username = "root";
$password = "";
$dados = "";
$dados             = $_POST["dados"];
$pe_id             = $dados[0];
$vendedor_id       = $dados[1];
$cliente_id        = $dados[2];
$pe_valorFrete     = $dados[3];
$pe_destribuidora  = $dados[4];



echo  $pe_id;
echo  $vendedor_id;
echo  $cliente_id;
echo  $pe_valorFrete;
echo  $pe_destribuidora;


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
        "UPDATE cadastro_pedido 
        set 
        vendedor_id         = '$vendedor_id',
        cliente_id          = '$cliente_id',
        pe_valorFrete       = '$pe_valorFrete',
        pe_destribuidora    = '$pe_destribuidora' 
        WHERE pe_id         = $pe_id";      
   
    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
    echo "estou aqui".$pe_id;
    }
 mysqli_close($conn);

 ?>
<meta http-equiv="refresh" content="0; URL='pedido.php'"/>
</body>
</html>