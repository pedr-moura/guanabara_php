<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Desafio 12</h1>
    </header>
    <?php 
    $n1 = $_POST['n1'] ?? 0;
    ?>
    <section>
        Calcular tempo...
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">

    <label for="n1">Quantos segundos?</label>
    <input type="number" name="n1" id="" placeholder="numeros de segundos..." value="<?php echo $n1 ?>" required>

    <input type="submit" value="Analisar 🧐">
    <br>
    </form>  
    <section>
        <?php 
  
        $numSemanas = intval($n1 / 604800);

        $numdias = intval($n1 / 86400)  - ($numSemanas * 7);

        $numhoras = intval($n1 / 3600)  - ($numdias * 24) - ($numSemanas * 168);

        $numminutos = intval($n1 / 60)  - ($numhoras * 60) - ($numdias * 1440) - ($numSemanas * 10080);
        
        $numsegundos = intval($n1 / 1)  - ($numminutos * 60) - ($numhoras * 3600)- ($numdias * 86400) - ($numSemanas * 604800);



       echo "Analisando o que você digitou, <b>".number_format($n1, 0,',','.')."</b> segundos equivalem a um total de:<br>";
if($n1 == 0){}{
    echo "<ul>
            <li>".intval($numSemanas)." semanas</li>
            <li>".intval($numdias)." dias</li> 
            <li>".intval($numhoras)." horas</li> 
            <li>".intval($numminutos)." minutos</li> 
            <li>".intval($numsegundos)." segundos</li> 
         </ul>";
}
        ?>
    </section>

</body>
</html>