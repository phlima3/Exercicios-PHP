<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5</title>
</head>

<body>
    <form action="# " method="post">
        <p>Insira numero inteiro</p>
        <input type="number" name="numero">

        <p><input type="submit" value="CALCULAR"> </p>

    </form>
</body>

</html>

<?php
if (!empty($_POST['numero'])) {
    $num = $_POST['numero'];

    $sucessor = $num + 1;



    echo  "<p>O sucessor de $num é $sucessor</p>";
}else{
    echo "Erro, insira valor";  
}
?>