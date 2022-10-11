<body> <html> <head>
 <title>Resultado da exclusao</title>
 </head> </body>
  
<?php
$servername = "localhost";
$database = "banco01";
$username = "root";
$password = "";
$dados = "";
$dados         = $_POST["dados"];
$car_id        = $dados[0];
$car_placa     = $dados[1];
$car_chassi    = $dados[2];
$car_modelo    = $dados[3];
$car_marca     = $dados[4];
$car_cor       = $dados[5];


echo  $car_id;
echo  $car_placa;
echo  $car_chassi;
echo  $car_modelo;
echo  $car_marca;
echo  $car_cor;

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
        "UPDATE cadastro 
        set 
        car_placa     = '$car_placa',
        car_chassi    = '$car_chassi',
        car_modelo    = '$car_modelo', 
        car_marca     = '$car_marca', 
        car_cor    = '$car_cor' 
        WHERE car_id  = $car_id";    
   
    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
    echo "estou aqui".$car_id;
    }
 mysqli_close($conn);

 ?>
<meta http-equiv="refresh" content="2; URL=''"/>
</body>
</html>