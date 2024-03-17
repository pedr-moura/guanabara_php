<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img{
            width: 130px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Desafio 13</h1>
    </header>
    <?php 
    $n1 = $_POST['n1'] ?? 0;
    if($n1 == 1){
        $n1 = 0;
    }
    if($n1 == 3){
        $n1 = 0;
    }
    ?>
    <section>
        Caixa eletronico
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">

    <label for="n1">Quanto quer sacar? (R$)</label>
    <input type="number" name="n1" id="" placeholder="" value="<?php echo $n1 ?>" required>

    <input type="submit" value="Analisar 🧐">
    <br>
    </form>  
    <br><br>
    <section>
        <?php 

        
        $cem = intval($n1 / 100);
    
        $cinquenta = intval($n1 / 50)  - ($cem * 2);

        $dez = intval($n1 / 10)  - ($cinquenta * 5) - ($cem * 10);

        $cinco = intval($n1 / 5)  - ($dez * 2) - ($cinquenta * 10) - ($cem * 20);
        
        $dois = intval($n1 / 2)  - ($cinco * 2) - ($dez * 5)- ($cinquenta * 25) - ($cem * 50);

        $total = ($cem * 100) + ($cinquenta * 50) + ($dez * 10) + ($cinco * 5) + ($dois * 2);

        if((($cem * 100) + ($cinquenta * 50) + ($dez * 10) + ($cinco * 5) + ($dois * 2)) > $n1){
            $cinco = 0;
            $dois = intval($n1 / 2)  - ($cinco * 2) - ($dez * 5)- ($cinquenta * 25) - ($cem * 50);
        }

        if((($cem * 100) + ($cinquenta * 50) + ($dez * 10) + ($cinco * 5) + ($dois * 2)) < $n1){
            if(intval($dez) == 0){$dez = 0;}{$dez = $dez - 1;}
            $cinco = intval($n1 / 5)  - ($dez * 2) - ($cinquenta * 10) - ($cem * 20);
            $cinco = $cinco - 1;
            $dois = intval($n1 / 2)  - ($cinco * 2) - ($dez * 5)- ($cinquenta * 25) - ($cem * 50);
        }

        if($dez == -1){
            $dez = 0;
        }
       echo "o valor sacado é: R$<b>".number_format($n1, 2,',','.')."</b>";
if($n1 == 0){}{
    

    echo "<ul>
            <li> <img src='img/100.jpg'> ".intval($cem)."x   </li>
            <li> <img src='img/50.jpeg'> ".intval($cinquenta)."x </li> 
            <li> <img src='img/10.png'> ".intval($dez)."x </li> 
            <li> <img src='img/5.png'> ".intval($cinco)."x </li> 
            <li> <img src='img/2.png'> ".intval($dois)."x</li> 
         </ul>";
}
        ?>
    </section>

    
</body>
</html>