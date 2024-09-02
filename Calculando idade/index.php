<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 6</title>
    <link rel="stylesheet" href="styles6.css">
</head>
<body>
    <?php 
    // Capturando od dados do formulário retroalimentado
    $atual = date("Y");
    $v1 = $_GET['v1'] ?? 0;
    $v2 =$_GET['v2'] ?? 0;
    
    
    
    ?>
    <main>
        <h1>Calculando sua Idade</h1>
<form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
<label for="v1">Ano atual (Ano que estamos <?=$atual?>)</label>
<input type="number" name="v1" required placeholder="Digite o Ano atual"  min="1900" value="<?=$atual?>">
<label for="v2">Ano que nasceu</label>
<input type="number" name="v2" required placeholder="Digite o Ano que nasceu" min="1900" max="<?=$atual-1?>">
<input type="submit" value="Enviar">


</form>


    </main>
    <section >
<h2>Sua Idade </h2>
<?php 

$somar = $v1 - $v2;

echo"Em $v1 você tera: <strong>$somar anos</strong><p>";
if($somar >=18){
echo"você e de <strong>maior</strong>";
}else{
    echo"você e de <strong>menor</strong>";
}


?>

</section>
</body>
</html>