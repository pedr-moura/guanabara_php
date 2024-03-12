<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 4</title>
    <link rel="stylesheet" href="style.css">
    <style>
        span{
            color: grey;
        }
    </style>
</head>
<body>
    <header>
        <h1>Desafio 04</h1>
    </header>

    <section>
    Conversor de moedas v2.0
        <br>
    <?php 
        $linkDoBancoCentral = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao=%2703-11-2024%27&$top=100&$skip=0&$format=json&$select=cotacaoVenda';
        $passandoPraJson = file_get_contents($linkDoBancoCentral);
        $json = json_decode($passandoPraJson, true);

        $cotDolar =number_format(($json['value'][0]['cotacaoVenda']) , 2);

        $real = str_replace(',', '.', $_GET["real"]);
        $dolar = number_format(($real / $cotDolar) , 2);



        echo "Seus <b> R$ $real </b> valem atualmente: <br>
        <b>$ $dolar Dólares </b><br>

        <br>
        <span>
        Cotações:<br>
        Dólar:  R$ $cotDolar <br>

        </span>
        ";
    ?>

        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </section>
</body>
</html>