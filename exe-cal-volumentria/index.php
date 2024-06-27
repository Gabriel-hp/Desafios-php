<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora de volumetria</title>
</head>
<body>
<?php 
        // Capturando os dados do formulario retroalimentado
        $comprimento = $_GET ['comprimento'] ?? 40;

        $largura = $_GET ['largura'] ?? 20;

        $litros = $_GET ['litros'] ?? 40;

        ?>
    
    <main>
        <h1>Calcular Dimensões de Caixa</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="comprimento"> Qual o comprimento?</label>
            <input type="text" name="comprimento" id="idcomprimento" value="<?=$comprimento?>"step="0.001">

            <label for="largura"> Qual a largura?</label>
            <input type="text" name="largura" id="idlargura" value="<?=$largura?>" step="0.001">

            <label for="litros"> Quantos litros necessario?</label>
            <input type="text" name="litros" id="idlitros" value="<?=$litros?>" step="0.001">

            <input type="submit" value="calcular">
        </form>

    </main>


    <main>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

    <h1>Resultado</h1>
 
        <?php 
            $litroCubo = $litros * 1000 ;
            $resultado = $comprimento * $largura;
            $tot = $litroCubo / $resultado;
            $tot = number_format($tot, 2, '.', '');

            echo "A altura necessaria para a sua caixa é $tot<br>";

        ?>

    </main>
</body>
</html>