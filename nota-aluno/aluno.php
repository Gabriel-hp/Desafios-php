<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medias de notas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <?php 
        // Capturando os dados do formulario retroalimentado
        $nota1 = $_GET ['nota1'] ?? 5;
        $nota2 = $_GET ['nota2'] ?? 5;
        $nota3 = $_GET ['nota3'] ?? 5;
        $nota4 = $_GET ['nota4'] ?? 5;


        ?>
    
    <main>
        <h1>Medias de notas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="altura"> Qual a nota 1</label>
            <input type="text" name="nota1" value="<?=$nota1?>"step="0.001">

            <label for="altura"> Qual a nota 2</label>
            <input type="text" name="nota2" value="<?=$nota2?>"step="0.001">

            <label for="altura"> Qual a nota 3</label>
            <input type="text" name="nota3" value="<?=$nota3?>"step="0.001">

            <label for="altura"> Qual a nota 4</label>
            <input type="text" name="nota4" value="<?=$nota4?>"step="0.001">

            <input type="submit" value="calcular notas">
        </form>

    </main>


    <main>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

    <h1>Resultado</h1>
 
        <?php 

            $calc = $nota1 + $nota2 + $nota3 + $nota4;
            $tot = $calc / 4;

            echo "A média deste aluno é $tot<br>";
            
        ?>

    </main>
</body>
</html>