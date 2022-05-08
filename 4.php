<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4</title>
</head>

<body>
    <form action="# " method="post">
        <p>Insira Lado 1</p>
        <input type="number" name="lado1">
        <p>Insira Lado 2</p>
        <input type="number" name="lado2">
        <p>Insira Lado 3</p>
        <input type="number" name="lado3">
        <p><input type="submit" value="CALCULAR"> </p>

    </form>
</body>

</html>

<?php
if (!empty($_POST['lado1']) && !empty($_POST['lado2']) && !empty($_POST['lado3'])) {
    $lado1 = $_POST['lado1'];
    $lado2 = $_POST['lado2'];
    $lado3 = $_POST['lado3'];


    $perimetro = $lado1 + $lado2 + $lado3;

    echo  "<p>Perímetro foi de : $perimetro</p>";
}
else{
    echo "Erro, insira valor";  
}
?>