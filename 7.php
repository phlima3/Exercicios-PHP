<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7</title>
</head>

<body>
    <form action="# " method="post">
        <p>Insira sua idade</p>
        <input type="number" name="idade">

        <p><input type="submit" value="CALCULAR"> </p>

    </form>
</body>

</html>

<?php
if (!empty($_POST['idade'])) {
    $idade = $_POST['idade'];

    $dias = $idade * 365;
    $meses = $idade * 48;

    echo  "<p>Você já viveu $dias Dias!</p>";
    echo  "<p>Você já viveu $meses Meses!</p>";
} else {
    echo "Erro, insira valor";
}
?>