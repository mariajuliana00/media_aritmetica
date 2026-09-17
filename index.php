<?php
$num1 = "";
$num2 = "";
$num3 = "";
$num4 = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = floatval($_POST['num1']);
    $num2 = floatval($_POST['num2']);
    $num3 = floatval($_POST['num3']);
    $num4 = floatval($_POST['num4']);
    $resultado = ($num1 + $num2 + $num3 + $num4) / 4;
}
?>





<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title> Calculando média aritmética</title>
</head>


<body>
    <div>
        <h1>Questão 1</h1>

        <form action="" method="POST">
            <h2>Exercicío 1</h2>
            <h4>Digite quatro números para fazer a média</h4>

            <label for="num1"></label>
            <input type="number" name="num1" id="num1" value="<?= $num1 ?>" placeholder="1° Número" require>
            
            <label for="num2"></label>
            <input type="number" name="num2" id="num2" value="<?= $num2 ?>" placeholder="2° Número" require>
            
            <label for="num3"></label>
            <input type="number" name="num3" id="num3" value="<?= $num3 ?>" placeholder="3° Número" require>
            
            <label for="num4"></label>
            <input type="number" name="num4" id="num4" value="<?= $num4 ?>" placeholder="4° Número" require>
            
            
            <button id="enviar" type="submit"><strong>Calcular</strong></button>
        
        </form>
            <?php
            if (empty($resultado)) {
                echo "<p> Digite um número em todos os campos!! </p>";
            } else {
                echo "<p> O resultado da conta é: <strong> $resultado</strong> </p>";
            }
            ?>



    </div>
</body>

</html>