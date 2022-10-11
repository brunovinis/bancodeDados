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

    //cria conexão
    
    $conn = mysqli_connect($servername, $username, $password, $database);

    //Verifica conex�o
    if(!$conn){
        die("falha na conexão: ". mysqli_connect_error());
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
                echo"$comando";
            }
            $i++;
        }

      
   }
   else
   {
    echo "nenhum campo selecionado";
   }

   
    $sql = "SELECT * FROM carro where $comando ";
    
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
    echo "</table>";
    mysqli_close($conn);
    
    ?>
    
        <br><br>
        <form method="post" action="consulta.html">
        <input type="submit" value="Pagina anterior" class="enviar">
        </form>
    </body>
</html>