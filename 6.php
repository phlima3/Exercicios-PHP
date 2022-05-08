<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6</title>
</head>

<body>
    <form action="# " method="post">
        <p>Insira numero inteiro - 1</p>
        <input type="number" name="num1">
        <p>Insira numero inteiro - 2</p>
        <input type="number" name="num2">

        <p><input type="submit" value="CALCULAR"> </p>

    </form>
</body>

</html>

<?php
if (!empty($_POST['num1']) & (!empty($_POST['num2']))) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];


    $quociente = $num1 / $num2;
    $resto = $num1 & $num2;

    echo  "<p>O quociente da divisão é: $quociente</p>";
    echo  "<p>O resto da divisão é: $resto</p>";
} else {
    echo "Erro, insira valor";
}
?>