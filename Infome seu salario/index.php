<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
    <link rel="stylesheet" href="styles6.css">
</head>
<body>
    <main>
<h1>Infome seu salário</h1>
    <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">

<label for="salario">Salário</label>
<input type="number" name="salario" required step="0.01">
<input type="submit" value="Calcular">
<br>
Considerando o salário minimo de <strong>R$ 1.412,00</strong>
</form>
<br><br>
    </main>

    <section>
<h1>Resultado final</h1>

    <?php 
$salario = $_GET['salario'] ?? 0;

//calculo
$salariomin = 1412;
$calculo = intdiv ( $salario, $salariomin);
$resto =$salario % $salariomin;

echo"Quem recebe um sário de R$" .number_format($salario,2,",","."). " <strong>$calculo salário minimos</strong><br> + R$ ".number_format($resto,2,",",".");

?>


    </section>
</body>
</html>