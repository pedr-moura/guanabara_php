<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Desafio 05</h1>
    </header>

    <section>

        <?php 
        if(isset($_GET["real"])) {
            $real = floatval($_GET["real"]);
            $int = intval($real);
            $frac = number_format(($real - $int), 3);

            $numReal = str_replace(',','.', number_format($real, 3));

            echo "Analisando o número <b>$numReal</b> informado pelo usuário: <br>";

            echo "<ul>
            <li>A parte inteira do número é $int</li>
            <li>A parte fracionária do número é $frac</li>
            </ul>";
        }
        ?>
    </section>
</body>
</html>
