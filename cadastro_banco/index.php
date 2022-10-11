<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
    </head>
    <body>
        <reader>
            <h1>Bem-vindo ao site de cadestro</h1>
        </reader>
        <p>Por favor preencha os capos abaixo para se cadastrar</p>
        <form method="post" action="cadastro.php">
            <div>
                <br><br>
               
                <?php 
                for($i = 1; $i <=10; $i++){

                echo"<label for='texto'>Digite o seu nome: </label>";
                echo"<br>";
                echo"<input type='text' id='nome'  name='".$i."nome' required>";
                echo"<br><br>";

                echo"<label for='a'>Digite o seu endereço: </label>";
                echo"<br>";
                echo"<input type='text' id='endereco' name='".$i."endereco'  required>";
                echo"<br><br>";

                echo"<label for='bairro'>Digite o  seu bairro: </label>";
                echo"<br>";
                echo"<input type='text' id='bairro' name='".$i."bairro' required>";
                echo"<br></br>";

                echo"<label for='cidade'>Digite o nome da sua cidade: </label>";
                echo"<br>";
                echo"<input type='text' id='cidade' name='".$i."cidade' required>";
                echo"<br><br>";

                echo"<label for='estado'>informe o seu estado: </label>";
                echo"<br>";
                echo"<input type='text' id='estado' name='".$i."estado' required>";
                echo"<br><br>";

                echo"<label for='cep'>informe o seu cep: </label>";
                echo"<br>";
                echo"<input type='number' id='cep' name='".$i."cep' required>";
                echo"<br><br>";
                }
                ?>
            </div>
            <input type="submit" value="Cadastrar" class="enviar">
        </form>

    </body>