<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles6.css">
   
</head>
<body>
    <main>
<br>
<?php 
$num1= $_GET['num1'] ?? 0;
$num2 =$_GET['num2'] ?? 0;
$ope = $_GET['opera'] ?? 0;
$result = 0;

switch($ope) {

    case'somar':
    $result = $num1 + $num2;
    break;

    case'sub':
    $result = $num1 - $num2;
    break;
   
    case'mult':
    $result = $num1 * $num2;
    break;

    case'div':
    $result = $num1 / $num2;
     break;

}

echo"O resultado e <strong>".number_format( $result,2,",",".")."</strong>";






?>
<br>
<button onclick="javascript:window.location.href='index.html'">Voltar</button>

    </main>
</body>
</html>