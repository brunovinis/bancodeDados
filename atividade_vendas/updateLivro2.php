<body> <html> <head>
 <title>Resultado da exclusao</title>
 <link rel="stylesheet" href="produtos.css">
 </head> </body>
  
<?php
$servername = "localhost";
$database = "vendas_01";
$username = "root";
$password = "";
$dados = "";
$dados                  = $_POST["dados"];
$pro_id                 = $dados[0];
$pro_nomeProduto        = $dados[1];
$pro_quantidadeEstoque  = $dados[2];
$pro_preco              = $dados[3];
$pro_categoria          = $dados[4];
$pro_autor              = $dados[5];
$pro_numeroPaginas      = $dados[6];


echo  $pro_id;
echo  $pro_nomeProduto;
echo  $pro_quantidadeEstoque;
echo  $pro_preco;
echo  $pro_categoria;
echo  $pro_autor;
echo  $pro_numeroPaginas;


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
        "UPDATE cadastro_produto 
        set 
        pro_nomeProduto          = '$pro_nomeProduto',
        pro_quantidadeEstoque    = '$pro_quantidadeEstoque',
        pro_preco                = '$pro_preco', 
        pro_categoria            = '$pro_categoria', 
        pro_autor                = '$pro_autor', 
        pro_numeroPaginas        = '$pro_numeroPaginas'
        WHERE pro_id             = $pro_id";      
   
    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
    echo "estou aqui".$pro_id;
    }
 mysqli_close($conn);

 ?>
<meta http-equiv="refresh" content="0; URL='produtos.php'"/>
</body>
</html>