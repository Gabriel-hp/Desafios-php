<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de imc</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <?php 
        // Capturando os dados do formulario retroalimentado
        $altura = $_GET ['altura'] ?? 25;

        $peso = $_GET ['peso'] ?? 01;

        ?>
    
    <main>
        <h1>Calculadora de imc</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="altura"> Qual a sua altura</label>
            <input type="text" name="altura" id="idaltura" value="<?=$altura?>"step="0.001">

            <label for="peso"> Qual o seu peso?</label>
            <input type="text" name="peso" id="idpeso" value="<?=$peso?>" step="0.001">

            <input type="submit" value="calcular">
        </form>

    </main>


    <main>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

    <h1>Resultado</h1>
 
        <?php 

            $calc = $altura * $altura ;
            $tot= $peso / $calc ;
            echo  "O resultado do seu IMC é $tot";

        ?>

    </main>
</body>
</html>