<?php
$servername = "localhost";
$database = "carro";
$username = "root";
$password = "";
$placa = $_POST['placa'];
$chassi = $_POST['chassi'];
$modelo = $_POST['modelo'];
$marca = $_POST['marca'];
$cor = $_POST['cor'];

//cria conexão

$conn = mysqli_connect($servername, $username, $password, $database);

//Verifica conexão
if(!$conn){
    die("falha na conexão: ". mysqli_connect_error());
}

echo "conectado com sucesso";

$sql = "INSERT INTO carro ( car_id,
                                car_placa,
                                car_chassi,
                                car_modelo,
                                car_marca,
                                car_cor)VALUES
                                ('',
                                '$placa',
                                '$chassi',
                                '$modelo',
                                '$marca',
                                '$cor')";
if(mysqli_query($conn, $sql)){
    echo"<br>Registro Gravado com Sucesso";
}else{
    echo "Error: ". $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


?>

<body> <html> <head>
    <title>Resultado da pesquisa</title>
</head>

    <table border="1" style='width:50%'>
    <tr>  
        <th>ID</th> <th>Placa</th>
        <th>Chassi</th> <th>Modelo</th>  
        <th>Marca</th> <th>Cor</th>  
    </tr>
    <?php   

    $servername = "localhost";
    $database = "carro";
    $username = "root";
    $password = "";
    $campo= ["car_id", "car_placa", "car_chassi","car_modelo","car_marca", "car_cor"];
    $i = 0;
    $sequencia="";
    $comando="";  

    //cria conexÃ£o
    
    $conn = mysqli_connect($servername, $username, $password, $database);

    //Verifica conexï¿½o
    if(!$conn){
        die("falha na conexÃ£o: ". mysqli_connect_error());
    }

    echo "conectado com sucesso";
    //Verifica essa escolha de comando
    if(isset($_POST["dado"])){
        foreach($_POST["dado"]as $dado){

   //Faz o loop
            if($dado <> ""){
                if($sequencia == "")
                $sequencia= 1 ;
                else
                    $comando = $comando . " and ";
                
                $comando = $comando . $campo[$i] ."="."'".$dado."' ";
                echo"- ". $campo[$i] . "---".  $dado."<br>";
            }
            $i++;
        }

      
   }
   else
   {
    echo "nenhum campo selecionado";
   }

   
    $sql = "SELECT * FROM carro  ";
    
    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

    //loop para ler todos os registros  

    while( $registro = mysqli_fetch_array($resultado))
    {
        $car_id = $registro['car_id'];
        $car_placa = $registro['car_placa'];
        $car_chassi = $registro['car_chassi'];
        $car_modelo = $registro['car_modelo'];
        $car_marca = $registro['car_marca'];
        $car_cor = $registro['car_cor'];
        //$cad_cep = $registro['Cad_cep'];

        //if($Numero == $Cad_id){
        echo"<tr>";
        echo "<td>".$car_id."</td>";
        echo "<td>".$car_placa."</td>";
        echo "<td>".$car_chassi."</td>";
        echo "<td>".$car_modelo. "</td>";
        echo "<td>".$car_marca."</td>";
        echo "<td>".$car_cor."</td>";
        //echo "<td>".$Cad_cep."</td>";
        echo"</tr>";
        //}
    
    }

    mysqli_close($conn);
    echo "</table>";
    ?>
  

        <br><br>
        <form method="post" action="cadastro.html">
        <input type="submit" value="Pagina anterior" class="enviar">
        </form>
    </body>
</html>