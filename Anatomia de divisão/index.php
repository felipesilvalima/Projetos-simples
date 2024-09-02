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

$dv1 = $_GET['div1'] ?? 0;

$dv2 = $_GET['div2'] ?? 1;

?>
<main>


    <h1>Anatomia de uma divisão</h1>
  <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">

        <label for="dividendo">Dividendo</label>
        <input type="number" name="div1" required>
        <label for="divisor">Divisor</label>
        <input type="number" name="div2" required>
        <input type="submit" value="Analisar">

   </form>
<br><br>

</main>
<section>
<h2>Estrutura da divisão</h2>
<?php 
    //calculo
    $quociente = intdiv ($dv1,$dv2);
    $resto =$dv1 % $dv2;



     
    ?>

    <table class="divisao">

        <tr>
            <td><?=$dv1?> </td>
           <td><?=$dv2?> </td>
        </tr>
        <tr>
            <td><?=$resto?> </td>
            <td><?=$quociente?> </td>
        </tr>
    </table>
</section>


</body>
</html>