<?php
$servername = "localhost";
$database = "vendas_01";
$username = "root";
$password = "";
$idVendedor = $_POST['vendedor'];
$idCliente = $_POST['cliente'];
$peFrete = $_POST['frete'];
$peDestribuidora = $_POST['destribuidora'];

//cria conexão

$conn = mysqli_connect($servername, $username, $password, $database);

//Verifica conexão
if(!$conn){
    die("falha na conexão: ". mysqli_connect_error());
}

echo "conectado com sucesso";

$sql = "INSERT INTO cadastro_pedido  ( pe_id,
                                 vendedor_id,
                                 cliente_id,
                                 pe_valorFrete,
                                 pe_destribuidora)
                                 VALUES
                                ('',
                                '$idVendedor',
                                '$idCliente',
                                '$peFrete',
                                '$peDestribuidora') ";
if(mysqli_query($conn, $sql)){
    echo"<br>Registro Gravado com Sucesso";
}else{
    echo "Error: ". $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


?>

<html> 
    <body> 
        <head>
            <title>Resultado da pesquisa</title>
            <link rel="stylesheet" href="pedido.css">
        </head>

        <table border="1" style='width:50%'>
        <tr>  
            <th>ID</th> <th>ID Vendedor</th>
            <th>ID Cliente</th> <th>Frete</th> 
            <th>Destribuidora</th>
        </tr>
        <?php   

        $servername = "localhost";
        $database = "vendas_01";
        $username = "root";
        $password = "";
    

        //cria conexÃ£o
        
        $conn = mysqli_connect($servername, $username, $password, $database);

        //Verifica conexï¿½o
        if(!$conn){
            die("falha na conexÃ£o: ". mysqli_connect_error());
        }

        echo "conectado com sucesso";
        //Verifica essa escolha de comando
    
        $sql = "SELECT cli_nome, ven_nome, pe_id, vendedor_id, cliente_id, pe_valorFrete, pe_destribuidora FROM 
        vendas_01.cadastro_cliente, vendas_01.cadastro_vendedor,vendas_01.cadastro_pedido WHERE cliente_id = cli_id AND vendedor_id = ven_id  
        ORDER BY cliente_id ASC ";
        
        $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

        //loop para ler todos os registros  
        
        while( $registro = mysqli_fetch_array($resultado))
        {
            $pe_id = $registro['pe_id'];
            $vendedor_id = $registro['vendedor_id'];
            $cliente_id = $registro['cliente_id'];
            $pe_valorFrete = $registro['pe_valorFrete'];
            $pe_destribuidora = $registro['pe_destribuidora'];
            $cli_nome = $registro['cli_nome'];
            $ven_nome = $registro['ven_nome'];

            echo"<tr>";
            echo "<td>".$pe_id."</td>";
            echo "<td>".$ven_nome. "</td>";
            echo "<td>".$cli_nome."</td>";
            echo "<td>".$pe_valorFrete."</td>";
            echo "<td>".$pe_destribuidora."</td>";
            echo"<tr>";
        }

        mysqli_close($conn);
        echo "</table>";
        ?>
    

            <br><br>
        <form method="post" action="pedidos_completo.php">
            <input type="submit" value="Pagina anterior" class="enviar">
        </form>
    </body>
    
</html>