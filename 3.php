<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3</title>
</head>

<body>
    <form action="# " method="post">
        <p>Insira Raio</p>
        <input type="number" name="raio">
        <p><input type="submit" value="CALCULAR"> </p>

    </form>
</body>

</html>

<?php
if (!empty($_POST['raio'])) {
    $raio = $_POST['raio'];
    $area =  3.14 * ($raio * $raio);
    $perimetro = 2 * 3.14 * $raio;


    echo  "<p>Área foi de : $area</p> <br>";
    echo  "<p>Perímetro foi de : $perimetro</p>";
}else{
    echo "Erro, insira valor";  
}
?>