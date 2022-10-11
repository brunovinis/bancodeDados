<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <link rel="stylesheet" href="2campos.css">
    </head>
    <body>
        <reader>
            <h1>Bem-vindo ao site de pesquisa de cadastros em banco de dados </h1>
        </reader>
        <div class meio>
        <p>Por favor preencha o campo abaixo para realizar a  sua pesquisa</p>
        <form method="post" action="conecta-banco-consulta.php">
        
            <label for="name">
                Escolha um primeiro item de pesquisa:
                <br>
                    ID: 
                <input type="text" name="dado[]"  id="ID"checked placeholder= "Digite o seu ID">
                    <br>
                    Nome:
                <input type="text" name="dado[]" id="Nome"checked placeholder= "Digite o seu Nome" >
                    <br>
                    Endereço:
                <input type="text" name="dado[]" id="Endereco"checked placeholder= "Digite o seu Endereço">
                    <br>
                    Bairro:
                <input type="text" name="dado[]" id="Endereco"checked placeholder= "Digite o seu Bairro">
                    <br>
                    Cidade:
                <input type="text" name="dado[]" id="Cidade"checked placeholder= "Digite a sua Cidade">
                    <br>
                    Estado:
                <input type="text" name="dado[]" id="Estado"checked placeholder= "Digite o seu Estado">
                    <br>
                    Cep:
                <input type="text" name="dado[]" id="Cep"checked placeholder= "Digite o seu Cep">
                    

            </label>
            <!--
            <br><br>

            <label for="name">
                Escolha um segundo item de pesquisa:
                <br>
                <input type="radio" value="idCadastro" name="escolha2"  id="ID"checked>
                    ID
                    <br>
                <input type="radio" value="Cad_nome"name="escolha2" id="Nome"checked>
                    Nome
                    <br>
                <input type="radio" value="Cad_endereco"name="escolha2" id="Endereco"checked>
                    Endereço
                    <br>
                <input type="radio" value="Cad_cidade"name="escolha2" id="Cidade"checked>
                    Cidade
                    <br>
                <input type="radio" value="Cad_estado"name="escolha2" id="Estado"checked>
                    Estado
                    <br>
                <input type="radio" value="Cad_cep"name="escolha2" id="Cep"checked>
                    Cep
            </label>


            <br><br>
            <label for="item1"> Escolha um item a ser pesquisado : 
            <input type="text"  name="item1" requered placeholder="escreva aqui">
            </label>
            <br><br>
            <label for="item2"> Escolha um segundo item a ser pesquisado : 
            <input type="text"  name="item2" requered placeholder="escreva aqui">
            </label>
            -->
            <br><br>
            <input type="submit" value="Pesquisar ID" class="enviar">
        </from>
            </div>
    </body>

<html>
       