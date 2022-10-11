<body> <html> <head>
<link rel="stylesheet" href="vendedor.css">
 <title>Resultado da exclus�o</title>
 </head> </body>
  
<?php
$servername = "localhost";
$database = "vendas_01";
$username = "root";
$password = "";
$dados = "";
$dados                = $_POST["dados"];
$ven_id               = $dados[0];
$ven_nome             = $dados[1];
$ven_cpf              = $dados[2];
$ven_telefone         = $dados[3];
$ven_idade            = $dados[4];
$ven_expediente       = $dados[5];
$ven_nascimento       = $dados[6];
$ven_carteiraTrabalho = $dados[7];


echo $ven_id;
echo $ven_nome;
echo $ven_cpf;
echo $ven_telefone;
echo $ven_idade;
echo $ven_expediente;
echo $ven_nascimento;
echo $ven_carteiraTrabalho;

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
        "UPDATE cadastro_vendedor 
        set 
        ven_nome                 = '$ven_nome',
        ven_cpf                  = '$ven_cpf',
        ven_telefone             = '$ven_telefone'
        ven_idade                = '$ven_idade',
        ven_expediente           = '$ven_expediente',
        ven_nascimento           = '$ven_nascimento', 
        ven_carteiraTrabalho     = '$ven_carteiraTrabalho'
        WHERE ven_id             =  $ven_id";      
   
    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
    echo "estou aqui".$ven_id;
    }
 mysqli_close($conn);

 ?>
<meta http-equiv="refresh" content="0; URL='vendedor.php'"/>
</body>
</html>