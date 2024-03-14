<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Desafio 08</h1>
    </header>
<?php 
    $numero = $_POST['numero'] ?? 0;
    if($numero == 0){
        $value ='';
    }else{
        $value = number_format(($numero), 2,',','.');

        $quadrado = number_format(($numero ** 2), 2,',','.');
        $cubo = number_format(($numero ** 3), 2,',','.');
    }
?>
    <section>
        X² e x³
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">

        <label for="numero">Informe o numero...</label>
        <input type="number" name="numero" id="" placeholder="<?php echo $value ?>" required>

        <input type="submit" value="Calcular">

        </form>
           
        <div class="box">

<?php 
if($numero == 0){

}else{
    echo "Analisando o numero <b>$numero</b>, temos:<br>

<ul>
<li>A sua raiz quadrada é <b>$quadrado</b></li>
<li>A sua raiz cubica é <b>$cubo</b></li>
</ul>
";
}
?>

        </div>
       
    </section>
</body>
</html>