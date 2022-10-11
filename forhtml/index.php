<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Calcular</title>
    </head>
    <body>
        <center>
            <form method="post" action="forhtml.php">
            <h1>Quantidade de campos: </h1>
            <?php
            echo "<br>";
            for($i = 1; $i <= 10; $i++){
                echo "<input type='text' name='".$i."coluna'/>";
                echo "<br> <br>";
            }
            ?>
            <input type="submit" value="Calcular">
            </form>
        </center>
    </body>

</html>


