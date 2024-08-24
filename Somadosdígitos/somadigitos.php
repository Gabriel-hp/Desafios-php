<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Soma dos Dígitos</h1>
    <p>Desenvolva um código que, dado um número inteiro, some todos os dígitos desse número.</p>
    <?php 
    
        $num = 123;

        $array = str_split($num);
        
        echo "soma(aray) = ".array_sum($array)."\n";

        print_r($array);    


    ?>
</body>
</html>