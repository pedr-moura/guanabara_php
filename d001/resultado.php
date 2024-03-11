<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Desafio 01</h1>
    </header>

    <section>
        <?php 
            $numero = $_GET["numero"];

            $ant = $numero - 1;
            $prox = $numero + 1;

            echo "
            Seu número escolhido foi <b>$numero</b>! <br>
            O seu antecessor é $ant,<br>
            e seu sucessor é $prox.
            😀
            <br>
            ";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </section>
</body>
</html>