<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
    <style>
       img.nota{
        margin: 1px;
        
       }
    </style>
    <link rel="stylesheet" href="styles6.css">
</head>
<body>
<main>
    <?php 
    $calcula=$_GET['caixa'] ?? 0;
   
    ?>
<h1>
   Caixa Eletronico
</h1>

<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
<label for="caixa">Qual valor voce deseja sacar? (R$)<sup>*</sup></label>
<input type="number" name="caixa" id="calcula" require step="5" value="<?=$valor?>">
<p>*Notas disponiveis R$100, R$50, R$10 e R$5</p>
<input type="submit" value="Sacar">

</form>
</main>
<?php 

//calculo 
$valor=$calcula;
$n100 =intdiv($calcula,100); //100
$calcula %= 100;

$n50=intdiv($calcula,50); //50
$calcula %= 50;

$n10=intdiv($calcula,10); //10
$calcula %= 10;

$n5=intdiv($calcula,5); //5
$calcula %= 5;
?>
<section>

<h1>saque de R$<?=number_format($valor,2,",",".")?> realizado</h1>

<ul>
    <li><img src="imagem/nota100.png" alt="nota 100"class="nota">x<?=$n100?></li>
    <li><img src="imagem/nota5.png" alt="nota 50"class="nota"> x<?=$n50?></li>
    <li><img src="imagem/nota10.png" alt="nota 10"class="nota"> x<?=$n10?></li>
    <li><img src="imagem/noat5.png" alt="nota 5"class="nota"> x<?=$n5?></li>



</ul>

</section>
</body>
</html>