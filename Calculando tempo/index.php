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
    <?php 
    $calcula=$_GET['calcula'] ?? 0;
    
    ?>
<h1>
   Calculadora de Tempo
</h1>

<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
<label for="calcula">Qual é o total de Segundos?</label>
<input type="number" name="calcula" id="calcula" step="1">
<input type="submit" value="Calcular">


</form>
<?php 
//caluclos
$semana =7*24*3600;
$calcusemana =intdiv( $calcula,$semana);

$dias =intdiv($calcula,86400)%7;

$horas =intdiv($calcula,3600)%24;

$minutos=intdiv($calcula,60)%60;

$segundos=$calcula%60;

?>


</main>
<section>
    <h1>Totalizando tudo</h1>
<?php 
echo"Analisando o valor que voce digitou,<strong>".number_format($calcula,0,",",".")." segundos</strong> equivalem<br> a um total de: ";


echo"<ul><li>$calcusemana semanas</li>
<li>$dias dias</li>
<li>$horas horas</li>
<li>$minutos minutos</li>
<li>$segundos segundos</li>

</ul>";



?>
</section>
</body>
</html>