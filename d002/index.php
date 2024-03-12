<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Desafio 02</h1>
    </header>

    <section>
        Gerando um valor aleatorio entre 0 e 100...

        <br>
        <?php 
        $aleatorio = mt_rand(1,100);
        echo "O numero gerado é <b>$aleatorio</b>";
        ?>
<br><br>
        <button onclick="location.reload()">Gerar numero aleatorio </button>

    </section>


</body>
</html>