<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Desafio 10</h1>
    </header>
    <?php 
    $ano = date('Y');
    $n1 = $_POST['n1'] ?? '';
    $p1 = $_POST['p1'] ?? $ano;
    ?>
    <section>
        Calcular idade...
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">

    <label for="n1">Ano do nascimento</label>
    <input type="number" name="n1" id="" placeholder="Em que ano vc nasceu?" value="<?php echo $n1 ?>" required>
    <label for="p1">Ano para comparar</label>
    <input type="number" name="p1" id=""  value="<?php echo $p1 ?>" required>

    <input type="submit" value="Analisar 🧐">
    <br>
    <p>Atualmente estamos em <b><?php echo $ano ?></b></p>
    </form>  
    <?php 

    if($n1 == ''){

    }else{
    $old = $p1 - $n1;
    echo "<p>Quem nasceu em $n1, no ano de $p1 tem <b>$old anos</b>.</p>";
    }
    ?> 
    </section>
</body>
</html>