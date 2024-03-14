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
        <h1>Desafio 07</h1>
    </header>
<?php 
    $salario = $_POST['salario'] ?? 0;
 
if($salario == 0){
    $value = '';
}else{
    $value = number_format($salario, 0, ',','.');

    //contagem inteira 
    $salmin = 1420;
    $cont = intval($salario/$salmin);
    $rest = $salario - ($cont * $salmin);
}
        ?>
    <section>
        Salarios
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">

        <label for="salario">Informe seu salário...</label>
        <input type="number" name="salario" id="" placeholder="R$<?php echo $value ?>" required>

        <input type="submit" value="Calcular">
        <p>Considerando o salario minimo de <b>R$ 1.420,00</b></p>
        </form>
           
        <div class="box">

<?php 
echo "Quem recebe um salário de R$$value, <br> ganha <b>$cont salários mínimos</b> + R$".number_format($rest, 0,",",".");
?>

        </div>
       
    </section>
</body>
</html>