<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8</title>
</head>

<body>
    <form action="# " method="post">
        <p>Insira a temperatura em Fahrenheit</p>
        <input type="number" name="temp">

        <p><input type="submit" value="CALCULAR"> </p>

    </form>
</body>

</html>

<?php
if (!empty($_POST['temp'])) {
    $temp = $_POST['temp'];

    $celcius =  ($temp - 32) /1.8;

   
    echo  "<p>A temperatura converida em Celcius é $celcius C°</p>";
} else {
    echo "Erro, insira valor";
}
?>