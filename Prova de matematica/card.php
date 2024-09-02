<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova</title>
    <link rel="stylesheet" href="styles6.css">
</head>
<body>
    <main>

<?php 
// Resposta 1 ---------------------------------------------------------------
$resposta1= $_GET['resposta1'] ?? 0;



if($resposta1 == 50){
   echo"1<sup>0</sup> Respota esta Correta: &#9989;";
}else{
    echo"1<sup>0</sup> Resposta esta Incorreta: &#10060;";
}

?>

<br><br>

<?php 
// Resposta 2 ----------------------------------------------------------------------
$resposta2= $_GET['resposta2'] ?? 0;



if($resposta2 == 20){
   echo"2<sup>0</sup> Respota esta Correta: &#9989;";
}else{
    echo"2<sup>0</sup> Resposta esta Incorreta: &#10060;";
}


?>
<br><br>
<?php 
$resposta3 =$_GET['resposta3'] ?? 0;
 
if($resposta3 == 4 ){
    echo"3<sup>0</sup> Respota esta Correta: &#9989;";
}else{
    echo"3<sup>0</sup> Resposta esta Incorreta: &#10060;";
}






?>
<button onclick="javascript:window.location.href='index.html'">Voltar</button>




    </main>
</body>
</html>