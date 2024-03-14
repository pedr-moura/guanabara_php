<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Desafio 06</h1>
    </header>
<?php 
    $n1 = $_GET['n1'] ?? 0;
    $n2 = $_GET['n2'] ?? 0;
?>
    <section>
        Calculadora (+)

        <form action="<?php $_SERVER['PHP_SELF']?>" method="get">
        <input type="number" name="n1" id="" placeholder="Primeiro numero..." value="<?php if($n1 == 0){$s1 = '';}else{$s1 = $n1;} echo "$s1";?>" required>
        <input type="number" name="n2" id="" placeholder="Segundo numero..." value="<?php if($n2 == 0){$s2 = '';}else{$s2 = $n2;} echo "$s2";?>" required>
        <input type="submit" value="Somar">
        </form>
        <p>
        <?php
        $resultado = 0;
        $resultado = $n1 + $n2;
if($resultado == 0){

}else{
    echo "A soma dos números <b>".number_format($n1, 0, ',','.')."</b> e <b>".number_format($n2, 0, ',','.')."</b>, é igual a: <span style='color:green;'><b>". number_format($resultado, 0,',','.') ."</b></span>";
}
 ?>
        </p>
    </section>
</body>
</html>