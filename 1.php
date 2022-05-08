
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
</head>

<body>
    <form action="# " method="post">
        <p>Insira Largura</p>
        <input type="number" name="largura">
        <p>Insira Altura</p>
        <input type="number" name="altura">
        <p><input type="submit" value="CALCULAR"> </p>
       
    </form>
</body>

</html>

<?php
    if(!empty($_POST['largura']) && !empty($_POST['altura'])){
        $largura = $_POST['largura'];
        $altura = $_POST['altura'];
        $area = $largura * $altura;
        $perimetro = 2* ($largura + $altura);

        
        echo  "<p>Área foi de : $area</p> <br>";
        echo  "<p>Perímetro foi de : $perimetro</p>";

    }else{
        echo "Erro, insira valor";  
    }
?>


