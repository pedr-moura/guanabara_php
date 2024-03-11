<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>

    <main>
        <?php 
            $nome = $_GET["nome"] ?? "Você";
            $sobrenome = $_GET["sobrenome"] ?? "mesmo";
            echo "é um prazer lhe conhecer, <b> $nome $sobrenome</b>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>