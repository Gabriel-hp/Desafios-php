<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<header>
        
    </header>
    <main>
    <h1>Resultado Final</h1>
        <?php 
            $cotação = 5.17;
            $real = $_GET["real"] ?? "0";
            $dollar = $real / $cotação;
            $dollar = number_format($dollar, 2, '.', '');
           

            echo"<p>Seus: $real vale equivalente a: U$: $dollar </p>";
            
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para o inicio</a></p>
    </main>
</body>
</html>