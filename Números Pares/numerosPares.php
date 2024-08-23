<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Pares</title>
</head>
<body>
    <h1>Números Pares</h1>
    <p>Crie um programa que exibe todos os números pares de 1 a 100.</p>
    <?php 
    $n=1;
    while($n<=100){
        if($n%2==0){
            echo $n."<br>";
        }
        $n++;
    }
    ?>
</body>
</html>