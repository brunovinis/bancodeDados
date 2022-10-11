<?php
$servername = "localhost";
$database = "vendas_01";
$username = "root";
$password = "";
$idProduto = $_POST['produto'];
$idPedido = $_POST['pedido'];
$qtdPro = $_POST['qtd'];
$ValorUni = $_POST['valorp'];


//cria conexão

$conn = mysqli_connect($servername, $username, $password, $database);

//Verifica conexão
if(!$conn){
    die("falha na conexão: ". mysqli_connect_error());
}

echo "conectado com sucesso";

$sql = "INSERT INTO itens_pedido (iditens_pedido,
                                 cadastro_pedido_pe_id,
                                 cadastro_produto_pro_id,
                                 item_Quantidade,
                                 item_valor)
                                 VALUES
                                ('',
                                '$idPedido',
                                '$idProduto',
                                '$qtdPro' ,
                                '$ValorUni') ";
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
            <th>ID</th> <th>ID produto</th>
            <th>ID Pedido</th> <th>Quantidade</th> 
            <th>Valor</th>
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
    
        $sql = "SELECT pe_id, pro_nomeProduto, iditens_pedido, cadastro_pedido_pe_id,cadastro_produto_pro_id, item_Quantidade, pe_valorFrete, item_valor FROM 
        vendas_01.cadastro_produto,vendas_01.cadastro_pedido, vendas_01.itens_pedido WHERE cadastro_produto_pro_id = pro_id AND cadastro_pedido_pe_id = pe_id ";
        
        $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

        //loop para ler todos os registros  
        
        while( $registro = mysqli_fetch_array($resultado))
        {
            $iditens_pedido = $registro['iditens_pedido'];
            $cadastro_produto_pro_id = $registro['cadastro_produto_pro_id'];
            $cadastro_pedido_pe_id = $registro['cadastro_pedido_pe_id'];
            $item_Quantidade = $registro['item_Quantidade'];
            $item_valor = $registro['item_valor'];
            $pro_nomeProduto = $registro['pro_nomeProduto'];
           

            echo"<tr>";
            echo "<td>".$iditens_pedido."</td>";
            echo "<td>".$pro_nomeProduto. "</td>";
            echo "<td>".$cadastro_pedido_pe_id."</td>";
            echo "<td>".$item_Quantidade."</td>";
            echo "<td>".$item_valor."</td>";
            
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