<body> <html> <head>
    <title>Resultado da pesquisa</title>
</head>

    <table border="1" style='width:50%'>
    <tr>  <th>ID</th> <th>Nome</th>
    <th>Endereço</th> <th>Bairro</th>  <th>Cidade</th>
    <th>Estado</th> <th>Cep</th> </tr>
    <?php   

    $servername = "localhost";
    $database = "banco01";
    $username = "root";
    $password = "";
    $campo= ["idCadastro", "Cad_nome", "Cad_endereco","Cad_bairro","Cad_cidade", "Cad_estado", "Cad_cep"  ];
    $i = 0;
    $sequencia="";
    $comando="";  

    //$item1 = $_POST['item1'];
    //$escolha1 = $_POST['escolha1'];
    //$item2 = $_POST['item2'];
    //$escolha2 = $_POST['escolha2'];
    //$escolha3 = $_POST['escolha3'];
    //$escolha4 = $_POST['escolha4'];
    //$escolha5 = $_POST['escolha5'];
    //$escolha6 = $_POST['escolha6'];
    //$dado[] = $_POST['dado[]'];
    //$dado[0] = idCadastro;
    //$dado[1] = Cad_nome;
    //$dado[2] = Cad_endereco;
    //$dado[3] = Cad_bairro;
    //$dado[4] = Cad_cidade;
    //$dado[5] = Cad_cep;

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
            }
            $i++;
        }

      
   }
   else
   {
    echo "nenhum campo selecionado";
   }

   
    $sql = "SELECT * FROM cadastro where $comando ";
    
    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

    //loop para ler todos os registros  

    while( $registro = mysqli_fetch_array($resultado))
    {
        $Cad_id = $registro['idCadastro'];
        $Cad_nome = $registro['Cad_nome'];
        $Cad_endereco = $registro['Cad_endereco'];
        $Cad_bairro = $registro['Cad_bairro'];
        $Cad_cidade = $registro['Cad_cidade'];
        $Cad_estado = $registro['Cad_estado'];
        $Cad_cep = $registro['Cad_cep'];

        //if($Numero == $Cad_id){
        echo"<tr>";
        echo "<td>".$Cad_id."</td>";
        echo "<td>".$Cad_nome."</td>";
        echo "<td>".$Cad_endereco."</td>";
        echo "<td>".$Cad_bairro. "</td>";
        echo "<td>".$Cad_cidade."</td>";
        echo "<td>".$Cad_estado."</td>";
        echo "<td>".$Cad_cep."</td>";
        echo"</tr>";
        //}
    
    }

    mysqli_close($conn);
    echo "</table>";
    ?>
        <br><br>
        <form method="post" action="index.php">
        <input type="submit" value="Pagina anterior" class="enviar">
        </form>
    </body>
</html>