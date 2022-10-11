<body> <html> <head>
 <title>Resultado da exclus�o</title
 <link rel="stylesheet" href="clientes.css">>
 </head> </body>
  
<?php
$servername = "localhost";
$database = "vendas_01";
$username = "root";
$password = "";
$dados = "";
$dados            = $_POST["dados"];
$cli_id           = $dados[0];
$cli_nome         = $dados[1];
$cli_cpf          = $dados[2];
$cli_idade        = $dados[3];
$cli_nascimento   = $dados[4];
$cli_rg           = $dados[5];
$cli_endereco     = $dados[6];
$cli_estado       = $dados[7];
$cli_telefone     = $dados[8];

echo $cli_id;
echo $cli_nome;
echo $cli_cpf;
echo $cli_idade;
echo $cli_nascimento;
echo $cli_rg;
echo $cli_endereco;
echo $cli_estado;
echo $cli_telefone;

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
        "UPDATE cadastro_cliente 
        set 
        cli_nome                 = '$cli_nome',
        cli_cpf                  = '$cli_cpf',
        cli_idade                = '$cli_idade', 
        cli_nascimento           = '$cli_nascimento', 
        cli_rg                   = '$cli_rg', 
        cli_endereco             = '$cli_endereco',
        cli_estado               = '$cli_estado',
        cli_telefone             = '$cli_telefone'
        WHERE cli_id             =  $cli_id";      
   
    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
    echo "estou aqui".$cli_id;
    }
 mysqli_close($conn);

 ?>
<meta http-equiv="refresh" content="0; URL='clientes.php'"/>
</body>
</html>