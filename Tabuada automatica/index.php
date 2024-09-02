<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabuada </title>
<link rel="stylesheet" href="styles5.css">
</head>
<body>
    <main>
<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
   
   Inicio: <input type="number" name="v1" required>
       <br>
   Final: <input type="number" name="v2" value="10" required>
       <br>
       <select name="op">
       <option value="">Selecione</option>
    <option value="somar">Somar</option>
    <option value="sub">Subtração</option>
    <option value="mult">Multiplicação</option>
    <option value="div">Divisão</option>
     
</select>
       <input type="submit" value="Enviar">

   </form>
   </main>
   <section>
    <h1>Tabuada</h1>
   <?php 
     $v1 = $_GET['v1'] ?? 0;
     $v2 = $_GET['v2'] ?? 0;
     $opera=$_GET['op'] ?? '';
     switch($opera) {
        case 'somar':
            for($inicio=1;$inicio <= $v2;$inicio++){
                $resultado = $v1 + $inicio;
                echo"$v1 + $inicio = $resultado <br><br>";
            }
         break;
         case'sub':
            for($inicio=1;$inicio <= $v2;$inicio++){
                $resultado = $v1 - $inicio;
                echo"$v1 - $inicio = $resultado <br><br>";
            }
        break;
        case'mult':
            for($inicio=1;$inicio <= $v2;$inicio++){
                $resultado = $v1 * $inicio;
                echo"$v1 x $inicio = $resultado <br><br>";
            }
        break;
        case'div':
            for($inicio=1;$inicio <= $v2;$inicio++){
                $resultado = $v1 / $inicio;
                echo"$v1 / $inicio =" .number_format($resultado,2,",","."). "<br><br>";
            }
            break;

     }
   
    

    ?>
    </section>
</body>
</html>