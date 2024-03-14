<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="style.css">
    <style>
.dividendo {
    padding: 10px;
    border-right: 2px solid;
    position: relative;
    width: 200px;
    text-align: center;
    font-size: 30px;
}
.divisor {
    padding: 10px;
    position: relative;
    border-bottom: 2px solid black;
    width: 185px;
    text-align: center;
    font-size: 30px;
    right: -198px;
    top: -97px;
}
.resultadoDivisao {
    top: -127px;
    padding: 10px;
    border-left: 2px solid;
    position: relative;
    width: 188px;
    text-align: center;
    font-size: 30px;
    right: -198px;
}
.resultadoParaDivisor {
    padding: 10px;
    position: relative;
    width: 200px;
    text-align: center;
    font-size: 30px;
    top: -224px;
}
.box{
    height: 150px;
}

    </style>
</head>
<body>
    <header>
        <h1>Desafio 06</h1>
    </header>
<?php 
    $dividendo = $_POST['dividendo'] ?? 0;
    $divisor = $_POST['divisor'] ?? 0;
?>
    <section>
        Anatomia de uma divisão
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">

        <label for="dividendo">Dividendo</label>
        <input type="number" name="dividendo" id="" required>

        <label for="divisor">Divisor</label>
        <input type="number" name="divisor" id="" required>

        <input type="submit" value="Dividir">
        </form>
           
        <div class="box">

        <?php 

if($dividendo == 0){

}else{
    $resultadoDivisao = intval($dividendo / $divisor);
    $resultadoParaDivisor = $dividendo - $resultadoDivisao * $divisor;

    echo "<p class='dividendo'>$dividendo</p>";
    echo "<p class='divisor'>$divisor</p>";
    echo "<p class='resultadoDivisao'>$resultadoDivisao</p>";
    echo "<p class='resultadoParaDivisor'>$resultadoParaDivisor</p>";
}

?>

        </div>
       
    </section>
</body>
</html>