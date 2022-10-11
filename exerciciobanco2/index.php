<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
    </head>
    <body>
        <reader>
            <h1>Bem-vindo ao segundo site de cadestro</h1>
        </reader>
        <p>Por favor preencha os capos abaixo para se cadastrar</p>
        <form method="post" action="conecta-banco.php">
            <div>
                <br><br>
               
                <?php 
                 
                echo"<label for='texto'>Digite o seu nome: </label>";
                echo"<br>";
                echo"<input type='text' id='nome'  name='nome' required>";
                echo"<br><br>";

                echo"<label for='a'>Digite o seu endereço: </label>";
                echo"<br>";
                echo"<input type='text' id='endereco' name='endereco'  required>";
                echo"<br><br>";

                echo"<label for='bairro'>Digite o  seu bairro: </label>";
                echo"<br>";
                echo"<input type='text' id='bairro' name='bairro' required>";
                echo"<br></br>";

                echo"<label for='cidade'>Digite o nome da sua cidade: </label>";
                echo"<br>";
                echo"<input type='text' id='cidade' name='cidade' required>";
                echo"<br><br>";

                echo"<label for='estado'>informe o seu estado: </label>";
                echo"<br>";
                echo"<input type='text' id='estado' name='estado' required>";
                echo"<br><br>";

                echo"<label for='cep'>informe o seu cep: </label>";
                echo"<br>";
                echo"<input type='number' id='cep' name='cep' required>";
                echo"<br><br>";
                
                ?>
            </div>
            <input type="submit" value="Cadastrar" class="enviar">
        </form>

    </body>