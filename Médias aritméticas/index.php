<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
    <link rel="stylesheet" href="styles6.css">
</head>
<body>
    <?php 
    $preco = $_GET['preco']?? 0;
    $reajuste =$_GET['reajuste']?? 0;
    
    ?>
    <main>
<h1>Médias Aritméticas</h1>
<form action="<?=$_SERVER['PHP_SELF'] ?>" method="get" >

<label for="preco">Preço do Produto (R$)</label>
<input type="number" name="preco" id="preco1"  step="0.01" min="0.10" value="<?=$preco?>" required>

<label for="reajuste">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)
</label>
<input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" oninput="mudavalor()" value="<?=$reajuste?>"  >

<input type="submit" value="Reajustar">
</form>

<br><br>
    </main>

    <section>
<h1>Resultado do Reajuste</h1>

<?php 


$valoraumento =  $preco + ($preco * $reajuste)/100;



echo"<p>O produto que custava R$" .number_format($preco,2,",",".").", com<strong> $reajuste% de aumento</strong> vai passar a custar 
 <strong>R$".number_format($valoraumento,2,",","."). " </strong>a partir de agora.</p>";

?>
    </section>

    <script>
function mudavalor() {    
p.innerText = reajuste.value;
}
mudavalor();
    </script>
</body>
</html>