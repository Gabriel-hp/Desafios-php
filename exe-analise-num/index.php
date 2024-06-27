<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando os dados do formulario retroalimentado
        $numero = $_GET ['numero'] ?? 0;

    ?>
    <main>
        <h1>Informe um número</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" value="<?=$numero?>">

            <input type="submit" value="Calcular raizes">
        </form>
    </main>

    <section>
        <h2>Resultado final</h2>
        <?php 
            echo  "Analisando o número $numero temos: </br>";
           // para receber o valor da raiz quadrada
            $raiz['sqrt'][$numero] = sqrt($numero);
             $rs = $raiz['sqrt'][$numero];  
             echo  "a sua raiz quadrada é $rs </br>";
             $r_c = pow($numero,1.0/3.0);
             echo  "a sua raiz quadrada é $r_c";

        ?>
    </section>
</body>
</html>