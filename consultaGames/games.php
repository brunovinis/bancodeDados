<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
    <link rel="stylesheet" href="games.css">
        
    </head>
    <body>
        <h1>Site de consulta de games</h1>

        <form method="post" action="consulta_games.php" >
        
        <label for="nameGames">
            <h3>Consulta de Games</h3>
            Preencha AQUI:
            <br><br>
                ID: 
                <br>
            <input type="number" name="dado[]"    placeholder= "Digite o ID Ex: 1,2,3...">
                <br>
                Nome:
                <br>
            <input type="text" name="dado[]"  placeholder= "Digite o nome do Jogo">
                <br>
                Preço:
                <br>
            <input type="text" name="dado[]"  placeholder= "informe o preço do jogo: " >
                <br>
                Desenvolvedora:
                <br>
            <input type="text" name="dado[]"   placeholder= "Informe a deselvolvedora do jogo">
                <br>
                Genero:
                <br>
            <input type="text" name="dado[]"  placeholder= "Informe o genero do jogo">
                <br>
                Plataforma:
                <br>
            <input type="text" name="dado[]"  placeholder= "Informe a paltarforma do jogo">
                <br>
        
        </label>
       
        <br><br>
        <input type="submit" value="Procurar game(s)" class="enviar">
    </form>

  </body>
</html>  
    