<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Desafio 09</h1>
    </header>
    <?php 
    $n1 = $_POST['n1'] ?? 0;
    $n2 = $_POST['n2'] ?? 0;
    $p1 = $_POST['p1'] ?? 0;
    $p2 = $_POST['p2'] ?? 0;   
    ?>
    <section>
        Média Aritimética
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
    <label for="n1">Nota 1</label>
    <input type="number" name="n1" id="" placeholder="digite a 1ª nota..." step="0.001" value="<?php echo $n1 ?>" required>
    <label for="p1">Peso 1</label>
    <input type="number" name="p1" id="" step="0.001" value="<?php echo $p1 ?>" required>
    <label for="n2">Nota 2</label>
    <input type="number" name="n2" id="" step="0.001" placeholder="digite a 2ª nota..." value="<?php echo $n2 ?>" required>
    <label for="p2">Peso 2</label>
    <input type="number" name="p2" id="" step="0.001" value="<?php echo $p2 ?>" required>

    <input type="submit" value="Analisar 🧐">
    </form>  
    <?php 

    if($n1 == 0){

    }else{

   
    $pesos = $p1 + $p2;
    $perc_p1 = ($p1 / $pesos);
    $perc_p2 = ($p2 / $pesos);

    $nota1= $n1 * $perc_p1;
    $nota2= $n2 * $perc_p2;

    echo "<p>Calculando os valores <b>$n1</b> e <b>$n2</b>, <br>
    <ul>
    <li><b>A Média Aritimética Simples</b> entre os valores é igual a: ".(($n1+$n2)/2)."</li>
    <li><b>A Média Aritimética Ponderada</b> com pesos $p1 e $p2 é igual a ".($nota1+$nota2)."</li>
    </ul> </p>";
    }
    ?> 
    </section>
</body>
</html>