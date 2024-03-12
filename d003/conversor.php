<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3</title>
    <link rel="stylesheet" href="style.css">
    <style>
        span{
            color: grey;
        }
    </style>
</head>
<body>
    <header>
        <h1>Desafio 03</h1>
    </header>

    <section>
    Conversor de moedas v1.0
        <br>
    <?php 
            //COTACOES
            $cotDolar = 4.98;
            $cotEuro = 5.44;
            $cotWon = 0.0038;
            //

        $real = str_replace(',', '.', $_GET["real"]);
        $dolar = number_format(($real / $cotDolar),2);
        $euro = number_format(($real / $cotEuro),2);
        $won = number_format(($real / $cotWon),2);



        echo "Seus <b> R$ $real </b> valem atualmente: <br>
        <b>$ $dolar Dólares </b><br>
        <b>$ $euro Euros </b><br>
        <b>$ $won Wons </b><br>
        <br>
        <span>
        Cotações:<br>
        Dólar:  R$ $cotDolar <br>
        Euro:   R$ $cotEuro <br>
        Won:    R$ $cotWon <br>
        </span>
        ";
    ?>

        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </section>
</body>
</html>