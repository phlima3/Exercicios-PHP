<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2</title>
</head>

<body>
    <form action="# " method="post">
        <p>Insira Lado</p>
        <input type="number" name="lado">
        <p><input type="submit" value="CALCULAR"> </p>

    </form>
</body>

</html>

<?php
if (!empty($_POST['lado'])) {
    $lado = $_POST['lado'];
    $area =  $lado * $lado;
    $perimetro = $lado * 4;


    echo  "<p>Área foi de : $area</p> <br>";
    echo  "<p>Perímetro foi de : $perimetro</p>";
}else{
    echo "Erro, insira valor";  
}
?>