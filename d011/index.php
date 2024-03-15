<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Desafio 11</h1>
    </header>
    <?php 
    $n1 = $_POST['n1'] ?? '';
    $p1 = $_POST['p1'] ?? 0;
    ?>
    <section>
        Calcular idade...
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">

    <label for="n1">Valor do produto</label>
    <input type="number" name="n1" id="" placeholder="R$..." step="0.01" value="<?php echo $n1 ?>" required>
    <label for="p1">Reajuste de <b><span id="span"></span>%</b></label>
    <input type="range" name="p1" id="range" class="slider" min="0" max="100" value="<?php echo $p1 ?>" required>

    <input type="submit" value="Analisar 🧐">
    <br>
    </form>  
    <section>
        <?php 
        $valor = $n1 + ($n1 * ($p1/100));

        echo "O produto que custava R$".number_format($n1, 2,',','.').", com <b>$p1% de aumento</b> vai passar a custar <b>R$".number_format($valor,2,',','.')."</b>.";
        ?>
    </section>

    <script>
        var slider = document.getElementById("range");
        var output = document.getElementById("span");
        output.innerHTML = slider.value;

        slider.oninput =function(){
            output.innerHTML = this.value;
        }
    </script>
</body>
</html>